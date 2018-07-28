<?php
//Include the database configuration file
include 'db_connect.php';

if(!empty($_POST["state_id"])){
    //Fetch all city data
    $query = $con->query("SELECT district_name FROM states WHERE state_name = ".$_POST['state_id']." ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //City option list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>