<script src="<?php echo base_url(); ?>vendor/bootstrap-fileinput/jasny-bootstrap.js"></script>
<script src="<?php echo base_url(); ?>vendor/DataTables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/table-data.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		TableData.init();
		
		//Script: Delete User
		$('#sample_2 tbody').on('click', '.b-delete-user', function () {
			var idUser = $(this).data('iduser'); 
			$('.f-hidden-id-user').val(idUser);
		} );
		
		//Empty error message
		jQuery("#p-overview").click(function(){
			if($("#m-ep-success").html()!='')
			{
				location.href = '<?php echo base_url();?>rincian-pegawai/'+ $('#f-hidden-id-user').val() +'.html';
			}
			
			//Set empty error message 
			$("#m-ep-success").html('');
			$("#m-ep-error").html('');
			$("#m-cp-success").html('');
			$("#m-cp-error").html('');
		});
		
		//Set default profile picture filename
		jQuery("#b-default-photo").click(function(){
			$("#f-ep-hidden-photo").val('default-profile.gif'); 
			
			if($("#ep-preview").html() == '') $("#ep-thumbnail").html('<img src="<?php echo base_url();?>assets/images/profile/default-profile.gif" />');
			else $("#ep-preview").html('<img src="<?php echo base_url();?>assets/images/profile/default-profile.gif" />');
			
		});
		
		//Province-city dependencies
		jQuery("#f-ep-province").change(function(){
			var province = jQuery("#f-ep-province").val();
			
			jQuery.ajax({
				url: "<?php echo base_url()?>location/get_cities",
				data: "province="+province,
				cache: false,
				success: function(msg){
					jQuery("#f-ep-city").html(msg);
				}
			});
		});
		
		//Script: Edit Profile Form Validation
		jQuery("#form-edit-profile").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-ep-success").html('');
			$("#m-ep-error").html('');
			$("#m-ep-firstname").html('');
			$("#m-ep-nip").html('');
			$("#m-ep-email").html('');
			$("#m-ep-phone").html('');
			$("#m-ep-province").html('');
			$("#m-ep-city").html('');
			$("#m-ep-status").html('');
			
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			var i = 0;
			if($('#f-ep-firstname').val() == ''){
				$("#m-ep-firstname").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ep-nip').val() == ''){
				$("#m-ep-nip").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			else
			{
				if(!isAlphaNumeric($('#f-ep-nip').val())){
					$("#m-ep-nip").html('<div class="label label-danger">Format salah</div>');
					//return false;
					i = 1;
				}
			}
			if($('#f-ep-email').val() == ''){
				$("#m-ep-email").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			else
			{
				if(!isValidEmailAddress($('#f-ep-email').val())){
					$("#m-ep-email").html('<div class="label label-danger">Format salah</div>');
					//return false;
					i = 1;
				}
			}
			if($('#f-ep-phone').val() != ''){
				if(!$.isNumeric($('#f-ep-phone').val())){
					$("#m-ep-phone").html('<div class="label label-danger">Format salah</div>');
					//return false;
					i = 1;
				}
			}
			if($('#f-ep-province option:selected').val() == '0'){
				$("#m-ep-province").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ep-city option:selected').val() == '0' || $('#f-ep-city option:selected').val() == ''){
				$("#m-ep-city").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ep-status option:selected').val() == ''){
				$("#m-ep-status").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			
			if(i==1){
				return false;
			}
			
			
			var formURL = "<?php echo base_url()?>employee/process_edit_profile";
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
				
				//Set Message
				if(obj.result == 'OK')
				{
					$("#m-ep-success").html('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>'+obj.msg+'</div>');
				}
				else if(obj.result=='EX')
				{
					$("#m-ep-email").html('<div class="label label-danger">'+obj.msg+'</div>');
				}
				else
				{
					$("#m-ep-error").html('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>'+obj.msg+'</div>');
				}
				
				//Set default hidden photo empty
				$("#f-ep-hidden-photo").val('');
				
				$('html, body').animate({ scrollTop: 0 }, 'fast');
				
				console.log(data);
			});
			xhr.fail(function() {
				var failMsg = "Something error happened!";
				alert(failMsg);
			});	
		});
		
		
		//Script: Change Password Form Validation
		jQuery("#form-change-password").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-cp-success").html('');
			$("#m-cp-error").html('');
			$("#m-cp-password").html('');
			$("#m-cp-confirm-password").html('');
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			var i = 0;
			if($('#f-cp-password').val() == ''){
				$("#m-cp-password").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-cp-confirm-password').val() == ''){
				$("#m-cp-confirm-password").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			else
			{
				if($('#f-cp-confirm-password').val() != $('#f-cp-password').val()){
					$("#m-cp-confirm-password").html('<div class="label label-danger">Konfirmasi password salah</div>');
					//return false;
					i = 1;
				}
			}
			
			if(i==1){
				return false;
			}
			
			
			var formURL = "<?php echo base_url()?>employee/process_change_password";
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
				
				//Set Message
				if(obj.result = 'OK') $("#m-cp-success").html('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>'+obj.msg+'</div>');
				else $("#m-cp-error").html('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>'+obj.msg+'</div>');
				
				$('html, body').animate({ scrollTop: $("#m-cp-success").offset().top }, 'fast');
				
				//Set value empty
				$('#f-cp-password').val('');
				$('#f-cp-confirm-password').val('');
				
				console.log(data);
			});
			xhr.fail(function() {
				var failMsg = "Something error happened!";
				alert(failMsg);
			});	
		});
		
		//Script: Add Profile Form Validation
		jQuery("#form-add-profile").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-ep-success").html('');
			$("#m-ep-error").html('');
			$("#m-ep-firstname").html('');
			$("#m-ep-nip").html('');
			$("#m-ep-email").html('');
			$("#m-ep-phone").html('');
			$("#m-ep-province").html('');
			$("#m-ep-city").html('');
			$("#m-ep-status").html('');
			$("#m-ep-password").html('');
			$("#m-ep-confirm-password").html('');
			
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			var i = 0;
			if($('#f-ep-firstname').val() == ''){
				$("#m-ep-firstname").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ep-nip').val() == ''){
				$("#m-ep-nip").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			else
			{
				if(!isAlphaNumeric($('#f-ep-nip').val())){
					$("#m-ep-nip").html('<div class="label label-danger">Format salah</div>');
					//return false;
					i = 1;
				}
			}
			if($('#f-ep-email').val() == ''){
				$("#m-ep-email").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			else
			{
				if(!isValidEmailAddress($('#f-ep-email').val())){
					$("#m-ep-email").html('<div class="label label-danger">Format salah</div>');
					//return false;
					i = 1;
				}
			}
			if($('#f-ep-phone').val() != ''){
				if(!$.isNumeric($('#f-ep-phone').val())){
					$("#m-ep-phone").html('<div class="label label-danger">Format salah</div>');
					//return false;
					i = 1;
				}
			}
			if($('#f-ep-province option:selected').val() == '0'){
				$("#m-ep-province").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ep-city option:selected').val() == '0' || $('#f-ep-city option:selected').val() == ''){
				$("#m-ep-city").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ep-status option:selected').val() == ''){
				$("#m-ep-status").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ep-password').val() == ''){
				$("#m-ep-password").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			if($('#f-ep-confirm-password').val() == ''){
				$("#m-ep-confirm-password").html('<div class="label label-danger">Wajib diisi</div>');
				i = 1;
			}
			else
			{
				if($('#f-ep-confirm-password').val() != $('#f-ep-password').val()){
					$("#m-ep-confirm-password").html('<div class="label label-danger">Konfirmasi password salah</div>');
					//return false;
					i = 1;
				}
			}
			
			if(i==1){
				return false;
			}
			
			
			var formURL = "<?php echo base_url()?>employee/process_add_profile";
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
				
				//Set Message
				//if(obj.result = 'OK') $("#m-ep-success").html('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>'+obj.msg+'</div>');
				//else $("#m-ep-error").html('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>'+obj.msg+'</div>');
				
				//$('html, body').animate({ scrollTop: 0 }, 'fast');
				if(obj.result=='EX')
				{
					$("#m-ep-email").html('<div class="label label-danger">'+obj.msg+'</div>');
				}
				else
				{
					location.reload();
				}
				
				console.log(data);
			});
			xhr.fail(function() {
				var failMsg = "Something error happened!";
				alert(failMsg);
			});	
		});
		
		
		function isValidEmailAddress(emailAddress) {
			var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
			return pattern.test(emailAddress);
		};
		
		function isAlphaNumeric(string) {
			var pattern = /^[a-zA-Z0-9\s]+$/i;
			return pattern.test(string);
		};
	});
</script>