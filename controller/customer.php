<?php

require('../dbcon.php');
require('../model/build-sql.php');
require('../model/execute_sql.php');
require('services.php');
require('property.php');

include('../beauti_dump.php');


if (!isset($_POST['submit'])) header( 'Location: http://localhost/sochheata_customer_info/views/add-customer.htmls' );

$_POST['user_id'] = 1;
$service = $_POST['service'];
$property = $_POST['property'];

if ($_POST['submit'] == "add"){
	add_customer($conn);
	$conn->close();
}else if ($_POST['submit'] == "update"){
	update_customer($conn);
	$conn->close();
}


/**
 * @param $conn
 */
function add_customer($conn) {
	unset($_POST['service'], $_POST['property'], $_POST['date'], $_POST['submit']);
	$customer_sql = build_sql_insert("customer", $_POST);
	execute_sql($customer_sql, $conn);

	$last_customer_id = $conn->insert_id;
	add_service($conn, $GLOBALS['service'], $last_customer_id);
	add_property($conn, $GLOBALS['property'], $last_customer_id);
}


/**
 * @param $conn
 */
function update_customer($conn) {

	$customer_id = $_POST['id'];
	$where = "id = $customer_id";

	unset($_POST['service'], $_POST['property'], $_POST['date'], $_POST['id'], $_POST['submit']);
	$customer_sql = build_sql_update("customer", $_POST, $where);
	execute_sql($customer_sql, $conn);

	delete_service($conn, $customer_id);
	delete_property($conn, $customer_id);

	add_service($conn, $GLOBALS['service'], $customer_id);
	add_property($conn, $GLOBALS['property'], $customer_id);

}
