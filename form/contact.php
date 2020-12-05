<?php
include 'inc/config.php';
$fname = $_POST['firstname'];
$email = $_POST['email'];
$lname = $_POST['lastname'];
$msg = $_POST['msg'];

if (empty($fname) ||empty($lname) || empty($email) || empty($msg)){
    echo "please file the form";
}
else{
    mail("codershub07@gmail.com" , "Submitted Message" , "Hey My name is $fname $lname and message is $msg " , "From: $name <$email>");
    echo "<script type='text/javascript'>
        alert('your message sent successfully');
    </script>";
    
    $sql = "INSERT INTO contact (firstname)VALUES ($fname);";
    if($stmt = mysqli_prepare($link, $sql)){
   // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $param_email);
    //Set parameters
    $param_email = 'done';
    //Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo 1;
    }
}

header('location: index.html');
}





?>