<?php $data=$load_proposal->result_array(); ?>
<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">Rincian Proposal</h1>
				<!--<span class="mainDescription">Allow user to view multiple contents inside "tabbed" sections of the page  -->
			</div>
			<ol class="breadcrumb">
				<li>
					<span>Proposal</span>
				</li>
				<li>
					<span>Daftar Proposal</span>
				</li>
				<li class="active">
					<span>Rincian Proposal</span>
				</li>
			</ol>
		</div>
	</section>
	<!-- end: PAGE TITLE -->
	<!-- start: TABS -->
	<div class="container-fluid container-fullw bg-white"> 
		<div class="row">
			<div class="col-md-12">
				<?php
					if($fpage == 'draft')
					{
				?>
				<a href="<?php echo site_url('draft-proposal');?>">&#8592; Kembali ke Draft Proposal</a>
				<?php
					}
					else
					{
				?>
				<a href="<?php echo site_url('daftar-proposal');?>">&#8592; Kembali ke Daftar Proposal</a>
				<?php
					}
				?>
				<br/><br/>
				<h5 class="over-title margin-bottom-15">Rincian dan Rancangan <span class="text-bold">Proposal</span></h5>
				<p>
					Rincian data, kegiatan, lokasi, dan anggaran dari proposal yang akan diajukan. <a>Klik untuk ubah data</a>
				</p>
				<div class="tabbable">
					<ul id="myTab1" class="nav nav-tabs">
						<li class="active">
							<a href="#myTab1_example1" data-toggle="tab">
								Data Proposal
							</a>
						</li>
						<li>
							<a href="#myTab1_example2" data-toggle="tab">
								Rincian Kegiatan
							</a>
						</li>
						<li>
							<a href="#myTab1_example3" data-toggle="tab">
								Anggaran Kegiatan
							</a>
						</li>
						<li>
							<a href="#myTab1_example4" data-toggle="tab">
								Administrasi Kegiatan
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="myTab1_example1">
							<div class="form-group">
								<label>
									Judul Proposal
								</label>
								<input type="text" class="form-control" value="<?php echo $data[0]['judul_proposal'];?>" disabled />
							</div>
							<div class="form-group">
								<label>
									Provinsi
								</label>
								<input type="text" class="form-control" value="<?php echo $data[0]['provinsi'];?>" disabled />
							</div>
							<div class="form-group">
								<label>
									Kabupaten/kota
								</label>
								<input type="text" class="form-control" value="<?php echo $data[0]['kabupaten'];?>" disabled />
							</div>
							<div class="form-group">
								<label>
									Jumlah penduduk
								</label>
								<input type="text" class="form-control" value="<?php echo number_format($data[0]['jumlah_penduduk']);?>" disabled />
							</div>
							<div class="form-group">
								<label>
									Jumlah pengangguran
								</label>
								<input type="text" class="form-control" value="<?php echo number_format($data[0]['jumlah_pengangguran']);?>" disabled />
							</div>
							<div class="form-group">
								<label>
									Latar belakang
								</label>
								<textarea disabled class="ckeditor form-control" cols="10" rows="10"><?php echo $data[0]['latar_belakang'];?></textarea>
							</div>
						</div>
						<div class="tab-pane fade" id="myTab1_example2">
							<div class="form-group">
								<label>
									Kegiatan
								</label>
								<input type="text" class="form-control" value="<?php echo $data[0]['kegiatan'];?>" disabled />
							</div>
							<div class="form-group">
								<label>
									Sub Kegiatan
								</label>
								<input type="text" class="form-control" value="<?php echo $data[0]['sub_kegiatan'];?>" disabled />
							</div>
							<div class="form-group">
								<label>
									Anggaran Maksimum
								</label>
								<div class="input-group">
									<span class="input-group-addon">Rp.</span>
									<input type="text" class="form-control" value="<?php echo number_format($data[0]['anggaran_maks']);?>" disabled />
									<span class="input-group-addon">.-</span>
								</div>
							</div>
							<div class="form-group">
								<label>
									Isi Proposal
								</label>
								<?php
									if($data[0]['jenis_konten']=='editor')
									{
								?>
								<textarea disabled class="ckeditor form-control" cols="10" rows="10"><?php echo $data[0]['konten_proposal'];?></textarea>
								<?php
									}
									elseif($data[0]['jenis_konten']=='upload')
									{
								?>
								<a target="_blank"><?php echo $data[0]['lampiran_proposal'];?></a>
								<?php
									}
								?>
							</div>
						</div>
						<div class="tab-pane fade" id="myTab1_example3">
							<div class="form-group">
								<label>
									Anggaran Maksimum
								</label>
								<div class="input-group">
									<span class="input-group-addon">Rp.</span>
									<input type="text" class="form-control" value="<?php echo number_format($data[0]['anggaran_maks']);?>" disabled />
									<span class="input-group-addon">.-</span>
								</div>
							</div>
							<div class="form-group">
								<label>
									Kecamatan
								</label>
								<input type="text" class="form-control" value="<?php echo ucwords($data[0]['kecamatan']);?>" disabled />
							</div>
							<div class="form-group">
								<label>
									Desa
								</label>
								<input type="text" class="form-control" value="<?php echo ucwords($data[0]['desa']);?>" disabled />
							</div>
							<div class="form-group">
								<label>
									RAB
								</label>
								<a target="_blank"><?php echo $data[0]['lampiran_rab'];?></a>
							</div>
							<div class="form-group">
								<label>
									Total Anggaran
								</label>
								<div class="input-group">
									<span class="input-group-addon">Rp.</span>
									<input type="text" class="form-control" value="<?php echo number_format($data[0]['total_anggaran']);?>" disabled />
									<span class="input-group-addon">.-</span>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="myTab1_example4">
							<div class="form-group">
								<label>
									Biaya Transportasi dari dinas ke Bandara
								</label>
								<div class="input-group">
									<span class="input-group-addon">Rp.</span>
									<input type="text" class="form-control" value="<?php echo number_format($data[0]['biaya_bandara']);?>" disabled />
									<span class="input-group-addon">.-</span>
								</div>
							</div>
							<div class="form-group">
								<label>
									Biaya Transportasi dari dinas ke Provinsi
								</label>
								<div class="input-group">
									<span class="input-group-addon">Rp.</span>
									<input type="text" class="form-control" value="<?php echo number_format($data[0]['biaya_provinsi']);?>" disabled />
									<span class="input-group-addon">.-</span>
								</div>
							</div>
						   <div class="form-group">
								<label>
									Biaya Transportasi dari dinas ke Jakarta
								</label>
								<div class="input-group">
									<span class="input-group-addon">Rp.</span>
									<input type="text" class="form-control" value="<?php echo number_format($data[0]['biaya_jakarta']);?>" disabled />
									<span class="input-group-addon">.-</span>
								</div>
							</div>
						   <div class="form-group">
								<label>
									Total Biaya Transportasi
								</label>
								<div class="input-group">
									<?php
										$totalTransport = '';
										$totalTransport = $data[0]['biaya_bandara'] + $data[0]['biaya_provinsi'] + $data[0]['biaya_jakarta'];
									?>
									<span class="input-group-addon">Rp.</span>
									<input type="text" class="form-control" value="<?php echo number_format($totalTransport);?>" disabled />
									<span class="input-group-addon">.-</span>
								</div>
							</div>
							<div class="form-group">
								<label>
									Total Biaya Transportasi + RAB
								</label>
								<div class="input-group">
									<?php
										$totalTransportRAB = '';
										$totalTransportRAB = $totalTransport + $data[0]['total_anggaran'];
									?>
									<span class="input-group-addon">Rp.</span>
									<input type="text" class="form-control" value="<?php echo number_format($totalTransportRAB);?>" disabled />
									<span class="input-group-addon">.-</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end: TABS -->
</div>