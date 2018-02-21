<style>
.error {color: #0000FF;}
</style>

<?php
$degreeErr = "";
$degree = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["degree"])) {
    $degreeErr = "[Degree is required]";
  } else {
    $degree = test_input($_POST["degree"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	<fieldset>
		<legend>DEGREE</legend>
		     <input type="checkbox" name="degree" value="SSC" <?php if(isset($_POST['degree']) && $_POST['degree']=='SSC'){ echo "checked"; }?>>SSC
			 <input type="checkbox" name="degree" value="HSC" <?php if(isset($_POST['degree']) && $_POST['degree']=='HSC'){ echo "checked"; }?>>HSC
			 <input type="checkbox" name="degree" value="BSc" <?php if(isset($_POST['degree']) && $_POST['degree']=='BSc'){ echo "checked"; }?>>BSc
			 <input type="checkbox" name="degree" value="MSc" <?php if(isset($_POST['degree']) && $_POST['degree']=='MSc'){ echo "checked"; }?>>MSc
			 <span class="error"><?php echo $degreeErr;?></span>
		  <br>
<br/><br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>
			 
<!--<?php
	/*error_reporting(0);
	if(isset($_POST['degree']) && empty($_POST['degree'])){
		echo "Degree not selected";
	}
	elseif(isset($_POST['degree'])){
	echo "Selected degree :".$_POST['bld']."  ";
	}*/
?>-->