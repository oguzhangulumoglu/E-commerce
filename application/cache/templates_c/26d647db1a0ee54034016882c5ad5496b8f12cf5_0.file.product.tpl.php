<?php
/* Smarty version 3.1.29, created on 2020-11-19 14:28:19
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb656d3d914f7_63022082',
  'file_dependency' => 
  array (
    '26d647db1a0ee54034016882c5ad5496b8f12cf5' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/product.tpl',
      1 => 1523697961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb656d3d914f7_63022082 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_comments')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.comments.php';
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
if (!is_callable('smarty_modifier_urunyili')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.urunyili.php';
if (!is_callable('smarty_modifier_get_data_image')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_image.php';
if (!is_callable('smarty_modifier_get_max_amount')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_max_amount.php';
if (!is_callable('smarty_modifier_c_ago')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.c_ago.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
        <span>
          <i class="fa fa-fw fa-circle-o"></i>
          lastik
        </span>
        </div>
        <ol class="breadcrumb pull-right">
            <li>
                <a href="<?php echo base_url();?>
">Anasayfa</a>
            </li>
            <li>
                <a href="<?php echo base_url();?>
">Ürün</a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['page']->value == "main") {?>
            <li class="active"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
</li>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "fiyatlar") {?>
            <li>
                <a href="<?php echo base_url("genel/lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
</a>
            </li>
            <li class="active">Fiyatlar</li>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "yorumlar") {?>
            <li>
                <a href="<?php echo base_url("genel/lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
</a>
            </li>
            <li class="active">Yorumlar</li>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "etiket") {?>
            <li>
                <a href="<?php echo base_url("genel/lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
</a>
            </li>
            <li class="active">Avrupa Etiketi</li>
            <?php }?>
        </ol>
    </div>
</div>

<section class="product-detail">
<div class="container">
<?php if ($_smarty_tpl->tpl_vars['page']->value == "main") {?>
<div class="row mb-30">
    <div class="col-sm-6 col-md-5">
        <div id="carousel-id2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php
$_from = $_smarty_tpl->tpl_vars['select_img']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_0_saved_item = isset($_smarty_tpl->tpl_vars['img']) ? $_smarty_tpl->tpl_vars['img'] : false;
$__foreach_foo_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['img'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array());
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$__foreach_foo_0_first = true;
$_smarty_tpl->tpl_vars['img']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] = $__foreach_foo_0_first;
$__foreach_foo_0_first = false;
$__foreach_foo_0_saved_local_item = $_smarty_tpl->tpl_vars['img'];
?>
                <div class="item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] : null)) {?>active<?php }?>">
                    <img src="<?php echo base_url($_smarty_tpl->tpl_vars['img']->value->image);?>
" class="img-responsive center-block">
                </div>
            <?php
$_smarty_tpl->tpl_vars['img'] = $__foreach_foo_0_saved_local_item;
}
if ($__foreach_foo_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = $__foreach_foo_0_saved;
}
if ($__foreach_foo_0_saved_item) {
$_smarty_tpl->tpl_vars['img'] = $__foreach_foo_0_saved_item;
}
if ($__foreach_foo_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_foo_0_saved_key;
}
?>
            </div>
        </div>
        <div class="slider-controls">
            <a class="left carousel-control" href="#carousel-id2" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <ol class="carousel-indicators">
            <?php
$_from = $_smarty_tpl->tpl_vars['select_img']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_1_saved_item = isset($_smarty_tpl->tpl_vars['img']) ? $_smarty_tpl->tpl_vars['img'] : false;
$__foreach_foo_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['img'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array());
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$__foreach_foo_1_first = true;
$_smarty_tpl->tpl_vars['img']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] = $__foreach_foo_1_first;
$__foreach_foo_1_first = false;
$__foreach_foo_1_saved_local_item = $_smarty_tpl->tpl_vars['img'];
?>
                <li data-target="#carousel-id2" id="<?php echo $_smarty_tpl->tpl_vars['img']->value->id;?>
" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] : null)) {?> class="active"<?php }?>>
                    <img src="<?php echo base_url($_smarty_tpl->tpl_vars['img']->value->image);?>
" alt="" class="img-responsive">
                </li>
            <?php
$_smarty_tpl->tpl_vars['img'] = $__foreach_foo_1_saved_local_item;
}
if ($__foreach_foo_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = $__foreach_foo_1_saved;
}
if ($__foreach_foo_1_saved_item) {
$_smarty_tpl->tpl_vars['img'] = $__foreach_foo_1_saved_item;
}
if ($__foreach_foo_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_foo_1_saved_key;
}
?>
            </ol>
            <a class="right carousel-control" href="#carousel-id2" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>

        <div class="product-quality">
            <div class="item">
                <span>Güvenlik</span>
                <div class="rating">
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['guvenlik']->value < 1) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['guvenlik']->value > 1) {?>fa-star<?php }?>"></i>
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['guvenlik']->value < 2) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['guvenlik']->value > 2) {?>fa-star<?php }?>"></i>
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['guvenlik']->value < 3) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['guvenlik']->value > 3) {?>fa-star<?php }?>"></i>
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['guvenlik']->value < 4) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['guvenlik']->value > 4) {?>fa-star<?php }?>"></i>
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['guvenlik']->value < 5) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['guvenlik']->value > 5) {?>fa-star<?php }?>"></i>
                </div>
            </div>
            <div class="item">
                <span>Tasarruf</span>
                <div class="rating">
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['tasarruf']->value < 1) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['tasarruf']->value > 1) {?>fa-star<?php }?>"></i>
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['tasarruf']->value < 2) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['tasarruf']->value > 2) {?>fa-star<?php }?>"></i>
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['tasarruf']->value < 3) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['tasarruf']->value > 3) {?>fa-star<?php }?>"></i>
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['tasarruf']->value < 4) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['tasarruf']->value > 4) {?>fa-star<?php }?>"></i>
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['tasarruf']->value < 5) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['tasarruf']->value > 5) {?>fa-star<?php }?>"></i>
                </div>
            </div>
            <div class="item">
                <span>Konfor</span>
                <div class="rating">
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['konfor']->value < 1) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['konfor']->value > 1) {?>fa-star<?php }?>"></i>
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['konfor']->value < 2) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['konfor']->value > 2) {?>fa-star<?php }?>"></i>
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['konfor']->value < 3) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['konfor']->value > 3) {?>fa-star<?php }?>"></i>
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['konfor']->value < 4) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['konfor']->value > 4) {?>fa-star<?php }?>"></i>
                    <i class="fa <?php if ($_smarty_tpl->tpl_vars['konfor']->value < 5) {?>fa-star-o<?php } elseif ($_smarty_tpl->tpl_vars['konfor']->value > 5) {?>fa-star<?php }?>"></i>
                </div>
            </div>
        </div>
        <div class="ads" style="width: 468px; height: 60px;margin: 10px 0%;border: 1px solid #ccc;background: #EFEFEE;line-height: 60px;text-align: center;font-size: 22px;">
            Reklam Alanı 468x60
        </div>
    </div>
    <div class="col-sm-6 col-md-7">
        <div class="product-detail-header">
            <div class="product-name">
                <div class="left">
                    <h1><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
</h1>
                    <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") == 1 || smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") > 1) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                    <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") == 2 || smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") > 2) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                    <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") == 3 || smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") > 3) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                    <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") == 4 || smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") > 4) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                    <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") == 5) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                    <span class="rating">(<?php echo smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars");?>
.00)</span>
                </div>
                <div class="right">
                    <img src="<?php echo base_url(smarty_modifier_get_data($_smarty_tpl->tpl_vars['brand']->value,"brand","image"));?>
" style="width: 143px;"/>
                </div>
            </div>
            <div class="product-price">
                <div class="left">
                    <div class="price">
                        <i class="fa fa-try"></i>
                        <?php echo number_format($_smarty_tpl->tpl_vars['cheap']->value["price"]["amount"],2,".",'');?>

                    </div>
                    <div class="highlight">
                        <i class="fa fa-star"></i>
                        En ucuz bayinin fiyatıdır.
                    </div>
                </div>
                <div class="right">
                    <a href="<?php echo base_url("/genel/lastik/");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/yorumlar">
                        <i class="fa fa-comments-o"></i>
                        Ürün Yorumları
                        <span>(<?php echo $_smarty_tpl->tpl_vars['comments']->value["number"];?>
)</span>
                    </a>
                </div>
            </div>
            <div class="col-md-12 row">
                <a href="<?php echo base_url("genel/lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/fiyatlar" style="width: 105%;" class="btn btn-red">Diğer Bayilerin Fiyatlarını Gör</a>
            </div>
        </div>
        <div class="seller">
            <div class="avatar">
                <img src="<?php if (smarty_modifier_get_data($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant","logo")) {
echo base_url(smarty_modifier_get_data($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant","logo"));
} else { ?>http://via.placeholder.com/96x60<?php }?>" style="width: 96px; height:60">
            </div>
            <div class="seller-info">
                <div class="name">
                    <b>Satıcı: </b>
                    <a href="<?php if (smarty_modifier_get_data($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant","id")) {
echo base_url("genel/bayi/");?>
/<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant","uri");
} else { ?>#<?php }?>"><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant","company");?>
</a>
                    <span class="rating">
                      <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant_stars") == 1 || smarty_modifier_comments($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant_stars") > 1) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                      <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant_stars") == 2 || smarty_modifier_comments($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant_stars") > 2) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                      <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant_stars") == 3 || smarty_modifier_comments($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant_stars") > 3) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                      <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant_stars") == 4 || smarty_modifier_comments($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant_stars") > 4) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                      <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant_stars") == 5) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                      (<?php echo sprintf("%.2f",smarty_modifier_comments($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant_stars"));?>
)
                    </span>
                </div>
                <div class="comments">
                    <a href="<?php if (smarty_modifier_get_data($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant","id")) {
echo base_url("genel/bayi/");?>
/<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant","uri");
} else { ?>#<?php }?>">
                        <i class="fa fa-comments-o"></i>
                        Mağaza Yorumları
                        <span>(<?php echo smarty_modifier_comments($_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"],"merchant");?>
)</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="add-basket">
            <div class="left col-md-10">
                <?php if ($_smarty_tpl->tpl_vars['o_merchant']->value->id) {?>
                <div class="add" style="width: 210px; float:left">
                    <div class="input-group">
                        <span class="input-group-addon">+</span>
                        <input type="number" placeholder="1">
                        <span class="input-group-addon">-</span>
                    </div>
                    <button class="btn btn-add"  onclick="addCartModule('<?php echo $_smarty_tpl->tpl_vars['cheap']->value["price"]["id"];?>
','1', '<?php echo $_smarty_tpl->tpl_vars['cheap']->value["price"]["mid"];?>
');">
                        <i class="fa fa-shopping-cart"></i>
                        SEPETE EKLE
                    </button>
                </div>
                <?php }?>
                <div class="notify" style=" float:left">
                    <a class="btn btn-compare" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url("/genel/lastik/");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
&t=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-share" href="https://twitter.com/share?url=<?php echo base_url("/genel/lastik/");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
&text=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['yakit']->value || $_smarty_tpl->tpl_vars['islak']->value || $_smarty_tpl->tpl_vars['ses']->value) {?>
                    <a class="btn btn-add" href="<?php echo base_url("/genel/lastik/");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/etiket">
                        <i class="fa fa-eur"></i>
                        AVRUPA ETİKETİ
                    </a>
                    <?php }?>
                </div>
            </div>
            <div class="right col-md-2" data-toggle="tooltip" data-placement="left" title="Kişi bu ürünü inceledi">
                <i class="fa fa-eye"></i>
                <?php echo $_smarty_tpl->tpl_vars['hit']->value;?>

            </div>
        </div>
        <div class="product-chars">
            <div class="panel">
                <div class="panel-header">ÜRÜN ÖZELLİKLERİ</div>
                <div class="panel-body">
                    <ul>
                        <li>
                            <span>Mevsim</span>
                            <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['season']->value,"season","name");?>

                        </li>
                        <li>
                            <span>Lastik Boyutu</span>
                            <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['tire_width']->value,"tire_width","name");?>
/<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['tire_rate']->value,"tire_rate","name");?>
R<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['rim_diameter']->value,"rim_diameter","name");?>

                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['weight_index']->value) {?>
                        <li>
                            <span>Ağırlık Endeksi</span>
                            <?php echo $_smarty_tpl->tpl_vars['weight_index']->value;?>

                        </li>
                        <?php }?>
                        <li>
                            <span>Hız Endeksi</span>
                            <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['speed_index']->value,"speed_index","name");?>

                        </li>
                        <li>
                            <span>Araç Kategorisi</span>
                            <?php echo mb_strtoupper(smarty_modifier_get_data($_smarty_tpl->tpl_vars['category']->value,"category","name"), 'UTF-8');?>

                        </li>
                        <li>
                            <span>Lastik Yılı</span>
                            <?php echo smarty_modifier_urunyili($_smarty_tpl->tpl_vars['id']->value);?>

                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['run_flat']->value == "yes") {?><li>
                            <span>Run Flat</span>
                            <?php if ($_smarty_tpl->tpl_vars['run_flat']->value == "yes") {?>Evet<?php } else { ?>Hayır<?php }?>
                        </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['extra_lot']->value == "yes") {?><li>
                            <span>Extra LOT (XL)</span>
                            <?php if ($_smarty_tpl->tpl_vars['extra_lot']->value == "yes") {?>Evet<?php } else { ?>Hayır<?php }?>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<ul class="nav nav-tabs">
    <li  class="active">
        <a href="#product" aria-controls="product" data-toggle="tab">ÜRÜN AÇIKLAMASI</a>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['grade']->value) {?>
    <li>
        <a href="#quality" aria-controls="quality" data-toggle="tab">ÜRÜN KALİTESİ</a>
    </li>
    <?php }?>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="product">
        <div class="ads" style="width: 729px; height: 90px;margin: 10px 16%;border: 1px solid #ccc;background: #EFEFEE;line-height: 90px;text-align: center;font-size: 22px;">
            Reklam Alanı 729x90
        </div>
        <?php echo $_smarty_tpl->tpl_vars['property']->value;?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['grade']->value) {?>
    <div class="tab-pane" id="quality"><?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
</div>
    <?php }?>
</div>
<?php if (count($_smarty_tpl->tpl_vars['offers']->value) > 0) {?>
<h2 class="shops-header">ÖNERİLEN DİĞER ÜRÜNLER</h2>
<div class="other-products">
    <div id="carousel-id3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="item active">
                <div class="row">
                    <?php
$_from = $_smarty_tpl->tpl_vars['offers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_2_saved_item = isset($_smarty_tpl->tpl_vars['offer']) ? $_smarty_tpl->tpl_vars['offer'] : false;
$__foreach_foo_2_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array());
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$__foreach_foo_2_first = true;
$_smarty_tpl->tpl_vars['offer']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] = $__foreach_foo_2_first;
$__foreach_foo_2_first = false;
$__foreach_foo_2_saved_local_item = $_smarty_tpl->tpl_vars['offer'];
?>
                    <div class="col-sm-6 col-md-3">
                        <div class="product">
                            <a href="<?php echo base_url("/genel/lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['offer']->value->uri;?>
">
                                <figure>
                                    <div class="img-wrapper">
                                        <img src="<?php if (smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['offer']->value->id,"image")) {
echo base_url(smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['offer']->value->id,"image"));
} else {
echo base_url("assets/images/no_image.jpg");
}?>" class="img-responsive center-block">
                                    </div>
                                    <span class="badge"><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['offer']->value->brand,"brand","name");?>
</span>
                                    <figcaption>
                                        <h3><?php echo $_smarty_tpl->tpl_vars['offer']->value->name;?>
</h3>
                                        <div class="rating">
                                            <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['offer']->value->id,"product_stars") == 1 || smarty_modifier_comments($_smarty_tpl->tpl_vars['offer']->value->id,"product_stars") > 1) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                            <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['offer']->value->id,"product_stars") == 2 || smarty_modifier_comments($_smarty_tpl->tpl_vars['offer']->value->id,"product_stars") > 2) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                            <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['offer']->value->id,"product_stars") == 3 || smarty_modifier_comments($_smarty_tpl->tpl_vars['offer']->value->id,"product_stars") > 3) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                            <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['offer']->value->id,"product_stars") == 4 || smarty_modifier_comments($_smarty_tpl->tpl_vars['offer']->value->id,"product_stars") > 4) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                            <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['offer']->value->id,"product_stars") == 5) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                        </div>
                                        <span class="price"><i class="fa fa-try"></i><?php echo smarty_modifier_get_max_amount($_smarty_tpl->tpl_vars['offer']->value->id);?>
</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['offer'] = $__foreach_foo_2_saved_local_item;
}
if ($__foreach_foo_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = $__foreach_foo_2_saved;
}
if ($__foreach_foo_2_saved_item) {
$_smarty_tpl->tpl_vars['offer'] = $__foreach_foo_2_saved_item;
}
if ($__foreach_foo_2_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_foo_2_saved_key;
}
?>
                </div>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['offers_last']->value) > 0) {?>
            <div class="item">
                <div class="row">
                    <?php
$_from = $_smarty_tpl->tpl_vars['offers_last']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_3_saved_item = isset($_smarty_tpl->tpl_vars['offer_last']) ? $_smarty_tpl->tpl_vars['offer_last'] : false;
$__foreach_foo_3_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['offer_last'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array());
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$__foreach_foo_3_first = true;
$_smarty_tpl->tpl_vars['offer_last']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['offer_last']->value) {
$_smarty_tpl->tpl_vars['offer_last']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] = $__foreach_foo_3_first;
$__foreach_foo_3_first = false;
$__foreach_foo_3_saved_local_item = $_smarty_tpl->tpl_vars['offer_last'];
?>
                        <div class="col-sm-6 col-md-3">
                            <div class="product">
                                <a href="<?php echo base_url("/genel/lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['offer_last']->value->uri;?>
">
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="<?php if (smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['offer_last']->value->id,"image")) {
echo base_url(smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['offer_last']->value->id,"image"));
} else {
echo base_url("assets/images/no_image.jpg");
}?>" class="img-responsive center-block">
                                        </div>
                                        <span class="badge"><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['offer_last']->value->brand,"brand","name");?>
</span>
                                        <figcaption>
                                            <h3><?php echo $_smarty_tpl->tpl_vars['offer_last']->value->name;?>
</h3>
                                            <div class="rating">
                                                <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['offer_last']->value->id,"product_stars") == 1 || smarty_modifier_comments($_smarty_tpl->tpl_vars['offer_last']->value->id,"product_stars") > 1) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                                <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['offer_last']->value->id,"product_stars") == 2 || smarty_modifier_comments($_smarty_tpl->tpl_vars['offer_last']->value->id,"product_stars") > 2) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                                <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['offer_last']->value->id,"product_stars") == 3 || smarty_modifier_comments($_smarty_tpl->tpl_vars['offer_last']->value->id,"product_stars") > 3) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                                <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['offer_last']->value->id,"product_stars") == 4 || smarty_modifier_comments($_smarty_tpl->tpl_vars['offer_last']->value->id,"product_stars") > 4) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                                <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['offer_last']->value->id,"product_stars") == 5) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                            </div>
                                            <span class="price"><i class="fa fa-try"></i><?php echo smarty_modifier_get_max_amount($_smarty_tpl->tpl_vars['offer_last']->value->id);?>
</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['offer_last'] = $__foreach_foo_3_saved_local_item;
}
if ($__foreach_foo_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = $__foreach_foo_3_saved;
}
if ($__foreach_foo_3_saved_item) {
$_smarty_tpl->tpl_vars['offer_last'] = $__foreach_foo_3_saved_item;
}
if ($__foreach_foo_3_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_foo_3_saved_key;
}
?>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <div class="slider-controls">
        <a class="left carousel-control" href="#carousel-id3" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#carousel-id3" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>
<?php }
} elseif ($_smarty_tpl->tpl_vars['page']->value == "fiyatlar") {?>
<h2 style="margin-bottom: 20px"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
<div class="row mb-30">
    <div class="col-md-6">
        <h2 class="shops-header">ÜRÜNÜ SATAN ONLINE MAĞAZALAR</h2>
        <ul class="shops">
            <?php
$_from = $_smarty_tpl->tpl_vars['online_merchants']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_4_saved_item = isset($_smarty_tpl->tpl_vars['o_merchant']) ? $_smarty_tpl->tpl_vars['o_merchant'] : false;
$_smarty_tpl->tpl_vars['o_merchant'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array());
$__foreach_foo_4_first = true;
$_smarty_tpl->tpl_vars['o_merchant']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o_merchant']->value) {
$_smarty_tpl->tpl_vars['o_merchant']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] = $__foreach_foo_4_first;
$__foreach_foo_4_first = false;
$__foreach_foo_4_saved_local_item = $_smarty_tpl->tpl_vars['o_merchant'];
?>
            <li>
                <div class="left">
                    <div class="price"><i class="fa fa-try"></i><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['o_merchant']->value->amount);?>
 <?php if ($_smarty_tpl->tpl_vars['o_merchant']->value->year) {?><span style="font-size: 13px;color: #ce202a;"> (<a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="DOT:Lastiğin Üretim Yılıdır">DOT</a> Yılı: <?php echo $_smarty_tpl->tpl_vars['o_merchant']->value->year;?>
 )</span><?php }?></div>
                    <div class="name">
                        <a href="<?php echo base_url("genel/bayi");?>
/<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['o_merchant']->value->mid,"merchant","uri");?>
"><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['o_merchant']->value->mid,"merchant","company");?>
</a>
                        <p>
                            <span class="rating">
                              <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['o_merchant']->value->mid,"merchant_stars") == 1 || smarty_modifier_comments($_smarty_tpl->tpl_vars['o_merchant']->value->mid,"merchant_stars") > 1) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                              <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['o_merchant']->value->mid,"merchant_stars") == 2 || smarty_modifier_comments($_smarty_tpl->tpl_vars['o_merchant']->value->mid,"merchant_stars") > 2) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                              <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['o_merchant']->value->mid,"merchant_stars") == 3 || smarty_modifier_comments($_smarty_tpl->tpl_vars['o_merchant']->value->mid,"merchant_stars") > 3) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                              <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['o_merchant']->value->mid,"merchant_stars") == 4 || smarty_modifier_comments($_smarty_tpl->tpl_vars['o_merchant']->value->mid,"merchant_stars") > 4) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                              <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['o_merchant']->value->mid,"merchant_stars") == 5) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                              <strong>(<?php echo sprintf("%.2f",smarty_modifier_comments($_smarty_tpl->tpl_vars['o_merchant']->value->mid,"merchant_stars"));?>
)</strong>
                            </span>
                        </p>
                        <p>Türkiye'nin her yerine ücretsiz kargo.</p>
                    </div>
                </div>
                <a class="btn" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url("/genel/lastik/");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/fiyatlar&t=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" target="_blank" style="border: 1px solid #ccc;padding: 9px 10px; color: #ce202a;">
                    <i class="fa fa-facebook"></i>
                </a>
                <a class="btn btn-add" href="<?php echo base_url("genel/bayi");?>
/<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['o_merchant']->value->mid,"merchant","uri");?>
" target="_blank"><i class="fa fa-eye"></i>BAYİYE GİT</a>
                <?php if ($_smarty_tpl->tpl_vars['o_merchant']->value->id) {?>
                <button onclick="addCartModule('<?php echo $_smarty_tpl->tpl_vars['o_merchant']->value->id;?>
','1', '<?php echo $_smarty_tpl->tpl_vars['o_merchant']->value->mid;?>
');"  class="btn btn-add"><i class="fa fa-shopping-cart"></i>SEPETE EKLE</button>
                <?php }?>
            </li>
                <?php
$_smarty_tpl->tpl_vars['o_merchant'] = $__foreach_foo_4_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['o_merchant']->_loop) {
?>
            <li>
                Üzgünüz, herhangi bir fiyat bulunamadı!
            </li>
            <?php
}
if ($__foreach_foo_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = $__foreach_foo_4_saved;
}
if ($__foreach_foo_4_saved_item) {
$_smarty_tpl->tpl_vars['o_merchant'] = $__foreach_foo_4_saved_item;
}
?>
        </ul>
    </div>
    <div class="col-md-6">
        <h2 class="shops-header">ÜRÜNÜ SATAN BAYİLER</h2>
        <ul class="shops">
            <?php
$_from = $_smarty_tpl->tpl_vars['normal_merchants']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_5_saved_item = isset($_smarty_tpl->tpl_vars['n_merchant']) ? $_smarty_tpl->tpl_vars['n_merchant'] : false;
$_smarty_tpl->tpl_vars['n_merchant'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['n_merchant']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n_merchant']->value) {
$_smarty_tpl->tpl_vars['n_merchant']->_loop = true;
$__foreach_foo2_5_saved_local_item = $_smarty_tpl->tpl_vars['n_merchant'];
?>
                <li>
                    <div class="left">
                        <div class="price"><i class="fa fa-try"></i><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['n_merchant']->value->amount);?>
 <?php if ($_smarty_tpl->tpl_vars['n_merchant']->value->year) {?><span style="font-size: 13px;color: #ce202a;"> (<a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="DOT:Lastiğin Üretim Yılıdır">DOT</a> Yılı: <?php echo $_smarty_tpl->tpl_vars['n_merchant']->value->year;?>
 )</span><?php }?></div>
                        <div class="name">
                            <a href="<?php echo base_url("genel/bayi");?>
/<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['n_merchant']->value->mid,"merchant","uri");?>
"><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['n_merchant']->value->mid,"merchant","company");?>
</a>
                            <p>
                                <span class="rating">
                                  <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['n_merchant']->value->mid,"merchant_stars") == 1 || smarty_modifier_comments($_smarty_tpl->tpl_vars['n_merchant']->value->mid,"merchant_stars") > 1) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                  <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['n_merchant']->value->mid,"merchant_stars") == 2 || smarty_modifier_comments($_smarty_tpl->tpl_vars['n_merchant']->value->mid,"merchant_stars") > 2) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                  <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['n_merchant']->value->mid,"merchant_stars") == 3 || smarty_modifier_comments($_smarty_tpl->tpl_vars['n_merchant']->value->mid,"merchant_stars") > 3) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                  <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['n_merchant']->value->mid,"merchant_stars") == 4 || smarty_modifier_comments($_smarty_tpl->tpl_vars['n_merchant']->value->mid,"merchant_stars") > 4) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                  <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['n_merchant']->value->mid,"merchant_stars") == 5) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                  <strong>(<?php echo sprintf("%.2f",smarty_modifier_comments($_smarty_tpl->tpl_vars['n_merchant']->value->mid,"merchant_stars"));?>
)</strong>
                                </span>
                            </p>
                            <p>Türkiye'nin her yerine ücretsiz kargo.</p>
                        </div>
                    </div>
                    <a class="btn" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url("/genel/lastik/");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/fiyatlar&t=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" target="_blank" style="border: 1px solid #ccc;padding: 9px 10px; color: #ce202a;">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-add" href="<?php echo base_url("genel/bayi");?>
/<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['n_merchant']->value->mid,"merchant","uri");?>
" target="_blank"><i class="fa fa-eye"></i>BAYİYE GİT</a>
                    <?php if ($_smarty_tpl->tpl_vars['o_merchant']->value->id) {?><button class="btn btn-add" onclick="addCartModule('<?php echo $_smarty_tpl->tpl_vars['n_merchant']->value->id;?>
','1', '<?php echo $_smarty_tpl->tpl_vars['n_merchant']->value->mid;?>
');" ><i class="fa fa-shopping-cart"></i>SEPETE EKLE</button><?php }?>
                </li>
                <?php
$_smarty_tpl->tpl_vars['n_merchant'] = $__foreach_foo2_5_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['n_merchant']->_loop) {
?>
                <li>
                    Üzgünüz, herhangi bir fiyat bulunamadı!
                </li>
            <?php
}
if ($__foreach_foo2_5_saved_item) {
$_smarty_tpl->tpl_vars['n_merchant'] = $__foreach_foo2_5_saved_item;
}
?>
        </ul>
    </div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "yorumlar") {?>

<section class="product-detail" style="padding:0">
    <div class="container">
        <h2 style="margin-bottom: 10px"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>

        <div class="alert alert-warning">
            <strong>Bilgilendirme!</strong> Yapacağınız yorumlar ürünü satın almak isteyen tüketicilerin fikirlerini etkileyecek ve DOĞRU KARAR VERMELERİNE yardımcı olacaktır. Bu sebeple; ürün hakkında edinmiş olduğunuz kanaatinizi içtenlikle ve doğru bir şekilde belirtmeniz çok önemlidir. Hakaret veya illegal yorumlar editörlerimiz tarafından silinmektedir. Yapacağınız yorumlar için teşekkür ederiz.
        </div>

        <div class="tab-content">
            <div class="tab-pane active" id="comments">

                <div class="panel panel-comment">
                    <div class="panel-header">YORUM YAP</div>
                    <div class="panel-body">
                        <form class="row d-flex align-stretch d-block-sm" name="commentss" method="post">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Adınız Soyadınız">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <input type="text" name="subject" class="form-control" placeholder="Yorum Başlığı">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group rating">
                                            <span>Ürüne Puan Verin</span>
                                            <ul class="rating stars">
                                                <li><i class="fa fa-star grey" data-value="1" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star grey" data-value="2" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star grey" data-value="3" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star grey" data-value="4" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star grey" data-value="5" aria-hidden="true"></i></li>
                                                <li><strong class="note">(<span>0</span>)</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <textarea rows="5" name="text" class="form-control" placeholder="Yorumunuz"></textarea>
                                    <input type="hidden" name="type" value="product"/>
                                    <input type="hidden" name="rating" value="0"/>
                                    <input type="hidden" name="merchantID" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                                </div>
                            </div>
                            <div class="col-sm-2 d-flex">
                                <a id="postComment" class="btn btn-send" style="line-height: 115px;">Gönder</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="comments-section">
                    <div class="comment-header">
                        <span>YORUMLAR<span class="red">(<?php echo $_smarty_tpl->tpl_vars['comments']->value["number"];?>
)</span></span>
                    </div>
                    <?php
$_from = $_smarty_tpl->tpl_vars['comment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_6_saved_item = isset($_smarty_tpl->tpl_vars['comments']) ? $_smarty_tpl->tpl_vars['comments'] : false;
$_smarty_tpl->tpl_vars['comments'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comments']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comments']->value) {
$_smarty_tpl->tpl_vars['comments']->_loop = true;
$__foreach_foo2_6_saved_local_item = $_smarty_tpl->tpl_vars['comments'];
?>

                        <?php if ($_smarty_tpl->tpl_vars['company']->value == smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name)) {?>

                        <div class="comment admin hidden">
                            <img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-responsive img-circle">
                            <div class="right">
                                <div class="header">
                                    <div class="name"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name);?>

                                        <span><?php echo smarty_modifier_c_ago($_smarty_tpl->tpl_vars['comments']->value->create_time);?>
</span>
                                    </div>
                                </div>
                                <div class="body"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->text);?>
</div></div>
                            </div>
                        </div>

                        <?php } else { ?>
                            <div class="comment hidden">
                                <img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-responsive img-circle">
                                <div class="right">
                                    <div class="header">
                                        <div class="name"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name);?>

                                            <span><?php echo smarty_modifier_c_ago($_smarty_tpl->tpl_vars['comments']->value->create_time);?>
</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <div class="body col-md-10"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->text);?>
</div>
                                        <div class="rating col-md-2">
                                            <div class="rate">
                                                <a href="javascript:void(0)" class="positive like" onclick="like(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                                    <i class="fa fa-thumbs-up"></i> <strong id="comment-like-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->like;?>
 )</strong>
                                                </a>
                                                <a href="javascript:void(0)" class="negative unlike" onclick="unlike(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                                    <i class="fa fa-thumbs-down"></i> <strong id="comment-unlike-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->unlike;?>
 )</strong>
                                                </a>
                                            </div>
                                            <div class="stars">
                                                <i class="fa <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                                <i class="fa <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                                <i class="fa <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                                <i class="fa <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3 || $_smarty_tpl->tpl_vars['comments']->value->rating == 4) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                                                <i class="fa <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3 || $_smarty_tpl->tpl_vars['comments']->value->rating == 4 || $_smarty_tpl->tpl_vars['comments']->value->rating == 5) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i> (<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['comments']->value->rating);?>
)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['comments'] = $__foreach_foo2_6_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['comments']->_loop) {
?>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <p>Üzgünüm, Herhangi bir yorum yapılmamıştır. İlk yorumu siz yapabilirsiniz</p>
                            </div>
                        </div>
                    <?php
}
if ($__foreach_foo2_6_saved_item) {
$_smarty_tpl->tpl_vars['comments'] = $__foreach_foo2_6_saved_item;
}
?>
                    <div class="col-md-12">
                        <a href="javascript:void(0)" class="btn btn-red" style="display: block" id="more_comment">Daha Fazla Yorum Göster</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "etiket") {?>

<section class="product-detail" style="padding: 20px 0;">
    <div class="container">
        <div class="col-sm-12 col-md-12">
            <div class="product-detail-header">
                <div class="product-name">
                    <div class="left">
                        <h1 style="font-size: 32px"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
 Avrupa Etiketi</h1>
                        <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") == 1 || smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") > 1) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                        <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") == 2 || smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") > 2) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                        <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") == 3 || smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") > 3) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                        <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") == 4 || smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") > 4) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                        <i class="fa <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars") == 5) {?>fa-star<?php } else { ?>fa-star-o<?php }?>"></i>
                        <span class="rating">(<?php echo smarty_modifier_comments($_smarty_tpl->tpl_vars['id']->value,"product_stars");?>
.00)</span>
                    </div>
                    <div class="right">
                        <img src="<?php echo base_url(smarty_modifier_get_data($_smarty_tpl->tpl_vars['brand']->value,"brand","image"));?>
" style="width: 143px;"/>
                    </div>
                </div>
             </div>
        </div>

        <div class="col-md-5">
            <h3 style="border-bottom: 1px solid #CF2029; padding: 15px 0; margin-bottom: 20px;">Avrupa Etiketi Nedir ?</h3>
            <p>
                Lastiğin üzerinde yer almalıdır. Yasalar gereği AB lastik etiketinin bulunması gerekir. Ancak etiket değerini lastik üzerinde bulamıyorsanız, bayinize sorabilir veya web sitemizde arayabilirsiniz.Kasım 2012 tarihinden beri uygulamada olan lastik etiketi, Avrupa standartları gereği, satılan her lastikte olmak zorundadır.
                <br/>
                <br/>
                <h5 style="font-weight: 800">Yakıt verimliliği</h5>
                Lastiklerin aracınızın yakıt tüketiminin %20'sine kadarından sorumlu olabildiğini biliyor muydunuz? Yüksek yakıt verimliliğine sahip lastikler seçmek, aynı depoyla daha çok kilometre yapmanızı sağlarken, CO2 emisyonunuzu da azaltır.
                <br/>
                <br/>
                <h5 style="font-weight: 800">Islak zeminde sürüş hakimiyeti</h5>
                Islak zeminde yüksek sürüş hakimiyeti sınıfına sahip lastikler, ıslak yollarda tam fren uygulandığında daha hızlı durur.
                <br/>
                <br/>
                <h5 style="font-weight: 800">Gürültü</h5>
                Otomobillerden gelen geçiş gürültüsünün bir kısmı lastikler nedeniyledir. İyi bir gürültü sınıfına sahip lastik seçmek, araç sürüşünüzün çevreye olumsuz etkisini de azaltacaktır.
            </p>
        </div>

        <div class="col-md-5" style="border: 1px solid #ccc; margin-top: 20px">
            
            <div class="col-md-6">
                
                <div class="col-md-12 row">
                    <img src="<?php echo base_url("assets/img/yakit-tasarrufu-sinifi.png");?>
" alt="" style="display: inline-block;border-top: 1px solid #ccc;border-left: 1px solid #ccc;border-right: 1px solid #ccc;padding: 20px 27px; margin-top: 30px; border-radius: 50px 0 0 0;margin-left: 25.1%; background: #fff"/>
                    <div class="etiket_al" style="width: 120%; margin-top: -2px; border: 1px solid #ccc;margin-bottom: 30px;"">
                        <h2 style="color:#CF2029;font-size: 18px; padding: 10px 5px;">Yakıt Tasarrufu <span style="color: #000">Sınıfı</span></h2>
                        <div class="energy-class">
                            <div class="a"></div>
                            <div class="b"></div>
                            <div class="c"></div>
                            <div class="d"></div>
                            <div class="e"></div>
                            <div class="f"></div>
                            <div class="g"></div>
                            <span class="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['yakit']->value, 'UTF-8');?>
"></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-6 row">

                <div class="col-md-12">
                    <img src="<?php echo base_url("assets/img/islak-yol-tutus-sinifi.png");?>
" style="display: inline-block;border-top: 1px solid #ccc;border-left: 1px solid #ccc;border-right: 1px solid #ccc;padding: 20px 27px; margin-top: 30px; border-radius: 50px 0 0 0;margin-left: 17%; background: #fff" alt=""/>
                    <div class="etiket_al" style="width: 120%; margin-top: -2px; border: 1px solid #ccc;margin-bottom: 30px;">
                        <h2 style="color:#CF2029;font-size: 18px; padding: 10px 5px;">Islak Yol Tutuşu <span style="color: #000">Sınıfı</span></h2>
                        <div class="energy-class">
                            <div class="a"></div>
                            <div class="b"></div>
                            <div class="c"></div>
                            <div class="d"></div>
                            <div class="e"></div>
                            <div class="f"></div>
                            <div class="g"></div>
                            <span class="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['islak']->value, 'UTF-8');?>
"></span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="col-md-2">
            <div style="border: 2px solid #CF2029; margin-top: 20px; margin-left: 5px; position: relative;min-height: 400px;">
                <img src="<?php echo base_url("assets/img/gurultu-orani.png");?>
" alt="" style="display: inline-block;padding: 10px; margin-top: 40px;"/>
                <h2 style="color:#CF2029;font-size: 18px; padding: 20px 5px;" class="text-center">Gürültü <span style="color: #000">Oranı</span></h2>
                <span style="display:inline-block;background: #e31b18; color: #fff;font-size: 28px; width: 100%" class="text-center"><?php echo $_smarty_tpl->tpl_vars['ses']->value;?>
 Db</span>
            </div>
            <img src="<?php echo base_url("assets/img/logo.png");?>
" style="padding: 10px 0" class="img-responsive" alt=""/>

        </div>

    </div>
</section>

<?php }?>
</div>
</section>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
