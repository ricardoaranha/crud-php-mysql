<?php

	include('template/header.php');
	include('config/dbConfig.php');
	include('functions/sessionFunctions.php'); 

?>

	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<?php if(isset($_GET['login']) && $_GET['login'] == 1) { ?>
		<p align='center' class='alert alert-success'>Logged with success!</p>
		<?php } else if(isset($_GET['login']) && $_GET['login'] == 0) { ?>
		<p align='center' class='alert alert-danger'>Email or password invalid, please try again!</p>
		<?php } ?>

		<h1 align="center">Welcome!</h1>
		<?php if(loggedUser()) { ?>
		<p class="text-success" align="center">You are now logged as <?=$_SESSION['loggedUser'];?></p>
		<?php } else { ?>
		<h2 align="center">Login</h1>
		<hr />
		<form action="login.php" method="post" accept-charset="utf-8">
			<input type="email" class="form-control" name="userEmail" placeholder="Email" required /><br />
			<input type="password" class="form-control" name="userPassword" placeholder="Password" required /><br />
			<input type="submit" value="Login" class="btn btn-success btn-group-justified" />
		</form>
		<?php } ?>
	</div>
	<div class="col-lg-3"></div>

<?php include('template/footer.php'); ?>