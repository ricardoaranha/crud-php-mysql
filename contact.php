<?php require_once("template/header.php") ?>

<div class="col-lg-3"></div>
<div class="col-lg-6">
	<h1 align="center">Contact us</h1>
	<hr>
	<form action="sendMsg.php" method="post" accept-charset="utf-8">
		<input type="text" name="contactName" class="form-control" placeholder="Name" required /><br />
		<input type="email" name="contactEmail" class="form-control" placeholder="Email" required /><br />
		<textarea name="contactMsg" class="form-control" placeholder="Write your message here..." required></textarea><br />
		<input type="submit" class="btn btn-success btn-group-justified" value="Send" />
	</form>
</div>
<div class="col-lg-3"></div>

<?php require_once("template/footer.php") ?>