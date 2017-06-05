	<?php
		include_once '../model/php.class.db.php';
		
		$db = new Database();
		$rows = $db->select("SELECT * FROM `ekg_param`");

        $column_v1 = $db->select("SHOW COLUMNS FROM `v1`");
        $column_v2 = $db->select("SHOW COLUMNS FROM `v2`");
        $column_v3 = $db->select("SHOW COLUMNS FROM `v3`");
        $column_v4 = $db->select("SHOW COLUMNS FROM `v4`");
        $column_v5 = $db->select("SHOW COLUMNS FROM `v5`");
        $column_v6 = $db->select("SHOW COLUMNS FROM `v6`");

        $column_I = $db->select("SHOW COLUMNS FROM `I`");
        $column_II = $db->select("SHOW COLUMNS FROM `II`");
        $column_III = $db->select("SHOW COLUMNS FROM `III`");

        $column_avr = $db->select("SHOW COLUMNS FROM `avr`");
        $column_avl = $db->select("SHOW COLUMNS FROM `avl`");
        $column_avf = $db->select("SHOW COLUMNS FROM `avf`");

        $column_patients = $db->select("SHOW COLUMNS FROM `patients`");

        /* V1 - V6 */
        $v1 =  $db->select("SELECT * FROM `v1`");
        $v2 =  $db->select("SELECT * FROM `v2`");
        $v3 =  $db->select("SELECT * FROM `v3`");
        $v4 =  $db->select("SELECT * FROM `v4`");
        $v5 =  $db->select("SELECT * FROM `v5`");
        $v6 =  $db->select("SELECT * FROM `v6`");

        /* I - III */
        $I   =  $db->select("SELECT * FROM `I`");
        $II  =  $db->select("SELECT * FROM `II`");
        $III =  $db->select("SELECT * FROM `III`");

        /* AVR, AVL, AVF */
        $avr =  $db->select("SELECT * FROM `avr`");
        $avl =  $db->select("SELECT * FROM `avl`");
        $avf =  $db->select("SELECT * FROM `avf`");

        /* Illness */
        $db->query("SET NAMES utf8");
        $illness = $db->select("SELECT * FROM `illness`");
        $patients = $db->select("SELECT * FROM `patients`");

	?>