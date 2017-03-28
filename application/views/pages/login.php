<html>
<head>
<title>Login</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('login'); ?>

<div class="container">
<div class="table-responsive">
<h5>Username</h5>
<form>
<input type="text" name="username" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />

<div style="margin-top: 20px"><input type="submit" value="Submit" /></div>

</form>
</div>
</div>
</body>
</html>