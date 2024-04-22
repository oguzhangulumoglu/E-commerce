<?php
/* Smarty version 3.1.29, created on 2020-12-02 01:38:04
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/merchant.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fc6c5cc2316b7_19510127',
  'file_dependency' => 
  array (
    '74cac9d5908544b271a60f47eefb2de4d16ffc34' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/merchant.tpl',
      1 => 1520074166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5fc6c5cc2316b7_19510127 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-10 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Bayiler</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bayiler</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php if ($_smarty_tpl->tpl_vars['status']->value == 2) {?>
                        Bayileri Görüyorsunuz
                        <?php } else { ?>
                            Pasif Bayileri Görüyorsunuz
                        <?php }?>
                        <a class="btn btn-primary" style="float: right" href="<?php echo base_url("admin/add/merchant");?>
">Yeni Bayi Ekle</a>
                    </div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="<?php echo base_url("admin/json/merchant/".((string)$_smarty_tpl->tpl_vars['status']->value));?>
"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="desc">
                            <thead>
                                <tr>
                                    <th data-field="id" data-checkbox="true" >ID</th>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="create_time" data-sortable="true">Tarih</th>
                                    <th data-field="status" data-sortable="true">Statü</th>
                                    <th data-field="name" data-sortable="true">Sorumlu Adı</th>
                                    <th data-field="email" data-sortable="true">Email</th>
                                    <th data-field="company" data-sortable="true">Şirket Adı</th>
                                    <th data-field="homephone" data-sortable="true">Sabit Telefon</th>
                                    <th data-field="cellphone" data-sortable="true">Sabit Cep</th>
                                    <th data-field="city" data-sortable="true">Şehir</th>
                                    <th data-field="state" data-sortable="true">İlçe</th>
                                    <th data-field="accepts" data-sortable="false">Doğrulama</th>
                                    <th data-field="sales" data-sortable="false">Satıcı Grubu</th>
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
