<?php $data=$load_proposal->result_array(); ?>
<div class="wrap-content container" id="container">
	<!-- start: PAGE TITLE -->
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle">UNGGAH BERKAS PERSETUJUAN</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<span>Proposal</span>
				</li>
				<li>
					<span>Draft Proposal</span>
				</li>
				<li class="active">
					<span>Unggah Berkas</span>
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
				?>
				<div class="tab-content">
					<form role="form" id="form-upload-approval">
						<fieldset>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
											Judul Proposal
										</label>
										<input type="text" class="form-control" value="<?php echo $data[0]['judul_proposal'];?>" disabled>
									</div>
									<div class="form-group">
										<label class="control-label">
											Berkas Persetujuan <font style="color:red;font-size:11px;font-style:italic">(max: 5mb)(.pdf, .doc, .docx, .xls, .xlsx, .png, .jpg, .jpeg, .gif)</font> 
											<span class="symbol required"></span>
										</label>
										<div class="fileinput fileinput-new" data-provides="fileinput">
											<!--<div class="fileinput-new thumbnail" id="ep-thumbnail"></div>-->
											<div class="fileinput-preview fileinput-exists thumbnail" id="ep-preview"></div>
											<div class="user-edit-image-buttons">
												<span class="btn btn-azure btn-file">
													<span class="fileinput-new"><i class="fa fa-picture"></i> Pilih File</span>
													<span class="fileinput-exists"><i class="fa fa-picture"></i> Ubah</span>
													<input type="file" id="f-ua-file-approval" name="f-ua-file-approval">
												</span>
												<a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">
													<i class="fa fa-times"></i> Hapus
												</a>
											</div>
										</div>
										<div id="m-ua-file-approval"></div>
									</div>
									<div class="form-group">
										<label class="control-label">
											Catatan
										</label>
										<textarea class="form-control" id="f-ua-notes" name="f-ua-notes"></textarea>
										<div id="m-ua-notes"></div>
									</div>
									<input type="hidden" id="f-hidden-id-proposal" name="f-hidden-id-proposal" value="<?php echo $id_proposal;?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="<?php echo site_url('daftar-proposal');?>" style="color:inherit">
									<button class="btn pull-left" type="button" style="margin-right:10px">
										Kembali
									</button>
									</a>
									<button class="btn btn-primary pull-left" type="submit">
										Simpan <i class="fa fa-arrow-circle-right"></i>
									</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>