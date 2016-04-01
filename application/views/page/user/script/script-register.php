<!-- start: JAVASCRIPTS -->
<script>
	jQuery(document).ready(function() {
		Main.init();
		//Login.init();
	});
</script>
<script type="text/javascript">
	jQuery(document).ready(function() {
			
		//Script: Sign In Form Validation
		jQuery("#form-user-register").submit(function(e){
			e.preventDefault();
			
			//Set empty error message 
			$("#m-email").html('');
			$("#m-nama_depan").html('');
            $("#m-nip").html('');
            $("#m-kab").html('');
            $("#m-pass").html('');
			
			//=== HTML5 VALIDATION IF BROWSER DOESNT SUPPORT ===
			var i = 0;
			if($('#nama_depan').val() == ''){
				$("#m-nama_depan").html('<div>Nama harap diisi</div>');
				//return false;
				i = 1;
			}
            
            if($('#nip').val() == ''){
				$("#m-nip").html('<div>nip harap diisi</div>');
				//return false;
				i = 1;
			}
            
            if($('#kab').val() == ''){
				$("#m-kab").html('<div>kab/kota harap diisi</div>');
				//return false;
				i = 1;
			}
            
            if($('#email').val() == ''){
				$("#m-email").html('<div>email harap diisi</div>');
				//return false;
				i = 1;
			}
            
			else if(!isValidEmailAddress($('#email').val())){
					$("#m-email").html('<div>Format email tidak sesuai</div>');
					//return false;
					i = 1;
			}
			
			if($('#password').val() == ''){
				$("#m-pass").html('<div>Password harap diisi</div>');
				//return false;
				i = 1;
			}
            
            if($('#password_again').val() == ''){
				$("#m-pass").html('<div>masukkan password kembali harap diisi</div>');
				//return false;
				i = 1;
			}
            
            if($('#password_again').val() != $('#password').val()){
				$("#m-pass").html('<div>password tidak sama</div>');
				//return false;
				i = 1;
			}
			
			if(i==1){
				return false;
			}
            
			$("#loader").show();
			var formURL = "<?php echo base_url()?>user/process_register";
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
				/*
				if(obj.result == 'OK'){ 
					if(obj.uri_1 == 'login'){
						window.location.href = '/ceklist'; //window.location.origin;
					}else if(obj.uri_1 == 'account'){
						window.location.href = '/account';
					}else{
						location.reload(true);
					}
				}else{
					if(obj.input_type == 'em'){
						$('#msg_login_email').html('<font color="#6f0000">' + obj.message + '</font><br>');
					}else{
						$('#msg_login_error').html('<font color="#6f0000">' + obj.message + '</font><br>');
					}
				}
				*/
				
				if(obj.result == 'OK')
				{ 
					if(obj.page == '' || obj.page == null) //Direct login from index
					{
						window.location.href = '<?php echo base_url();?>user/register';
					}
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