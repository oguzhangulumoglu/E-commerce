<?php
/* Smarty version 3.1.29, created on 2021-05-20 19:08:23
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/gallery.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60a68977760041_94000940',
  'file_dependency' => 
  array (
    '0e7d248a39694b5ece70411dc2cbe9e4d0db780d' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/gallery.tpl',
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
function content_60a68977760041_94000940 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>fotoğraflar</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Galeri</li>
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
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Fotoğrafları Güncelle</h3>
                        <div class="wrapper">
                            <div class="row">
                                <?php if ($_smarty_tpl->tpl_vars['error']->value["code"] == 2) {?>
                                    <div class="alert bg-primary" role="alert">
                                        <?php echo $_smarty_tpl->tpl_vars['error']->value["msg"];?>
<a href="<?php echo base_url("main/profile");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                <?php }?>
                                <form name="profile" method="post" enctype="multipart/form-data">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Fotoğraf</label>
                                            <input type="file" class="form-control" name="file">
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-red">EKLE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane active" id="info-update">
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Fotoğraflar</h3>
                        <div class="wrapper">
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->tpl_vars['gallery']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_0_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_0_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a class="thumbnail" title="Resmi Sil" href="#" data-href="<?php echo base_url("main/gallery_delete");?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value->id;?>
" data-toggle="modal" data-target="#confirm-delete">
                                            <img class="img-responsive" src="<?php echo base_url($_smarty_tpl->tpl_vars['image']->value->name);?>
" alt="">
                                        </a>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['image']->_loop) {
?>
                                    <div class="col-md-12">
                                        <span>Üzgünüm, herhangi bir galleriniz bulunmamaktadır.</span>
                                    </div>
                                <?php
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="border: 1px solid #ddd;border-radius: 10px; padding: 10px;">
        <div class="modal-content" style="background: #f4f4f4;border: 1px solid #ddd;padding: 10px;">
            <div class="modal-header" style="padding: 10px;border-bottom: 3px solid #d9534f;font-size: 18px;">İşlem Yönetimi</div>
            <div class="modal-body">
               Silme işlemini onaylıyor musunuz ?
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger btn-ok">Evet</a>
                <a href="#" data-dismiss="modal" class="btn secondary">Hayır</a>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
