<?php 

$koneksi = mysqli_connect("localhost","root","","dumbways");

//cek koneksi
if (mysqli_connect_error()) {
	echo "Koneksi database gagal" . mysqli_connect_error();
}



 ?>