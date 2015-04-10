<?php
require_once('../../Paybrick/http_api_request.php');

// Get customer
$request = array(
    "action" => 'getCustomer', 
    "customer_id" => ''
 );

$Paybrick_result = http_api_request($request);
if($Paybrick_result->{'error_message'} == '') {
	
	/* Returns:
	
	$Paybrick_result->{'customer_id'};
	$Paybrick_result->{'customer_firstname'};
	$Paybrick_result->{'customer_lastname'};
	$Paybrick_result->{'customer_company'};
	$Paybrick_result->{'customer_address_line1'};
	$Paybrick_result->{'customer_address_line2'};
	$Paybrick_result->{'customer_zipcode'};
	$Paybrick_result->{'customer_email'}; 
	$Paybrick_result->{'customer_phone'}; 
	$Paybrick_result->{'customer_registration_date'}; 
	$Paybrick_result->{'customer_totalrevenue'};  // ex. taxes
	$Paybrick_result->{'customer_balance'};
	$Paybrick_result->{'customer_status'}; // 0 = prospect, 1 = customer, 2 = lost/cancelled
	$Paybrick_result->{'customer_city'}; 
	$Paybrick_result->{'customer_stateprovince'}; 
	$Paybrick_result->{'customer_country'}; 
	$Paybrick_result->{'customer_vatnumber'}; 
	$Paybrick_result->{'customer_language'}; 
	$Paybrick_result->{'customer_notes'}; 
	$Paybrick_result->{'customer_ip'};
	*/
	
	}
	
else
{
echo $Paybrick_result->{'error_message'};
}
?>
