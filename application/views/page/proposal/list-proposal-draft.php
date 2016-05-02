<!-- start: DYNAMIC TABLE -->
<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">DRAFT PROPOSAL</h1>
				<span class="mainDescription">Data dibawah ini merupakan draft proposal yang masuk kedalam aplikasi e-proposal dan membutuhkan persetujuan untuk diproses lebih lanjut.</span>
			</div>
			<ol class="breadcrumb">
				<li>
					<span>Proposal</span>
				</li>
				<li class="active">
					<span>Draft Proposal</span>
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
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($load_pro->result() as $data){ ?>
							<tr>
								<td class="jdl"><a href="<?php echo site_url('rincian-proposal/draft/'.$data->idprop); ?>"><?php echo $data->judul_proposal; ?></a></td>
								<td>
									<?php 
										$date = '';
										$date = $data->created_date; 
										
										echo substr($date,8,2).'-'.substr($date,5,2).'-'.substr($date,0,4).' '.substr($date,11,8);
									?>
								</td>
								<td><?php echo $data->provinsi; ?></td>
								<td><?php echo $data->kabupaten; ?></td>
								<td>
									<a href="<?php echo site_url('draft-proposal/berkas/'.$data->idprop);?>" class="edit-row">
										Unggah Berkas
									</a>
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