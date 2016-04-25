<script src="<?php echo base_url(); ?>vendor/bootstrap-fileinput/jasny-bootstrap.js"></script>
<script src="<?php echo base_url(); ?>vendor/DataTables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/table-data.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		TableData.init();
		
		//Script: Hide-show Add New Kabupaten Form
		$('#d-add-kabupaten').hide();
		jQuery("#b-tambah-kabupaten").click(function(){
			if($('#d-add-kabupaten').is(":visible")) $('#d-add-kabupaten').hide(650);
			else $('#d-add-kabupaten').show(650);
		});
		
		//Script: Delete Kabupaten
		$('#sample_2 tbody').on('click', '.b-delete-kabupaten', function () {
			var idKabupaten = $(this).data('idkab'); 
			$('.f-dp-id-kab').val(idKabupaten);
		} );
		
		//Script: Add New Kabupaten
		jQuery("#form-add-kabupaten").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-ak-provinsi").html('');
			$("#m-ak-jenis").html('');
			$("#m-ak-kabupaten").html('');
			$("#m-ak-status").html('');
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			var i = 0;
			if($('#f-ak-provinsi option:selected').val() == '0'){
				$("#m-ak-provinsi").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ak-jenis option:selected').val() == ''){
				$("#m-ak-jenis").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ak-kabupaten').val() == ''){
				$("#m-ak-kabupaten").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ak-status option:selected').val() == ''){
				$("#m-ak-status").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			
			if(i == 1)
			{
				return false;
			}
			
			var formURL = "<?php echo base_url()?>location/process_add_kabupaten";
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
					$("#m-ak-kabupaten").html('<div class="label label-danger">'+obj.msg+'</div>');
				}
				
				console.log(data);
			});
			xhr.fail(function() {
				var failMsg = "Something error happened!";
				alert(failMsg);
			});	
		});
		
		//Script: Edit Existing Kabupaten
		jQuery("#form-edit-kabupaten").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-ek-provinsi").html('');
			$("#m-ek-kabupaten").html('');
			$("#m-ek-status").html('');
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			var i = 0;
			if($('#f-ek-provinsi option:selected').val() == '0'){
				$("#m-ek-provinsi").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ek-jenis option:selected').val() == ''){
				$("#m-ek-jenis").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ek-kabupaten').val() == ''){
				$("#m-ek-kabupaten").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ek-status option:selected').val() == ''){
				$("#m-ek-status").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			
			if(i == 1)
			{
				return false;
			}
			
			var formURL = "<?php echo base_url()?>location/process_edit_kabupaten";
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
					$("#m-ek-kabupaten").html('<div class="label label-danger">'+obj.msg+'</div>');
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