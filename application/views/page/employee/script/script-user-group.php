<script src="<?php echo base_url(); ?>vendor/bootstrap-fileinput/jasny-bootstrap.js"></script>
<script src="<?php echo base_url(); ?>vendor/DataTables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/table-data.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		TableData.init();
		
		//Script: Edit Profile Form Validation
		jQuery("#form-edit-user-group").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-eu-user-group").html('');
			
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			if($('#f-eu-user-group').val() == '0'){
				$("#m-eu-user-group").html('<div class="label label-danger">Wajib diisi</div>');
				return false;
			}
			
			
			var formURL = "<?php echo base_url()?>employee/process_edit_user_group";
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
				
				location.reload();
				console.log(data);
			});
			xhr.fail(function() {
				var failMsg = "Something error happened!";
				alert(failMsg);
			});	
		});
	});
</script>