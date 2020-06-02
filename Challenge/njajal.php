<DOCTYPE html>
<html lang = "en" dir="ltr">
<style>
body {
  background: linear-gradient(#74ebd5,#ACB6E5);
}
#card{
  background : linear-gradient(#f2fcfe,#1c92d2);
}
#card-header{
  background : linear-gradient(#E0EAFC, #CFDEF3)
}
#ok{
  background : white;
  font-family:"raleway"
  height : 30px;
  width : 120px;
}
#batal{
  background : white;
  font-family:"raleway"
  height : 30px;
  width : 120px;
}
#tombol{
  margin: 20px;
  
}
</style>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-
         scale=1.0">
<title>form login</title>
 <!--load bootstrap css-->
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
          <!--load jquery and bootstrap js-->
          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/js/popper.min.js"></script>
          <script src="assets/js/bootstrap.js"></script>
          <script type="text/javascript">
          </script>
 </head>
<body>
<form method="post" action="run.php">
<div class ="container">
            <div class ="row">
            <div id="card" class="card col-6" style="margin-left: 300px; margin-top: 50px;" >
            <div id="card-header" class = "card-header">Pendaftaran Webinar kuy gas</div>
            NIS : <input type = "text" name="nis"><br>
            Nama Depan : <input type = "text" name="namadep"><br>
            Nama Belakang : <input type = "text" name="namabel"><br>
            Tempat Lahir : <input type = "text" name="tmplahir"><br>
            Tanggal Lahir : <input type = "date" name="tgllahir"><br>
            Agama : <input type = "text" name="agama"><br>
            Jenis Kelamin : <input type="radio" name="kelamin" value="laki">
            <label for="laki">laki-laki</label>
            <input type="radio" name="kelamin" value="perempuan">
            <label for="perempuan">perempuan</label><br>
            E-mail : <input type = "email" name="email"><br>
            Telepon : <input type = "number" name="telepon"><br>
            Instagram : <input type = "text" name="instagram"><br>
            Facebook : <input type = "text" name="facebook"><br>
            Website : <input type = "text" name="website"><br>
            Alamat : <textarea class="form-control" rows="4" name="alamat"></textarea><br>
            Jurusan : <select name="jurusan"><option value="">--jrusan apa?--</option>
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                        <option value="TKJ">Teknik Komputer Jaringan</option>
                      </select>
            Kelas : <select name="kelas">
                        <option value="">--kelas berapa?--</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
  Username : <input type ="text" name="username"><br>
  Password : <input type = "password" name="password"><br>
  Tambahan : <textarea class="form-control" rows="5" name="comment"></textarea>  <br>
  <div id="tombol">
  <button id="ok" type="submit" class="btn"name="ok">Input</button>
<button id="batal" type ="reset" class="btn"name="batal">Cancel</button>
</div>
  </div>
  </div>
  </div>

  </body>
  </html>
  