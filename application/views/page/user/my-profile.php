<?php $data=$load_profile->result_array(); ?>
<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">Profil User</h1>
		   </div>
			<ol class="breadcrumb">
				<li>
					<span><?php echo $this->session->userdata('sess_user_first_name'); ?></span>
				</li>
				<li class="active">
					<span>Profil Saya</span>
				</li>
			</ol>
		</div>
	</section>
	<!-- end: PAGE TITLE -->
	<!-- start: USER PROFILE -->
	<div class="container-fluid container-fullw bg-white">
		<div class="row">
			<div class="col-md-12">
				<div class="tabbable">
					<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
						<li class="active">
							<a data-toggle="tab" href="#panel_overview" id="p-overview">
								Overview
							</a>
						</li>
						<li>
							<a data-toggle="tab" href="#panel_edit_account">
								Ubah Akun
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="panel_overview" class="tab-pane fade in active">
							<div class="row">
								<div class="col-sm-5 col-md-4">
									<div class="user-left">
										<div class="center">
											<h4 id="ov-name"><?php echo $s_user_first_name; ?> <?php echo $s_user_last_name; ?></h4>
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="user-image">
													<div id="ov-photo" class="fileinput-new thumbnail">
													<?php if($data[0]['foto_profil'] == ''){ ?>
													<img src="<?php echo base_url(); ?>assets/images/profile/default-profile.gif" alt="">
													<?php }else{ ?>
													<img src="<?php echo base_url(); ?>assets/images/profile/<?php echo $data[0]['foto_profil']; ?>" alt="<?php echo $s_user_first_name; ?> <?php echo $s_user_last_name; ?>">
													<?php } ?>
													</div>
													<div class="fileinput-preview fileinput-exists thumbnail"></div>
													<div class="user-image-buttons">
														<a href="#panel_edit_account" class="show-tab"><span class="btn btn-azure btn-file btn-sm"><span class="fileinput-new"><i class="fa fa-pencil"></i></span><span class="fileinput-exists"><i class="fa fa-pencil"></i></span>
															
														</span></a>
														<a href="#" class="btn fileinput-exists btn-red btn-sm" data-dismiss="fileinput">
															<i class="fa fa-times"></i>
														</a>
													</div>
												</div>
											</div>
											<hr>
											<div class="social-icons block">
												<ul>
													<li data-placement="top" data-original-title="Twitter" class="social-twitter tooltips">
														<a href="http://www.twitter.com" target="_blank">
															Twitter
														</a>
													</li>
													<li data-placement="top" data-original-title="Facebook" class="social-facebook tooltips">
														<a href="http://facebook.com" target="_blank">
															Facebook
														</a>
													</li>
													<li data-placement="top" data-original-title="Google" class="social-google tooltips">
														<a href="http://google.com" target="_blank">
															Google+
														</a>
													</li>
													<li data-placement="top" data-original-title="LinkedIn" class="social-linkedin tooltips">
														<a href="http://linkedin.com" target="_blank">
															LinkedIn
														</a>
													</li>
													<li data-placement="top" data-original-title="Github" class="social-github tooltips">
														<a href="#" target="_blank">
															Github
														</a>
													</li>
												</ul>
											</div>
											<hr>
										</div>
										<table class="table table-condensed">
											<thead>
												<tr>
													<th colspan="3">Informasi Kontak</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Email:</td>
													<td id="ov-email"><?php echo $data[0]['email']; ?>
													<!--<a href="mailto:<?php //echo $data[0]['email']; ?>">
														<?php //echo $data[0]['email']; ?>
													</a>-->
													</td>
													<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
												</tr>
												<tr>
													<td>Telepon:</td>
													<td id="ov-phone"><?php echo $data[0]['nomor_telepon']; ?></td>
													<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
												</tr>
											</tbody>
										</table>
										<table class="table">
											<thead>
												<tr>
													<th colspan="3">Informasi Umum</th>
												</tr>
											</thead>
											<tbody>
												
												<tr>
													<td>Provinsi</td>
													<td id="ov-province"><?php echo ucwords($data[0]['provinsi']); ?></td>
													<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
												</tr>
												<tr>
													<td>Kabupaten</td>
													<td id="ov-city"><?php echo ucwords($data[0]['kabupaten']); ?></td>
													<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
												</tr>
												<!--
												<tr>
													<td>SK</td>
													<td><?php //echo $data[0]['sk']; ?></td>
													<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
												</tr>
												-->
												<tr>
													<td>Hak Akses</td>
													<td><span class="label label-sm label-info"><?php echo ucwords($data[0]['definisi']);?></span></td>
													<!--<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>-->
												</tr>
												<tr>
													<td>Status</td>
													<td>
														<?php if($data[0]['is_active']=='1'){?>
														<span class="label label-sm label-success">Aktif</span>
														<?php } else { ?>
														<span class="label label-sm label-danger">Tidak Aktif</span>
														<?php } ?>
													</td>
													<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
												</tr>
												<tr>
													<td>Terakhir Logged In</td>
													<td>56 min</td>
													<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-sm-7 col-md-8">												
									<div class="panel panel-white" id="activities">
										<div class="panel-heading border-light">
											<h4 class="panel-title text-primary">Aktifitas Terbaru</h4>
											<paneltool class="panel-tools" tool-collapse="tool-collapse" tool-refresh="load1" tool-dismiss="tool-dismiss"></paneltool>
										</div>
										<div collapse="activities" ng-init="activities=false" class="panel-wrapper">
											<div class="panel-body">
												<ul class="timeline-xs">
													<?php if($load_activities->num_rows() > 0){ ?>
													<?php foreach($load_activities->result() as $data1){ ?>
													<li class="timeline-item">
														<div class="margin-left-15">
															<div class="text-muted text-small">
																<?php echo tgl_indo($data1->date); ?>
															</div>
															<p>	
																<?php echo $data1->description; ?>	
															</p>
														</div>
													</li>
													<?php } ?>
													<?php } ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="panel_edit_account" class="tab-pane fade">
							<!--
							<?php
								/*$s_message = '';
								$s_message = $this->session->flashdata('message_success');
								if($s_message)
								{*/
							?>
							<div class="alert alert-success fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
								<?php //echo $s_message;?>
							</div>
							<?php
								/*}
								
								$e_message = '';
								$e_message = $this->session->flashdata('message_error');
								if($e_message)
								{*/
							?>
							<div class="alert alert-danger fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
								<?php //echo $e_message;?>
							</div>
							<?php
								//}
							?>
							-->
							
							<!-- Set message using script -->
							<div id="m-ep-success"></div>
							<div id="m-ep-error"></div>
							
							<form role="form" id="form-edit-profile">
								<input type="hidden" id="f-hidden-email-user" name="f-hidden-email-user" value="<?php echo $data[0]['email'];?>" />
								<fieldset>
									<legend>
										Info Akun
									</legend>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">
													Nama Depan<span class="symbol required"></span>
												</label>
												<input type="text" class="form-control" id="f-ep-firstname" name="f-ep-firstname" value="<?php echo $data[0]['nama_depan']; ?>">
												<div id="m-ep-firstname"></div>
											</div>
											<div class="form-group">
												<label class="control-label">
													Nama Belakang
												</label>
												<input type="text" class="form-control" id="f-ep-lastname" name="f-ep-lastname" value="<?php echo $data[0]['nama_belakang']; ?>">
											</div>
											<div class="form-group">
												<label class="control-label">
													NIP<span class="symbol required"></span>
												</label>
												<input type="text" placeholder="12312312312" class="form-control" id="f-ep-nip" name="f-ep-nip" value="<?php echo $data[0]['nip']; ?>">
												<div id="m-ep-nip"></div>
											</div>
											
											<div class="form-group">
												<label class="control-label">
													Alamat Email<span class="symbol required"></span>
												</label>
												<input type="text" placeholder="example@example.com" class="form-control" id="f-ep-email" name="f-ep-email" value="<?php echo $data[0]['email']; ?>">
												<div id="m-ep-email"></div>
											</div>
											<div class="form-group">
												<label class="control-label">
													Nomor Telepon
												</label>
												<input type="text" placeholder="08572662222" class="form-control" id="f-ep-phone" name="f-ep-phone" value="<?php echo $data[0]['nomor_telepon']; ?>">
												<div id="m-ep-phone"></div>
											</div>
											<div class="form-group">
												<label class="control-label">
													Provinsi<span class="symbol required"></span>
												</label><br />
												<?php $aattrib_p = array('id'=>'f-ep-province','class'=>'form-control'); ?>
												<?php echo ($id_provinsi == '') ? form_dropdown('f-ep-province', $load_provinsi, $aattrib_p) : form_dropdown('f-ep-province', $load_provinsi, $id_provinsi, $aattrib_p); ?>
												<div id="m-ep-province"></div>
											</div>
											<div class="form-group">
												<label class="control-label">
													Kabupaten/kota<span class="symbol required"></span>
												</label><br />
												<?php $aattrib_c = array('id'=>'f-ep-city','class'=>'form-control'); ?>
												<?php echo ($id_kabupaten == '') ? form_dropdown('f-ep-city', $load_kabupaten, $aattrib_c) : form_dropdown('f-ep-city', $load_kabupaten, $id_kabupaten, $aattrib_c); ?>
												<div id="m-ep-city"></div>
											</div>
											<?php
												if($data[0]['id_user_group']==1) //Administrator only
												{
											?>
											<div class="form-group">
												<label class="control-label">
													Status<span class="symbol required"></span>
												</label><br />
												<?php $content = array(''=>'-- Pilih Status --','1'=>'Aktif','0'=>'Tidak Aktif'); $aattrib_s = array('id'=>'f-ep-status','class'=>'form-control'); ?>
												<?php echo form_dropdown('f-ep-status', $content, $data[0]['is_active'], $aattrib_s); ?>
												<div id="m-ep-status"></div>
											</div>
											<?php
												}
											?>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>
													Unggah Foto
												</label>
												<div class="fileinput fileinput-new" data-provides="fileinput">
													<div class="fileinput-new thumbnail" id="ep-thumbnail">
														<?php 
															if($data[0]['foto_profil']=='')
															{
														?>
														<img src="<?php echo base_url(); ?>assets/images/profile/default-profile.gif" alt="profile picture">
														<?php
															}
															else
															{
														?>
														<img src="<?php echo base_url(); ?>assets/images/profile/<?php echo $data[0]['foto_profil'];?>" alt="profile picture">
														<?php
															}
														?>
													</div>
													<div class="fileinput-preview fileinput-exists thumbnail" id="ep-preview"></div>
													<div class="user-edit-image-buttons">
														<?php 
															if($data[0]['foto_profil']=='')
															{
														?>
														<span class="btn btn-azure btn-file">
															<span class="fileinput-new"><i class="fa fa-picture"></i> Pilih Foto</span>
															<span class="fileinput-exists"><i class="fa fa-picture"></i> Ubah</span>
															<input type="file" id="f-ep-photo" name="f-ep-photo">
														</span>
														<a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">
															<i class="fa fa-times"></i> Hapus
														</a>
														<?php
															}
															else
															{
														?>
														<div class="btn btn-azure btn-file" id="b-default-photo"> Set Foto Standar</div><input type="hidden" id="f-ep-hidden-photo" name="f-ep-hidden-photo">
														<span class="btn btn-azure btn-file">
															<span class="fileinput-new"><i class="fa fa-picture"></i> Ubah</span><span class="fileinput-exists"><i class="fa fa-picture"></i> Ubah</span>
															<input type="file" id="f-ep-photo" name="f-ep-photo">
														</span>
														<?php
															}
														?>
													</div>
												</div>
											</div>
										</div>
										<!--
										<div class="col-md-6">
											<div class="form-group">
												<label>
													Unggah SK
												</label>
												<div class="fileinput fileinput-new" data-provides="fileinput">
													<div class="user-edit-image-buttons">
														<span class="btn btn-azure btn-file"><span class="fileinput-new"><i class="fa fa-picture"></i> Upload Sk</span><span class="fileinput-exists"><i class="fa fa-picture"></i> Ubah</span>
															<input type="file">
														</span>
														<a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">
															<i class="fa fa-times"></i> Hapus
														</a>
													</div>
												</div>
											</div>
										</div>
										-->
									</div>
								</fieldset>
								
								<div class="row">
									<div class="col-md-12">
										<div>
											<span class="symbol required"></span> Kolom yang harus diisi
											<hr>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<p>
											Dengan menekan PERBARUI, Anda telah menyetujui Kebijakan serta Syarat dan Kondisi yang berlaku.
										</p>
									</div>
									<div class="col-md-4">
										<button class="btn btn-primary pull-right" type="submit">
											Perbarui <i class="fa fa-arrow-circle-right"></i>
										</button>
									</div>
								</div>
							</form>

							<br/><br/><br/>
							
							<!-- Set message using script -->
							<div id="m-cp-success"></div>
							<div id="m-cp-error"></div>
							
							<form role="form" id="form-change-password">
								<fieldset>
									<legend>
										Ubah Password
									</legend>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">
													Password Baru<span class="symbol required"></span>
												</label>
												<input type="password" class="form-control" id="f-cp-password" name="f-cp-password">
												<div id="m-cp-password"></div>
											</div>
											<div class="form-group">
												<label class="control-label">
													Konfirmasi Password<span class="symbol required"></span>
												</label>
												<input type="password" class="form-control" id="f-cp-confirm-password" name="f-cp-confirm-password">
												<div id="m-cp-confirm-password"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<button class="btn btn-primary pull-left" type="submit">
												Simpan <i class="fa fa-arrow-circle-right"></i>
											</button>
										</div>
									</div>
								</fieldset>
							</form>
							
						</div>
						<!--
						<div id="panel_projects" class="tab-pane fade">
							<table class="table" id="projects">
								<thead>
									<tr>
										<th>Project Name</th>
										<th class="hidden-xs">Client</th>
										<th>Proj Comp</th>
										<th class="hidden-xs">%Comp</th>
										<th class="hidden-xs center">Priority</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>IT Help Desk</td>
										<td class="hidden-xs">Master Company</td>
										<td>11 november 2014</td>
										<td class="hidden-xs">
										<div class="progress active progress-xs">
											<div style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar" class="progress-bar progress-bar-warning">
												<span class="sr-only"> 70% Complete (danger)</span>
											</div>
										</div></td>
										<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
									</tr>
									<tr>
										<td>PM New Product Dev</td>
										<td class="hidden-xs">Brand Company</td>
										<td>12 june 2014</td>
										<td class="hidden-xs">
										<div class="progress active progress-xs">
											<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info">
												<span class="sr-only"> 40% Complete</span>
											</div>
										</div></td>
										<td class="center hidden-xs"><span class="label label-warning">High</span></td>
									</tr>
									<tr>
										<td>ClipTheme Web Site</td>
										<td class="hidden-xs">Internal</td>
										<td>11 november 2014</td>
										<td class="hidden-xs">
										<div class="progress active progress-xs">
											<div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
												<span class="sr-only"> 90% Complete</span>
											</div>
										</div></td>
										<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
									</tr>
									<tr>
										<td>Local Ad</td>
										<td class="hidden-xs">UI Fab</td>
										<td>15 april 2014</td>
										<td class="hidden-xs">
										<div class="progress active progress-xs">
											<div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">
												<span class="sr-only"> 50% Complete</span>
											</div>
										</div></td>
										<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
									</tr>
									<tr>
										<td>Design new theme</td>
										<td class="hidden-xs">Internal</td>
										<td>2 october 2014</td>
										<td class="hidden-xs">
										<div class="progress active progress-xs">
											<div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-success">
												<span class="sr-only"> 20% Complete (warning)</span>
											</div>
										</div></td>
										<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
									</tr>
									<tr>
										<td>IT Help Desk</td>
										<td class="hidden-xs">Designer TM</td>
										<td>6 december 2014</td>
										<td class="hidden-xs">
										<div class="progress active progress-xs">
											<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
												<span class="sr-only"> 40% Complete (warning)</span>
											</div>
										</div></td>
										<td class="center hidden-xs"><span class="label label-warning">High</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end: USER PROFILE -->
</div>