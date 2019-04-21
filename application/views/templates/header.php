<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title;?></title>
<?php echo link_tag('css/movies.css');?>
</head>
<body>

<div class="menu-bar">
<?php 
    if(empty($_SESSION['user_logged_in']) == false && $_SESSION['user_logged_in'] == true) {
        //User logged in, show logout
       echo $_SESSION['user_first_name'] . " " . $_SESSION['user_last_name'] . " | " . "<a href=\"" .  site_url('access/logout') . "\">Logout</a>";
    } else {
        //User not logged in, show login
        echo "<a href=\"" .  site_url('access/login') . "\">Admin login</a>";
    }
?>
</div>
