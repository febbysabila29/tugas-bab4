<?php
include "koneksi.php";
$nis = $_GET['nis'];
$query = "SELECT * FROM siswa WHERE nis='".$nis."'";
$query_mysql = mysqli_query($koneksi, $query); 
while($data= mysqli_fetch_array($query_mysql)){

}

if(is_file("images/".$data['foto'])) 
  unlink("images/".$data['foto']); 
$query2 = "DELETE FROM siswa WHERE nis='".$nis."'";
$query_mysql2 = mysqli_query($koneksi, $query2); 
if($query_mysql2){ 
  
  header("location: index.php"); 
}else{
    echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>