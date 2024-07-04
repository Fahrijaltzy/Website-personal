<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

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
<body>

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
  <h2>Apa itu Koperasi Simpan Pinjam ? </h2>

<p>Koperasi simpan pinjam adalah salah satu koperasi jasa tugas utamanya adalah menyediakan jasa peminjaman dan penyimpanan dana untuk anggota pada khususnya.</p> 
Tujuan adanya koperasi ini adalah agar anggotanya mendapatkan pinjaman dana dengan mudah dan tidak rumit. 
Pada dasarnya, sistem dari koperasi ini adalah untuk menghimpun dan menyalurkan dana dalam bentuk suatu pinjaman dari anggota ke anggota lainnya yang membutuhkan dengan prosedur atau mekanisme yang telah ditentukan dan disepakati bersama. Proses pembagian bunga di koperasi ini adil karena disepakati dalam rapat anggota. 
Keuntungan dari menjadi anggota koperasi ini adalah, saat peminjaman dana tidak perlu menggunakan jaminan.

<br>
<br>
<p><h2>Mekanisme meminjam di koperasi simpan pinjam</h2></p>

<p>Syarat utama untuk meminjam di koperasi simpan pinjam adalah dengan menjadi anggota. Saat menjadi anggota, Anda harus membayar simpanan pokok yang dibayarkan sekali dengan jumlah yang sama untuk setiap anggotanya dan juga harus membayar simpanan wajib yang dibayar di setiap bulannya. Selain itu terdapat simpanan sukarela yang jumlahnya bebas dan berbeda tergantung pada anggota masing-masing.</p>

Pengajuan pinjaman di koperasi simpan pinjam tergantung pada kepentingan dana tersebut akan digunakan. Contohnya sebagai modal usaha. Untuk pengajuan dana, pemohon dana atau anggota harus menulis dan mengajukan proposal usaha secara lengkap termasuk besar modal yang diperlukan. Proposal berisi tentang bisnis atau usaha yang akan dikerjakan dengan menggunakan modal yang dipinjam dari koperasi tersebut, penghitungan perkiraan laba dan keuangan secara menyeluruh. Proposal tersebut berguna untuk bahan pertimbangan pihak koperasi untuk memberikan dana secara tunai dan cepat atau hanya sebagian saja serta untuk melihat dan memperhitungkan kemampuan untuk mengembalikan modal atau pinjaman.
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
