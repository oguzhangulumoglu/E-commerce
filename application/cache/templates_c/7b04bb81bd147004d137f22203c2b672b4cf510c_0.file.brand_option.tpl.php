<?php
/* Smarty version 3.1.29, created on 2022-08-17 20:53:15
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/brand_option.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_62fd2b0b804bd4_88513814',
  'file_dependency' => 
  array (
    '7b04bb81bd147004d137f22203c2b672b4cf510c' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/brand_option.tpl',
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
function content_62fd2b0b804bd4_88513814 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="<?php echo base_url("admin/brand");?>
"> Marka</a></li>
                <li class="active">Marka Ekle / Düzenle</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Marka</h1>
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
                                    <label>Marka adı</label>
                                    <input class="form-control" type="text" name="brand" value="<?php if ($_smarty_tpl->tpl_vars['name']->value) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>" placeholder="Marka adı">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Marka Logo</label>
                                    <input class="form-control" type="file" name="file" value="<?php if ($_smarty_tpl->tpl_vars['image']->value) {
echo $_smarty_tpl->tpl_vars['image']->value;
}?>" placeholder="Image adı">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <textarea name="details" class="form-control editor" id="" cols="30" rows="12"><?php echo $_smarty_tpl->tpl_vars['details']->value;?>
</textarea>
                            </div>
                            <div class="col-md-6">
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
