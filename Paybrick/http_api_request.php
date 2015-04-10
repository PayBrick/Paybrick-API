<?php

if (!function_exists('curl_init')) {
  throw new Exception('PayBrick needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('PayBrick needs the JSON PHP extension.');
}

// http_api_request -----------------------------------------------------
function http_api_request($request) {

try {

	// API keys
	$api_site_id = ''; // site id to connect with
	$api_secret_key = ''; // your secret key
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://www.paybrick.com/api/?v=2.8");
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,3);
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
	curl_setopt($ch, CURLOPT_USERPWD, "$api_site_id:$api_secret_key");   
	curl_setopt($ch, CURLOPT_POST,count($request));
	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($request));
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 
	$result = curl_exec($ch);
	
	if($result === false) {
	   throw new Exception(curl_error($ch));
	   }
	else{
	    return json_decode($result);
	}

	curl_close($ch);
	}
	
catch (Exception $e) {
 	return '{"error_message":'.$e->getMessage().'}';
 	}

}
?>