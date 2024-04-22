<?php
/* Smarty version 3.1.29, created on 2021-05-20 19:09:19
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/lcontact.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60a689af10b2c6_69389056',
  'file_dependency' => 
  array (
    'c6ccf57328389b7e4fe12ba450415f9fbd7419d2' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/lcontact.tpl',
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
function content_60a689af10b2c6_69389056 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>mesajlar</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Bayi Mesaj</li>
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

                    <div class="tab-pane active">
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Mesaj gönder</h3>
                        <div class="search-results">
                            <?php if ($_smarty_tpl->tpl_vars['message']->value["code"] == 2) {?>
                                <div class="alert bg-primary" role="alert">
                                    <?php echo $_smarty_tpl->tpl_vars['message']->value["msg"];?>
<a href="<?php echo base_url("main");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['message']->value["code"] == 1) {?>
                                <div class="alert bg-primary" role="alert">
                                    <?php echo $_smarty_tpl->tpl_vars['message']->value["msg"];?>
<a href="<?php echo base_url("main");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                </div>
                            <?php }?>

                            <form action="<?php echo base_url("main/lcontact");?>
" method="post">
                                <div class="gap-wrapper">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Sorumlu Ad Soyad</label>
                                            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">E-Posta Adresiniz</label>
                                            <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
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
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-red">MESAJ GÖNDER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
