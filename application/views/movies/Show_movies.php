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
          <a class="nav-link" href="<?php echo site_url('main'); ?>">Back to main page</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="form-inline">
    <div class="form-group">
      <form action="#" method="post">
        <label for="exampleFormControlSelect1">Sort By:
        <select class="form-control form-width" id="exampleFormControlSelect1" name="sorts">
        <option value="None">Choose</option>
        <option value="Alph">Title(A-Z)</option>
        <option value="Reverse_alph">Title(Z-A)</option>
        <option value="YearAsc">Release Year(Ascending)</option>
        <option value="YearDesc">Release Year(Descending)</option>
        <option value="Genre">Genre</option>
        </select>
        <input type="submit" name="submit" value="Sort" />
        </label>
      </form>
      
    </div>
  </div>
 
 
<?php

        function sortAsc($a, $b) {
    return ($a[0] < $b[0]) ? 1 : -1;
} 

function sortDesc($a, $b) {
    return ($a[0] < $b[0]) ? 1 : -1;
} 
      ?>
<?php 


  
  function refresher($movie_data){
  
    echo "<div class='container-fluid'>
  <div class='row'>";
      for ($i = 0; $i < count($movie_data); $i++) {
    $title = $movie_data[$i]->title;
    $genre = $movie_data[$i]->genre;
    $imgurl = $movie_data[$i]->img_url;
    $year = $movie_data[$i]->year;
    $descr = $movie_data[$i]->description;
    $link = $movie_data[$i]->link;
    echo "<div class='col-sm-4'><a href='$link'><img src='{$imgurl}' class='rounded img-fluid'></a><div class='caption'><h4>{$title} ({$year})</h4><h6>{$genre}</h6></div></div>";
    
}
  echo "</div>
</div>";
  } 

  

  if(isset($_POST['submit'])){
  $selected_val = $_POST['sorts'];  // Storing Selected Value 
        switch($selected_val) {
          case 'None' :
          refresher($movie_data);
          break;
          case 'Alph' :
          refresher($sort_title_asc);
          break;
          case 'Reverse_alph' :
          refresher($sort_title_desc);
          break;
          case 'YearAsc' :
          refresher($sort_year_asc);
          break;
          case 'YearDesc' :
          refresher($sort_year_desc);
          break;
          case 'Genre' :
          refresher($sort_genre);
          break;
          default:
          refresher($movie_data);
        }
      }
  else {
    refresher($movie_data);
  }
?>
 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

