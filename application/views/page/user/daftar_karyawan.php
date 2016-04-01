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
										<span>Daftar Pegawai</span>
									</li>
									<li class="active">
										<span>List Pegawai</span>
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
                                                    <th>Foto Profil</th>
													<th>Nama Depan</th>
													<th>Nama Belakang</th>
                                                    <th>NIP</th>
													<th>email</th>
													<th>Kabupaten/kota</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
                                            <?php foreach($load_user->result() as $data){ ?>
                                                <tr>
                                                    <td><?php if($data->profile_picture == ''){ ?>
                                                    <img width="50" src="<?php echo base_url(); ?>assets/images/profile/default-profile.gif" alt="">
                                                    <?php }else{ ?>
                                                    <img width="50" src="<?php echo base_url(); ?>assets/images/profile/<?php echo $data->profile_picture; ?>" alt="<?php echo $data[0]['nama_depan']; ?> <?php echo $data[0]['nama_belakang']; ?>">
                                                    <?php } ?></td>
													<td class="jdl"><a href="#"><?php echo $data->nama_depan; ?></a></td>
													<td><?php echo $data->nama_belakang; ?></td>
                                                    <td><?php echo $data->nip; ?></td>
													<td><?php echo $data->email; ?></td>
                                                    <td><?php echo $data->nama_kota; ?></td>
													<td><?php echo $data->status; ?></td>
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