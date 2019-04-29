<div class="content-header">Welcome to group5 movie site!</div>

<div>
<div class="side-menu">
<ul>
<li><a href="<?php echo site_url('movies/show_movies'); ?>">Show movies</a></li>
<li><a href="<?php echo base_url('trivia/index.html'); ?>">Trivia</a></li>
<?php

    if(empty($_SESSION['user_logged_in']) == false && $_SESSION['user_logged_in'] == true) {
        //User logged, show admin menu link
        echo "<li><a href=\"" . site_url('access/admin_menu') . "\">Administrator menu</a></li>";
    }
?>
</ul>
</div>
<div class="main-content">
To start, choose wanted action from the left side menu.

<br>
<br>
<div class="slide-image">
    <img class="slide-image" src="" id="slide-image">
</div>
<script>
var posters = [<?php
$counter = 0;
foreach ($posters as $poster) {
    if($counter != 0) {
        echo ", ";
    }
    //Note, we need to remove "../../" from poster address to get correct url with base_url
    echo "\"" . base_url(str_replace('../', '', $poster)) . "\"";
    $counter++;
}
?>
]

//Simple image fading javascript, when changing image, set image opacity to 0 and then to 1
var slideIndex = 0;
fadeIn();

function fadeOut() {
    document.getElementById("slide-image").style.opacity = "0";
    setTimeout(fadeIn, 1200);
}

function fadeIn() {
    document.getElementById("slide-image").src = posters[slideIndex];
    document.getElementById("slide-image").style.opacity = "1";
    slideIndex++;
    if(slideIndex > posters.length-1) {
        slideIndex = 0
    }
    setTimeout(fadeOut, 5000);
}
</script>

</div>
</div>
