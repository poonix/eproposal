<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="<?php echo base_url(); ?>vendor/select2/select2.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/DataTables/jquery.dataTables.min.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="<?php echo base_url(); ?>assets/js/table-data.js"></script>
<script src="<?php echo base_url(); ?>vendor/bootstrap-fileinput/jasny-bootstrap.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		TableData.init();
		
		//Script: Delete Proposal
		$('#sample_2 tbody').on('click', '.b-delete-proposal', function () {
			var idProposal = $(this).data('idprop'); 
			$('.f-hidden-id-proposal').val(idProposal);
		} );
		
		//Script: Upload Approvile File
		jQuery("#form-upload-approval").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-ua-file-approval").html('');
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			var i = 0;
			if($('#f-ua-file-approval').val() == ''){
				$("#m-ua-file-approval").html('<div class="label label-danger">Berkas wajib diunggah.</div>');
				return false;
			}
			
			var formURL = "<?php echo base_url()?>proposal/process_upload_approval";
			var formDatas = new FormData(this);
			
			var xhr = jQuery.ajax({
				url: formURL,
				type: 'POST',
				data: formDatas,
				processData: false,
				contentType: false
			});
			xhr.done(function(data) {
				var obj = jQuery.parseJSON(data);
				
				if(obj.result == 'OK')
				{
					location.reload();
				}
				else
				{
					$("#m-ua-file-approval").html('<div class="label label-danger">'+obj.msg+'</div>');
				}
				
				console.log(data);
			});
			xhr.fail(function() {
				var failMsg = "Something error happened!";
				alert(failMsg);
			});	
		});
	});
</script>
<!-- end: JavaScript Event Handlers for this page -->