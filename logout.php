<?php

	include('functions/sessionFunctions.php');

	logout();

	header("Location: index.php?logout=true");

	die();