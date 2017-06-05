<?php 
	include_once '../model/php.class.db.php';
	
	/**
     * INSERT rows from the database
    */

    $table_name = $_GET['table_name'];

	$db = new Database(); 
	$values = array(
        'name'						=> $db->quote($_POST['name']),
        'prong_P'					=> $db->quote($_POST['prong_P']),
        'segment_PQ'				=> $db->quote($_POST['segment_PQ']),
        'prong_Q'					=> $db->quote($_POST['prong_Q']),
        'QRS_complex'				=> $db->quote($_POST['QRS_complex']),
        'prong_S'					=> $db->quote($_POST['prong_S']),
        'segment_ST'				=> $db->quote($_POST['segment_ST']),
        'patients_id'           => $db->quote($_POST['patients_id'])
	);

	function insert($table, $values) {
		$db = new Database();   
		$connection = $db->connect();
		$fields = array_keys($values);
		$sql = "INSERT INTO `" . $table . "` (`" . implode('`, `', $fields) . "`) VALUES (" . implode(", ", $values) . ")";
		$result = mysqli_query($connection, $sql) or die("Ошибка " . mysqli_error($connection)); 
		
		if($result) {
			exit('<meta http-equiv="refresh" content="0; url= ../view/index.php" />');
		} else {
			echo 'Херня';
		}
		
		return $result;
	}

	insert($table_name, $values);
?>