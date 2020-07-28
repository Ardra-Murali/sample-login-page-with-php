<?php
session_start();

$username_input = $_POST['user'];
$password_input = $_POST['pass'];

include 'connection.php';

$query = "SELECT * FROM `login` WHERE `username` = '$username_input'";

$result = mysqli_query($conn,$query);


if($result){

    $row = mysqli_fetch_array($result);
    $row_count= mysqli_num_rows($result);

    if($row_count>0){
        $password_db = $row['password'];

        if ($password_db == $password_input)
        {
            $_SESSION['username'] = $username;
            echo "Login Successful !!";
        }
        else{
            $error="Invalid password !";
            $_SESSION["error"] = $error;
            header("location: login.php");
            
        }
    }

    else{
        $error="Invalid Username !";
        $_SESSION["error"] = $error;
        header("location: login.php");
    }

}
else{
    echo "error : ".$conn->error;

     
}

$conn->close();
?>