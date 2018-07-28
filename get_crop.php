<?php
require_once('db_connect.php');
//$state_id=mysql_real_escape_string($_POST['state_id']);
if(!empty($_POST['soil']) )
{
	//echo "select * from main_table where state_name='".$_POST['state']."' and district_name='".$_POST['city']."'";
$city_result=$con->query("select distinct crop_name from crop_soil where soil_type='".$_POST['soil']."' ");

while($row=$city_result->fetch_assoc()){
echo'<option value="'.$row['crop_name'].'">'.$row['crop_name'].'</option>';
}

}
?>