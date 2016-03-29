<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header">
						<a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
							<i class="ti-align-justify"></i>
						</a>
						<a class="navbar-brand" href="#">
							<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="binapenta"/>
						</a>
						<a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
							<i class="ti-align-justify"></i>
						</a>
						<a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<i class="ti-view-grid"></i>
						</a>
					</div>
					<!-- end: NAVBAR HEADER -->
					<!-- start: NAVBAR COLLAPSE -->
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-right">
							<!-- start: USER OPTIONS DROPDOWN -->
							<li class="dropdown current-user">
                                <?php if ($this->session->userdata('logged_in') == TRUE) { ?>
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<img src="<?php echo base_url(); ?>assets/images/profile/default-profile.gif" alt=""> <span class="username"><?php echo $this->session->userdata('sess_user_first_name'); ?> <i class="ti-angle-down"></i></i></span>
								</a>
                                <?php } ?>
								<ul class="dropdown-menu dropdown-dark">
									<li>
										<a href="<?php echo site_url('user/my_profile'); ?>">
											My Profile
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('user/process_signout'); ?>">
											Sign Out
										</a>
									</li>
								</ul>
							</li>
							<!-- end: USER OPTIONS DROPDOWN -->
						</ul>
						<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
						<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<div class="arrow-left"></div>
							<div class="arrow-right"></div>
						</div>
						<!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
					</div>
					<a class="dropdown-off-sidebar">
						&nbsp;
					</a>
					<!-- end: NAVBAR COLLAPSE -->
				</header>