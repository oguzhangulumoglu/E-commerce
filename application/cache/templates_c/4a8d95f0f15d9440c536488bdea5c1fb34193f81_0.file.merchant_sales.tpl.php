<?php
/* Smarty version 3.1.29, created on 2020-11-19 15:21:06
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/merchant_sales.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb66332d71ab9_56769923',
  'file_dependency' => 
  array (
    '4a8d95f0f15d9440c536488bdea5c1fb34193f81' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/merchant_sales.tpl',
      1 => 1520072703,
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
function content_5fb66332d71ab9_56769923 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_cat_num')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.cat_num.php';
if (!is_callable('smarty_modifier_get_image')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_image.php';
if (!is_callable('smarty_modifier_get_data_img')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_img.php';
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


            <div class="col-sm-8 col-md-9">
                <div class="wrapper">
                    <div class="vendor-header">
                        <h1><a href="<?php echo base_url("/genel/bayi/");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
" style="color: #CF2029"><?php echo $_smarty_tpl->tpl_vars['company']->value;?>
</a></h1>
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
                        <div class="col-md-7">
                            <span>Mağazanın Ürünleri</span>
                        </div>
                        <div class="col-md-5">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
                                <li>Online Mağaza</li>
                                <li class="active"><?php echo $_smarty_tpl->tpl_vars['productCategory']->value;?>
</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="cart-list-body">

                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="col-md-1 cart-list-body-title">
                                    Sırala
                                </div>
                                <div class="col-md-4">
                                    <form action="https://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
" name="sort" method="get">
                                        <select name="sort" id="sort" class="form-control">
                                            <option <?php if ($_GET['sort'] == "title.asc") {?> selected<?php }?> value="title.asc">Ad</option>
                                            <option <?php if ($_GET['sort'] == "price.asc") {?> selected<?php }?> value="price.asc">Fiyat Artan</option>
                                            <option <?php if ($_GET['sort'] == "price.desc") {?> selected<?php }?> value="price.desc">Fiyat Azalan</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 pull-right">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-1 cart-list-body-title">
                                    Göster
                                </div>
                                <div class="col-md-4">
                                    <form action="https://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
" name="show" method="get">
                                        <select name="show" id="show" class="form-control">
                                            <option <?php if ($_GET['show'] == "12") {?> selected<?php }?> value="12">12</option>
                                            <option <?php if ($_GET['show'] == "24") {?> selected<?php }?> value="24">24</option>
                                            <option <?php if ($_GET['show'] == "48") {?> selected<?php }?> value="48">48</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-md-1 cart-list-body-title" style="text-align: left">
                                    Ürün
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="cart-list-body-list">
                        <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_0_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_0_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>

                        <article class="col-md-12">
                            <?php if (!$_smarty_tpl->tpl_vars['product']->value->stock) {?>
                            <div class="col-md-3 cart-list-body-list-image">
                                <?php if ($_smarty_tpl->tpl_vars['product']->value->knock_off == "yes") {?>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value->knock_off_type == "yuzde") {?>
                                    <span class="discount"> %<?php echo $_smarty_tpl->tpl_vars['product']->value->knock_off_price;?>
 </span>
                                    <?php }?>
                                <?php }?>
                                <span class="category-name"><?php echo smarty_modifier_cat_num($_smarty_tpl->tpl_vars['product']->value->e_category,$_smarty_tpl->tpl_vars['product']->value->userID,"name");?>
</span>
                                <img src="<?php echo base_url(smarty_modifier_get_image($_smarty_tpl->tpl_vars['product']->value->id,"uri"));?>
" style="max-height: 200px" class="img-responsive" alt=""/>
                            </div>
                            <div class="col-md-9">
                                <div class="cart-sub-body-list-title">
                                    <h2>
                                        <a href="<?php echo base_url("/main/urunler");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value->uri;?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['product']->value->title);?>
</a>
                                    </h2>
                                    <div class="cart-sub-title">
                                        <span><?php echo smarty_modifier_cat_num($_smarty_tpl->tpl_vars['product']->value->e_category,$_smarty_tpl->tpl_vars['product']->value->userID,"name");?>
</span>   /   Ürün Kodu: <?php echo $_smarty_tpl->tpl_vars['product']->value->productCode;?>

                                    </div>
                                </div>
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
                                    <ul class="rating">
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <p><?php echo mb_substr($_smarty_tpl->tpl_vars['product']->value->short_property,0,170);?>
..</p>
                                </div>
                                <a class="btn btn-red" href="#">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a class="btn btn-red" href="#">
                                    <i class="fa fa-bell"></i>
                                </a>
                                <a class="btn btn-red" href="javascript:void(0)" onclick="addCartModule('<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
','2', '<?php echo $_smarty_tpl->tpl_vars['product']->value->userID;?>
');">
                                    SEPETE EKLE
                                </a>
                                <a class="btn btn-red pull-right" href="<?php echo base_url("/main/urunler");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value->uri;?>
">
                                    ÜRÜN DETAYI <i class="fa fa-angle-double-right"></i>
                                </a>
                            </div>
                            <?php } else { ?>
                            <div class="col-md-3 cart-list-body-list-image">
                                <span class="category-name"><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->brand,"brand","name");?>
</span>
                                <img src="<?php if (smarty_modifier_get_data_img($_smarty_tpl->tpl_vars['product']->value->pid,"product_img","image")) {
echo base_url(smarty_modifier_get_data_img($_smarty_tpl->tpl_vars['product']->value->pid,"product_img","image"));
} else {
echo base_url("assets/images/no_image.jpg");
}?>" style="max-height: 200px" class="img-responsive" alt=""/>
                            </div>
                            <div class="col-md-9">
                                <div class="cart-sub-body-list-title">
                                    <h2>
                                        <a href="<?php echo base_url("/bayide-lastik/");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value->uri;?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['product']->value->name);?>
</a>
                                    </h2>
                                    <div class="cart-sub-title">
                                        <span><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->brand,"brand","name");?>
</span>   /   Ürün Kodu: <?php echo mb_strtoupper(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->brand,"brand","name"), 'UTF-8');
echo $_smarty_tpl->tpl_vars['product']->value->pid;?>

                                    </div>
                                </div>
                                <div class="cart-sub-body-list-price">
                                    <span class="new-price">₺<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->amount,2,".",'');?>
</span>
                                    <ul class="rating">
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <p><?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->property),0,170);?>
..</p>
                                </div>
                                <a class="btn btn-red" href="#">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a class="btn btn-red" href="#">
                                    <i class="fa fa-bell"></i>
                                </a>
                                <a class="btn btn-red" href="javascript:void(0)" onclick="addCartModule('<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
', '1', '<?php echo $_smarty_tpl->tpl_vars['product']->value->mid;?>
');">
                                    SEPETE EKLE
                                </a>
                                <a class="btn btn-red" href="<?php echo base_url("/bayide-lastik/");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value->uri;?>
" target="_blank">
                                    ÜRÜN DETAYI
                                </a>
                            </div>
                            <?php }?>
                        </article>

                        <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['product']->_loop) {
?>
                            <article class="col-md-12">
                                <div>Üzgünüm, herhangi bir ürün bulunamadı. Daha sonra yeniden deneyiniz.</div>
                            </article>
                        <?php
}
if ($__foreach_product_0_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_item;
}
?>
                        <div class="clearfix"></div>
                    </div>

                    <ul class="page">
                        <?php
$_smarty_tpl->tpl_vars['paged'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['paged']->step = 1;$_smarty_tpl->tpl_vars['paged']->total = (int) ceil(($_smarty_tpl->tpl_vars['paged']->step > 0 ? $_smarty_tpl->tpl_vars['totalPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['totalPage']->value)+1)/abs($_smarty_tpl->tpl_vars['paged']->step));
if ($_smarty_tpl->tpl_vars['paged']->total > 0) {
for ($_smarty_tpl->tpl_vars['paged']->value = 1, $_smarty_tpl->tpl_vars['paged']->iteration = 1;$_smarty_tpl->tpl_vars['paged']->iteration <= $_smarty_tpl->tpl_vars['paged']->total;$_smarty_tpl->tpl_vars['paged']->value += $_smarty_tpl->tpl_vars['paged']->step, $_smarty_tpl->tpl_vars['paged']->iteration++) {
$_smarty_tpl->tpl_vars['paged']->first = $_smarty_tpl->tpl_vars['paged']->iteration == 1;$_smarty_tpl->tpl_vars['paged']->last = $_smarty_tpl->tpl_vars['paged']->iteration == $_smarty_tpl->tpl_vars['paged']->total;?>
                            <li><a href="<?php echo base_url("/bayi");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['paged']->value;
if ($_smarty_tpl->tpl_vars['req']->value) {?>?<?php echo $_smarty_tpl->tpl_vars['req']->value;
}?>" <?php if ($_smarty_tpl->tpl_vars['paged']->value == $_smarty_tpl->tpl_vars['page']->value) {?> class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['paged']->value;?>
</a></li>
                        <?php }
}
?>

                    </ul>

                    <div class="clearfix"></div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
