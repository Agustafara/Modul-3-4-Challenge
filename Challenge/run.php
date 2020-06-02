<?php
$nis =$_POST["nis"];
$namadep = $_POST["namadep"];
$namabel = $_POST["namabel"];
$tempatlahir = $_POST["tmplahir"];
$tanggallahir = $_POST["tgllahir"];
$agama = $_POST["agama"];
$kelamin = $_POST["kelamin"];
$email =$_POST["email"];
$telepon =$_POST["telepon"];
$instagram =$_POST["instagram"];
$facebook =$_POST["facebook"];
$website =$_POST["website"];
$alamat =$_POST["alamat"];
$jurusan =$_POST["jurusan"];
$kelas =$_POST["kelas"];
$username =$_POST["username"];
$password =$_POST["password"];
$pesan =$_POST["comment"];

echo "nis : $nis<br>";
echo"nama depan : $namadep<br>";
echo"nama belakang : $namabel<br>";
echo"tempat lahir : $tempatlahir<br>";
echo"tanggal lahir : $tanggallahir<br>";
echo"agama : $agama";
if($_POST["kelamin"] == "laki"){
    echo" jenis kelamin : laki-laki<br>";
}else{
    echo"jenis kelamin : perempuan<br>";
}
echo"email : $email<br>";
echo"telepon : $telepon<br>";
echo"instagram :$instagram<br>";
echo"facebook : $facebook<br>";
echo"website : $website<br>";
echo"alamat : $alamat<br>";
if($_POST["jurusan"] == "RPL"){
    echo"jurusan : RPL<br>";
}else{
    echo"jurusan : TKJ<br>";
}
if($_POST["kelas"] == "10"){
    echo"kelas : 10<br>";
}else if($_POST["kelas"] =="11"){
    echo"kelas : 11<br>";
}else{
    echo"kelas : 12<br>";
}
echo"username : $username<br>";
echo"password : $password<br>";
echo "pesan : $pesan<br>";
?>


    