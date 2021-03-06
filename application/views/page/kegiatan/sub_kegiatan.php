<!-- start: DYNAMIC TABLE -->
<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">DAFTAR SUB KEGIATAN</h1>
				<span class="mainDescription">Data dibawah ini merupakan daftar sub kegiatan yang masuk kedalam aplikasi e-proposal.</span>
			</div>
			<ol class="breadcrumb">
				<li>
					<span>Master Data</span>
				</li>
				<li class="active">
					<span>Daftar Sub Kegiatan</span>
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
					<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">�</a>
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
					<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">�</a>
					<?php echo $e_message;?>
				</div>
				<?php
					}
				?>
				<a id="b-tambah-subkegiatan">+ Tambah Sub Kegiatan</a>
				<!--<div class="tabbable">-->
					<div class="tab-content" id="d-add-subkegiatan">
						<form role="form" id="form-add-subkegiatan">
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">
												Nama Kegiatan<span class="symbol required"></span>
											</label>
											<?php $aattrib_p = array('id'=>'f-ak-kegiatan','class'=>'form-control'); ?>
											<?php echo form_dropdown('f-ak-kegiatan', $load_kegiatan, '0' , $aattrib_p); ?>
											<div id="m-ak-kegiatan"></div>
										</div>
										<div class="form-group">
											<label class="control-label">
												Nama Sub Kegiatan<span class="symbol required"></span>
											</label>
											<input type="text" class="form-control" id="f-ak-subkegiatan" name="f-ak-subkegiatan">
											<div id="m-ak-subkegiatan"></div>
										</div>
                                        <div class="form-group">
											<label class="control-label">
												Anggaran Maksimal<span class="symbol required"></span>
											</label>
											<input type="text" class="form-control" id="f-ak-anggaranmaks" name="f-ak-anggaranmaks">
											<div id="m-ak-anggaranmaks"></div>
										</div>
										<div class="form-group">
											<label class="control-label">
												Status<span class="symbol required"></span>
											</label><br />
											<?php $content = array(''=>'-- Pilih Status --','1'=>'Aktif','0'=>'Tidak Aktif'); $aattrib = array('id'=>'f-ak-status','class'=>'form-control'); ?>
											<?php echo form_dropdown('f-ak-status', $content, '', $aattrib); ?>
											<div id="m-ak-status"></div>
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
					<?php if($load_subkegiatan->num_rows() > 0){ ?>
					<table class="table table-striped table-hover" id="sample_2">
						<thead>
							<tr>
								<th>Nama Kegiatan</th>
                                <th>Nama Sub Kegiatan</th>
                                <th>Anggaran Maksimal</th>
                                <th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($load_subkegiatan->result() as $data){ ?>
							<tr>
								<td><?php echo $data->nama_kegiatan; ?></td>
                                <td><?php echo $data->nama_sub_kegiatan; ?></td>
                                <td><?php echo $data->anggaran_maks; ?></td>
                                <td><?php echo ($data->is_active == 0) ? 'Tidak Aktif' : 'Aktif'; ?></td>
								<td>
									<a href="<?php echo site_url('ubah-data-subkegiatan/'.$data->idsub)?>" class="edit-row">
										Ubah
									</a> &nbsp;
									<a data-toggle="modal" data-target="#myModal" data-idsub="<?php echo $data->idsub;?>" class="delete-row b-delete-subkegiatan">
										Hapus
									</a>
									<!-- Modal -->
									<div class="modal fade" id="myModal" role="dialog">
										<div class="modal-dialog" style="max-width:305px">
											<?php echo form_open('kegiatan/process_delete_subkegiatan'); ?>
												<!-- Modal content-->
												<div class="modal-content" style="background:#fff">
													<div class="modal-header" style="border:none">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<!--<h4 class="modal-title">Modal Header</h4>-->
													</div>
													<div class="modal-body" style="border:none">
														<p>Apakah Anda yakin ingin menghapus data ini?</p>
													</div>
													<input type="hidden" class="f-dp-id-kab" name="f-dp-id-subkegiatan" value=""/>
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