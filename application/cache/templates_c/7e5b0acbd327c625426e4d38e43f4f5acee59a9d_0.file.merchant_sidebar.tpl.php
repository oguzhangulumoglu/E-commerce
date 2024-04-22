<?php
/* Smarty version 3.1.29, created on 2020-11-19 15:21:07
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/merchant_sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb663330076f2_62148618',
  'file_dependency' => 
  array (
    '7e5b0acbd327c625426e4d38e43f4f5acee59a9d' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/merchant_sidebar.tpl',
      1 => 1509605273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb663330076f2_62148618 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_cat_num')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.cat_num.php';
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
if (!is_callable('smarty_modifier_get_data_num')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_num.php';
if (!is_callable('smarty_modifier_replace')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.replace.php';
?>

<div class="col-sm-4 col-md-3">
<div class="panel panel-default">
    <div class="panel-body text-center">
        <figure><img src="<?php if ($_smarty_tpl->tpl_vars['logo']->value) {
echo base_url($_smarty_tpl->tpl_vars['logo']->value);
} else {
echo base_url("assets/images/no_image.jpg");
}?>" alt="" class="center-block"></figure>
        <div class="vendor">
            <h4><?php echo $_smarty_tpl->tpl_vars['company']->value;?>
</h4>
            <ul class="rating">
                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['ratings']->value < 1) {?>grey<?php }?>" aria-hidden="true"></i></li>
                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['ratings']->value < 2) {?>grey<?php }?>" aria-hidden="true"></i></li>
                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['ratings']->value < 3) {?>grey<?php }?>" aria-hidden="true"></i></li>
                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['ratings']->value < 4) {?>grey<?php }?>" aria-hidden="true"></i></li>
                <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['ratings']->value < 5) {?>grey<?php }?>" aria-hidden="true"></i></li>
            </ul>
            <span>(<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['ratings']->value);?>
)</span>
            <?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
                <a href="<?php echo base_url("main/contact");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
" class="btn btn-red"><i class="fa fa-envelope-o"></i> MESAJ GÖNDER</a>
            <?php }?>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body text-center">
        <?php echo $_smarty_tpl->tpl_vars['company']->value;?>
 bayimiz bu zamana kadar <strong><?php echo $_smarty_tpl->tpl_vars['hit']->value;?>
</strong> görüntüleme aldı.
    </div>
</div>
<div class="cart-left-menu">
    <h2>
        <i class="fa fa-shopping-cart"></i>
        Mağazanın Ürünleri
    </h2>
    <ul class="cart-list-category">
        <li <?php if (!$_smarty_tpl->tpl_vars['product']->value->e_category) {?> class="active"<?php }?>>
            <a href="<?php echo base_url("bayi");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/urunler/1">Tümü <span>(<?php echo smarty_modifier_cat_num($_smarty_tpl->tpl_vars['categorys']->value->id,$_smarty_tpl->tpl_vars['id']->value,"all");?>
)</span></a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['product']->value->e_category == "lastik") {?> class="active"<?php }?>>
            <a href="<?php echo base_url("bayi");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/lastik/1">Lastik <span>(<?php echo smarty_modifier_cat_num($_smarty_tpl->tpl_vars['categorys']->value->id,$_smarty_tpl->tpl_vars['id']->value,"lastik");?>
)</span></a>
        </li>
        <?php
$_from = $_smarty_tpl->tpl_vars['category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_categorys_0_saved_item = isset($_smarty_tpl->tpl_vars['categorys']) ? $_smarty_tpl->tpl_vars['categorys'] : false;
$_smarty_tpl->tpl_vars['categorys'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['categorys']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categorys']->value) {
$_smarty_tpl->tpl_vars['categorys']->_loop = true;
$__foreach_categorys_0_saved_local_item = $_smarty_tpl->tpl_vars['categorys'];
?>
            <li <?php if ($_smarty_tpl->tpl_vars['product']->value->e_category == $_smarty_tpl->tpl_vars['categorys']->value->id) {?> class="active"<?php }?>>
                <a href="<?php echo base_url("bayi");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categorys']->value->uri;?>
/1"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['categorys']->value->name);?>
 <span>(<?php echo smarty_modifier_cat_num($_smarty_tpl->tpl_vars['categorys']->value->id,$_smarty_tpl->tpl_vars['id']->value,"cat");?>
)</span></a>
            </li>
        <?php
$_smarty_tpl->tpl_vars['categorys'] = $__foreach_categorys_0_saved_local_item;
}
if ($__foreach_categorys_0_saved_item) {
$_smarty_tpl->tpl_vars['categorys'] = $__foreach_categorys_0_saved_item;
}
?>
    </ul>
</div>
<div class="panel-group" id="accordion">
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                Haritada gör <i class="glyphicon glyphicon-menu-down pull-right"></i>
            </a>
        </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse  in">
        <div class="embed-responsive " style="height: 350px">
            <iframe class="embed-responsive-item" style="height: 350px" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['id']->value,"merchant","adress");?>
,<?php echo smarty_modifier_capitalize(smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['id']->value,"merchant","state"),"state","state"));?>
,<?php echo smarty_modifier_capitalize(smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['id']->value,"merchant","city"),"city","city"));?>
,+Türkiye&key=AIzaSyAGozyC7F_w27PQMQ-SALXOe60YPTGEYWU"></iframe>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Adres Bilgileri <i class="glyphicon glyphicon-menu-down pull-right"></i></a>
        </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
        <table class="table table-responsive">
            <tr>
                <td>Adres</td>
                <td><?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
</td>
            </tr>
            <tr>
                <td>Lokasyon</td>
                <td><?php echo smarty_modifier_capitalize(smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['id']->value,"merchant","state"),"state","state"));?>
, <?php echo smarty_modifier_capitalize(smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['id']->value,"merchant","city"),"city","city"));?>
</td>
            </tr>
            <tr>
                <td>Sabit</td>
                <td><?php echo $_smarty_tpl->tpl_vars['homephone']->value;?>
</td>
            </tr>
            <tr>
                <td>GSM</td>
                <td><?php if ($_smarty_tpl->tpl_vars['cellphone']->value) {
echo $_smarty_tpl->tpl_vars['cellphone']->value;
} else { ?>-<?php }?></td>
            </tr>
        </table>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Bayide Verilen Hizmetler <i class="glyphicon glyphicon-menu-down pull-right"></i></a>
        </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Lastik Değişimi <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_1 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_1_amount;?>
 <div class="fa fa-try"></div> <?php }?></span>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_1 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>

        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Nitrojen Gaz Dolumu <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_2 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_2_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_2 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>

        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Rot Ayarı <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_3 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_3_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_3 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Sibop Değişimi <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_4 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_4_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_4 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Mobil Değişim <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_5 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_5_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_5 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Yağ Değişim  <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_6 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_6_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_6 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Jant Satış  <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_7 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_7_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_7 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Jant Düzeltme <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_8 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_8_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_8 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Jant Boyama <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_9 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_9_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_9 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Balata Değişimi  <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_10 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_10_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_10 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Aksesuar  <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_11 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_11_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_11 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Balans Ayarı <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_12 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_12_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_12 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    OTO Yıkama <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_13 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_13_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_13 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    OTO Kuaför <span class="price"><?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_14 > 0) {
echo $_smarty_tpl->tpl_vars['merchant']->value->service_14_amount;?>
 <div class="fa fa-try"></div> <?php }?>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon <?php if ($_smarty_tpl->tpl_vars['merchant']->value->service_14 > 0) {?>glyphicon-ok<?php } else { ?>glyphicon-minus<?php }?> ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                Satılan Lastik Markaları  <i class="glyphicon glyphicon-menu-down pull-right"></i>
            </a>
        </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
        <?php if (count($_smarty_tpl->tpl_vars['brand']->value) > 0) {?>
            <div class="panel panel-default">
                <div class="panel-body" style="height:400px;overflow-y:scroll">
                    <div class="vendor-brand">
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['brand']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_brands_1_saved_item = isset($_smarty_tpl->tpl_vars['brands']) ? $_smarty_tpl->tpl_vars['brands'] : false;
$_smarty_tpl->tpl_vars['brands'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brands']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brands']->value) {
$_smarty_tpl->tpl_vars['brands']->_loop = true;
$__foreach_brands_1_saved_local_item = $_smarty_tpl->tpl_vars['brands'];
?>
                                <?php if (smarty_modifier_get_data_num($_smarty_tpl->tpl_vars['id']->value,"merchant_detail","brand","data",$_smarty_tpl->tpl_vars['brands']->value->id) > 0) {?>
                                    <li style="display: block">
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
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_1_saved_local_item;
}
if ($__foreach_brands_1_saved_item) {
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_1_saved_item;
}
?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                Satılan Akü Markaları <i class="glyphicon glyphicon-menu-down pull-right"></i>
            </a>
        </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
        <?php if (count($_smarty_tpl->tpl_vars['brand_aku']->value) > 0) {?>
            <div class="panel panel-default">
                <div class="panel-body" style="height:400px;overflow-y:scroll">
                    <div class="vendor-brand">
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['brand_aku']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_brand_akus_2_saved_item = isset($_smarty_tpl->tpl_vars['brand_akus']) ? $_smarty_tpl->tpl_vars['brand_akus'] : false;
$_smarty_tpl->tpl_vars['brand_akus'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brand_akus']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brand_akus']->value) {
$_smarty_tpl->tpl_vars['brand_akus']->_loop = true;
$__foreach_brand_akus_2_saved_local_item = $_smarty_tpl->tpl_vars['brand_akus'];
?>
                                <?php if (smarty_modifier_get_data_num($_smarty_tpl->tpl_vars['id']->value,"merchant_detail","brand_aku","data",$_smarty_tpl->tpl_vars['brand_akus']->value->id) > 0) {?>
                                    <li style="display: block">
                                        <img src="<?php echo base_url($_smarty_tpl->tpl_vars['brand_akus']->value->image);?>
" class="img-responsive center-block">
                                    </li>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['brand_akus'] = $__foreach_brand_akus_2_saved_local_item;
}
if ($__foreach_brand_akus_2_saved_item) {
$_smarty_tpl->tpl_vars['brand_akus'] = $__foreach_brand_akus_2_saved_item;
}
?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
</div>
</div><?php }
}
