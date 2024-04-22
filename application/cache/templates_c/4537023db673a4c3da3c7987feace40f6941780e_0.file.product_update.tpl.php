<?php
/* Smarty version 3.1.29, created on 2021-05-20 19:10:00
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/product_update.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60a689d88e0a35_70818347',
  'file_dependency' => 
  array (
    '4537023db673a4c3da3c7987feace40f6941780e' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/product_update.tpl',
      1 => 1505561543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60a689d88e0a35_70818347 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
if (!is_callable('smarty_modifier_get_data_session')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_session.php';
if (!is_callable('smarty_modifier_get_max_amount')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_max_amount.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>bayi giriş</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Bayi Profili</li>
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
                <div class="panel panel-default">
                    <div class="panel-body">
                        <figure>
                            <img src="<?php if ($_smarty_tpl->tpl_vars['logo']->value) {
echo base_url($_smarty_tpl->tpl_vars['logo']->value);
} else {
echo base_url("assets/img/bayilogo1.png");
}?>" alt="" class="img-responsive center-block img-circle">
                            <figcaption>
                                <h3><?php echo $_smarty_tpl->tpl_vars['company']->value;?>
</h3>
                                <span><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>

            <div class="col-sm-8 col-md-9">
                <div class="tab-content">

                    <div class="tab-pane active">
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Online Lastiklerim / Stoklarım</h3>
                        <form action="<?php echo base_url("/main/product_search");?>
" method="get">
                            <div class="input-group">
                                <div class="col-md-2">
                                    <label for="">Marka</label>
                                    <select name="category" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_0_saved_item = isset($_smarty_tpl->tpl_vars['brands']) ? $_smarty_tpl->tpl_vars['brands'] : false;
$_smarty_tpl->tpl_vars['brands'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brands']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brands']->value) {
$_smarty_tpl->tpl_vars['brands']->_loop = true;
$__foreach_foo2_0_saved_local_item = $_smarty_tpl->tpl_vars['brands'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['brands']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['brands']->value->id == $_GET['category']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['brands']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['brands'] = $__foreach_foo2_0_saved_local_item;
}
if ($__foreach_foo2_0_saved_item) {
$_smarty_tpl->tpl_vars['brands'] = $__foreach_foo2_0_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="col-md-2 row" style="margin-right:0!important">
                                    <label for="">Taban Genişliği</label>
                                    <select name="tire_width" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_tire_width']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_1_saved_item = isset($_smarty_tpl->tpl_vars['tire_width']) ? $_smarty_tpl->tpl_vars['tire_width'] : false;
$_smarty_tpl->tpl_vars['tire_width'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tire_width']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tire_width']->value) {
$_smarty_tpl->tpl_vars['tire_width']->_loop = true;
$__foreach_foo2_1_saved_local_item = $_smarty_tpl->tpl_vars['tire_width'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['tire_width']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['tire_width']->value->id == $_GET['tire_width']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tire_width']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['tire_width'] = $__foreach_foo2_1_saved_local_item;
}
if ($__foreach_foo2_1_saved_item) {
$_smarty_tpl->tpl_vars['tire_width'] = $__foreach_foo2_1_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="col-md-2 row" style="margin-right:0!important">
                                    <label for="">Kesit Oranı</label>
                                    <select name="tire_rate" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_tire_rate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_2_saved_item = isset($_smarty_tpl->tpl_vars['tire_rate']) ? $_smarty_tpl->tpl_vars['tire_rate'] : false;
$_smarty_tpl->tpl_vars['tire_rate'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tire_rate']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tire_rate']->value) {
$_smarty_tpl->tpl_vars['tire_rate']->_loop = true;
$__foreach_foo2_2_saved_local_item = $_smarty_tpl->tpl_vars['tire_rate'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['tire_rate']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['brands']->value->id == $_GET['tire_rate']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tire_rate']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['tire_rate'] = $__foreach_foo2_2_saved_local_item;
}
if ($__foreach_foo2_2_saved_item) {
$_smarty_tpl->tpl_vars['tire_rate'] = $__foreach_foo2_2_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="col-md-2 row" style="margin-right:0!important">
                                    <label for="">Jant Çapı</label>
                                    <select name="rim_diameter" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_rim_diameter']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_3_saved_item = isset($_smarty_tpl->tpl_vars['rim_diameter']) ? $_smarty_tpl->tpl_vars['rim_diameter'] : false;
$_smarty_tpl->tpl_vars['rim_diameter'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['rim_diameter']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rim_diameter']->value) {
$_smarty_tpl->tpl_vars['rim_diameter']->_loop = true;
$__foreach_foo2_3_saved_local_item = $_smarty_tpl->tpl_vars['rim_diameter'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['rim_diameter']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['rim_diameter']->value->id == $_GET['rim_diameter']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['rim_diameter']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['rim_diameter'] = $__foreach_foo2_3_saved_local_item;
}
if ($__foreach_foo2_3_saved_item) {
$_smarty_tpl->tpl_vars['rim_diameter'] = $__foreach_foo2_3_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="col-md-2 row" style="margin-right:0!important">
                                    <label for="">Mevsim</label>
                                    <select name="season" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['select_season']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_4_saved_item = isset($_smarty_tpl->tpl_vars['season']) ? $_smarty_tpl->tpl_vars['season'] : false;
$_smarty_tpl->tpl_vars['season'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['season']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['season']->value) {
$_smarty_tpl->tpl_vars['season']->_loop = true;
$__foreach_foo2_4_saved_local_item = $_smarty_tpl->tpl_vars['season'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['season']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['season']->value->id == $_GET['season']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['season']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['season'] = $__foreach_foo2_4_saved_local_item;
}
if ($__foreach_foo2_4_saved_item) {
$_smarty_tpl->tpl_vars['season'] = $__foreach_foo2_4_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="col-md-3 row" style="margin-right:0!important">
                                    <label for="">Ürün adı veya Kodu</label>
                                    <input type="text" name="search" class="form-control" placeholder="Ürün ara">
                                    <span class="input-group-btn" style="top: 30px;right: 15px">
                                        <button type="submit" class="btn btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </form>
                        <div class="search-results">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><i class="fa fa-circle" aria-hidden="true"></i> Ürünler</h3>
                                </div>

                                <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_5_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_5_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>

                                    <div class="col-md-12">
                                        <div class="white-bg">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <figure><img src="<?php if (smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->id,"product_img","image")) {
echo base_url(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->id,"product_img","image"));
} else {
echo base_url("assets/images/no_image.jpg");
}?>" alt="" style="max-height: 100px" class="img-responsive center-block"></figure>
                                                </div>
                                                <div class="col-md-8">
                                                    <h4>
                                                        <a href="<?php echo base_url("/genel/lastik");?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value->uri;?>
">
                                                            <?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>

                                                        </a>
                                                    </h4>
                                                    <ul>
                                                        <li><span>Marka:</span> <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->brand,"brand","name");?>
</li>
                                                        <li><span>Cinsi:</span> <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->season,"season","name");?>
</li>
                                                        <li><span>Kategori:</span> <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->category,"category","name");?>
</li>
                                                        <li>
                                                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">Ürün detayı</a>
                                                            <div id="myModal<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="modal fade" role="dialog" style="background: rgba(0,0,0,0.3)">
                                                                <div class="modal-dialog" style="border: 1px solid #ddd;border-radius: 10px;padding: 10px;background: #fff;">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
 Ürün Özellikleri</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        Lastik Marka
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->brand,"brand","name");?>

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Lastik Yüksekliği
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->tire_width,"tire_width","name");?>

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Lastik Oranı
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->tire_rate,"tire_rate","name");?>

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Jant Çapı
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->rim_diameter,"rim_diameter","name");?>

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Hız İndexi
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->speed_index,"speed_index","name");?>

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Mevsim
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->season,"season","name");?>

                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-info" data-dismiss="modal">Kapat</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <?php if ($_smarty_tpl->tpl_vars['status']->value == "normal") {?>
                                                        <form action="<?php echo base_url("/main/product_update");?>
" method="post">
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"/>
                                                            <input type="hidden" name="link" value="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"/>
                                                            <div class="form-group">
                                                                <label for="">Yıl:</label>
                                                                <input type="text" name="year" value="<?php echo smarty_modifier_get_data_session($_smarty_tpl->tpl_vars['product']->value->id,"product_amount","year");?>
" class="form-control" placeholder="2011" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Fiyat:</label>
                                                                <input type="text" name="amount" value="<?php echo smarty_modifier_get_data_session($_smarty_tpl->tpl_vars['product']->value->id,"product_amount","amount");?>
" class="form-control" placeholder="0 TL">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Stok:</label>
                                                                <input type="text" name="stock" value="<?php echo smarty_modifier_get_data_session($_smarty_tpl->tpl_vars['product']->value->id,"product_amount","stock");?>
" class="form-control" placeholder="0">
                                                            </div>
                                                            <input type="submit" class="btn btn-green" value="Güncelle">
                                                        </form>
                                                    <?php } else { ?>
                                                        <form action="<?php echo base_url("/main/product_update");?>
" method="post">
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"/>
                                                            <input type="hidden" name="link" value="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"/>
                                                            <div class="form-group">
                                                                <label for="">Fiyat:</label>
                                                                <input type="text" name="amount" value="<?php echo smarty_modifier_get_data_session($_smarty_tpl->tpl_vars['product']->value->id,"product_amount","amount");?>
" class="form-control" placeholder="0 TL">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">URL:</label>
                                                                <input type="text" name="url" value="<?php echo smarty_modifier_get_data_session($_smarty_tpl->tpl_vars['product']->value->id,"product_amount","url");?>
" class="form-control" placeholder="http://">
                                                            </div>
                                                            <input type="submit" class="btn btn-green" value="Güncelle">
                                                        </form>
                                                    <?php }?>

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        <span class="red">Minimum Fiyat</span>
                                                        <span><?php echo smarty_modifier_get_max_amount($_smarty_tpl->tpl_vars['product']->value->id);?>
</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_5_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['product']->_loop) {
?>
                                <div class="col-md-12">
                                    <div class="white-bg">
                                        <div class="row">
                                            <span>Üzgünüm, herhangi bir ürün eklenmemiş, lütfen daha sonra tekrar deneyiniz!</span>
                                        </div>
                                    </div>
                                </div>
                                <?php
}
if ($__foreach_product_5_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_5_saved_item;
}
?>

                            </div>

                            <?php $_smarty_tpl->tpl_vars['exp'] = new Smarty_Variable(explode("?",$_SERVER['REQUEST_URI']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'exp', 0);?>
                            <ul class="pagination">
                                <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                                    <li><a href="<?php echo base_url("main/product_update");?>
/1<?php if ($_smarty_tpl->tpl_vars['exp']->value[1]) {?>?<?php echo $_smarty_tpl->tpl_vars['exp']->value[1];
}?>"> << </a></li>
                                    <li><a href="<?php echo base_url("main/product_update");?>
/<?php if ($_smarty_tpl->tpl_vars['complete']->value <= 1) {?>1<?php } else {
echo $_smarty_tpl->tpl_vars['complete']->value-1;
}
if ($_smarty_tpl->tpl_vars['exp']->value[1]) {?>?<?php echo $_smarty_tpl->tpl_vars['exp']->value[1];
}?>"> < </a></li>
                                <?php }?>
                                <li class="active"><a href="<?php echo base_url("main/product_update");?>
/<?php echo $_smarty_tpl->tpl_vars['complete']->value;
if ($_smarty_tpl->tpl_vars['exp']->value[1]) {?>?<?php echo $_smarty_tpl->tpl_vars['exp']->value[1];
}?>"> <?php echo $_smarty_tpl->tpl_vars['complete']->value;?>
 </a></li>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                                    <li><a href="<?php echo base_url("main/product_update");?>
/<?php if ($_smarty_tpl->tpl_vars['page']->value <= $_smarty_tpl->tpl_vars['complete']->value+1) {
echo $_smarty_tpl->tpl_vars['page']->value;
} else {
echo $_smarty_tpl->tpl_vars['complete']->value+1;
}
if ($_smarty_tpl->tpl_vars['exp']->value[1]) {?>?<?php echo $_smarty_tpl->tpl_vars['exp']->value[1];
}?>"> > </a></li>
                                    <li><a href="<?php echo base_url("main/product_update");?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;
if ($_smarty_tpl->tpl_vars['exp']->value[1]) {?>?<?php echo $_smarty_tpl->tpl_vars['exp']->value[1];
}?>"> >> </a></li>
                                <?php }?>
                            </ul>

                            <ul class="pagination hidden">
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <li<?php if ($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['complete']->value) {?> class="active"<?php }?>><a href="<?php echo base_url("main/product_update/");?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
                                <?php }
}
?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
