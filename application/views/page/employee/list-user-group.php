<!-- start: DYNAMIC TABLE -->
<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">Hak Akses Pegawai</h1>
			
			</div>
			<ol class="breadcrumb">
				<li>
					<span>Pegawai</span>
				</li>
				<li class="active">
					<span>Hak Akses Pegawai</span>
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
				<div class="table-responsive" style="margin-top:15px;">
					<?php if($load_user->num_rows() > 0){ ?>
					<table class="table table-striped table-hover" id="sample_2">
						<thead>
							<tr>
								<th>Nama</th>
								<th>NIP</th>
								<th>Email</th>
								<th>Hak Akses</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($load_user->result() as $data){ ?>
							<tr>
								<td class="jdl"><a href="<?php echo site_url('rincian-pegawai/2/'.$data->iduser);?>"><?php echo $data->nama_depan.' '.$data->nama_belakang; ?></a></td>
								<td><?php echo $data->nip; ?></td>
								<td><?php echo $data->email; ?></td>
								<td><?php echo ucwords($data->definisi); ?></td>
								<td>
									<a href="<?php echo site_url('ubah-hak-akses-pegawai/'.$data->iduser)?>" class="edit-row">
										Ubah
									</a> &nbsp;
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