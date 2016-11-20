<?php
/**
 * @param $conn
 * @param $data
 * @param $customer_id
 */
function add_service($conn, $data, $customer_id) {
	$service_cols = array("service_name", "customer_id");
	$service_sql = build_sql_insert("service", $data, $service_cols, $customer_id);
	execute_sql($service_sql, $conn);
}


/**
 * @param $conn
 * @param $customer_id
 */
function delete_service($conn, $customer_id) {
	$where = "customer_id = $customer_id";
	$service_sql = build_sql_delete_by_id("service", $where);
	execute_sql($service_sql, $conn);
}
