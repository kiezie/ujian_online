<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-03 16:25:03
         compiled from "..\templates\back-end\AdminLTE-2.3.6\kelas\list.html" */ ?>
<?php /*%%SmartyHeaderCode:16712587ab883d59e23-03184426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2f40227420efcb4fe12dc9a9aeb4d5b79506c12' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\kelas\\list.html',
      1 => 1514971366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16712587ab883d59e23-03184426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_587ab8840a4c79_48359495',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'adminweburl' => 0,
    'id_sekolah' => 0,
    'nama_sekolah' => 0,
    'data_user' => 0,
    'id_jurusan' => 0,
    'nama_jurusan' => 0,
    'id_subjurusan' => 0,
    'nama_subjurusan' => 0,
    'query' => 0,
    'array_akses' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'totalpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587ab8840a4c79_48359495')) {function content_587ab8840a4c79_48359495($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <small><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
">Home</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/kelas/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                    <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
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
                                        <div id="alert_success" class="form-group" style="display: none;">                         
                                            <div class="alert alert-info">&nbsp;</div>
                                        </div>

                                        <div id="alert_error" class="form-group" style="display: none;">                         
                                            <div class="alert alert-danger">&nbsp;</div>
                                        </div>

                                        <div id="form-group">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <td><label for="sekolah">Sekolah:</label></td>
                                                    <td>
                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_sekolah']->value;?>
" name="id_sekolah" id="sekolah" />
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['nama_sekolah']->value;?>
" class="form-control" name="nama_sekolah" placeHolder="Ketik untuk memilih sekolah..."<?php if ($_smarty_tpl->tpl_vars['data_user']->value['id_sekolah']>0) {?> readonly="readOnly"<?php }?> />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label for="jurusan">Jurusan:</label></td>
                                                    <td>
                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_jurusan']->value;?>
" name="id_jurusan" id="jurusan" />
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['nama_jurusan']->value;?>
" class="form-control" name="nama_jurusan" placeHolder="Ketik untuk memilih jurusan..." />
                                                    </td>                                                    
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="subjurusan">Sub Jurusan:</label></td>
                                                    <td>
                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_subjurusan']->value;?>
" name="id_subjurusan" id="subjurusan" />
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['nama_subjurusan']->value;?>
" class="form-control" name="nama_subjurusan" placeHolder="Ketik untuk memilih sub jurusan..." />
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="keyword">Pencarian:</label></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." />
                                                            <span class="input-group-btn"><div id="btn_cari" type="submit" class="btn btn-default">Cari</div>
                                                            <a class="btn btn-default" href="list.php">Reset</a></span>                                                  
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                        <div class="form-group"></div>
                                        
                                        <div class="form-group">
                                            <?php if (in_array('T',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_add' class="btn btn-primary">Baru</div><?php }?>
                                            <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_edit' class="btn btn-success disabled">Edit</div><?php }?>
                                            <?php if (in_array('H',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_delete' class="btn btn-danger disabled">Hapus</div><?php }?>
                                        </div>
                                                
                                        <?php if (count($_smarty_tpl->tpl_vars['listdetail']->value)>0) {?>
                                            <div id="detail" class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th width="5px"><div style="text-align: center;"><input type="checkbox" id="select_all" /></div></th>
                                                            <th width="5%"><div style="text-align: center;">No.</div></th>
                                                            <th width="20%"><div style="text-align: left;">Sekolah</div></th>
                                                            <th width="20%"><div style="text-align: left;">Jurusan</div></th>
                                                            <th width="15%"><div style="text-align: left;">Sub Jurusan</div></th>
                                                            <th width="10%"><div style="text-align: center;">Kode Kelas</div></th>
                                                            <th width="20%"><div style="text-align: left;">Nama Kelas</div></th>
                                                            <th width="10%"><div style="text-align: left;">Sub Kelas</div></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                                                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                                            <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                                                <td align="center"><input type="checkbox" id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" name="select_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="select" /></td>
                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_sekolah'];?>
</td>
                                                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_jurusan'];?>
</td>
                                                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_subjurusan'];?>
</td>
                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
</td>
                                                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</td>                                                  
                                                                <td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/subkelas/list.php?id_kelas=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-primary">Sub Kelas</a></td>
                                                            </tr>
                                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                                        <?php } ?>
                                                    </tbody>
                                                </table>        
                                            </div>

                                            <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                                                <div class="form-group text-center">
                                                    <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                                        <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">&larr; Prev</a>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['frompage']->value, null, 0);?>
                                                    <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['untilpage']->value+1 - ($_smarty_tpl->tpl_vars['frompage']->value) : $_smarty_tpl->tpl_vars['frompage']->value-($_smarty_tpl->tpl_vars['untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['currentpage']->value) {?>
                                                            <span class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span>                                
                                                        <?php } else { ?>
                                                            <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                                        <?php }?>
                                                        <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                                    <?php }} ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                                        <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">Next &rarr;</a>
                                                    <?php }?>                                
                                                </div>
                                            <?php }?>
                                        <?php }?>
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
              
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                  
    </div>
    <!-- ./wrapper -->
        
    <!-- jQuery 2.2.3 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap 3.3.6 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- FastClick -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/fastclick/fastclick.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/app.min.js"><?php echo '</script'; ?>
>
    <!-- Sparkline -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <!-- jvectormap -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
    <!-- SlimScroll 1.3.0 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    
    
    <!-- ChartJS 1.0.1 -->
    <!-- script src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/chartjs/Chart.min.js"><?php echo '</script'; ?>
 -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- script src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/pages/dashboard2.js"><?php echo '</script'; ?>
 -->
    
    <!-- AdminLTE for demo purposes -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/demo.js"><?php echo '</script'; ?>
>
    
    <!-- jQuery Ui -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        var home_url = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
';
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/notifikasi.js"><?php echo '</script'; ?>
>
    
    <!-- LOAD MASKING -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/css/loadmask.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery.loadmask.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/blitzer/jquery-ui.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {
            var delete_selected = "";
            
            $('[name=nama_sekolah]').autocomplete({                
                source: function( request, response ) {
                    $('[name=id_sekolah]').val('');
                    
                    $('[name=id_jurusan]').val('');
                    $('[name=nama_jurusan]').val('');
                    
                    $('[name=id_subjurusan]').val('');
                    $('[name=nama_subjurusan]').val('');
                    
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/sekolahDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term
                        },
                        success: function( data ) {
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
                    $('[name=id_sekolah]').val(data['id']);
                    
                    $('[name=id_jurusan]').val('');
                    $('[name=nama_jurusan]').val('');
                    
                    $('[name=id_subjurusan]').val('');
                    $('[name=nama_subjurusan]').val('');
                }		      	
            });
            
            $('[name=nama_jurusan]').autocomplete({                
                source: function( request, response ) {
                    $('[name=id_jurusan]').val('');
                    
                    $('[name=id_subjurusan]').val('');
                    $('[name=nama_subjurusan]').val('');
                    
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/jurusanDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term,
                            id_sekolah: $('[name=id_sekolah]').val()
                        },
                        success: function( data ) {
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
                    $('[name=id_jurusan]').val(data['id']);
                    
                    $('[name=id_subjurusan]').val('');
                    $('[name=nama_subjurusan]').val('');
                }		      	
            });
            
            
            $('[name=nama_subjurusan]').autocomplete({                
                source: function( request, response ) {
                    $('[name=id_subjurusan]').val('');
                    
                    
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/subjurusanDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term,
                            id_jurusan: $('[name=id_jurusan]').val()
                        },
                        success: function( data ) {
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
                    $('[name=id_subjurusan]').val(data['id']);
                }		      	
            });
            
            $( "#btn_add" ).click(function() {
                window.location='add.php';
            });
            
            $( "#btn_edit" ).click(function() {
                window.location='edit.php?id='+delete_selected;
            });
            
            $( "#btn_delete" ).click(function() {
                prosesDelete(delete_selected);
            });
            
            $( "#btn_cari" ).click(function() {
                var query = $( "#query" ).val();
                var sekolah = $( "#sekolah" ).val();
                var jurusan = $( "#jurusan" ).val();
                var subjurusan = $( "#subjurusan" ).val();
                
                window.location='list.php?'+(query.length>0?'&query='+query:'')+(sekolah.length>0?'&id_sekolah='+sekolah:'')+(jurusan.length>0?'&id_jurusan='+jurusan:'')+(subjurusan.length>0?'&id_subjurusan='+subjurusan:'');
            });

            $( ".hapus" ).click(function() {                
                var id = this.getAttribute('id_select');
                prosesDelete(id);                
            });

            $( ".edit" ).click(function() {
                var id = this.getAttribute('id_select');
                window.location='edit.php?id='+id;
            });
            
            $( "#select_all" ).change(function() {
                var is_checked = $( "#select_all" ).is(':checked');

                var element = $( ".select" );
                var lengh = element.size();
                
                delete_selected = '';
                for(var i=0; i<lengh; i++) {
                    var id = element[i].getAttribute('id_select');
                    var nama = element[i].getAttribute('name');
                
                    $('[name='+nama+']').prop('checked', is_checked);                    
                    if(is_checked) delete_selected+=(delete_selected==''?'':',')+(is_checked?id:"");
                }
                
                setButton();
            });
            
            $( ".select" ).change(function() {
                var id = this.getAttribute('id_select');
                var nama = this.getAttribute('name');
                var is_checked = $( '[name='+nama+']').is(':checked');
        
                var temps = delete_selected.split(',');
                delete_selected='';
                for(var key in temps) {
                    if(temps[key]!=id) delete_selected+=(delete_selected.length>0?",":"")+temps[key];
                }
                delete_selected+=(delete_selected.length>0?",":"")+(is_checked?id:""); 
                
                setButton();
            });
            
            function setButton() {
                var temp = new Array();
                if(delete_selected.length>0) temp = delete_selected.split(',');                
                $( "#btn_edit" ).removeClass('disabled').addClass(temp.length==1?'':'disabled');
                $( "#btn_delete" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');
            }
            
            function setMessage(type, message) {
                $('#alert_'+type+' .alert').text(message);
                $('#alert_'+type).show('slow');
                setTimeout(function() {
                    $('#alert_'+type).hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('body').offset().top 
                }, 600);
            }

            function prosesDelete(id) {
                $('<div></div>').appendTo('body')
                .html('<div>Yakin ingin menghapus data?</div>')
                .dialog({
                    modal: true,
                    title: 'Konfirmasi Penghapusan',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function () {
                            $('#detail').mask('Hapus...');
                            $.ajax({
                                url: 'delete.php',
                                type: 'POST',
                                dataType: 'json',
                                data: { id: id },
                                success: function(data, textStatus, jqXHR) {
                                    if(data['success']) {
                                        window.location='list.php<?php if ($_smarty_tpl->tpl_vars['query']->value!='') {?>?query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>';
                                    } else {
                                        $('#detail').unmask();
                                        setMessage('error', data['message']);
                                    }
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    $('#detail').unmask();
                                    setMessage('error', 'Terjadi kesalahan system.');
                                }
                            });                                
                            $(this).dialog("close");
                        },
                        No: function () {
                            //doFunctionForNo();
                            $(this).dialog("close");
                        }
                    },
                    close: function (event, ui) {
                        $(this).remove();
                    }
                });                
            }
            
            <?php if ($_smarty_tpl->tpl_vars['alert_success']->value!='') {?>setMessage('success', '<?php echo $_smarty_tpl->tpl_vars['alert_success']->value;?>
');<?php }?>        
            <?php if ($_smarty_tpl->tpl_vars['alert_error']->value!='') {?>setMessage('error', '<?php echo $_smarty_tpl->tpl_vars['alert_error']->value;?>
');<?php }?> 
        });
    <?php echo '</script'; ?>
>
</body>

</html>
<?php }} ?>
