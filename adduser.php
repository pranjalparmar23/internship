<?php
$conn = mysqli_connect("localhost", "root", "", "pranjal", "3307" );
    if(!$conn){
        echo "Can't connect database" .mysqli_connect_error($conn);
        exit;
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO users(username, password) VALUES ('$username', '$password');";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo"Query Issue.".mysqli_error($conn);
    }
    else {
        //echo"<script>alert('Successfully Registered!')
        //</script>";
        header("Location: login.php");
        //echo "Successfully Registered" ;
    }


?>