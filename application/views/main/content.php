<div>
<div class="side-menu">
<ul>
<li><a href="<?php echo site_url('movies/browse'); ?>">Browse movies</a></li>
<li><a href="<?php echo site_url('movies/show_movies'); ?>">Browse movies</a></li>
<li><a href="<?php echo site_url('movies/search'); ?>">Search movies</a></li>
<?php 

    if(empty($_SESSION['user_logged_in']) == false && $_SESSION['user_logged_in'] == true) {
        //User logged, show admin menu link
        echo "<li><a href=\"" . site_url('access/admin_menu') . "\">Administrator menu</a></li>";
    }
?>
</ul>
</div>
<div class="main-content">
This is a movie site...
</div>
</div>