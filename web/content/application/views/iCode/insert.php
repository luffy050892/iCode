 <!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Insert Code<small>  </small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i>  <a href="index.html">iCode</a>
			</li>
			<li class="active">
				<i class="fa fa-edit"></i> Add
			</li>
		</ol>
	</div>
</div>
<!-- /.row -->

<div class="row">
	<div class="col-lg-12">
		<form role="form">
			<div class="form-group">
				<label>Title</label>
				<input class="form-control">
				<p class="help-block">Avoid long titles</p>
			</div>

			<div class="form-group">
				<label>Code</label>
				<textarea class="form-control codeEditor" rows="2" style="height:500px;"></textarea>
			</div>
				
			<div class="form-group">
				<div>
					<label>Tags</label>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<button>Clear</button>
						<div style="float:right;">
						<input type="text" style="width: 105px;"/><button>Add</button>
						</div>
					</div>
					<div class="panel-body">
						<label class="checkbox-inline">
							<input type="checkbox">CSS
						</label>
						<label class="checkbox-inline">
							<input type="checkbox">HTML
						</label>
						<label class="checkbox-inline">
							<input type="checkbox">JQUERY
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label>File input</label>
				<input type="file">
			</div>
			
			<button type="submit" class="btn btn-default">Submit Button</button>
			<button type="reset" class="btn btn-default">Reset Button</button>
		</form>
	</div>
</div>