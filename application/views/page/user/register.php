<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<!-- start: HEAD -->
	<head>
		<?php $this->load->view('include/head'); ?>
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login">
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
					<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="binapenta"/>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form id="form-user-register" class="form-register">
						<fieldset>
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
                            <?php } ?>
							<legend>
								Register
							</legend>
							<p>
								Enter your personal details below:
							</p>
							<div class="form-group">
								<input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Nama Depan">
                                <div id="m-nama_depan" class="m-error"></div>
							</div>
                            <div class="form-group">
								<input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="nip" name="nip" placeholder="NIP">
                                <div id="m-nip" class="m-error"></div>
							</div>
                            <div class="form-group">
								<select name="kab" class="form-control" id="kab">
									<option value="">-- kab/kota --</option>
                                    <?php if($load_kab->num_rows() > 0){ ?>
                                    <?php foreach($load_kab->result() as $data){ ?>
                                        <option value="<?php echo $data->idkab; ?>"><?php echo $data->nama_kota; ?></option>
                                    <?php } ?>
                                    <?php } ?>
								</select>
                                <div id="m-kab" class="m-error"></div>
							</div>
							<p>
								Enter your account details below:
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" placeholder="Email">
									<i class="fa fa-envelope"></i> </span>
                                <div id="m-email" class="m-error"></div>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="Password">
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" name="password_again" id="password_again" placeholder="Masukkan Password kembali">
									<i class="fa fa-lock"></i> </span>
                                <div id="m-pass" class="m-error"></div>
							</div>
                            <div class="form-group" id="loader" style="display: none;">
                                <img src="<?php echo base_url(); ?>assets/images/icon/loader.gif">
                            </div>
							<div class="form-actions">
								<p>
									Already have an account?
									<a href="<?php echo site_url('user/signin') ?>">
										Log-in
									</a>
								</p>
								<button type="submit" class="btn btn-primary pull-right">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> e-proposal </span>. <span>All rights reserved</span>
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: REGISTER BOX -->
			</div>
		</div>
		<!-- end: REGISTRATION -->
			<!-- start: MAIN JAVASCRIPTS -->
		<?php $this->load->view('include/scripts'); ?>
		<!-- end: MAIN JAVASCRIPTS -->
		<?php echo $script; ?>
	</body>
	<!-- end: BODY -->
</html>

</iframe>
