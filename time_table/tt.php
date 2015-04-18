<?php
	$regno ="12mse0363";
	$dob="01101994";
	$url  ="https://vit-login.herokuapp.com/timetable?reg_no=".$regno."&dob=".$dob;
	//Open connection
	$ch = curl_init();
	//Set the url
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
	//Execute CURL
	$result = curl_exec($ch);
	if ($result == FALSE) 
	{
	   //"Curl failed with error: " . curl_error($ch);
	   echo "01: Curl Error";
	   return;
	}
	$json = json_decode($result,true);
	if (is_null($json)) 
	{
	    //"Json decoding failed with error: ". json_last_error_msg();
		echo "02: JSON Decoding Error";
		return;
	}
	
	$class_details=json_decode($result,true);
	
	//Close connection
	curl_close($ch);
	
	if(!is_array($class_details))
	{
		echo "03: Null Array Error";
		return;
	}
	else
	{
		print_r($class_details["timetable"]);
	}
?>