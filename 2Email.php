<style>
.error {color: #FF0000;}
</style>

<?php
$emailErr = "";
$email = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  	<fieldset>
		<legend>EMAIL</legend>
		<input type="text" name="email" value=""><?php echo '  i';?>
		<span class="error"><?php echo $emailErr;?></span>
		<br/><br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>

<?php 
	if(isset($_POST['email'])){
		echo $_POST['email']; 
		}
?>
