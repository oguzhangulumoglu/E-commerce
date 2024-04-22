<?php
/* Smarty version 3.1.29, created on 2021-05-20 19:08:17
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/message.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60a68971a44e94_59923378',
  'file_dependency' => 
  array (
    '91218f757ae21be7f3ddcf5c3e42435ace17790d' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/message.tpl',
      1 => 1492518462,
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
function content_60a68971a44e94_59923378 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>mesajlarım</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Mesaj</li>
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
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Gelen Mesajlarım</h3>
                        <div class="search-results">
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->tpl_vars['message']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_0_saved_item = isset($_smarty_tpl->tpl_vars['msg']) ? $_smarty_tpl->tpl_vars['msg'] : false;
$_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['msg']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
$__foreach_foo_0_saved_local_item = $_smarty_tpl->tpl_vars['msg'];
?>
                                    <div class="col-md-12">
                                        <div class="white-bg">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <h4><?php echo $_smarty_tpl->tpl_vars['msg']->value->name;?>
</h4>
                                                    <ul>
                                                        <li>
                                                            <span>Zaman: </span> <?php echo $_smarty_tpl->tpl_vars['msg']->value->create_time;?>

                                                        </li>
                                                        <li>
                                                            <span>Email: </span> <?php echo $_smarty_tpl->tpl_vars['msg']->value->email;?>

                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>Mesaj</span> <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        <span class="red">İşlem</span>
                                                        <span style="display: block">
                                                            <a href="<?php echo base_url("main/message_delete/");?>
/<?php echo $_smarty_tpl->tpl_vars['msg']->value->id;?>
">
                                                                <i class="glyphicon glyphicon-remove" style="font-size: 32px;color: #d23a3a;"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
$_smarty_tpl->tpl_vars['msg'] = $__foreach_foo_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['msg']->_loop) {
?>
                                    <div class="col-md-12">
                                        <div class="white-bg">
                                            <div class="row">
                                                <span>Üzgünüm, herhangi bir mesajınız bulunmamaktadır!</span>
                                            </div>
                                        </div>
                                    </div>
                                <?php
}
if ($__foreach_foo_0_saved_item) {
$_smarty_tpl->tpl_vars['msg'] = $__foreach_foo_0_saved_item;
}
?>
                            </div>
                            <ul class="pagination">
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <li<?php if ($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['complete']->value) {?> class="active"<?php }?>><a href="<?php echo base_url("main/product_update/");?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
                                <?php }
}
?>

                            </ul>
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
