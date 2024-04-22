<?php
/* Smarty version 3.1.29, created on 2020-12-02 01:37:52
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fc6c5c073be18_69635012',
  'file_dependency' => 
  array (
    '6a2127e57e8464f0be04acb50caa40d52f4461df' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/main.tpl',
      1 => 1550136620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5fc6c5c073be18_69635012 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_perm')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_perm.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
    <?php if (smarty_modifier_get_perm($_SESSION['username'],"status") == "staff") {?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div><!--/.row-->

    <div class="row">

        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget ">
                <div class="row no-padding">
                    <a href="/admin/orders">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
                        </div>

                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large"><?php echo $_smarty_tpl->tpl_vars['orders']->value;?>
</div>
                            <div class="text-muted">Yeni Sipariş</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <a href="/admin/users">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large"><?php echo $_smarty_tpl->tpl_vars['users']->value;?>
</div>
                            <div class="text-muted">Kullanıcı</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <a href="/admin/merchant/2">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large"><?php echo $_smarty_tpl->tpl_vars['merchant']->value;?>
</div>
                            <div class="text-muted">Bayi</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-red panel-widget">
                <a href="/admin/message">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
                        <div class="text-muted">Mesaj</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-red panel-widget">
                <a href="<?php echo base_url("admin/merchant/1");?>
">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo $_smarty_tpl->tpl_vars['accepts']->value;?>
</div>
                        <div class="text-muted">
                            Pasif Üyelik
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-red panel-widget">
                <a href="<?php echo base_url("admin/message/10");?>
">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large"><?php echo $_smarty_tpl->tpl_vars['message_admin']->value;?>
</div>
                            <div class="text-muted">
                                Yönetici Mesaj
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-success panel-widget">
                <a href="<?php echo base_url("admin/e_ticaret/category/1");?>
">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left" style="border-right: 1px solid #ccc;">
                            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large text-center"><?php echo $_smarty_tpl->tpl_vars['e_ticaret_category']->value;?>
</div>
                            <div class="text-muted text-center">
                                Bekleyen Kategoriler
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-success panel-widget">
                <a href="<?php echo base_url("admin/e_ticaret/classfield/1");?>
">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left" style="border-right: 1px solid #ccc;">
                            <svg class="glyph stroked tag"><use xlink:href="#stroked-tag"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large text-center"><?php echo $_smarty_tpl->tpl_vars['e_ticaret_classfield']->value;?>
</div>
                            <div class="text-muted text-center">
                                Bekleyen İlanlar
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <?php }?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Yorumlar</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <a href="<?php echo base_url("admin/comments/merchant");?>
">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large text-center"><?php echo $_smarty_tpl->tpl_vars['merchant_comments']->value;?>
</div>
                            <div class="text-muted">Bayiye yorumlar</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <a href="<?php echo base_url("admin/comments/product");?>
">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large text-center"><?php echo $_smarty_tpl->tpl_vars['product_comments']->value;?>
</div>
                            <div class="text-muted">Ürüne yorumlar</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <a href="<?php echo base_url("admin/comments/marka");?>
">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large text-center"><?php echo $_smarty_tpl->tpl_vars['marca_comments']->value;?>
</div>
                            <div class="text-muted">Marka yorumlar</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <a href="<?php echo base_url("admin/comments/sales");?>
">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large text-center"><?php echo $_smarty_tpl->tpl_vars['sales_comments']->value;?>
</div>
                            <div class="text-muted">Satıcı yorumlar</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
