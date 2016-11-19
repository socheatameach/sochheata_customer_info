<?php

include('../dbcon.php');
include('../model/build-sql.php');
include('../model/execute_sql.php');
include('../beauti_dump.php');

if (!isset($_POST['submit'])) header( 'Location: http://localhost/socheata_example/views/add-customer.html' );

if ($_POST['submit'] == "add"){
	add_customer($conn);
}

if ($_POST['submit'] == "update"){
	update_customer($conn);
}

/**
 * @param $conn
 */
function update_customer($conn) {
	$service = $_POST['service'];
	$property = $_POST['property'];

	$where = "id = ".$_POST['id'];
	unset($_POST['service'], $_POST['property'], $_POST['date'], $_POST['id'], $_POST['submit']);

	$customer_sql = build_sql_update("customer", $_POST, $where);
//	execute_sql($customer_sql, $conn);

	$service_sql = build_sql_update("service", $service, $where, "service_name");
//	execute_sql($service_sql, $conn);
	beauti_dump($service_sql);

	$property_sql = build_sql_update("property", $property, $where, "property_name");
//	execute_sql($property_sql, $conn);

	beauti_dump($property_sql);
	$conn->close();
}

/**
 * @param $conn
 */
function add_customer($conn) {
	$service = $_POST['service'];
	$property = $_POST['property'];

// if have login you can get from session
	$_POST['user_id'] = 1;
	unset($_POST['service'], $_POST['property'], $_POST['date'], $_POST['submit']);

	$customer_sql = build_sql_insert("customer", $_POST);
	execute_sql($customer_sql, $conn);
	$last_id = $conn->insert_id;

	$service_cols = array("service_name", "customer_id");
	$service_sql = build_sql_insert("service", $service, $service_cols, $last_id);
	execute_sql($service_sql, $conn);

	$property_cols = array("property_name", "customer_id");
	$property_sql = build_sql_insert("property", $property, $property_cols, $last_id);
	execute_sql($property_sql, $conn);

	$conn->close();
}