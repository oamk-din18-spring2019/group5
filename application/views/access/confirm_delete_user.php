<div class="content-header">Administrator menu - Delete user</div>

<div>
<div class="side-menu">
<ul>
<li><a href="<?php echo site_url('access/add_user_form'); ?>">Add new user</a></li>
<li><a href="<?php echo site_url('access/show_users'); ?>">Show users</a></li>
<li><a href="<?php echo site_url('main'); ?>">Main menu</a></li>
</ul>
</div>

<div class="main-content">

<form action="<?php echo site_url('access/modify_user'); ?>" method="post">
<table>

<tr>
<td><label for="login">ID: </label></td>
<td><input type="text" name="user_id" id="user_id" value="<?php echo $user['user_id'] ?>" readonly></td>
</tr>

<tr>
<td><label for="login">Login: </label></td>
<td><input type="text" placeholder="Enter login" name="login" id="login" value="<?php echo $user['login'] ?>" readonly></td>
</tr>

<tr>
<td><label for="password">Password: </label></td>
<td><input type="password" placeholder="Enter Password" name="password" id="password" value="<?php echo $user['password'] ?>" readonly></td>
<tr>


<tr>
<td><label for="first_name">First name: </label></td>
<td><input type="first_name" placeholder="Enter first name" name="first_name" id="first_name" value="<?php echo $user['first_name'] ?>" readonly></td>
<tr>

<tr>
<td><label for="last_name">Last name: </label></td>
<td><input type="last_name" placeholder="Enter last name" name="last_name" id="last_name" value="<?php echo $user['last_name'] ?> " readonly></td>
<tr>

</table>
<input type="submit" value="Delete user">
</form> 
</div>
</div>
