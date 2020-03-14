<?php 
include "koneksi.php";

$title = $_POST['title'];
$content = $_POST['content'];
$name = $_POST['name'];

$result = mysqli_query($koneksi, "INSERT INTO posts_tb(title,content,createdBy) 
	VALUES('$title','$content','$name')");

header("location:index.php");





 ?>