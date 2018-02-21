<style>
.error {color: #0000FF;}
</style>

<?php
$nameErr = "";
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
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
		<legend>NAME</legend>
		<input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name']; }?>">
		<span class="error"><?php echo $nameErr;?></span>
		<br/><br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>
  



