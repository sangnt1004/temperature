<?php
$error = array();
if (isset($_POST["btnSubmit"])) {
	if (checkEmpty($_POST["txtEmail"])) {
		$error[] = "Please Enter Your Email";
	} 
	if (checkEmpty($_POST["txtPass"])) {
		$error[] = "Please Enter Your Password";
	}
	if (checkEmpty($_POST["txtName"])) {
		$error[] = "Please Enter Your Name";
	}
	if (checkEmpty($_POST["sltLevel"])) {
		$error[] = "Please choose Your Level";
	}
	if (empty($error)) {
		$data = array(
			'email'     => $_POST["txtEmail"],
			'pass'      => md5($_POST["txtPass"]),
			'level'     => $_POST["sltLevel"],
			'name' 		=> $_POST["txtName"],
			'status'    => (isset($_POST["chkStatus"])) ? "On" : "Off",
			'created_at'=> time()
			);
		add ($conn,$data,$error);
	}
}
?>


<div class="page-header">
	<h1>
		Add User
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Common form elements and layouts
		</small>
	</h1>

	<div class="space-4"></div>
	<div class="space-4"></div>
	<div class="col-md-12">
		<?php include 'resources/block/error.php'; ?>
	</div>
	<form class="form-horizontal" role="form" method="post">
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

			<div class="col-sm-9">
				<input name="txtEmail" type="email" id="form-field-1" placeholder="Email" class="col-xs-10 col-sm-5" />
			</div>
		</div>

		<div class="space-4"></div>


		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password </label>

			<div class="col-sm-9">
				<input name="txtPass" type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Name </label>

			<div class="col-sm-9">
				<input name="txtName" type="text" id="form-field-1" placeholder="Full Name" class="col-xs-10 col-sm-5" />
			</div>
		</div>

		<div class="space-4"></div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-select-1">Level </label>
			<div class="col-sm-9">
				<select name="sltLevel" class=" col-xs-10 col-sm-5" id="form-field-select-1">
					<option value="">No data</option>
					<option value="3">Admin</option>
					<option value="2">Vip Member</option>
					<option value="1">Member</option>
				</select>
			</div>
		</div>
		<div class="space-4"></div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="chkStatus">Status</label>
			<div class="col-sm-9">
				<label>
					<input name="chkStatus" class="ace ace-switch ace-switch-4" type="checkbox" checked="checked" />
					<span class="lbl"></span>
				</label>
			</div>
		</div>
		<div class="space-4"></div>	
		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button name="btnSubmit" class="btn btn-info" type="submit">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Submit
				</button>

				&nbsp; &nbsp; &nbsp;
				<button class="btn" type="reset">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					Reset
				</button>
			</div>
		</div>
	</form>