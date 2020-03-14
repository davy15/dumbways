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

      <form class="form-horizontal" method="post" action="aksi.php">
        <fieldset>
          <legend>Create Post</legend>
          <div class="control-group">
            <label class="control-label" for="name">Name</label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="name">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="title">Title</label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="title">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="content">Content</label>
            <div class="controls">
              <textarea name="content"></textarea>
            </div>
          </div>
          <button class="btn btn-primary">Save</button>
        </fieldset>
      </form>

    </div>

  </body>
</html>
