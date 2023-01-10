<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="text-center">
<form action="/internship/index.php" method="post">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form control" id="exampleInputEmail" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form control" id="exampleInputPassword">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
  

</form>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>
</html>

<?php 
if(isset($_POST['submit'])){
  $conn = mysqli_connect("localhost", "root", "", "pranjal", "3307" );
if(!$conn){
    echo "Can't connect database" .mysqli_connect_error($conn);
    exit;
}
$username = $_POST['username'];
$password = $_POST['password'];

if($username=="" and $password==""){
    echo "<script>alert('Fields can't be empty');
    </script>";
}

$query = "SELECT username, password FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if($username != $row['username'] OR $password != $row['password']){
    echo "<script>alert('Username and Password Mismatch. PLease fill again!');
    window.location.href='index.php';
    </script>";
}

else if($username == $row['username'] AND $password == $row['password']){
    echo "<script>alert('Successful!');
    window.location.href='index.php';
    </script>";
    $_SESSION['user'] = $username;
}
}

?>
