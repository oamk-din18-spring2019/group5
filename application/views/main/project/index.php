<?php include 'movieArray.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie Project</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
  <style type="text/css">
    
      body {
        margin: 0;
      }
      h1 {
        color: blue
      }

      .form-control {
        width: 15%;
      }

      .col-md-4 {
        padding: 1px;
        width: 100%;
      }

      .container {
        margin-left: 0;
        margin-right: 0;
      }

      .img-thumbnail {
        width: 100%;
        margin-top: 3em;
        margin-right: 2em;
      }

  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Movie</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <h5 class="nav-link disabled">LoggedIn as: Guest</h5>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <?php 
    print_r($movies);
    selectNum($movies);
  ?>
  <div class="form-inline">
    <div class="form-group">
      <label for="exampleFormControlSelect1">Sort By:</label>
      <select class="form-control form-width" id="exampleFormControlSelect1">
      <option>Title(A-Z)</option>
      <option>Title(Z-A)</option>
      <option>Release Year</option>
      <option>Genre</option>
      </select>
    </div>
  </div>
 
  <div class="container-fluid">
    <div class="row">
      
        <div class="col-sm col-md-4">
          <img src="images/1.jpg" class="rounded img-thumbnail img-fluid">
        </div>
        <div class="col-sm col-md-4">
          <img src="images/2.jpg" class="rounded d-block img-thumbnail">
        </div>
        <div class="col-sm col-md-4">
          <img src="images/3.jpg" class="rounded img-thumbnail">
        </div>
        <div class="col-sm col-md-4">
          <img src="images/1.jpg" class="rounded img-thumbnail img-fluid">
        </div>
        <div class="col-sm col-md-4">
          <img src="images/2.jpg" class="rounded d-block img-thumbnail">
        </div>
        <div class="col-sm col-md-4">
          <img src="images/3.jpg" class="rounded img-thumbnail">
        </div>
        
    </div>
  </div>

  <h1>Hi</h1>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>