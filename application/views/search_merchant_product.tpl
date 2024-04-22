{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
        <span>
          <i class="fa fa-fw fa-circle-o"></i>
          lastik detayı
        </span>
        </div>
        <ol class="breadcrumb pull-right">
            <li>
                <a href="{base_url()}">Anasayfa</a>
            </li>
            <li>
                <a href="{base_url("/bayi")}/{$merchantUri}/urunler/1">Ürünler</a>
            </li>
            <li>
                <a href="{base_url("/bayi")}/{$merchantUri}/lastik/1"">Lastikler</a>
            </li>
            <li>
                <a href="{base_url("/bayide-ara")}/{$merchantUri}?brand={$brand|get_data:"brand":"id"}"">{$brand|get_data:"brand":"name"}</a>
            </li>
            <li {if $page eq "lastik"}class="active"{/if}>
                <a href="{base_url("/bayide-lastik")}/{$merchantUri}/{$uri}/lastik">{$name|capitalize}</a>
            </li>
            {if $page eq "lastik-yorumlari"}
            <li class="active">
                <a href="{base_url("/bayide-lastik")}/{$merchantUri}/{$uri}/lastik-yorumlari">Lastik Yorumları</a>
            </li>
            {elseif $page eq "marka-yorumlari"}
            <li class="active">
                <a href="{base_url("/bayide-lastik")}/{$merchantUri}/{$uri}/marka-yorumlari">Marka Yorumları</a>
            </li>
            {elseif $page eq "bayi-yorumlari"}
            <li class="active">
                <a href="{base_url("/bayide-lastik")}/{$merchantUri}/{$uri}/bayi-yorumlari">Bayi Yorumları</a>
            </li>
            {elseif $page eq "etiket"}
            <li class="active">
                <a href="{base_url("/bayide-lastik")}/{$merchantUri}/{$uri}/etiket">Avrupa Etiketi</a>
            </li>
            {/if}
        </ol>
    </div>
</div>

<section class="content detail">
<div class="container">
{if $page eq "lastik"}
<div class="row d-flex flex-wrap mb-30">
    <div class="col-xs-12 col-sm-6 col-md-3 order-2 mb-xs-30">
        <div class="panel">
            <div class="panel-header">
                <img src="{base_url("assets/img/tire-icon2.png")}">
                <h3 class="title">ÖZELLİKLER</h3>
            </div>
            <div class="panel-body">
                <div class="title">Özellikler</div>
                <ul class="sidebar">
                    <li>
                        <span>Marka</span>
                        {$brand|get_data:"brand":"name"}
                    </li>
                    <li>
                        <span>Taban Genişliği</span>
                        {$tire_width|get_data:"tire_width":"name"}
                    </li>
                    <li>
                        <span>Kesit Oranı</span>
                        {$tire_rate|get_data:"tire_rate":"name"}
                    </li>
                    <li>
                        <span>Jant Çapı</span>
                        {$rim_diameter|get_data:"rim_diameter":"name"}
                    </li>
                    <li>
                        <span>Hız İndexi</span>
                        {$speed_index|get_data:"speed_index":"name"}
                    </li>
                    <li>
                        <span>Kullanım Türü</span>
                        {$category|get_data:"category":"name"}
                    </li>
                    <li>
                        <span>Mevsim</span>
                        {if $season|get_data:"season":"name" eq "Yaz"}
                            <img src="{base_url("assets/img/sun.png")}" alt="" style="width: 32px; height:32px"/>
                        {/if}
                        {if $season|get_data:"season":"name" eq "Kış"}
                            <img src="{base_url("assets/img/kis.png")}" alt="" style="width: 32px; height:32px;"/>
                        {/if}
                    </li>
                    <li>
                        <span>Ürün Yılı</span>
                        {$id|urunyili}
                    </li>
                    {if $run_flat eq "yes"}<li>
                        <span>Run Flat</span>
                        {if $run_flat eq "yes"}Evet{else}Hayır{/if}
                        </li>
                    {/if}
                    {if $extra_lot eq "yes"}<li>
                        <span>Extra LOT (XL)</span>
                        {if $extra_lot eq "yes"}Evet{else}Hayır{/if}
                        </li>
                    {/if}
                    <li>
                        <a href="{base_url("/bayide-lastik")}/{$merchantUri}/{$uri}/etiket" class="btn btn-red btn-block">AVRUPA ETİKETİ</a>
                    </li>
                </ul>
                <div class="title">Dİğer Bilgiler</div>
                <ul class="sidebar">
                    <li>
                        <span>Garanti Süresi</span>
                        24 Ay (2 Yıl)
                    </li>
                    <li>
                        <span>Stok Kodu</span>
                        <span class="highlighted">LSTKKNT{$id}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 order-1 mb-sm-30">
        <div class="panel">

            <div class="panel-header bg-white hidden-xs">
                <div class="comments">
                    <a href="{base_url("/bayide-lastik")}/{$merchant["uri"]}/{$uri}/lastik-yorumlari" class="comment">
                        <img src="{base_url("assets/img/comment.png")}">
                        <span>Lastik Yorumları</span>
                        {if $stars["lastik"]}({$stars["lastik"]}){/if}
                    </a>
                    <a href="{base_url("/bayide-lastik")}/{$merchant["uri"]}/{$uri}/marka-yorumlari" class="comment">
                        <img src="{base_url("assets/img/comment.png")}">
                        <span>Marka Yorumları</span>
                        {if $stars["marka"]}({$stars["marka"]}){/if}
                    </a>
                    <a href="{base_url("/bayide-lastik")}/{$merchant["uri"]}/{$uri}/bayi-yorumlari" class="comment">
                        <img src="{base_url("assets/img/comment.png")}">
                        <span>Bayi Yorumları</span>
                        {if $stars["bayi"]}({$stars["bayi"]}){/if}
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="product-title">
                    <h1>{$name|capitalize}</h1>
                    <img src="{base_url($brand|get_data:"brand":"image")}" class="img-responsive" style="max-width: 100px;">
                </div>
                <div id="carousel-id2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        {foreach from=$select_img item=img name=foo}
                            <div class="item {if $smarty.foreach.foo.first}active{/if}" id="{$img->id}">
                                <img src="{base_url($img->image)}" alt="" class="img-responsive center-block">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                    <div class="slider-indicator">1/{$select_img_num}</div>
                </div>
                <div class="slider-controls">
                    <a class="left carousel-control" href="#carousel-id2" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <ol class="carousel-indicators">
                        {foreach from=$select_img item=img name=foo}
                            <li data-target="#carousel-id2" data-slide-to="{$img->id}" {if $smarty.foreach.foo.first}class="active"{/if}>
                                <img src="{base_url($img->image)}" />
                            </li>
                        {/foreach}
                    </ol>
                    <a class="right carousel-control" href="#carousel-id2" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 order-3">
        <div class="panel">
            <div class="panel-header">
                <img src="{base_url("assets/img/bucket.png")}">
                <h3 class="title">SATIN AL</h3>
            </div>
            <div class="panel-body checkout">
                <div class="checkout-header">
                    <div class="title">
                        Hemen Satın Al
                  <span class="highlighted">Ürün Kodu:
                    <span>LSTKKNT{$id}</span>
                  </span>
                    </div>
                    <div class="seller">
                        <div class="name" style="width: 75%;">Satıcı:
                            <a href="{base_url("/genel/bayi")}/{$merchant["uri"]}" style="white-space: nowrap;overflow: hidden; text-overflow: ellipsis; display: inline-block; width: 75%; line-height: 10px;">{$merchant["company"]}</a>
                        </div>
                        <div class="rating">{$ratings|string_format:"%.1f"}</div>
                    </div>
                </div>
                <div class="checkout-body">
                    {if $price["year"]}<div class="percent text-center">{$price["year"]} <br/> yılı</div>{/if}
                    <div class="price">
                        <del class="hidden">266,90 TL</del>
                        <strong style="line-height: 50px;">{$price["amount"]|string_format:"%.2f"} TL</strong>
                    </div>
                </div>
                <div class="checkout-footer">
                    <div class="input-group">
                      <span class="input-group-addon azalt">
                        <i class="fa fa-minus"></i>
                      </span>
                      <input type="number" name="quality" placeholder="1" max-stock="{$price["stock"]}">
                      <span class="input-group-addon arttir">
                        <i class="fa fa-plus"></i>
                      </span>
                    </div>
                    <button class="btn btn-add" onclick="addCartModule('{$id}','1', '{$merchant["id"]}');">SEPETE EKLE</button>
                    <br/>
                </div>
                <div class="col-md-12">
                    <p class="text-center">Şuan <strong>{$merchant["company"]}</strong> bayimizde bu üründen stokda toplam <strong>{$price["stock"]}</strong> adet vardır.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-header">ÜRÜN AÇIKLAMASI</div>
    <div class="panel-body">{$property}</div>
</div>

{elseif $page eq "lastik-yorumlari"}
    <h3 style="padding: 0 0 25px 10px">{$name|capitalize} Hakkında Yorumlar</h3>
    <div class="panel panel-default">
        <div class="panel-header">ÜRÜN YORUMLARI</div>
        <div class="panel-body">
            <div class="product-comments">
                {foreach from=$cLastik name=foo2 item=comments}
                    {if $company eq $comments->name|capitalize}
                        <div class="comment">
                            <img class="img-responsive img-circle user-photo" src="{if $company eq $comments->name|capitalize}{if $logo}{base_url($logo)}{else}{base_url("assets/images/no_image.jpg")}{/if}{else}https://ssl.gstatic.com/accounts/ui/avatar_2x.png{/if}">
                            <div class="right" style="margin-bottom: 15px">
                                <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                    <div class="panel-heading" style="padding: 5px 15px; background-color: #cf2029;color: #fff;">
                                        <strong>{$comments->name|capitalize}</strong>
                                        <span class="text-muted" style="font-size: 12px; color: #e6e4e4"> {$comments->create_time|c_ago}</span>
                                        <span class="like pull-right">
                                            <a href="javascript:void(0)" class="like" onclick="like({$comments->id})">
                                                <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-{$comments->id}">( {$comments->like} )</strong>
                                            </a>
                                            <a href="javascript:void(0)" class="unlike" onclick="unlike({$comments->id})" style="background-color: #000">
                                                <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-{$comments->id}">( {$comments->unlike} )</strong>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="panel-body">
                                        {$comments->text|capitalize}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {else}

                        <div class="comment">
                            <img class="img-responsive img-circle user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                            <div class="right" style="margin-bottom: 15px">
                                <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                    <div class="panel-heading" style="padding: 5px 15px;">
                                        <strong>{$comments->name|capitalize}</strong>
                                        <span class="text-muted" style="font-size: 12px"> {$comments->create_time|c_ago}</span>
                                        <span class="like pull-right">
                                            <a href="javascript:void(0)" class="like" onclick="like({$comments->id})">
                                                <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-{$comments->id}">( {$comments->like} )</strong>
                                            </a>
                                            <a href="javascript:void(0)" class="unlike" onclick="unlike({$comments->id})">
                                                <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-{$comments->id}">( {$comments->unlike} )</strong>
                                            </a>
                                        </span>
                                        <span class="star">
                                            <ul class="rating">
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1}{else}grey{/if}" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2}{else}grey{/if}" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2 || $comments->rating eq 3}{else}grey{/if}" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2 || $comments->rating eq 3 || $comments->rating eq 4}{else}grey{/if}" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2 || $comments->rating eq 3 || $comments->rating eq 4 || $comments->rating eq 5}{else}grey{/if}" aria-hidden="true"></i></li>
                                            </ul>
                                        </span>
                                    </div>
                                    <div class="panel-body body">
                                        {$comments->text|capitalize}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/if}

                    {foreachelse}
                    <div class="col-md-12">
                        <div class="comment-body">
                            <p>Üzgünüm, Herhangi bir yorum yapılmamıştır. Ürün hakkında ilk yorumu siz <a href="{base_url("/genel/lastik")}/{$uri}" style="color: red">buradan</a> yapabilirsiniz</p>
                        </div>
                    </div>
                {/foreach}

            </div>
            <div class="panel panel-default hidden">
                <div class="panel-header">Ürüne Yorum Yap</div>
                <div class="panel-body">
                    <form class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Adınız Soyadınız">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Yorum Başlığı">
                            </div>
                            <div class="form-group rating">
                                <span>Puan Ver</span>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> (0)
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea rows="4" class="form-control" placeholder="Yorumunuz"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Yorumu Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{elseif $page eq "marka-yorumlari"}
    <h3 style="padding: 0 0 25px 10px">{$brand|get_data:"brand":"name"} Hakkında Yorumlar</h3>
    <div class="panel panel-default">
        <div class="panel-header">MARKA YORUMLARI</div>
        <div class="panel-body">
            <div class="product-comments">
                {foreach from=$cMarka name=foo2 item=comments}
                    {if $company eq $comments->name|capitalize}
                        <div class="comment">
                            <img class="img-responsive img-circle user-photo" src="{if $company eq $comments->name|capitalize}{if $logo}{base_url($logo)}{else}{base_url("assets/images/no_image.jpg")}{/if}{else}https://ssl.gstatic.com/accounts/ui/avatar_2x.png{/if}">
                            <div class="right" style="margin-bottom: 15px">
                                <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                    <div class="panel-heading" style="padding: 5px 15px; background-color: #cf2029;color: #fff;">
                                        <strong>{$comments->name|capitalize}</strong>
                                        <span class="text-muted" style="font-size: 12px; color: #e6e4e4"> {$comments->create_time|c_ago}</span>
                                        <span class="like pull-right">
                                            <a href="javascript:void(0)" class="like" onclick="like({$comments->id})">
                                                <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-{$comments->id}">( {$comments->like} )</strong>
                                            </a>
                                            <a href="javascript:void(0)" class="unlike" onclick="unlike({$comments->id})" style="background-color: #000">
                                                <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-{$comments->id}">( {$comments->unlike} )</strong>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="panel-body">
                                        {$comments->text|capitalize}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {else}

                        <div class="comment">
                            <img class="img-responsive img-circle user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                            <div class="right" style="margin-bottom: 15px">
                                <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                    <div class="panel-heading" style="padding: 5px 15px;">
                                        <strong>{$comments->name|capitalize}</strong>
                                        <span class="text-muted" style="font-size: 12px"> {$comments->create_time|c_ago}</span>
                                        <span class="like pull-right">
                                            <a href="javascript:void(0)" class="like" onclick="like({$comments->id})">
                                                <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-{$comments->id}">( {$comments->like} )</strong>
                                            </a>
                                            <a href="javascript:void(0)" class="unlike" onclick="unlike({$comments->id})">
                                                <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-{$comments->id}">( {$comments->unlike} )</strong>
                                            </a>
                                        </span>
                                        <span class="star">
                                            <ul class="rating">
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1}{else}grey{/if}" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2}{else}grey{/if}" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2 || $comments->rating eq 3}{else}grey{/if}" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2 || $comments->rating eq 3 || $comments->rating eq 4}{else}grey{/if}" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2 || $comments->rating eq 3 || $comments->rating eq 4 || $comments->rating eq 5}{else}grey{/if}" aria-hidden="true"></i></li>
                                            </ul>
                                        </span>
                                    </div>
                                    <div class="panel-body body">
                                        {$comments->text|capitalize}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/if}

                    {foreachelse}
                    <div class="col-md-12">
                        <div class="comment-body">
                            <p>Üzgünüm, Herhangi bir yorum yapılmamıştır. Marka hakkında ilk yorumu siz <a href="{base_url("/marka/")}/{$brand|get_data:"brand":"id"}/{$brand|get_data:"brand":"name"|lower}-lastikleri" style="color: red">buradan</a> yapabilirsiniz</p>
                        </div>
                    </div>
                {/foreach}

            </div>
            <div class="panel panel-default hidden">
                <div class="panel-header">Ürüne Yorum Yap</div>
                <div class="panel-body">
                    <form class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Adınız Soyadınız">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Yorum Başlığı">
                            </div>
                            <div class="form-group rating">
                                <span>Puan Ver</span>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> (0)
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea rows="4" class="form-control" placeholder="Yorumunuz"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Yorumu Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

