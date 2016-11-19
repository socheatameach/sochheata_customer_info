<?php

include('../dbcon.php');
include('../model/build-sql.php');

$sql = build_sql_insert("user", $_POST);
execute_sql($sql, $conn);


