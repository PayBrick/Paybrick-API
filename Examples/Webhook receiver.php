<?php
/*
Paybrick PHP Webhook Receiver
Author: Ralph van der Sanden

INTRO:
1. A webhook has been sent with JSON data.
2. This script reads the JSON data.
3. By looking at the event ($action) you'll know which values to expect (please see the "Important" section below) and what to do with it.
4. Paste your code to process/store the webhook data
5. If processing is succesfull then echo [webhook_received] to let us know you received and processed the webhook.

Important:
To see which variables are available for a specific event go to:
https://www.paybrick.com/docs/webhooks

*/

require_once("../../Paybrick/http_api_request.php");

// Load posted json data:
$json = file_get_contents('php://input');
$json = json_decode($json, TRUE);

// Basic check for merchant and shop_id ("brick"):
if(is_numeric($json['merchant_id']) && is_numeric($json['site_id']))

	{
	
	// Define vars:
	$merchant_id = $json['merchant_id'];
	$shop_id = $json['site_id'];
	$customer_id = $json['customer_id'];
	$order_id = $json['order_id'];
	$subscription_id = $json['subscription_id'];
	$transaction_id = $json['transaction_id'];
	$action = $json['action'];
	$status = $json['status'];
	$amount = $json['amount'];
	$amount_exvat = $json['amount_exvat'];
	$amount_vat = $json['amount_vat'];
	$amount_inclvat = $json['amount_inclvat'];
	$first_name = $json['first_name'];
	$last_name = $json['last_name'];
	$email = $json['email'];
	$country = $json['country'];
	$company = $json['company'];
	$address_line1 = $json['address_line1'];
	$address_line2 = $json['address_line2'];
	$zipcode = $json['zipcode'];
	$city = $json['city'];
	$state = $json['stateprovince'];
	$vatnumber = $json['vatnumber'];
	$products = $json['products'];
	$gateway = $json['gateway'];
	$paymentmethod = $json['payment_method'];
	$refund = $json['refund'];
	$proration = $json['proration'];
	$previous_balance = $json['previous_balance'];
	$current_balance = $json['current_balance'];
	$ip = $json['ip'];
	
	// Extract products:
	if(isset($products)) {
	$product_list = explode(",",$products); // 1000,1001,1002 etc.
	
	// You can use a for loop to cycle through the products
	}
	
	
	// action IF statements:
	if($json['action'] == 'signup_success') {

		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database, activate/deactivate products on your end etc.
		
		}
	
	if($json['action'] == 'signup_failure') {
		
		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database, activate/deactivate products on your end etc.
		
		}
	
	if($json['action'] == 'payment_success') {
		
		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database.
		
		}
	
	if($json['action'] == 'payment_failure') {
	
		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database.
		
		}
	
	if($json['action'] == 'cart_abandonment') {
	
		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database.
		
		}
	
	if($json['action'] == 'billing_date_change') {
	
		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database, change products on your end etc.
		
		}
		
	if($json['action'] == 'customer_details_change') {
	
		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database, change products on your end etc.
		
		}
	
	if($json['action'] == 'sent_billing_email') {
	
		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database.
		
		}
	
	if($json['action'] == 'upcoming_renewals') {
		
		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database.
		
		}
	
	if($json['action'] == 'renewal_success') {
	
		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database, (re)activate products on your end etc.
		
		}
	
	if($json['action'] == 'renewal_failure') {
	
		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database, deactivate products on your end etc.
		
		}
	
	if($json['action'] == 'subscription_change') {
		
		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database, change products on your end etc.
		
		}
	
	if($json['action'] == 'trial_end') {
		
		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database, deactivate products on your end etc.
		
		}
	
	if($json['action'] == 'proration') {
		
		// --------------------------------------------------------------------------------------
		// Paste your code to process the webhook data here.
		// Example: save the data to your database.
		
		}
	
	
	// [webhook_received] is a signal for us that you received and processed the webhook
	// Only echo when everything on your end is processed.
	// if we don't receive this signal we'll try 5 more times at larger intervals.

	echo '[webhook_received]';
	}
?>
