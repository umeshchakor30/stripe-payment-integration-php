# stripe-payment-integration-php
First, register for a Stripe account and then set up an account name on the Stripe Dashboard. You can always return to this Account Settings page to edit your account name later.

1) Then install the libraries for access to the Stripe API from your application: 
composer require stripe/stripe-php

2) Redirect your customer to Stripe: Add a checkout button to your website that calls a server-side endpoint (File is checkout.html)

3) A Checkout Session is the programmatic representation of what your customer sees when they’re redirected to the payment form. You can configure it with options such as:
You also need to specify success_url, a page on your website that Checkout returns your customer to after they complete the payment. You can optionally provide cancel_url, a page on your website that Checkout returns your customer to if they cancel the payment process.
(File is create-checkout-session.php)

4) Show a success or error page: (File is success.html)
