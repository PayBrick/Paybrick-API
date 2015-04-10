<?php
require_once('../../Paybrick/http_api_request.php');

// Get customer transaction list
$request = array(
    'action' => 'getCustomerTransactions', 
    'customer_id' => '',
    'num_records' => '10', // number of transactions per page, max. 50
    'page' => '1' // the page you want to fetch
 );

$Paybrick_result = http_api_request($request);
if($Paybrick_result->{'error_message'} == '') {

   foreach($Paybrick_result as $transaction){
    
    /* Returns:
    
    $transaction->id; // transaction id
    $transaction->order_id;
    $transaction->date; // date format: yyyy-mm-dd
    $transaction->time;
    $transaction->status; // 0 = open, 1= paid, 2 = late
    $transaction->amount_extaxes; // decimal, e.g. 1.95
    $transaction->amount_taxes; // decimal, e.g. 1.95
    $transaction->amount; // invoice amount incl. taxes, decimal, e.g. 1.95
    $transaction->vatpercentage;
    $transaction->reversed_vat; // 0 = no, 1 = yes
    $transaction->currency; // 3 letters
    $transaction->gateway;
    $transaction->payment_method;
    */
    
	}
}
else
{
// no invoices were found or page number is too high.
echo $Paybrick_result->{'error_message'};
}

?>