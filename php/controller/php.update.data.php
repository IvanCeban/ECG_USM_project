<?php

	include_once '../model/php.class.db.php';
	
	/**
     * UPDATE rows from the database
    */
	
	$patients_id = $_GET['patients_id'];
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
	);
	

function update($table, $values, $where='') {
	$db = new Database();   
	$connection = $db->connect();
    $whereSQL = '';
	
    if(!empty($where)) {
        if(substr(strtoupper(trim($where)), 0, 5) != 'WHERE')
        {
            $whereSQL = " WHERE ". $where;
        } else {
            $whereSQL = " " . trim($where);
        }
    }

    $sql = "UPDATE " . $table . " SET ";
    $sets = array();
	
    foreach($values as $column => $value) {
         $sets[] = "`" . $column. "` =  " . $value . "";
    }
	
    $sql .= implode(', ', $sets);
    $sql .= $whereSQL;
	
	$result = mysqli_query($connection, $sql) or die("Ошибка " . mysqli_error($connection)); 
		
	if($result) {
		exit('<meta http-equiv="refresh" content="0; url= ../view/index.php" />');
	}
	
    return $result;
}

update($table_name, $values, "WHERE patients_id = " . $patients_id . "");

?>




