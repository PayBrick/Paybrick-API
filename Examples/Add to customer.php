<?php
require_once('../../Paybrick/http_api_request.php');

// add subscriptions and coupons to customers
$request = array(
    "action" => 'addToCustomer', 
    "customer_id" => '',
    "add_subscription" => '', // subscription id, multiple subscriptions is possible by using a comma (e.g. 1111,2222,3333)
    "add_coupon" => '' // optional, add a coupon id to this customer, only 1 coupon allowed
 );

$Paybrick_result = http_api_request($request);
if($Paybrick_result->{'error_message'} == '') {

// success

}
else
{
// no invoices were found or page number is too high.
echo $Paybrick_result->{'error_message'};
}

?>
