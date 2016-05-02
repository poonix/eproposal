<?php $data=$load_kab->result_array(); ?>
<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">UBAH DATA SUB KEGIATAN</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<span>Master Data</span>
				</li>
				<li>
					<span>Daftar Sub Kegiatan</span>
				</li>
				<li class="active">
					<span>Ubah Data Sub Kegiatan</span>
				</li>
			</ol>
		</div>
	</section>
	<!-- end: PAGE TITLE -->
	<div class="container-fluid container-fullw">
		<div class="row">
			<div class="col-md-12">
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
				?>
				
				<div class="tab-content">
					<form role="form" id="form-edit-subkegiatan">
						<fieldset>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
											Nama Kegiatan<span class="symbol required"></span>
										</label>
										<?php $aattrib_p = array('id'=>'f-ek-kegiatan','class'=>'form-control'); ?>
										<?php echo form_dropdown('f-ek-kegiatan', $load_prov, $data[0]['id_kegiatan'] , $aattrib_p); ?>
										<div id="m-ek-subkegiatan"></div>
									</div>
									<div class="form-group">
										<label class="control-label">
											Nama Sub Kegiatan<span class="symbol required"></span>
										</label>
										<input type="text" class="form-control" id="f-ek-subkegiatan" name="f-ek-subkegiatan" value="<?php echo $data[0]['nama_sub_kegiatan'];?>">
										<div id="m-ek-subkegiatan"></div>
									</div>
                                    <div class="form-group">
										<label class="control-label">
											Anggaran Maksimal<span class="symbol required"></span>
										</label>
										<input type="text" class="form-control" id="f-ek-subkegiatan" name="f-ek-subkegiatan" value="<?php echo $data[0]['nama_sub_kegiatan'];?>">
										<div id="m-ek-subkegiatan"></div>
									</div>
									<div class="form-group">
										<label class="control-label">
											Status<span class="symbol required"></span>
										</label><br />
										<?php $content = array(''=>'-- Pilih Status --','1'=>'Aktif','0'=>'Tidak Aktif'); $aattrib = array('id'=>'f-ek-status','class'=>'form-control'); ?>
										<?php echo form_dropdown('f-ek-status', $content, $data[0]['is_active'], $aattrib); ?>
										<div id="m-ek-status"></div>
									</div>
									<input type="hidden" id="f-ek-id-kabupaten" name="f-ek-id-kabupaten" value="<?php echo $data[0]['id'];?>" >
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<!--<a href="javascript:location.href=history.go(-1)" style="color:inherit">-->
									<a href="<?php echo site_url('daftar-kabupaten');?>" style="color:inherit">
									<button class="btn pull-left" type="button" style="margin-right:10px">
										Kembali
									</button>
									</a>
									<button class="btn btn-primary pull-left" type="submit">
										Simpan <i class="fa fa-arrow-circle-right"></i>
									</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>