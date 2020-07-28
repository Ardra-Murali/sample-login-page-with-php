<?php

$email= $_POST['email'];
$user_name=$_POST['username'];
$pass_word = $_POST['password'];

include 'connection.php';


echo " $email $user_name $pass_word";

$sql = "INSERT INTO login (`username`, `password`, `email`)
VALUES ('$user_name', '$pass_word', '$email')";

if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
    header('Location: login.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: signup.php?error=details already exists');
    

}

$conn->close();

?>