<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-30 12:31:10
         compiled from "..\templates\front-end\accecories\success_order.html" */ ?>
<?php /*%%SmartyHeaderCode:22806578316cf297db5-88409730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c91fe7ed330271c3c960212c2cd871909e822a9f' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\success_order.html',
      1 => 1469856666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22806578316cf297db5-88409730',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578316cf3d1eb4_14784394',
  'variables' => 
  array (
    'is_android' => 0,
    'homeurl' => 0,
    'cartheader' => 0,
    'cartdetail' => 0,
    'no' => 0,
    'entry' => 0,
    'entry_warna' => 0,
    'data_pembayaran' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578316cf3d1eb4_14784394')) {function content_578316cf3d1eb4_14784394($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <body> 
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">Home</a></li>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/">Cart</a></li>
                    <li class="active">Checkout</li>
               	</ul>
            </div>
        </div>
        <?php }?>
        
        <div class="main">
            <div class="container">
                <div class="checkout">
                    <div class="row">
                    	<div class="col-sm-12">
                            
                            <div class="alert alert-info" style="text-align: center;"><span style="font-size: 16px; font-weight: bold;">Terimakasih Telah Melakukan Pemesanan<br />Kode Pemesanan Anda #<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['kode_pemesanan'];?>
</span></div>                            
                        
                                
                            <p style="font-size: 16px;" class="text-muted">Berikut ini adalah detail pemesanan anda:</p>
                            <div class="cart">
                                <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
                                <div class="table-responsive">
                                    <table id="tblCart" class="table custom-table">
                                        <thead>
                                            <tr class="first last">
                                                <th width="5%"><div style="text-align: center;">No.</div></th>
                                                <th width="10%"><div style="text-align: center;">Image</div></th>
                                                <th width="25%"><div style="text-align: center;">Product Name</div></th>
                                                <th width="20%"><div style="text-align: center;">Quantity</div></th>
                                                <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(0, null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cartdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                            <tr>
                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                                <td align="center"><a class="product-image" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/detail.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                                    <img alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/centercrop.php?url=<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['gambar'];?>
&width=70&height=70">
                                                </a></td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>

                                                    <?php if ($_smarty_tpl->tpl_vars['entry']->value['ukuran']!='') {?><div class="text-muted">Ukuran: <?php echo $_smarty_tpl->tpl_vars['entry']->value['ukuran'];?>
</div><?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['entry']->value['warna']!='') {?><div class="text-muted">Warna: <?php echo $_smarty_tpl->tpl_vars['entry']->value['warna'];?>
</div><?php }?>
                                                </td>
                                                <td align="center">
                                                    <?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
                                                    
                                                </td>
                                                <td align="right" class="subtotal"><?php echo $_smarty_tpl->tpl_vars['entry']->value['subtotal'];?>
</td>
                                                <td align="right" class="grandtotal"><?php echo $_smarty_tpl->tpl_vars['entry']->value['grandtotal'];?>
</td>
                                            </tr>
                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php } else { ?>
                                <div class="row">                        
                                    <div class="container">                                
                                        <div class='sepecialoffer-item item'>
                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(0, null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cartdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                            <div id="item_no_<?php echo $_smarty_tpl->tpl_vars['no']->value;?>
" class="item-inner <?php if ($_smarty_tpl->tpl_vars['no']->value==0) {?>first<?php }?> last">
                                                <div class="images-container" style="margin-top: 10px;">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/centercrop.php?url=<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['gambar'];?>
&width=70&height=70" alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" />
                                                </div>

                                                <div class="des-container">
                                                    <h2 class="product-name"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
&nbsp;</h2>
                                                    <?php if ($_smarty_tpl->tpl_vars['entry']->value['ukuran']!='') {?>
                                                    <div class="text-muted">Ukuran: <?php echo $_smarty_tpl->tpl_vars['entry']->value['ukuran'];?>
</div>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['entry']->value['warna']!='') {?>
                                                    <div class="text-muted">Warna: <?php echo $_smarty_tpl->tpl_vars['entry_warna']->value;?>
</div>
                                                    <?php }?>

                                                    <div class="text-muted">Qty: <?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
</div>

                                                    <div class="text-muted">  
                                                        <div class="price-box">
                                                            <p class="special-price">
                                                                <span class="price grandtotal"><?php echo $_smarty_tpl->tpl_vars['entry']->value['subtotal'];?>
</span>
                                                            </p>                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                                            <?php } ?>
                                        </div>                            
                                    </div>
                                </div>
                                <?php }?>
                                
                                
                                <div class="line2"></div>
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <table class="table table-cart-total">
                                            <tr>
                                                <td>Subtotal:</td>
                                                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['grandtotal'];?>
</td>
                                            </tr>
                                            <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['ongkir']!='') {?>
                                            <tr>
                                                <td>Ongkir:</td>
                                                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['ongkir'];?>
</td>
                                            </tr>
                                            <?php }?>                                
                                            <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['voucher']!='') {?>
                                            <tr>
                                                <td>Diskon:</td>
                                                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['voucher'];?>
</td>
                                            </tr>
                                            <?php }?>
                                            <tr>
                                                <td>Grandtotal:</td>
                                                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['total'];?>
</td>
                                            </tr>
                                        </table>                                        
                                    </div>
                                </div>
                            </div>
                            <br />
                            <p style="font-size: 16px;" class="text-muted">Pemesanan anda akan dikirim melalui:
                            <ul class="list-unstyled">
                                <li>Jasa kurir <?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kurir'];?>
</li>
                                <li>Layanan <?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['layanan'];?>
</li>
                            </ul></p>
                            <br />
                            <p style="font-size: 16px;" class="text-muted">Data pengiriman:
                            <ul class="list-unstyled">
                                <li>Nama penerima <?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['nama_penerima'];?>
</li>
                                <li>Alamat <?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['alamat'];?>
</li>
                                <li>No. HP <?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['no_hp'];?>
</li>
                                <li>Propinsi <?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['nama_propinsi'];?>
</li>
                                <li>Kota <?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['nama_kota'];?>
</li>
                                <li>Kecamatan <?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['nama_kecamatan'];?>
</li>
                                <li>Kode Pos <?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kode_pos'];?>
</li>                                
                            </ul></p>
                            <br />
                            <p style="font-size: 16px;" class="text-muted">Silahkan melakukan pembayaran sebesar <span class="text-primary grandtotal"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['total'];?>
</span> melalui:</p>
                              
                            
                            <div class="brands">
                                <div class="container">
        
                                    <div id="brands" class="owl-container">
                                        <div class="owl">
                                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_pembayaran']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                            <div class='item'>
                                                <div class="item-innner">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/bank/<?php echo $_smarty_tpl->tpl_vars['entry']->value['gambar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_bank'];?>
" />
                                                </div>
                                                <div class="des-container">
                                                    <h2 class="product-name"><div style="padding-bottom: 5px;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_bank'];?>
</div><div style="padding-bottom: 5px;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_pemilik_rekening'];?>
</div> <?php echo $_smarty_tpl->tpl_vars['entry']->value['no_rekening'];?>
</h2>
                                                </div>
                                            </div>
                                            <?php } ?>


                                        </div>
                                    </div><!-- /#brands -->
                                </div>
                            </div><!-- /.brands -->

                            <br />
                            <p style="font-size: 16px;" class="text-muted">Setelah pembayaran selesai. Silahkan lakukan konfirmasi pembayaran.</p>

                            <br />
                            <p align="center"><div id="konfirmasi_pembayaran" class="btn btn-danger btn-md">KONFIRMASI PEMBAYARAN</div></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.main -->
        
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <?php }?>
        
        <!-- Jquery Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <!-- Owl Carousel Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
        <!-- Countdown Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/custom.js"><?php echo '</script'; ?>
>   
        <?php echo '<script'; ?>
 type="text/javascript">
            $(function () {
                $('#konfirmasi_pembayaran').on('click', function (e) {
                    <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                        window.cpjs.goToPembayaran();
                    <?php } else { ?>
                        window.location = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/pembayaran/';
                    <?php }?>
                });
            });
        <?php echo '</script'; ?>
>
    </body>
</html>
<?php }} ?>
