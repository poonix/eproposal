<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="<?php echo base_url(); ?>vendor/select2/select2.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/DataTables/jquery.dataTables.min.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="<?php echo base_url(); ?>assets/js/table-data.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		TableData.init();
		
		//Script: Delete Proposal
		$('#sample_2 tbody').on('click', '.b-delete-proposal', function () {
			var idProposal = $(this).data('idprop'); 
			$('.f-hidden-id-proposal').val(idProposal);
		} );
	});
</script>
<!-- end: JavaScript Event Handlers for this page -->