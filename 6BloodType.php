<style>
.error {color: #0000FF;}
</style>

<?php
$bldErr = "";
$bld = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['bld'])) {
    $bldErr = "Blood group is required";
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
	<legend>Blood Group</legend>
	<select name="bld">
    <option></option>
	<option value="A+">A+</option>
    <option value="O+">O+</option>
    <option value="B+">B+</option>
    </select>
	<span class="error"><?php echo $bldErr;?></span>	
    <br><br>
    <input type="submit" name="submit" value="Submit">  
  </fieldset>
</form>


<?php
	error_reporting(0);
	if(isset($_POST['bld']) && empty($_POST['bld'])){
		echo "Blood group not selected";
	}
	elseif(isset($_POST['bld'])){
	echo "Blood Group :".$_POST['bld']."  ";
	}
?>

