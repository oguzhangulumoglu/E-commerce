<?php
/* Smarty version 3.1.29, created on 2020-12-12 22:50:59
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/merchant_option.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fd51f2396c653_73173589',
  'file_dependency' => 
  array (
    'e783931318f184c0ad952816016b42276ea4bf42' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/merchant_option.tpl',
      1 => 1521793059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5fd51f2396c653_73173589 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_data_num')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_num.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="<?php echo base_url("admin/merchant");?>
"> Bayiler</a></li>
                <li class="active">Ekle / Düzenle</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bayiler</h1>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Üyelik tipi</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="normal" <?php if ($_smarty_tpl->tpl_vars['status']->value == "normal") {?>selected="selected" <?php }?>>Lastik bayi</option>
                                        <option value="online" <?php if ($_smarty_tpl->tpl_vars['status']->value == "online") {?>selected="selected" <?php }?>>Online bayi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Sorumlu adı</label>
                                    <input class="form-control" type="text" name="name" value="<?php if ($_smarty_tpl->tpl_vars['name']->value) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>" placeholder="Sorumlu adı">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" type="text" name="description" value="<?php if ($_smarty_tpl->tpl_vars['description']->value) {
echo $_smarty_tpl->tpl_vars['description']->value;
}?>" placeholder="description">
                                </div>
                                <div class="form-group">
                                    <label>Email <span style="color:red">(*)</span></label>
                                    <input class="form-control" type="text" name="email" value="<?php if ($_smarty_tpl->tpl_vars['email']->value) {
echo $_smarty_tpl->tpl_vars['email']->value;
}?>" placeholder="Sorumlu adı">
                                </div>
                                <div class="form-group">
                                    <label>Adres</label>
                                    <input class="form-control" type="text" id="adress" name="adress" value="<?php if ($_smarty_tpl->tpl_vars['adress']->value) {
echo $_smarty_tpl->tpl_vars['adress']->value;
}?>">
                                </div>
                                <div class="col-md-12 form-group">
                                    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnDeB72gPJQ-7QTDKa9ThwQqP95CeiyVI&libraries=places"><?php echo '</script'; ?>
>
                                    <div id="map" style="height: 235px; width: 100%"></div>
                                    <input type="hidden" name="latlng"/>
                                    <?php echo '<script'; ?>
>
                                        
                                        $(function(){
                                            var map;
                                            map = new google.maps.Map(document.getElementById('map'), {
                                                center: {lat: 39.9245415, lng: 32.84047459999999},
                                                zoom: 8
                                            });
                                            var marker = new google.maps.Marker({
                                                position:{
                                                    lat:39.9245415,
                                                    lng:32.84047459999999
                                                },
                                                map:map,
                                                draggable:true
                                            });
                                            google.maps.event.addListener(marker,'dragend',function(){
                                                $('input[name=latlng]').val(marker.getPosition().lat() +"#"+ marker.getPosition().lng());
                                            });
                                            var searcBox = new google.maps.places.SearchBox(document.getElementById('adress'));
                                            google.maps.event.addListener(searcBox,'places_changed',function(){
                                                var places = searcBox.getPlaces();
                                                var bounds = new google.maps.LatLngBounds();
                                                var i,place;
                                                for (var i = 0; place = places[i]; i++) {
                                                    bounds.extend(place.geometry.location);
                                                    marker.setPosition(place.geometry.location);
                                                }
                                                $('input[name=latlng]').val(marker.getPosition().lat() +"#"+ marker.getPosition().lng());
                                                map.fitBounds(bounds);
                                                map.setZoom(9);
                                            });
                                        });
                                        
                                    <?php echo '</script'; ?>
>
                                </div>
                                <div class="form-group">
                                    <label>Firma Logosu</label>
                                    <input type="file" name="file" placeholder="Şirket Logosu Ekle"/>
                                </div>
                                <div class="form-group">
                                    <label>Sayfada Arama Aktif mi ?</label>
                                    <select class="form-control" name="search" id="search">
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['search']->value != '') {?>selected="selected" <?php }?>>Hayır</option>
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['search']->value == 1) {?>selected="selected" <?php }?>>Evet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Şirket ismi <span style="color:red">(*)</span></label>
                                    <input class="form-control" type="text" name="company" value="<?php if ($_smarty_tpl->tpl_vars['company']->value) {
echo $_smarty_tpl->tpl_vars['company']->value;
}?>" placeholder="Şirket adı">
                                </div>
                                <div class="form-group">
                                    <label>Şifre <span style="color:red">(*)</span></label>
                                    <input class="form-control" type="password" name="password" value="12345">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input class="form-control" type="text" name="keywords" value="<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {
echo $_smarty_tpl->tpl_vars['keywords']->value;
}?>" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Web Sitesi</label>
                                    <input class="form-control" type="text" name="web" value="<?php if ($_smarty_tpl->tpl_vars['web']->value) {
echo $_smarty_tpl->tpl_vars['web']->value;
}?>">
                                </div>
                                <div class="form-group">
                                    <label>Vergi No</label>
                                    <input class="form-control" type="text" id="tc" name="vergino" value="<?php if ($_smarty_tpl->tpl_vars['vergino']->value) {
echo $_smarty_tpl->tpl_vars['vergino']->value;
}?>">
                                </div>
                                <div class="form-group">
                                    <label>Sabit Cep</label>
                                    <input class="form-control" type="text" id="phone" name="cellphone" value="<?php if ($_smarty_tpl->tpl_vars['cellphone']->value) {
echo $_smarty_tpl->tpl_vars['cellphone']->value;
}?>">
                                </div>

                                <div class="form-group">
                                    <label>Sabit Tel</label>
                                    <input class="form-control" type="text" id="phone2" name="homephone" value="<?php if ($_smarty_tpl->tpl_vars['homephone']->value) {
echo $_smarty_tpl->tpl_vars['homephone']->value;
}?>">
                                </div>
                                <div class="form-group city">
                                    <label>Şehir</label>
                                    <select class="form-control" name="city" id="city" data-data="<?php if ($_smarty_tpl->tpl_vars['city']->value) {
echo $_smarty_tpl->tpl_vars['city']->value;
}?>">
                                        <option value="0">Seçiniz</option>
                                    </select>
                                </div>
                                <div class="form-group state">
                                    <label>İlçe</label>
                                    <select class="form-control" name="state" id="state" data-data="<?php if ($_smarty_tpl->tpl_vars['state']->value) {
echo $_smarty_tpl->tpl_vars['state']->value;
}?>">
                                        <option value="0">Seçiniz</option>
                                    </select>
                                </div>
                                <div class="form-group city">
                                    <label>Satıcı Marka</label>
                                    <select class="form-control" name="sales" id="sales">
                                        <option value="0">Seçiniz</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['saless']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sale_0_saved_item = isset($_smarty_tpl->tpl_vars['sale']) ? $_smarty_tpl->tpl_vars['sale'] : false;
$_smarty_tpl->tpl_vars['sale'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['sale']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sale']->value) {
$_smarty_tpl->tpl_vars['sale']->_loop = true;
$__foreach_sale_0_saved_local_item = $_smarty_tpl->tpl_vars['sale'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['sale']->value["id"];?>
" <?php if ($_smarty_tpl->tpl_vars['sales']->value == $_smarty_tpl->tpl_vars['sale']->value["id"]) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['sale']->value["name"];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['sale'] = $__foreach_sale_0_saved_local_item;
}
if ($__foreach_sale_0_saved_item) {
$_smarty_tpl->tpl_vars['sale'] = $__foreach_sale_0_saved_item;
}
?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Üyelik Durumu</label>
                                    <select class="form-control" name="accepts" id="accepts">
                                        <option value="on" <?php if ($_smarty_tpl->tpl_vars['accepts']->value == "on") {?>selected="selected" <?php }?>>Aktif</option>
                                        <option value="off" <?php if ($_smarty_tpl->tpl_vars['accepts']->value == "off") {?>selected="selected" <?php }?>>Passive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="float:right">Kaydet / Güncelle</button>
                            </div>
                        </form>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                    <div class="panel-heading">
                        Logo ve Galeri
                        <a href="#" style="float: right" data-id="<?php if ($_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>" class="btn btn-primary image-btn">Logo Yükle</a>
                        <a href="#" style="float: right; margin-right:10px" data-id="<?php if ($_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>" class="btn btn-primary gallery-btn">Galeri Yükle</a>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="panel-heading">
                                LOGO
                            </div>
                            <div class="logo row">
                                <?php if ($_smarty_tpl->tpl_vars['logo']->value) {?><img class="img-responsive" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['logo']->value;
$_tmp1=ob_get_clean();
echo base_url($_tmp1);?>
" alt=""><?php }?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-heading">
                                GALLERİ
                            </div>
                            <div class="gallery row" data-id="<?php if ($_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>">
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-heading">
                        Lastik ve Akü Markaları
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="panel-heading">Lastik markaları</div>
                            <div class="panel-body">
                                <form action="<?php echo base_url("admin/edit/merchant_brand/");?>
/<?php if ($_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>" method="post">
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
                                    <div class="col-md-8">
                                        <?php echo $_smarty_tpl->tpl_vars['brands']->value["name"];?>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="checkbox" style="margin: 0">
                                            <label>
                                                <input type="checkbox" name="brand[]" value="<?php echo $_smarty_tpl->tpl_vars['brands']->value["id"];?>
" <?php if (smarty_modifier_get_data_num($_smarty_tpl->tpl_vars['id']->value,"merchant_detail","brand","data",$_smarty_tpl->tpl_vars['brands']->value["id"]) > 0) {?>checked<?php }?>> Evet
                                            </label>
                                        </div>
                                    </div>
                                    <?php
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_1_saved_local_item;
}
if ($__foreach_brands_1_saved_item) {
$_smarty_tpl->tpl_vars['brands'] = $__foreach_brands_1_saved_item;
}
?>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" style="float:right; margin-top: 20px">Kaydet / Güncelle</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel-heading">Akü markaları</div>
                            <div class="panel-body">
                                <form action="<?php echo base_url("admin/edit/merchant_brand_aku/");?>
/<?php if ($_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>" method="post">
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
                                    <div class="col-md-8">
                                        <?php echo $_smarty_tpl->tpl_vars['brand_akus']->value["name"];?>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="checkbox" style="margin: 0">
                                            <label>
                                                <input type="checkbox" name="brand_aku[]" value="<?php echo $_smarty_tpl->tpl_vars['brand_akus']->value["id"];?>
" <?php if (smarty_modifier_get_data_num($_smarty_tpl->tpl_vars['id']->value,"merchant_detail","brand_aku","data",$_smarty_tpl->tpl_vars['brands']->value["id"]) > 0) {?>checked<?php }?>> Evet
                                            </label>
                                        </div>
                                    </div>
                                    <?php
$_smarty_tpl->tpl_vars['brand_akus'] = $__foreach_brand_akus_2_saved_local_item;
}
if ($__foreach_brand_akus_2_saved_item) {
$_smarty_tpl->tpl_vars['brand_akus'] = $__foreach_brand_akus_2_saved_item;
}
?>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" style="float:right; margin-top: 20px">Kaydet / Güncelle</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php }?>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="image-upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h2 class="modal-title" id="myModalLabel">LOGO Yükleme</h2>
                    </div>

                    <div class="modal-body" style="overflow: hidden">
                        <div id="fileuploader">

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tamam</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="gallery-upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h2 class="modal-title" id="myModalLabel">Galeri Yükleme</h2>
                    </div>

                    <div class="modal-body" style="overflow: hidden">
                        <div id="fileuploader2">

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tamam</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
