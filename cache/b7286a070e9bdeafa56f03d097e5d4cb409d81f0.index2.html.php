<?php /*%%SmartyHeaderCode:1201257bb73706694c8-04265462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7286a070e9bdeafa56f03d097e5d4cb409d81f0' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\index2.html',
      1 => 1472114928,
      2 => 'file',
    ),
    'a4ba2197082586dcb59d10faf968e033efac5cfb' => 
    array (
      0 => 'D:\\www\\pelaporan_pelanggaran\\templates\\back-end\\AdminLTE-2.3.6\\includes\\head.html',
      1 => 1470529822,
      2 => 'file',
    ),
    'd7bc5a80ef0714af8c3152430a4fe4b2de20c9d5' => 
    array (
      0 => 'D:\\www\\pelaporan_pelanggaran\\templates\\back-end\\AdminLTE-2.3.6\\includes\\header.html',
      1 => 1472108949,
      2 => 'file',
    ),
    'e623c49909414e9e6690e36bbab73d6125eec24e' => 
    array (
      0 => 'D:\\www\\pelaporan_pelanggaran\\templates\\back-end\\AdminLTE-2.3.6\\includes\\side.html',
      1 => 1470518259,
      2 => 'file',
    ),
    'e53576c2f1fad6e87400ad507a3b4127cc18a2f0' => 
    array (
      0 => 'D:\\www\\pelaporan_pelanggaran\\templates\\back-end\\AdminLTE-2.3.6\\includes\\footer.html',
      1 => 1471900231,
      2 => 'file',
    ),
    '221a360c0bfa87a074991428eb2ed493aff639e0' => 
    array (
      0 => 'D:\\www\\pelaporan_pelanggaran\\templates\\back-end\\AdminLTE-2.3.6\\includes\\footer_js.html',
      1 => 1472032549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1201257bb73706694c8-04265462',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57c58695e278b5_18278339',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c58695e278b5_18278339')) {function content_57c58695e278b5_18278339($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard | Summary of your App</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
    <!-- jvectormap -->
  <link rel="stylesheet" href="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    
  <!-- Theme style -->
  <link rel="stylesheet" href="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/css/AdminLTE.min.css">
  
    
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/css/skins/_all-skins.min.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">

    <!-- Logo -->
    <a href="http://192.168.1.100/pelaporan_pelanggaran" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>PD</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pelaporan </b>Pelanggaran</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Admin 
                  <small> </small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                   <a href="http://192.168.1.100/pelaporan_pelanggaran/gantipassword/" class="btn btn-default btn-flat">Edit Profile</a>
                </div>
                <div class="pull-right">
                  <a href="http://192.168.1.100/pelaporan_pelanggaran/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li -->
        </ul>
      </div>

    </nav>
  </header>
    <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"> MENU </li>
                    <li class="active treeview">
                <a href="http://192.168.1.100/pelaporan_pelanggaran/dashboard/"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.100/pelaporan_pelanggaran/rekapitulasipelaporan/"><i class="fa fa-bars"></i> <span>Rekapitulasi</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.100/pelaporan_pelanggaran/pengguna/"><i class="fa fa-user"></i> <span>Managemen User</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.100/pelaporan_pelanggaran/pengumuman/"><i class="fa fa-bars"></i> <span>Pengumuman</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.100/pelaporan_pelanggaran/pesanmasuk/"><i class="fa fa-envelope"></i> <span>Pesan Masuk</span> </a>
                            </li>
                
        <!-- li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>&nbsp;</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
                
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="width:100%; height:100%;" id="layarfullscreen_uu_asn"></div>                                                    
                    </div>
                </div>  
            </div>
          
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="width:100%; height:100%;" id="layarfullscreen_pp_53_2010"></div>                                                    
                    </div>
                </div>  
            </div>
      </div> 	
      
      <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="width:100%; height:100%;" id="layarfullscreen_pp_45_1990"></div>                                                    
                    </div>
                </div>  
            </div>
          
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="width:100%; height:100%;" id="layarfullscreen_pp_46_2011"></div>                                                    
                    </div>
                </div>  
            </div>
      </div>
      
      <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="width:100%; height:100%;" id="layarfullscreen_peraturan_lain"></div>                                                    
                    </div>
                </div>  
            </div>
      </div>
    
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <footer class="main-footer">
    <div class="pull-right hidden-xs">
       
    </div>
     
</footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  

</div>
<!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) 
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/pages/dashboard2.js"></script -->
<!-- AdminLTE for demo purposes -->
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/demo.js"></script>
    
    <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript">
        $(function () {
            $.ajax({
                type: 'POST',
                url: 'http://192.168.1.100/pelaporan_pelanggaran/dashboard/statistikpelanggaran.php',
                //data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    var uu_asn = data['uu_asn'];
                    var pp_53_2010 = data['pp_53_2010'];
                    var pp_45_1990 = data['pp_45_1990'];
                    var pp_46_2011 = data['pp_46_2011'];
                    var peraturan_lain = data['peraturan_lain'];
                    
                    loadGrafik_uu_asn(uu_asn['ringan'], uu_asn['sedang'], uu_asn['berat']);
                    loadGrafik_pp_53_2010(pp_53_2010['ringan'], pp_53_2010['sedang'], pp_53_2010['berat']);
                    loadGrafik_pp_45_1990(pp_45_1990['ringan'], pp_45_1990['sedang'], pp_45_1990['berat']);
                    loadGrafik_pp_46_2011(pp_46_2011['ringan'], pp_46_2011['sedang'], pp_46_2011['berat']);
                    loadGrafik_peraturan_lain(peraturan_lain['ringan'], peraturan_lain['sedang'], peraturan_lain['berat']);
                    

                }, 
                error: function() {

                }
            }); 
            
            function loadGrafik_uu_asn(ringan, sedang, berat) {
                $('#layarfullscreen_uu_asn').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Pelanggaran Disiplin UU ASN<br />Nasional'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Pelanggaran',
                        colorByPoint: true,
                        data: [{
                            name: 'Ringan',
                            y: ringan*1,
                            color: 'green'
                        }, {
                            name: 'Sedang',
                            y: sedang*1,
                            sliced: true,
                            selected: true,
                            color: 'yellow'
                        }, {
                            name: 'Berat',
                            y: berat*1,
                            color: 'red'
                        }]
                    }]
                });
            };
            
            function loadGrafik_pp_53_2010(ringan, sedang, berat) {
                $('#layarfullscreen_pp_53_2010').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Pelanggaran Disiplin PP 53 Tahun 2010<br />Nasional'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Pelanggaran',
                        colorByPoint: true,
                        data: [{
                            name: 'Ringan',
                            y: ringan*1,
                            color: 'green'
                        }, {
                            name: 'Sedang',
                            y: sedang*1,
                            sliced: true,
                            selected: true,
                            color: 'yellow'
                        }, {
                            name: 'Berat',
                            y: berat*1,
                            color: 'red'
                        }]
                    }]
                });
            };
            
            function loadGrafik_pp_45_1990(ringan, sedang, berat) {
                $('#layarfullscreen_pp_45_1990').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Pelanggaran Disiplin PP 45 Tahun 1990<br />Nasional'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Pelanggaran',
                        colorByPoint: true,
                        data: [{
                            name: 'Ringan',
                            y: ringan*1,
                            color: 'green'
                        }, {
                            name: 'Sedang',
                            y: sedang*1,
                            sliced: true,
                            selected: true,
                            color: 'yellow'
                        }, {
                            name: 'Berat',
                            y: berat*1,
                            color: 'red'
                        }]
                    }]
                });
            };
            
            function loadGrafik_pp_46_2011(ringan, sedang, berat) {
                $('#layarfullscreen_pp_46_2011').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Pelanggaran Disiplin PP 46 Tahun 2011<br />Nasional'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Pelanggaran',
                        colorByPoint: true,
                        data: [{
                            name: 'Ringan',
                            y: ringan*1,
                            color: 'green'
                        }, {
                            name: 'Sedang',
                            y: sedang*1,
                            sliced: true,
                            selected: true,
                            color: 'yellow'
                        }, {
                            name: 'Berat',
                            y: berat*1,
                            color: 'red'
                        }]
                    }]
                });
            };
            
            function loadGrafik_peraturan_lain(ringan, sedang, berat) {
                $('#layarfullscreen_peraturan_lain').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Pelanggaran Disiplin Peraturan Lain<br />Nasional'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Pelanggaran',
                        colorByPoint: true,
                        data: [{
                            name: 'Ringan',
                            y: ringan*1,
                            color: 'green'
                        }, {
                            name: 'Sedang',
                            y: sedang*1,
                            sliced: true,
                            selected: true,
                            color: 'yellow'
                        }, {
                            name: 'Berat',
                            y: berat*1,
                            color: 'red'
                        }]
                    }]
                });
            };
            
            
            
        });
    </script>
</body>
</html>
<?php }} ?>
