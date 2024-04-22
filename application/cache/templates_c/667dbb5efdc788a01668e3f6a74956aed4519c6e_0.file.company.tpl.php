<?php
/* Smarty version 3.1.29, created on 2020-11-24 15:32:01
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/company.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fbcfd41402331_21484074',
  'file_dependency' => 
  array (
    '667dbb5efdc788a01668e3f6a74956aed4519c6e' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/company.tpl',
      1 => 1492518461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbcfd41402331_21484074 ($_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-body">
        <figure>
            <img src="<?php if ($_smarty_tpl->tpl_vars['logo']->value) {
echo base_url($_smarty_tpl->tpl_vars['logo']->value);
} else {
echo base_url("assets/img/bayilogo1.png");
}?>" alt="" class="img-responsive center-block img-circle">
            <figcaption>
                <h3>
                    <a href="<?php echo base_url("genel/bayi/");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['company']->value;?>
</a>
                </h3>
                <span><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span>
            </figcaption>
        </figure>
    </div>
</div><?php }
}
