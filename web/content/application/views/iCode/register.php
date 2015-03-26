
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>iCode</title>

<!-- jQuery -->
<script src="<?php echo $base_url; ?>js/jquery.js"></script>
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
<script type="text/javascript">
	
  document.addEventListener("DOMContentLoaded", function() {

    // JavaScript form validation

    var checkPassword = function(str)
    {
      var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
      return re.test(str);
    };

    var checkForm = function(e)
    {
   		
      if(this.username.value == "") {
        alert("Error: Username cannot be blank!");
        this.username.focus();
        e.preventDefault(); // equivalent to return false
        return;
      }
      re = /^\w+$/;
      if(!re.test(this.username.value)) {
        alert("Error: Username must contain only letters, numbers and underscores!");
        this.username.focus();
        e.preventDefault();
        return;
      }
      if(this.pwd1.value != "" && this.pwd1.value == this.pwd2.value) {
        if(!checkPassword(this.pwd1.value)) {
          alert("The password you have entered is not valid!");
          this.pwd1.focus();
          e.preventDefault();
          return;
        }
      } else {
        alert("Error: Please check that you've entered and confirmed your password!");
        this.pwd1.focus();
        e.preventDefault();
        return;
      }
    };

    var myForm = document.getElementById("myForm");
    myForm.addEventListener("submit", checkForm, true);

    // HTML5 form validation

    var supports_input_validity = function()
    {
      var i = document.createElement("input");
      return "setCustomValidity" in i;
    }

    if(supports_input_validity()) {

	
      var usernameInput = document.getElementById("field_username");
      //usernameInput.setCustomValidity(usernameInput.title);

      var pwd1Input = document.getElementById("field_pwd1");
      //pwd1Input.setCustomValidity(pwd1Input.title);

      var pwd2Input = document.getElementById("field_pwd2");

      // input key handlers

      usernameInput.addEventListener("keyup", function() {
        usernameInput.setCustomValidity(this.validity.patternMismatch ? usernameInput.title : "");
      }, false);

      pwd1Input.addEventListener("keyup", function() {
        this.setCustomValidity(this.validity.patternMismatch ? pwd1Input.title : "");
        if(this.checkValidity()) {
          pwd2Input.pattern = this.value;
          pwd2Input.setCustomValidity(pwd2Input.title);
        } else {
          pwd2Input.pattern = this.pattern;
          pwd2Input.setCustomValidity("");
        }
      }, false);

      pwd2Input.addEventListener("keyup", function() {
        this.setCustomValidity(this.validity.patternMismatch ? pwd2Input.title : "");
      }, false);

    }

  }, false);

</script>
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
						 <?php echo validation_errors(); ?>
						 <?php echo form_open('#',array('id' => 'myForm')); ?>
							<h1>Register</h1>
							<div class="form-group">
								<label>Username</label>
								<input class="form-control" id="field_username" title="Username must not be blank and contain only letters, numbers and underscores." type="text" required pattern="\w+" name="username">
							</div>
							<div class="form-group">
								<label>Fullname</label>
								<input class="form-control" name="fullname" required>
							</div>

							<div class="form-group">
								<label>Gender</label>
								<select class="form-control" name="gender" required>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Undecided">Undecided</option>
								</select>
							</div>
							
							<div class="form-group">
								<label>E-mail Address</label>
								<input class="form-control" name="email" type="email" required placeholder="Enter a valid email address">
							</div>
							
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" id="field_pwd1" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1">
							</div>
							
							<div class="form-group">
								<label>Confirm Password</label>
								<input class="form-control" id="field_pwd2" title="Please enter the same Password as above." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd2">
							</div>

							<button type="submit" class="btn btn-default">Submit Button</button>
							<button type="reset" class="btn btn-default">Reset Button</button>
						</form>
					</div>
					<div class="col-lg-4">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>