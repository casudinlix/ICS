<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo $app->codename ?></title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<link rel="stylesheet" href="<?php echo tema()?>alert/css/alertify.min.css" />
<link rel="stylesheet" href="<?php echo tema()?>css/select2.min.css" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo tema()?>css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo tema()?>font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="icon" href="<?php echo gambarlink()?>favicon.ico" type="image/x-icon" />
		<!-- page specific plugin styles -->

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo tema()?>css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />


		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo tema()?>css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo tema()?>css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo tema()?>js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							<?php echo $app->codename ?>
						</small>
					</a>
				</div>


			</div><!-- /.navbar-container -->
		</div>
<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar  responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger badge badge-transparent tooltip-error" title="Logout">
							<a href="<?php //echo logout()?>"><i class="ace-icon fa fa-power-off"></i></a>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->
<!-- /.Mulai Menu -->

<ul class="nav nav-list">
	<li class="">
		<a href="<?php echo base_url('config/changewh')?>">
			<i class="menu-icon fa fa-tachometer"></i>
			<span class="menu-text"> Select Warehouse </span>
		</a>

		<b class="arrow"></b>
	</li>

<?php foreach ($main_menu as $main):
	$this->db->order_by('menu_name ASC');?>
<?php $sub_menu= $this->db->get_where('view_access_menu',array('is_main_menu'=>$main->id));

?>
<?php if ($sub_menu->num_rows()>0):
	?>
	<!-- sub menu-->
	<li class="">
		<a href="<?php echo site_url($main->link_menu)?>" class="dropdown-toggle">
			<i class="menu-icon <?php echo $main->icon?>"></i>
			<span class="menu-text">
				<?php echo $main->menu_name ?>
			</span>

			<b class="arrow fa fa-angle-down"></b>
		</a>

		<b class="arrow"></b>

		<ul class="submenu">
			<?php foreach ($sub_menu->result() as $sub): ?>


			<li class="">
				<a href="<?php echo site_url($sub->link_menu)?>">
					<i class="menu-icon <?php echo $sub->icon?>"></i>
<?php echo $sub->menu_name?>

				</a>

				<b class="arrow"></b>

			</li>

<?php endforeach; ?>
</ul>
<?php else: ?>
	<!-- /.single Menu -->
<b class="arrow"></b>
	<li class="">
		<a href="<?php echo site_url($main->link_menu)?>">
			<i class="menu-icon <?php echo $main->icon?>"></i>
			<span class="menu-text"> <?php echo $main->menu_name?> </span>
		</a>

		<b class="arrow"></b>
	</li>
	<!-- /.single Menu -->
<?php endif; ?>

<?php endforeach; ?>


				<!-- /.nav-list -->


				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
