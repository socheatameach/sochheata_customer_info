<?php
/**
 * @param $arr
 *
 * @return bool
 */
function is_assoc($arr)
{
	return array_keys($arr) !== range(0, count($arr) - 1);
}

/**
 * @param $table
 * @param $data
 * @param string $cols
 * @param int $last_id
 *
 * @return bool|string
 */
function build_sql_insert($table, $data, $cols = "", $last_id = "") {

	if (!is_assoc($data)) {
		$sql = "INSERT INTO $table (". implode(', ', $cols).") VALUES ";
		$sql_parts = array();
		foreach($data as $value){
			$sql_parts[] = "('" . $value . "', '" . $last_id . "')";
		}
		$sql .= implode(',', $sql_parts);
		return($sql);
	}

	$key = array_keys($data);
	$val = array_values($data);
	$sql = "INSERT INTO $table (" . implode(', ', $key) . ") "
		. "VALUES ('" . implode("', '", $val) . "')";
	return($sql);

}

/**
 * @param $table
 * @param $data
 * @param $where
 * @param null $col
 * @return string
 */
function build_sql_update($table, $data, $where, $col="") {

	$cols = array();
	if (! is_assoc($data) && $col) {
		foreach($data as $val) {
			$cols[] = "$col = '$val'";
		}
		$sql = "UPDATE $table SET " . implode(', ', $cols) . " WHERE $where";

		return($sql);
	}

	foreach($data as $key=>$val) {
		$cols[] = "$key = '$val'";
	}
	$sql = "UPDATE $table SET " . implode(', ', $cols) . " WHERE $where";

	return($sql);
}


