
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>iCode</title>

<!-- Bootstrap Core CSS -->
<link href="<?php echo $base_url; ?>css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo $base_url; ?>css/sb-admin.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="<?php echo $base_url; ?>css/plugins/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php echo $base_url; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<div id="wrapper" style= "padding-left: 0px;">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">iCode</a>
			</div>
		</nav>
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4">
					</div>
					<div class="col-lg-4">
						<?php if(isset($success)){ ?>
						<div class="alert alert-success">
							<strong>Congratulations!</stong> Registration is successfull. You can now login
						</div>
						<?php } ?>
						<div class="alert alert-warning">
						<?php echo validation_errors(); ?>
						</div>
						<?php echo form_open('verifylogin'); ?>
						<h1>Login</h1>
							<div class="form-group">
								<label>Username</label>
								<input class="form-control" name="username" required <?php if(isset($username)){echo "value='".$username."'";} ?>>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" name="password" type="password" required>
							</div>
							<button type="submit" class="btn btn-default">Submit Button</button>
							<button type="reset" class="btn btn-default">Reset Button</button>
						</form>
						<p class="help-block"><a href="<?php echo $base_url ?>users/register">Register now</a></p>
					</div>
					<div class="col-lg-4">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>