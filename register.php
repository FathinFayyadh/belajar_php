<?php
   include "service/database.php";
    session_start();
    $register_massage ="";

    if(isset($_SESSION["is_login"])){
        header("location:dasboard.php");
    
    }   

   if(isset($_POST["register"])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $hash_password=hash("sha256",$password);
    
    try{
        $sql= "INSERT INTO users(username,password)VALUES('$username','$hash_password')";
    
        if($db->query($sql)){
            $register_massage="Daftar Akun Berhasil";
        }
        else{
            $register_massage="Daftar Akun Gagal Silahkan Coba Lagi";
        }
    } 
    catch(mysqli_sql_exception){
        $register_massage="Username Sudah Digunakan";
    }
    $db->close();

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
    <?php include "layout/header.html" ?>
    <h3>Daftar akun</h3>
    <i><?= $register_massage ?> </i>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="register">Daftar Sekarang</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>

</html>