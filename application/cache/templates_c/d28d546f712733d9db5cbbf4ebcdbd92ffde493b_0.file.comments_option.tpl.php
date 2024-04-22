<?php
/* Smarty version 3.1.29, created on 2020-12-12 23:23:48
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/comments_option.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fd526d443bef1_16338808',
  'file_dependency' => 
  array (
    'd28d546f712733d9db5cbbf4ebcdbd92ffde493b' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/comments_option.tpl',
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
function content_5fd526d443bef1_16338808 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="<?php echo base_url("admin/comments");?>
"> Yorumlar</a></li>
                <li class="active">Yorum Düzenle</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Yorumlar</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Düzenle</div>
                    <?php if ($_smarty_tpl->tpl_vars['errorCode']->value == 2) {?>
                        <div class="alert bg-primary" role="alert">
                            <svg class="glyph stroked empty-message"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-empty-message"></use></svg> <?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>
</a>
                        </div>
                    <?php }?>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Yorum adı</label>
                                    <input class="form-control" type="text" name="name" value="<?php if ($_smarty_tpl->tpl_vars['name']->value) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>" placeholder="Name adı">
                                </div>
                                <div class="form-group">
                                    <label>Yorum konu</label>
                                    <input class="form-control" type="text" name="subject" value="<?php if ($_smarty_tpl->tpl_vars['subject']->value) {
echo $_smarty_tpl->tpl_vars['subject']->value;
}?>" placeholder="subject adı">
                                </div>
                                <div class="form-group">
                                    <label>Yorum</label>
                                    <input class="form-control" type="text" name="text" value="<?php if ($_smarty_tpl->tpl_vars['text']->value) {
echo $_smarty_tpl->tpl_vars['text']->value;
}?>" placeholder="text adı">
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
