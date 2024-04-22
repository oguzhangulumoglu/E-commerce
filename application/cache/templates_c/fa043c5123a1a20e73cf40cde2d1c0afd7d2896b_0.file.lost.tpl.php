<?php
/* Smarty version 3.1.29, created on 2020-11-19 22:24:46
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/lost.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb6c67e4c2a90_56340468',
  'file_dependency' => 
  array (
    'fa043c5123a1a20e73cf40cde2d1c0afd7d2896b' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/lost.tpl',
      1 => 1492518461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb6c67e4c2a90_56340468 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>bayi giriş</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Bayi Şifremi Unuttum?</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1>Bayi Şifremi Unuttum?</h1>
    </div>
</div>

<section class="vendor-login">
    <div class="container">
        <form action="" method="post" class="login-form">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <?php if ($_smarty_tpl->tpl_vars['error']->value["code"]) {?>
                        <div class="alert bg-primary" role="alert">
                            <?php echo $_smarty_tpl->tpl_vars['error']->value["msg"];?>
<a href="<?php echo base_url("main/lost");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                    <?php }?>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-fw fa-user" aria-hidden="true"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="E-mail Adres">
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-red">ŞİFREMİ GÖNDER</button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
