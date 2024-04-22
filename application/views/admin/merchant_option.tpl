{include file="admin/header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="{base_url("admin/merchant")}"> Bayiler</a></li>
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
                    {if $errorCode eq 2}
                        <div class="alert bg-primary" role="alert">
                            <svg class="glyph stroked empty-message"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-empty-message"></use></svg> {$errorMsg}<a href="{base_url("admin/add/management")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                    {/if}
                    <div class="panel-body">
                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Üyelik tipi</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="normal" {if $status eq "normal"}selected="selected" {/if}>Lastik bayi</option>
                                        <option value="online" {if $status eq "online"}selected="selected" {/if}>Online bayi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Sorumlu adı</label>
                                    <input class="form-control" type="text" name="name" value="{if $name}{$name}{/if}" placeholder="Sorumlu adı">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" type="text" name="description" value="{if $description}{$description}{/if}" placeholder="description">
                                </div>
                                <div class="form-group">
                                    <label>Email <span style="color:red">(*)</span></label>
                                    <input class="form-control" type="text" name="email" value="{if $email}{$email}{/if}" placeholder="Sorumlu adı">
                                </div>
                                <div class="form-group">
                                    <label>Adres</label>
                                    <input class="form-control" type="text" id="adress" name="adress" value="{if $adress}{$adress}{/if}">
                                </div>
                                <div class="col-md-12 form-group">
                                    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnDeB72gPJQ-7QTDKa9ThwQqP95CeiyVI&libraries=places"></script>
                                    <div id="map" style="height: 235px; width: 100%"></div>
                                    <input type="hidden" name="latlng"/>
                                    <script>
                                        {literal}
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
                                        {/literal}
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label>Firma Logosu</label>
                                    <input type="file" name="file" placeholder="Şirket Logosu Ekle"/>
                                </div>
                                <div class="form-group">
                                    <label>Sayfada Arama Aktif mi ?</label>
                                    <select class="form-control" name="search" id="search">
                                        <option value="0" {if $search != ''}selected="selected" {/if}>Hayır</option>
                                        <option value="1" {if $search eq 1}selected="selected" {/if}>Evet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Şirket ismi <span style="color:red">(*)</span></label>
                                    <input class="form-control" type="text" name="company" value="{if $company}{$company}{/if}" placeholder="Şirket adı">
                                </div>
                                <div class="form-group">
                                    <label>Şifre <span style="color:red">(*)</span></label>
                                    <input class="form-control" type="password" name="password" value="12345">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input class="form-control" type="text" name="keywords" value="{if $keywords}{$keywords}{/if}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Web Sitesi</label>
                                    <input class="form-control" type="text" name="web" value="{if $web}{$web}{/if}">
                                </div>
                                <div class="form-group">
                                    <label>Vergi No</label>
                                    <input class="form-control" type="text" id="tc" name="vergino" value="{if $vergino}{$vergino}{/if}">
                                </div>
                                <div class="form-group">
                                    <label>Sabit Cep</label>
                                    <input class="form-control" type="text" id="phone" name="cellphone" value="{if $cellphone}{$cellphone}{/if}">
                                </div>

                                <div class="form-group">
                                    <label>Sabit Tel</label>
                                    <input class="form-control" type="text" id="phone2" name="homephone" value="{if $homephone}{$homephone}{/if}">
                                </div>
                                <div class="form-group city">
                                    <label>Şehir</label>
                                    <select class="form-control" name="city" id="city" data-data="{if $city}{$city}{/if}">
                                        <option value="0">Seçiniz</option>
                                    </select>
                                </div>
                                <div class="form-group state">
                                    <label>İlçe</label>
                                    <select class="form-control" name="state" id="state" data-data="{if $state}{$state}{/if}">
                                        <option value="0">Seçiniz</option>
                                    </select>
                                </div>
                                <div class="form-group city">
                                    <label>Satıcı Marka</label>
                                    <select class="form-control" name="sales" id="sales">
                                        <option value="0">Seçiniz</option>
                                        {foreach from=$saless item=$sale}
                                            <option value="{$sale["id"]}" {if $sales eq $sale["id"]}selected="selected" {/if}>{$sale["name"]}</option>
                                        {/foreach}
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Üyelik Durumu</label>
                                    <select class="form-control" name="accepts" id="accepts">
                                        <option value="on" {if $accepts eq "on"}selected="selected" {/if}>Aktif</option>
                                        <option value="off" {if $accepts eq "off"}selected="selected" {/if}>Passive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="float:right">Kaydet / Güncelle</button>
                            </div>
                        </form>
                    </div>
                    {if $id}
                    <div class="panel-heading">
                        Logo ve Galeri
                        <a href="#" style="float: right" data-id="{if $id}{$id}{/if}" class="btn btn-primary image-btn">Logo Yükle</a>
                        <a href="#" style="float: right; margin-right:10px" data-id="{if $id}{$id}{/if}" class="btn btn-primary gallery-btn">Galeri Yükle</a>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="panel-heading">
                                LOGO
                            </div>
                            <div class="logo row">
                                {if $logo}<img class="img-responsive" src="{base_url({$logo})}" alt="">{/if}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-heading">
                                GALLERİ
                            </div>
                            <div class="gallery row" data-id="{if $id}{$id}{/if}">
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
                                <form action="{base_url("admin/edit/merchant_brand/")}/{if $id}{$id}{/if}" method="post">
                                    {foreach from=$brand item=$brands}
                                    <div class="col-md-8">
                                        {$brands["name"]}
                                    </div>
                                    <div class="col-md-4">
                                        <div class="checkbox" style="margin: 0">
                                            <label>
                                                <input type="checkbox" name="brand[]" value="{$brands["id"]}" {if $id|get_data_num:"merchant_detail":"brand":"data":$brands["id"] > 0}checked{/if}> Evet
                                            </label>
                                        </div>
                                    </div>
                                    {/foreach}
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" style="float:right; margin-top: 20px">Kaydet / Güncelle</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel-heading">Akü markaları</div>
                            <div class="panel-body">
                                <form action="{base_url("admin/edit/merchant_brand_aku/")}/{if $id}{$id}{/if}" method="post">
                                    {foreach from=$brand_aku item=$brand_akus}
                                    <div class="col-md-8">
                                        {$brand_akus["name"]}
                                    </div>
                                    <div class="col-md-4">
                                        <div class="checkbox" style="margin: 0">
                                            <label>
                                                <input type="checkbox" name="brand_aku[]" value="{$brand_akus["id"]}" {if $id|get_data_num:"merchant_detail":"brand_aku":"data":$brands["id"] > 0}checked{/if}> Evet
                                            </label>
                                        </div>
                                    </div>
                                    {/foreach}
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" style="float:right; margin-top: 20px">Kaydet / Güncelle</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {/if}
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

{include file="admin/footer.tpl"}