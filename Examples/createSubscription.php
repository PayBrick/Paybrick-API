<?php
require_once('../../Paybrick/http_api_request.php');

// Create subscription
$request = array(
    'action' => 'createSubscription', 
    'create_subscription_name' => '',   
	'create_subscription_price' => '0.00', 
	'create_subscription_setupfee' => '0.00',
	'create_subscription_type' => '0', // options: 0 = default, 1 = metered, 2= one-time payment
	'create_subscription_trial_nr' => '0', // number of days/months (0 = no trial )
	'create_subscription_trial_type' => '0', // 0 = month(s), 1 = day(s)
	'create_subscription_recurring_nr' => '0',  // number of days/months (0 = not recurring )
	'create_subscription_recurring_type' => '0', // 0 = month(s), 1 = day(s)
	'create_subscription_recurring_life_nr' => '0', // number of days/months (0 = no recurring duration )
	'create_subscription_recurring_life_type' => '0' // 0 = month(s), 1 = day(s)
 );
 
// create customer & return a customer ID
$Paybrick_result = http_api_request($request);

if($Paybrick_result->{'error_message'} == '') {
	 echo $Paybrick_result->{'subscription_id'};
	}
else
{
echo $Paybrick_result->{'error_message'};
}

?>