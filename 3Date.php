<style>
.error {color: #0000FF;}
</style>


<?php
$dateErr = $monthErr = $yearErr = "";
$date = $month = $year = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["date"])) {
    $dateErr = "Date is required";
  }      
  if (empty($_POST["month"])) {
    $monthErr = "Month is required";
  }  
  if (empty($_POST["year"])) {
    $yearErr = "Year is required";
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
	<legend>Date Of Birth</legend>
    DD
	<select name="date">
    <option></option>
	<option value="1"<?php if(isset($_POST['date']) && $_POST['date']=='1'){ echo "selected"; }?>>1</option>
    <option value="2"<?php if(isset($_POST['date']) && $_POST['date']=='2'){ echo "selected"; }?>>2</option>
    <option value="3"<?php if(isset($_POST['date']) && $_POST['date']=='3'){ echo "selected"; }?>>3</option>
    </select><?php echo '/';?>
        <span class="error"><?php echo $dateErr;?></span>
	MM
	<select name="month">
    <option></option>
	<option value="January"<?php if(isset($_POST['month']) && $_POST['month']=='January'){ echo "selected"; }?>>January</option>
    <option value="February"<?php if(isset($_POST['month']) && $_POST['month']=='February'){ echo "selected"; }?>>February</option>
    <option value="March"<?php if(isset($_POST['month']) && $_POST['month']=='March'){ echo "selected"; }?>>March</option>
    </select> <?php echo '/';?>
	    <span class="error"><?php echo $monthErr;?></span>
	YY
    <select name="year">
    <option></option>
	<option value="1994"<?php if(isset($_POST['year']) && $_POST['year']=='1994'){ echo "selected"; }?>>1994</option>
    <option value="1995"<?php if(isset($_POST['year']) && $_POST['year']=='1995'){ echo "selected"; }?>>1995</option>
    <option value="1996"<?php if(isset($_POST['year']) && $_POST['year']=='1996'){ echo "selected"; }?>>1996</option>
    </select>	
	    <span class="error"><?php echo $yearErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  </fieldset>
</form>



