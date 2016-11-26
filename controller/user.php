<?php

require "../dbcon.php";
require('../model/execute_sql.php');
require "../model/build-sql.php";
include('../beauti_dump.php');


if (!isset($_POST['submit'])) header( 'Location: http://localhost/sochheata_customer_info-master/views/add_user.php' );

if ($_POST['submit'] == "add"){
	add_user($conn);
	$conn->close();
}
// else if($_POST['submit'] == "update"){
// 		update_user_by_id($conn);
// 		$conn->close();
else if(isset($_POST['id'])) {
	update_user_by_id($conn, $_POST['id']);
	$conn->close();
}else{
	echo "not match";
} 


/**
 * @param $conn
 */
function add_user($conn) {
	unset($_POST['submit']);
	$sql = build_sql_insert("user", $_POST);
	execute_sql($sql, $conn);
}

/**
* @param $conn
*/
function update_user_by_id($conn) {
$id = $_POST['id'];
$where = "id = $id";
// if($_POST['user']){
// array_push($GLOBALS['user'], $_POST['user']);
// }
unset($_POST['id'], $_POST['submit']);
$user_sql = build_sql_update("user", $_POST, $where);
execute_sql($user_sql, $conn);
// add_user($conn, $GLOBALS['user'], $id);
header( 'Location: http://localhost/sochheata_customer_info-master/views/add_user.php' );
}


