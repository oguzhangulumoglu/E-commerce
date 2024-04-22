<?php
/* Smarty version 3.1.29, created on 2021-05-20 19:09:47
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/e_my_category.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60a689cb856688_62253523',
  'file_dependency' => 
  array (
    '094525f1e1b6b94dca95b35f8e8faf941b8fa6bd' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/e_my_category.tpl',
      1 => 1496054927,
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
function content_60a689cb856688_62253523 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.capitalize.php';
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
        <h1>Mağaza Kategori</h1>
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
                            Kategoriler
                            <a href="<?php echo base_url("main/my_category_add");?>
" class="btn btn-green pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Yeni Kategori Ekle</a>
                        </h3>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kategori Adı</th>
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
$__foreach_category_0_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_category_0_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
</td>
                                    <td><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['category']->value->name);?>
</td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['category']->value->status == 'active') {?>
                                            <i class="fa fa-check" style="color: green"></i> <span style="color: green">Onaylandı</span>
                                        <?php } else { ?>
                                            <span style="color: red">Onay Bekliyor...</span>
                                        <?php }?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url("main/my_category_edit/");?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" class="btn btn-green"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="<?php echo base_url("main/my_category_delete/");?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" class="btn btn-red"><i class="glyphicon glyphicon-folder-close"></i></a>
                                    </td>
                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['category']->_loop) {
?>
                                    <tr>
                                        <td colspan="4">Üzgünüm, Herhangi bir kategoriniz bulunmamaktadır.</td>
                                    </tr>
                                <?php
}
if ($__foreach_category_0_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_item;
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
