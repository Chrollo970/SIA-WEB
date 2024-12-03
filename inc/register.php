<?php

include("../config.php");
if(isset($_POST['submit'])){ 
    $fullName = $_POST['fullName'];
    $emailAddress = $_POST['emailAddress'];
    $username = $_POST['userName'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    
    mysqli_query($conn,"INSERT INTO user_registration_tbl(Full_Name,Email_Address,Username,Password,Phone_Number)values('".$fullName."','".$emailAddress."','".$username."', '".$password. "', '".$phoneNumber."')") or die(mysqli_error());
    
    header('location: ../loginPage.php');

}
?>