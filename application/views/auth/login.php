<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Authentication User - Travelly</title>
</head>
<link rel="stylesheet" href="<?php echo assets('/bootstrap/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?php echo assets('font-awesome/css/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="<?= assets('css/login.css') ?>">
<body style="background-image: url('<?= assets('images/bg-login.jpeg'); ?>');">
	<div id="content">
		<div class="container">
			<div class="col-md-5 col-md-offset-4">
				<div id="box-login">
					<div class="box-header">
						AUTHENTICATION USER
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="panel-head">
								Login Now
							</div>
							<div class="panel-form">
								<form action="<?php echo base_url('auth'); ?>" class="form-group" method="POST">
									<div class="input-group">
										<span class="input-group-addon">Username</span>
										<input type="text" name="username" class="form-control" required autofocus autocomplete="off" placeholder="Type username here...">
									</div>
									<?php echo form_error('username'); ?>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Password</span>
										<input type="password" name="password" class="form-control" required placeholder="Type password here...">
									</div>
									<?php echo form_error('password'); ?>
									<br>
									<button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo assets('plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo assets('bootstrap/js/bootstrap.min.js'); ?>"></script>
	<?php if (isset($_SESSION['login_fail'])): ?>
		<script type="text/javascript">
			alert("<?= $_SESSION['login_fail']; ?>")
		</script>
	<?php endif; ?>
</body>
</html>