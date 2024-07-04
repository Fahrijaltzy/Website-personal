<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_koperasi_sp";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Collect form data
$id_anggota = $_POST['id_anggota'];
$name = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];


$cek= mysqli_num_rows(mysqli_query($conn,"select * from anggota where id_anggota='$id_anggota' "));
if ($cek > 0){
	echo "<script> window.alert('ID_Anggota Sudah DiPakai')</script>";
}else {
	mysqli_query($conn,"INSERT INTO anggota (id_anggota,nama, alamat, no_telp) VALUES ('$id_anggota','$name', '$alamat', '$no_telp' )");
	echo '<script>alert("Anggota Baru Berhasil Di Tambahkan")</script>';
}

// Insert data into the database
//$sql = "INSERT INTO anggota (id_anggota,nama, alamat, no_telp, smp_wajib, smp_pokok) VALUES ('$id_anggota','$name', '$alamat', '$no_telp', '$smp_wajib', '$smp_pokok' )";
//if (mysqli_query($conn, $sql)) {
//  echo '<script>alert("Anggota Baru Berhasil Di Tambahkan")</script>';
//} else {
//  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body background="image/bg.jpg">

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="home.php">About</a>
  <a href="form_input_anggota.php">Tambah Anggota</a>
  <a href="view_data_anggota.php">Lihat Anggota</a>
  <a href="form_input_simpanan.php">Input Simpanan Anggota</a>
  <a href="view_simpanan_anggota.php">Lihat Simpanan Anggota</a>
  <a href="view_saldo_akhir_anggota.php">Lihat Saldo Anggota</a>
  <a href="logout.php">Logout</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>  

</div>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
       
</body>
</html> 