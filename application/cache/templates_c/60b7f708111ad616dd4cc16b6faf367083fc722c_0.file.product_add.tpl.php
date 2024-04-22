<?php
/* Smarty version 3.1.29, created on 2020-12-12 23:32:24
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/product_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fd528d8a63243_26907968',
  'file_dependency' => 
  array (
    '60b7f708111ad616dd4cc16b6faf367083fc722c' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/product_add.tpl',
      1 => 1523696987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5fd528d8a63243_26907968 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_data_car')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_car.php';
if (!is_callable('smarty_modifier_get_data_car_num')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_car_num.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="<?php echo base_url("admin/product");?>
"> Ürün</a></li>
                <li class="active">Ekle / Düzenle</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Ürün</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Ekle / Düzenle</div>
                    <?php if ($_smarty_tpl->tpl_vars['errorCode']->value == 2) {?>
                        <div class="alert bg-primary" role="alert">
                            <svg class="glyph stroked empty-message"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-empty-message"></use></svg> <?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>
<a href="<?php echo base_url("admin/add/management");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                    <?php }?>
                    <div class="panel-body">
                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ürün Adı</label>
                                    <input class="form-control" type="text" name="name" value="<?php if ($_smarty_tpl->tpl_vars['name']->value) {
echo $_smarty_tpl->tpl_vars['name']->value;
}
if ($_POST['name']) {
echo $_POST['name'];
}?>" placeholder="Ürün Adı">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ürün Description</label>
                                    <input class="form-control" type="text" name="description" value="<?php if ($_smarty_tpl->tpl_vars['description']->value) {
echo $_smarty_tpl->tpl_vars['description']->value;
}
if ($_POST['description']) {
echo $_POST['description'];
}?>" placeholder="Ürün Description">
                                </div>
                                <div class="form-group">
                                    <label>Ürün Marka</label>
                                    <select class="form-control" name="brand">
                                        <option value="0">Seçiniz</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_brand']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_brands_0_saved_item = isset($_smarty_tpl->tpl_vars['brands']) ? $_smarty_tpl->tpl_vars['brands'] : false;
$_smarty_tpl->tpl_vars['brands'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brands']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brands']->value) {
$_smarty_tpl->tpl_vars['brands']->_loop = true;
$__foreach_brands_0_saved_local_item = $_smarty_tpl->tpl_vars['brands'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['brands']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['brand']->value == $_smarty_tpl->tpl_vars['brands']->value->id) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['brands']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_0_saved_local_item;
}
if ($__foreach_brands_0_saved_item) {
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_0_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ürün Desen</label>
                                    <select class="form-control" name="patern">
                                        <option value="0">Seçiniz</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_patern']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_paterns_1_saved_item = isset($_smarty_tpl->tpl_vars['paterns']) ? $_smarty_tpl->tpl_vars['paterns'] : false;
$_smarty_tpl->tpl_vars['paterns'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['paterns']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['paterns']->value) {
$_smarty_tpl->tpl_vars['paterns']->_loop = true;
$__foreach_paterns_1_saved_local_item = $_smarty_tpl->tpl_vars['paterns'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['paterns']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['patern']->value == $_smarty_tpl->tpl_vars['paterns']->value->id) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['paterns']->value->paternName;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['paterns'] = $__foreach_paterns_1_saved_local_item;
}
if ($__foreach_paterns_1_saved_item) {
$_smarty_tpl->tpl_vars['paterns'] = $__foreach_paterns_1_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Sezon</label>
                                    <select class="form-control" name="season">
                                        <option value="0">Seçiniz</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_season']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_seasons_2_saved_item = isset($_smarty_tpl->tpl_vars['seasons']) ? $_smarty_tpl->tpl_vars['seasons'] : false;
$_smarty_tpl->tpl_vars['seasons'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['seasons']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['seasons']->value) {
$_smarty_tpl->tpl_vars['seasons']->_loop = true;
$__foreach_seasons_2_saved_local_item = $_smarty_tpl->tpl_vars['seasons'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['seasons']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['season']->value == $_smarty_tpl->tpl_vars['seasons']->value->id) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['seasons']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['seasons'] = $__foreach_seasons_2_saved_local_item;
}
if ($__foreach_seasons_2_saved_item) {
$_smarty_tpl->tpl_vars['seasons'] = $__foreach_seasons_2_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" name="category">
                                        <option value="0">Seçiniz</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_categorys_3_saved_item = isset($_smarty_tpl->tpl_vars['categorys']) ? $_smarty_tpl->tpl_vars['categorys'] : false;
$_smarty_tpl->tpl_vars['categorys'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['categorys']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categorys']->value) {
$_smarty_tpl->tpl_vars['categorys']->_loop = true;
$__foreach_categorys_3_saved_local_item = $_smarty_tpl->tpl_vars['categorys'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['categorys']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value == $_smarty_tpl->tpl_vars['categorys']->value->id) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['categorys']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['categorys'] = $__foreach_categorys_3_saved_local_item;
}
if ($__foreach_categorys_3_saved_item) {
$_smarty_tpl->tpl_vars['categorys'] = $__foreach_categorys_3_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="form-group col-md-12" style="border: 1px solid #f17676;;padding: 10px 5px;border-radius: 5px;background: #fbf0f0;">
                                    <div class="col-md-12 row"><h5>Avrupa Etiketi</h5></div>
                                    <div class="col-md-4 row">
                                        <label>Yakıt</label>
                                        <select class="form-control" name="yakit">
                                            <option value="">Seçiniz</option>
                                            <option value="A" <?php if ($_smarty_tpl->tpl_vars['yakit']->value == "A") {?>selected="selected"<?php }?>>A</option>
                                            <option value="B" <?php if ($_smarty_tpl->tpl_vars['yakit']->value == "B") {?>selected="selected"<?php }?>>B</option>
                                            <option value="C" <?php if ($_smarty_tpl->tpl_vars['yakit']->value == "C") {?>selected="selected"<?php }?>>C</option>
                                            <option value="D" <?php if ($_smarty_tpl->tpl_vars['yakit']->value == "D") {?>selected="selected"<?php }?>>D</option>
                                            <option value="E" <?php if ($_smarty_tpl->tpl_vars['yakit']->value == "E") {?>selected="selected"<?php }?>>E</option>
                                            <option value="F" <?php if ($_smarty_tpl->tpl_vars['yakit']->value == "F") {?>selected="selected"<?php }?>>F</option>
                                            <option value="G" <?php if ($_smarty_tpl->tpl_vars['yakit']->value == "G") {?>selected="selected"<?php }?>>G</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Islak Zemin</label>
                                        <select class="form-control" name="islak">
                                            <option value="">Seçiniz</option>
                                            <option value="A" <?php if ($_smarty_tpl->tpl_vars['islak']->value == "A") {?>selected="selected"<?php }?>>A</option>
                                            <option value="B" <?php if ($_smarty_tpl->tpl_vars['islak']->value == "B") {?>selected="selected"<?php }?>>B</option>
                                            <option value="C" <?php if ($_smarty_tpl->tpl_vars['islak']->value == "C") {?>selected="selected"<?php }?>>C</option>
                                            <option value="D" <?php if ($_smarty_tpl->tpl_vars['islak']->value == "D") {?>selected="selected"<?php }?>>D</option>
                                            <option value="E" <?php if ($_smarty_tpl->tpl_vars['islak']->value == "E") {?>selected="selected"<?php }?>>E</option>
                                            <option value="F" <?php if ($_smarty_tpl->tpl_vars['islak']->value == "F") {?>selected="selected"<?php }?>>F</option>
                                            <option value="G" <?php if ($_smarty_tpl->tpl_vars['islak']->value == "G") {?>selected="selected"<?php }?>>G</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>SES</label>
                                        <input class="form-control" type="text" name="ses" value="<?php if ($_smarty_tpl->tpl_vars['ses']->value) {
echo $_smarty_tpl->tpl_vars['ses']->value;
}
if ($_POST['ses']) {
echo $_POST['ses'];
}?>" placeholder="SES Db Cinsinden">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="col-md-4 row">
                                        <label>Güvenlik</label>
                                        <select class="form-control" name="guvenlik">
                                            <option value="0">Seçiniz</option>
                                            <option value="-" <?php if ($_smarty_tpl->tpl_vars['guvenlik']->value == "-") {?>selected<?php }?>>Belirlenmemiş</option>
                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['guvenlik']->value == 1) {?>selected<?php }?>>1</option>
                                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['guvenlik']->value == 2) {?>selected<?php }?>>2</option>
                                            <option value="3" <?php if ($_smarty_tpl->tpl_vars['guvenlik']->value == 3) {?>selected<?php }?>>3</option>
                                            <option value="4" <?php if ($_smarty_tpl->tpl_vars['guvenlik']->value == 4) {?>selected<?php }?>>4</option>
                                            <option value="5" <?php if ($_smarty_tpl->tpl_vars['guvenlik']->value == 5) {?>selected<?php }?>>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tasarruf</label>
                                        <select class="form-control" name="tasarruf">
                                            <option value="0">Seçiniz</option>
                                            <option value="-" <?php if ($_smarty_tpl->tpl_vars['tasarruf']->value == "-") {?>selected<?php }?>>Belirlenmemiş</option>
                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['tasarruf']->value == 1) {?>selected<?php }?>>1</option>
                                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['tasarruf']->value == 2) {?>selected<?php }?>>2</option>
                                            <option value="3" <?php if ($_smarty_tpl->tpl_vars['tasarruf']->value == 3) {?>selected<?php }?>>3</option>
                                            <option value="4" <?php if ($_smarty_tpl->tpl_vars['tasarruf']->value == 4) {?>selected<?php }?>>4</option>
                                            <option value="5" <?php if ($_smarty_tpl->tpl_vars['tasarruf']->value == 5) {?>selected<?php }?>>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Konfor</label>
                                        <select class="form-control" name="konfor">
                                            <option value="0">Seçiniz</option>
                                            <option value="-" <?php if ($_smarty_tpl->tpl_vars['konfor']->value == "-") {?>selected<?php }?>>Belirlenmemiş</option>
                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['konfor']->value == 1) {?>selected<?php }?>>1</option>
                                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['konfor']->value == 2) {?>selected<?php }?>>2</option>
                                            <option value="3" <?php if ($_smarty_tpl->tpl_vars['konfor']->value == 3) {?>selected<?php }?>>3</option>
                                            <option value="4" <?php if ($_smarty_tpl->tpl_vars['konfor']->value == 4) {?>selected<?php }?>>4</option>
                                            <option value="5" <?php if ($_smarty_tpl->tpl_vars['konfor']->value == 5) {?>selected<?php }?>>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ürün Keywords</label>
                                    <input class="form-control" type="text" name="keywords" value="<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {
echo $_smarty_tpl->tpl_vars['keywords']->value;
}
if ($_POST['keywords']) {
echo $_POST['keywords'];
}?>" placeholder="Ürün Keywords">
                                </div>
                                <div class="form-group">
                                    <label>Lastik Genişlik</label>
                                    <select class="form-control" name="tire_width">
                                        <option value="0">Seçiniz</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_tire_width']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tire_widths_4_saved_item = isset($_smarty_tpl->tpl_vars['tire_widths']) ? $_smarty_tpl->tpl_vars['tire_widths'] : false;
$_smarty_tpl->tpl_vars['tire_widths'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tire_widths']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tire_widths']->value) {
$_smarty_tpl->tpl_vars['tire_widths']->_loop = true;
$__foreach_tire_widths_4_saved_local_item = $_smarty_tpl->tpl_vars['tire_widths'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['tire_widths']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['tire_width']->value == $_smarty_tpl->tpl_vars['tire_widths']->value->id) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tire_widths']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['tire_widths'] = $__foreach_tire_widths_4_saved_local_item;
}
if ($__foreach_tire_widths_4_saved_item) {
$_smarty_tpl->tpl_vars['tire_widths'] = $__foreach_tire_widths_4_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Lastik Oran</label>
                                    <select class="form-control" name="tire_rate">
                                        <option value="0">Seçiniz</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_tire_rate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tire_rates_5_saved_item = isset($_smarty_tpl->tpl_vars['tire_rates']) ? $_smarty_tpl->tpl_vars['tire_rates'] : false;
$_smarty_tpl->tpl_vars['tire_rates'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tire_rates']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tire_rates']->value) {
$_smarty_tpl->tpl_vars['tire_rates']->_loop = true;
$__foreach_tire_rates_5_saved_local_item = $_smarty_tpl->tpl_vars['tire_rates'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['tire_rates']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['tire_rate']->value == $_smarty_tpl->tpl_vars['tire_rates']->value->id) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tire_rates']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['tire_rates'] = $__foreach_tire_rates_5_saved_local_item;
}
if ($__foreach_tire_rates_5_saved_item) {
$_smarty_tpl->tpl_vars['tire_rates'] = $__foreach_tire_rates_5_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jant Çapı</label>
                                    <select class="form-control" name="rim_diameter">
                                        <option value="0">Seçiniz</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_rim_diameter']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_rim_diameters_6_saved_item = isset($_smarty_tpl->tpl_vars['rim_diameters']) ? $_smarty_tpl->tpl_vars['rim_diameters'] : false;
$_smarty_tpl->tpl_vars['rim_diameters'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['rim_diameters']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rim_diameters']->value) {
$_smarty_tpl->tpl_vars['rim_diameters']->_loop = true;
$__foreach_rim_diameters_6_saved_local_item = $_smarty_tpl->tpl_vars['rim_diameters'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['rim_diameters']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['rim_diameter']->value == $_smarty_tpl->tpl_vars['rim_diameters']->value->id) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['rim_diameters']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['rim_diameters'] = $__foreach_rim_diameters_6_saved_local_item;
}
if ($__foreach_rim_diameters_6_saved_item) {
$_smarty_tpl->tpl_vars['rim_diameters'] = $__foreach_rim_diameters_6_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ağırlık İndexı</label>
                                    <input class="form-control" type="text" name="weight_index" value="<?php if ($_smarty_tpl->tpl_vars['weight_index']->value) {
echo $_smarty_tpl->tpl_vars['weight_index']->value;
}
if ($_POST['weight_index']) {
echo $_POST['weight_index'];
}?>" placeholder="Ağırlık indexi">
                                </div>
                                <div class="form-group">
                                    <label>Hız indexi</label>
                                    <select class="form-control" name="speed_index">
                                        <option value="0">Seçiniz</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_speed_index']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_speed_indexs_7_saved_item = isset($_smarty_tpl->tpl_vars['speed_indexs']) ? $_smarty_tpl->tpl_vars['speed_indexs'] : false;
$_smarty_tpl->tpl_vars['speed_indexs'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['speed_indexs']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['speed_indexs']->value) {
$_smarty_tpl->tpl_vars['speed_indexs']->_loop = true;
$__foreach_speed_indexs_7_saved_local_item = $_smarty_tpl->tpl_vars['speed_indexs'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['speed_indexs']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['speed_index']->value == $_smarty_tpl->tpl_vars['speed_indexs']->value->id) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['speed_indexs']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['speed_indexs'] = $__foreach_speed_indexs_7_saved_local_item;
}
if ($__foreach_speed_indexs_7_saved_item) {
$_smarty_tpl->tpl_vars['speed_indexs'] = $__foreach_speed_indexs_7_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Run flat mi ? </label>
                                    <select class="form-control" name="run_flat">
                                        <option value="no" <?php if ($_smarty_tpl->tpl_vars['run_flat']->value == "no") {?>selected="selected"<?php }?>>Hayır</option>
                                        <option value="yes" <?php if ($_smarty_tpl->tpl_vars['run_flat']->value == "yes") {?>selected="selected"<?php }?>>Evet</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Extra LOT (XL) mı?</label>
                                    <select class="form-control" name="extra_lot">
                                        <option value="no" <?php if ($_smarty_tpl->tpl_vars['extra_lot']->value == "no") {?>selected="selected"<?php }?>>Hayır</option>
                                        <option value="yes" <?php if ($_smarty_tpl->tpl_vars['extra_lot']->value == "yes") {?>selected="selected"<?php }?>>Evet</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Resim Yükle (<span style="font-size:12px">CTRL basarak çoklu resim seçiniz</span>)</label>
                                    <input class="form-control" type="file" name="file[]" multiple>
                                </div>
                                <div class="col-md-4 hidden">
                                    <div class="form-group">
                                        <label>Ürün Yılı</label>
                                        <input class="form-control" type="text" name="year" value="<?php if ($_smarty_tpl->tpl_vars['year']->value) {
echo $_smarty_tpl->tpl_vars['year']->value;
}?>" placeholder="Ürün Yılı">
                                    </div>
                                </div>
                                <div class="col-md-4 row">
                                    <div class="form-group">
                                        <label>Fiyatı</label>
                                        <input class="form-control" type="text" name="myamount" value="<?php if ($_smarty_tpl->tpl_vars['myamount']->value) {
echo $_smarty_tpl->tpl_vars['myamount']->value;
}?>" placeholder="Lastikkent Fiyatı">
                                    </div>
                                </div>
                                <div class="col-md-3 row">
                                    <div class="form-group">
                                        <label>Sıra</label>
                                        <input class="form-control" type="number" name="popular" value="<?php if ($_smarty_tpl->tpl_vars['popular']->value) {
echo $_smarty_tpl->tpl_vars['popular']->value;
}?>" placeholder="Lastikkent Populer Lastik Sıra">
                                    </div>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['select_img']->value) {?>
                                <div class="col-md-12">
                                    <h3>Güncel Resimler</h3>
                                </div>
                                <div class="col-md-12">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['select_img']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_img_8_saved_item = isset($_smarty_tpl->tpl_vars['img']) ? $_smarty_tpl->tpl_vars['img'] : false;
$_smarty_tpl->tpl_vars['img'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['img']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
$__foreach_img_8_saved_local_item = $_smarty_tpl->tpl_vars['img'];
?>
                                        <div class="col-md-2">
                                            <img src="/<?php echo $_smarty_tpl->tpl_vars['img']->value->image;?>
" alt="" class="img-responsive"/>
                                            <div>
                                                <a href="<?php echo base_url("admin/delete/product_img");?>
/<?php echo $_smarty_tpl->tpl_vars['img']->value->id;?>
" style="display: block" class="text-center">Resmi Sil</a>
                                            </div>
                                        </div>
                                    <?php
$_smarty_tpl->tpl_vars['img'] = $__foreach_img_8_saved_local_item;
}
if ($__foreach_img_8_saved_item) {
$_smarty_tpl->tpl_vars['img'] = $__foreach_img_8_saved_item;
}
?>
                                </div>
                            <?php }?>
                            <div class="col-md-12" id="select_this_arac_hide">
                                <div class="form-group">
                                    <label>Araç Seçin</label>
                                    <select class="form-control selectpicker" style="height: 250px" name="car[]" multiple>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_car']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_car_9_saved_item = isset($_smarty_tpl->tpl_vars['car']) ? $_smarty_tpl->tpl_vars['car'] : false;
$_smarty_tpl->tpl_vars['car'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['car']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->_loop = true;
$__foreach_car_9_saved_local_item = $_smarty_tpl->tpl_vars['car'];
?>
                                            <optgroup label="<?php echo $_smarty_tpl->tpl_vars['car']->value->title;?>
">
                                                <?php
$_from = smarty_modifier_get_data_car($_smarty_tpl->tpl_vars['car']->value->id);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cars_10_saved_item = isset($_smarty_tpl->tpl_vars['cars']) ? $_smarty_tpl->tpl_vars['cars'] : false;
$_smarty_tpl->tpl_vars['cars'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cars']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cars']->value) {
$_smarty_tpl->tpl_vars['cars']->_loop = true;
$__foreach_cars_10_saved_local_item = $_smarty_tpl->tpl_vars['cars'];
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cars']->value->id;?>
" <?php if (smarty_modifier_get_data_car_num($_smarty_tpl->tpl_vars['cars']->value->id,$_smarty_tpl->tpl_vars['id']->value) > 0) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cars']->value->title;?>
</option>
                                                <?php
$_smarty_tpl->tpl_vars['cars'] = $__foreach_cars_10_saved_local_item;
}
if ($__foreach_cars_10_saved_item) {
$_smarty_tpl->tpl_vars['cars'] = $__foreach_cars_10_saved_item;
}
?>
                                            </optgroup>
                                        <?php
$_smarty_tpl->tpl_vars['car'] = $__foreach_car_9_saved_local_item;
}
if ($__foreach_car_9_saved_item) {
$_smarty_tpl->tpl_vars['car'] = $__foreach_car_9_saved_item;
}
?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ürün Açıklama</label>
                                    <textarea class="form-control editor" name="property" rows="16"><?php if ($_POST['property']) {
echo $_POST['property'];
}
if ($_smarty_tpl->tpl_vars['property']->value) {
echo $_smarty_tpl->tpl_vars['property']->value;
}?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ürün Kalite (** Sizinde yorumunuz olabilir)</label>
                                    <textarea class="form-control editor" name="grade" rows="6"><?php if ($_POST['grade']) {
echo $_POST['grade'];
}
if ($_smarty_tpl->tpl_vars['grade']->value) {
echo $_smarty_tpl->tpl_vars['grade']->value;
}?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="margin-top: 25px">Kaydet / Güncelle</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
