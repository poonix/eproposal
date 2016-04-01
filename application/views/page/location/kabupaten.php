<!-- start: DYNAMIC TABLE -->
<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">DAFTAR Kabupaten</h1>
				<span class="mainDescription">Data dibawah ini merupakan daftar kabupaten yang masuk kedalam aplikasi e-proposal.</span>
			</div>
			<ol class="breadcrumb">
				<li>
					<span>Kabupaten s</span>
				</li>
				<li class="active">
					<span>Daftar Kabupaten</span>
				</li>
			</ol>
		</div>
	</section>
	<!-- end: PAGE TITLE -->
	<div class="container-fluid container-fullw">
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<?php if($load_kab->num_rows() > 0){ ?>
					<table class="table table-striped table-hover" id="sample_2">
						<thead>
							<tr>
								<th>Nama Provinsi</th>
                                <th>Nama Jenis Wilayah</th>
                                <th>Nama Kab/Kota</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($load_kab->result() as $data){ ?>
							<tr>
								<td><?php echo $data->nama_provinsi; ?></td>
                                <td><?php echo $data->jenis_wilayah; ?></td>
                                <td><?php echo $data->nama_kota; ?></td>
								<td>
									<a href="#" class="edit-row">
										Edit
									</a> &nbsp;
									<a href="#" class="delete-row">
										Delete
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