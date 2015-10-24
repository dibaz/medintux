<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" ng-app="medintux">

<head>
    <title>Medintux | Log in</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Interface compatible avec MedinTux, logiciel de consultation médicale" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="fr" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?= asset('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= asset('dist/css/AdminLTE.min.css') ?>" rel="stylesheet">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= asset('dist/css/skins/_all-skins.min.css') ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>		
		:required .form-control:after {
		  content:"*";
		  color:red;
		}
		:required:after { color:red; content:" *"; }
	</style>
</head>
	<body  class="sidebar-mini skin-blue-light">
        <div class="wrapper">
			<div ng-view></div>
		</div>

		<!-- angularJS -->
		<script src="<?= asset('bower_components/angular/angular.min.js') ?>"></script>
		<script src="<?= asset('bower_components/angular-route/angular-route.min.js') ?>"></script>
		<script src="<?= asset('bower_components/angular-animate/angular-animate.min.js') ?>"></script>
		<script src="<?= asset('bower_components/angular-cookies/angular-cookies.min.js') ?>"></script>
		<script src="<?= asset('bower_components/angularJS-Toaster/toaster.min.js') ?>"></script>

		<!-- jQuery 2.1.4 -->
		<script src="<?= asset('plugins/jQuery/jQuery-2.1.4.min.js') ?>"></script>
		<!-- Bootstrap 3.3.5 -->
		<script src="<?= asset('bootstrap/js/bootstrap.min.js') ?>"></script>
		<!-- FastClick -->
		<script src="<?= asset('plugins/fastclick/fastclick.min.js') ?>"></script>
		<!-- AdminLTE App -->
		<script src="<?= asset('dist/js/app.min.js') ?>"></script>
		<!-- Sparkline -->
		<script src="<?= asset('plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
		<!-- jvectormap -->
		<script src="<?= asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
		<script src="<?= asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
		<!-- SlimScroll 1.3.0 -->
		<script src="<?= asset('plugins/slimScroll/jquery.slimscroll.min.js') ?>"></script>
		<!-- ChartJS 1.0.1 -->
		<script src="<?= asset('plugins/chartjs/Chart.min.js') ?>"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?= asset('dist/js/demo.js') ?>"></script>

		<!-- app -->
		<script src="<?= asset('app/app.js') ?>"></script>
		<script src="<?= asset('app/config/routing.js') ?>"></script>

		<!-- services -->
		<script src="<?= asset('app/src/services/flashService.js') ?>"></script>
		<script src="<?= asset('app/src/services/userService.js') ?>"></script>
		<script src="<?= asset('app/src/services/authenticationService.js') ?>"></script>
		
		<!-- controllers -->
		<script src="<?= asset('app/src/controllers/authenticationController.js') ?>"></script>
</body>
</html>
