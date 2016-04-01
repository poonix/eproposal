<?php $data=$load_profile->result_array(); ?>
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">User Profile</h1>
        	                   </div>
								<ol class="breadcrumb">
									<li>
										<span><?php echo $this->session->userdata('sess_user_first_name'); ?></span>
									</li>
									<li class="active">
										<span>My Profile</span>
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
												<a data-toggle="tab" href="#panel_overview">
													Overview
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#panel_edit_account">
													Edit Account
												</a>
											</li>
										</ul>
										<div class="tab-content">
											<div id="panel_overview" class="tab-pane fade in active">
												<div class="row">
													<div class="col-sm-5 col-md-4">
														<div class="user-left">
															<div class="center">
																<h4><?php echo $data[0]['nama_depan']; ?> <?php echo $data[0]['nama_belakang']; ?></h4>
																<div class="fileinput fileinput-new" data-provides="fileinput">
																	<div class="user-image">
																		<div class="fileinput-new thumbnail">
                                                                        <?php if($data[0]['profile_picture'] == ''){ ?>
                                                                        <img src="<?php echo base_url(); ?>assets/images/profile/default-profile.gif" alt="">
                                                                        <?php }else{ ?>
                                                                        <img src="<?php echo base_url(); ?>assets/images/profile/<?php echo $data[0]['profile_picture']; ?>" alt="<?php echo $data[0]['nama_depan']; ?> <?php echo $data[0]['nama_belakang']; ?>">
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
																		<th colspan="3">Contact Information</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>email:</td>
																		<td>
																		<a href="mailto:<?php echo $data[0]['email']; ?>">
																			<?php echo $data[0]['email']; ?>
																		</a></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>phone:</td>
																		<td><?php echo $data[0]['notelp']; ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																</tbody>
															</table>
															<table class="table">
																<thead>
																	<tr>
																		<th colspan="3">General information</th>
																	</tr>
																</thead>
																<tbody>
																	
																	<tr>
																		<td>Provinsi</td>
																		<td><?php echo $data[0]['nama_provinsi']; ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Kabupaten</td>
																		<td><?php echo $data[0]['nama_kota']; ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
                                                                    <tr>
																		<td>SK</td>
																		<td><?php echo $data[0]['sk']; ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Hak Akses</td>
																		<td><span class="label label-sm label-info">Administrator</span></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
                                                                    <tr>
																		<td>Last Logged In</td>
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
																<h4 class="panel-title text-primary">Recent Activities</h4>
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
												<form action="#" role="form" id="form">
													<fieldset>
														<legend>
															Account Info
														</legend>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">
																		Nama Depan*
																	</label>
																	<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $data[0]['nama_depan']; ?>">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Nama Belakang
																	</label>
																	<input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $data[0]['nama_belakang']; ?>">
																</div>
                                                                <div class="form-group">
																	<label class="control-label">
																		NIP*
																	</label>
																	<input type="email" placeholder="12312312312" class="form-control" id="nip" name="nip" value="<?php echo $data[0]['nip']; ?>">
																</div>
                                                                
																<div class="form-group">
																	<label class="control-label">
																		Alamat Email*
																	</label>
																	<input type="email" placeholder="example@example.com" class="form-control" id="email" name="email" value="<?php echo $data[0]['email']; ?>">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Mobile
																	</label>
																	<input type="email" placeholder="08572662222" class="form-control" id="phone" name="phone" value="<?php echo $data[0]['notelp']; ?>">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Password*
																	</label>
																	<input type="password" placeholder="password" class="form-control" name="password" id="password" value="<?php echo $data[0]['password']; ?>">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Confirm Password*
																	</label>
																	<input type="password"  placeholder="password" class="form-control" id="password_again" name="password_again" value="<?php echo $data[0]['password']; ?>">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label>
																		Image Upload
																	</label>
																	<div class="fileinput fileinput-new" data-provides="fileinput">
																		<div class="fileinput-new thumbnail"><img src="<?php echo base_url(); ?>assets/images/profile/default-profile.gif" alt="profile picture">
																		</div>
																		<div class="fileinput-preview fileinput-exists thumbnail"></div>
																		<div class="user-edit-image-buttons">
																			<span class="btn btn-azure btn-file"><span class="fileinput-new"><i class="fa fa-picture"></i> Select image</span><span class="fileinput-exists"><i class="fa fa-picture"></i> Change</span>
																				<input type="file">
																			</span>
																			<a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">
																				<i class="fa fa-times"></i> Remove
																			</a>
																		</div>
																	</div>
																</div>
															</div>
                                                            <div class="col-md-6">
																<div class="form-group">
																	<label>
																		Upload SK
																	</label>
																	<div class="fileinput fileinput-new" data-provides="fileinput">
																		<div class="user-edit-image-buttons">
																			<span class="btn btn-azure btn-file"><span class="fileinput-new"><i class="fa fa-picture"></i> Upload Sk</span><span class="fileinput-exists"><i class="fa fa-picture"></i> Change</span>
																				<input type="file">
																			</span>
																			<a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">
																				<i class="fa fa-times"></i> Remove
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</fieldset>
													
													<div class="row">
														<div class="col-md-12">
															<div>
																* Required Fields
																<hr>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-8">
															<p>
																By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
															</p>
														</div>
														<div class="col-md-4">
															<button class="btn btn-primary pull-right" type="submit">
																Update <i class="fa fa-arrow-circle-right"></i>
															</button>
														</div>
													</div>
												</form>
											</div>
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
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: USER PROFILE -->
					</div>