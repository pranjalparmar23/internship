<?php
$conn = mysqli_connect("localhost", "root", "", "pranjal", "3307" );
if(!$conn){
    echo "Can't connect database" .mysqli_connect_error($conn);
    exit;
}
$username = $_POST['username'];
$password = $_POST['password'];

if($username=="" and $password==""){
    echo "<script>alert('Fields can't be empty');
    window.location.href='index.php';
    </script>";
}

$query = "SELECT username, password FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
print_r($row);

if($username != $row['username'] OR $password != $row['password']){
    echo "<script>alert('Username and Password Mismatch. PLease fill again!');
    window.location.href='example.php';
    </script>";
}

else if($username == $row['username'] AND $password == $row['password']){
    echo "<script>alert('Successful!');
    window.location.href='example.php';
    </script>";
}

?>