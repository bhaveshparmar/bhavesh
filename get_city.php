<?php
require_once('db_connect.php');
//$state_id=mysql_real_escape_string($_POST['state_id']);
echo $_POST['state'];
if(!empty($_POST['state']))
{
		
$city_result=$con->query("select district_name from states where state_name='".$_POST['state']."'");
//echo "<option value="">select City</option>";
while($row=$city_result->fetch_assoc()){
echo'<option value="'.$row['district_name'].'">'.$row['district_name'].'</option>';
}
}
?>