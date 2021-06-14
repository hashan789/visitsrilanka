<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){  

    $name = htmlspecialchars($_REQUEST['name']);
    $email = htmlspecialchars($_REQUEST['email']);
    $comment = htmlspecialchars($_REQUEST['textmsg']);

    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["textmsg"])) {

$servername = "localhost";
$username = "root";
$password = '';
$dbName = "emailform";

$con = mysqli_connect($servername,$username,$password,$dbName);
if($con){
$sql_insert_record = "INSERT INTO comments (name,email,comment) VALUES ('$name','$email','$comment')";
$query = mysqli_query($con,$sql_insert_record);
}
$con->close();
    } 
                   
}

?>