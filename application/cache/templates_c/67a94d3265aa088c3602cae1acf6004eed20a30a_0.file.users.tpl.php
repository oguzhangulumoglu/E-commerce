<?php
/* Smarty version 3.1.29, created on 2020-12-06 23:12:05
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/users.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fcd3b15ca94e7_83705521',
  'file_dependency' => 
  array (
    '67a94d3265aa088c3602cae1acf6004eed20a30a' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/users.tpl',
      1 => 1520073805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5fcd3b15ca94e7_83705521 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Kullanıcılar</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Kullanıcılar</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Kullanıcıları görüyorsunuz
                    </div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="<?php echo base_url("admin/json/users");?>
"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="desc">
                            <thead>
                                <tr>
                                    <th data-field="id" data-checkbox="true" >ID</th>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="create_time" data-sortable="true">Tarih</th>
                                    <th data-field="status" data-sortable="true">Statü</th>
                                    <th data-field="name" data-sortable="true">Adı Soyad</th>
                                    <th data-field="email" data-sortable="true">Email</th>
                                    <th data-field="homephone" data-sortable="true">Sabit Telefon</th>
                                    <th data-field="cellphone" data-sortable="true">Sabit Cep</th>
                                    <th data-field="city" data-sortable="true">Şehir</th>
                                    <th data-field="state" data-sortable="true">İlçe</th>
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
