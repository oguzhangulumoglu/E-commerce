<?php
/* Smarty version 3.1.29, created on 2021-05-20 19:08:28
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/services.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60a6897c690442_02040536',
  'file_dependency' => 
  array (
    'ed754b9f669d0d56db4264a427161b5c74e80cb9' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/services.tpl',
      1 => 1521269951,
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
function content_60a6897c690442_02040536 ($_smarty_tpl) {
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
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Servis Güncelleme</h3>
                        <div class="wrapper">
                            <div class="row">
                                <?php if ($_smarty_tpl->tpl_vars['error']->value["code"] == 2) {?>
                                    <div class="alert bg-primary" role="alert">
                                        <?php echo $_smarty_tpl->tpl_vars['error']->value["msg"];?>
<a href="<?php echo base_url("main/services");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                <?php }?>
                                <form name="services" method="post">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-md-12">Satılan Lastik Markaları</label>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['brand']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_brands_0_saved_item = isset($_smarty_tpl->tpl_vars['brands']) ? $_smarty_tpl->tpl_vars['brands'] : false;
$_smarty_tpl->tpl_vars['brands'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brands']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brands']->value) {
$_smarty_tpl->tpl_vars['brands']->_loop = true;
$__foreach_brands_0_saved_local_item = $_smarty_tpl->tpl_vars['brands'];
?>
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="brand[]" value="<?php echo $_smarty_tpl->tpl_vars['brands']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['brands']->value['select']) {?>checked="checked" <?php }?> class="form-control">
                                            </div>
                                            <div class="col-md-10" style="padding: 20px 0 14px;background-color: #fff">
                                                <?php echo $_smarty_tpl->tpl_vars['brands']->value['name'];?>

                                            </div>
                                            <?php
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_0_saved_local_item;
}
if ($__foreach_brands_0_saved_item) {
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_0_saved_item;
}
?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-md-12">Satılan Akü Markaları</label>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['brand_aku']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_brand_akus_1_saved_item = isset($_smarty_tpl->tpl_vars['brand_akus']) ? $_smarty_tpl->tpl_vars['brand_akus'] : false;
$_smarty_tpl->tpl_vars['brand_akus'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brand_akus']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brand_akus']->value) {
$_smarty_tpl->tpl_vars['brand_akus']->_loop = true;
$__foreach_brand_akus_1_saved_local_item = $_smarty_tpl->tpl_vars['brand_akus'];
?>
                                                <div class="col-md-2" style="background-color: #fff">
                                                    <input type="checkbox" name="brand_aku[]" value="<?php echo $_smarty_tpl->tpl_vars['brand_akus']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['brand_akus']->value['select']) {?>checked="checked" <?php }?> class="form-control">
                                                </div>
                                                <div class="col-md-10" style="padding: 20px 0 14px;background-color: #fff">
                                                    <?php echo $_smarty_tpl->tpl_vars['brand_akus']->value['name'];?>

                                                </div>
                                            <?php
$_smarty_tpl->tpl_vars['brand_akus'] = $__foreach_brand_akus_1_saved_local_item;
}
if ($__foreach_brand_akus_1_saved_item) {
$_smarty_tpl->tpl_vars['brand_akus'] = $__foreach_brand_akus_1_saved_item;
}
?>
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

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
