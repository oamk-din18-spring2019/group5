<h1 class="centered_text">Movie site login</h1>



<form action="<?php echo site_url('access/login_check'); ?>" method="post">
<table>
<tr>
<td><label for="login">Login</label></td>
<td><input type="text" placeholder="Enter login" name="login" id="login" value=""></td>
</tr>
<tr>
<td><label for="password">Password</label></td>
<td><input type="password"  placeholder="Enter Password" name="password" id="password" value=""></td>
<tr>
</table>
<input type="submit" value="Login">
</form> 

<p>
<br>
<a href="<?php echo site_url('main'); ?>">Return to main page</a>
</p>

