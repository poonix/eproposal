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
					<form class="form-forgot" id="form-forgot-password" role="form">
						<fieldset>
							<legend>
								Lupa password Anda?
							</legend>
							<?php
								$s_message = '';
								$s_message = $this->session->flashdata('message_success');
								if($s_message)
								{
							?>
							<div class="alert alert-success fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
								<?php echo $s_message;?>
							</div>
							<?php
								}
								 
								$e_message = '';
								$e_message = $this->session->flashdata('message_error');
								if($e_message)
								{
							?>
							<div class="alert alert-danger fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
								<?php echo $e_message;?>
							</div>
							<?php
								} 
							?>
							<p>
								Harap masukkan email Anda di bawah ini untuk reset password.
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" id="form-email" name="form-email" placeholder="Email">
									<i class="fa fa-envelope-o"></i> 
								</span>
								<div id="m-email" class="m-error"></div>
							</div>
                            <div class="form-group" id="loader" style="display: none;">
                                <img src="<?php echo base_url(); ?>assets/images/icon/loader.gif">
                            </div>
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