<?php
/* Smarty version 3.1.29, created on 2022-03-17 03:08:20
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/seo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_62327bf444d855_13179249',
  'file_dependency' => 
  array (
    'd4d371561c07850b0fcef9a9e61508e61a36cd00' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/seo.tpl',
      1 => 1492518465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_62327bf444d855_13179249 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Ayarlar</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Ayarlar</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ayarları Görüyorsunuz
                        <a class="btn btn-primary" style="float: right" href="<?php echo base_url("admin/add/seo");?>
">Yeni Tag Ekle</a>
                    </div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="<?php echo base_url("admin/json/seo");?>
"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="desc">
                            <thead>
                                <tr>
                                    <th data-field="id" data-checkbox="true" >ID</th>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="tag"  data-sortable="true">Tag</th>
                                    <th data-field="name"  data-sortable="true">Açıklama</th>
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
