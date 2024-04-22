<?php
/* Smarty version 3.1.29, created on 2020-11-19 14:38:56
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/merchant.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb65950502585_90196437',
  'file_dependency' => 
  array (
    'f93ba07d2511187b219cd1ce1e6865d0380c980a' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/merchant.tpl',
      1 => 1521052846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb65950502585_90196437 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
if (!is_callable('smarty_modifier_cat_num')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.cat_num.php';
if (!is_callable('smarty_modifier_is')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.is.php';
if (!is_callable('smarty_modifier_get_data_num')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_num.php';
if (!is_callable('smarty_modifier_replace')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_comments')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.comments.php';
if (!is_callable('smarty_modifier_get_data_image')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_image.php';
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_get_max_amount')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_max_amount.php';
if (!is_callable('smarty_modifier_c_ago')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.c_ago.php';
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

<div class="Bayi-header">
    <div class="container">
        <div class="row">
            <div class="col-md-<?php if ($_smarty_tpl->tpl_vars['gallery']->value) {?>6<?php } else { ?>12<?php }?>">
                <div class="Detail">
                    <div class="row">
                        <div class="col-sm-6 col-md-<?php if ($_smarty_tpl->tpl_vars['gallery']->value) {?>12<?php } else { ?>6<?php }?>">
                            <div class="Main" <?php if (!$_smarty_tpl->tpl_vars['gallery']->value) {?>style="border: 0!important"<?php }?>>
                                <figure>
                                    <img src="<?php if ($_smarty_tpl->tpl_vars['logo']->value) {
echo base_url($_smarty_tpl->tpl_vars['logo']->value);
} else {
echo base_url("assets/images/no_image.jpg");
}?>" style="max-width: 170px; height: 170px">
                                    <figcaption>
                                        <i data-toggle="tooltip" title="Onaylanmış Hesap" class="fa fa-check"></i>
                                    </figcaption>
                                </figure>
                                <div class="right">
                                    <h1><?php echo $_smarty_tpl->tpl_vars['company']->value;?>

                                        <small><?php echo mb_strtoupper(smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['id']->value,"merchant","state"),"state","state"), 'UTF-8');?>
, <?php echo mb_strtoupper(smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['id']->value,"merchant","city"),"city","city"), 'UTF-8');?>
</small>
                                    </h1>
                                    <div class="rating">
                                        <div class="stars">
                                            <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['ratings']->value >= 1) {?>active<?php }?>"></i>
                                            <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['ratings']->value >= 2) {?>active<?php }?>"></i>
                                            <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['ratings']->value >= 3) {?>active<?php }?>"></i>
                                            <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['ratings']->value >= 4) {?>active<?php }?>"></i>
                                            <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['ratings']->value == 5) {?>active<?php }?>"></i>
                                            <span>(<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['ratings']->value);?>
)</span>
                                        </div>
                                        <a class="comments" href="#comments">
                                            <i class="fa fa-comment"></i>
                                            (<?php echo $_smarty_tpl->tpl_vars['commentNum']->value;?>
) Yorumları Oku
                                        </a>

                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
                                    <a href="<?php echo base_url("main/contact");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
" class="btn btn-red" style="float:left">
                                        <i class="fa fa-envelope-o"></i>
                                        MESAJ GÖNDER
                                    </a>
                                    <?php } else { ?>
                                     <a href="<?php echo base_url("main/contact");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
" class="btn btn-red">
                                         BU MAĞAZA SİZİN Mİ ?
                                     </a>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-<?php if ($_smarty_tpl->tpl_vars['gallery']->value) {?>12<?php } else { ?>6<?php }?>">
                            <div class="Address" <?php if (!$_smarty_tpl->tpl_vars['gallery']->value) {?>style="border: 0!important; padding: 18px 0;"<?php }?>>
                                <dl class="dl-horizontal">
                                    <dt <?php if (!$_smarty_tpl->tpl_vars['gallery']->value) {?>style="text-align: left"<?php }?>>Adres</dt>
                                    <dd><?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
</dd>
                                    <dt <?php if (!$_smarty_tpl->tpl_vars['gallery']->value) {?>style="text-align: left"<?php }?>>Sabit Telefon</dt>
                                    <dd><?php echo $_smarty_tpl->tpl_vars['homephone']->value;?>
</dd>
                                    <?php if ($_smarty_tpl->tpl_vars['cellphone']->value) {?><dt <?php if (!$_smarty_tpl->tpl_vars['gallery']->value) {?>style="text-align: left"<?php }?>>GSM Telefon</dt>
                                    <dd><?php if ($_smarty_tpl->tpl_vars['cellphone']->value) {
echo $_smarty_tpl->tpl_vars['cellphone']->value;
} else { ?>-<?php }?></dd><?php }?>
                                </dl>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-<?php if ($_smarty_tpl->tpl_vars['gallery']->value) {?>12<?php } else { ?>6<?php }?>">
                            <div class="Views" <?php if (!$_smarty_tpl->tpl_vars['gallery']->value) {?>style="border: 0!important"<?php }?>>
                                <i class="fa fa-eye"></i>
                                <span><?php echo $_smarty_tpl->tpl_vars['company']->value;?>
 bayimiz bu <br>zamana kadar
                                <strong><?php echo $_smarty_tpl->tpl_vars['hit']->value;?>
</strong>
                                    görüntüleme aldı.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['gallery']->value) {?>
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-top: 35px;">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php
$_from = $_smarty_tpl->tpl_vars['gallery']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_gallery_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_gallery']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_gallery'] : false;
$__foreach_gallery_0_saved_item = isset($_smarty_tpl->tpl_vars['gallerys']) ? $_smarty_tpl->tpl_vars['gallerys'] : false;
$__foreach_gallery_0_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['gallerys'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_gallery'] = new Smarty_Variable(array());
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$__foreach_gallery_0_first = true;
$_smarty_tpl->tpl_vars['gallerys']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['gallerys']->value) {
$_smarty_tpl->tpl_vars['gallerys']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['first'] = $__foreach_gallery_0_first;
$__foreach_gallery_0_first = false;
$__foreach_gallery_0_saved_local_item = $_smarty_tpl->tpl_vars['gallerys'];
?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['first'] : null)) {?>class="active"<?php }?>></li>
                        <?php
$_smarty_tpl->tpl_vars['gallerys'] = $__foreach_gallery_0_saved_local_item;
}
if ($__foreach_gallery_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_gallery'] = $__foreach_gallery_0_saved;
}
if ($__foreach_gallery_0_saved_item) {
$_smarty_tpl->tpl_vars['gallerys'] = $__foreach_gallery_0_saved_item;
}
if ($__foreach_gallery_0_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_gallery_0_saved_key;
}
?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php
$_from = $_smarty_tpl->tpl_vars['gallery']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_gallery_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_gallery']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_gallery'] : false;
$__foreach_gallery_1_saved_item = isset($_smarty_tpl->tpl_vars['gallerys']) ? $_smarty_tpl->tpl_vars['gallerys'] : false;
$_smarty_tpl->tpl_vars['gallerys'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_gallery'] = new Smarty_Variable(array());
$__foreach_gallery_1_first = true;
$_smarty_tpl->tpl_vars['gallerys']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['gallerys']->value) {
$_smarty_tpl->tpl_vars['gallerys']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['first'] = $__foreach_gallery_1_first;
$__foreach_gallery_1_first = false;
$__foreach_gallery_1_saved_local_item = $_smarty_tpl->tpl_vars['gallerys'];
?>
                        <div class="item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['first'] : null)) {?>active<?php }?>">
                            <img src="https://www.lastikkent.com.tr/cache/t.php?src=<?php echo base_url($_smarty_tpl->tpl_vars['gallerys']->value->name);?>
&h=600&w=800">
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['gallerys'] = $__foreach_gallery_1_saved_local_item;
}
if ($__foreach_gallery_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_gallery'] = $__foreach_gallery_1_saved;
}
if ($__foreach_gallery_1_saved_item) {
$_smarty_tpl->tpl_vars['gallerys'] = $__foreach_gallery_1_saved_item;
}
?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>

<section class="Bayi-detay">
<div class="container">
<div class="row">
    <div class="col-sm-4">
        <div class="Products-list">
            <div class="title">
                <i class="fa fa-shopping-cart"></i>
                MAĞAZANIN ÜRÜNLERİ
            </div>
            <ul class="nav">
                <li <?php if (!$_smarty_tpl->tpl_vars['product']->value->e_category) {?> class="active"<?php }?>>
                    <a href="<?php echo base_url("bayi");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/urunler/1">TÜMÜ <span class="badge">(<?php echo smarty_modifier_cat_num($_smarty_tpl->tpl_vars['categorys']->value->id,$_smarty_tpl->tpl_vars['id']->value,"all");?>
)</span></a>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['product']->value->e_category == "lastik") {?> class="active"<?php }?>>
                    <a href="<?php echo base_url("bayi");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/lastik/1">LASTİK <span class="badge">(<?php echo smarty_modifier_cat_num($_smarty_tpl->tpl_vars['categorys']->value->id,$_smarty_tpl->tpl_vars['id']->value,"lastik");?>
)</span></a>
                </li>
                <?php
$_from = $_smarty_tpl->tpl_vars['category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_categorys_2_saved_item = isset($_smarty_tpl->tpl_vars['categorys']) ? $_smarty_tpl->tpl_vars['categorys'] : false;
$_smarty_tpl->tpl_vars['categorys'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['categorys']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categorys']->value) {
$_smarty_tpl->tpl_vars['categorys']->_loop = true;
$__foreach_categorys_2_saved_local_item = $_smarty_tpl->tpl_vars['categorys'];
?>
                    <li <?php if ($_smarty_tpl->tpl_vars['product']->value->e_category == $_smarty_tpl->tpl_vars['categorys']->value->id) {?> class="active"<?php }?>>
                        <a href="<?php echo base_url("bayi");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categorys']->value->uri;?>
/1"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['categorys']->value->name, 'UTF-8');?>
 <span class="badge">(<?php echo smarty_modifier_cat_num($_smarty_tpl->tpl_vars['categorys']->value->id,$_smarty_tpl->tpl_vars['id']->value,"cat");?>
)</span></a>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['categorys'] = $__foreach_categorys_2_saved_local_item;
}
if ($__foreach_categorys_2_saved_item) {
$_smarty_tpl->tpl_vars['categorys'] = $__foreach_categorys_2_saved_item;
}
?>
            </ul>
        </div>
    </div>

    <div class="col-sm-8">
        <div class="Search" style="position: relative">
            <div class="title">
                <i class="fa fa-search"></i>
                MAĞAZADA LASTİK ARA
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['search']->value) {?>
                <div class="over" style="position: absolute;background: rgba(0, 0, 0, 0.4);z-index: 9998;width: 100%;height: 78%;"></div>
                <div class="overtext" style="position: absolute;z-index: 99999;background: #fff;padding: 10px 20px;top: 50%;left: 8%;border-radius: 10px;border: 1px solid #a29898;">
                    Bu mağaza lastikkent.com.tr onaylı üyesi olmadığı için, mağaza içi arama motoru çalışmamaktadır.
                </div>
            <?php }?>
            <div class="body">
                <?php if (!$_smarty_tpl->tpl_vars['search']->value) {?>
                <form class="row" action="#" method="post">
                <?php } else { ?>
                <form class="row" method="get" action="<?php echo base_url("bayide-ara");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
">
                <?php }?>
                    <div class="col-sm-6 form-group">
                        <label for="">Marka</label>
                        <select name="brand" class="form-control">
                            <option value="0">Tümü</option>
                            <?php
$_from = $_smarty_tpl->tpl_vars['select_brand']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_3_saved_item = isset($_smarty_tpl->tpl_vars['brand']) ? $_smarty_tpl->tpl_vars['brand'] : false;
$_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brand']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
$__foreach_foo2_3_saved_local_item = $_smarty_tpl->tpl_vars['brand'];
?>
                                <?php if (smarty_modifier_is($_smarty_tpl->tpl_vars['brand']->value->id,"brand",$_smarty_tpl->tpl_vars['merchantID']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value->name;?>
</option><?php }?>
                            <?php
$_smarty_tpl->tpl_vars['brand'] = $__foreach_foo2_3_saved_local_item;
}
if ($__foreach_foo2_3_saved_item) {
$_smarty_tpl->tpl_vars['brand'] = $__foreach_foo2_3_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Araç Tipi</label>
                        <select name="category" class="form-control">
                            <option value="0">Tümü</option>
                            <?php
$_from = $_smarty_tpl->tpl_vars['select_category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_4_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_foo2_4_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_foo2_4_saved_local_item;
}
if ($__foreach_foo2_4_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_foo2_4_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Mevsim</label>
                        <select name="season" class="form-control">
                            <option value="0">Tümü</option>
                            <?php
$_from = $_smarty_tpl->tpl_vars['select_season']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_5_saved_item = isset($_smarty_tpl->tpl_vars['season']) ? $_smarty_tpl->tpl_vars['season'] : false;
$_smarty_tpl->tpl_vars['season'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['season']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['season']->value) {
$_smarty_tpl->tpl_vars['season']->_loop = true;
$__foreach_foo2_5_saved_local_item = $_smarty_tpl->tpl_vars['season'];
?>
                                <?php if (smarty_modifier_is($_smarty_tpl->tpl_vars['season']->value->id,"season",$_smarty_tpl->tpl_vars['merchantID']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['season']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['season']->value->name;?>
</option><?php }?>
                            <?php
$_smarty_tpl->tpl_vars['season'] = $__foreach_foo2_5_saved_local_item;
}
if ($__foreach_foo2_5_saved_item) {
$_smarty_tpl->tpl_vars['season'] = $__foreach_foo2_5_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Desen</label>
                        <select name="patern" class="form-control" data-merchant="<?php echo $_smarty_tpl->tpl_vars['merchantID']->value;?>
">
                            <option value="0">Tümü</option>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Taban Genişliği</label>
                        <select name="tire_width" class="form-control">
                            <option value="0">Tümü</option>
                            <?php
$_from = $_smarty_tpl->tpl_vars['select_tire_width']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_6_saved_item = isset($_smarty_tpl->tpl_vars['tire_width']) ? $_smarty_tpl->tpl_vars['tire_width'] : false;
$_smarty_tpl->tpl_vars['tire_width'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tire_width']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tire_width']->value) {
$_smarty_tpl->tpl_vars['tire_width']->_loop = true;
$__foreach_foo2_6_saved_local_item = $_smarty_tpl->tpl_vars['tire_width'];
?>
                                <?php if (smarty_modifier_is($_smarty_tpl->tpl_vars['tire_width']->value->id,"tire_width",$_smarty_tpl->tpl_vars['merchantID']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['tire_width']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['tire_width']->value->name;?>
</option><?php }?>
                            <?php
$_smarty_tpl->tpl_vars['tire_width'] = $__foreach_foo2_6_saved_local_item;
}
if ($__foreach_foo2_6_saved_item) {
$_smarty_tpl->tpl_vars['tire_width'] = $__foreach_foo2_6_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Kesit Oranı</label>
                        <select name="tire_rate" class="form-control">
                            <option value="0">Tümü</option>
                            <?php
$_from = $_smarty_tpl->tpl_vars['select_tire_rate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_7_saved_item = isset($_smarty_tpl->tpl_vars['tire_rate']) ? $_smarty_tpl->tpl_vars['tire_rate'] : false;
$_smarty_tpl->tpl_vars['tire_rate'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tire_rate']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tire_rate']->value) {
$_smarty_tpl->tpl_vars['tire_rate']->_loop = true;
$__foreach_foo2_7_saved_local_item = $_smarty_tpl->tpl_vars['tire_rate'];
?>
                                <?php if (smarty_modifier_is($_smarty_tpl->tpl_vars['tire_rate']->value->id,"tire_rate",$_smarty_tpl->tpl_vars['merchantID']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['tire_rate']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['tire_rate']->value->name;?>
</option><?php }?>
                            <?php
$_smarty_tpl->tpl_vars['tire_rate'] = $__foreach_foo2_7_saved_local_item;
}
if ($__foreach_foo2_7_saved_item) {
$_smarty_tpl->tpl_vars['tire_rate'] = $__foreach_foo2_7_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Jant Çapı</label>
                        <select name="rim_diameter" class="form-control">
                            <option value="0">Tümü</option>
                            <?php
$_from = $_smarty_tpl->tpl_vars['select_rim_diameter']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_8_saved_item = isset($_smarty_tpl->tpl_vars['rim_diameter']) ? $_smarty_tpl->tpl_vars['rim_diameter'] : false;
$_smarty_tpl->tpl_vars['rim_diameter'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['rim_diameter']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rim_diameter']->value) {
$_smarty_tpl->tpl_vars['rim_diameter']->_loop = true;
$__foreach_foo2_8_saved_local_item = $_smarty_tpl->tpl_vars['rim_diameter'];
?>
                                <?php if (smarty_modifier_is($_smarty_tpl->tpl_vars['rim_diameter']->value->id,"rim_diameter",$_smarty_tpl->tpl_vars['merchantID']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['rim_diameter']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['rim_diameter']->value->name;?>
</option><?php }?>
                            <?php
$_smarty_tpl->tpl_vars['rim_diameter'] = $__foreach_foo2_8_saved_local_item;
}
if ($__foreach_foo2_8_saved_item) {
$_smarty_tpl->tpl_vars['rim_diameter'] = $__foreach_foo2_8_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Hız Endeksi</label>
                        <select name="speed_index" class="form-control">
                            <option value="0">Tümü</option>
                            <?php
$_from = $_smarty_tpl->tpl_vars['select_speed_index']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_9_saved_item = isset($_smarty_tpl->tpl_vars['speed_index']) ? $_smarty_tpl->tpl_vars['speed_index'] : false;
$_smarty_tpl->tpl_vars['speed_index'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['speed_index']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['speed_index']->value) {
$_smarty_tpl->tpl_vars['speed_index']->_loop = true;
$__foreach_foo2_9_saved_local_item = $_smarty_tpl->tpl_vars['speed_index'];
?>
                                <?php if (smarty_modifier_is($_smarty_tpl->tpl_vars['speed_index']->value->id,"speed_index",$_smarty_tpl->tpl_vars['merchantID']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['speed_index']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['speed_index']->value->name;?>
</option><?php }?>
                            <?php
$_smarty_tpl->tpl_vars['speed_index'] = $__foreach_foo2_9_saved_local_item;
}
if ($__foreach_foo2_9_saved_item) {
$_smarty_tpl->tpl_vars['speed_index'] = $__foreach_foo2_9_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-red btn-block">
                            <i class="fa fa-check"></i>
                            Hemen Bul
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- TABS -->
<div class="Tabs">
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab-1" data-toggle="tab">HİZMETLER</a>
        </li>
        <li>
            <a href="#tab-2" data-toggle="tab">LASTİK MARKALARI</a>
        </li>
        <li>
            <a href="#tab-3" data-toggle="tab">AKÜ MARKALARI</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="tab-1">
            <div class="row">
                <div class="col-sm-3">
                    <div class="feature">Lastik Değişimi <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_1 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_1_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_1 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Nitrojen Gaz Dolumu <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_2 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_2_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_2 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Rot Ayarı <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_3 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_3_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_3 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Sibop Değişimi <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_4 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_4_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_4 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Mobil Değişim <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_5 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_5_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_5 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Yağ Değişim <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_6 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_6_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_6 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Jant Satış <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_7 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_7_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_7 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Jant Düzeltme <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_8 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_8_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_8 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Jant Boyama <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_9 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_9_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_9 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Balata Değişimi <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_10 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_10_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_10 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Aksesuar <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_11 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_11_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_11 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Balans Ayarı <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_12 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_12_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_12 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">OTO Yıkama <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_13 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_13_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_13 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">OTO Kuaför <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_14 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_14_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_14 > 0) {?><i class="fa fa-check"></i><?php } else { ?><i class="fa fa-times"></i><?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-2">
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['brand']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_brands_10_saved_item = isset($_smarty_tpl->tpl_vars['brands']) ? $_smarty_tpl->tpl_vars['brands'] : false;
$_smarty_tpl->tpl_vars['brands'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brands']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brands']->value) {
$_smarty_tpl->tpl_vars['brands']->_loop = true;
$__foreach_brands_10_saved_local_item = $_smarty_tpl->tpl_vars['brands'];
?>
                    <?php if (smarty_modifier_get_data_num($_smarty_tpl->tpl_vars['id']->value,"merchant_detail","brand","data",$_smarty_tpl->tpl_vars['brands']->value->id) > 0) {?>
                        <li class="col-md-3">
                            <a href="<?php echo base_url("marka");?>
/<?php echo $_smarty_tpl->tpl_vars['brands']->value->id;?>
/<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['brands']->value->name, 'UTF-8')," ","-");?>
">
                                <img src="<?php echo base_url($_smarty_tpl->tpl_vars['brands']->value->image);?>
" class="img-responsive center-block">
                            </a>
                        </li>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_10_saved_local_item;
}
if ($__foreach_brands_10_saved_item) {
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_10_saved_item;
}
?>
            </ul>
            <div style="clear: both"></div>
        </div>
        <div class="tab-pane" id="tab-3">
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['brand_aku']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_brand_akus_11_saved_item = isset($_smarty_tpl->tpl_vars['brand_akus']) ? $_smarty_tpl->tpl_vars['brand_akus'] : false;
$_smarty_tpl->tpl_vars['brand_akus'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brand_akus']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brand_akus']->value) {
$_smarty_tpl->tpl_vars['brand_akus']->_loop = true;
$__foreach_brand_akus_11_saved_local_item = $_smarty_tpl->tpl_vars['brand_akus'];
?>
                    <?php if (smarty_modifier_get_data_num($_smarty_tpl->tpl_vars['id']->value,"merchant_detail","brand_aku","data",$_smarty_tpl->tpl_vars['brand_akus']->value->id) > 0) {?>
                        <li class="col-md-3">
                            <img src="<?php echo base_url($_smarty_tpl->tpl_vars['brand_akus']->value->image);?>
" class="img-responsive center-block">
                        </li>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['brand_akus'] = $__foreach_brand_akus_11_saved_local_item;
}
if ($__foreach_brand_akus_11_saved_item) {
$_smarty_tpl->tpl_vars['brand_akus'] = $__foreach_brand_akus_11_saved_item;
}
?>
            </ul>
            <div style="clear: both"></div>
        </div>
    </div>
</div>
<!-- #TABS -->


<!-- INFO BOXES -->
<div style="margin-bottom: 30px;" class="info-boxes">
    <div class="row">
        <!--box-->
        <div class="col-sm-4">
            <div class="box">
                <div class="icon"><i class="fa fa-car"></i></div>
                <div class="title"><strong>YÜZLERCE BAYİ</strong> Lastikkent’de size hizmet etmeyi bekleyen yüzlerce bayi var!</div>
            </div>
        </div><!--box-->

        <!--box-->
        <div class="col-sm-4">
            <div class="box">
                <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                <div class="title"><strong>DÜRÜST HİZMET</strong> Lastikkent yüzlerde bayi içinden size en uygun fiyat garantisini sunar.</div>
            </div>
        </div><!--box-->

        <!--box-->
        <div class="col-sm-4">
            <div class="box">
                <div class="icon"><i class="fa fa-lock"></i></div>
                <div class="title"><strong>GÜVENLİ</strong> Lastikkent aracılığı ile ürününüzü hızlı ve güvenli alabilirsiniz.</div>
            </div>
        </div><!--box-->
    </div>
</div>
<!-- #INFO BOXES -->
<?php if (count($_smarty_tpl->tpl_vars['populer_lastik']->value) > 0) {?>
<!--SLIDER-->
<div class="widget-title-secondary">
    MAĞAZANIN POPÜLER ÜRÜNLERİ
</div>
<div id="carousel-id2" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active">
            <div class="row">
                <?php
$_from = $_smarty_tpl->tpl_vars['populer_lastik']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_populer_12_saved_item = isset($_smarty_tpl->tpl_vars['populer']) ? $_smarty_tpl->tpl_vars['populer'] : false;
$_smarty_tpl->tpl_vars['populer'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['populer']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['populer']->value) {
$_smarty_tpl->tpl_vars['populer']->_loop = true;
$__foreach_populer_12_saved_local_item = $_smarty_tpl->tpl_vars['populer'];
?>
                    <div class="col-sm-4 col-md-3">
                        <a class="product-item" href="<?php echo base_url("/bayide-lastik/");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['populer']->value->uri;?>
" title="<?php echo $_smarty_tpl->tpl_vars['populer']->value->name;?>
">
                            <div class="product">
                                <div class="top">
                                    <span class="badge">POPÜLER</span>
                              <span class="stars">
                                <i class="fa fa-star <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['populer']->value->id,"product_stars") == 1 || smarty_modifier_comments($_smarty_tpl->tpl_vars['populer']->value->id,"product_stars") > 1) {?>active<?php }?>"></i>
                                <i class="fa fa-star <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['populer']->value->id,"product_stars") == 2 || smarty_modifier_comments($_smarty_tpl->tpl_vars['populer']->value->id,"product_stars") > 2) {?>active<?php }?>"></i>
                                <i class="fa fa-star <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['populer']->value->id,"product_stars") == 3 || smarty_modifier_comments($_smarty_tpl->tpl_vars['populer']->value->id,"product_stars") > 3) {?>active<?php }?>"></i>
                                <i class="fa fa-star <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['populer']->value->id,"product_stars") == 4 || smarty_modifier_comments($_smarty_tpl->tpl_vars['populer']->value->id,"product_stars") > 4) {?>active<?php }?>"></i>
                                <i class="fa fa-star <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['populer']->value->id,"product_stars") == 5) {?>active<?php }?>"></i>
                              </span>
                                </div>
                                <figure>
                                    <img src="<?php if (smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['populer']->value->id)) {
echo base_url(smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['populer']->value->id));
} else {
echo base_url("assets/images/no_image.jpg");
}?>" style="max-height: 188px">
                                </figure>
                            </div>
                            <div class="detail">
                                <div class="title">
                                    <small><?php echo mb_strtoupper(smarty_modifier_get_data($_smarty_tpl->tpl_vars['populer']->value->brand,"brand","name"), 'UTF-8');?>
</small>
                                    <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['populer']->value->name);?>

                                </div>
                                <div class="price">₺ <?php echo smarty_modifier_get_max_amount($_smarty_tpl->tpl_vars['populer']->value->id);?>
</div>
                                <div class="add">
                                    <i class="fa fa-eye"></i>
                                    DETAYLI İNCELE
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['populer'] = $__foreach_populer_12_saved_local_item;
}
if ($__foreach_populer_12_saved_item) {
$_smarty_tpl->tpl_vars['populer'] = $__foreach_populer_12_saved_item;
}
?>
            </div>
        </div>
    </div>
</div>
<!--#SLIDER-->
<?php }?>

<!-- COMMENTS -->
<div class="Bayi-comments" id="comments">
    <div class="title">
        <figure>
            <img src="<?php if ($_smarty_tpl->tpl_vars['logo']->value) {
echo base_url($_smarty_tpl->tpl_vars['logo']->value);
} else {
echo base_url("assets/images/no_image.jpg");
}?>" style="width: 140px; height: 70px">
        </figure>
        <div class="rating">
            <div class="company"><?php echo $_smarty_tpl->tpl_vars['company']->value;?>
</div>
            <span>
              <i class="fa fa-heart"></i>
              (<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['ratings']->value);?>
) - <?php echo $_smarty_tpl->tpl_vars['commentNum']->value;?>
 Değerlendirme
            </span>
        </div>
        <div class="stats">
            <strong>
                <i class="fa fa-comment"></i>
                <?php echo $_smarty_tpl->tpl_vars['company']->value;?>
 hakkında <?php echo $_smarty_tpl->tpl_vars['commentNum']->value;?>
 adet yorum var
            </strong>
            <span>Puanlama kullanıcı deneyimleri tarafından verilen bilgiler doğrultusunda oluşturulmaktadır.</span>
        </div>
    </div>
    <div class="body">
        <p class="lead">Mağaza güvenilir mi, siparişleri nasıl ulaştırıyor? Mağaza hakkında bilgi almak, alışveriş tecrübelerinizi paylaşmak ve aynı zamanda başka alışverişçilerin tecrübelerinden yararlanmak için yorum yapabilir veya yorumları okuyabilirsiniz.</p>
        <form name="commentss" method="post" action="#">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="col-md-6">
                        <input type="text" <?php if ($_smarty_tpl->tpl_vars['email']->value == $_SESSION['email']) {?> value="<?php echo $_smarty_tpl->tpl_vars['company']->value;?>
" disabled="disabled" name=""<?php } else { ?> name="name" <?php }?> class="form-control required" placeholder="Adınız Soyadınız" required style="border-radius: 5px; margin-bottom: 10px;">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="subject" class="form-control" placeholder="Yorum Başlığı" required style="border-radius: 5px;margin-bottom: 10px;">
                    </div>
                    <div class="col-md-12">
                        <textarea name="text" id="" rows="2" class="form-control" placeholder="Yorumunuz" required></textarea>
                    </div>
                    <input type="hidden" name="type" value="merchant"/>
                    <input type="hidden" name="rating" value="0"/>
                    <input type="hidden" name="merchantID" value="<?php echo $_smarty_tpl->tpl_vars['merchantID']->value;?>
"/>
                    <?php if ($_smarty_tpl->tpl_vars['email']->value == $_SESSION['email']) {?>
                        <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['company']->value;?>
"/>
                        <input type="hidden" name="status" value="1"/>
                    <?php }?>
                </div>
                <div class="col-md-4 col-lg-3">
                    <?php if ($_smarty_tpl->tpl_vars['email']->value != $_SESSION['email']) {?>
                    <div class="rating-comment">
                        <span>YORUMUNU OYLA</span>
                        <div class="stars">
                            <ul class="rating">
                                <li><i class="fa fa-star" data-value="1" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" data-value="2" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" data-value="3" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" data-value="4" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" data-value="5" aria-hidden="true"></i></li>
                                <li><strong class="note" style="font-weight: normal">(<span>0</span>)</strong></li>
                            </ul>
                        </div>
                    </div>
                    <?php }?>
                    <a href="javascript:void(0)" class="btn btn-red" id="postComment">
                        <i class="fa fa-comment-o"></i>
                        GÖNDER
                    </a>
                </div>
            </div>
        </form>
        <?php if ($_smarty_tpl->tpl_vars['commentNum']->value > 0) {?>
        <div class="Comment-list" id="comments_short">
            <?php
$_from = $_smarty_tpl->tpl_vars['comment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_13_saved_item = isset($_smarty_tpl->tpl_vars['comments']) ? $_smarty_tpl->tpl_vars['comments'] : false;
$_smarty_tpl->tpl_vars['comments'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comments']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comments']->value) {
$_smarty_tpl->tpl_vars['comments']->_loop = true;
$__foreach_foo2_13_saved_local_item = $_smarty_tpl->tpl_vars['comments'];
?>
                <?php if ($_smarty_tpl->tpl_vars['company']->value == smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name)) {?>
                    <div class="comment reply hidden">
                        <div class="title">
                            <div class="left">
                                <strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['comments']->value->name, 'UTF-8');?>
</strong>
                                <time><?php echo smarty_modifier_c_ago($_smarty_tpl->tpl_vars['comments']->value->create_time);?>
</time>
                                <div class="stars">
                                    <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating >= 1) {?>active<?php }?>"></i>
                                    <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating >= 2) {?>active<?php }?>"></i>
                                    <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating >= 3) {?>active<?php }?>"></i>
                                    <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating >= 4) {?>active<?php }?>"></i>
                                    <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating == 5) {?>active<?php }?>"></i>
                                    <span>(<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['comments']->value->rating);?>
)</span>
                                </div>
                            </div>
                            <div class="right">
                                <strong>Bu yorumu yararlı buldunuz mu?</strong>
                                <a href="javascript:void(0)" class="unlike" onclick="unlike(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                    <i class="fa fa-angle-down"></i>
                                    <strong id="comment-unlike-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
" style="font-weight: normal">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->unlike;?>
 )</strong>
                                </a>
                                <a href="javascript:void(0)" class="like" onclick="like(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                    <i class="fa fa-angle-up"></i>
                                    <strong id="comment-like-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
" style="font-weight: normal">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->like;?>
 )</strong>
                                </a>
                            </div>
                        </div>
                        <p><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->text);?>
</p>
                    </div>
                <?php } else { ?>
                    <div class="comment hidden">
                        <div class="title">
                            <div class="left">
                                <strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['comments']->value->name, 'UTF-8');?>
</strong>
                                <time><?php echo smarty_modifier_c_ago($_smarty_tpl->tpl_vars['comments']->value->create_time);?>
</time>
                                <div class="stars">
                                    <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating >= 1) {?>active<?php }?>"></i>
                                    <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating >= 2) {?>active<?php }?>"></i>
                                    <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating >= 3) {?>active<?php }?>"></i>
                                    <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating >= 4) {?>active<?php }?>"></i>
                                    <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating == 5) {?>active<?php }?>"></i>
                                    <span>(<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['comments']->value->rating);?>
)</span>
                                </div>
                            </div>
                            <div class="right">
                                <strong>Bu yorumu yararlı buldunuz mu?</strong>
                                <a href="javascript:void(0)" class="unlike" onclick="unlike(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                    <i class="fa fa-angle-down"></i>
                                    <strong id="comment-unlike-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
" style="font-weight: normal">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->unlike;?>
 )</strong>
                                </a>
                                <a href="javascript:void(0)" class="like" onclick="like(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                    <i class="fa fa-angle-up"></i>
                                    <strong id="comment-like-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
" style="font-weight: normal">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->like;?>
 )</strong>
                                </a>
                            </div>
                        </div>
                        <p><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->text);?>
</p>
                    </div>
                <?php }?>

            <?php
$_smarty_tpl->tpl_vars['comments'] = $__foreach_foo2_13_saved_local_item;
}
if ($__foreach_foo2_13_saved_item) {
$_smarty_tpl->tpl_vars['comments'] = $__foreach_foo2_13_saved_item;
}
?>

        </div>
        <a href="javascript:void(0)" id="more_comment" class="load-more">DAHA FAZLA YORUM GÖSTER
            <i class="fa fa-angle-down"></i>
        </a>
        <?php }?>
    </div>
</div>
<!-- #COMMENTS -->
</div>
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
