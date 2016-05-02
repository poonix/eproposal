<script src="<?php echo base_url(); ?>vendor/bootstrap-fileinput/jasny-bootstrap.js"></script>
<script src="<?php echo base_url(); ?>vendor/DataTables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/table-data.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		TableData.init();
		
		//Script: Hide-show Add New kegiatan Form
		$('#d-add-subkegiatan').hide();
		jQuery("#b-tambah-subkegiatan").click(function(){
			if($('#d-add-subkegiatan').is(":visible")) $('#d-add-subkegiatan').hide(650);
			else $('#d-add-subkegiatan').show(650);
		});
		
		//Script: Delete kegiatan
		$('#sample_2 tbody').on('click', '.b-delete-subkegiatan', function () {
			var idsubkegiatan = $(this).data('idsub'); 
			$('.f-dp-id-subkegiatan').val(idsubkegiatan);
		} );
		
		//Script: Add New kegiatan
		jQuery("#form-add-subkegiatan").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-ap-subkegiatan").html('');
			$("#m-ap-status").html('');
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			var i = 0;
			if($('#f-ap-subkegiatan').val() == ''){
				$("#m-ap-subkegiatan").html('<div class="label label-danger">Wajib diisi</div>');
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
			
			var formURL = "<?php echo base_url()?>kegiatan/process_add_subkegiatan";
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
					$("#m-ap-kegiatan").html('<div class="label label-danger">'+obj.msg+'</div>');
				}
				
				console.log(data);
			});
			xhr.fail(function() {
				var failMsg = "Something error happened!";
				alert(failMsg);
			});	
		});
		
		//Script: Edit Existing kegiatan
		jQuery("#form-edit-subkegiatan").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-ep-subkegiatan").html('');
			$("#m-ep-status").html('');
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			var i = 0;
			if($('#f-ep-subkegiatan').val() == ''){
				$("#m-ep-subkegiatan").html('<div class="label label-danger">Wajib diisi</div>');
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
			
			var formURL = "<?php echo base_url()?>kegiatan/process_edit_subkegiatan";
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
					$("#m-ep-kegiatan").html('<div class="label label-danger">'+obj.msg+'</div>');
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