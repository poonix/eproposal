<script src="<?php echo base_url(); ?>vendor/bootstrap-fileinput/jasny-bootstrap.js"></script>
<script src="<?php echo base_url(); ?>vendor/DataTables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/table-data.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		TableData.init();
		
		//Script: Hide-show Add New Provinsi Form
		$('#d-add-provinsi').hide();
		jQuery("#b-tambah-provinsi").click(function(){
			if($('#d-add-provinsi').is(":visible")) $('#d-add-provinsi').hide(650);
			else $('#d-add-provinsi').show(650);
		});
		
		//Script: Delete Provinsi
		$('#sample_2 tbody').on('click', '.b-delete-provinsi', function () {
			var idProvinsi = $(this).data('idprov'); 
			$('.f-dp-id-prov').val(idProvinsi);
		} );
		
		//Script: Add New Provinsi
		jQuery("#form-add-provinsi").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-ap-provinsi").html('');
			$("#m-ap-status").html('');
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			var i = 0;
			if($('#f-ap-provinsi').val() == ''){
				$("#m-ap-provinsi").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ap-status option:selected').val() == ''){
				$("#m-ap-status").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			
			if(i == 1)
			{
				return false;
			}
			
			var formURL = "<?php echo base_url()?>location/process_add_provinsi";
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
					$("#m-ap-provinsi").html('<div class="label label-danger">'+obj.msg+'</div>');
				}
				
				console.log(data);
			});
			xhr.fail(function() {
				var failMsg = "Something error happened!";
				alert(failMsg);
			});	
		});
		
		//Script: Edit Existing Provinsi
		jQuery("#form-edit-provinsi").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-ep-provinsi").html('');
			$("#m-ep-status").html('');
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			var i = 0;
			if($('#f-ep-provinsi').val() == ''){
				$("#m-ep-provinsi").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ep-status option:selected').val() == ''){
				$("#m-ep-status").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			
			if(i == 1)
			{
				return false;
			}
			
			var formURL = "<?php echo base_url()?>location/process_edit_provinsi";
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
					$("#m-ep-provinsi").html('<div class="label label-danger">'+obj.msg+'</div>');
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