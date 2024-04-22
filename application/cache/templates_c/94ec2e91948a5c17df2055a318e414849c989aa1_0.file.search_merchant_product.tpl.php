<?php
/* Smarty version 3.1.29, created on 2020-11-19 15:06:55
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/search_merchant_product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb65fdf3f43b5_26197361',
  'file_dependency' => 
  array (
    '94ec2e91948a5c17df2055a318e414849c989aa1' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/search_merchant_product.tpl',
      1 => 1523698119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb65fdf3f43b5_26197361 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_urunyili')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.urunyili.php';
if (!is_callable('smarty_modifier_c_ago')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.c_ago.php';
if (!is_callable('smarty_modifier_comments')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.comments.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
        <span>
          <i class="fa fa-fw fa-circle-o"></i>
          lastik detayı
        </span>
        </div>
        <ol class="breadcrumb pull-right">
            <li>
                <a href="<?php echo base_url();?>
">Anasayfa</a>
            </li>
            <li>
                <a href="<?php echo base_url("/bayi");?>
/<?php echo $_smarty_tpl->tpl_vars['merchantUri']->value;?>
/urunler/1">Ürünler</a>
            </li>
            <li>
                <a href="<?php echo base_url("/bayi");?>
/<?php echo $_smarty_tpl->tpl_vars['merchantUri']->value;?>
/lastik/1"">Lastikler</a>
            </li>
            <li>
                <a href="<?php echo base_url("/bayide-ara");?>
/<?php echo $_smarty_tpl->tpl_vars['merchantUri']->value;?>
?brand=<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['brand']->value,"brand","id");?>
""><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['brand']->value,"brand","name");?>
</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "lastik") {?>class="active"<?php }?>>
                <a href="<?php echo base_url("/bayide-lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['merchantUri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/lastik"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
</a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['page']->value == "lastik-yorumlari") {?>
            <li class="active">
                <a href="<?php echo base_url("/bayide-lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['merchantUri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/lastik-yorumlari">Lastik Yorumları</a>
            </li>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "marka-yorumlari") {?>
            <li class="active">
                <a href="<?php echo base_url("/bayide-lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['merchantUri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/marka-yorumlari">Marka Yorumları</a>
            </li>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "bayi-yorumlari") {?>
            <li class="active">
                <a href="<?php echo base_url("/bayide-lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['merchantUri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/bayi-yorumlari">Bayi Yorumları</a>
            </li>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "etiket") {?>
            <li class="active">
                <a href="<?php echo base_url("/bayide-lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['merchantUri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/etiket">Avrupa Etiketi</a>
            </li>
            <?php }?>
        </ol>
    </div>
</div>

<section class="content detail">
<div class="container">
<?php if ($_smarty_tpl->tpl_vars['page']->value == "lastik") {?>
<div class="row d-flex flex-wrap mb-30">
    <div class="col-xs-12 col-sm-6 col-md-3 order-2 mb-xs-30">
        <div class="panel">
            <div class="panel-header">
                <img src="<?php echo base_url("assets/img/tire-icon2.png");?>
">
                <h3 class="title">ÖZELLİKLER</h3>
            </div>
            <div class="panel-body">
                <div class="title">Özellikler</div>
                <ul class="sidebar">
                    <li>
                        <span>Marka</span>
                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['brand']->value,"brand","name");?>

                    </li>
                    <li>
                        <span>Taban Genişliği</span>
                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['tire_width']->value,"tire_width","name");?>

                    </li>
                    <li>
                        <span>Kesit Oranı</span>
                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['tire_rate']->value,"tire_rate","name");?>

                    </li>
                    <li>
                        <span>Jant Çapı</span>
                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['rim_diameter']->value,"rim_diameter","name");?>

                    </li>
                    <li>
                        <span>Hız İndexi</span>
                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['speed_index']->value,"speed_index","name");?>

                    </li>
                    <li>
                        <span>Kullanım Türü</span>
                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['category']->value,"category","name");?>

                    </li>
                    <li>
                        <span>Mevsim</span>
                        <?php if (smarty_modifier_get_data($_smarty_tpl->tpl_vars['season']->value,"season","name") == "Yaz") {?>
                            <img src="<?php echo base_url("assets/img/sun.png");?>
" alt="" style="width: 32px; height:32px"/>
                        <?php }?>
                        <?php if (smarty_modifier_get_data($_smarty_tpl->tpl_vars['season']->value,"season","name") == "Kış") {?>
                            <img src="<?php echo base_url("assets/img/kis.png");?>
" alt="" style="width: 32px; height:32px;"/>
                        <?php }?>
                    </li>
                    <li>
                        <span>Ürün Yılı</span>
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
                    <li>
                        <a href="<?php echo base_url("/bayide-lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['merchantUri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/etiket" class="btn btn-red btn-block">AVRUPA ETİKETİ</a>
                    </li>
                </ul>
                <div class="title">Dİğer Bilgiler</div>
                <ul class="sidebar">
                    <li>
                        <span>Garanti Süresi</span>
                        24 Ay (2 Yıl)
                    </li>
                    <li>
                        <span>Stok Kodu</span>
                        <span class="highlighted">LSTKKNT<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 order-1 mb-sm-30">
        <div class="panel">

            <div class="panel-header bg-white hidden-xs">
                <div class="comments">
                    <a href="<?php echo base_url("/bayide-lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['merchant']->value["uri"];?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/lastik-yorumlari" class="comment">
                        <img src="<?php echo base_url("assets/img/comment.png");?>
">
                        <span>Lastik Yorumları</span>
                        <?php if ($_smarty_tpl->tpl_vars['stars']->value["lastik"]) {?>(<?php echo $_smarty_tpl->tpl_vars['stars']->value["lastik"];?>
)<?php }?>
                    </a>
                    <a href="<?php echo base_url("/bayide-lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['merchant']->value["uri"];?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/marka-yorumlari" class="comment">
                        <img src="<?php echo base_url("assets/img/comment.png");?>
">
                        <span>Marka Yorumları</span>
                        <?php if ($_smarty_tpl->tpl_vars['stars']->value["marka"]) {?>(<?php echo $_smarty_tpl->tpl_vars['stars']->value["marka"];?>
)<?php }?>
                    </a>
                    <a href="<?php echo base_url("/bayide-lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['merchant']->value["uri"];?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/bayi-yorumlari" class="comment">
                        <img src="<?php echo base_url("assets/img/comment.png");?>
">
                        <span>Bayi Yorumları</span>
                        <?php if ($_smarty_tpl->tpl_vars['stars']->value["bayi"]) {?>(<?php echo $_smarty_tpl->tpl_vars['stars']->value["bayi"];?>
)<?php }?>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="product-title">
                    <h1><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
</h1>
                    <img src="<?php echo base_url(smarty_modifier_get_data($_smarty_tpl->tpl_vars['brand']->value,"brand","image"));?>
" class="img-responsive" style="max-width: 100px;">
                </div>
                <div id="carousel-id2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
$_from = $_smarty_tpl->tpl_vars['select_img']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_0_saved_item = isset($_smarty_tpl->tpl_vars['img']) ? $_smarty_tpl->tpl_vars['img'] : false;
$_smarty_tpl->tpl_vars['img'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array());
$__foreach_foo_0_first = true;
$_smarty_tpl->tpl_vars['img']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] = $__foreach_foo_0_first;
$__foreach_foo_0_first = false;
$__foreach_foo_0_saved_local_item = $_smarty_tpl->tpl_vars['img'];
?>
                            <div class="item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] : null)) {?>active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['img']->value->id;?>
">
                                <img src="<?php echo base_url($_smarty_tpl->tpl_vars['img']->value->image);?>
" alt="" class="img-responsive center-block">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
?>
                    </div>
                    <div class="slider-indicator">1/<?php echo $_smarty_tpl->tpl_vars['select_img_num']->value;?>
</div>
                </div>
                <div class="slider-controls">
                    <a class="left carousel-control" href="#carousel-id2" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <ol class="carousel-indicators">
                        <?php
$_from = $_smarty_tpl->tpl_vars['select_img']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_1_saved_item = isset($_smarty_tpl->tpl_vars['img']) ? $_smarty_tpl->tpl_vars['img'] : false;
$_smarty_tpl->tpl_vars['img'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array());
$__foreach_foo_1_first = true;
$_smarty_tpl->tpl_vars['img']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] = $__foreach_foo_1_first;
$__foreach_foo_1_first = false;
$__foreach_foo_1_saved_local_item = $_smarty_tpl->tpl_vars['img'];
?>
                            <li data-target="#carousel-id2" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['img']->value->id;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] : null)) {?>class="active"<?php }?>>
                                <img src="<?php echo base_url($_smarty_tpl->tpl_vars['img']->value->image);?>
" />
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
?>
                    </ol>
                    <a class="right carousel-control" href="#carousel-id2" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 order-3">
        <div class="panel">
            <div class="panel-header">
                <img src="<?php echo base_url("assets/img/bucket.png");?>
">
                <h3 class="title">SATIN AL</h3>
            </div>
            <div class="panel-body checkout">
                <div class="checkout-header">
                    <div class="title">
                        Hemen Satın Al
                  <span class="highlighted">Ürün Kodu:
                    <span>LSTKKNT<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</span>
                  </span>
                    </div>
                    <div class="seller">
                        <div class="name" style="width: 75%;">Satıcı:
                            <a href="<?php echo base_url("/genel/bayi");?>
/<?php echo $_smarty_tpl->tpl_vars['merchant']->value["uri"];?>
" style="white-space: nowrap;overflow: hidden; text-overflow: ellipsis; display: inline-block; width: 75%; line-height: 10px;"><?php echo $_smarty_tpl->tpl_vars['merchant']->value["company"];?>
</a>
                        </div>
                        <div class="rating"><?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['ratings']->value);?>
</div>
                    </div>
                </div>
                <div class="checkout-body">
                    <?php if ($_smarty_tpl->tpl_vars['price']->value["year"]) {?><div class="percent text-center"><?php echo $_smarty_tpl->tpl_vars['price']->value["year"];?>
 <br/> yılı</div><?php }?>
                    <div class="price">
                        <del class="hidden">266,90 TL</del>
                        <strong style="line-height: 50px;"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['price']->value["amount"]);?>
 TL</strong>
                    </div>
                </div>
                <div class="checkout-footer">
                    <div class="input-group">
                      <span class="input-group-addon azalt">
                        <i class="fa fa-minus"></i>
                      </span>
                      <input type="number" name="quality" placeholder="1" max-stock="<?php echo $_smarty_tpl->tpl_vars['price']->value["stock"];?>
">
                      <span class="input-group-addon arttir">
                        <i class="fa fa-plus"></i>
                      </span>
                    </div>
                    <button class="btn btn-add" onclick="addCartModule('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
','1', '<?php echo $_smarty_tpl->tpl_vars['merchant']->value["id"];?>
');">SEPETE EKLE</button>
                    <br/>
                </div>
                <div class="col-md-12">
                    <p class="text-center">Şuan <strong><?php echo $_smarty_tpl->tpl_vars['merchant']->value["company"];?>
</strong> bayimizde bu üründen stokda toplam <strong><?php echo $_smarty_tpl->tpl_vars['price']->value["stock"];?>
</strong> adet vardır.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-header">ÜRÜN AÇIKLAMASI</div>
    <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['property']->value;?>
</div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "lastik-yorumlari") {?>
    <h3 style="padding: 0 0 25px 10px"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
 Hakkında Yorumlar</h3>
    <div class="panel panel-default">
        <div class="panel-header">ÜRÜN YORUMLARI</div>
        <div class="panel-body">
            <div class="product-comments">
                <?php
$_from = $_smarty_tpl->tpl_vars['cLastik']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_2_saved_item = isset($_smarty_tpl->tpl_vars['comments']) ? $_smarty_tpl->tpl_vars['comments'] : false;
$_smarty_tpl->tpl_vars['comments'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comments']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comments']->value) {
$_smarty_tpl->tpl_vars['comments']->_loop = true;
$__foreach_foo2_2_saved_local_item = $_smarty_tpl->tpl_vars['comments'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['company']->value == smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name)) {?>
                        <div class="comment">
                            <img class="img-responsive img-circle user-photo" src="<?php if ($_smarty_tpl->tpl_vars['company']->value == smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name)) {
if ($_smarty_tpl->tpl_vars['logo']->value) {
echo base_url($_smarty_tpl->tpl_vars['logo']->value);
} else {
echo base_url("assets/images/no_image.jpg");
}
} else { ?>https://ssl.gstatic.com/accounts/ui/avatar_2x.png<?php }?>">
                            <div class="right" style="margin-bottom: 15px">
                                <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                    <div class="panel-heading" style="padding: 5px 15px; background-color: #cf2029;color: #fff;">
                                        <strong><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name);?>
</strong>
                                        <span class="text-muted" style="font-size: 12px; color: #e6e4e4"> <?php echo smarty_modifier_c_ago($_smarty_tpl->tpl_vars['comments']->value->create_time);?>
</span>
                                        <span class="like pull-right">
                                            <a href="javascript:void(0)" class="like" onclick="like(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                                <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->like;?>
 )</strong>
                                            </a>
                                            <a href="javascript:void(0)" class="unlike" onclick="unlike(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)" style="background-color: #000">
                                                <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->unlike;?>
 )</strong>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="panel-body">
                                        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->text);?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>

                        <div class="comment">
                            <img class="img-responsive img-circle user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                            <div class="right" style="margin-bottom: 15px">
                                <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                    <div class="panel-heading" style="padding: 5px 15px;">
                                        <strong><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name);?>
</strong>
                                        <span class="text-muted" style="font-size: 12px"> <?php echo smarty_modifier_c_ago($_smarty_tpl->tpl_vars['comments']->value->create_time);?>
</span>
                                        <span class="like pull-right">
                                            <a href="javascript:void(0)" class="like" onclick="like(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                                <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->like;?>
 )</strong>
                                            </a>
                                            <a href="javascript:void(0)" class="unlike" onclick="unlike(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                                <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->unlike;?>
 )</strong>
                                            </a>
                                        </span>
                                        <span class="star">
                                            <ul class="rating">
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3 || $_smarty_tpl->tpl_vars['comments']->value->rating == 4) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3 || $_smarty_tpl->tpl_vars['comments']->value->rating == 4 || $_smarty_tpl->tpl_vars['comments']->value->rating == 5) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                            </ul>
                                        </span>
                                    </div>
                                    <div class="panel-body body">
                                        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->text);?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                    <?php
$_smarty_tpl->tpl_vars['comments'] = $__foreach_foo2_2_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['comments']->_loop) {
?>
                    <div class="col-md-12">
                        <div class="comment-body">
                            <p>Üzgünüm, Herhangi bir yorum yapılmamıştır. Ürün hakkında ilk yorumu siz <a href="<?php echo base_url("/genel/lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
" style="color: red">buradan</a> yapabilirsiniz</p>
                        </div>
                    </div>
                <?php
}
if ($__foreach_foo2_2_saved_item) {
$_smarty_tpl->tpl_vars['comments'] = $__foreach_foo2_2_saved_item;
}
?>

            </div>
            <div class="panel panel-default hidden">
                <div class="panel-header">Ürüne Yorum Yap</div>
                <div class="panel-body">
                    <form class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Adınız Soyadınız">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Yorum Başlığı">
                            </div>
                            <div class="form-group rating">
                                <span>Puan Ver</span>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> (0)
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea rows="4" class="form-control" placeholder="Yorumunuz"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Yorumu Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "marka-yorumlari") {?>
    <h3 style="padding: 0 0 25px 10px"><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['brand']->value,"brand","name");?>
 Hakkında Yorumlar</h3>
    <div class="panel panel-default">
        <div class="panel-header">MARKA YORUMLARI</div>
        <div class="panel-body">
            <div class="product-comments">
                <?php
$_from = $_smarty_tpl->tpl_vars['cMarka']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_3_saved_item = isset($_smarty_tpl->tpl_vars['comments']) ? $_smarty_tpl->tpl_vars['comments'] : false;
$_smarty_tpl->tpl_vars['comments'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comments']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comments']->value) {
$_smarty_tpl->tpl_vars['comments']->_loop = true;
$__foreach_foo2_3_saved_local_item = $_smarty_tpl->tpl_vars['comments'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['company']->value == smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name)) {?>
                        <div class="comment">
                            <img class="img-responsive img-circle user-photo" src="<?php if ($_smarty_tpl->tpl_vars['company']->value == smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name)) {
if ($_smarty_tpl->tpl_vars['logo']->value) {
echo base_url($_smarty_tpl->tpl_vars['logo']->value);
} else {
echo base_url("assets/images/no_image.jpg");
}
} else { ?>https://ssl.gstatic.com/accounts/ui/avatar_2x.png<?php }?>">
                            <div class="right" style="margin-bottom: 15px">
                                <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                    <div class="panel-heading" style="padding: 5px 15px; background-color: #cf2029;color: #fff;">
                                        <strong><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name);?>
</strong>
                                        <span class="text-muted" style="font-size: 12px; color: #e6e4e4"> <?php echo smarty_modifier_c_ago($_smarty_tpl->tpl_vars['comments']->value->create_time);?>
</span>
                                        <span class="like pull-right">
                                            <a href="javascript:void(0)" class="like" onclick="like(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                                <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->like;?>
 )</strong>
                                            </a>
                                            <a href="javascript:void(0)" class="unlike" onclick="unlike(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)" style="background-color: #000">
                                                <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->unlike;?>
 )</strong>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="panel-body">
                                        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->text);?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>

                        <div class="comment">
                            <img class="img-responsive img-circle user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                            <div class="right" style="margin-bottom: 15px">
                                <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                    <div class="panel-heading" style="padding: 5px 15px;">
                                        <strong><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name);?>
</strong>
                                        <span class="text-muted" style="font-size: 12px"> <?php echo smarty_modifier_c_ago($_smarty_tpl->tpl_vars['comments']->value->create_time);?>
</span>
                                        <span class="like pull-right">
                                            <a href="javascript:void(0)" class="like" onclick="like(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                                <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->like;?>
 )</strong>
                                            </a>
                                            <a href="javascript:void(0)" class="unlike" onclick="unlike(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                                <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->unlike;?>
 )</strong>
                                            </a>
                                        </span>
                                        <span class="star">
                                            <ul class="rating">
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3 || $_smarty_tpl->tpl_vars['comments']->value->rating == 4) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3 || $_smarty_tpl->tpl_vars['comments']->value->rating == 4 || $_smarty_tpl->tpl_vars['comments']->value->rating == 5) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                            </ul>
                                        </span>
                                    </div>
                                    <div class="panel-body body">
                                        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->text);?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                    <?php
$_smarty_tpl->tpl_vars['comments'] = $__foreach_foo2_3_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['comments']->_loop) {
?>
                    <div class="col-md-12">
                        <div class="comment-body">
                            <p>Üzgünüm, Herhangi bir yorum yapılmamıştır. Marka hakkında ilk yorumu siz <a href="<?php echo base_url("/marka/");?>
/<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['brand']->value,"brand","id");?>
/<?php echo mb_strtolower(smarty_modifier_get_data($_smarty_tpl->tpl_vars['brand']->value,"brand","name"), 'UTF-8');?>
-lastikleri" style="color: red">buradan</a> yapabilirsiniz</p>
                        </div>
                    </div>
                <?php
}
if ($__foreach_foo2_3_saved_item) {
$_smarty_tpl->tpl_vars['comments'] = $__foreach_foo2_3_saved_item;
}
?>

            </div>
            <div class="panel panel-default hidden">
                <div class="panel-header">Ürüne Yorum Yap</div>
                <div class="panel-body">
                    <form class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Adınız Soyadınız">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Yorum Başlığı">
                            </div>
                            <div class="form-group rating">
                                <span>Puan Ver</span>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> (0)
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea rows="4" class="form-control" placeholder="Yorumunuz"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Yorumu Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "bayi-yorumlari") {?>
    <h3 style="padding: 0 0 25px 10px"><?php echo $_smarty_tpl->tpl_vars['merchant']->value["company"];?>
 Hakkında Yorumlar</h3>
    <div class="panel panel-default">
        <div class="panel-header">BAYİ YORUMLARI</div>
        <div class="panel-body">
            <div class="product-comments">
                <?php
$_from = $_smarty_tpl->tpl_vars['cBayi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_4_saved_item = isset($_smarty_tpl->tpl_vars['comments']) ? $_smarty_tpl->tpl_vars['comments'] : false;
$_smarty_tpl->tpl_vars['comments'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comments']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comments']->value) {
$_smarty_tpl->tpl_vars['comments']->_loop = true;
$__foreach_foo2_4_saved_local_item = $_smarty_tpl->tpl_vars['comments'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['merchant']->value["company"] == smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name)) {?>
                        <div class="comment">
                            <img class="img-responsive img-circle user-photo" src="<?php if ($_smarty_tpl->tpl_vars['company']->value == smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name)) {
if ($_smarty_tpl->tpl_vars['logo']->value) {
echo base_url($_smarty_tpl->tpl_vars['logo']->value);
} else {
echo base_url("assets/images/no_image.jpg");
}
} else { ?>https://ssl.gstatic.com/accounts/ui/avatar_2x.png<?php }?>">
                            <div class="right" style="margin-bottom: 15px">
                                <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                    <div class="panel-heading" style="padding: 5px 15px; background-color: #cf2029;color: #fff;">
                                        <strong><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name);?>
</strong>
                                        <span class="text-muted" style="font-size: 12px; color: #e6e4e4"> <?php echo smarty_modifier_c_ago($_smarty_tpl->tpl_vars['comments']->value->create_time);?>
</span>
                                        <span class="like pull-right">
                                            <a href="javascript:void(0)" class="like" onclick="like(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                                <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->like;?>
 )</strong>
                                            </a>
                                            <a href="javascript:void(0)" class="unlike" onclick="unlike(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)" style="background-color: #000">
                                                <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->unlike;?>
 )</strong>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="panel-body">
                                        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->text);?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>

                        <div class="comment">
                            <img class="img-responsive img-circle user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                            <div class="right" style="margin-bottom: 15px">
                                <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                    <div class="panel-heading" style="padding: 5px 15px;">
                                        <strong><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name);?>
</strong>
                                        <span class="text-muted" style="font-size: 12px"> <?php echo smarty_modifier_c_ago($_smarty_tpl->tpl_vars['comments']->value->create_time);?>
</span>
                                        <span class="like pull-right">
                                            <a href="javascript:void(0)" class="like" onclick="like(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                                <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->like;?>
 )</strong>
                                            </a>
                                            <a href="javascript:void(0)" class="unlike" onclick="unlike(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                                <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->unlike;?>
 )</strong>
                                            </a>
                                        </span>
                                        <span class="star">
                                            <ul class="rating">
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3 || $_smarty_tpl->tpl_vars['comments']->value->rating == 4) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3 || $_smarty_tpl->tpl_vars['comments']->value->rating == 4 || $_smarty_tpl->tpl_vars['comments']->value->rating == 5) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                            </ul>
                                        </span>
                                    </div>
                                    <div class="panel-body body">
                                        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->text);?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                    <?php
$_smarty_tpl->tpl_vars['comments'] = $__foreach_foo2_4_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['comments']->_loop) {
?>
                    <div class="col-md-12">
                        <div class="comment-body">
                            <p>Üzgünüm, Herhangi bir yorum yapılmamıştır. Marka hakkında ilk yorumu siz <a href="<?php echo base_url("/marka/");?>
/<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['brand']->value,"brand","id");?>
/<?php echo mb_strtolower(smarty_modifier_get_data($_smarty_tpl->tpl_vars['brand']->value,"brand","name"), 'UTF-8');?>
-lastikleri" style="color: red">buradan</a> yapabilirsiniz</p>
                        </div>
                    </div>
                <?php
}
if ($__foreach_foo2_4_saved_item) {
$_smarty_tpl->tpl_vars['comments'] = $__foreach_foo2_4_saved_item;
}
?>

            </div>
            <div class="panel panel-default hidden">
                <div class="panel-header">Ürüne Yorum Yap</div>
                <div class="panel-body">
                    <form class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Adınız Soyadınız">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Yorum Başlığı">
                            </div>
                            <div class="form-group rating">
                                <span>Puan Ver</span>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> (0)
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea rows="4" class="form-control" placeholder="Yorumunuz"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Yorumu Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

        <div class="col-md-5" style="border: 1px solid #ccc; margin-top: 60px; background: #fff;">

            <div class="col-md-6" style="padding-top: 40px;">

                <div class="col-md-12 row">
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

        <div class="col-md-6 row" style="padding-top: 40px;">

            <div class="col-md-12">
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
        <div style="border: 2px solid #CF2029; margin-top: 20px; margin-left: 5px; position: relative;min-height: 400px;background: #fff;">
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
