<!DOCTYPE html>
<html>
<title>Tugas php</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-right" style="width:200px;left:0;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="sidebar1.php" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Profile</a>
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-right w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Profile</h1>
  </div>
</div>

<div class="w3-container">
<?php
$nama = "Liandra Rabbani";
$umur = 16;
$kelas = "XI RPL 2";
$jeniskl = "Laki-Laki";
$citacita= ".........";

echo "<h3>Nama: $nama<br></h3>";
echo "Umur: $umur tahun<br>";
echo "Kelas: $kelas<br>";
echo "Jenis Kelamin: $jeniskl<br>";
echo "Cita-Cita: $citacita";
?>
</div>

</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>
