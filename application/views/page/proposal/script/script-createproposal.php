<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="<?php echo base_url(); ?>vendor/selectFx/selectFx.js"></script>
<script src="<?php echo base_url(); ?>vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/jquery-smart-wizard/jquery.smartWizard.js"></script>
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="<?php echo base_url(); ?>vendor/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>vendor/ckeditor/adapters/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/form-text-editor.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="<?php echo base_url(); ?>assets/js/form-wizard.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		FormWizard.init();
		TextEditor.init();
		
		//Province-city dependencies
		jQuery("#provinsi").change(function(){
			var provinsi = jQuery("#provinsi").val();
			
			jQuery.ajax({
				url: "<?php echo base_url()?>proposal/get_cities",
				data: "provinsi="+provinsi,
				cache: false,
				success: function(msg){
					jQuery("#kabupaten").html(msg);
				}
			});
		});
		
		//Kegiatan-sub kegiatan dependencies
		jQuery("#kegiatan").change(function(){
			var kegiatan = jQuery("#kegiatan").val();
			
			jQuery.ajax({
				url: "<?php echo base_url()?>proposal/get_sub_kegiatan",
				data: "kegiatan="+kegiatan,
				cache: false,
				success: function(msg){
					jQuery("#subKegiatan").html(msg);
				}
			});
		});
	});
</script>
        