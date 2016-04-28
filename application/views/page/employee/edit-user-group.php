<?php $data=$load_user->result_array(); ?>
<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">UBAH HAK AKSES PEGAWAI</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<span>Pegawai</span>
				</li>
				<li>
					<span>Hak Akses Pegawai</span>
				</li>
				<li class="active">
					<span>Ubah Hak Akses Pegawai</span>
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
					<form role="form" id="form-edit-user-group">
						<fieldset>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
											Nama<span class="symbol required"></span>
										</label>
										<input type="text" class="form-control" id="f-eu-provinsi" name="f-eu-provinsi" value="<?php echo ucwords($data[0]['nama_depan'].' '.$data[0]['nama_belakang']);?>" disabled>
										<div id="m-ep-provinsi"></div>
									</div>
									<div class="form-group">
										<label class="control-label">
											Hak Akses <span class="symbol required"></span>
										</label><br />
										<?php $aattrib = array('id'=>'f-eu-user-group','class'=>'form-control'); ?>
										<?php echo form_dropdown('f-eu-user-group', $load_user_group, $data[0]['id_user_group'], $aattrib); ?>
										<div id="m-eu-user-group"></div>
									</div>
									<input type="hidden" id="f-hidden-id-user" name="f-hidden-id-user" value="<?php echo $data[0]['iduser'];?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="<?php echo site_url('hak-akses-pegawai');?>" style="color:inherit">
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