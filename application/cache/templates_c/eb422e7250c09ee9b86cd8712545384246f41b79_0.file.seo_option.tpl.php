<?php
/* Smarty version 3.1.29, created on 2022-07-26 14:52:29
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/seo_option.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_62dfd57d530db3_05653750',
  'file_dependency' => 
  array (
    'eb422e7250c09ee9b86cd8712545384246f41b79' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/seo_option.tpl',
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
function content_62dfd57d530db3_05653750 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="<?php echo base_url("admin/seo");?>
"> Ayarlar</a></li>
                <li class="active">Ayarları Düzenle</li>
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
                    <div class="panel-heading">Düzenle</div>
                    <?php if ($_smarty_tpl->tpl_vars['errorCode']->value == 2) {?>
                        <div class="alert bg-primary" role="alert">
                            <svg class="glyph stroked empty-message"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-empty-message"></use></svg> <?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>
<a href="<?php echo base_url("admin/add/management");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                    <?php }?>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tag</label>
                                    <input class="form-control" type="text" name="tag" value="<?php if ($_smarty_tpl->tpl_vars['tag']->value) {
echo $_smarty_tpl->tpl_vars['tag']->value;
}?>" placeholder="tag" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <textarea class="form-control" name="name" id="" cols="30" rows="10"><?php if ($_smarty_tpl->tpl_vars['name']->value) {
echo addslashes($_smarty_tpl->tpl_vars['name']->value);
}?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="float:right">Güncelle</button>
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
