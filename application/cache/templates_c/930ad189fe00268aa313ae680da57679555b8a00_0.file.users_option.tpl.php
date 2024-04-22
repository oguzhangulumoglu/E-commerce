<?php
/* Smarty version 3.1.29, created on 2021-03-04 01:10:40
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/users_option.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_604009600cdad5_40893507',
  'file_dependency' => 
  array (
    '930ad189fe00268aa313ae680da57679555b8a00' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/users_option.tpl',
      1 => 1502617803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_604009600cdad5_40893507 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="<?php echo base_url("admin/users");?>
"> Kullanıcılar</a></li>
                <li class="active">Ekle / Düzenle</li>
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
                    <div class="panel-heading">Ekle / Düzenle</div>
                    <?php if ($_smarty_tpl->tpl_vars['errorCode']->value == 2) {?>
                        <div class="alert bg-primary" role="alert">
                            <svg class="glyph stroked empty-message"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-empty-message"></use></svg> <?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>
<a href="<?php echo base_url("admin/add/management");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                    <?php }?>
                    <div class="panel-body">
                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kullanıcı adı</label>
                                    <input class="form-control" type="text" name="name" value="<?php if ($_smarty_tpl->tpl_vars['name']->value) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>" placeholder="Sorumlu adı">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" type="text" name="description" value="<?php if ($_smarty_tpl->tpl_vars['description']->value) {
echo $_smarty_tpl->tpl_vars['description']->value;
}?>" placeholder="description">
                                </div>
                                <div class="form-group">
                                    <label>Email <span style="color:red">(*)</span></label>
                                    <input class="form-control" type="text" name="email" value="<?php if ($_smarty_tpl->tpl_vars['email']->value) {
echo $_smarty_tpl->tpl_vars['email']->value;
}?>" placeholder="Sorumlu adı">
                                </div>
                                <div class="form-group">
                                    <label>Adres</label>
                                    <input class="form-control" type="text" name="adress" value="<?php if ($_smarty_tpl->tpl_vars['adress']->value) {
echo $_smarty_tpl->tpl_vars['adress']->value;
}?>">
                                </div>
                                <div class="form-group">
                                    <label>Sabit Tel</label>
                                    <input class="form-control" type="text" id="phone2" name="homephone" value="<?php if ($_smarty_tpl->tpl_vars['homephone']->value) {
echo $_smarty_tpl->tpl_vars['homephone']->value;
}?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Şifre <span style="color:red">(*)</span></label>
                                    <input class="form-control" type="password" name="password" value="12345">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input class="form-control" type="text" name="keywords" value="<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {
echo $_smarty_tpl->tpl_vars['keywords']->value;
}?>" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Sabit Cep</label>
                                    <input class="form-control" type="text" id="phone" name="cellphone" value="<?php if ($_smarty_tpl->tpl_vars['cellphone']->value) {
echo $_smarty_tpl->tpl_vars['cellphone']->value;
}?>">
                                </div>
                                <div class="form-group city">
                                    <label>Şehir</label>
                                    <select class="form-control" name="city" id="city" data-data="<?php if ($_smarty_tpl->tpl_vars['city']->value) {
echo $_smarty_tpl->tpl_vars['city']->value;
}?>">
                                        <option value="0">Seçiniz</option>
                                    </select>
                                </div>
                                <div class="form-group state">
                                    <label>İlçe</label>
                                    <select class="form-control" name="state" id="state" data-data="<?php if ($_smarty_tpl->tpl_vars['state']->value) {
echo $_smarty_tpl->tpl_vars['state']->value;
}?>">
                                        <option value="0">Seçiniz</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="float:right">Kaydet / Güncelle</button>
                            </div>
                        </form>
                    </div>
                    </div>

                </div>
            </div>
        </div>



    </div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
