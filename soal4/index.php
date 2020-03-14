<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Soal 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  
  </head>

  <body>

    

    <div class="container">

      <div class="row">
      	<div class="span4">
      		<h1>DumbSocmed</h1>
      	</div>
      	<div class="span4 mr-12">
      		<a class="btn btn-primary" href="post.php">Add Post</a>
      	</div>
      </div><br><br><br>	

      <div class="row">
      	<?php 
         include 'koneksi.php';

         // menampilkan data dari database
         $data = mysqli_query($koneksi,"select * from posts_tb");
         while ($d = mysqli_fetch_array($data)) {
      	?>
        <div class="span6">
          <h2><?= $d['title']; ?></h2>
          <h6><?= $d['createdBy']; ?></h6>
           <p><?= $d['content']; ?></p>
        </div>
        <?php  
        }
        ?>
      </div>

      <hr>

    </div>

  </body>
</html>
