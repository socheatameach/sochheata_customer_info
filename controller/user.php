<?php

require "../dbcon.php";
require "../model/execute_sql.php";
require "../model/build-sql.php";


if (!isset($_POST['submit'])) header( 'Location: http://localhost/sochheata_customer_info/views/add_user.php' );

if ($_POST['submit'] == "add"){
	add_user($conn);
	$conn->close();
}


/**
 * @param $conn
 */
function add_user($conn) {
	unset($_POST['submit']);
	$sql = build_sql_insert("user", $_POST);
	execute_sql($sql, $conn);
}


