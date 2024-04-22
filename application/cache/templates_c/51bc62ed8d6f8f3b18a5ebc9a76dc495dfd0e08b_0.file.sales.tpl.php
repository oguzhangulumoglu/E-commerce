<?php
/* Smarty version 3.1.29, created on 2020-11-19 22:24:41
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/sales.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb6c6790258e9_60538817',
  'file_dependency' => 
  array (
    '51bc62ed8d6f8f3b18a5ebc9a76dc495dfd0e08b' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/sales.tpl',
      1 => 1492518462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb6c6790258e9_60538817 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.replace.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>Lastik Satıcıları</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Lastik Satıcıları</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <div class="col-md-12 row">
            <ul class="marca">
            <?php
$_from = $_smarty_tpl->tpl_vars['sales']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sale_0_saved_item = isset($_smarty_tpl->tpl_vars['sale']) ? $_smarty_tpl->tpl_vars['sale'] : false;
$_smarty_tpl->tpl_vars['sale'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['sale']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sale']->value) {
$_smarty_tpl->tpl_vars['sale']->_loop = true;
$__foreach_sale_0_saved_local_item = $_smarty_tpl->tpl_vars['sale'];
?>
                <li class="col-md-2">
                    <a href="<?php echo base_url("lastik-saticisi/");?>
/<?php echo $_smarty_tpl->tpl_vars['sale']->value->id;?>
/<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['sale']->value->name, 'UTF-8')," ","-");?>
">
                        <span class="name"><?php echo $_smarty_tpl->tpl_vars['sale']->value->name;?>
</span>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['sale']->value->image;?>
" alt="" class="img-responsive"/>
                    </a>
                </li>
            <?php
$_smarty_tpl->tpl_vars['sale'] = $__foreach_sale_0_saved_local_item;
}
if ($__foreach_sale_0_saved_item) {
$_smarty_tpl->tpl_vars['sale'] = $__foreach_sale_0_saved_item;
}
?>
            </ul>
        </div>
    </div>
</div>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
