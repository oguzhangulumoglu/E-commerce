<?php
/* Smarty version 3.1.29, created on 2020-11-24 15:32:01
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/profile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fbcfd413cc674_69251364',
  'file_dependency' => 
  array (
    '6394a91d53e35cabf67ff470a50cc882a4dda831' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/profile.tpl',
      1 => 1502536353,
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
function content_5fbcfd413cc674_69251364 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i><?php if ($_SESSION['info']['status'] != "users") {?>mağaza girişi<?php } else { ?>profil<?php }?></span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active"><?php if ($_SESSION['info']['status'] != "users") {?>Mağaza Profili<?php } else { ?>Profil<?php }?></li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1><?php if ($_SESSION['info']['status'] != "users") {?>Mağaza Paneli<?php } else { ?>Panel<?php }?></h1>
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
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Bilgileri Güncelle</h3>
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
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Yetkili Ad Soyad <span style="color: red">(*)</span></label>
                                            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control" placeholder="Yetkili Adı">
                                        </div>
                                    </div>
                                    <?php if ($_SESSION['info']['status'] != "users") {?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Web Sitesi</label>
                                            <input type="text" class="form-control" name="web" value="<?php echo $_smarty_tpl->tpl_vars['web']->value;?>
">
                                        </div>
                                    </div>
                                    <?php }?>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Adres <span style="color: red">(*)</span></label>
                                            <textarea name="adress" cols="30" rows="5" class="form-control"><?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sabit Telefon Numarası <span style="color: red">(*)</span></label>
                                            <input type="text" class="form-control" name="homephone" value="<?php echo $_smarty_tpl->tpl_vars['homephone']->value;?>
">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Cep Telefonu</label>
                                            <input type="text" class="form-control" name="cellphone" value="<?php echo $_smarty_tpl->tpl_vars['cellphone']->value;?>
">
                                        </div>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['status']->value != "online") {?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>İl</label>
                                            <select name="city2" id="city" class="form-control" data-id="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
">
                                                <option value="">Lütfen Seçiniz</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>İlçe</label>
                                            <select name="state2" id="state" class="form-control" data-id="<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
">
                                                <option value="">Lütfen Seçiniz</option>
                                            </select>
                                        </div>
                                    </div>
                                    <?php }?>
                                    <?php if ($_SESSION['info']['status'] != "users") {?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Vergi No</label>
                                            <input type="text" class="form-control" name="vergino" value="<?php echo $_smarty_tpl->tpl_vars['vergino']->value;?>
">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Logo Güncelle</label>
                                            <input type="file" class="form-control" name="file">
                                        </div>
                                    </div>
                                    <?php }?>
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

<div class="pop-up pop-up-successful">
    <i class="fa fa-check-circle-o" aria-hidden="true"></i>
    <span>Ürün başarıyla güncellendi.</span>
</div>

<div class="pop-up pop-up-unsuccessful">
    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
    <span>Ürün güncellemesi başarısız.<br>Lütfen kontrol ediniz.</span>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
