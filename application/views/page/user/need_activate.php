<!-- start: DYNAMIC TABLE -->
				<div class="wrap-content container" id="container">
                        <!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Verifikasi Akses Pegawai</h1>
									<div class="explaint">
                                        <p><label class="label label-warning">Baru </label>: user yang sudah mendaftar namun belum dilakukan verifikasi data. (user tersebut tidak dapat login)</p>
                                        <p><label class="label label-inverse">Tidak Aktif </label>:</strong> user yang tidak dapat melakukan login / tidak lolos verifikasi data</p>
                                        <p><label class="label label-info">Aktif </label>: user dapat melakukan login</p>
                                    </div>
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Daftar Pegawai</span>
									</li>
									<li class="active">
										<span>Verifikasi Akses Pegawai</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-12">
									<div class="table-responsive">
                                        <?php if($load_user->num_rows() > 0){ ?>
										<table class="table table-striped table-hover" id="sample_2">
											<thead>
												<tr>
													<th>Nama Depan</th>
													<th>Nama Belakang</th>
                                                    <th>NIP</th>
													<th>email</th>
													<th>Kabupaten/kota</th>
                                                    <th>Hak Akses</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
                                            <?php foreach($load_user->result() as $data){ ?>
                                                <tr>
													<td class="jdl"><?php echo $data->nama_depan; ?></a></td>
													<td><?php echo $data->nama_belakang; ?></td>
                                                    <td><?php echo $data->nip; ?></td>
													<td><?php echo $data->email; ?></td>
                                                    <td><?php echo $data->nama_kota; ?></td>
                                                    <td><a data-type="select" data-name="<?php echo $data->nama_depan; ?> <?php echo $data->nama_belakang; ?>"  data-pk="<?php echo $data->idusr; ?>"  id="list_hakakses"><?php echo $data->role; ?></a></td>
													<td><a data-type="select" id="list" data-name="<?php echo $data->nama_depan; ?> <?php echo $data->nama_belakang; ?>" data-pk="<?php echo $data->idusr; ?>"><?php echo $data->status; ?></a></td>
												</tr>
                                            <?php } ?>
											</tbody>
										</table>
                                        <?php }else{ ?>
                                        theres no data
                                        <?php } ?>
									</div>
								</div>
							</div>
                        </div>
                    </div>