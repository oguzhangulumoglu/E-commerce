<?php
/* Smarty version 3.1.29, created on 2022-03-16 21:55:01
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/orders.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_62323285858c77_61688144',
  'file_dependency' => 
  array (
    '5e2c0072f5b8ab7fadbc8c1d399194f678c0d264' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/orders.tpl',
      1 => 1492518462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62323285858c77_61688144 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_time')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_time.php';
if (!is_callable('smarty_modifier_get_data_orders')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_orders.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>bayi giriş</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Siparişlerim</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1>Bayi Paneli</h1>
    </div>
</div>

<section class="vendor-settings">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <figure>
                            <img src="<?php if ($_smarty_tpl->tpl_vars['logo']->value) {
echo base_url($_smarty_tpl->tpl_vars['logo']->value);
} else {
echo base_url("assets/img/bayilogo1.png");
}?>" alt="" class="img-responsive center-block img-circle">
                            <figcaption>
                                <h3><?php echo $_smarty_tpl->tpl_vars['company']->value;?>
</h3>
                                <span><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>

            <div class="col-sm-8 col-md-9">
                <div class="tab-content">

                    <div class="tab-pane active">
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Siparişler</h3>
                        <div class="search-results">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><i class="fa fa-circle" aria-hidden="true"></i> Siparişlerim</h3>
                                </div>

                                <div class="col-md-12">
                                    <div class="white-bg">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Sipariş ID</th>
                                                <th>Sipariş Zamanı</th>
                                                <th>Sipariş Durumu</th>
                                                <th>Sipariş Tutarı (KDV)</th>
                                                <th>Sipariş Detayı</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_0_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_0_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
</td>
                                                    <td><?php echo smarty_modifier_get_time($_smarty_tpl->tpl_vars['product']->value->create_time);?>
</td>
                                                    <td><?php if ($_smarty_tpl->tpl_vars['product']->value->status == "1") {?>Siparişiniz Değerlendiriliyor<?php } elseif ($_smarty_tpl->tpl_vars['product']->value->status == "2") {?>Ödeme Bekleniyor<?php } elseif ($_smarty_tpl->tpl_vars['product']->value->status == "3") {?>Sipariş İptal<?php } else { ?>Tamamlandı <?php }?></td>
                                                    <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['product']->value->total);?>
 TL</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">Detayı göster</a>
                                                        <div id="myModal<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="modal fade" role="dialog" style="background: rgba(0,0,0,0.3)">
                                                            <div class="modal-dialog" style="border: 1px solid #ddd;border-radius: 10px;padding: 10px;background: #fff;">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
 Nolu Sipariş Detayı</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Ürün ID</th>
                                                                                <th>Ürün Adı</th>
                                                                                <th>Ürün Adeti</th>
                                                                                <th>Ürün Fiyatı(KDV'li)</th>
                                                                                <th>Toplam</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <?php
$_from = smarty_modifier_get_data_orders($_smarty_tpl->tpl_vars['product']->value->id);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_orders_1_saved_item = isset($_smarty_tpl->tpl_vars['orders']) ? $_smarty_tpl->tpl_vars['orders'] : false;
$_smarty_tpl->tpl_vars['orders'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['orders']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['orders']->value) {
$_smarty_tpl->tpl_vars['orders']->_loop = true;
$__foreach_orders_1_saved_local_item = $_smarty_tpl->tpl_vars['orders'];
?>
                                                                                <tr>
                                                                                    <td><?php echo $_smarty_tpl->tpl_vars['orders']->value->pid;?>
</td>
                                                                                    <td><a href="<?php echo base_url("main/product");?>
/<?php echo $_smarty_tpl->tpl_vars['orders']->value->uri;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['orders']->value->name;?>
</a></td>
                                                                                    <td><?php echo $_smarty_tpl->tpl_vars['orders']->value->stock;?>
 adet</td>
                                                                                    <td><?php echo $_smarty_tpl->tpl_vars['orders']->value->myamount+sprintf("%.2f",(($_smarty_tpl->tpl_vars['orders']->value->myamount/100)*18));?>
</td>
                                                                                    <td><?php echo sprintf("%.2f",($_smarty_tpl->tpl_vars['orders']->value->stock*($_smarty_tpl->tpl_vars['orders']->value->myamount+(($_smarty_tpl->tpl_vars['orders']->value->myamount/100)*18))));?>
</td>
                                                                                </tr>
                                                                            <?php
$_smarty_tpl->tpl_vars['orders'] = $__foreach_orders_1_saved_local_item;
}
if ($__foreach_orders_1_saved_item) {
$_smarty_tpl->tpl_vars['orders'] = $__foreach_orders_1_saved_item;
}
?>
                                                                            </tbody>
                                                                            <tfoot>
                                                                            <tr>
                                                                                <td colspan="2"></td>
                                                                                <td colspan="2 text-right">Toplam Fiyat (KDV'li):</td>
                                                                                <td><strong><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['product']->value->total);?>
</strong></td>
                                                                            </tr>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-info" data-dismiss="modal">Kapat</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['product']->_loop) {
?>
                                                <tr>
                                                    <td colspan="4">
                                                        <span>Üzgünüm, herhangi bir ürün siparişiniz bulunmamaktadır!</span>
                                                    </td>
                                                </tr>
                                            <?php
}
if ($__foreach_product_0_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_item;
}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination">
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <li<?php if ($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['complete']->value) {?> class="active"<?php }?>><a href="<?php echo base_url("main/orders/");?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
                                <?php }
}
?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
