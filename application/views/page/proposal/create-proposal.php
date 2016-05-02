<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">Buat Proposal</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<span>Proposal</span>
				</li>
				<li class="active">
					<span>Buat Proposal</span>
				</li>
			</ol>
		</div>
	</section>
	<!-- end: PAGE TITLE -->
	<!-- start: WIZARD DEMO -->
	<div class="container-fluid container-fullw bg-white">
		<div class="row">
			<div class="col-md-12">
				<h5 class="over-title margin-bottom-15">Proposal <span class="text-bold">Wizard</span></h5>
				<p>
					Silahkan isi data dibawah ini dengan lengkap.
				</p>
				<!-- start: WIZARD FORM -->
				<form action="<?php echo site_url('proposal/process_add_proposal')?>" method="post" role="form" class="smart-wizard" id="form" enctype="multipart/form-data">
					<div id="wizard" class="swMain">
						<!-- start: WIZARD SEPS -->
						<ul>
							<li>
								<a href="#step-1">
									<div class="stepNumber">
										1
									</div>
									<span class="stepDesc"><small> Tentukan Judul Proposal anda</small></span>
								</a>
							</li>
							<li>
								<a href="#step-2">
									<div class="stepNumber">
										2
									</div>
									<span class="stepDesc"> <small> Pilih Kegiatan</small></span>
								</a>
							</li>
							<li>
								<a href="#step-3">
									<div class="stepNumber">
										3
									</div>
									<span class="stepDesc"> <small> Rancangan Anggaran Kegiatan </small> </span>
								</a>
							</li>
							<li>
								<a href="#step-4">
									<div class="stepNumber">
										4
									</div>
									<span class="stepDesc"> <small> Administrasi Kegiatan </small> </span>
								</a>
							</li>
							<li>
								<a href="#step-5">
									<div class="stepNumber">
										5
									</div>
									<span class="stepDesc"> <small> Selesai </small> </span>
								</a>
							</li>
						</ul>
						<!-- end: WIZARD SEPS -->
						<!-- start: WIZARD STEP 1 -->
						<div id="step-1">
							<div class="row">
								<div class="col-md-5">
									<div class="padding-30">
										<h2 class="StepTitle">Masukkan informasi dasar proposal Anda</h2>
										<p>
										Kami akan melakukan verifikasi proposal Anda secara rinci. Mohon untuk memasukkan data-data lokasi serta pendukung seperti jumlah penduduk, jumlah pengangguran. Diharapkan data tersebut berdasarkan fakta di lapangan.
										</p>
									</div>
								</div>
								<div class="col-md-7">
									<fieldset>
										<legend>
											Buat Proposal
										</legend>
										<div class="form-group">
											<label>
												Judul Proposal <span class="symbol required"></span>
											</label>
											<input type="text" placeholder="Masukkan judul proposal" class="form-control" name="judulProposal"/>
										</div>
										<div class="form-group">
											<label>
												Provinsi<span class="symbol required"></span>
											</label>
											<?php $aattrib = array('id'=>'provinsi','class'=>'js-example-data-array-selected form-control'); ?>
											<?php echo form_dropdown('provinsi', $load_provinsi, NULL, $aattrib); ?>
										</div>
										<div class="form-group">
											<label>
												Kabupaten/kota<span class="symbol required"></span>
											</label>
											<?php $aattrib_k = array('id'=>'kabupaten','class'=>'form-control'); ?>
											<?php echo form_dropdown('kabupaten', $load_kabupaten, NULL, $aattrib_k); ?>
										</div>
										<div class="form-group">
											<label>
												Jumlah penduduk <span class="symbol required"></span>
											</label>
											<input type="text" placeholder="ex.12500000" class="form-control" id="jmlPenduduk" name="jmlPenduduk"/>
										</div>
										<div class="form-group">
											<label>
												Jumlah pengangguran <span class="symbol required"></span>
											</label>
											<input type="text" placeholder="ex.12500000" class="form-control" id="jmlPengangguran" name="jmlPengangguran"/>
										</div>
									</fieldset>
								</div>
							</div>
							<!-- start: TEXT EDITOR -->
							<div class="container-fluid container-fullw bg-white">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<h5 id="h5latarBelakang" class="over-title">Latar Belakang <div class="text-bold" style="display:inline">Proposal</div><span class="symbol required"></span></h5>
											<p class="margin-bottom-30">
												Isi latar belakang merupakan konsep awal diajukannya proposal ini. <!--Isi latar belakang merupakan konsep awal diajukannya proposal ini. isi latar belakang merupakan konsep awal diajukannya proposal ini.-->
											</p>
											<textarea aria-invalid="false" class="ckeditor form-control" cols="10" rows="10" name="latarBelakang" id="latarBelakang"></textarea>
											<div id="m-latarBelakang"></div>
										</div>
										<br />
										<!-- end: TEXT EDITOR -->
										<div class="form-group">
											<button id="b-step1" class="btn btn-primary btn-o next-step btn-wide pull-right">
												Next <i class="fa fa-arrow-circle-right"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: WIZARD STEP 1 -->
						<!-- start: WIZARD STEP 2 -->
						<div id="step-2">
							<div class="row">
								<div class="col-md-5">
									<div class="padding-30">
										<h2 class="StepTitle">Jenis Kegiatan yang ingin diusulkan</h2>
										<p>
											Tentukan jenis kegiatan dan sub kegiatan apa yang diusulkan berdasarkan data yang telah disediakan. <!--Dimana letak kegiatan ingin dilaksanakan, seperti desa apa, kecamatan apa. -->
										</p>
									</div>
								</div>
								<div class="col-md-7">
									<fieldset>
										<legend>
											Kegiatan
										</legend>
										 <div class="form-group">
											<label>
												Kegiatan<span class="symbol required"></span>
											</label>
											<?php $aattrib_k1 = array('id'=>'kegiatan','class'=>'form-control'); ?>
											<?php echo form_dropdown('kegiatan', $load_kegiatan, NULL, $aattrib_k1); ?>
										</div>
										<div class="form-group">
											<label>
												Sub Kegiatan<span class="symbol required"></span>
											</label>
											<?php $aattrib_k2 = array('id'=>'subKegiatan','class'=>'form-control'); ?>
											<?php echo form_dropdown('subKegiatan', $load_sub_kegiatan, NULL, $aattrib_k2); ?>
										</div>
										<div class="form-group">
											<label>
												Anggaran Maksimum
											</label>
											<div class="input-group">
												<span class="input-group-addon">Rp.</span>
												<input type="text" class="form-control anggaran" id="anggaran" name="anggaran" disabled />
												<span class="input-group-addon">.-</span>
											</div>
										</div>
										<!--
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>
														Kecamatan<span class="symbol required"></span>
													</label>
													<select class="form-control" name="Kecamatan">
														<option value="">&nbsp;</option>
														<option value="AL">Alabama</option>
														<option value="AK">Alaska</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>
														Desa<span class="symbol required"></span>
													</label>
													<select class="form-control" name="Desa">
														<option value="">&nbsp;</option>
														<option value="AL">Alabama</option>
														<option value="AK">Alaska</option>
													</select>
												</div>
											</div>
										</div>
										-->
									</fieldset>
								</div>
							</div>
							<!-- start: TEXT EDITOR -->
							<div class="container-fluid container-fullw bg-white">
								<div class="row">
									<div class="col-md-12">
										<h5 id="h5kontenProposal" class="over-title">Isi <span class="text-bold">Proposal</span> </h5>
										<p class="margin-bottom-30">
										Isikan konten proposal anda disini. <br> Atau jika anda sudah pernah membuat dalam bentuk format microsoft word (.docx/.doc) silahkan unggah di tombol yang sudah disediakan.
										</p>
										<div class="form-group">
											<label>
												Silakan pilih jenis pengisian data yang digunakan:<span class="symbol required"></span>
											</label>
											<br/>
											<input type="radio" name="jenis" value="editor" id="editor" checked> Teks Editor &nbsp;&nbsp;&nbsp;
											<input type="radio" name="jenis" value="upload" id="upload"> Unggah Data<br>
										</div>
										<textarea class="ckeditor form-control" cols="10" rows="10" name="editorProposal" id="editorProposal" style="display:none"></textarea>
										<div class="form-group" id="uploadProposal">
											<label>
												Unggah Proposal
											</label>
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<!--<div class="fileinput-new thumbnail" id="ep-thumbnail"></div>-->
												<div class="fileinput-preview fileinput-exists thumbnail" id="ep-preview"></div>
												<div class="user-edit-image-buttons">
													<span class="btn btn-azure btn-file">
														<span class="fileinput-new"><i class="fa fa-picture"></i> Pilih File</span>
														<span class="fileinput-exists"><i class="fa fa-picture"></i> Ubah</span>
														<input type="file" id="uploadProposal" name="uploadProposal">
													</span>
													<a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">
														<i class="fa fa-times"></i> Hapus
													</a>
												</div>
											</div>
										</div>	
										<div id="m-kontenProposal"></div>
										<br />
										<!-- end: TEXT EDITOR -->
										<div class="form-group">
											<button class="btn btn-primary btn-o back-step btn-wide pull-left">
												<i class="fa fa-circle-arrow-left"></i> Back
											</button>
											<button id="b-step2" class="btn btn-primary btn-o next-step btn-wide pull-right">
												Next <i class="fa fa-arrow-circle-right"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: WIZARD STEP 2 -->
						<!-- start: WIZARD STEP 3 -->
						<div id="step-3">
							<div class="row">
								<div class="col-md-5">
									<div class="padding-30">
										<h2 class="StepTitle">Rancangan Anggaran Kegiatan</h2>
										<p>
											Isi informasi perkiraan biaya yang dibutuhkan untuk melaksanakan kegiatan ini. Seperti biaya transport dari kabupaten ke kppn, biaya transport dari kabupaten ke pusat, dll.
										</p>
									</div>
								</div>
								<div class="col-md-7">
									<fieldset>
										<legend>
											Rancangan Anggaran Kegiatan
										</legend>
										<div class="form-group">
											<label>
												Anggaran Maksimum
											</label>
											<div class="input-group">
												<span class="input-group-addon">Rp.</span>
												<input type="text" class="form-control anggaran" id="anggaran" name="anggaran" disabled />
												<span class="input-group-addon">.-</span>
											</div>
										</div>
										<div class="form-group">
											<label>
												Kecamatan<span class="symbol required"></span>
											</label>
											<!--<select class="form-control" name="Kecamatan">
												<option value="">&nbsp;</option>
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
											</select>-->
											<input type="text" class="form-control" id="kecamatan" name="kecamatan" />
										</div>
										<div class="form-group">
											<label>
												Desa<span class="symbol required"></span>
											</label>
											<!--<select class="form-control" name="Desa">
												<option value="">&nbsp;</option>
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
											</select>-->
											<input type="text" class="form-control" id="desa" name="desa" />
										</div>
										<div class="form-group">
											<label>
												Unggah RAB<span class="symbol required"></span>
											</label>
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<!--<div class="fileinput-new thumbnail" id="ep-thumbnail"></div>-->
												<div class="fileinput-preview fileinput-exists thumbnail" id="ep-preview"></div>
												<div class="user-edit-image-buttons">
													<span class="btn btn-azure btn-file">
														<span class="fileinput-new"><i class="fa fa-picture"></i> Pilih File</span>
														<span class="fileinput-exists"><i class="fa fa-picture"></i> Ubah</span>
														<input type="file" id="lampiranRAB" name="lampiranRAB">
													</span>
													<a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">
														<i class="fa fa-times"></i> Hapus
													</a>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label>
												Total Anggaran
											</label>
											<div class="input-group">
												<span class="input-group-addon">Rp.</span>
												<input type="text" class="form-control" name="totalAnggaran" id="totalAnggaran" />
												<span class="input-group-addon">.-</span>
											</div>
										</div>
									</fieldset>
									<div class="form-group">
										<button class="btn btn-primary btn-o back-step btn-wide pull-left">
											<i class="fa fa-circle-arrow-left"></i> Back
										</button>
										<button class="btn btn-primary btn-o next-step btn-wide pull-right">
											Next <i class="fa fa-arrow-circle-right"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- end: WIZARD STEP 3 -->
						<!-- start: WIZARD STEP 4 -->
						<div id="step-4">
							<div class="row">
								<div class="col-md-5">
									<div class="padding-30">
										<h2 class="StepTitle">Administrasi Kegiatan</h2>
										<p>
											Isi informasi perkiraan biaya yang dibutuhkan untuk melaksanakan kegiatan ini. Seperti biaya transport dari dinas ke bandara, biaya transport dari dinas ke provinsi, dll.
										</p>
									</div>
								</div>
								<div class="col-md-7">
									<fieldset>
										<legend>
											Administrasi Kegiatan
										</legend>
										<!--
										<div class="form-group">
											<label>
												Biaya Transportasi dari dinas ke KPPN <span class="symbol required"></span>
											</label>
											<div class="input-group">
												<span class="input-group-addon">Rp.</span>
												<input type="text" class="form-control" name="">
												<span class="input-group-addon">.-</span>
											</div>
										</div>
										-->
										<div class="form-group">
											<label>
												Biaya Transportasi dari dinas ke Bandara <span class="symbol required"></span>
											</label>
											<div class="input-group">
												<span class="input-group-addon">Rp.</span>
												<input type="text" class="form-control" name="biayaTB" id="biayaTB">
												<span class="input-group-addon">.-</span>
											</div>
										</div>
										<div class="form-group">
											<label>
												Biaya Transportasi dari dinas ke Provinsi <span class="symbol required"></span>
											</label>
											<div class="input-group">
												<span class="input-group-addon">Rp.</span>
												<input type="text" class="form-control" name="biayaTP" id="biayaTP">
												<span class="input-group-addon">.-</span>
											</div>
										</div>
									   <div class="form-group">
											<label>
												Biaya Transportasi dari dinas ke Jakarta <span class="symbol required"></span>
											</label>
											<div class="input-group">
												<span class="input-group-addon">Rp.</span>
												<input type="text" class="form-control" name="biayaTJ" id="biayaTJ">
												<span class="input-group-addon">.-</span>
											</div>
										</div>
									   <div class="form-group">
											<label>
												Total Biaya Transportasi
											</label>
											<div class="input-group">
												<span class="input-group-addon">Rp.</span>
												<input type="text" class="form-control" name="totalTransport" id="totalTransport" disabled />
												<span class="input-group-addon">.-</span>
											</div>
										</div>
										<div class="form-group">
											<label>
												Total Biaya Transportasi + RAB
											</label>
											<div class="input-group">
												<span class="input-group-addon">Rp.</span>
												<input type="text" class="form-control" name="totalTransportRAB" id="totalTransportRAB" disabled />
												<span class="input-group-addon">.-</span>
											</div>
										</div>
									</fieldset>
									<div class="form-group">
										<button class="btn btn-primary btn-o back-step btn-wide pull-left">
											<i class="fa fa-circle-arrow-left"></i> Back
										</button>
										<!--<button class="btn btn-primary btn-o next-step btn-wide pull-right">
											Next <i class="fa fa-arrow-circle-right"></i>
										</button>-->
										<button id="b-step4" class="btn btn-primary btn-o finish-step btn-wide pull-right">
											Submit <i class="fa fa-arrow-circle-right"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- end: WIZARD STEP 4 -->
						<!-- start: WIZARD STEP 5 -->
						<div id="step-5">
							<div class="row">
								<div class="col-md-12">
									<div class="text-center">
										<h1 class=" ti-check block text-primary"></h1>
										<h2 class="StepTitle">Selamat!</h2>
										<p class="text-large">
											Proses pembuatan proposal telah selesai.
										</p>
										<p class="text-small">
											Proposal Anda telah disimpan sebagai draft. Anda dapat melihat proposal yang telah dibuat di menu <span class="text-bold">'Proposal'&rarr;'Daftar Proposal'</span>.
										</p>
										<a class="btn btn-primary btn-o go-first" href="javascript:void(0)">
											Kembali ke Awal
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- end: WIZARD STEP 5 -->
					</div>
				</form>
				<!-- end: WIZARD FORM -->
			</div>
		</div>
	</div>
	<!-- start: WIZARD DEMO -->
</div>