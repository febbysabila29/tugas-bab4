<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Ubah Data Siswa</h1>
  
  <?php
  include "koneksi.php";
  
  $nis = $_GET['nis'];
  $query = "SELECT * FROM siswa WHERE nis='".$nis."'";
  $query_mysql = mysqli_query($koneksi, $query);  
  while($data= mysqli_fetch_array($query_mysql)){

}
  ?>
  
  <form method="post" action="proses_ubah.php?nis=<?php echo $nis; ?>" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>  <td>nis</td>
     <td><input type="text" name="nis" value="<?php echo $data['nis']; ?>"></td>
   </tr>
   <tr>
     <td>Nama</td>
       <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
  </tr>
  <tr>    <td>Jenis Kelamin</td>
    <td>
    <?php
    if($data['jenis_kelamin'] == "Laki-laki"){
      echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked='checked'> Laki-laki";
      echo "<input type='radio' name='jenis_kelamin' value='perempuan'> Perempuan";
    }else{
      echo "<input type='radio' name='jenis_kelamin' value='laki-laki'> Laki-laki";
      echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> Perempuan";
    }
    ?>
    </td>
  </tr>
  <tr>    <td>Telepon</td>
    	      <td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td>
  </tr>
  <tr>    <td>Alamat</td>
    	      <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
  </tr>
  <tr>    <td>Foto</td>
  <td>
      <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
      <input type="file" name="foto">
  </td>
  </tr>
  </table>
    <hr>
  <input type="submit" value="Ubah">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>