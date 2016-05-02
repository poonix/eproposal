<script src="<?php echo base_url(); ?>vendor/bootstrap-fileinput/jasny-bootstrap.js"></script>
<script src="<?php echo base_url(); ?>vendor/DataTables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/table-data.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		TableData.init();
		
		//Script: Hide-show Add New kegiatan Form
		$('#d-add-kegiatan').hide();
		jQuery("#b-tambah-kegiatan").click(function(){
			if($('#d-add-kegiatan').is(":visible")) $('#d-add-kegiatan').hide(650);
			else $('#d-add-kegiatan').show(650);
		});
		
		//Script: Delete kegiatan
		$('#sample_2 tbody').on('click', '.b-delete-kegiatan', function () {
			var idkegiatan = $(this).data('idkegiatan'); 
			$('.f-dp-id-kegiatan').val(idkegiatan);
		} );
		
		//Script: Add New kegiatan
		jQuery("#form-add-kegiatan").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-ap-kegiatan").html('');
			$("#m-ap-status").html('');
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			var i = 0;
			if($('#f-ap-kegiatan').val() == ''){
				$("#m-ap-kegiatan").html('<div class="label label-danger">Wajib diisi</div>');
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
			
			var formURL = "<?php echo base_url()?>kegiatan/process_add_kegiatan";
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
		jQuery("#form-edit-kegiatan").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-ep-kegiatan").html('');
			$("#m-ep-status").html('');
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			var i = 0;
			if($('#f-ep-kegiatan').val() == ''){
				$("#m-ep-kegiatan").html('<div class="label label-danger">Wajib diisi</div>');
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
			
			var formURL = "<?php echo base_url()?>kegiatan/process_edit_kegiatan";
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