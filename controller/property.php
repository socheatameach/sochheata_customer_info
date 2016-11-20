<?php
/**
 * @param $conn
 * @param $data
 * @param $customer_id
 */
function add_property($conn, $data, $customer_id) {
	$property_cols = array("property_name", "customer_id");
	$property_sql = build_sql_insert("property", $data, $property_cols, $customer_id);
	execute_sql($property_sql, $conn);
}

/**
 * @param $conn
 * @param $customer_id
 */
function delete_property($conn, $customer_id) {
	$where = "customer_id = $customer_id";
	$property_sql = build_sql_delete_by_id("property", $where);
	execute_sql($property_sql, $conn);
}
