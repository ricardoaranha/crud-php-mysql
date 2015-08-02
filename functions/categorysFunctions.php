<?php

function retrieveCategorys($conection) {

	$categorys = array();

	$query = mysqli_query($conection, "select * from tblcategorys");

	while($result = mysqli_fetch_assoc($query)) {

		array_push($categorys, $result);

	}

	return $categorys;

}