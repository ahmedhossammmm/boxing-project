<?php
$firstname = $_REQUEST['F_name'];
$lastname = $_REQUEST['L_name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];


if (isset($_POST['signup']))
{
    $host ="localhost";
    $user ="root";
    $password ="";
    $db ="sign-up";

    $conn = mysqli_connect($host,$user,$password,$db );


    $insert ="insert into users values('$firstname', '$lastname', '$email', '$password' )" ;

    mysqli_query($conn ,$insert);

    if($conn){
        echo("<h1>  done </h1>");
    }

    else{
        echo("<h1>  ERROR </h1>");
    }
}




?>