<?php
/* Smarty version 3.1.29, created on 2021-05-20 19:09:04
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/stock.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60a689a004a693_74463453',
  'file_dependency' => 
  array (
    '7ad5702153a3ea8c39e3393dbf3340ea23ca9ecd' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/stock.tpl',
      1 => 1521274904,
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
function content_60a689a004a693_74463453 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_is')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.is.php';
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
if (!is_callable('smarty_modifier_urunyili')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.urunyili.php';
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
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:company.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>

            <div class="col-sm-8 col-md-9">
                <div class="tab-content">

                    <div class="tab-pane active">
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Stokdaki Ürünlerim</h3>
                        <form action="<?php echo base_url("/main/stock");?>
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
                                            <?php if (smarty_modifier_is($_smarty_tpl->tpl_vars['brands']->value->id,"brand",$_smarty_tpl->tpl_vars['id']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['brands']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['brands']->value->id == $_GET['category']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['brands']->value->name;?>
</option><?php }?>
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
                                            <?php if (smarty_modifier_is($_smarty_tpl->tpl_vars['tire_width']->value->id,"tire_width",$_smarty_tpl->tpl_vars['id']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['tire_width']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['tire_width']->value->id == $_GET['tire_width']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tire_width']->value->name;?>
</option><?php }?>
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
                                            <?php if (smarty_modifier_is($_smarty_tpl->tpl_vars['tire_rate']->value->id,"tire_rate",$_smarty_tpl->tpl_vars['id']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['tire_rate']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['brands']->value->id == $_GET['tire_rate']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tire_rate']->value->name;?>
</option><?php }?>
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
                                            <?php if (smarty_modifier_is($_smarty_tpl->tpl_vars['rim_diameter']->value->id,"rim_diameter",$_smarty_tpl->tpl_vars['id']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['rim_diameter']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['rim_diameter']->value->id == $_GET['rim_diameter']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['rim_diameter']->value->name;?>
</option><?php }?>
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
                                            <?php if (smarty_modifier_is($_smarty_tpl->tpl_vars['season']->value->id,"season",$_smarty_tpl->tpl_vars['id']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['season']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['season']->value->id == $_GET['season']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['season']->value->name;?>
</option><?php }?>
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
                                <span class="input-group-btn" style="top: 27px;right: 15px">
                                    <button type="submit" class="btn btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </form>
                        <div class="search-results">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><i class="fa fa-circle" aria-hidden="true"></i> Stok ve Fiyat Girilen Ürünler</h3>
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

                                    <div class="col-md-12" id="ares_empty_stock<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->pid,"product","id");?>
">
                                        <div class="white-bg">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <figure><img src="<?php if (smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->pid,"product_img","image")) {
echo base_url(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->pid,"product_img","image"));
} else {
echo base_url("assets/images/no_image.jpg");
}?>" alt="" style="max-height: 200px" class="img-responsive center-block"></figure>
                                                </div>
                                                <div class="col-md-8">
                                                    <h4>
                                                        <a href="<?php echo base_url("/genel/lastik");?>
/<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->pid,"product","uri");?>
">
                                                            <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->pid,"product","name");?>

                                                        </a>
                                                    </h4>
                                                    <ul>
                                                        <li><span>Marka:</span> <?php echo smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->pid,"product","brand"),"brand","name");?>
</li>
                                                        <li><span>Cinsi:</span> <?php echo smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->pid,"product","season"),"season","name");?>
</li>
                                                        <li><span>Kategori:</span> <?php echo smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->pid,"product","category"),"category","name");?>
</li>
                                                    </ul>
                                                    <?php if ($_smarty_tpl->tpl_vars['status']->value == "normal") {?>
                                                        <form action="<?php echo base_url("/main/product_update");?>
" method="post">
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->pid;?>
"/>
                                                            <input type="hidden" name="link" value="<?php echo base_url("main/stock");?>
"/>
                                                            <div class="form-group">
                                                                <label for="">Yıl:</label>
                                                                <input type="text" name="year" value="<?php echo smarty_modifier_urunyili($_smarty_tpl->tpl_vars['product']->value->pid);?>
" class="form-control" placeholder="2011" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Fiyat:</label>
                                                                <input type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->amount;?>
" class="form-control" placeholder="0 TL" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Stok:</label>
                                                                <input type="text" name="stock" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->stock;?>
" class="form-control" placeholder="0" required="">
                                                            </div>
                                                            <input type="submit" class="btn btn-green" value="Güncelle">
                                                        </form>
                                                    <?php } else { ?>
                                                        <form action="<?php echo base_url("/main/product_update");?>
" method="post">
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->pid;?>
"/>
                                                            <input type="hidden" name="link" value="<?php echo base_url("main/stock");?>
"/>
                                                            <div class="form-group">
                                                                <label for="">Fiyat:</label>
                                                                <input type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->amount;?>
" class="form-control" placeholder="0 TL" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">URL:</label>
                                                                <input type="text" name="url" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
" class="form-control" placeholder="http://" required="">
                                                            </div>
                                                            <input type="submit" class="btn btn-green" value="Güncelle">
                                                        </form>
                                                    <?php }?>

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        <span class="red">Minimum Fiyat</span>
                                                        <span><?php echo smarty_modifier_get_max_amount($_smarty_tpl->tpl_vars['product']->value->pid);?>
</span>
                                                        <a style="background:#dd0000;color:#fff;padding:5px;border-radius:5px;cursor:pointer;" href="javascript:deleteStock(<?php echo $_smarty_tpl->tpl_vars['product']->value->pid;?>
)">Stoğu boşalt</a>
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
                                            <span>Üzgünüm, herhangi bir ürün stoğu ve fiyatı eklenmemiş, lütfen daha sonra tekrar deneyiniz!</span>
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
                            <ul class="pagination">
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