{elseif $page eq "bayi-yorumlari"}
    <h3 style="padding: 0 0 25px 10px">{$merchant["company"]} Hakkında Yorumlar</h3>
    <div class="panel panel-default">
        <div class="panel-header">BAYİ YORUMLARI</div>
        <div class="panel-body">
            <div class="product-comments">
                {foreach from=$cBayi name=foo2 item=comments}
                    {if $merchant["company"] eq $comments->name|capitalize}
                        <div class="comment">
                            <img class="img-responsive img-circle user-photo" src="{if $company eq $comments->name|capitalize}{if $logo}{base_url($logo)}{else}{base_url("assets/images/no_image.jpg")}{/if}{else}https://ssl.gstatic.com/accounts/ui/avatar_2x.png{/if}">
                            <div class="right" style="margin-bottom: 15px">
                                <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                    <div class="panel-heading" style="padding: 5px 15px; background-color: #cf2029;color: #fff;">
                                        <strong>{$comments->name|capitalize}</strong>
                                        <span class="text-muted" style="font-size: 12px; color: #e6e4e4"> {$comments->create_time|c_ago}</span>
                                        <span class="like pull-right">
                                            <a href="javascript:void(0)" class="like" onclick="like({$comments->id})">
                                                <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-{$comments->id}">( {$comments->like} )</strong>
                                            </a>
                                            <a href="javascript:void(0)" class="unlike" onclick="unlike({$comments->id})" style="background-color: #000">
                                                <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-{$comments->id}">( {$comments->unlike} )</strong>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="panel-body">
                                        {$comments->text|capitalize}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {else}

                        <div class="comment">
                            <img class="img-responsive img-circle user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                            <div class="right" style="margin-bottom: 15px">
                                <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                    <div class="panel-heading" style="padding: 5px 15px;">
                                        <strong>{$comments->name|capitalize}</strong>
                                        <span class="text-muted" style="font-size: 12px"> {$comments->create_time|c_ago}</span>
                                        <span class="like pull-right">
                                            <a href="javascript:void(0)" class="like" onclick="like({$comments->id})">
                                                <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-{$comments->id}">( {$comments->like} )</strong>
                                            </a>
                                            <a href="javascript:void(0)" class="unlike" onclick="unlike({$comments->id})">
                                                <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-{$comments->id}">( {$comments->unlike} )</strong>
                                            </a>
                                        </span>
                                        <span class="star">
                                            <ul class="rating">
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1}{else}grey{/if}" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2}{else}grey{/if}" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2 || $comments->rating eq 3}{else}grey{/if}" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2 || $comments->rating eq 3 || $comments->rating eq 4}{else}grey{/if}" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2 || $comments->rating eq 3 || $comments->rating eq 4 || $comments->rating eq 5}{else}grey{/if}" aria-hidden="true"></i></li>
                                            </ul>
                                        </span>
                                    </div>
                                    <div class="panel-body body">
                                        {$comments->text|capitalize}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/if}

                    {foreachelse}
                    <div class="col-md-12">
                        <div class="comment-body">
                            <p>Üzgünüm, Herhangi bir yorum yapılmamıştır. Marka hakkında ilk yorumu siz <a href="{base_url("/marka/")}/{$brand|get_data:"brand":"id"}/{$brand|get_data:"brand":"name"|lower}-lastikleri" style="color: red">buradan</a> yapabilirsiniz</p>
                        </div>
                    </div>
                {/foreach}

            </div>
            <div class="panel panel-default hidden">
                <div class="panel-header">Ürüne Yorum Yap</div>
                <div class="panel-body">
                    <form class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Adınız Soyadınız">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Yorum Başlığı">
                            </div>
                            <div class="form-group rating">
                                <span>Puan Ver</span>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> (0)
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea rows="4" class="form-control" placeholder="Yorumunuz"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Yorumu Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{elseif $page eq "etiket"}


