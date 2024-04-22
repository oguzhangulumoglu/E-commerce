<?php
/* Smarty version 3.1.29, created on 2020-11-19 21:01:08
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/contact.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb6b2e40f79f7_22074701',
  'file_dependency' => 
  array (
    'c0ccdb566f0510565f5d5f24a32478bc4c2f39f8' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/contact.tpl',
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
function content_5fb6b2e40f79f7_22074701 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.capitalize.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>iletişim formu</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">İletişim Formu</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['merchant']->value["company"]);?>
 İletişim Formu</h1>
    </div>
</div>

<section class="vendor-register">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <form name="register" method="post">
                    <div class="row">
                        <div class="gap-wrapper">
                            <?php if ($_smarty_tpl->tpl_vars['error']->value["code"] == 2) {?>
                                <div class="alert bg-primary" role="alert">
                                    <?php echo $_smarty_tpl->tpl_vars['error']->value["msg"];?>
<a href="<?php echo base_url("main");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value["code"] == 3) {?>
                                <div class="alert bg-primary" role="alert">
                                    <?php echo $_smarty_tpl->tpl_vars['error']->value["msg"];?>
<a href="<?php echo base_url("main");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                </div>
                            <?php }?>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Sorumlu Ad Soyad</label>
                                    <input type="text" name="name" value="<?php echo $_POST['name'];?>
" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">E-Posta Adresiniz</label>
                                    <input type="email" name="email" value="<?php echo $_POST['email'];?>
" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Mesaj</label>
                                    <textarea name="text" id="text" cols="30" rows="5" class="form-control" required><?php echo $_POST['message'];?>
</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-3">
                            <button type="submit" class="btn btn-red">MESAJ GÖNDER</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
