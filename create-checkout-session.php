<?php

require 'vendor/autoload.php';

$stripe = new \Stripe\StripeClient(
    'sk_test_51LcA3VSAhyaQe7hIhLZoOR2k3Iu4NsHIZDhjkvnAceudgDZcedtc0AaSrqHqOUwgh3d3TVLkdkRnWGIdfgNYzEyS00lesnNVOE'
);

$checkout_session = $stripe->checkout->sessions->create([
    'line_items' => [[
        'price_data' => [
            'currency' => 'inr',
            'product_data' => [
                'name' => 'T-shirt',
            ],
            'unit_amount' => 4000,
        ],
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'http://localhost/stripe/success.html',
    'cancel_url' => 'http://localhost/stripe/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
