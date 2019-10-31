<?php include_once('userbar.php'); ?>
<form method="POST">
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" name="username" class="form-control" placeholder="Choose your username">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
	</div>
	<div class="form-group">
		<input type="password" class="form-control" name="password2" placeholder="Repeat password">
	</div>
	<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">REGISTER</button>
</form>
<?php if (!empty($data['error_message'])): ?>
	<div class="alert alert-danger">
	<?php echo $data['error_message']; ?>
	</div>
<?php endif; ?>
<?php if (!empty($data['success_message'])): ?>
	<div class="alert alert-success">
	<?php echo $data['success_message']; ?>
	</div>
<?php endif; ?>