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

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
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
  <br>
  <br>
  <h2>List Anggota Koperasi</h2>
  <br>
  <br>
  <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_koperasi_sp";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Select data from table
$sql = "SELECT id_anggota, nama, alamat, no_telp from anggota ";
//$sql = "SELECT distinct anggota.id_anggota, anggota.nama, anggota.alamat, anggota.no_telp, anggota.smp_wajib+anggota.smp_pokok+simpanan.jumlah as saldo from anggota,simpanan where anggota.id_anggota=simpanan.id_anggota ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border='1' align=center>
        <tr>
          <th>ID Anggota</th>
          <th>NAMA</th>
          <th>ALAMAT</th>
		  <th>TELEPON/HANDPHONE</th>
        </tr>";
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row["id_anggota"]."</td>
            <td>".$row["nama"]."</td>
            <td>".$row["alamat"]."</td>
			<td>".$row["no_telp"]."</td>
          </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}


$conn->close();
?>
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




