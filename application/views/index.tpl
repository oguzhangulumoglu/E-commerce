{include file="header.tpl"}

<section class="search-engine">
    <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#size" aria-controls="size" data-toggle="tab">Lastik Ebadına Göre</a>
            </li>
            <li>
                <a href="#model" aria-controls="model" data-toggle="tab">Hızlı Arama</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="size">
                <form class="row" method="get" action="{base_url("main/search")}">
                    <div class="col-sm-3 col-md-3 form-group">
                        <label for="">Marka</label>
                        <div>
                            <select name="brand" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                {foreach from=$select_brand name=foo2 item=brand}
                                    <option value="{$brand->id}">{$brand->name}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-2 form-group">
                        <label for="">Araç Tipi</label>
                        <div>
                            <select name="category" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                {foreach from=$select_category name=foo2 item=category}
                                    <option value="{$category->id}">{$category->name}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 form-group">
                        <label for="">Mevsim</label>
                        <div>
                            <select name="season" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                {foreach from=$select_season name=foo2 item=season}
                                    <option value="{$season->id}">{$season->name}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 form-group">
                        <label for="">Desen</label>
                        <div>
                            <select name="patern" class="selectpicker" data-live-search="true" data-merchant="">
                                <option value="0">Tümü</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2 form-group">
                        <label for="">Taban Genişliği</label>
                        <div>
                            <select name="tire_width" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                {foreach from=$select_tire_width name=foo2 item=tire_width}
                                    <option value="{$tire_width->id}">{$tire_width->name}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2 form-group">
                        <label for="">Kesit Oranı</label>
                        <div>
                            <select name="tire_rate" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                {foreach from=$select_tire_rate name=foo2 item=tire_rate}
                                    <option value="{$tire_rate->id}">{$tire_rate->name}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2 form-group">
                        <label for="">Jant Çapı</label>
                        <div>
                            <select name="rim_diameter" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                {foreach from=$select_rim_diameter name=foo2 item=rim_diameter}
                                    <option value="{$rim_diameter->id}">{$rim_diameter->name}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 form-group">
                        <label for="">Hız Endeksi</label>
                        <div>
                            <select name="speed_index" class="selectpicker" data-live-search="true">
                                <option value="0">Tümü</option>
                                {foreach from=$select_speed_index name=foo2 item=speed_index}
                                    <option value="{$speed_index->id}">{$speed_index->name}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 form-group">
                                <label for="">Şehir</label>
                                <div class="select">
                                    <select name="city" class="form-control">
                                        <option value="0">Tüm Türkiye</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 form-group">
                                <label for="">İlçe</label>
                                <div class="select">
                                    <select name="state" class="form-control">
                                        <option value="0">Tüm İlçe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 text-sm-center">
                                <button type="submit" class="btn btn-red"><i class="fa fa-check"></i> HEMEN BUL</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div role="tabpanel" class="tab-pane" id="model">
                <form class="row" method="get" action="{base_url("main/search")}">
                    <div class="col-sm-12 col-md-12">
                        <div class="row">
                            <div class="col-sm-8 col-md-8 form-group">
                                <label for="">Kelime İle Hızlı Arama</label>
                                <div class="select">
                                    <div class="easy-autocomplete" style="width: 750px!important">
                                        <input type="text" class="form-control" name="keywords" id="keyword" value="" placeholder="Lassa CFR-1502 Kış Lastiği" autocomplete="off" style="width: 750px!important">
                                        <div class="easy-autocomplete-container" id="eac-container-keywords">
                                            <ul style="display: none;"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-sm-center">
                                <button class="btn btn-red">ARA</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<section class="main-area">
