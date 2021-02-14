<html>
<head>
  <title>Aplikasi CRUD </title>
</head>
<body>
  <h1>Data Siswa</h1>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Foto</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Telepon</th>
    <th>Alamat</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  include "koneksi.php";
  $query_mysql = mysqli_query($koneksi, "SELECT * FROM siswa");
  
  while($data = mysqli_fetch_array($query_mysql)){ 
    echo "<tr>";
    echo "<td><img src='images/".$data['picture1.jpg']."' width='100' height='100'></td>";
    echo "<td>".$data['nis']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td><a href='form_ubah.php?nis=".$data['nis']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>