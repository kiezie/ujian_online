<?php /*%%SmartyHeaderCode:2267757bb74133007f8-98713338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e5c48a0bd65aec73ade229c879b0a1fa3704b1b' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\pengguna\\edit.html',
      1 => 1472562808,
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
  ),
  'nocache_hash' => '2267757bb74133007f8-98713338',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57c5867b1ef488_92710010',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'adminweburl' => 0,
    'isEdit' => 0,
    'data' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5867b1ef488_92710010')) {function content_57c5867b1ef488_92710010($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User | Add new User</title>
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
                    <li class="treeview">
                <a href="http://192.168.1.100/pelaporan_pelanggaran/dashboard/"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.100/pelaporan_pelanggaran/rekapitulasipelaporan/"><i class="fa fa-bars"></i> <span>Rekapitulasi</span> </a>
                            </li>
                    <li class="active treeview">
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
                <h1>
                    User <small>Add new User</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://192.168.1.100/pelaporan_pelanggaran">Home</a></li>
                    <li><a href="http://192.168.1.100/pelaporan_pelanggaran/pengguna/">User</a></li>
                    <li class="active">Add new User</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">      
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            
                            <!-- /.box-header -->
                            <div class="box-body">
                                  <div class="row">

                                    <div class="col-md-12">
                                        <div id="alert_error" class="form-group" style="display: none;">                         
                                            <div class="alert alert-danger">&nbsp;</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="propinsi">Propinsi:</label>
                                            <input type="text" value="" class="form-control" name="nama_propinsi" />
                                            <input type="hidden" value="" name="id_propinsi" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="kabupaten">Kabupaten / Kota:</label>
                                            <input type="text" value="" class="form-control" name="nama_kabupaten" />
                                            <input type="hidden" value="" name="id_kabupaten" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="nama">Nama:</label>
                                            <input type="text" value="" class="form-control" name="nama" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="username">Username:</label>
                                            <input type="text" value="" class="form-control" name="username" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="password">Password:</label>
                                            <input type="text" value="" class="form-control" name="password" />
                                        </div>

                                        <div class="form-group">
                                            <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/img/loading.gif" /></div>                  
                                            <div id="btn_simpan" type="submit" class="btn btn-primary">Simpan</div>
                                            <a id="btn_batal"  href="list.php" class="btn btn-warning">Batal</a>                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
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
    <!-- script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/chartjs/Chart.min.js"></script -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/pages/dashboard2.js"></script -->
    
    <!-- AdminLTE for demo purposes -->
    <script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/demo.js"></script>
    <link rel="stylesheet" href="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.css">
    <script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>
    
    <link href="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/datepick/jquery.datepick.css" rel="stylesheet">
    <script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/datepick/jquery.plugin.js"></script>
    <script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/datepick/jquery.datepick.js"></script>
    
    <script type="text/javascript">
        
        function removeDuplicates(s) {
            var result = "";
            for (var i = 0; i < s.length; i++) {
		var c = s.charAt(i);
		if (result.indexOf(c) == -1) result += c;
            }
            return result;
        }
        
        function randomInt(n) {
            var x = randomIntMathRandom(n);
            x = (x + randomIntBrowserCrypto(n)) % n;
            return x;
        }
        
        function randomIntMathRandom(n) {
            var x = Math.floor(Math.random() * n);
            if (x < 0 || x >= n)
                throw "Arithmetic exception";
            return x;
        }


        function randomIntBrowserCrypto(n) {
            if (typeof Uint32Array == "function" && "crypto" in window && "getRandomValues" in window.crypto) {
                // Generate an unbiased sample
                var x = new Uint32Array(1);
                do window.crypto.getRandomValues(x);
                while (x[0] - x[0] % n > 4294967296 - n);
                return x[0] % n;
            } else
                return 0;
        }

        function generate() {
            var charset = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            charset = removeDuplicates(charset);
            charset = charset.replace(/ /, "\u00A0");  // Replace space with non-breaking space
        		
            var password = "";
            var length = 10;
            for (var i = 0; !(i >= length); i++) {
                password += charset.charAt(randomInt(charset.length));
            }
          
            return password;
        }
                
                
        $(function () {           
            var isEdit = false;
            
            $('[name=nama_propinsi]').autocomplete({
                source: function( request, response ) {
                    $('[name=id_propinsi]').val('');
                    $.ajax({
                        url: 'http://192.168.1.100/pelaporan_pelanggaran/store/propinsiDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term
                        },
                        success: function( data ) {
                            $('[name=id_propinsi]').val('');
                            response( $.map( data, function( item ) {
                                return {
                                    label: item['display'],
                                    value: item['value'],
                                    data : item['data']
                                };
                            }));
                        }
                    });
                },
                autoFocus: true,	      	
                minLength: 1,
                select: function( event, ui ) {
                    var data = ui.item.data;
                    $('[name=id_propinsi]').val(data['id']);
                    $('[name=nama]').val("BKD Propinsi "+data['name']);
                    $('[name=username]').val("bkd_prop_"+data['name'].toLowerCase().replace(" ", "_"));
                    $('[name=password]').val(generate());
                }		      	
            });
            
            $('[name=nama_kabupaten]').autocomplete({
                source: function( request, response ) {
                    $('[name=id_kabupaten]').val('');
                    $.ajax({
                        url: 'http://192.168.1.100/pelaporan_pelanggaran/store/kabupatenDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term,
                            prop: $('[name=id_propinsi]').val()
                        },
                        success: function( data ) {
                            $('[name=id_kabupaten]').val('');
                            response( $.map( data, function( item ) {
                                return {
                                    label: item['display'],
                                    value: item['value'],
                                    data : item['data']
                                }
                            }));
                        }
                    });
                },
                autoFocus: true,	      	
                minLength: 1,
                select: function( event, ui ) {
                    var data = ui.item.data;
                    $('[name=id_kabupaten]').val(data['id']);
                    $('[name=nama]').val("BKD "+data['name']);
                    $('[name=username]').val("bkd_"+data['name'].toLowerCase().replace(" ", "_"));
                    $('[name=password]').val(generate());
                }		      	
            });
            
            function setErrorMessage(message) {
                $('#alert_error .alert').text(message);
                $('#alert_error').show('slow');
                setTimeout(function() {
                    $('#alert_error').hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('body').offset().top 
                }, 600);
            }

            $('#btn_simpan').click(function() {
                var data = new FormData();
                data.append('id', isEdit?'':'');
                data.append('id_propinsi', $('[name=id_propinsi]').val());
                data.append('nama_propinsi', $('[name=nama_propinsi]').val());
                data.append('id_kabupaten', $('[name=id_kabupaten]').val());
                data.append('nama_kabupaten', $('[name=nama_kabupaten]').val());
                data.append('nama', $('[name=nama]').val());
                data.append('username', $('[name=username]').val());
                data.append('password', $('[name=password]').val());
                
                setLoading(true);
                $.ajax({
                    type: 'POST',
                    url: isEdit?'update.php':'save.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        if(data['success']) {
                            window.location = 'list.php';                    
                        } else {
                            setLoading(false);
                            setErrorMessage(data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false);
                        setErrorMessage('Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });

            function setLoading(isLoading) {
                if(isLoading) {
                    $('#i_loading').show();
                    $('#btn_simpan').hide();
                    $('#btn_batal').hide();
                } else {
                    $('#i_loading').hide();
                    $('#btn_simpan').show(); 
                    $('#btn_batal').show();                    
                }
            }                
        });
    </script>
</body>

</html>
<?php }} ?>
