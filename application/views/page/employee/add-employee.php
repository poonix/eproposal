<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">TAMBAH PEGAWAI</h1>
		   </div>
			<ol class="breadcrumb">
				<li>
					<span>Pegawai</span>
				</li>
				<li>
					<span>Daftar Pegawai</span>
				</li>
				<li class="active">
					<span>Tambah Pegawai</span>
				</li>
			</ol>
		</div>
	</section>
	<!-- end: PAGE TITLE -->
	<!-- start: USER PROFILE -->
	<div class="container-fluid container-fullw bg-white">
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo site_url('daftar-pegawai');?>">&#8592 Kembali ke Daftar Pegawai</a>
				<br/><br/>
				<div class="tabbable">
					<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
						<li class="active">
							<a data-toggle="tab" href="#panel_edit_account">
								Tambah Akun
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="panel_edit_account" class="tab-pane fade in active">
							<!-- Set message using script -->
							<!--<div id="m-ep-success"></div>
							<div id="m-ep-error"></div>-->
							
							
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
							
							<form role="form" id="form-add-profile">
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
												<input type="text" class="form-control" id="f-ep-firstname" name="f-ep-firstname">
												<div id="m-ep-firstname"></div>
											</div>
											<div class="form-group">
												<label class="control-label">
													Nama Belakang
												</label>
												<input type="text" class="form-control" id="f-ep-lastname" name="f-ep-lastname">
											</div>
											<div class="form-group">
												<label class="control-label">
													NIP<span class="symbol required"></span>
												</label>
												<input type="text" placeholder="12312312312" class="form-control" id="f-ep-nip" name="f-ep-nip">
												<div id="m-ep-nip"></div>
											</div>
											
											<div class="form-group">
												<label class="control-label">
													Alamat Email<span class="symbol required"></span>
												</label>
												<input type="text" placeholder="example@example.com" class="form-control" id="f-ep-email" name="f-ep-email">
												<div id="m-ep-email"></div>
											</div>
											<div class="form-group">
												<label class="control-label">
													Nomor Telepon
												</label>
												<input type="text" placeholder="08572662222" class="form-control" id="f-ep-phone" name="f-ep-phone">
												<div id="m-ep-phone"></div>
											</div>
											<div class="form-group">
												<label class="control-label">
													Provinsi<span class="symbol required"></span>
												</label><br />
												<?php $aattrib_p = array('id'=>'f-ep-province','class'=>'form-control'); ?>
												<?php echo form_dropdown('f-ep-province', $load_provinsi, '0', $aattrib_p); ?>
												<div id="m-ep-province"></div>
											</div>
											<div class="form-group">
												<label class="control-label">
													Kabupaten/kota<span class="symbol required"></span>
												</label><br />
												<?php $aattrib_c = array('id'=>'f-ep-city','class'=>'form-control'); ?>
												<?php echo form_dropdown('f-ep-city', $load_kabupaten, '0', $aattrib_c); ?>
												<div id="m-ep-city"></div>
											</div>
											<div class="form-group">
												<label class="control-label">
													Status<span class="symbol required"></span>
												</label><br />
												<?php $content = array(''=>'-- Pilih Status --','1'=>'Aktif','0'=>'Tidak Aktif'); $aattrib_s = array('id'=>'f-ep-status','class'=>'form-control'); ?>
												<?php echo form_dropdown('f-ep-status', $content, '', $aattrib_s); ?>
												<div id="m-ep-status"></div>
											</div>
											<div class="form-group">
												<label class="control-label">
													Password<span class="symbol required"></span>
												</label><br />
												<input type="password" class="form-control" id="f-ep-password" name="f-ep-password">
												<div id="m-ep-password"></div>
											</div>
											<div class="form-group">
												<label class="control-label">
													Konfirmasi Password<span class="symbol required"></span>
												</label><br />
												<input type="password" class="form-control" id="f-ep-confirm-password" name="f-ep-confirm-password">
												<div id="m-ep-confirm-password"></div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>
													Unggah Foto
												</label>
												<div class="fileinput fileinput-new" data-provides="fileinput">
													<div class="fileinput-new thumbnail">
														<img src="<?php echo base_url(); ?>assets/images/profile/default-profile.gif" alt="profile picture">
													</div>
													<div class="fileinput-preview fileinput-exists thumbnail"></div>
													<div class="user-edit-image-buttons">
														<span class="btn btn-azure btn-file">
															<span class="fileinput-new"><i class="fa fa-picture"></i> Pilih Foto</span>
															<span class="fileinput-exists"><i class="fa fa-picture"></i> Ubah</span>
															<input type="file" id="f-ep-photo" name="f-ep-photo">
														</span>
														<a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">
															<i class="fa fa-times"></i> Hapus
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end: USER PROFILE -->
</div>