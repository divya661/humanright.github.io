<?php
/**
 * Copyright 2017 Michael Lucy, 3V Business Solutions
 *
 * Website: https://3vbiz.com/
 */
	require  'src/medoo.php';
	 
	// Using Medoo namespace
	use Medoo\Medoo;
	 
	$database = new Medoo([
		// required
		'database_type' => 'mysql',
		'database_name' => 'humanright',
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
	 
		// [optional]
		//'charset' => 'utf8',
		//'port' => 3306,
	 
		// [optional] Table prefix
		//'prefix' => 'PREFIX_',
	 
		// [optional] Enable logging (Logging is disabled by default for better performance)
		'logging' => true,
	 
		// [optional] MySQL socket (shouldn't be used with server and port)
		'socket' => '/tmp/mysql.sock',
	 
		// [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
		'option' => [
			PDO::ATTR_CASE => PDO::CASE_NATURAL
		],
	 
		// [optional] Medoo will execute those commands after connected to the database for initialization
		'command' => [
			'SET SQL_MODE=ANSI_QUOTES'
		]
	]);
	
	$messenger_id = $_GET['messenger_user_id'];
	$first_name = $_GET['first_name'];
	$last_name = $_GET['last_name']; 
	$gender = $_GET['gender'];
	$user_type = $_GET['user_type'];
	$source = $_GET['biz_name'];
	$email = $_GET['email_address'];
	$phone = $_GET['phone_number'];
	$registration_date = date("Y-m-d");
	
	//Switches for testing
	//echo "ID: ".$messenger_id."</br>";
	//echo "First Name: ".$first_name."</br>";
	//echo "Last Name: ".$last_name."</br>";
	//echo "Gender: ".$gender."</br>";
	//echo "Biz Name: ".$source."</br>";
	//echo "Email: ".$email."</br>";
	//echo "Phone: ".$phone."</br>";
	
	$database->insert("users", [
		"messenger_id" => $messenger_id,
		"first_name" => $first_name,
		"last_name" => $last_name,
		"gender" => $gender,
		"user_type" => $user_type,
		"source" => $source,
		"email_address" => $email,
		"phone_number" => $phone,
		"registration_date" => $registration_date
	]);

?>