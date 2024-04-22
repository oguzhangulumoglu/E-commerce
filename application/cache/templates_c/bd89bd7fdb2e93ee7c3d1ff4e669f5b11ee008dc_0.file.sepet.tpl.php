<?php
/* Smarty version 3.1.29, created on 2022-03-16 21:54:42
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/sepet.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_62323272e65bb3_01378165',
  'file_dependency' => 
  array (
    'bd89bd7fdb2e93ee7c3d1ff4e669f5b11ee008dc' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/sepet.tpl',
      1 => 1502537797,
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
function content_62323272e65bb3_01378165 ($_smarty_tpl) {
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
                            <i class="fa fa-circle" aria-hidden="true"></i> Sepetim
                            <a class="pull-right btn btn-red" href="<?php echo base_url("main/order");?>
" style="margin-top: -9px;">< Geri Dön</a>
                        </h3>
                        <div class="search-results">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><i class="fa fa-circle" aria-hidden="true"></i> Ürünler</h3>
                                </div>

                                <div class="col-md-12">
                                    <div class="white-bg">
                                        <form action="javascript:return false;" name="orders" method="post">
                                            <table id="cart" class="table table-hover table-condensed">
                                                <thead>
                                                <tr>
                                                    <th style="width:48%">Ürün Adı</th>
                                                    <th style="width:10%">Fiyat</th>
                                                    <th style="width:10%">Miktar</th>
                                                    <th style="width:22%" class="text-center">Ara Toplam</th>
                                                    <th style="width:10%"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
$_from = $_smarty_tpl->tpl_vars['sepet']->value;
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
                                                    <tr id="cart-<?php echo $_smarty_tpl->tpl_vars['product']->value->cid;?>
">
                                                        <td data-th="Product">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h5 class="nomargin" style="line-height: 34px;"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-th="Price"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['product']->value->myamount);?>
 <i class="fa fa-try"></i></td>
                                                        <td data-th="Quantity">
                                                            <input type="number" name="product_<?php echo $_smarty_tpl->tpl_vars['product']->value->pid;?>
" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control text-center quantity myCheck<?php echo $_smarty_tpl->tpl_vars['product']->value->pid;?>
" data-pid="<?php echo $_smarty_tpl->tpl_vars['product']->value->pid;?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->quantity;?>
">
                                                        </td>
                                                        <td data-th="Subtotal" class="text-center"><strong class="sub_<?php echo $_smarty_tpl->tpl_vars['product']->value->pid;?>
"><?php echo sprintf("%.2f",($_smarty_tpl->tpl_vars['product']->value->myamount*$_smarty_tpl->tpl_vars['product']->value->quantity));?>
</strong> <i class="fa fa-try"></i></td>
                                                        <td class="actions" data-th="">
                                                            <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                                            <button class="btn btn-danger btn-sm" onclick="deleteCart(<?php echo $_smarty_tpl->tpl_vars['product']->value->cid;?>
)"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['product']->_loop) {
?>
                                                    <tr>
                                                        <td colspan="5">
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
                                                <tfoot>
                                                <tr class="visible-xs">
                                                </tr>
                                                <tr>
                                                    <input type="hidden" name="total_amount" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
"/>
                                                    <td><a href="<?php echo base_url("main/order");?>
" class="btn btn-warning"><i class="fa fa-angle-left"></i> Geri Git</a></td>
                                                    <td colspan="3" class="hidden-xs text-center">Toplam Fiyat (+18% KDV) : <strong class="total_amount"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['total']->value);?>
</strong> <i class="fa fa-try"></i></td>
                                                    <?php if ($_smarty_tpl->tpl_vars['total']->value > 0) {?>
                                                    <td><button type="submit" class="btn btn-success order-accept btn-block">Siparişi Tamamla <i class="fa fa-angle-right"></i></button></td>
                                                    <?php }?>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
