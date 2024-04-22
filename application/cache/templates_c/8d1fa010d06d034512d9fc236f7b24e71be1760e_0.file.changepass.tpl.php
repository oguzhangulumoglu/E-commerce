<?php
/* Smarty version 3.1.29, created on 2022-01-17 09:05:46
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/changepass.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_61e5073a814d25_62010537',
  'file_dependency' => 
  array (
    '8d1fa010d06d034512d9fc236f7b24e71be1760e' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/changepass.tpl',
      1 => 1492518461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:company.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61e5073a814d25_62010537 ($_smarty_tpl) {
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
            <li class="active">Bayi Profili</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1>Bayi Paneli</h1>
    </div>
</div>

<section class="vendor-settings">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:company.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>

            <div class="col-sm-8 col-md-9">
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="info-update">
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Şifre Güncelleme</h3>
                        <div class="wrapper">
                            <div class="row">
                                <?php if ($_smarty_tpl->tpl_vars['error']->value["code"] == 2) {?>
                                    <div class="alert bg-primary" role="alert">
                                        <?php echo $_smarty_tpl->tpl_vars['error']->value["msg"];?>
<a href="<?php echo base_url("main/changepass");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                <?php }?>
                                <form name="profile" method="post">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Şifreniz</label>
                                            <input type="password" name="password" placeholder="**************" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Yeniden Şifreniz</label>
                                            <input type="password" class="form-control" placeholder="**************" name="repassword">
                                        </div>
                                    </div>

                                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-red">GÜNCELLE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pop-up pop-up-successful">
    <i class="fa fa-check-circle-o" aria-hidden="true"></i>
    <span>Ürün başarıyla güncellendi.</span>
</div>

<div class="pop-up pop-up-unsuccessful">
    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
    <span>Ürün güncellemesi başarısız.<br>Lütfen kontrol ediniz.</span>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
