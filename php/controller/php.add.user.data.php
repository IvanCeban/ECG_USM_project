<?php
include_once '../model/php.class.db.php';

/**
 * INSERT rows from the database
 */

$table_name = $_GET['table_name'];

$db = new Database();

$values = array(
    'name'					=> $db->quote($_POST['name']),
    'status' 		        => $db->quote($_POST['status']),
    'sex'                   => $db->quote($_POST['sex']),
    'age'                   => $db->quote($_POST['age']),
    'prof'                  => $db->quote($_POST['prof']),
    'date_birth'		    => $db->quote($_POST['date_birth']),
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