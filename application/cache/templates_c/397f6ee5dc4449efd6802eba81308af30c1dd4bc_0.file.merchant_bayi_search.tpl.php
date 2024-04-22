<?php
/* Smarty version 3.1.29, created on 2020-11-19 18:55:51
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/merchant_bayi_search.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb69587503417_29643440',
  'file_dependency' => 
  array (
    '397f6ee5dc4449efd6802eba81308af30c1dd4bc' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/merchant_bayi_search.tpl',
      1 => 1537522514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb69587503417_29643440 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_comments')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.comments.php';
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_get_merchant_product')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_merchant_product.php';
if (!is_callable('smarty_modifier_get_services')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_services.php';
if (!is_callable('smarty_modifier_get_analzy')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_analzy.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        if ( navigator.geolocation ){
            navigator.geolocation.getCurrentPosition(function(pos){
                var enlem = pos.coords.latitude,
                        boylam = pos.coords.longitude,
                        map,
                        marker,
                        infowindow = new google.maps.InfoWindow({});

                var iconBase = 'https://www.lastikkent.com.tr/assets/pin/';
                var icons = {
                    user: {
                        icon: iconBase + 'user-pin.png?v='+ Math.floor(Date.now())
                    },
                    tire: {
                        icon: iconBase + 'tire-pin.png?v='+ Math.floor(Date.now())
                    }
                };

                document.getElementById("searchmap").style.display = 'block';
                map = new google.maps.Map(document.getElementById("searchmap"), {
                    center: new google.maps.LatLng (enlem, boylam),
                    zoom: 13,
                    icon: icons['user'].icon,
                    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#ca2031"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]}]
                });

                var features = [
                    
                    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_merchant_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_merchant']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_merchant'] : false;
$__foreach_merchant_0_saved_item = isset($_smarty_tpl->tpl_vars['merchant']) ? $_smarty_tpl->tpl_vars['merchant'] : false;
$__foreach_merchant_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['merchant'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_merchant'] = new Smarty_Variable(array());
$__foreach_merchant_0_iteration=0;
$_smarty_tpl->tpl_vars['merchant']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['merchant']->value) {
$_smarty_tpl->tpl_vars['merchant']->_loop = true;
$__foreach_merchant_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_merchant']->value['last'] = $__foreach_merchant_0_iteration == $__foreach_merchant_0_total;
$__foreach_merchant_0_saved_local_item = $_smarty_tpl->tpl_vars['merchant'];
$_smarty_tpl->tpl_vars['mapz'] = new Smarty_Variable(explode("#",$_smarty_tpl->tpl_vars['merchant']->value->latlng), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'mapz', 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['merchant']->value->latlng) {?>
                    {
                        position: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['mapz']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['mapz']->value[1];?>
),
                        text : '<div style="width: 300px;"><div style="width: 100px; float:left"><img src="<?php if ($_smarty_tpl->tpl_vars['merchant']->value->logo) {
echo base_url(smarty_modifier_replace($_smarty_tpl->tpl_vars['merchant']->value->logo,".jpg","_thumb.jpg"));
} else {
echo base_url("assets/img/bayilogo1.png");
}?>" style="width:100px; height:90px" alt=""></div><div style="width: 200px; float:left"><h6 style="font-size:14px; font-weight:bold; padding:10px 10px 5px"><?php echo $_smarty_tpl->tpl_vars['merchant']->value->company;?>
</h6><div style="font-size:12px;padding: 0 10px;"><?php echo $_smarty_tpl->tpl_vars['merchant']->value->adress;?>
</div><div style="padding:15px 10px 0;font-weight: bold;"><i class="fa fa-heart" style="color: #cf1f29;padding: 0 5px;"></i> Müşteri puanı : <?php echo sprintf("%.2f",smarty_modifier_comments($_smarty_tpl->tpl_vars['merchant']->value->mid,"merchant_stars"));?>
</div><div style="padding: 20px 0 0;"><a href="<?php echo base_url("genel/bayi/");?>
/<?php echo $_smarty_tpl->tpl_vars['merchant']->value->uri;?>
" class="btn btn-red" style="border-radius:5px">Mağazayı Gör</a></div></div></div>',
                        type: 'tire'
                    }<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_merchant']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_merchant']->value['last'] : null)) {
} else { ?>,<?php }?>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['merchant'] = $__foreach_merchant_0_saved_local_item;
}
if ($__foreach_merchant_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_merchant'] = $__foreach_merchant_0_saved;
}
if ($__foreach_merchant_0_saved_item) {
$_smarty_tpl->tpl_vars['merchant'] = $__foreach_merchant_0_saved_item;
}
?>
                    
                ];

                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(enlem, boylam),
                    icon: icons['user'].icon,
                    map: map,
                    contentString : 'Şuan sen burdasın!'
                });

                marker.addListener('click', function() {
                    infowindow.setContent(this.contentString);
                    infowindow.open(map, this);
                });

                features.forEach(function(feature) {
                    marker = new google.maps.Marker({
                        position: feature.position,
                        icon: icons[feature.type].icon,
                        map: map,
                        contentString: feature.text
                    });
                    marker.addListener('click', function() {
                        infowindow.setContent(this.contentString);
                        infowindow.open(map, this);
                    });
                });

            }, function(error){

                $('.map-activaty').addClass('hidden');

                switch(error.code) {
                    case error.PERMISSION_DENIED:
                        toastr.warning("Lütfen, Size yakın bayileri öğrenmek için coğrafi konum isteğini açınız.", 'Uyarı', {timeOut: 10000});
                        break;
                    case error.POSITION_UNAVAILABLE:
                        toastr.warning("Konum bilgisi kullanılamıyor", 'Uyarı', {timeOut: 10000});
                        break;
                    case error.TIMEOUT:
                        toastr.warning("Kullanıcının konumunu zaman aşımına uğradı.", 'Uyarı', {timeOut: 10000});
                        break;
                    case error.UNKNOWN_ERROR:
                        toastr.warning("Bilinmeyen bir hata oluştu.", 'Uyarı', {timeOut: 10000});
                        break;
                }
            });

        } else {
            $('.map-activaty').addClass('hidden');
        }
    });
<?php echo '</script'; ?>
>

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>arama sonuçları</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li>Bayi Arama</li>
            <li class="active"><?php echo smarty_modifier_capitalize(mb_strtolower(smarty_modifier_get_data($_smarty_tpl->tpl_vars['cityID']->value,"city","city"), 'UTF-8'));
if ($_smarty_tpl->tpl_vars['stateID']->value) {?> - <?php echo smarty_modifier_capitalize(mb_strtolower(smarty_modifier_get_data($_smarty_tpl->tpl_vars['stateID']->value,"state","state"), 'UTF-8'));
}?></li>
        </ol>
    </div>
</div>

<section class="content pb">
    <div class="container">
        <h2 class="text-center"><strong><?php echo smarty_modifier_capitalize(mb_strtolower(smarty_modifier_get_data($_smarty_tpl->tpl_vars['cityID']->value,"city","city"), 'UTF-8'));
if ($_smarty_tpl->tpl_vars['stateID']->value) {?> - <?php echo smarty_modifier_capitalize(mb_strtolower(smarty_modifier_get_data($_smarty_tpl->tpl_vars['stateID']->value,"state","state"), 'UTF-8'));
}?></strong> <?php if ($_smarty_tpl->tpl_vars['type']->value == "lastik") {?>Lastik<?php } else { ?>Akü<?php }?> Bayileri</h2>
        <div class="text-center" style="margin: 15px 0 30px">
            Aşağıda arama kriterlerinize uygun bayilerimiz listelenmektedir. Özelleştirilmiş <strong style="color: #cf2029">haritayı</strong> kullanarak konumuza en yakın bayiyi görebilirsiniz.
        </div>
    </div>
    <div class="merchant-search">
        <div class="map collapse" id="map-collapse">
            <div id="searchmap" style="width: 100%; height: 400px; background: #eee"></div>
        </div>
        <button class="btn btn-red text-center btn-block" data-toggle="collapse" data-target="#map-collapse"><i class="fa fa-fw fa-angle-down" aria-hidden="true"></i>  Haritayı Aç</button>
    </div>
    <div class="container">
        <div class="wrapper">

            <div class="page-header" style="margin-top: 10px">
                <h1>
                    <span class="black">Arama Sonuçları</span>
                </h1>
                <span class="count" style="float: right">
                    <strong><?php echo count($_smarty_tpl->tpl_vars['data']->value);?>
</strong>
                    bayi bulundu
                </span>
                <span class="page" style="float: right">Toplam
                    <strong>1</strong>
                    sayfa
                </span>
            </div>
            <?php $_smarty_tpl->tpl_vars['number'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'number', 0);?>
            <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_merchant_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_merchant']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_merchant'] : false;
$__foreach_merchant_1_saved_item = isset($_smarty_tpl->tpl_vars['merchant']) ? $_smarty_tpl->tpl_vars['merchant'] : false;
$__foreach_merchant_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['merchant'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_merchant'] = new Smarty_Variable(array());
$__foreach_merchant_1_iteration=0;
$_smarty_tpl->tpl_vars['merchant']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['merchant']->value) {
$_smarty_tpl->tpl_vars['merchant']->_loop = true;
$__foreach_merchant_1_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_merchant']->value['last'] = $__foreach_merchant_1_iteration == $__foreach_merchant_1_total;
$__foreach_merchant_1_saved_local_item = $_smarty_tpl->tpl_vars['merchant'];
?>
            <div class="result-item" id="merchant-<?php echo $_smarty_tpl->tpl_vars['merchant']->value->mid;?>
">
                <div class="col-md-6 result-item--left">
                    <div class="col-md-4 result-item--logo">
                        <div class="number"><?php echo $_smarty_tpl->tpl_vars['number']->value++;?>
</div>
                        <div class="hit" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['merchant']->value->hit;?>
 Görüntülenme">
                            <i class="fa fa-fw fa-eye" aria-hidden="true"></i>
                        </div>
                        <img src="<?php if ($_smarty_tpl->tpl_vars['merchant']->value->logo) {
echo base_url($_smarty_tpl->tpl_vars['merchant']->value->logo);
} else {
echo base_url("assets/img/bayilogo1.png");
}?>" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 row">
                        <?php if (smarty_modifier_get_data($_smarty_tpl->tpl_vars['merchant']->value->sales,"sales","image")) {?>
                        <div class="col-md-12 result-item--brand" data-toggle="tooltip" title="Bu İşletme <?php echo smarty_modifier_replace(smarty_modifier_get_data($_smarty_tpl->tpl_vars['merchant']->value->sales,"sales","name"),"Lastik Bayileri",'');?>
 Bayisidir.">
                            <img src="<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['merchant']->value->sales,"sales","image");?>
" alt="" class="img-responsive"/>
                        </div>
                        <?php }?>
                        <div class="col-md-3">
                            <a href="<?php echo base_url("main/contact");?>
/<?php echo $_smarty_tpl->tpl_vars['merchant']->value->uri;?>
" class="btn btn-block btn-red">
                                <i class="fa fa-fw fa-envelope" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-md-9 row">
                            <h4><strong><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['merchant']->value->company, 'UTF-8'));?>
</strong></h4>
                            <h6><?php echo mb_strtoupper(smarty_modifier_get_data($_smarty_tpl->tpl_vars['merchant']->value->state,"state","state"), 'UTF-8');?>
, <?php echo mb_strtoupper(smarty_modifier_get_data($_smarty_tpl->tpl_vars['merchant']->value->city,"city","city"), 'UTF-8');?>
</h6>
                        </div>
                        <div class="col-md-12 row">
                            <div class="col-md-6 result-item--comment">
                                <i class="fa fa-fw fa-comment" aria-hidden="true"></i> <?php echo smarty_modifier_comments($_smarty_tpl->tpl_vars['merchant']->value->mid,"merchant");?>
 Yorum
                            </div>
                            <div class="col-md-6 result-item--stars">
                                <i class="fa fa-fw fa-star" aria-hidden="true"></i> <?php echo sprintf("%.2f",smarty_modifier_comments($_smarty_tpl->tpl_vars['merchant']->value->mid,"merchant_stars"));?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 result-item--right">
                    <?php if (smarty_modifier_get_merchant_product($_smarty_tpl->tpl_vars['merchant']->value->mid,"num") > 0) {?>
                    <div class="col-md-12 result-item--top" style="padding-top: <?php if (smarty_modifier_get_services($_smarty_tpl->tpl_vars['merchant']->value->mid,"num") > 0) {?>0<?php } else { ?>25px<?php }?>">
                        <div class="col-md-3">
                            BAYİDEKİ
                            <strong>LASTİK TİPİ</strong>
                        </div>
                        <div class="col-md-9">
                            <?php echo smarty_modifier_get_merchant_product($_smarty_tpl->tpl_vars['merchant']->value->mid);?>

                        </div>
                    </div>
                    <?php }?>
                    <?php if (smarty_modifier_get_services($_smarty_tpl->tpl_vars['merchant']->value->mid,"num") > 0) {?>
                    <div class="col-md-12 result-item--top">
                        <div class="col-md-3 result-item-text">
                            BAYİDEKİ
                            <strong>HİZMETLER</strong>
                        </div>
                        <div class="col-md-9">
                            <?php echo smarty_modifier_get_services($_smarty_tpl->tpl_vars['merchant']->value->mid);?>

                        </div>
                    </div>
                    <?php }?>
                    <div class="col-md-12 result-item--bottom" style="padding-top: <?php if (smarty_modifier_get_merchant_product($_smarty_tpl->tpl_vars['merchant']->value->mid,"num") > 0) {?>10px<?php } else { ?>55px<?php }?>;">
                        <div class="col-md-2">
                            <div class="result-item--icon">
                                <img src="<?php echo base_url("assets/icon/search.png");?>
" class="img-responsive" alt=""/>
                            </div>
                        </div>
                        <div class="col-md-6 row" style="width: 44%;">
                            Bu bayide <strong style="color: #cf2029"><?php echo smarty_modifier_get_analzy($_smarty_tpl->tpl_vars['merchant']->value->mid,"total_category");?>
</strong> kategoride <br/>
                            toplam <strong style="color: #cf2029"><?php echo smarty_modifier_get_analzy($_smarty_tpl->tpl_vars['merchant']->value->mid,"total_product");?>
</strong> ürün satılmaktadır.
                        </div>
                        <div class="col-md-4 result-item--link">
                            <a href="<?php echo base_url("genel/bayi/");?>
/<?php echo $_smarty_tpl->tpl_vars['merchant']->value->uri;?>
">
                                Mağaza Detayını Gör <i class="fa fa-fw fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
            <?php
$_smarty_tpl->tpl_vars['merchant'] = $__foreach_merchant_1_saved_local_item;
}
if ($__foreach_merchant_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_merchant'] = $__foreach_merchant_1_saved;
}
if ($__foreach_merchant_1_saved_item) {
$_smarty_tpl->tpl_vars['merchant'] = $__foreach_merchant_1_saved_item;
}
?>
        </div>
    </div>
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
