<!-- start: DYNAMIC TABLE -->
<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">DAFTAR PROVINSI</h1>
				<span class="mainDescription">Data dibawah ini merupakan daftar provinsi yang masuk kedalam aplikasi e-proposal.</span>
			</div>
			<ol class="breadcrumb">
				<li>
					<span>Master Data</span>
				</li>
				<li class="active">
					<span>Daftar Provinsi</span>
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
				<a id="b-tambah-provinsi">+ Tambah Provinsi</a>
				<!--<div class="tabbable">-->
					<div class="tab-content" id="d-add-provinsi">
						<form role="form" id="form-add-provinsi">
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">
												Nama Provinsi<span class="symbol required"></span>
											</label>
											<input type="text" class="form-control" id="f-ap-provinsi" name="f-ap-provinsi">
											<div id="m-ap-provinsi"></div>
										</div>
										<div class="form-group">
											<label class="control-label">
												Status<span class="symbol required"></span>
											</label><br />
											<?php $content = array(''=>'-- Pilih Status --','1'=>'Aktif','0'=>'Tidak Aktif'); $aattrib = array('id'=>'f-ap-status','class'=>'form-control'); ?>
											<?php echo form_dropdown('f-ap-status', $content, '', $aattrib); ?>
											<div id="m-ap-status"></div>
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
				<!--</div>-->
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive" style="margin-top:15px">
					<?php if($load_prov->num_rows() > 0){ ?>
					<table class="table table-striped table-hover" id="sample_2">
						<thead>
							<tr>
								<th>Nama Provinsi</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($load_prov->result() as $data){ ?>
							<tr>
								<td><?php echo $data->nama_provinsi; ?></td>
								<td><?php echo ($data->is_active == 0) ? 'Tidak Aktif' : 'Aktif'; ?></td>
								<td>
									<a href="<?php echo site_url('ubah-data-provinsi/'.$data->id)?>" class="edit-row">
										Ubah
									</a> &nbsp;
									<a data-toggle="modal" data-target="#myModal" data-idprov="<?php echo $data->id;?>" class="delete-row b-delete-provinsi">
										Hapus
									</a>
									<!-- Modal -->
									<div class="modal fade" id="myModal" role="dialog">
										<div class="modal-dialog" style="max-width:305px">
											<?php echo form_open('location/process_delete_provinsi'); ?>
												<!-- Modal content-->
												<div class="modal-content" style="background:#fff">
													<div class="modal-header" style="border:none">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<!--<h4 class="modal-title">Modal Header</h4>-->
													</div>
													<div class="modal-body" style="border:none">
														<p>Apakah Anda yakin ingin menghapus data ini?</p>
													</div>
													<input type="hidden" class="f-dp-id-prov" name="f-dp-id-prov" value=""/>
													<div class="modal-footer" style="border:none">
														<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
														<button type="submit" class="btn btn-default">Hapus</a>
													</div>
												</div>
											<?php echo form_close(); ?>
										</div>
									</div>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
					<?php }else{ ?>
						Data tidak ditemukan.
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>