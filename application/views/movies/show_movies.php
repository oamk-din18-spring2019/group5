<?php include 'movieArray.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie Project</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="../../css/style.css">   -->
<!--   <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>"> -->
   <style type="text/css">
      .img-fluid {
        height: 318px;
        width: 100%;
        padding-top: 1em;
      }
      body {
        background: #3E5151;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #DECBA4, #3E5151);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #DECBA4, #3E5151); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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
 
  <!-- <div class="container-fluid">
    <div class="row">
        <div class="col-sm-4" style="background-color:yellow;">
          <img src="../../images/1.jpg" class="rounded img-fluid">
        <div class="col-sm-4" style="background-color:yellow;">
          <img src="<?php echo base_url('images/2.jpg');?>" class="rounded img-fluid">
        </div>
        <div class="col-sm-4" style="background-color:yellow;">
          <img src="<?php echo base_url('images/3.jpg');?>" class="rounded img-fluid">
        </div>
       <div class="col-sm-4" style="background-color:yellow;">
          <img src="<?php echo base_url('images/1.jpg');?>" class="rounded img-thumbnail img-fluid">
        </div>
        <div class="col-sm-4" style="background-color:yellow;">
          <img src="<?php echo base_url('images/2.jpg');?>" class="rounded img-thumbnail img-fluid">
        </div>
        <div class="col-sm-4" style="background-color:yellow;">
          <img src="<?php echo base_url('images/3.jpg');?>" class="rounded img-thumbnail img-fluid">
        </div>
    </div>
  </div> -->
  <!-- <div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <img src="../../images/1.jpg" class="rounded img-fluid">
    </div>
    <div class="col-sm-4">
      <img src="<?php echo base_url('images/2.jpg');?>" class="rounded img-fluid">
    </div>
    <div class="col-sm-4">
      <img src="<?php echo base_url('images/3.jpg');?>" class="rounded img-fluid">
    </div>
    <div class="col-sm-4">
      <img src="../../images/1.jpg" class="rounded img-fluid">
    </div>
    <div class="col-sm-4">
      <img src="<?php echo base_url('images/2.jpg');?>" class="rounded img-fluid">
    </div>
    <div class="col-sm-4">
      <img src="<?php echo base_url('images/3.jpg');?>" class="rounded img-fluid">
    </div>
  </div>
</div> -->
<?php 

$movies = array(
  array("Aquaman","../../images/1.jpg"),
  array("Vikings","../../images/2.jpg"),
  array("Avengers","../../images/3.jpg"),
  array("Rush Hour","../../images/5.jpg"),
  array("H. Luna","../../images/4.jpg"),
  array("WOWS","../../images/6.jpg"),
  array("Notthing Hill","../../images/7.jpg"),
  array("12 years","../../images/8.jpg"),
  array("Titanic","../../images/9.jpg")
  );




echo "<div class='container-fluid'>
  <div class='row'>";
      for ($i = 0; $i < count($movies); $i++) {
    $img_source = $movies[$i][1];
    // echo '<div class="col-sm-4">'.$movies[$i][0], $movies[$i][1].'</h1></div>';
    echo "<div class='col-sm-4'><img src='{$img_source}' class='rounded img-fluid'></div>";
}
  echo "</div>
</div>";


?>
  <h1>Hi</h1>
  <h2>h2 here</h2>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>