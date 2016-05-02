<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">
					<nav>
						<!-- start: SEARCH FORM 
						<div class="search-form">
							<a class="s-open" href="#">
								<i class="ti-search"></i>
							</a>
							<form class="navbar-form" role="search">
								<a class="s-remove" href="#" target=".navbar-form">
									<i class="ti-close"></i>
								</a>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search...">
									<button class="btn search-button" type="submit">
										<i class="ti-search"></i>
									</button>
								</div>
							</form>
						</div>-->
						<!-- end: SEARCH FORM -->
						<!-- start: MAIN NAVIGATION MENU -->
						<div class="navbar-title">
							<span>E-PROPOSAL</span>
						</div>
						<ul class="main-navigation-menu">
							<li <?php if(($this->uri->segment(1) == 'dashboard') || ($this->uri->segment(1) == '')){ ?> class="active open" <?php } ?>>
								<a href="<?php echo base_url(); ?>">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-home"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Dashboard </span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-layout-grid2"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Master Data </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="<?php echo site_url('daftar-provinsi')?>">
											<span class="title">Daftar Provinsi</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('daftar-kabupaten')?>">
											<span class="title">Daftar Kabupaten/Kota</span>
										</a>
									</li>
                                    <li>
										<a href="<?php echo site_url('daftar-kegiatan')?>">
											<span class="title">Daftar Kegiatan</span>
										</a>
									</li>
                                    <li>
										<a href="<?php echo site_url('daftar-sub-kegiatan')?>">
											<span class="title">Daftar Sub Kegiatan</span>
										</a>
									</li>
									<!--
									<li>
										<a href="<?php //echo site_url('daftar-kecamatan')?>">
											<span class="title">Daftar Kecamatan</span>
										</a>
									</li>
									<li>
										<a href="<?php //echo site_url('daftar-desa')?>">
											<span class="title">Daftar Desa</span>
										</a>
									</li>
									-->
								</ul>
							</li>
							<li <?php if($this->uri->segment(1) == 'proposal'){ ?> class="active open" <?php } ?>>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-pencil-alt"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Proposal </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">								
									<li>
										<a href="<?php echo site_url('tambah-proposal'); ?>">
											<span class="title">Buat Proposal</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('daftar-proposal'); ?>">
											<span class="title">Daftar Proposal</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('draft-proposal')?>">
											<span class="title">Draft Proposal</span>
										</a>
									</li>
									<li>
										<a href="form_image_cropping.html">
											<span class="title">Persetujuan Proposal</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Pegawai </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="<?php echo site_url('daftar-pegawai'); ?>">
											<span class="title"> Daftar Pegawai </span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('hak-akses-pegawai'); ?>">
											<span class="title"> Hak Akses Pegawai </span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-folder"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Report </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="javascript:;">
											<span>Item 1</span> <i class="icon-arrow"></i>
										</a>
										<ul class="sub-menu">
											<li>
												<a href="#">
													Sample Link 1
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 2
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 3
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="javascript:;">
											<span>Item 2</span> <i class="icon-arrow"></i>
										</a>
										<ul class="sub-menu">
											<li>
												<a href="#">
													Sample Link 1
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 2
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 3
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="javascript:;">
											<span>Item 3</span> <i class="icon-arrow"></i>
										</a>
										<ul class="sub-menu">
											<li>
												<a href="#">
													Sample Link 1
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 2
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 3
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<!-- end: MAIN NAVIGATION MENU -->
						<!-- start: DOCUMENTATION BUTTON -->
						<div class="wrapper">
							<a href="documentation.html" class="button-o">
								<i class="ti-help"></i>
								<span>Documentation</span>
							</a>
						</div>
						<!-- end: DOCUMENTATION BUTTON -->
					</nav>
				</div>
			</div>