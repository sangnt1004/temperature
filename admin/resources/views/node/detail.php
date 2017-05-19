<?php
if(isset($_GET['act']) && $_GET['act'] == 'detail'){
	$zigbee = "zigbee".$_GET['cid'];
	$id = $_GET['cid'];
	echo '<script type="text/javascript">reload_page();</script>';
}
$nhietdo = array();
$time = array();
$data = listNodeDetail($conn,$zigbee);
foreach ($data as $value) {
	$time[] = $value['time'];
	$nhietdo[] = $value['temperature'];	
}
$nhietdo = array_reverse($nhietdo);
$time = array_reverse($time);
?>

<div class="page-header">
	<h1>

		Node<?php echo $_GET['cid'];  ?> Details 
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			information
		</small>
	</h1>
</div><!-- /.page-header -->

<div class="col-sm-12" id="detail">
	<div class="widget-box transparent">
		<div class="widget-header widget-header-flat">
			<h4 class="widget-title lighter">
				<i class="ace-icon fa fa-signal"></i>
				Temprature
			</h4>
			<div class="widget-toolbar">
				<a href="#" data-action="collapse">
					<i class="ace-icon fa fa-chevron-up"></i>
				</a>
			</div>
		</div>

		<div class="widget-body">
			<div class="widget-main padding-4">
				<div id="sales-charts"></div>
			</div><!-- /.widget-main -->
		</div><!-- /.widget-body -->
	</div><!-- /.widget-box -->
</div><!-- /.col -->


<script src="assets/js/jquery.flot.min.js"></script>

<script src="assets/js/jquery.flot.resize.min.js"></script>
<!-- inline scripts related to this page -->
<script type="text/javascript">
	
	jQuery(function($) {

				// var d1 = [];
				// for (var i = 0; i < Math.PI * 2; i += 0.5) {
				// 	d1.push([i, Math.sin(i)]);
				// }

				var d2 = [];
				var value = <?php echo json_encode($nhietdo); ?>;
				var times = <?php echo json_encode($time); ?>;
				for (var i = 0; i <=100 ; i++) {
					d2.push([i,value[i]]); // (x,y)
				}

				// var d3 = [];
				// for (var i = 0; i < Math.PI * 2; i += 0.2) {
				// 	d3.push([i, Math.tan(i)]);
				// }
				

				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					// +{ label: "Domains", data: d1 },
					{ label: "Temprature (&deg;C)", data: d2 }
					// ,{ label: "Services", data: d3 }
					], {
						hoverable: true,
						shadowSize: 0,
						series: {
							lines: { show: true },
							points: { show: true }
						},
						xaxis: {
							
							ticks: [[1,times[1]]<?php 
							for ($i = 2; $i <= 15; $i++) {
								echo ",[$i,times[$i]]";
							}
							?>
							],
							min: 0,
							max: 15,
							tickLength: 0,
						},
						yaxis: {
							ticks:10,
							min: 0,
							max: 100,
							tickDecimals: 1
						},
						grid: {
							backgroundColor: { colors: [ "#fff", "#fff" ] },
							borderWidth: 1,
							borderColor:'#333'
						}
					});
			})
</script>