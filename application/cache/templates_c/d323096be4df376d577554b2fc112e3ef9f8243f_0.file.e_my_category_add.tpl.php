<?php
/* Smarty version 3.1.29, created on 2022-01-17 09:08:26
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/e_my_category_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_61e507dab00193_20248911',
  'file_dependency' => 
  array (
    'd323096be4df376d577554b2fc112e3ef9f8243f' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/e_my_category_add.tpl',
      1 => 1496054539,
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
function content_61e507dab00193_20248911 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>E-ticaret mağazam</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Mağaza Kategori</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1>Mağaza Kategori</h1>
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
                        <h3> <i class="fa fa-circle" aria-hidden="true"></i> Kategori oluştur</h3>
                        <div class="wrapper">
                            <div class="row">
                                <form name="profile" method="post">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Kategori Adı <span style="color: red">(*)</span></label>
                                            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
" class="form-control" placeholder="Kategori Adını Giriniz" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-red">UYGULA</button>
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


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
