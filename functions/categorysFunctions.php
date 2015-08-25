<?php

require_once('config/dbConfig.php');

function retrieveCategorys($connection) {

	$categorys = array();

	$query = mysqli_query($connection, "select * from tblcategorys");

	while($result = mysqli_fetch_assoc($query)) {

		array_push($categorys, $result);

	}

	return $categorys;

}