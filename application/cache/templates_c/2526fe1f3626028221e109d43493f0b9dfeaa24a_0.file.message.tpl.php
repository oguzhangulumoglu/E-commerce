<?php
/* Smarty version 3.1.29, created on 2020-12-12 23:19:08
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/message.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fd525bcb5c568_43347194',
  'file_dependency' => 
  array (
    '2526fe1f3626028221e109d43493f0b9dfeaa24a' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/message.tpl',
      1 => 1492518464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5fd525bcb5c568_43347194 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Mesajlar</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?>
                <h1 class="page-header">Mesajlar</h1>
                <?php } else { ?>
                <h1 class="page-header">Yöneticiye Gönderilen Mesajlar</h1>
                <?php }?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tüm Mesajları Görüyorsunuz
                    </div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="<?php echo base_url("admin/json/message/".((string)$_smarty_tpl->tpl_vars['status']->value));?>
"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="desc">
                            <thead>
                                <tr>
                                    <th data-field="id" data-checkbox="true" >ID</th>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="create_time" data-sortable="true">Tarih</th>
                                    <th data-field="mid"  data-sortable="true">Kime</th>
                                    <th data-field="name"  data-sortable="true">Sorumlu</th>
                                    <th data-field="email"  data-sortable="true">Email</th>
                                    <th data-field="text"  data-sortable="true">Mesaj</th>
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
