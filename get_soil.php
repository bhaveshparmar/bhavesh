<?php
require_once('db_connect.php');
//$state_id=mysql_real_escape_string($_POST['state_id']);
if(!empty($_POST['state']) and !empty($_POST['city']))
{
	//echo "select * from main_table where state_name='".$_POST['state']."' and district_name='".$_POST['city']."'";
	
$city_result=$con->query("select distinct soil_type from main_table where state_name='".$_POST['state']."' and district_name='".$_POST['city']."' ");

while($row=$city_result->fetch_assoc()){
echo'<option value="'.$row['soil_type'].'">'.$row['soil_type'].'</option>';
}

}
?>