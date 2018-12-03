<?php
	include "config/connect.php";
	if(isset($_POST["reset-password"])) {

		    $password = mysqli_real_escape_string($conn,$_POST['password']);         
		    $password = str_replace(' ', ' ', $password);
		  $StorePassword = password_hash($password, PASSWORD_BCRYPT,array('cost' => 10));

		$conn = mysqli_connect("localhost", "root", "", "project");
		$sql = "UPDATE `project`.`teachers` SET `password` = '$StorePassword' WHERE `teachers`.`email` = '" . $_GET["email"] . "'";
		$result = mysqli_query($conn,$sql);
		$success_message = "Password is reset successfully.";
		
	}
?>
<link href="demo-style.css" rel="stylesheet" type="text/css">
<script>
function validate_password_reset() {
	if((document.getElementById("password").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Please enter new password!"
		return false;
	}
	if(document.getElementById("password").value  != document.getElementById("confirm_password").value) {
		document.getElementById("validation-message").innerHTML = "Both password should be same!"
		return false;
	}
	
	return true;
}
</script>
<form name="frmReset" id="frmReset" method="post" onSubmit="return validate_password_reset();">
<h1>Reset Password</h1>
	<?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>

	<div class="field-group">
		<div><label for="Password">Password</label></div>
		<div>
		<input type="password" name="password" id="password" class="input-field"></div>
	</div>
	
	<div class="field-group">
		<div><label for="email">Confirm Password</label></div>
		<div><input type="password" name="confirm_password" id="confirm_password" class="input-field"></div>
	</div>
	
	<div class="field-group">
		<div><input type="submit" name="reset-password" id="reset-password" value="Reset Password" class="form-submit-button"></div>
	</div>	
</form>
				