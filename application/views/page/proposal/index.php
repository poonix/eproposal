<!-- start: DYNAMIC TABLE -->
<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">DAFTAR PROPOSAL</h1>
				<span class="mainDescription">Data dibawah ini merupakan daftar proposal yang masuk kedalam aplikasi e-proposal</span>
			</div>
			<ol class="breadcrumb">
				<li>
					<span>Proposal</span>
				</li>
				<li class="active">
					<span>Daftar Proposal</span>
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
				<div class="table-responsive">
					<?php if($load_pro->num_rows() > 0){ ?>
					<table class="table table-striped table-hover" id="sample_2">
						<thead>
							<tr>
								<th>Judul Proposal</th>
								<th>Dibuat Tanggal</th>
								<th>Provinsi</th>
								<th>Kabupaten/kota</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($load_pro->result() as $data){ ?>
							<tr>
								<td class="jdl"><a href="<?php echo site_url('rincian-proposal/daftar/'.$data->idprop); ?>"><?php echo $data->judul_proposal; ?></a></td>
								<td>
									<?php 
										$date = '';
										$date = $data->created_date; 
										
										echo substr($date,8,2).'-'.substr($date,5,2).'-'.substr($date,0,4).' '.substr($date,11,8);
									?>
								</td>
								<td><?php echo $data->provinsi; ?></td>
								<td><?php echo $data->kabupaten; ?></td>
								<td><span class="label label-sm label-info"><?php echo ucwords($data->status); ?></span></td>
								<td>
									<a href="#" class="edit-row">
										Edit
									</a> &nbsp;
									<a data-toggle="modal" data-target="#myModal" data-idprop="<?php echo $data->idprop;?>" class="delete-row b-delete-proposal">
										Hapus
									</a>
									<!-- Modal -->
									<div class="modal fade" id="myModal" role="dialog">
										<div class="modal-dialog" style="max-width:305px">
											<?php echo form_open('proposal/process_delete_proposal'); ?>
												<!-- Modal content-->
												<div class="modal-content" style="background:#fff">
													<div class="modal-header" style="border:none">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<!--<h4 class="modal-title">Modal Header</h4>-->
													</div>
													<div class="modal-body" style="border:none">
														<p>Apakah Anda yakin ingin menghapus data ini?</p>
													</div>
													<input type="hidden" class="f-hidden-id-proposal" name="f-hidden-id-proposal" value=""/>
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