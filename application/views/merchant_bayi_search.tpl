{include file="header.tpl"}
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
                    {/literal}
                    {foreach from=$data name=merchant item=merchant}{assign var=mapz value="#"|explode:$merchant->latlng}
                    {if $merchant->latlng}
                    {
                        position: new google.maps.LatLng({$mapz[0]}, {$mapz[1]}),
                        text : '<div style="width: 300px;"><div style="width: 100px; float:left"><img src="{if $merchant->logo}{base_url($merchant->logo|replace:".jpg":"_thumb.jpg")}{else}{base_url("assets/img/bayilogo1.png")}{/if}" style="width:100px; height:90px" alt=""></div><div style="width: 200px; float:left"><h6 style="font-size:14px; font-weight:bold; padding:10px 10px 5px">{$merchant->company}</h6><div style="font-size:12px;padding: 0 10px;">{$merchant->adress}</div><div style="padding:15px 10px 0;font-weight: bold;"><i class="fa fa-heart" style="color: #cf1f29;padding: 0 5px;"></i> Müşteri puanı : {$merchant->mid|comments:"merchant_stars"|string_format:"%.2f"}</div><div style="padding: 20px 0 0;"><a href="{base_url("genel/bayi/")}/{$merchant->uri}" class="btn btn-red" style="border-radius:5px">Mağazayı Gör</a></div></div></div>',
                        type: 'tire'
                    }{if $smarty.foreach.merchant.last}{else},{/if}
                    {/if}
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
</script>
{/literal}
<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>arama sonuçları</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li>Bayi Arama</li>
            <li class="active">{$cityID|get_data:"city":"city"|lower|capitalize}{if $stateID} - {$stateID|get_data:"state":"state"|lower|capitalize}{/if}</li>
        </ol>
    </div>
</div>

<section class="content pb">
    <div class="container">
        <h2 class="text-center"><strong>{$cityID|get_data:"city":"city"|lower|capitalize}{if $stateID} - {$stateID|get_data:"state":"state"|lower|capitalize}{/if}</strong> {if $type eq "lastik"}Lastik{else}Akü{/if} Bayileri</h2>
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
                    <strong>{$data|count}</strong>
                    bayi bulundu
                </span>
                <span class="page" style="float: right">Toplam
                    <strong>1</strong>
                    sayfa
                </span>
            </div>
            {assign var=number value=1}
            {foreach from=$data name=merchant item=merchant}
            <div class="result-item" id="merchant-{$merchant->mid}">
                <div class="col-md-6 result-item--left">
                    <div class="col-md-4 result-item--logo">
                        <div class="number">{$number++}</div>
                        <div class="hit" data-toggle="tooltip" title="{$merchant->hit} Görüntülenme">
                            <i class="fa fa-fw fa-eye" aria-hidden="true"></i>
                        </div>
                        <img src="{if $merchant->logo}{base_url($merchant->logo)}{else}{base_url("assets/img/bayilogo1.png")}{/if}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 row">
                        {if $merchant->sales|get_data:"sales":"image"}
                        <div class="col-md-12 result-item--brand" data-toggle="tooltip" title="Bu İşletme {$merchant->sales|get_data:"sales":"name"|replace:"Lastik Bayileri":""} Bayisidir.">
                            <img src="{$merchant->sales|get_data:"sales":"image"}" alt="" class="img-responsive"/>
                        </div>
                        {/if}
                        <div class="col-md-3">
                            <a href="{base_url("main/contact")}/{$merchant->uri}" class="btn btn-block btn-red">
                                <i class="fa fa-fw fa-envelope" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-md-9 row">
                            <h4><strong>{$merchant->company|lower|capitalize}</strong></h4>
                            <h6>{$merchant->state|get_data:"state":"state"|upper}, {$merchant->city|get_data:"city":"city"|upper}</h6>
                        </div>
                        <div class="col-md-12 row">
                            <div class="col-md-6 result-item--comment">
                                <i class="fa fa-fw fa-comment" aria-hidden="true"></i> {$merchant->mid|comments:"merchant"} Yorum
                            </div>
                            <div class="col-md-6 result-item--stars">
                                <i class="fa fa-fw fa-star" aria-hidden="true"></i> {$merchant->mid|comments:"merchant_stars"|string_format:"%.2f"}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 result-item--right">
                    {if $merchant->mid|get_merchant_product:"num" > 0}
                    <div class="col-md-12 result-item--top" style="padding-top: {if $merchant->mid|get_services:"num" > 0}0{else}25px{/if}">
                        <div class="col-md-3">
                            BAYİDEKİ
                            <strong>LASTİK TİPİ</strong>
                        </div>
                        <div class="col-md-9">
                            {$merchant->mid|get_merchant_product}
                        </div>
                    </div>
                    {/if}
                    {if $merchant->mid|get_services:"num" > 0}
                    <div class="col-md-12 result-item--top">
                        <div class="col-md-3 result-item-text">
                            BAYİDEKİ
                            <strong>HİZMETLER</strong>
                        </div>
                        <div class="col-md-9">
                            {$merchant->mid|get_services}
                        </div>
                    </div>
                    {/if}
                    <div class="col-md-12 result-item--bottom" style="padding-top: {if $merchant->mid|get_merchant_product:"num" > 0}10px{else}55px{/if};">
                        <div class="col-md-2">
                            <div class="result-item--icon">
                                <img src="{base_url("assets/icon/search.png")}" class="img-responsive" alt=""/>
                            </div>
                        </div>
                        <div class="col-md-6 row" style="width: 44%;">
                            Bu bayide <strong style="color: #cf2029">{$merchant->mid|get_analzy:"total_category"}</strong> kategoride <br/>
                            toplam <strong style="color: #cf2029">{$merchant->mid|get_analzy:"total_product"}</strong> ürün satılmaktadır.
                        </div>
                        <div class="col-md-4 result-item--link">
                            <a href="{base_url("genel/bayi/")}/{$merchant->uri}">
                                Mağaza Detayını Gör <i class="fa fa-fw fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
            {/foreach}
        </div>
    </div>
</section>

{include file="footer.tpl"}