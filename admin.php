<?php

include("connection.php");

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM signup WHERE username = '$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);

    if($num > 0){
        header("location:admindash.php");
    }

    else{
      echo'<script>alert("username and password is not matching")</script>';
    }
}
?>
<html>
    <head>
        <title>E Farm System</title>
        <link rel="stylesheet" href="styleadmin.css">
    </head>
    <body>
        <div class="main">
            <form action="" method="POST">
            <h1>LOGIN</h1>
            <input type="username" name="username"placeholder="username"><br>
            <input type="password" name="password" placeholder="password"><br>
            <button type="submit" name="submit">LOGIN</button></br></br>
            dont have an account?&nbsp;<a href="log.php">signup here</a>
            </form>
        </div>
    </body>
</html>