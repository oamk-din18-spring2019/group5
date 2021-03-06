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
      <form action="#" method="post">
        <label for="exampleFormControlSelect1">Sort By:
        <select class="form-control form-width" id="exampleFormControlSelect1" name="sorts">
        <option value="Alph">Title(A-Z)</option>
        <option value="Reverse_alph">Title(Z-A)</option>
        <option value="Year">Release Year</option>
        <option value="Genre">Genre</option>
        </select>
        <input type="submit" name="submit" value="Sort" />
        </label>
      </form>
      
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

        function sortAsc($a, $b) {
    return ($a[0] < $b[0]) ? 1 : -1;
} 

function sortDesc($a, $b) {
    return ($a[0] < $b[0]) ? 1 : -1;
} 


 
      ?>
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

// if(isset($_POST['submit'])){
// $selected_val = $_POST['sorts'];  // Storing Selected Value 
        // switch($selected_val) {
        //   case 'Alph' :
        //   usort($movies, 'sortDesc');
        //   print_r($movies);
        // }
// if ($selected_val == 'Alph') {
//   echo '1 selected';
//   usort($movies, 'sortDesc');
//   print_r($movies);
//   refresher($movies);
//   } else if ($selected_val == 'Reverse_alph') {
//   echo '2 selected';
//   usort($movies, 'sortAsc');
//   print_r($movies);
//   refresher($movies);
//   } else {
//     echo 'SOort';
//   }
//   }
// function compareByName($a, $b) {
//   return strcmp($a[0], $b[0]);
// }
// usort($movies, 'compareByName');
// /* The next line is used for debugging, comment or delete it after testing */
// print_r($movies);


// usort($movies, 'sortAsc');


function refresher($movies){
  
    echo "<div class='container-fluid'>
  <div class='row'>";
      for ($i = 0; $i < count($movies); $i++) {
    $img_source = $movies[$i][1];
    // echo '<div class="col-sm-4">'.$movies[$i][0], $movies[$i][1].'</h1></div>';
    echo "<div class='col-sm-4'><img src='{$img_source}' class='rounded img-fluid'></div>";
}
  echo "</div>
</div>";
  } 
  refresher($movies);

  // var_dump($movie_data);
  foreach($movie_data as $row)
  {
    echo $row->title.'-'.$row->img_url.'<br>';
  }

  for ($i=0; $i<count($movie_data); $i++){
    echo $movie_data[$i]->title;
  }

  function refresher2($movie_data){
  
    echo "<div class='container-fluid'>
  <div class='row'>";
      for ($i = 0; $i < count($movie_data); $i++) {
    $title = $movie_data[$i]->title;
    $imgurl = $movie_data[$i]->img_url;
    // echo '<div class="col-sm-4">'.$movies[$i][0], $movies[$i][1].'</h1></div>';
    echo "<div class='col-sm-4'><img src='{$imgurl}' class='rounded img-fluid'></div>";
}
  echo "</div>
</div>";
  } 

  refresher2($movie_data);
?>
  <h1>Hi</h1>
  <h2>h2 here</h2>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

