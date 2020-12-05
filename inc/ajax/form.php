<?php
include '../config.php';
$sql = "INSERT INTO newsletter (email) VALUES (?)";
if($stmt = mysqli_prepare($link, $sql)){
   // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $param_email);
    //Set parameters
    $param_email = $_POST['news_email'];
    //Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo 'alert("Submitted")';
    } else {
        echo 'alert("Email already exist.")';
    }
}
?>