<?php

include"service/database.php";
 session_start();
$Login_massage="";

if(isset($_SESSION["is_login"])){
    header("location:dasboard.php");

}

if(isset($_POST['login'])){
   $username= $_POST['username'];
   $password= $_POST['password'];
   $hash_password=hash("sha256",$password);

   $sql="SELECT * FROM users WHERE username='$username' AND  password ='$hash_password'";

   $result = $db->query($sql);
   if($result->num_rows > 0){
    $data = $result->fetch_assoc();
    $_SESSION["username"]=$data["username"];
    $_SESSION["is_login"]= true;
    // echo"Data Username adalah ". $data ["username"];
    // echo"Data password adalah ". $data ["password"];
    header("location: dasboard.php");  
   }
   else{
    $Login_massage="akun tidak ditemukan";
   }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include"layout/header.html"?>
    <h3>Masuk Akun </h3>
    <i><?= $Login_massage?></i>
    <form action="login.php"method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="login">Login</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>
</html>