<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <title>{$title}</title>
    <meta name="google-site-verification" content="Vwjcz4Fuwn5ioj04sAXYMKWN-2da2ZfsxXLbpThaIxo" />
    <meta content="{$description}" name="description" />
    <meta content="{$keywords}" name="keywords"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{base_url('assets/css/ekko-lightbox.min.css')}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <link rel="stylesheet" type="text/css" href="{base_url('assets/css/main.css')}?v={time()}">

    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/g/jquery@2.2.0,bootstrap@3.3.6"></script>
    <script src="{base_url('assets/js/ekko-lightbox.min.js')}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="{base_url('assets/js/bootbox.min.js')}?v={time()}"></script>
    <script type="text/javascript" src="{base_url('assets/js/jquery.easy-autocomplete.js')}?v={time()}"></script>
    <script type="text/javascript" src="{base_url('assets/js/xzoom.min.js')}?v={time()}"></script>
    <script type="text/javascript" src="{base_url('assets/js/jquery.upload.js')}?v={time()}"></script>
    <script type="text/javascript" src="{base_url('assets/js/bootstrap-select.js')}?v={time()}"></script>
    <script type="text/javascript" src="{base_url('assets/js/front_script.js')}?v={time()}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFieY9LK8hJA1IFlE2y0B7Xqc9jZgbMPQ&libraries=places&sensor=true"></script>
    {literal}
        <script type="text/javascript">
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
                            },
                            battery: {
                                icon: iconBase + 'battery-pin.png?v='+ Math.floor(Date.now())
                            }
                        };

                        document.getElementById("harita").style.display = 'block';
                        map = new google.maps.Map(document.getElementById("harita"), {
                            center: new google.maps.LatLng (enlem, boylam),
                            zoom: 13,
                            icon: icons['user'].icon,
                            styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#ca2031"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]}]
                        });

                        var features = [
                            {/literal}
                            {foreach from=$tire_merchant name=maps item=maps}{assign var=mapz value="#"|explode:$maps["latlng"]} {
                                position: new google.maps.LatLng({$mapz[0]}, {$mapz[1]}),
                                text : '<div style="width: 300px;"><div style="width: 100px; float:left"><img src="{if $maps["logo"]}{base_url($maps["logo"]|replace:".jpg":"_thumb.jpg")}{else}{base_url("assets/img/bayilogo1.png")}{/if}" style="width:100px; height:90px" alt=""></div><div style="width: 200px; float:left"><h6 style="font-size:14px; font-weight:bold; padding:10px 10px 5px">{$maps['company']}</h6><div style="font-size:12px;padding: 0 10px;">{$maps["adress"]}</div><div style="padding:15px 10px 0;font-weight: bold;"><i class="fa fa-heart" style="color: #cf1f29;padding: 0 5px;"></i> Müşteri puanı : {$maps["id"]|comments:"merchant_stars"|string_format:"%.2f"}</div><div style="padding: 20px 0 0;"><a href="{base_url("genel/bayi/")}/{$maps["uri"]}" class="btn btn-red" style="border-radius:5px">Mağazayı Gör</a></div></div></div>',
                                type: 'tire'
                            }{if $smarty.foreach.maps.last}{else},{/if}
                            {/foreach}

                            {foreach from=$battery_merchant name=maps item=maps}{assign var=mapz value="#"|explode:$maps["latlng"]} ,{
                                position: new google.maps.LatLng({($mapz[0]+0.006)}, {($mapz[1]+0.006)}),
                                text : '<div style="width: 300px;"><div style="width: 100px; float:left"><img src="{if $maps["logo"]}{base_url($maps["logo"]|replace:".jpg":"_thumb.jpg")}{else}{base_url("assets/img/bayilogo1.png")}{/if}" style="width:100px; height:90px" alt=""></div><div style="width: 200px; float:left"><h6 style="font-size:14px; font-weight:bold; padding:10px 10px 5px">{$maps['company']}</h6><div style="font-size:12px;padding: 0 10px;">{$maps["adress"]}</div><div style="padding:15px 10px 0;font-weight: bold;"><i class="fa fa-heart" style="color: #cf1f29;padding: 0 5px;"></i> Müşteri puanı : {$maps["id"]|comments:"merchant_stars"|string_format:"%.2f"}</div><div style="padding: 20px 0 0;"><a href="{base_url("genel/bayi/")}/{$maps["uri"]}" class="btn btn-red" style="border-radius:5px">Mağazayı Gör</a></div></div></div>',
                                type: 'battery'
                            }
                            {/foreach}

                            {literal}
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


                $("a[href='#map-tab-2']").on('shown.bs.tab', function (e) {

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
                                },
                                battery: {
                                    icon: iconBase + 'battery-pin.png?v='+ Math.floor(Date.now())
                                }
                            };

                            document.getElementById("map-tire").style.display = 'block';
                            map = new google.maps.Map(document.getElementById("map-tire"), {
                                center: new google.maps.LatLng (enlem, boylam),
                                zoom: 13,
                                icon: icons['user'].icon,
                                styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#ca2031"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]}]
                            });

                            var features = [
                                {/literal}
                                {foreach from=$tire_merchant name=maps item=maps}{assign var=mapz value="#"|explode:$maps["latlng"]} {
                                    position: new google.maps.LatLng({$mapz[0]}, {$mapz[1]}),
                                    text : '<div style="width: 300px;"><div style="width: 100px; float:left"><img src="{if $maps["logo"]}{base_url($maps["logo"]|replace:".jpg":"_thumb.jpg")}{else}{base_url("assets/img/bayilogo1.png")}{/if}" style="width:100px; height:90px" alt=""></div><div style="width: 200px; float:left"><h6 style="font-size:14px; font-weight:bold; padding:10px 10px 5px">{$maps['company']}</h6><div style="font-size:12px;padding: 0 10px;">{$maps["adress"]}</div><div style="padding:15px 10px 0;font-weight: bold;"><i class="fa fa-heart" style="color: #cf1f29;padding: 0 5px;"></i> Müşteri puanı : {$maps["id"]|comments:"merchant_stars"|string_format:"%.2f"}</div><div style="padding: 20px 0 0;"><a href="{base_url("genel/bayi/")}/{$maps["uri"]}" class="btn btn-red" style="border-radius:5px">Mağazayı Gör</a></div></div></div>',
                                    type: 'tire'
                                }{if $smarty.foreach.maps.last}{else},{/if}
                                {/foreach}{literal}
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

                $("a[href='#map-tab-3']").on('shown.bs.tab', function (e) {
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
                                },
                                battery: {
                                    icon: iconBase + 'battery-pin.png?v='+ Math.floor(Date.now())
                                }
                            };

                            document.getElementById("map-battery").style.display = 'block';
                            map = new google.maps.Map(document.getElementById("map-battery"), {
                                center: new google.maps.LatLng (enlem, boylam),
                                zoom: 13,
                                icon: icons['user'].icon,
                                styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#ca2031"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]}]
                            });

                            var features = [
                                {/literal}
                                {foreach from=$battery_merchant name=maps item=maps}{assign var=mapz value="#"|explode:$maps["latlng"]}{
                                    position: new google.maps.LatLng({($mapz[0]+0.006)}, {($mapz[1]+0.006)}),
                                    text : '<div style="width: 300px;"><div style="width: 100px; float:left"><img src="{if $maps["logo"]}{base_url($maps["logo"]|replace:".jpg":"_thumb.jpg")}{else}{base_url("assets/img/bayilogo1.png")}{/if}" style="width:100px; height:90px" alt=""></div><div style="width: 200px; float:left"><h6 style="font-size:14px; font-weight:bold; padding:10px 10px 5px">{$maps['company']}</h6><div style="font-size:12px;padding: 0 10px;">{$maps["adress"]}</div><div style="padding:15px 10px 0;font-weight: bold;"><i class="fa fa-heart" style="color: #cf1f29;padding: 0 5px;"></i> Müşteri puanı : {$maps["id"]|comments:"merchant_stars"|string_format:"%.2f"}</div><div style="padding: 20px 0 0;"><a href="{base_url("genel/bayi/")}/{$maps["uri"]}" class="btn btn-red" style="border-radius:5px">Mağazayı Gör</a></div></div></div>',
                                    type: 'battery'
                                }{if $smarty.foreach.maps.last}{else},{/if}
                                {/foreach}
                                {literal}
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
            })


        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104753086-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-104753086-1');
        </script>
    {/literal}
</head>
<body>
<header>
    <div class="top">
        <div class="container">
            <ul class="info">
                <li><span>Müşteri Hizmetleri: <strong>{$phone}</strong></span></li>
                <li><span>E-posta: <strong>{$email_sistem}</strong></span></li>
            </ul>
            <ul class="social-links">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="middle">
        <div class="container">
            <nav class="navbar">
                <div class="navbar-header">
                    <a id="logo" href="{base_url()}"><img src="{base_url('assets/img/logo.png')}" alt="Site Logo" class="img-responsive"></a>
                    {if !$smarty.session.logged_in}
                        <a href="{base_url("main/login")}" class="up_cart_box">
                            <i class="fa fa-shopping-basket "></i>
                            <span>0</span>
                        </a>

                        <a href="{base_url("main/login")}" class="btn btn-red"><i class="fa fa-circle-o"></i>Giriş Yap</a>
                        <a href="{base_url("main/register")}" class="btn btn-red" style="background-color: #000;"><i class="fa fa-circle-o"></i> Kayıt Ol</a>
                    {else}
                        <a href="{base_url("main/sepetim")}" class="up_cart_box">
                            <i class="fa fa-shopping-basket "></i>
                            <span>0</span>
                        </a>
                        <a href="{base_url("main/logout")}" class="btn btn-black" style="margin-left: 10px"><i class="fa fa-circle-o"></i> Çıkış</a>
                        <a href="{base_url("main/profile")}" class="btn btn-red"><i class="fa fa-circle-o"></i> Yönetim Paneli</a>
                    {/if}

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-collapse  ">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </nav>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="collapse navbar-collapse main-collapse  ">
                <ul class="nav navbar-nav">
                    <li><a href="{base_url()}">Anasayfa</a></li>
                    <li class="dropdown hidden">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kurumsal <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            {foreach from=$pages item=page}
                            <li><a href="{base_url("main/page/")}/{$page->uri}">{$page->subject}</a></li>
                            {/foreach}
                        </ul>
                    </li>
                    <li><a href="{base_url("main/page/illere-gore-lastik-bul")}">Harita</a></li>
                    <li><a href="{base_url("lastik-markalari")}">Lastik Markaları</a></li>
                    <li><a href="{base_url("lastik-saticilari")}">Lastik Satıcıları</a></li>
                    <li><a href="{base_url("main/page/bize-ulasin")}">Bize Ulaşın</a></li>
                </ul>
                <form class="navbar-form navbar-right" role="search" method="get" action="{base_url("main/search")}">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keywords" id="keywords" value="{if $smarty.get.keywords}{$smarty.get.keywords}{/if}" placeholder="Lassa CFR-1502 Kış Lastiği">
                        <span class="input-group-btn">
                            <input type="hidden" value="on" name="menu"/>
                            <button type="submit" class="btn btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>