<?php 
	include_once '../model/php.class.db.php';
	include_once '../controller/php.select.data.php';

	/**
     * DELETE rows from the database
     */
	
	$patients_id = $_GET['patients_id'];
	$table_name = $_GET['table_name'];
		
	function _delete($table, $where='') {
		$db = new Database();   
		$connection = $db->connect();
		$whereSQL = '';
		
		if(!empty($where)) {
			if(substr(strtoupper(trim($where)), 0, 5) != 'WHERE') {
				$whereSQL = " WHERE ".$where;
			} else {
				$whereSQL = " ".trim($where);
			}
		}

		$sql = "DELETE " . $table . " FROM patients 
		LEFT JOIN i ON i.patients_id = patients.patients_id
		LEFT JOIN ii ON ii.patients_id = patients.patients_id
		LEFT JOIN iii ON iii.patients_id = patients.patients_id
		LEFT JOIN v1 ON v1.patients_id = patients.patients_id
		LEFT JOIN v2 ON v2.patients_id = patients.patients_id
		LEFT JOIN v3 ON v3.patients_id = patients.patients_id
		LEFT JOIN v4 ON v4.patients_id = patients.patients_id
		LEFT JOIN v5 ON v5.patients_id = patients.patients_id
		LEFT JOIN v6 ON v6.patients_id = patients.patients_id
		LEFT JOIN avr ON avr.patients_id = patients.patients_id
		LEFT JOIN avl ON avl.patients_id = patients.patients_id
		LEFT JOIN avf ON avf.patients_id = patients.patients_id" . $whereSQL;

		$result = mysqli_query($connection, $sql) or die("Ошибка " . mysqli_error($connection)); 
		
		if($result) {
			exit('<meta http-equiv="refresh" content="0; url= ../view/index.php" />');
		} else {
			echo 'Херня';
		}
		
		return $result;
	}
	
	 _delete($table_name, "WHERE patients.patients_id = ". $patients_id . "");
	
?>