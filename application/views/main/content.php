<h1 class="centered_text">Welcome to our movie site main page!</h1>

<p>
Choose action:<br>
<ul>
<li><a href="<?php echo site_url('movies/show_movies'); ?>">Browse movies</a></li>
<li><a href="<?php echo site_url('reviews/show_reviews'); ?>">Search movies</a></li>
<?php 
    if(empty($_SESSION['user_logged_in']) == false && $_SESSION['user_logged_in'] == true) {
        //User already logged in to system
        echo "<li><a href=\"" . site_url('access/admin_menu') . "\">Administator menu</a></li>";
       

    }
?>
</ul>
</p>
