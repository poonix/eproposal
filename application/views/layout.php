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
	<body>
		<div id="app">
			<!-- sidebar -->
			<?php $this->load->view('include/sidebar'); ?>
			<!-- / sidebar -->
			<div class="app-content">
				<!-- start: TOP NAVBAR -->
				<?php $this->load->view('include/topbar'); ?>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<?php echo $contents; ?>
				</div>
			</div>
			<!-- start: FOOTER -->
			<?php $this->load->view('include/footer'); ?>
			<!-- end: FOOTER -->
			<!-- start: SETTINGS -->
			<?php $this->load->view('include/setting-theme'); ?>
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<?php $this->load->view('include/scripts'); ?>
		<!-- end: MAIN JAVASCRIPTS -->
		<?php echo $script; ?>
	</body>
</html>
