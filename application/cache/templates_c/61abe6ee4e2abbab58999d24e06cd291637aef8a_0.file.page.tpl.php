<?php
/* Smarty version 3.1.29, created on 2020-11-19 15:56:50
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb66b921aaf90_06962442',
  'file_dependency' => 
  array (
    '61abe6ee4e2abbab58999d24e06cd291637aef8a' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/page.tpl',
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
function content_5fb66b921aaf90_06962442 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active"> Sayfalar</li>
        </ol>
    </div>
</div>
<section class="content white-bg">
    <div class="container">
        <p class="content-text">
            <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

        </p>
    </div>
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
