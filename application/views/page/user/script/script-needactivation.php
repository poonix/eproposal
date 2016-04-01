<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>

<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/DataTables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/table-data.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				TableData.init();
			});
            
            
            //edit status live
            $('td a#list').editable({
              type: 'select',
              url: '<?php echo site_url('user/process_save_edit_status'); ?>',
              source: [{value: 'aktif', text: 'Aktif'}, {value: 'tidak aktif', text: 'Tidak Aktif'}],
              title: 'Select Status'
            });
            
            $.ajax({
                url: '<?php echo site_url('user/process_save_edit_status'); ?>',
                responseTime: 400,
                response: function(settings) {
                    if(settings.data.value == 'err') {
                       this.status = 500;  
                       this.responseText = 'Validation error!'; 
                    } else {
                       this.responseText = '';  
                    }
                }
                
            }); 
            
            $('td a#list_hakakses').editable({
              type: 'select',
              url: '<?php echo site_url('user/process_save_edit_role'); ?>',
              source: [{value: 'admin', text: 'admin'}, {value: 'admin instansi provinsi', text: 'admin instansi provinsi'},{value: 'admin instansi pusat', text: 'admin instansi pusat'},
              {value: 'admin instansi kab/kota', text: 'admin instansi kab/kota'},{value: 'instansi pusat', text: 'instansi pusat'},{value: 'instansi provinsi', text: 'instansi provinsi'}],
              title: 'Select Role'
            });
            
            $.ajax({
                url: '<?php echo site_url('user/process_save_edit_role'); ?>',
                responseTime: 400,
                response: function(settings) {
                    if(settings.data.value == 'err') {
                       this.status = 500;  
                       this.responseText = 'Validation error!'; 
                    } else {
                       this.responseText = '';  
                    }
                }
                
            }); 
            
            
		</script>