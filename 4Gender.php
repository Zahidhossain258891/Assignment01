<style>
.error {color: #0000FF;}
</style>

<?php
$genderErr = "";
$gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["gender"])) {
    $genderErr = "[Gender is required]";
  } else {
    $gender = test_input($_POST["gender"]);
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
		<legend>Gender</legend>
		     <input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=='Male'){ echo "checked"; }?>>Male 
             <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender']=='female'){ echo "checked"; }?>> Female
             <input type="radio" name="gender" value="other" <?php if(isset($_POST['gender']) && $_POST['gender']=='other'){ echo "checked"; }?>> Other
			 <span class="error"><?php echo $genderErr;?></span>
          <br/><br/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>

