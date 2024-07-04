
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
#####
font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text],input[type=number], input[type=smp_wajib], input[type=smp_pokok],input[type=telepon] {
  width: 70%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=number]:focus, input[type=smp_wajib]:focus, input[type=smp_pokok]:focus, input[type=telepon]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;

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
	<h1 align=center>Tambah dan Simpan Anggota Baru</h1>
		<form action="input_anggota.php" method="post" align=center>
			<div class="container">
			    <p>
			    	<label for="id_anggota"><b>ID Anggota</b></label>
			    	<input type="number" name="id_anggota" id="id_anggota">
			    </p>		    
			    <p>
			    	<label for="nama" >Nama Anggota</label>
			    	<input type="text" name="nama" id="nama">
			    </p>
			    <p>
			    	<label for="alamat">Alamat Anggota</label>
			    	<input type="text" name="alamat" id="alamat">
			    </p>
			    <p>
			    	<label for="no_telp">No_Telp Anggota</label>
			    	<input type="telepon" name="no_telp" id="no_telp">
			    </p>
			    <input type="submit" value="Simpan">
			    <button type="button" onclick="window.location.href='home.php'">Cancel</button>
			</div>
		</form>
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
<head>
	<title>Form Penambahan Anggota Baru</title>
</head>
<body >

		
</body>
</html> 