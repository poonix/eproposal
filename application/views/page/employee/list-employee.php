<!-- start: DYNAMIC TABLE -->
<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">Daftar Pegawai</h1>
			
			</div>
			<ol class="breadcrumb">
				<li>
					<span>Data Pegawai</span>
				</li>
				<li class="active">
					<span>Daftar Pegawai</span>
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
				<a href="<?php echo site_url('tambah-pegawai');?>">+ Tambah User</a>
				<div class="table-responsive" style="margin-top:15px;">
					<?php if($load_user->num_rows() > 0){ ?>
					<table class="table table-striped table-hover" id="sample_2">
						<thead>
							<tr>
								<th>Foto Profil</th>
								<th>Nama Depan</th>
								<th>Nama Belakang</th>
								<th>NIP</th>
								<th>Email</th>
								<!--<th>Provinsi</th>
								<th>Kabupaten/Kota</th>-->
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($load_user->result() as $data){ ?>
							<tr>
								<td><?php if($data->foto_profil == ''){ ?>
								<img width="50" src="<?php echo base_url(); ?>assets/images/profile/default-profile.gif" alt="">
								<?php }else{ ?>
								<img width="50" src="<?php echo base_url(); ?>assets/images/profile/<?php echo $data->foto_profil; ?>" alt="<?php echo $data->nama_depan; ?> <?php echo $data->nama_belakang; ?>">
								<?php } ?></td>
								<td class="jdl"><a href="<?php echo site_url('rincian-pegawai/'.$data->iduser);?>"><?php echo $data->nama_depan; ?></a></td>
								<td><?php echo $data->nama_belakang; ?></td>
								<td><?php echo $data->nip; ?></td>
								<td><?php echo $data->email; ?></td>
								<!--<td><?php //echo $data->provinsi; ?></td>
								<td><?php //echo $data->kabupaten; ?></td>-->
								<td><?php echo ($data->is_active == 0) ? 'Tidak Aktif' : 'Aktif'; ?></td>
								<td>
									<a href="<?php echo site_url('rincian-pegawai/'.$data->iduser)?>" class="edit-row">
										Ubah
									</a> &nbsp;
									<?php if($this->session->userdata('sess_user_id')!=$data->iduser){ //Cannot delete him/herself ?>
									<a data-toggle="modal" data-target="#myModal" data-iduser="<?php echo $data->iduser;?>" class="delete-row b-delete-user">
										Hapus
									</a>
									<?php } ?>
									<!-- Modal -->
									<div class="modal fade" id="myModal" role="dialog">
										<div class="modal-dialog" style="max-width:305px">
											<?php echo form_open('employee/process_delete_user'); ?>
												<!-- Modal content-->
												<div class="modal-content" style="background:#fff">
													<div class="modal-header" style="border:none">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<!--<h4 class="modal-title">Modal Header</h4>-->
													</div>
													<div class="modal-body" style="border:none">
														<p>Apakah Anda yakin ingin menghapus data ini?</p>
													</div>
													<input type="hidden" class="f-hidden-id-user" name="f-hidden-id-user" value=""/>
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