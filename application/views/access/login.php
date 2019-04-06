<h1>Login</h1>

<form action="<?php echo site_url('access/login_check'); ?>" method="post">
<label for="login">Login</label> <input type="text" name="login" id="login" value=""><br>
<label for="password">Password</label> <input type="password" name="password" id="password" value=""><br>
<input type="submit" value="Login">
</form> 

<p>
<br>
<a href="<?php echo site_url('main'); ?>">Return to main page</a>
</p>
