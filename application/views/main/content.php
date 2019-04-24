<div class="content-header">Welcome to group5 movie site!</div>

<div>
<div class="side-menu">
<ul>
<li><a href="<?php echo site_url('movies/show_movies'); ?>">Show movies</a></li>
<li><a href="<?php echo site_url('movies/show_movies'); ?>">Shub</a></li>
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
</div>
</div>
