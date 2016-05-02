<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo base_url(); ?>vendor/Chart.js/Chart.min.js"></script>
		<script src="<?php echo base_url(); ?>vendor/jquery.sparkline/jquery.sparkline.min.js"></script>
        
        <script src="<?php echo base_url()?>amcharts_3.17.3/amcharts/amcharts.js"></script>
        <script src="<?php echo base_url()?>amcharts_3.17.3/amcharts/pie.js"></script>
        <script src="<?php echo base_url()?>amcharts_3.17.3/amcharts/themes/light.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="<?php echo base_url(); ?>assets/js/index.js"></script>
        <style>
#chartdiv {
	width		: 100%;
	height		: 435px;
	font-size	: 11px;
}																																	
</style>
<script>
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "pie",
  "theme": "light",
  "titles": [ {
    "text": "Proposal",
    "size": 16
  } ],
  "dataProvider": [ {
    "Proposal": "Pending",
    "jumlah": '100'
  }, {
    "Proposal": "baru",
    "jumlah": '200'
  }, {
    "Proposal": "Need Approval",
    "jumlah": '100'
  }, {
    "Proposal": "Administrasi Pusat",
    "jumlah": '20'
  } ],
  "valueField": "jumlah",
  "titleField": "Proposal",
  "startEffect": "elastic",
  "startDuration": 2,
  "labelRadius": 15,
  "innerRadius": "50%",
  "depth3D": 15,
  "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
  "angle": 15,
  "export": {
    "enabled": true
  }
} );
jQuery( '.chart-input' ).off().on( 'input change', function() {
  var property = jQuery( this ).data( 'property' );
  var target = chart;
  var value = Number( this.value );
  chart.startDuration = 0;

  if ( property == 'innerRadius' ) {
    value += "%";
  }

  target[ property ] = value;
  chart.validateNow();
} );
</script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->