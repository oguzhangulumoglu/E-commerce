<?php
/* Smarty version 3.1.29, created on 2020-12-14 23:16:52
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/patern_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fd7c83480f2b3_25031269',
  'file_dependency' => 
  array (
    '1415d80ffa0a57557d5259a8babdd5553ac398ee' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/patern_add.tpl',
      1 => 1518798887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5fd7c83480f2b3_25031269 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="<?php echo base_url("admin/patern");?>
"> Desen</a></li>
                <li class="active">Ekle / Düzenle</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Desen</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Ekle / Düzenle</div>
                    <?php if ($_smarty_tpl->tpl_vars['errorCode']->value == 2) {?>
                        <div class="alert bg-primary" role="alert">
                            <svg class="glyph stroked empty-message"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-empty-message"></use></svg> <?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>
<a href="<?php echo base_url("admin/add/model");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                    <?php }?>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="brand" id="" class="form-control">
                                        <option value="0">Seçiniz</option>
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
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['brands']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value->brand == $_smarty_tpl->tpl_vars['brands']->value->id) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['brands']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_0_saved_local_item;
}
if ($__foreach_brands_0_saved_item) {
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_0_saved_item;
}
?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Desen name</label>
                                    <input class="form-control" type="text" name="paternName" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->paternName) {
echo $_smarty_tpl->tpl_vars['data']->value->paternName;
}?>" placeholder=" Leon">
                                </div>
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
