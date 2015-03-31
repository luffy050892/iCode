 <!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Profile
		</h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Profile
			</li>
		</ol>
	</div>
</div>
<!-- /.row -->
<div class="row">

	<div class="col-lg-4">
		<img class="img-thumbnail" src="" style="width:264px; height:222px;">
		<div class="form-group">
			<label>Upload image</label>
			<input type="file"/>
		</div>
		<div class="form-group">
			<p class="help-block"><a href="<?php echo $base_url ?>users/register">Change Password</a></p>
		</div>
	</div>
	<?php echo form_open('verifylogin'); ?>
		<div class="col-lg-4">
		
			<div class="form-group">
				<label>Username</label>
				<p class="form-control-static">sniperrr05</p>
			</div>
			
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" name="fullname" required/>
			</div>
			
			<div class="form-group">
				<label>E-mail Address</label>
				<input class="form-control" name="email" type="email" required placeholder="Enter a valid email address">
			</div>

			<div class="form-group">
				<label>Gender</label>
				<select class="form-control" name="gender" required pattern=".{2,}" placeholder = "Select Gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="" selected></option>
				</select>
			</div>
		</div>
		
		<div class="col-lg-4">
			<div class="form-group">
				<label>About</label>
				<textarea class="form-control" style="height:255px; resize: none;" name ="about"></textarea>
			</div>
			<button type="submit" class="btn btn-default">Submit Button</button>
			<button type="reset" class="btn btn-default">Reset Button</button>
		</div>
	</form>
</div>