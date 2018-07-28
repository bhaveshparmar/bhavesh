<?php
echo" fam name is : ".$_POST['famname'];

$dbname="farmer";
$username="root";
$password="";
$host="localhost";
$con=mysqli_connect($host,$username,$password,$dbname);

$data = $_POST;
$con->query("INSERT INTO `user_data`( `famname`, `mobnum`, `aadnum`, `state`, `city`, `taluka`, `village`, `soiltype`, `crop`) VALUES ('".$data['famname']."','".$data['mobnum']."','".$data['aadnum']."','".$data['state']."','".$data['city']."','".$data['taluka']."','".$data['village']."','".$data['soiltype']."','".$data['crop']."')");
 $id= mysqli_insert_id($con);

header('location:result.php?id='.$id);

?>