<!-- 
/* echo $_POST["nama"];
echo "<br>";
echo $_POST["jurusan"]; */
/* 
session_start();
echo $_SESSION ["nama"];
echo "<br>";
echo $_SESSION ["npm"]; */
/* 
session_start();
if (isset($_SESSION["login"])==true){

    echo "Anda berhak melihat halaman ini ";
}
else {
    header("location:index.php");
}
 */
/* echo "ini adalah massage dari proses"; */
    
 -->
<!--  <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
     "home.php"; 
    <h1>Selamat dataang di halaman proses </h1>
 </body>
 </html> -->

<?php
include "check_login.php";

 echo " Ini adlah halalaman rahasia Proses Jangan  kasih tau siapa pun ";
echo "<br>" ;
echo  "angka rahasianya 12345";
?>