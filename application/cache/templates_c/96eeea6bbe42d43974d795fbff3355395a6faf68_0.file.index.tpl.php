<?php
/* Smarty version 3.1.29, created on 2020-11-19 14:28:04
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb656c43b0890_39587072',
  'file_dependency' => 
  array (
    '96eeea6bbe42d43974d795fbff3355395a6faf68' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/index.tpl',
      1 => 1602777187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb656c43b0890_39587072 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
if (!is_callable('smarty_modifier_comments')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.comments.php';
if (!is_callable('smarty_modifier_get_data_image')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_image.php';
if (!is_callable('smarty_modifier_get_max_amount')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_max_amount.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section class="search-engine">
    <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#size" aria-controls="size" data-toggle="tab">Lastik Ebadına Göre</a>
            </li>
            <li>
                <a href="#model" aria-controls="model" data-toggle="tab">Hızlı Arama</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="size">
                <form class="row" method="get" action="<?php echo base_url("main/search");?>
">
                    <div class="col-sm-3 col-md-3 form-group">
                        <label for="">Marka</label>
                        <div>
                            <select name="brand" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['select_brand']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_0_saved_item = isset($_smarty_tpl->tpl_vars['brand']) ? $_smarty_tpl->tpl_vars['brand'] : false;
$_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brand']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
$__foreach_foo2_0_saved_local_item = $_smarty_tpl->tpl_vars['brand'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value->name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['brand'] = $__foreach_foo2_0_saved_local_item;
}
if ($__foreach_foo2_0_saved_item) {
$_smarty_tpl->tpl_vars['brand'] = $__foreach_foo2_0_saved_item;
}
?>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-2 form-group">
                        <label for="">Araç Tipi</label>
                        <div>
                            <select name="category" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['select_category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_1_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_foo2_1_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_foo2_1_saved_local_item;
}
if ($__foreach_foo2_1_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_foo2_1_saved_item;
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 form-group">
                        <label for="">Mevsim</label>
                        <div>
                            <select name="season" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['select_season']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_2_saved_item = isset($_smarty_tpl->tpl_vars['season']) ? $_smarty_tpl->tpl_vars['season'] : false;
$_smarty_tpl->tpl_vars['season'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['season']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['season']->value) {
$_smarty_tpl->tpl_vars['season']->_loop = true;
$__foreach_foo2_2_saved_local_item = $_smarty_tpl->tpl_vars['season'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['season']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['season']->value->name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['season'] = $__foreach_foo2_2_saved_local_item;
}
if ($__foreach_foo2_2_saved_item) {
$_smarty_tpl->tpl_vars['season'] = $__foreach_foo2_2_saved_item;
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 form-group">
                        <label for="">Desen</label>
                        <div>
                            <select name="patern" class="selectpicker" data-live-search="true" data-merchant="">
                                <option value="0">Tümü</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2 form-group">
                        <label for="">Taban Genişliği</label>
                        <div>
                            <select name="tire_width" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['select_tire_width']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_3_saved_item = isset($_smarty_tpl->tpl_vars['tire_width']) ? $_smarty_tpl->tpl_vars['tire_width'] : false;
$_smarty_tpl->tpl_vars['tire_width'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tire_width']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tire_width']->value) {
$_smarty_tpl->tpl_vars['tire_width']->_loop = true;
$__foreach_foo2_3_saved_local_item = $_smarty_tpl->tpl_vars['tire_width'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['tire_width']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['tire_width']->value->name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['tire_width'] = $__foreach_foo2_3_saved_local_item;
}
if ($__foreach_foo2_3_saved_item) {
$_smarty_tpl->tpl_vars['tire_width'] = $__foreach_foo2_3_saved_item;
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2 form-group">
                        <label for="">Kesit Oranı</label>
                        <div>
                            <select name="tire_rate" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['select_tire_rate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_4_saved_item = isset($_smarty_tpl->tpl_vars['tire_rate']) ? $_smarty_tpl->tpl_vars['tire_rate'] : false;
$_smarty_tpl->tpl_vars['tire_rate'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tire_rate']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tire_rate']->value) {
$_smarty_tpl->tpl_vars['tire_rate']->_loop = true;
$__foreach_foo2_4_saved_local_item = $_smarty_tpl->tpl_vars['tire_rate'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['tire_rate']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['tire_rate']->value->name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['tire_rate'] = $__foreach_foo2_4_saved_local_item;
}
if ($__foreach_foo2_4_saved_item) {
$_smarty_tpl->tpl_vars['tire_rate'] = $__foreach_foo2_4_saved_item;
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2 form-group">
                        <label for="">Jant Çapı</label>
                        <div>
                            <select name="rim_diameter" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['select_rim_diameter']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_5_saved_item = isset($_smarty_tpl->tpl_vars['rim_diameter']) ? $_smarty_tpl->tpl_vars['rim_diameter'] : false;
$_smarty_tpl->tpl_vars['rim_diameter'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['rim_diameter']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rim_diameter']->value) {
$_smarty_tpl->tpl_vars['rim_diameter']->_loop = true;
$__foreach_foo2_5_saved_local_item = $_smarty_tpl->tpl_vars['rim_diameter'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['rim_diameter']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['rim_diameter']->value->name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['rim_diameter'] = $__foreach_foo2_5_saved_local_item;
}
if ($__foreach_foo2_5_saved_item) {
$_smarty_tpl->tpl_vars['rim_diameter'] = $__foreach_foo2_5_saved_item;
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 form-group">
                        <label for="">Hız Endeksi</label>
                        <div>
                            <select name="speed_index" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['select_speed_index']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_6_saved_item = isset($_smarty_tpl->tpl_vars['speed_index']) ? $_smarty_tpl->tpl_vars['speed_index'] : false;
$_smarty_tpl->tpl_vars['speed_index'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['speed_index']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['speed_index']->value) {
$_smarty_tpl->tpl_vars['speed_index']->_loop = true;
$__foreach_foo2_6_saved_local_item = $_smarty_tpl->tpl_vars['speed_index'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['speed_index']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['speed_index']->value->name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['speed_index'] = $__foreach_foo2_6_saved_local_item;
}
if ($__foreach_foo2_6_saved_item) {
$_smarty_tpl->tpl_vars['speed_index'] = $__foreach_foo2_6_saved_item;
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 form-group">
                                <label for="">Şehir</label>
                                <div class="select">
                                    <select name="city" class="form-control">
                                        <option value="0">Tüm Türkiye</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 form-group">
                                <label for="">İlçe</label>
                                <div class="select">
                                    <select name="state" class="form-control">
                                        <option value="0">Tüm İlçe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 text-sm-center">
                                <button type="submit" class="btn btn-red"><i class="fa fa-check"></i> HEMEN BUL</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div role="tabpanel" class="tab-pane" id="model">
                <form class="row" method="get" action="<?php echo base_url("main/search");?>
">
                    <div class="col-sm-12 col-md-12">
                        <div class="row">
                            <div class="col-sm-8 col-md-8 form-group">
                                <label for="">Kelime İle Hızlı Arama</label>
                                <div class="select">
                                    <div class="easy-autocomplete" style="width: 750px!important">
                                        <input type="text" class="form-control" name="keywords" id="keyword" value="" placeholder="Lassa CFR-1502 Kış Lastiği" autocomplete="off" style="width: 750px!important">
                                        <div class="easy-autocomplete-container" id="eac-container-keywords">
                                            <ul style="display: none;"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-sm-center">
                                <button class="btn btn-red">ARA</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<section class="main-area">
<div class="container">
    <!-- SLIDER -->
    <div class="widget-title">
        <div class="controls">
            <a class="left" href="#carousel-id" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right" href="#carousel-id" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
        <div class="hero">EN POPÜLER BAYİLER</div>
        <a href="#" class="more hidden">TÜM BAYİLER
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <?php
$_from = $_smarty_tpl->tpl_vars['merchant']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_merchants_7_saved_item = isset($_smarty_tpl->tpl_vars['merchants']) ? $_smarty_tpl->tpl_vars['merchants'] : false;
$_smarty_tpl->tpl_vars['merchants'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['merchants']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['merchants']->value) {
$_smarty_tpl->tpl_vars['merchants']->_loop = true;
$__foreach_merchants_7_saved_local_item = $_smarty_tpl->tpl_vars['merchants'];
?>
                        <div class="col-sm-4 col-md-3">
                            <a class="slider-box" href="<?php echo base_url("genel/bayi/");?>
/<?php echo $_smarty_tpl->tpl_vars['merchants']->value->uri;?>
">
                                <div class="top">
                                    <img style="width: 70px; height: 70px" src="<?php if ($_smarty_tpl->tpl_vars['merchants']->value->logo) {
echo base_url(smarty_modifier_replace($_smarty_tpl->tpl_vars['merchants']->value->logo,".jpg","_thumb.jpg"));
} else {
echo base_url("assets/img/bayilogo1.png");
}?>">
                                    <div class="right">
                                        <div class="company"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['merchants']->value->company,true);?>
</div>
                                        <div class="address"><?php echo mb_substr(smarty_modifier_capitalize(smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['merchants']->value->id,"merchant","state"),"state","state")),0,12);?>
, <?php echo mb_substr(smarty_modifier_capitalize(smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['merchants']->value->id,"merchant","city"),"city","city")),0,13);?>
</div>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <div class="rating">
                                        <i class="fa fa-heart"></i>
                                        <?php echo sprintf("%.2f",smarty_modifier_comments($_smarty_tpl->tpl_vars['merchants']->value->id,"merchant_stars"));?>

                                    </div>
                            <span class="go">Mağaza Detayı
                              <i class="fa fa-angle-right"></i>
                            </span>
                                </div>
                            </a>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['merchants'] = $__foreach_merchants_7_saved_local_item;
}
if ($__foreach_merchants_7_saved_item) {
$_smarty_tpl->tpl_vars['merchants'] = $__foreach_merchants_7_saved_item;
}
?>
                </div>
            </div>
        </div>
    </div>
    <!-- #SLIDER -->

    <!-- SATIŞ NOKTALARI -->
    <div class="widget-title map-activaty">
        <div class="hero"><i class="fa fa-car"></i> KONUMUNUZA EN YAKIN MONTAJ VE SATIŞ NOKTALARI</div>
    </div>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs Map-tabs map-activaty">
        <li class="active"><a href="#map-tab-1" data-toggle="tab">TÜMÜ</a></li>
        <li><a href="#map-tab-2" data-toggle="tab">LASTİK BAYİLERİ</a></li>
        <li><a href="#map-tab-3" data-toggle="tab">AKÜ BAYİLERİ</a></li>
        <li><a href="#search" data-toggle="tab">BAYİ ARAMA MOTORU</a></li>
    </ul>

    <div id="harita-error"></div>
    <!-- Tab panes -->
    <div class="tab-content Map-tabs-content map-activaty">
        <div class="tab-pane active" id="map-tab-1">
            <div id="harita" style="width: 100%; height: 400px; background: #eee"></div>
        </div>
        <div class="tab-pane" id="map-tab-2">
            <div id="map-tire" style="width: 100%; height: 400px; background: #eee"></div>
        </div>
        <div class="tab-pane" id="map-tab-3">
            <div id="map-battery" style="width: 100%; height: 400px; background: #eee"></div>
        </div>
        <div class="tab-pane" id="search" style="background: #fff;border: 1px solid #f4f4f4;">

            <div class="col-md-6" style="border-right: 1px solid #ccc;">
                <div class="col-md-12">
                    <h2 style="padding: 15px 0; margin: 0">Lastik Bayisi Ara</h2>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo base_url("assets/img/lastikkent-lastik-bayi.png");?>
" class="img-responsive" alt=""/>
                </div>
                <div class="col-md-6">
                    <form action="<?php echo base_url("ile-gore-lastik-bayisi-ara");?>
" method="get">
                        <div class="form-group">
                            <label for="">ŞEHİR</label>
                            <select class="form-control" name="city" id="city"></select>
                        </div>
                        <div class="form-group">
                            <label for="">İLÇE</label>
                            <select class="form-control" name="state" id="state">
                                <option value="">TÜM İLÇELER</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-red btn-lg">HEMEN ARA</button>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-md-12">
                    <h2 style="padding: 15px 0; margin: 0">Akü Bayisi Ara</h2>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo base_url("assets/img/lastikkent-aku-bayi.png");?>
" class="img-responsive" alt=""/>
                </div>
                <div class="col-md-6">
                    <form action="<?php echo base_url("ile-gore-aku-bayisi-ara");?>
" method="get">
                        <div class="form-group">
                            <label for="">ŞEHİR</label>
                            <select class="form-control" name="city" id="city"></select>
                        </div>
                        <div class="form-group">
                            <label for="">İLÇE</label>
                            <select class="form-control" name="state" id="state">
                                <option value="">TÜM İLÇELER</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-red btn-lg">HEMEN ARA</button>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- #SATIŞ NOKTALARI -->

    <!--SLIDER-->
    <div class="widget-title-secondary">
        POPÜLER ÜRÜNLER
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
$__foreach_populer_8_saved_item = isset($_smarty_tpl->tpl_vars['populer']) ? $_smarty_tpl->tpl_vars['populer'] : false;
$_smarty_tpl->tpl_vars['populer'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['populer']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['populer']->value) {
$_smarty_tpl->tpl_vars['populer']->_loop = true;
$__foreach_populer_8_saved_local_item = $_smarty_tpl->tpl_vars['populer'];
?>
                        <div class="col-sm-4 col-md-3">
                            <a class="product-item" href="<?php echo base_url("/genel/lastik");?>
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
$_smarty_tpl->tpl_vars['populer'] = $__foreach_populer_8_saved_local_item;
}
if ($__foreach_populer_8_saved_item) {
$_smarty_tpl->tpl_vars['populer'] = $__foreach_populer_8_saved_item;
}
?>
                </div>
            </div>
        </div>
    </div>
    <!--#SLIDER-->

    <!-- INFO BOXES -->
    <div class="info-boxes">
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
                    <div class="title"><strong>DÜRÜST HİZMET</strong> Lastikkent yüzlerce bayi içinden size en uygun fiyat garantisini sunar.</div>
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
</div>
</section>

<?php if ($_GET['auth']) {?>
    <div class="modal fade bs-example-modal-sm" id="my-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <?php if ($_GET['auth'] == 1) {?>
                        <p>Mail adresiniz kaydedilmiştir. Bizi takip ettiğiniz için teşekkür ederiz.</p>
                    <?php } else { ?>
                        <p>Mail adresiniz güncellenmiştir. Bizi takip ettiğiniz için teşekkür ederiz.</p>
                    <?php }?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
