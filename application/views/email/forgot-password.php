<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <style type="text/css">
		@font-face {
			font-family: 'Open Sans';
			src: url('../fonts/AvenirLTStd-Roman.otf');
			font-weight: normal;
			font-style: normal;
			
		}

		*{
			font: 13px/1.55 Open Sans;
			color: #444;
			font-weight: 400;
			letter-spacing: 1px;
		}
    </style>
</head>

<body>
    <div>
		<table align="center" bgcolor="#f6f6f6" border="0" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td width="750">
						<table align="center" width="100%">
							<tbody>
								<tr>
    <td align="center" style="padding:20px 10px 10px 10px;">
	<!--<a href="<?php //echo base_url();?>" target="_blank" title="Tokoserba.id"><img width="300px" src="<?php //echo base_url();?>assets/images/logo_orange.png" border="0"></a>-->
	</td>
</tr>
								<tr>
									<td style="padding:10px 10px 10px 10px;">
										<table width="100%">
											<tbody>
												<tr>
													<td style="background-color:#ffffff;padding:15px 15px 15px 15px;border:1px solid #efebec;">
														<h1 style="font-size:18px;color:#4c4848;font-weight:bold;">Informasi Reset Password</h1>														
														<p style="border-bottom:1px dotted #efebec;width:100%;"></p>
														<!--<p>Your password has been reset. Please refer to below information: </p>
														<table>
															<tr>
																<td><strong>Email</strong></td>
																<td>:</td>
																<td><?php //echo $email;?></td>
															</tr>
															<tr>
																<td><strong>New Password</strong></td>
																<td>:</td>
																<td><?php //echo $password;?></td>
															</tr>
														</table>-->
														<p>Password untuk akun Anda telah berhasil di reset otomatis melalui sistem. </p>
														<p>Mohon dilakukan pengubahan password melalu link berikut dalam waktu 3 hari: <?php echo $url_reset;?>.</p>
														<br/>
														Salam,<br/>
														<!--Tokoserba.id Team-->
														<br><br>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>

</html>