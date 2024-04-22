<?php
/* Smarty version 3.1.29, created on 2021-05-20 19:09:53
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/e_my_product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60a689d1b29246_37964741',
  'file_dependency' => 
  array (
    'd13a30e096e27d66ca0492c4189875dd1b917455' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/e_my_product.tpl',
      1 => 1496418722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:company.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60a689d1b29246_37964741 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_imageProduct')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.imageProduct.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>E-ticaret mağazam</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Mağaza Kategori</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1>Mağaza Ürünlerim</h1>
    </div>
</div>

<section class="vendor-settings">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:company.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>

            <div class="col-sm-8 col-md-9">
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="info-update">
                        <h3>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            Ürünlerim
                            <a href="<?php echo base_url("main/my_product_add");?>
" class="btn btn-green pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Yeni Ürün Ekle</a>
                        </h3>
                        <div class="table-responsive">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th></th>
                                        <th>Yayın Tarihi</th>
                                        <th>İlan Başlığı</th>
                                        <th>Durum</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
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
                                        <td>
                                            <img src="<?php echo base_url(smarty_modifier_imageProduct($_smarty_tpl->tpl_vars['product']->value->id));?>
" style="height: 100px; width: 100px; border: 1px solid #ccc; padding: 1px; border-radius: 5px" class="img-responsive" alt=""/>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->create_time;?>
</td>
                                        <td>
                                            <a href="<?php echo base_url("/main/urunler");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value->uri;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['product']->value->title;?>

                                            </a>
                                        </td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value->status == 'active') {?>
                                                <span style="color: green">Yayında</span>
                                            <?php } else { ?>
                                                <span style="color: red">Onay Bekliyor..</span>
                                            <?php }?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url("main/my_product_delete");?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="btn btn-danger">
                                                <i class="fa fa-close"></i> Sil
                                            </a>
                                            <a href="<?php echo base_url("main/my_product_edit");?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="btn btn-success">
                                                <i class="fa fa-edit"></i> Düzenle
                                            </a>
                                        </td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['product']->_loop) {
?>
                                    <tr>
                                        <td colspan="6">Üzgünüm, herhangi bir ilanınız bulunmuyor</td>
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
            </div>
        </div>
    </div>
</section>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
