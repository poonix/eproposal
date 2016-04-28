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
		
		$('#uploadProposal').hide();
		
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
		
		//Anggaran Max-sub kegiatan dependencies
		jQuery("#subKegiatan").change(function(){
			var subkegiatan = jQuery("#subKegiatan").val();
			
			jQuery.ajax({
				url: "<?php echo base_url()?>proposal/get_anggaran",
				data: "subkegiatan="+subkegiatan,
				cache: false,
				success: function(result){
					jQuery(".anggaran").val(result);
				}
			});
		});
		
		//Script: Hide-show Add Editor/Upload Proposal
		jQuery("#upload").click(function(){
			$('#cke_editorProposal').hide(550);
			
			$('#uploadProposal').show(750);
		});
		
		//Script: Hide-show Add Editor/Upload Proposal
		jQuery("#editor").click(function(){
			$('#uploadProposal').hide(550);
			
			$('#cke_editorProposal').show(750);
		});
		
		//Total Anggaran -> Total Biaya Transport + RAB
		jQuery("#totalAnggaran").change(function(){
			var totalAnggaran 		= jQuery("#totalAnggaran").val();
			if(totalAnggaran == '') totalAnggaran = parseInt('0');
			else totalAnggaran = parseInt(totalAnggaran);
			
			var totalTransport 	= jQuery("#totalTransport").val();
			if(totalTransport == '') totalTransport = parseInt('0');
			else totalTransport = parseInt(totalTransport);
			
			var jml = totalAnggaran + totalTransport;
			jQuery("#totalTransportRAB").val(jml);
		});
		
		//Step 4 Calculation
		jQuery("#step-4").change(function(){
			var biayaTB 	= jQuery("#biayaTB").val();
			if(biayaTB == '') biayaTB = parseInt('0');
			else biayaTB = parseInt(biayaTB);
			
			var biayaTP 	= jQuery("#biayaTP").val();
			if(biayaTP == '') biayaTP = parseInt('0');
			else biayaTP = parseInt(biayaTP);
			
			var biayaTJ 	= jQuery("#biayaTJ").val();
			if(biayaTJ == '') biayaTJ = parseInt('0');
			else biayaTJ = parseInt(biayaTJ);
			
			var totalAnggaran 	= jQuery("#totalAnggaran").val();
			if(totalAnggaran == '') totalAnggaran = parseInt('0');
			else totalAnggaran = parseInt(totalAnggaran);
			
			var total 	= biayaTB + biayaTP + biayaTJ;
			var totalTR = total + totalAnggaran;
			
			jQuery("#totalTransport").val(total);
			jQuery("#totalTransportRAB").val(totalTR);
		});
		
		
		//Script: Wizard Form Submit
		$('#b-step4').click(function (e) {
		//jQuery("#form").submit(function(e){
			e.preventDefault();
			
			var formURL = "<?php echo base_url()?>proposal/process_add_proposal";
			var formDatas = new FormData(this);
			
			var xhr = jQuery.ajax({
				url: formURL,
				type: 'POST',
				//data: formDatas,
				data:$('#form').serialize(),
				processData: false,
				contentType: false
			});
			xhr.done(function(data) {
				var obj = jQuery.parseJSON(data);
				console.log(data);
			});
			xhr.fail(function() {
				var failMsg = "Something error happened!";
				alert(failMsg);
			});	
		});
		
		//Textarea Step 1 Validation
		/*$('#step-1').keypress(function (e) {
			var key = e.which;
			if(key == 13)  // the enter key code
			{
				$('#b-step1').click();
				return false;  
			}
		}); */ 
		
		/*
		jQuery("#b-step1").click(function(e){
			e.preventDefault();
			
			$('#h5latarBelakang').css('color','inherit');
			//$('#h5latarBelakang').removeClass('has-error');
			
			if($('#latarBelakang').val()=='')
			{ 
				$('#h5latarBelakang').css('color','#a94442');
				//$('#h5latarBelakang').addClass('has-error');
			}
		});
		
		//Textarea Step 2 Validation
		$('#step-2').keypress(function (e) {
			var key = e.which;
			if(key == 13)  // the enter key code
			{
				$('#b-step2').click();
				return false;  
			}
		});  
		jQuery("#b-step2").click(function(e){
			e.preventDefault();
			
			$('#h5kontenProposal').css('color','inherit');
			$('#h5kontenProposal').removeClass('has-error');
			$('#m-kontenProposal').html('');
			
			var valueRadio = $('input[name=jenis]:checked').val();
			
			if(valueRadio=='editor' && $('#editorProposal').val()=='')
			{ 
				$('#h5kontenProposal').css('color','#a94442');
				$('#h5kontenProposal').addClass('has-error');
				$('#m-kontenProposal').html('<font style="color:#a94442">Isi proposal wajib diisi.</font>');
				
				return false;
			}
			else if(valueRadio=='upload' && $('#uploadProposal').val()=='')
			{ 
				$('#h5kontenProposal').css('color','#a94442');
				$('#h5kontenProposal').addClass('has-error');
				$('#m-kontenProposal').html('<font style="color:#a94442">Isi proposal wajib diunggah.</font>');
				
				return false;
			}
		});
		*/
		
	});
</script>
        