<?php 
ob_start();
session_start();
include '../configuration.php';
include '../vendor/database.php';
include '../vendor/functions.php';
auth ($_SESSION["user"]["level"],"login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Blank Page - Ace Admin</title>

	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.7.0/css/font-awesome.min.css" />

	<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

	<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
	<script src="assets/js/jquery-2.1.4.min.js"></script>

	<script src="assets/js/ace-extra.min.js"></script>
	<script type="text/javascript">
		function reload_page(){
		setTimeout(function(){
			window.location.reload(1);
		}, 5000);
	}
	</script>

</head>

<body class="no-skin">
	<!-- navbar -->
	<?php include 'resources/block/nav.php';?>
	<!-- end navbar -->

	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>
		<!-- sidebar -->

		<?php include 'resources/block/sidebar.php'; ?>
		<!-- end sidebar -->
		<div class="main-content">
			<div class="main-content-inner">
				<!-- nav search -->
				<?php include 'resources/block/navsearch.php'; ?>
				<!-- end nav search -->

				<div class="page-content">
					<!-- /.ace-settings-container -->
					<?php include 'resources/block/setting.php'; ?>
					<!-- /.ace-settings-container -->

					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							<?php 
							if (isset($_GET["con"])) {
								$con = $_GET["con"];
								switch ($con) {
									case 'node':
									include 'controllers/NodeController.php';
									break;
									case 'user':
									include 'controllers/UserController.php';
									break;									
									default:
									include 'resources/views/dashboard/index.php';
									break;
								}
							} else {
								include 'resources/views/dashboard/index.php';
							}
							?>
							


							<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div>
		</div><!-- /.main-content -->
		<!-- footer -->
		<?php include 'resources/block/footer.php'; ?>
		<!-- end footer -->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->


<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>


<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
<script type="text/javascript">

	jQuery(function($) {
		/***************/
		$('.show-details-btn').on('click', function(e) {
			e.preventDefault();
			$(this).closest('tr').next().toggleClass('open');
			$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
		});
		/***************/

	})
</script>

<!-- inline scripts related to this page -->
</body>
</html>
