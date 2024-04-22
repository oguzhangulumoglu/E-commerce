<?php
/* Smarty version 3.1.29, created on 2022-01-17 09:16:35
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/e_ticaret_edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_61e509c38c4fd7_19146031',
  'file_dependency' => 
  array (
    '2a12f6c9c2f63debb9f054a6b7730cdf9c498dc1' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/e_ticaret_edit.tpl',
      1 => 1496764548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_61e509c38c4fd7_19146031 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li><a href="<?php echo base_url("admin/e_ticaret/classfield/2");?>
"> E-Ticaret</a></li>
        <li class="active">Ekle / Düzenle</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">İlanlar</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Düzenle</div>
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
                            <label>İlan Başlığı</label>
                            <input class="form-control" type="text" name="title" value="<?php if ($_smarty_tpl->tpl_vars['title']->value) {
echo $_smarty_tpl->tpl_vars['title']->value;
}?>" placeholder="İlan Adı">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Kategory</label>
                            <select class="form-control" name="category" id="category" required="required">
                                <option value="">Seçiniz</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Durumu</label>
                            <select class="form-control" name="status" id="status" required="required">
                                <option value="active" <?php if ($_smarty_tpl->tpl_vars['status']->value == "active") {?>selected="selected" <?php }?>>Yayında</option>
                                <option value="passive" <?php if ($_smarty_tpl->tpl_vars['status']->value == "passive") {?>selected="selected" <?php }?>>Yayında değil</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>İlan Kısa Açıklama</label>
                            <textarea name="short_property" class="form-control" id="" cols="30" rows="5"><?php if ($_smarty_tpl->tpl_vars['short_property']->value) {
echo $_smarty_tpl->tpl_vars['short_property']->value;
}?></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-3 row">
                            <div class="form-group">
                                <label class="control-label">Ürün Fiyatı</label>
                                <input maxlength="100" type="number" required="required" class="form-control" placeholder="300" name="price" value="<?php if ($_smarty_tpl->tpl_vars['price']->value) {
echo $_smarty_tpl->tpl_vars['price']->value;
}?>" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">İndirim Varmı ?</label>
                                <select class="form-control" name="knock_off" id="knock_off">
                                    <option value="no" <?php if ($_smarty_tpl->tpl_vars['knock_off']->value == "no") {?>selected<?php }?>>Hayır</option>
                                    <option value="yes" <?php if ($_smarty_tpl->tpl_vars['knock_off']->value == "yes") {?>selected<?php }?>>Evet</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['knock_off']->value != "yes") {?>hidden<?php }?>" id="knock_off_type">
                                <label class="control-label">İndirim Oranı Tipi</label>
                                <select class="form-control" name="knock_off_type">
                                    <option value="no" <?php if ($_smarty_tpl->tpl_vars['knock_off_type']->value == "yuzde") {?>selected<?php }?>>Yüzde</option>
                                    <option value="yes" <?php if ($_smarty_tpl->tpl_vars['knock_off_type']->value == "fiyat") {?>selected<?php }?>>Fiyat</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['knock_off']->value != "yes") {?>hidden<?php }?>" id="knock_off_price">
                                <label class="control-label">İndirim Miktarı</label>
                                <input maxlength="100" type="number" class="form-control" placeholder="300" name="knock_off_price" value="<?php if ($_smarty_tpl->tpl_vars['knock_off_price']->value) {
echo $_smarty_tpl->tpl_vars['knock_off_price']->value;
}?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>İlan Açıklama</label>
                            <textarea class="form-control editor" name="property" rows="16"><?php if ($_smarty_tpl->tpl_vars['property']->value) {
echo $_smarty_tpl->tpl_vars['property']->value;
}?></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" style="margin-top: 25px">Kaydet / Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
