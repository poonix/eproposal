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
		<!-- start: LOGIN -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
					<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Kementerian Ketenagakerjaan Republik Indonesia (binapenta dan pkk)"/>
				</div>
				<!-- start: LOGIN BOX -->
				<div class="box-login">
					<form id="form-user-login" class="form-login" role="form">
						<fieldset> 
							<legend>
								Sign In ke akun Anda
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
								Silakan masukkan email dan password Anda
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" id="form-email" name="form-email" placeholder="Email">
									<i class="fa fa-user"></i> 
								</span>
								<div id="m-email" class="m-error"></div>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" id="form-password" name="form-password" placeholder="Password">
									<i class="fa fa-lock"></i>
									<a class="forgot" href="<?php echo site_url('forgot-password'); ?>">
										Lupa password Anda?
									</a> 
								</span>
								<div id="m-password" class="m-error"></div>
							</div>
                            <div class="form-group" id="loader" style="display: none;">
                                <img src="<?php echo base_url(); ?>assets/images/icon/loader.gif">
                            </div>
							<div class="form-actions">
								<!-- Commented Out by Deby -->
								<!--
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="remember" value="1">
									<label for="remember">
										Biarkan saya tetap masuk
									</label>
								</div>
								-->
								<button type="submit" class="btn btn-primary pull-right">
									Sign In <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
                            <br />
                             <div class="form-group">
                                <p style="text-align: center;">Tidak memiliki akun?<br /><a href="<?php echo site_url('user/register'); ?>">Daftarkan diri anda disini</a></p>
                            </div>
						</fieldset>
                       
					</form>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> e-proposal</span>. <span>All rights reserved</span>
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: LOGIN BOX -->
			</div>
		</div>
		<!-- end: LOGIN -->
		<!-- start: MAIN JAVASCRIPTS -->
		<?php $this->load->view('include/scripts'); ?>
		<!-- end: MAIN JAVASCRIPTS -->
		<?php echo $script; ?>
	</body>
	<!-- end: BODY -->
</html>