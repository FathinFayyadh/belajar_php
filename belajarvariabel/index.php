<!-- <script>
  alert("Welcome To My Website");
</script> -->
<?php  
/*  ini global
  $Panjang="5";
  $Lebar = "3";
  
  function myFunction(){
     $sisi = 5 ; /// ini lo kal 
    //echo " Panjangnnya :".$Panjang;
     // echo "<br>";
      //echo " Lebar Nya   :". $Lebar;
    echo " sisi dari   sebuah persegi adalah :  ".$sisi;
  } 

  myFunction();  
 penggunanna static untuk menambah variabel
  function Fathin(){
  static $x = 1;
  echo $x;
  $x++;
  }


  Fathin();
  echo '<br>';
  Fathin();
  echo '<br>';
  Fathin(); 
 */ 
// perbedaan tanda petik 1 dan petik 2

//petik 1 untuk string karena kertika kita menulis variabel , tidak akan terbaca , ketika kita menulis  variabel maka tidak akan dianggap variabel. 

// string
/* var_dump('Hello word') --> untuk mengetahui apa apa saja variabelnya   ; */

/* $Tiket =100000;
$umur= 10;
// $diskon_anak = 50;
$diskon_OrgDewasa=   30;
 
if($umur <6 ){
$hasil= ($Tiket *$diskon_anak)/100;
echo "Maka dapat Diskkon 50%","Dengan Harga ",$hasil;
}
else if($umur >=6 && $umur <=16){
$Hasil = ($Tiket*$diskon_OrgDewasa)/100;
  echo" Dapat dikson 30%","Dengan Harga Rp. $Hasil";
}
else{
  echo"tidak dapat diskon";
} // logika if dan ifelse dan else dan mengunakan logika pembagian 
 */
// Program While Do
 /* 
$a=1;
do {
  echo "$a";
  echo"<br>";
  $a++;
  # code...
} while ($a <=1); */

// Program while 
 /* while ($a <= 100) {
   echo"$a";
   echo"<br>";
   $a++ ;
  # code...
 }
 *//* 
$Mahasiwa =[
  ["Nama"=>"Fathin","Kelas"=>"TI-P2102","Jurusan"=>"Teknik Informatika","Jenjang"=>"S1"],
  ["Nama"=>"Siska","Kelas"=>"TI-P2101","Jurusan"=>"Sistem Informasi","Jenjang"=>"D3"],
  ["Nama"=>"Monika","Kelas"=>"TI-P2102","Jurusan"=>"Teknik Informatika","Jenjang"=>"S1"],
  ["Nama"=>"Adela","Kelas"=>"TI-P2102","Jurusan"=>"Manajemen Retail","Jenjang"=>"S1"],
]




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coba Satu</title>
</head>
<body>
  <h1>Memunculkan variabel dengan array dan key nya </h1>


  <table border =3  >
 <tr>
  <th>Nama</th>
  <th>Kelas </th>
  <th>Jurusan </th>
  <th>Jenjang</th>
 </tr>
 <tr>
  <td><?php echo $Mahasiwa[0]["Nama"];  ?></td>
  <td><?php echo $Mahasiwa[0]["Kelas"];  ?></td>
  <td><?php echo $Mahasiwa[0]["Jurusan"];  ?></td>
  <td><?php echo $Mahasiwa[0]["Jenjang"];  ?></td>
 </tr>
 <tr>
  <td><?php echo $Mahasiwa[1]["Nama"];  ?></td>
  <td><?php echo $Mahasiwa[1]["Kelas"];  ?></td>
  <td><?php echo $Mahasiwa[1]["Jurusan"];  ?></td>
  <td><?php echo $Mahasiwa[1]["Jenjang"];  ?></td>
 </tr>
 <tr>
  <td><?php echo $Mahasiwa[2]["Nama"];  ?></td>
  <td><?php echo $Mahasiwa[2]["Kelas"];  ?></td>
  <td><?php echo $Mahasiwa[2]["Jurusan"];  ?></td>
  <td><?php echo $Mahasiwa[2]["Jenjang"];  ?></td>
 </tr>
 <tr>
  <td><?php echo $Mahasiwa[3]["Nama"];  ?></td>
  <td><?php echo $Mahasiwa[3]["Kelas"];  ?></td>
  <td><?php echo $Mahasiwa[3]["Jurusan"];  ?></td>
  <td><?php echo $Mahasiwa[3]["Jenjang"];  ?></td>
 </tr>


<p></p>


  </table>
</body>
</html> */
/* // cara mengetahui type type///
//
$umur =23 ;
$nama= "Toni";
$hobi=["Main Game","Berenang","Tidur"];

echo gettype($nama);
echo "<br>";
echo gettype($umur);
echo "<br>";
echo gettype($hobi);
 *///

 
 /* ini("Budi" ,20);
 echo"<br>";
 ini("yanto", 22);

function ini($nama, $umur){
echo"Hallo Semalat Pagi ".$nama, " kamu Umurnya ".$umur;

} */
/* 
if (isset($_POST["buttonkirim"])){
  $nama = $_POST["nama"];
 $jurusan =$_POST["jurusan"];
  echo" $nama";
  echo"<br>";
  echo" $jurusan";

 
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
  <h1>Coba Belajar Methof Post dan Get</h1>
  
<form action=" proses.php" method="post">
   <div class=""> 
    <label for="nama"> Nama </label>
    <input type="text" name =nama value= Masukknama>
    <div class="">
     <label for="">password</label>
     <input type="password" name = jurusan> 
   </div>  
   <div class="">
     <input type="submit"  name=buttonkirim value = Post> 
   </div>

</form>
</body>
</html>
 */

 /* session_start();
  $_SESSION["nama"]= "fathin";
  $_SESSION["npm"]= "21110016";
  $_SESSION[" jurusan"]= "Teknik Informatika ";

  $_SESSION["nama"]= "doni";
  $_SESSION["npm"]= "21110017";
  $_SESSION[" jurusan"]= "Teknik Informasi "; */

/* 

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
    <input type="text" name =nama value= Masukknama>
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
 
 header("location:proses.php");

}
  ?>
</body>
</html> */
include "check_login.php";
 echo " Ini adlah halalaman rahasia  Jangan  kasih tau siapa pun ";
echo "<br>" ;
echo  "angka rahasianya 12345";


?>


 









  
