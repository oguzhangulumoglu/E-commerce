<?php
/* Smarty version 3.1.29, created on 2020-11-19 22:24:49
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/marka.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb6c68122dd01_01475943',
  'file_dependency' => 
  array (
    'e81ae4e56b4c418033c7c236972f093296838951' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/marka.tpl',
      1 => 1506414852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb6c68122dd01_01475943 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_commentstar')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.commentstar.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>Lastik Markaları</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Lastik Markaları</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <div class="col-md-12 row">
            <ul class="marca">
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
                <li class="col-md-2">
                    <a href="<?php echo base_url("marka/");?>
/<?php echo $_smarty_tpl->tpl_vars['brands']->value->id;?>
/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['brands']->value->name, 'UTF-8');?>
-lastikleri" style="display: block; max-height: 100px; overflow:hidden">
                        <span class="name"><?php echo $_smarty_tpl->tpl_vars['brands']->value->name;?>
 <span style="font-size: 12px; color: lightgray">(<?php echo smarty_modifier_commentstar($_smarty_tpl->tpl_vars['brands']->value->id);?>
/5)</span></span>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['brands']->value->image;?>
" alt="" class="img-responsive" style="display: inline-block; max-height: 60px"/>
                    </a>
                </li>
            <?php
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_0_saved_local_item;
}
if ($__foreach_brands_0_saved_item) {
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_0_saved_item;
}
?>
            </ul>
        </div>
    </div>
</div>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