<section class="product-detail" style="padding: 20px 0;">
    <div class="container">
        <div class="col-sm-12 col-md-12">
            <div class="product-detail-header">
                <div class="product-name">
                    <div class="left">
                        <h1 style="font-size: 32px">{$name|capitalize} Avrupa Etiketi</h1>
                        <i class="fa {if $id|comments:"product_stars" eq 1 || $id|comments:"product_stars" > 1}fa-star{else}fa-star-o{/if}"></i>
                        <i class="fa {if $id|comments:"product_stars" eq 2 || $id|comments:"product_stars" > 2}fa-star{else}fa-star-o{/if}"></i>
                        <i class="fa {if $id|comments:"product_stars" eq 3 || $id|comments:"product_stars" > 3}fa-star{else}fa-star-o{/if}"></i>
                        <i class="fa {if $id|comments:"product_stars" eq 4 || $id|comments:"product_stars" > 4}fa-star{else}fa-star-o{/if}"></i>
                        <i class="fa {if $id|comments:"product_stars" eq 5}fa-star{else}fa-star-o{/if}"></i>
                        <span class="rating">({$id|comments:"product_stars"}.00)</span>
                    </div>
                    <div class="right">
                        <img src="{base_url($brand|get_data:"brand":"image")}" style="width: 143px;"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <h3 style="border-bottom: 1px solid #CF2029; padding: 15px 0; margin-bottom: 20px;">Avrupa Etiketi Nedir ?</h3>
            <p>
                Lastiğin üzerinde yer almalıdır. Yasalar gereği AB lastik etiketinin bulunması gerekir. Ancak etiket değerini lastik üzerinde bulamıyorsanız, bayinize sorabilir veya web sitemizde arayabilirsiniz.Kasım 2012 tarihinden beri uygulamada olan lastik etiketi, Avrupa standartları gereği, satılan her lastikte olmak zorundadır.
                <br/>
                <br/>
            <h5 style="font-weight: 800">Yakıt verimliliği</h5>
            Lastiklerin aracınızın yakıt tüketiminin %20'sine kadarından sorumlu olabildiğini biliyor muydunuz? Yüksek yakıt verimliliğine sahip lastikler seçmek, aynı depoyla daha çok kilometre yapmanızı sağlarken, CO2 emisyonunuzu da azaltır.
            <br/>
            <br/>
            <h5 style="font-weight: 800">Islak zeminde sürüş hakimiyeti</h5>
            Islak zeminde yüksek sürüş hakimiyeti sınıfına sahip lastikler, ıslak yollarda tam fren uygulandığında daha hızlı durur.
            <br/>
            <br/>
            <h5 style="font-weight: 800">Gürültü</h5>
            Otomobillerden gelen geçiş gürültüsünün bir kısmı lastikler nedeniyledir. İyi bir gürültü sınıfına sahip lastik seçmek, araç sürüşünüzün çevreye olumsuz etkisini de azaltacaktır.
            </p>
        </div>

        <div class="col-md-5" style="border: 1px solid #ccc; margin-top: 60px; background: #fff;">

            <div class="col-md-6" style="padding-top: 40px;">

                <div class="col-md-12 row">
                    <div class="etiket_al" style="width: 120%; margin-top: -2px; border: 1px solid #ccc;margin-bottom: 30px;"">
                    <h2 style="color:#CF2029;font-size: 18px; padding: 10px 5px;">Yakıt Tasarrufu <span style="color: #000">Sınıfı</span></h2>
                    <div class="energy-class">
                        <div class="a"></div>
                        <div class="b"></div>
                        <div class="c"></div>
                        <div class="d"></div>
                        <div class="e"></div>
                        <div class="f"></div>
                        <div class="g"></div>
                        <span class="{$yakit|lower}"></span>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-6 row" style="padding-top: 40px;">

            <div class="col-md-12">
                <div class="etiket_al" style="width: 120%; margin-top: -2px; border: 1px solid #ccc;margin-bottom: 30px;">
                    <h2 style="color:#CF2029;font-size: 18px; padding: 10px 5px;">Islak Yol Tutuşu <span style="color: #000">Sınıfı</span></h2>
                    <div class="energy-class">
                        <div class="a"></div>
                        <div class="b"></div>
                        <div class="c"></div>
                        <div class="d"></div>
                        <div class="e"></div>
                        <div class="f"></div>
                        <div class="g"></div>
                        <span class="{$islak|lower}"></span>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="col-md-2">
        <div style="border: 2px solid #CF2029; margin-top: 20px; margin-left: 5px; position: relative;min-height: 400px;background: #fff;">
            <img src="{base_url("assets/img/gurultu-orani.png")}" alt="" style="display: inline-block;padding: 10px; margin-top: 40px;"/>
            <h2 style="color:#CF2029;font-size: 18px; padding: 20px 5px;" class="text-center">Gürültü <span style="color: #000">Oranı</span></h2>
            <span style="display:inline-block;background: #e31b18; color: #fff;font-size: 28px; width: 100%" class="text-center">{$ses} Db</span>
        </div>
        <img src="{base_url("assets/img/logo.png")}" style="padding: 10px 0" class="img-responsive" alt=""/>

    </div>

</div>
</section>

{/if}

</div>
</section>

{include file="footer.tpl"}