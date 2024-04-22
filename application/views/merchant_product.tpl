{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>mağaza detayı</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li>Mağaza Detay</li>
            <li class="active">{$company}</li>
        </ol>
    </div>
</div>

<section class="content pb">
    <div class="container">
        <div class="row">

            {include file="merchant_sidebar.tpl"}

            {if $product->status eq "passive"}

                <div class="alert alert-danger col-sm-8 col-md-9">
                    <i class="fa fa-plus"></i> İlanınız onay sürecindedir.Editörlerimiz tarafından kurallar çerçevinde herhangi bir mahsur görünmediği takdirde onaylanacaktır! Sadece bu ilanı siz görürsünüz!
                </div>
            {/if}

            <div class="col-sm-8 col-md-9">
                <div class="wrapper">
                    <div class="vendor-header">
                        <h1>{$company}</h1>
                        <span class="location">{$id|get_data:"merchant":"state"|get_data:"state":"state"|capitalize}, {$id|get_data:"merchant":"city"|get_data:"city":"city"|capitalize}</span>
                        {if !$search}
                        <a href="{base_url("main/contact")}/{$uri}" class="question border-dashed">Bu Mağaza Sizin Mi? Yönetmek İçin Tıklayınız.</a>
                        {/if}
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-9">

                <div class="cart-list-page">

                    <div class="cart-list-title">
                        <div class="col-md-6">
                            <span>Ürün Detay</span>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li><a href="{base_url()}">Online Mağaza</a></li>
                                <li>Kategoriler</li>
                                <li><a href="{base_url("/bayi")}/{$uri}/{$productCategory->uri}">{$productCategory->name}</a></li>
                                <li class="active">
                                    <a href="{base_url("/main/urunler/")}/{$uri}/{$product->uri}">Ürün detay</a>
                                </li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12" style="padding: 20px 5px">
                        <div class="col-md-5 image">
                            <div class="col-md-12 first-image">
                                <img src="{base_url("assets/images/no_image.jpg")}" class="img-responsive" alt=""/>
                            </div>
                            {foreach from=$images item=image}
                            <div class="col-md-3">
                                <a href="javascript:void(0)" data-uri="{base_url($image->uri)}">
                                    <img src="{base_url($image->uri)}" class="img-responsive" alt=""/>
                                </a>
                            </div>
                            {/foreach}
                        </div>

                        <div class="col-md-7 content-detail">
                            <h2>{$product->title|capitalize}</h2>
                            <div class="sub-title">
                                <span>{$productCategory->name}</span>   /   Ürün Kodu: {$product->productCode}
                            </div>
                            <div class="col-md-12 row">
                                <div class="cart-sub-body-list-price">
                                    {if $product->knock_off eq "no"}
                                        <span class="new-price">₺{$product->price|number_format:2:".":""}</span>
                                    {else}
                                        <span class="new-price">
                                            {if $product->knock_off_type eq "fiyat"}
                                                ₺{$product->knock_off_price|number_format:2:".":""}
                                            {else}
                                                ₺{($product->price-(($product->price/100)*$product->knock_off_price))|number_format:2:".":""}
                                            {/if}
                                        </span>
                                        <span class="old-price"><del>₺{$product->price|number_format:2:".":""}</del></span>
                                    {/if}
                                    <p>{$product->short_property|capitalize}</p>
                                </div>

                                <div class="col-md-3 row hidden">
                                    <input type="number" value="1" class="form-control" disabled/>
                                </div>
                                <div class="col-md-9 hidden">
                                    <a class="btn btn-red" href="#">
                                        SEPETE EKLE
                                    </a>
                                    <a class="btn btn-red" href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a class="btn btn-red" href="#">
                                        <i class="fa fa-bell"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="exTab1">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a  href="#1a" data-toggle="tab">AÇIKLAMA</a>
                                </li>
                                <li>
                                    <a href="#2a" data-toggle="tab">TAKSİT SEÇENEKLERİ</a>
                                </li>
                                <li>
                                    <a href="#3a" data-toggle="tab">İADE & DEĞİŞİM</a>
                                </li>
                                <li>
                                    <a href="#4a" data-toggle="tab">TESLİMAT BİLGİLERİ</a>
                                </li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="1a">
                                    <p>{$product->property|nl2br|capitalize}</p>
                                </div>
                                <div class="tab-pane" id="2a">
                                    <p>Taksit Seçenekleri Eklenecek</p>
                                </div>
                                <div class="tab-pane" id="3a">
                                    <p>İade ve Değişim Eklenecek</p>
                                </div>
                                <div class="tab-pane" id="4a">
                                    <p>Teslimat Bilgileri Eklenecek</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>

        </div>
    </div>
</section>

{include file="footer.tpl"}