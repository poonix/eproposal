<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="<?php echo base_url(); ?>vendor/selectFx/selectFx.js"></script>
<!--<script src="<?php echo base_url(); ?>vendor/jquery-validation/jquery.validate.min.js"></script>-->
<script src="<?php echo base_url(); ?>vendor/jquery-validation/jquery.validate.js"></script>
<script src="<?php echo base_url(); ?>vendor/jquery-smart-wizard/jquery.smartWizard.js"></script>
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="<?php echo base_url(); ?>vendor/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>vendor/ckeditor/adapters/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/form-text-editor.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="<?php echo base_url(); ?>assets/js/form-wizard.js"></script>
<script src="<?php echo base_url(); ?>vendor/bootstrap-fileinput/jasny-bootstrap.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		FormWizard.init();
		TextEditor.init();
	});
</script>