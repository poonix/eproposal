<!-- start: DYNAMIC TABLE -->
				<div class="wrap-content container" id="container">
                        <!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">LIST PROPOSALS</h1>
									<span class="mainDescription">Data dibawah ini merupakan daftar proposal yang masuk kedalam aplikasi e-proposal</span>
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Proposal</span>
									</li>
									<li class="active">
										<span>List Proposal</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-12">
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
													<td class="jdl"><a href="<?php echo site_url('proposal/detail'); ?>"><?php echo $data->program; ?></a></td>
													<td><?php echo $data->released_date; ?></td>
													<td><?php echo $data->id_kabupaten; ?></td>
                                                    <td><?php echo $data->id_kabupaten; ?></td>
                                                    <td><span class="label label-sm label-info"><?php echo $data->status; ?></span></td>
													<td>
													<a href="#" class="edit-row">
														Edit
													</a> &nbsp;
													<a href="#" class="delete-row">
														Delete
													</a></td>
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