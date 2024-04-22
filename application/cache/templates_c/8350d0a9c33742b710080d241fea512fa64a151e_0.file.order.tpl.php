<?php
/* Smarty version 3.1.29, created on 2021-05-20 19:08:41
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/order.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60a6898953f352_70433395',
  'file_dependency' => 
  array (
    '8350d0a9c33742b710080d241fea512fa64a151e' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/order.tpl',
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
function content_60a6898953f352_70433395 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
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
            <li class="active">Sipariş Ver</li>
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
                        <h3>
                            <i class="fa fa-circle" aria-hidden="true"></i> Sipariş Ver
                            <span class="pull-right">
                                <a href="<?php echo base_url("main/sepet");?>
" style="color: #cf2029; padding: 10px 20px; border: 1px solid #cf2029;border-radius: 5px;" class="cart-content">
                                    <i class="glyphicon glyphicon-shopping-cart" style="font-size: 16px"></i> sepette <strong><?php echo $_smarty_tpl->tpl_vars['sepet']->value;?>
</strong> ürün var
                                </a>
                            </span>
                        </h3>
                        <div class="search-results">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><i class="fa fa-circle" aria-hidden="true"></i> Ürünler</h3>
                                    <div class="input-group">
                                        <input type="text" name="search_order" class="form-control" placeholder="Ürün adı veya kodu ile ara">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="white-bg">
                                        <form action="" method="post">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Ürün ID</th>
                                                    <th>Ürün Adı</th>
                                                    <th>Fiyat (Birim)</th>
                                                    <th></th>
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
                                                        <td class="name"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</td>
                                                        <!--<td><?php echo $_smarty_tpl->tpl_vars['product']->value->myamount+sprintf("%.2f",(($_smarty_tpl->tpl_vars['product']->value->myamount/100)*18));?>
 TL</td>-->
                                                        <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['product']->value->myamount);?>
 <i class="fa fa-try"></i></td>
                                                        <td>
                                                            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">Ürün detayı</a>
                                                            <a href="javascript:addCheckout(<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
);" class="btn btn-red">
                                                                <i class="glyphicon glyphicon-plus"></i> Sepete Ekle
                                                            </a>
                                                            <div id="myModal<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="modal fade" role="dialog" style="background: rgba(0,0,0,0.3)">
                                                                <div class="modal-dialog" style="border: 1px solid #ddd;border-radius: 10px;padding: 10px;background: #fff;">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
 Nolu Ürün Özellikleri</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        Lastik Marka
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->brand,"brand","name");?>

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Lastik Yüksekliği
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->tire_width,"tire_width","name");?>

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Lastik Oranı
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->tire_rate,"tire_rate","name");?>

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Jant Çapı
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->rim_diameter,"rim_diameter","name");?>

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Hız İndexi
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->speed_index,"speed_index","name");?>

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Mevsim
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->season,"season","name");?>

                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
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
                                                            <span>Üzgünüm, herhangi bir ürün bulunmamaktadır!</span>
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
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination">
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <li<?php if ($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['complete']->value) {?> class="active"<?php }?>><a href="<?php echo base_url("main/order/");?>
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