<div class="container">
    <!-- SLIDER -->
    <div class="widget-title">
        <div class="controls">
            <a class="left" href="#carousel-id" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right" href="#carousel-id" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
        <div class="hero">EN POPÜLER BAYİLER</div>
        <a href="#" class="more hidden">TÜM BAYİLER
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    {foreach from=$merchant item=merchants}
                        <div class="col-sm-4 col-md-3">
                            <a class="slider-box" href="{base_url("genel/bayi/")}/{$merchants->uri}">
                                <div class="top">
                                    <img style="width: 70px; height: 70px" src="{if $merchants->logo}{base_url($merchants->logo|replace:".jpg":"_thumb.jpg")}{else}{base_url("assets/img/bayilogo1.png")}{/if}">
                                    <div class="right">
                                        <div class="company">{$merchants->company|capitalize:true}</div>
                                        <div class="address">{$merchants->id|get_data:"merchant":"state"|get_data:"state":"state"|capitalize|mb_substr:0:12}, {$merchants->id|get_data:"merchant":"city"|get_data:"city":"city"|capitalize|mb_substr:0:13}</div>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <div class="rating">
                                        <i class="fa fa-heart"></i>
                                        {$merchants->id|comments:"merchant_stars"|string_format:"%.2f"}
                                    </div>
                            <span class="go">Mağaza Detayı
                              <i class="fa fa-angle-right"></i>
                            </span>
                                </div>
                            </a>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
    <!-- #SLIDER -->

    <!-- SATIŞ NOKTALARI -->
    <div class="widget-title map-activaty">
        <div class="hero"><i class="fa fa-car"></i> KONUMUNUZA EN YAKIN MONTAJ VE SATIŞ NOKTALARI</div>
    </div>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs Map-tabs map-activaty">
        <li class="active"><a href="#map-tab-1" data-toggle="tab">TÜMÜ</a></li>
        <li><a href="#map-tab-2" data-toggle="tab">LASTİK BAYİLERİ</a></li>
        <li><a href="#map-tab-3" data-toggle="tab">AKÜ BAYİLERİ</a></li>
        <li><a href="#search" data-toggle="tab">BAYİ ARAMA MOTORU</a></li>
    </ul>

    <div id="harita-error"></div>
    <!-- Tab panes -->
    <div class="tab-content Map-tabs-content map-activaty">
        <div class="tab-pane active" id="map-tab-1">
            <div id="harita" style="width: 100%; height: 400px; background: #eee"></div>
        </div>
        <div class="tab-pane" id="map-tab-2">
            <div id="map-tire" style="width: 100%; height: 400px; background: #eee"></div>
        </div>
        <div class="tab-pane" id="map-tab-3">
            <div id="map-battery" style="width: 100%; height: 400px; background: #eee"></div>
        </div>
        <div class="tab-pane" id="search" style="background: #fff;border: 1px solid #f4f4f4;">

            <div class="col-md-6" style="border-right: 1px solid #ccc;">
                <div class="col-md-12">
                    <h2 style="padding: 15px 0; margin: 0">Lastik Bayisi Ara</h2>
                </div>
                <div class="col-md-6">
                    <img src="{base_url("assets/img/lastikkent-lastik-bayi.png")}" class="img-responsive" alt=""/>
                </div>
                <div class="col-md-6">
                    <form action="{base_url("ile-gore-lastik-bayisi-ara")}" method="get">
                        <div class="form-group">
                            <label for="">ŞEHİR</label>
                            <select class="form-control" name="city" id="city"></select>
                        </div>
                        <div class="form-group">
                            <label for="">İLÇE</label>
                            <select class="form-control" name="state" id="state">
                                <option value="">TÜM İLÇELER</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-red btn-lg">HEMEN ARA</button>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-md-12">
                    <h2 style="padding: 15px 0; margin: 0">Akü Bayisi Ara</h2>
                </div>
                <div class="col-md-6">
                    <img src="{base_url("assets/img/lastikkent-aku-bayi.png")}" class="img-responsive" alt=""/>
                </div>
                <div class="col-md-6">
                    <form action="{base_url("ile-gore-aku-bayisi-ara")}" method="get">
                        <div class="form-group">
                            <label for="">ŞEHİR</label>
                            <select class="form-control" name="city" id="city"></select>
                        </div>
                        <div class="form-group">
                            <label for="">İLÇE</label>
                            <select class="form-control" name="state" id="state">
                                <option value="">TÜM İLÇELER</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-red btn-lg">HEMEN ARA</button>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- #SATIŞ NOKTALARI -->

    <!--SLIDER-->
    <div class="widget-title-secondary">
        POPÜLER ÜRÜNLER
    </div>
    <div id="carousel-id2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    {foreach from=$populer_lastik item=populer}
                        <div class="col-sm-4 col-md-3">
                            <a class="product-item" href="{base_url("/genel/lastik")}/{$populer->uri}" title="{$populer->name}">
                                <div class="product">
                                    <div class="top">
                                        <span class="badge">POPÜLER</span>
                              <span class="stars">
                                <i class="fa fa-star {if $populer->id|comments:"product_stars" eq 1 || $populer->id|comments:"product_stars" > 1}active{/if}"></i>
                                <i class="fa fa-star {if $populer->id|comments:"product_stars" eq 2 || $populer->id|comments:"product_stars" > 2}active{/if}"></i>
                                <i class="fa fa-star {if $populer->id|comments:"product_stars" eq 3 || $populer->id|comments:"product_stars" > 3}active{/if}"></i>
                                <i class="fa fa-star {if $populer->id|comments:"product_stars" eq 4 || $populer->id|comments:"product_stars" > 4}active{/if}"></i>
                                <i class="fa fa-star {if $populer->id|comments:"product_stars" eq 5}active{/if}"></i>
                              </span>
                                    </div>
                                    <figure>
                                        <img src="{if $populer->patern|get_data_image}{base_url($populer->patern|get_data_image)}{else}{base_url("assets/images/no_image.jpg")}{/if}" style="max-height: 188px">
                                    </figure>
                                </div>
                                <div class="detail">
                                    <div class="title">
                                        <small>{$populer->brand|get_data:"brand":"name"|upper}</small>
                                        {$populer->name|capitalize}
                                    </div>
                                    <div class="price">₺ {$populer->id|get_max_amount}</div>
                                    <div class="add">
                                        <i class="fa fa-eye"></i>
                                        DETAYLI İNCELE
                                    </div>
                                </div>
                            </a>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
    <!--#SLIDER-->

    <!-- INFO BOXES -->
    <div class="info-boxes">
        <div class="row">
            <!--box-->
            <div class="col-sm-4">
                <div class="box">
                    <div class="icon"><i class="fa fa-car"></i></div>
                    <div class="title"><strong>YÜZLERCE BAYİ</strong> Lastikkent’de size hizmet etmeyi bekleyen yüzlerce bayi var!</div>
                </div>
            </div><!--box-->

            <!--box-->
            <div class="col-sm-4">
                <div class="box">
                    <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                    <div class="title"><strong>DÜRÜST HİZMET</strong> Lastikkent yüzlerce bayi içinden size en uygun fiyat garantisini sunar.</div>
                </div>
            </div><!--box-->

            <!--box-->
            <div class="col-sm-4">
                <div class="box">
                    <div class="icon"><i class="fa fa-lock"></i></div>
                    <div class="title"><strong>GÜVENLİ</strong> Lastikkent aracılığı ile ürününüzü hızlı ve güvenli alabilirsiniz.</div>
                </div>
            </div><!--box-->
        </div>
    </div>
    <!-- #INFO BOXES -->
</div>
</section>

{if $smarty.get.auth}
    <div class="modal fade bs-example-modal-sm" id="my-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    {if $smarty.get.auth eq 1}
                        <p>Mail adresiniz kaydedilmiştir. Bizi takip ettiğiniz için teşekkür ederiz.</p>
                    {else}
                        <p>Mail adresiniz güncellenmiştir. Bizi takip ettiğiniz için teşekkür ederiz.</p>
                    {/if}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>
{/if}

{include file="footer.tpl"}
