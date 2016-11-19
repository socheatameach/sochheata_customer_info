<?php
/**
 * @param $sql
 * @param $conn
 */
function execute_sql($sql, $conn) {
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
//	$conn->close();
}
