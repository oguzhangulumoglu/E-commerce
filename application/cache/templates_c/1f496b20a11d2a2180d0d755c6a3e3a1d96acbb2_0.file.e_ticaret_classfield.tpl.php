<?php
/* Smarty version 3.1.29, created on 2021-01-02 23:34:49
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/e_ticaret_classfield.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ff0d8e965ac13_60394205',
  'file_dependency' => 
  array (
    '1f496b20a11d2a2180d0d755c6a3e3a1d96acbb2' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/e_ticaret_classfield.tpl',
      1 => 1496762729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5ff0d8e965ac13_60394205 ($_smarty_tpl) {
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active"><?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?> Onaysız <?php }?> Müşteri İlanlar</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?> Onaysız <?php }?> Müşteri İlanlar</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Müşteri İlanlar Görüyorsunuz
                    </div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="<?php echo base_url("admin/json");?>
/<?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?>ilanlar_onaysiz<?php } else { ?>ilanlar_onayli<?php }?>"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <thead>
                                <tr>
                                    <th data-field="id" data-checkbox="true" >ID</th>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="username" data-sortable="true">Kullanıcı Adı</th>
                                    <th data-field="name" data-sortable="true">Kategory</th>
                                    <th data-field="settings" data-sortable="false"></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}