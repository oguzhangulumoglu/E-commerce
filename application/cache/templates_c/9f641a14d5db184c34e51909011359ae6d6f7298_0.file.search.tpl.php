<?php
/* Smarty version 3.1.29, created on 2020-11-19 14:33:09
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/search.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb657f563c1f5_46356942',
  'file_dependency' => 
  array (
    '9f641a14d5db184c34e51909011359ae6d6f7298' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/search.tpl',
      1 => 1536996536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb657f563c1f5_46356942 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_data_image')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_image.php';
if (!is_callable('smarty_modifier_get_product')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_product.php';
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
if (!is_callable('smarty_modifier_comments')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.comments.php';
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_urunyili')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.urunyili.php';
if (!is_callable('smarty_modifier_get_amount')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_amount.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
        <span>
          <i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>
          arama sonuçları
        </span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Arama Sonuçları</li>
        </ol>
    </div>
</div>

<section class="content pb">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 hidden-xs sticky">
                <div class="search-result--populars">
                    <div class="title">Popüler Ürünler</div>
                    <div id="search-result--carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php
$_from = $_smarty_tpl->tpl_vars['populer_lastik']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_0_saved_item = isset($_smarty_tpl->tpl_vars['populer']) ? $_smarty_tpl->tpl_vars['populer'] : false;
$_smarty_tpl->tpl_vars['populer'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array());
$__foreach_foo_0_first = true;
$_smarty_tpl->tpl_vars['populer']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['populer']->value) {
$_smarty_tpl->tpl_vars['populer']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] = $__foreach_foo_0_first;
$__foreach_foo_0_first = false;
$__foreach_foo_0_saved_local_item = $_smarty_tpl->tpl_vars['populer'];
?>
                            <div class="item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] : null)) {?> active<?php }?>" style="padding: 20px 0">
                                <a href="<?php echo base_url("/genel/lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['populer']->value->uri;?>
" title="<?php echo $_smarty_tpl->tpl_vars['populer']->value->name;?>
">
                                    <img src="<?php if (smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['populer']->value->id)) {
echo base_url(smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['populer']->value->id));
} else {
echo base_url("assets/images/no_image.jpg");
}?>" style="max-height: 150px">
                                </a>
                            </div>
                            <?php
$_smarty_tpl->tpl_vars['populer'] = $__foreach_foo_0_saved_local_item;
}
if ($__foreach_foo_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = $__foreach_foo_0_saved;
}
if ($__foreach_foo_0_saved_item) {
$_smarty_tpl->tpl_vars['populer'] = $__foreach_foo_0_saved_item;
}
?>
                        </div>
                        <div class="carousel-navigation">
                            <a class="arrow" href="#search-result--carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <ol class="indicators">
                                <li data-target="#search-result--carousel" data-slide-to="0" class="active">
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li data-target="#search-result--carousel" data-slide-to="1">
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li data-target="#search-result--carousel" data-slide-to="2">
                                    <i class="fa fa-circle"></i>
                                </li>
                            </ol>
                            <a class="arrow" href="#search-result--carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="search-result--filters">
                    <div class="search-result--top">
                        <div class="title">Filtreler</div>
                        <a class="btn btn-clear" href="<?php echo base_url("main/search");?>
"><i class="fa fa-trash-o"></i> Temizle</a>
                    </div>

                    <form action="<?php echo base_url($_SERVER['REQUEST_URI']);?>
" method="get">

                        <div class="search--result--section" style="max-height: 300px; overflow: auto">
                            <div class="title">Markalar</div>
                            <a class="collapse-select <?php if (!$_GET['brand']) {?>selected<?php }?> brand" data-id="0" href="javascript:void(0)">
                                <input type="radio" name="brand" class="form-control" value="0" <?php if (!$_GET['brand']) {?>checked="checked" <?php }?>/>
                                TÜMÜ
                            </a>
                            <?php
$_from = $_smarty_tpl->tpl_vars['select_brand']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_1_saved_item = isset($_smarty_tpl->tpl_vars['brand']) ? $_smarty_tpl->tpl_vars['brand'] : false;
$_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brand']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
$__foreach_foo2_1_saved_local_item = $_smarty_tpl->tpl_vars['brand'];
?>
                                <?php if (smarty_modifier_get_product($_smarty_tpl->tpl_vars['brand']->value->id) > 0) {?>
                                    <a class="collapse-select <?php if ($_GET['brand'] == $_smarty_tpl->tpl_vars['brand']->value->id) {?>selected<?php }?> brand" data-id="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
" href="javascript:void(0)">
                                        <input type="radio" name="brand" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
" <?php if ($_GET['brand'] == $_smarty_tpl->tpl_vars['brand']->value->id) {?>checked="checked" <?php }?>/>
                                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['brand']->value->name, 'UTF-8');?>
 <span class="count"><?php echo smarty_modifier_get_product($_smarty_tpl->tpl_vars['brand']->value->id);?>
</span>
                                    </a>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['brand'] = $__foreach_foo2_1_saved_local_item;
}
if ($__foreach_foo2_1_saved_item) {
$_smarty_tpl->tpl_vars['brand'] = $__foreach_foo2_1_saved_item;
}
?>
                        </div>

                        <?php if ($_GET['brand']) {?>
                        <div class="search--result--section patern" style="max-height: 300px; overflow: auto">
                            <div class="title">Desenler</div>
                            <?php
$_from = $_smarty_tpl->tpl_vars['select_patern']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_2_saved_item = isset($_smarty_tpl->tpl_vars['patern']) ? $_smarty_tpl->tpl_vars['patern'] : false;
$_smarty_tpl->tpl_vars['patern'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['patern']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['patern']->value) {
$_smarty_tpl->tpl_vars['patern']->_loop = true;
$__foreach_foo2_2_saved_local_item = $_smarty_tpl->tpl_vars['patern'];
?>
                                <a class="collapse-select <?php if ($_GET['patern'] == $_smarty_tpl->tpl_vars['patern']->value->id) {?>selected<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['patern']->value->id;?>
" href="javascript:void(0)">
                                    <input type="radio" name="patern" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['patern']->value->id;?>
" <?php if ($_GET['patern'] == $_smarty_tpl->tpl_vars['patern']->value->id) {?>checked="checked" <?php }?>/>
                                    <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['patern']->value->paternName, 'UTF-8');?>

                                </a>
                            <?php
$_smarty_tpl->tpl_vars['patern'] = $__foreach_foo2_2_saved_local_item;
}
if ($__foreach_foo2_2_saved_item) {
$_smarty_tpl->tpl_vars['patern'] = $__foreach_foo2_2_saved_item;
}
?>
                        </div>
                        <?php } else { ?>
                        <div class="search--result--section patern" style="max-height: 300px; overflow: auto"></div>
                        <?php }?>

                        <div class="search--result--section">
                            <div class="title">Diğer özellikler</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Taban Genişliği</label>
                                    <select name="tire_width" class="form-control">
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
" <?php if ($_smarty_tpl->tpl_vars['tire_width']->value->id == $_GET['tire_width']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['tire_width']->value->name;?>
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

                                <div class="col-md-6">
                                    <label>Kesit Oranı</label>
                                    <select name="tire_rate" class="form-control">
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
" <?php if ($_smarty_tpl->tpl_vars['tire_rate']->value->id == $_GET['tire_rate']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['tire_rate']->value->name;?>
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

                                <div class="col-md-6">
                                    <label>Jant Çapı</label>
                                    <select name="rim_diameter" class="form-control">
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
" <?php if ($_smarty_tpl->tpl_vars['rim_diameter']->value->id == $_GET['rim_diameter']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['rim_diameter']->value->name;?>
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

                                <div class="col-md-6">
                                    <label>Hız Endeksi</label>
                                    <select name="speed_index" class="form-control">
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
" <?php if ($_smarty_tpl->tpl_vars['speed_index']->value->id == $_GET['speed_index']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['speed_index']->value->name;?>
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

                                <div class="col-md-6">
                                    <label>Mevsim</label>
                                    <select name="season" class="form-control">
                                        <option value="0">Tümü</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_season']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_7_saved_item = isset($_smarty_tpl->tpl_vars['season']) ? $_smarty_tpl->tpl_vars['season'] : false;
$_smarty_tpl->tpl_vars['season'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['season']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['season']->value) {
$_smarty_tpl->tpl_vars['season']->_loop = true;
$__foreach_foo2_7_saved_local_item = $_smarty_tpl->tpl_vars['season'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['season']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['season']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['season'] = $__foreach_foo2_7_saved_local_item;
}
if ($__foreach_foo2_7_saved_item) {
$_smarty_tpl->tpl_vars['season'] = $__foreach_foo2_7_saved_item;
}
?>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label>Araç Tipi</label>
                                    <select name="category" class="form-control">
                                        <option value="0">Tümü</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_8_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_foo2_8_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_foo2_8_saved_local_item;
}
if ($__foreach_foo2_8_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_foo2_8_saved_item;
}
?>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label>Şehir</label>
                                    <select name="city" class="form-control">
                                        <option value="0">Tüm Türkiye</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label>İlçe</label>
                                    <select name="state" class="form-control">
                                        <option value="0">Tüm İlçe</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="search--result--section">
                            <div class="title">Fiyat Aralığı</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>İtibaren</label>
                                    <input type="number" name="min_amount" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label>Kadar</label>
                                    <input type="number" name="max_amount" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="search-result--submit">
                            <button type="submit" class="btn btn-red"><i class="fa fa-check"></i> Uygula</button>
                        </div>

                    </form>

                </div>

                <div class="search-result--newsletter">
                    <div class="title">E-Bültene Kayıt Olun</div>
                    <p>Lastikkent.com’dan gelen yeni haberlerle bağlantı kurun ve paylaşın.</p>
                    <form action="<?php echo base_url("/main/addmailing");?>
" method="post">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-envelope-o"></i>
                          </span>
                            <input type="text" name="email" class="form-control" placeholder="E-Posta Adresiniz">
                        </div>

                        <button type="submit" class="btn btn-black">
                            <i class="fa fa-check"></i>
                            Kayıt Ol
                        </button>
                    </form>
                </div>
            </div>


            <div class="col-sm-9">
                <div class="wrapper">

                    <div class="page-header">
                        <h1>
                            <span class="black">Arama Sonuçları</span>
                        </h1>
                        <span class="page">Toplam
                            <strong><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</strong>
                            sayfa
                        </span>
                        <span class="count">
                            <strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</strong>
                            ürün bulundu
                        </span>
                    </div>

                    <?php
$_from = $_smarty_tpl->tpl_vars['searchs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_9_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_9_saved_item = isset($_smarty_tpl->tpl_vars['search']) ? $_smarty_tpl->tpl_vars['search'] : false;
$_smarty_tpl->tpl_vars['search'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array());
$__foreach_foo_9_first = true;
$_smarty_tpl->tpl_vars['search']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['search']->value) {
$_smarty_tpl->tpl_vars['search']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] = $__foreach_foo_9_first;
$__foreach_foo_9_first = false;
$__foreach_foo_9_saved_local_item = $_smarty_tpl->tpl_vars['search'];
?>

                        <?php if ($_smarty_tpl->tpl_vars['search']->value->company) {?>

                        <?php } else { ?>
                        <div class="search-item">
                            <div class="search-item--left">
                                <figure class="brand">
                                    <img src="<?php echo base_url(smarty_modifier_get_data($_smarty_tpl->tpl_vars['search']->value->brand,"brand","image"));?>
" class="img-responsive" style="display: inline-block;"/>
                                </figure>
                                <figure style="padding: 15px 0;">
                                    <img src="<?php if ($_smarty_tpl->tpl_vars['search']->value->id) {
if (smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['search']->value->id,"image")) {
echo base_url(smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['search']->value->id,"image"));
} else {
echo base_url("assets/images/no_image.jpg");
}
} else {
if (smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['search']->value->id,"image")) {
echo base_url(smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['search']->value->id,"image"));
} else {
echo base_url("assets/images/no_image.jpg");
}
}?>" style="max-width: 134px; max-height:130px">
                                </figure>
                                <div class="ratings">
                                    <div class="stars">
                                        <i class="fa fa-star <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['search']->value->id,"product_stars") == 1 || smarty_modifier_comments($_smarty_tpl->tpl_vars['search']->value->id,"product_stars") > 1) {?>active<?php }?>"></i>
                                        <i class="fa fa-star <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['search']->value->id,"product_stars") == 2 || smarty_modifier_comments($_smarty_tpl->tpl_vars['search']->value->id,"product_stars") > 2) {?>active<?php }?>"></i>
                                        <i class="fa fa-star <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['search']->value->id,"product_stars") == 3 || smarty_modifier_comments($_smarty_tpl->tpl_vars['search']->value->id,"product_stars") > 3) {?>active<?php }?>"></i>
                                        <i class="fa fa-star <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['search']->value->id,"product_stars") == 4 || smarty_modifier_comments($_smarty_tpl->tpl_vars['search']->value->id,"product_stars") > 4) {?>active<?php }?>"></i>
                                        <i class="fa fa-star <?php if (smarty_modifier_comments($_smarty_tpl->tpl_vars['search']->value->id,"product_stars") == 5) {?>active<?php }?>"></i>
                                        <span class="rating">(<?php echo smarty_modifier_comments($_smarty_tpl->tpl_vars['search']->value->id,"product_stars");?>
.00)</span>
                                    </div>
                                    <div class="count">(<?php echo smarty_modifier_comments($_smarty_tpl->tpl_vars['search']->value->pid,"product");?>
) Yorum</div>
                                </div>
                            </div>

                            <div class="search-item--main">
                                <div class="title"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['search']->value->name);?>
</div>

                                <ul class="facilities">
                                    <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Mevsim"><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['search']->value->season,"season","name");?>
</li>
                                    <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Lastik Yüksekliği"><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['search']->value->tire_width,"tire_width","name");?>
</li>
                                    <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Lastik Oranı"><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['search']->value->tire_rate,"tire_rate","name");?>
</li>
                                    <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Jant Çapı"><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['search']->value->rim_diameter,"rim_diameter","name");?>
</li>
                                    <?php if (smarty_modifier_urunyili($_smarty_tpl->tpl_vars['search']->value->pid)) {?><li data-toggle="tooltip" data-placement="top" title="" data-original-title="Ürün Yılı"><?php echo smarty_modifier_urunyili($_smarty_tpl->tpl_vars['search']->value->pid);?>
</li><?php }?>
                                </ul>

                                <ul class="facilities">
                                    <li class="facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebookda paylaş">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url("/genel/lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['search']->value->uri;?>
&t=<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['search']->value->name);?>
" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter paylaş">
                                        <a href="https://twitter.com/share?url=<?php echo base_url("/genel/lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['search']->value->uri;?>
&t=<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['search']->value->name);?>
" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="facilities-secondary">
                                    <li>
                                        <div class="label">Güvenlik</div>
                                        <div class="box">
                                            <img src="<?php echo base_url("assets/img/icon@security.png");?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['search']->value->guvenlik;?>
.0
                                        </div>
                                    </li>
                                    <li>
                                        <div class="label">Tasarruf</div>
                                        <div class="box">
                                            <img src="<?php echo base_url("assets/img/icon@oil.png");?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['search']->value->tasarruf;?>
.0
                                        </div>
                                    </li>
                                    <li>
                                        <div class="label">Konfor</div>
                                        <div class="box">
                                            <img src="<?php echo base_url("assets/img/icon@wheel.png");?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['search']->value->konfor;?>
.0
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="search-item--right">
                                <div class="company">
                                    <strong><?php echo smarty_modifier_get_data(smarty_modifier_get_amount($_smarty_tpl->tpl_vars['search']->value->id,"merchant"),"merchant","company");?>
</strong>
                                    <?php echo mb_strtoupper(smarty_modifier_get_data(smarty_modifier_get_data(smarty_modifier_get_amount($_smarty_tpl->tpl_vars['search']->value->id,"merchant"),"merchant","state"),"state","state"), 'UTF-8');?>
, <?php echo mb_strtoupper(smarty_modifier_get_data(smarty_modifier_get_data(smarty_modifier_get_amount($_smarty_tpl->tpl_vars['search']->value->id,"merchant"),"merchant","city"),"city","city"), 'UTF-8');?>

                                    <a href="<?php if (smarty_modifier_get_data(smarty_modifier_get_amount($_smarty_tpl->tpl_vars['search']->value->id,"merchant"),"merchant","id")) {
echo base_url("genel/bayi/");?>
/<?php echo smarty_modifier_get_data(smarty_modifier_get_amount($_smarty_tpl->tpl_vars['search']->value->id,"merchant"),"merchant","uri");
} else { ?>#<?php }?>">
                                        <i class="fa fa-comments-o"></i>
                                        (<?php echo smarty_modifier_comments(smarty_modifier_get_amount($_smarty_tpl->tpl_vars['search']->value->id,"merchant"),"merchant");?>
) Yorum
                                    </a>
                                </div>
                                <div class="rating">
                                    <i class="fa fa-heart"></i>
                                    <?php echo sprintf("%.2f",smarty_modifier_comments(smarty_modifier_get_amount($_smarty_tpl->tpl_vars['search']->value->id,"merchant"),"merchant_stars"));?>

                                </div>
                                <div class="price">
                                    <small>En Ucuz Fiyat</small>
                                    <?php echo number_format(smarty_modifier_get_amount($_smarty_tpl->tpl_vars['search']->value->id,"amount"),2,".",'');?>
 TL
                                </div>
                                <a href="<?php echo base_url("/genel/lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['search']->value->uri;?>
">Fiyatları Gör
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <?php }?>

                        <?php
$_smarty_tpl->tpl_vars['search'] = $__foreach_foo_9_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['search']->_loop) {
?>
                        <div class="col-md-12">
                            <div class="white-bg">
                                <div class="row">
                                    <span style="padding: 15px;display: inline-block;">Üzgünüm, herhangi bir ürün bulunamadı, lütfen daha sonra tekrar deneyiniz!</span>
                                </div>
                            </div>
                        </div>
                    <?php
}
if ($__foreach_foo_9_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = $__foreach_foo_9_saved;
}
if ($__foreach_foo_9_saved_item) {
$_smarty_tpl->tpl_vars['search'] = $__foreach_foo_9_saved_item;
}
?>

                    <?php $_smarty_tpl->tpl_vars['exp'] = new Smarty_Variable(explode("?",$_SERVER['REQUEST_URI']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'exp', 0);?>
                    <div class="text-center">
                        <ul class="pagination search-result-pagination">
                            <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                                <li><a href="<?php echo base_url("main/search");?>
/1<?php if ($_smarty_tpl->tpl_vars['exp']->value[1]) {?>?<?php echo $_smarty_tpl->tpl_vars['exp']->value[1];
}?>"> << </a></li>
                                <li><a href="<?php echo base_url("main/search");?>
/<?php if ($_smarty_tpl->tpl_vars['complete']->value <= 1) {?>1<?php } else {
echo $_smarty_tpl->tpl_vars['complete']->value-1;
}
if ($_smarty_tpl->tpl_vars['exp']->value[1]) {?>?<?php echo $_smarty_tpl->tpl_vars['exp']->value[1];
}?>"> < </a></li>
                            <?php }?>
                            <li><a href="<?php echo base_url("main/search");?>
/<?php echo $_smarty_tpl->tpl_vars['complete']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['exp']->value[1]) {?>?<?php echo $_smarty_tpl->tpl_vars['exp']->value[1];
}?>"> <?php echo $_smarty_tpl->tpl_vars['complete']->value;?>
 </a></li>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                                <li><a href="<?php echo base_url("main/search");?>
/<?php if ($_smarty_tpl->tpl_vars['page']->value <= $_smarty_tpl->tpl_vars['complete']->value+1) {
echo $_smarty_tpl->tpl_vars['page']->value;
} else {
echo $_smarty_tpl->tpl_vars['complete']->value+1;
}
if ($_smarty_tpl->tpl_vars['exp']->value[1]) {?>?<?php echo $_smarty_tpl->tpl_vars['exp']->value[1];
}?>"> > </a></li>
                                <li><a href="<?php echo base_url("main/search");?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;
if ($_smarty_tpl->tpl_vars['exp']->value[1]) {?>?<?php echo $_smarty_tpl->tpl_vars['exp']->value[1];
}?>"> >> </a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
            </div>

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

    </div>
</section>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
