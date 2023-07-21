 <?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> Belajar menggunakan Sesion</h1>
  <form action="" method="post">
   <div class=""> 
    <label for="nama"> Nama </label>
    <input type="text" name =nama value= >
    <br>
    <div class="">
     <label for="">password</label>
     <input type="password" name = jurusan>  
     <br>  
    </div>
   <div class="">
     <input type="submit"  name=buttonkirim value = Post> 
   </div>
</form>
<?php
if (isset($_POST["buttonkirim"])){
  $nama = $_POST["nama"];
 $jurusan =$_POST["jurusan"] ;
 

 $_SESSION["nama"]=$nama;
 $_SESSION["jurusan"]=$jurusan;
 $_SESSION["login"] =true;
 
 header("location:home.php");

}