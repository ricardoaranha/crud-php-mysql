<?php

session_start();

function showAlert($type) {

	if(isset($_SESSION[$type])) {

		echo "<p align='center' class='alert alert-".$type."'>".$_SESSION[$type]."</p>";
			
		unset($_SESSION[$type]);

	}


}