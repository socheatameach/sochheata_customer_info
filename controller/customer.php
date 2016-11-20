<?php

require('../dbcon.php');
require('../model/build-sql.php');
require('../model/execute_sql.php');
require('services.php');
require('property.php');
include('../beauti_dump.php');

$_POST['user_id'] = 1;
$service = "";
$property = "";

($_POST['other_property']);



if(isset($_POST['submit'])){
	$GLOBALS['service'] = $_POST['service'];
	$GLOBALS['property'] = $_POST['property'];
	if ($_POST['submit'] == "add"){
		add_customer($conn);
		$conn->close();
	}else if ($_POST['submit'] == "update"){
		update_customer_by_id($conn);
		$conn->close();
	}
}else if(isset($_GET['id'])) {
	delete_customer_by_id($conn, $_GET['id']);
	$conn->close();
}else {
//	header( 'Location: http://localhost/sochheata_customer_info/views/add_customer.php');
	echo "not mach";
}


/**
 * @param $conn
 */
function add_customer($conn) {

	if($_POST['other_property']){
		array_push($GLOBALS['property'], $_POST['other_property']);
	}
	unset($_POST['service'], $_POST['property'], $_POST['date'], $_POST['other_property'], $_POST['submit']);
	$customer_sql = build_sql_insert("customer", $_POST);
	execute_sql($customer_sql, $conn);

	$last_customer_id = $conn->insert_id;
	add_service($conn, $GLOBALS['service'], $last_customer_id);
	add_property($conn, $GLOBALS['property'], $last_customer_id);
	header( "Location: http://localhost/sochheata_customer_info/views/list_customers.php");
}


/**
 * @param $conn
 */
function update_customer_by_id($conn) {

	$customer_id = $_POST['id'];
	$where = "id = $customer_id";

	if($_POST['other_property']){
		array_push($GLOBALS['property'], $_POST['other_property']);
	}
	unset($_POST['service'], $_POST['property'], $_POST['date'], $_POST['id'],$_POST['other_property'], $_POST['submit']);
	$customer_sql = build_sql_update("customer", $_POST, $where);
	execute_sql($customer_sql, $conn);

	delete_service($conn, $customer_id);
	delete_property($conn, $customer_id);

	add_service($conn, $GLOBALS['service'], $customer_id);
	add_property($conn, $GLOBALS['property'], $customer_id);

}


/**
 * @param $conn
 * @param $customer_id
 */
function delete_customer_by_id($conn, $customer_id) {

	$where = "id = $customer_id";
	delete_service($conn, $customer_id);
	delete_property($conn, $customer_id);
	$delete_customer_sql = build_sql_delete_by_id("customer", $where) ;
	execute_sql($delete_customer_sql, $conn);
	header( "Location: http://localhost/sochheata_customer_info/views/list_customers.php");
}
