<?php
	include_once 'php.select.data.php';

	foreach ($rows as $value) {
		extract($value); 
				
		if(isset($_POST['check-' . $id ]) && $_POST['check-' . $id ] == 'Yes') {
			foreach ($value as $value => $key) {
				var_dump($key);
			}
		}
		
	}
?> 