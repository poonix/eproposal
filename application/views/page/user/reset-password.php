<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
	<?php $this->load->view('include/head'); ?>
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login">
		<!-- start: FORGOT -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
					<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Kementerian Ketenagakerjaan Republik Indonesia (binapenta dan pkk)"/>
				</div>
				<!-- start: FORGOT BOX -->
				<div class="box-forgot">
					<form class="form-forgot" id="form-reset-password" role="form">
						<fieldset>
							<legend>
								Reset password Anda
							</legend>
							<p>
								Harap masukkan password baru Anda di bawah ini.
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="form-password" name="form-password" placeholder="Password Baru">
									<i class="fa fa-envelope-o"></i> 
								</span>
								<div id="m-password" class="m-error"></div>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control" id="form-conf-password" name="form-conf-password" placeholder="Konfirmasi Password">
									<i class="fa fa-envelope-o"></i> 
								</span>
								<div id="m-conf-password" class="m-error"></div>
							</div>
							<input type="hidden" id="form-hidden-id-user" name="form-hidden-id-user" value="<?php echo $id_user;?>" />
							<div class="form-actions">
								<a class="btn btn-primary btn-o" href="<?php echo site_url('sign-in'); ?>">
									<i class="fa fa-chevron-circle-left"></i> Sign In
								</a>
								<button type="submit" class="btn btn-primary pull-right">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> e-proposal</span>. <span>All rights reserved</span>
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: FORGOT BOX -->
			</div>
		</div>
		<!-- end: FORGOT -->
		<!-- start: MAIN JAVASCRIPTS -->
		<?php $this->load->view('include/scripts'); ?>
		<!-- end: MAIN JAVASCRIPTS -->
		<?php echo $script; ?>
	</body>
	<!-- end: BODY -->
</html>