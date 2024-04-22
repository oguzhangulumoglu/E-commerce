<?php
/* Smarty version 3.1.29, created on 2020-11-21 08:57:44
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/merchant_product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb8ac58b9bed1_42614193',
  'file_dependency' => 
  array (
    '0c74240a043626aa5294c1103ba7fad3ee99d684' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/merchant_product.tpl',
      1 => 1510558096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:merchant_sidebar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb8ac58b9bed1_42614193 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.capitalize.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>mağaza detayı</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li>Mağaza Detay</li>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['company']->value;?>
</li>
        </ol>
    </div>
</div>

<section class="content pb">
    <div class="container">
        <div class="row">

            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:merchant_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <?php if ($_smarty_tpl->tpl_vars['product']->value->status == "passive") {?>

                <div class="alert alert-danger col-sm-8 col-md-9">
                    <i class="fa fa-plus"></i> İlanınız onay sürecindedir.Editörlerimiz tarafından kurallar çerçevinde herhangi bir mahsur görünmediği takdirde onaylanacaktır! Sadece bu ilanı siz görürsünüz!
                </div>
            <?php }?>

            <div class="col-sm-8 col-md-9">
                <div class="wrapper">
                    <div class="vendor-header">
                        <h1><?php echo $_smarty_tpl->tpl_vars['company']->value;?>
</h1>
                        <span class="location"><?php echo smarty_modifier_capitalize(smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['id']->value,"merchant","state"),"state","state"));?>
, <?php echo smarty_modifier_capitalize(smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['id']->value,"merchant","city"),"city","city"));?>
</span>
                        <?php if (!$_smarty_tpl->tpl_vars['search']->value) {?>
                        <a href="<?php echo base_url("main/contact");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
" class="question border-dashed">Bu Mağaza Sizin Mi? Yönetmek İçin Tıklayınız.</a>
                        <?php }?>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-9">

                <div class="cart-list-page">

                    <div class="cart-list-title">
                        <div class="col-md-6">
                            <span>Ürün Detay</span>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url();?>
">Online Mağaza</a></li>
                                <li>Kategoriler</li>
                                <li><a href="<?php echo base_url("/bayi");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['productCategory']->value->uri;?>
"><?php echo $_smarty_tpl->tpl_vars['productCategory']->value->name;?>
</a></li>
                                <li class="active">
                                    <a href="<?php echo base_url("/main/urunler/");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value->uri;?>
">Ürün detay</a>
                                </li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12" style="padding: 20px 5px">
                        <div class="col-md-5 image">
                            <div class="col-md-12 first-image">
                                <img src="<?php echo base_url("assets/images/no_image.jpg");?>
" class="img-responsive" alt=""/>
                            </div>
                            <?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
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
                            <div class="col-md-3">
                                <a href="javascript:void(0)" data-uri="<?php echo base_url($_smarty_tpl->tpl_vars['image']->value->uri);?>
">
                                    <img src="<?php echo base_url($_smarty_tpl->tpl_vars['image']->value->uri);?>
" class="img-responsive" alt=""/>
                                </a>
                            </div>
                            <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
?>
                        </div>

                        <div class="col-md-7 content-detail">
                            <h2><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['product']->value->title);?>
</h2>
                            <div class="sub-title">
                                <span><?php echo $_smarty_tpl->tpl_vars['productCategory']->value->name;?>
</span>   /   Ürün Kodu: <?php echo $_smarty_tpl->tpl_vars['product']->value->productCode;?>

                            </div>
                            <div class="col-md-12 row">
                                <div class="cart-sub-body-list-price">
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value->knock_off == "no") {?>
                                        <span class="new-price">₺<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->price,2,".",'');?>
</span>
                                    <?php } else { ?>
                                        <span class="new-price">
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value->knock_off_type == "fiyat") {?>
                                                ₺<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->knock_off_price,2,".",'');?>

                                            <?php } else { ?>
                                                ₺<?php echo number_format(($_smarty_tpl->tpl_vars['product']->value->price-(($_smarty_tpl->tpl_vars['product']->value->price/100)*$_smarty_tpl->tpl_vars['product']->value->knock_off_price)),2,".",'');?>

                                            <?php }?>
                                        </span>
                                        <span class="old-price"><del>₺<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->price,2,".",'');?>
</del></span>
                                    <?php }?>
                                    <p><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['product']->value->short_property);?>
</p>
                                </div>

                                <div class="col-md-3 row hidden">
                                    <input type="number" value="1" class="form-control" disabled/>
                                </div>
                                <div class="col-md-9 hidden">
                                    <a class="btn btn-red" href="#">
                                        SEPETE EKLE
                                    </a>
                                    <a class="btn btn-red" href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a class="btn btn-red" href="#">
                                        <i class="fa fa-bell"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="exTab1">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a  href="#1a" data-toggle="tab">AÇIKLAMA</a>
                                </li>
                                <li>
                                    <a href="#2a" data-toggle="tab">TAKSİT SEÇENEKLERİ</a>
                                </li>
                                <li>
                                    <a href="#3a" data-toggle="tab">İADE & DEĞİŞİM</a>
                                </li>
                                <li>
                                    <a href="#4a" data-toggle="tab">TESLİMAT BİLGİLERİ</a>
                                </li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="1a">
                                    <p><?php echo smarty_modifier_capitalize(nl2br($_smarty_tpl->tpl_vars['product']->value->property));?>
</p>
                                </div>
                                <div class="tab-pane" id="2a">
                                    <p>Taksit Seçenekleri Eklenecek</p>
                                </div>
                                <div class="tab-pane" id="3a">
                                    <p>İade ve Değişim Eklenecek</p>
                                </div>
                                <div class="tab-pane" id="4a">
                                    <p>Teslimat Bilgileri Eklenecek</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
