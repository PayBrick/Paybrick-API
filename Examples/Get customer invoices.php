<?php
require_once('../../Paybrick/http_api_request.php');

// Get customer invoice list
$request = array(
    'action' => 'getCustomerInvoices', 
    'customer_id' => '',
    'num_records' => '10', // number of invoices per page, max. 50
    'page' => '1' // the page you want to fetch
 );

$Paybrick_result = http_api_request($request);
if($Paybrick_result->{'error_message'} == '') {

   foreach($Paybrick_result as $invoice){
    
    
    /* Returns:
    
    $invoice->id;
    $invoice->order_id;
    $invoice->transaction_id;
    $invoice->pdf_link; // a url that links to the PDF file
    $invoice->prefix; // invoice prefix (optional)
    $invoice->paid_on; // date format: yyyy-mm-dd, is 0000-00-00 when no date is set
    $invoice->status; // 0 = open, 1= paid, 2 = late
    $invoice->is_credit; // 0 = no credit invoice, 1 = this is a credit invoice
    $invoice->amount_extaxes; // decimal, e.g. 1.95
    $invoice->amount_taxes; // decimal, e.g. 1.95
    $invoice->amount; // invoice amount incl. taxes, decimal, e.g. 1.95
    $invoice->vatpercentage;
    $invoice->name;
    $invoice->attn; // to the attention of
    $invoice->address_line1;
    $invoice->address_line2; // optional
    $invoice->zipcode;
    $invoice->city;
    $invoice->stateprovince;
    $invoice->country; // 2 letters
    $invoice->vatnumber; // incl. country code prefix
    $invoice->language; // 2 letters
    $invoice->payment_method;
    */
    
	}
}
else
{
// no invoices were found or page number is too high.
echo $Paybrick_result->{'error_message'};
}

?>
