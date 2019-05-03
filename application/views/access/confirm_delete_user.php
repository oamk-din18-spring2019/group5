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

<form action="<?php echo site_url('access/delete_user'); ?>" method="post">
<table>

<tr>
<td>ID: </td>
<td><?php echo $user['user_id'] ?><input type="hidden" name="user_id" id="user_id" value="<?php echo $user['user_id'] ?>">
</td>
</tr>

<tr>
<td>Login: </td>
<td><?php echo $user['login'] ?></td>
</tr>


<tr>
<td>First name: </td>
<td><?php echo $user['first_name'] ?></td>
<tr>

<tr>
<td>Last name: </td>
<td><?php echo $user['last_name'] ?></td>
<tr>

</table>
<input type="submit" value="Delete user">
</form> 
</div>
</div>
