<h1 class="centered_text">Add new user</h1>



<form action="<?php echo site_url('access/add_user'); ?>" method="post">
<table>

<tr>
<td><label for="login">Login: </label></td>
<td><input type="text" placeholder="Enter login" name="login" id="login" value=""></td>
</tr>

<tr>
<td><label for="password">Password: </label></td>
<td><input type="password" placeholder="Enter Password" name="password" id="password" value=""></td>
<tr>


<tr>
<td><label for="first_name">First name: </label></td>
<td><input type="first_name" placeholder="Enter first name" name="first_name" id="first_name" value=""></td>
<tr>

<tr>
<td><label for="last_name">Last name: </label></td>
<td><input type="last_name" placeholder="Enter last name" name="last_name" id="last_name" value=""></td>
<tr>

</table>
<input type="submit" value="Add user">
</form> 

<p>
<br>
<a href="<?php echo site_url('main'); ?>">Return to main page</a>
</p>
