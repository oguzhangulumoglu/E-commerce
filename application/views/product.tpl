{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
        <span>
          <i class="fa fa-fw fa-circle-o"></i>
          lastik
        </span>
        </div>
        <ol class="breadcrumb pull-right">
            <li>
                <a href="{base_url()}">Anasayfa</a>
            </li>
            <li>
                <a href="{base_url()}">Ürün</a>
            </li>
            {if $page eq "main"}
            <li class="active">{$name|capitalize}</li>
            {elseif $page eq "fiyatlar"}
            <li>
                <a href="{base_url("genel/lastik")}/{$uri}">{$name|capitalize}</a>
            </li>
            <li class="active">Fiyatlar</li>
            {elseif $page eq "yorumlar"}
            <li>
                <a href="{base_url("genel/lastik")}/{$uri}">{$name|capitalize}</a>
            </li>
            <li class="active">Yorumlar</li>
            {elseif $page eq "etiket"}
            <li>
                <a href="{base_url("genel/lastik")}/{$uri}">{$name|capitalize}</a>
            </li>
            <li class="active">Avrupa Etiketi</li>
            {/if}
        </ol>
    </div>
</div>

<section class="product-detail">
<div class="container">
{if $page eq "main"}
<div class="row mb-30">
    <div class="col-sm-6 col-md-5">
        <div id="carousel-id2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            {foreach from=$select_img name=foo key=k item=img}
                <div class="item {if $smarty.foreach.foo.first}active{/if}">
                    <img src="{base_url($img->image)}" class="img-responsive center-block">
                </div>
            {/foreach}
            </div>
        </div>
        <div class="slider-controls">
            <a class="left carousel-control" href="#carousel-id2" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <ol class="carousel-indicators">
            {foreach from=$select_img name=foo key=k item=img}
                <li data-target="#carousel-id2" id="{$img->id}" data-slide-to="{$k}" {if $smarty.foreach.foo.first} class="active"{/if}>
                    <img src="{base_url($img->image)}" alt="" class="img-responsive">
                </li>
            {/foreach}
            </ol>
            <a class="right carousel-control" href="#carousel-id2" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>

        <div class="product-quality">
            <div class="item">
                <span>Güvenlik</span>
                <div class="rating">
                    <i class="fa {if $guvenlik < 1}fa-star-o{elseif $guvenlik > 1}fa-star{/if}"></i>
                    <i class="fa {if $guvenlik < 2}fa-star-o{elseif $guvenlik > 2}fa-star{/if}"></i>
                    <i class="fa {if $guvenlik < 3}fa-star-o{elseif $guvenlik > 3}fa-star{/if}"></i>
                    <i class="fa {if $guvenlik < 4}fa-star-o{elseif $guvenlik > 4}fa-star{/if}"></i>
                    <i class="fa {if $guvenlik < 5}fa-star-o{elseif $guvenlik > 5}fa-star{/if}"></i>
                </div>
            </div>
            <div class="item">
                <span>Tasarruf</span>
                <div class="rating">
                    <i class="fa {if $tasarruf < 1}fa-star-o{elseif $tasarruf > 1}fa-star{/if}"></i>
                    <i class="fa {if $tasarruf < 2}fa-star-o{elseif $tasarruf > 2}fa-star{/if}"></i>
                    <i class="fa {if $tasarruf < 3}fa-star-o{elseif $tasarruf > 3}fa-star{/if}"></i>
                    <i class="fa {if $tasarruf < 4}fa-star-o{elseif $tasarruf > 4}fa-star{/if}"></i>
                    <i class="fa {if $tasarruf < 5}fa-star-o{elseif $tasarruf > 5}fa-star{/if}"></i>
                </div>
            </div>
            <div class="item">
                <span>Konfor</span>
                <div class="rating">
                    <i class="fa {if $konfor < 1}fa-star-o{elseif $konfor > 1}fa-star{/if}"></i>
                    <i class="fa {if $konfor < 2}fa-star-o{elseif $konfor > 2}fa-star{/if}"></i>
                    <i class="fa {if $konfor < 3}fa-star-o{elseif $konfor > 3}fa-star{/if}"></i>
                    <i class="fa {if $konfor < 4}fa-star-o{elseif $konfor > 4}fa-star{/if}"></i>
                    <i class="fa {if $konfor < 5}fa-star-o{elseif $konfor > 5}fa-star{/if}"></i>
                </div>
            </div>
        </div>
        <div class="ads" style="width: 468px; height: 60px;margin: 10px 0%;border: 1px solid #ccc;background: #EFEFEE;line-height: 60px;text-align: center;font-size: 22px;">
            Reklam Alanı 468x60
        </div>
    </div>
    <div class="col-sm-6 col-md-7">
        <div class="product-detail-header">
            <div class="product-name">
                <div class="left">
                    <h1>{$name|capitalize}</h1>
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
            <div class="product-price">
                <div class="left">
                    <div class="price">
                        <i class="fa fa-try"></i>
                        {$cheap["price"]["amount"]|number_format:2:".":""}
                    </div>
                    <div class="highlight">
                        <i class="fa fa-star"></i>
                        En ucuz bayinin fiyatıdır.
                    </div>
                </div>
                <div class="right">
                    <a href="{base_url("/genel/lastik/")}/{$uri}/yorumlar">
                        <i class="fa fa-comments-o"></i>
                        Ürün Yorumları
                        <span>({$comments["number"]})</span>
                    </a>
                </div>
            </div>
            <div class="col-md-12 row">
                <a href="{base_url("genel/lastik")}/{$uri}/fiyatlar" style="width: 105%;" class="btn btn-red">Diğer Bayilerin Fiyatlarını Gör</a>
            </div>
        </div>
        <div class="seller">
            <div class="avatar">
                <img src="{if $cheap["price"]["mid"]|get_data:"merchant":"logo"}{base_url($cheap["price"]["mid"]|get_data:"merchant":"logo")}{else}http://via.placeholder.com/96x60{/if}" style="width: 96px; height:60">
            </div>
            <div class="seller-info">
                <div class="name">
                    <b>Satıcı: </b>
                    <a href="{if $cheap["price"]["mid"]|get_data:"merchant":"id"}{base_url("genel/bayi/")}/{$cheap["price"]["mid"]|get_data:"merchant":"uri"}{else}#{/if}">{$cheap["price"]["mid"]|get_data:"merchant":"company"}</a>
                    <span class="rating">
                      <i class="fa {if $cheap["price"]["mid"]|comments:"merchant_stars" eq 1 || $cheap["price"]["mid"]|comments:"merchant_stars" > 1}fa-star{else}fa-star-o{/if}"></i>
                      <i class="fa {if $cheap["price"]["mid"]|comments:"merchant_stars" eq 2 || $cheap["price"]["mid"]|comments:"merchant_stars" > 2}fa-star{else}fa-star-o{/if}"></i>
                      <i class="fa {if $cheap["price"]["mid"]|comments:"merchant_stars" eq 3 || $cheap["price"]["mid"]|comments:"merchant_stars" > 3}fa-star{else}fa-star-o{/if}"></i>
                      <i class="fa {if $cheap["price"]["mid"]|comments:"merchant_stars" eq 4 || $cheap["price"]["mid"]|comments:"merchant_stars" > 4}fa-star{else}fa-star-o{/if}"></i>
                      <i class="fa {if $cheap["price"]["mid"]|comments:"merchant_stars" eq 5}fa-star{else}fa-star-o{/if}"></i>
                      ({$cheap["price"]["mid"]|comments:"merchant_stars"|string_format:"%.2f"})
                    </span>
                </div>
                <div class="comments">
                    <a href="{if $cheap["price"]["mid"]|get_data:"merchant":"id"}{base_url("genel/bayi/")}/{$cheap["price"]["mid"]|get_data:"merchant":"uri"}{else}#{/if}">
                        <i class="fa fa-comments-o"></i>
                        Mağaza Yorumları
                        <span>({$cheap["price"]["mid"]|comments:"merchant"})</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="add-basket">
            <div class="left col-md-10">
                {if $o_merchant->id}
                <div class="add" style="width: 210px; float:left">
                    <div class="input-group">
                        <span class="input-group-addon">+</span>
                        <input type="number" placeholder="1">
                        <span class="input-group-addon">-</span>
                    </div>
                    <button class="btn btn-add"  onclick="addCartModule('{$cheap["price"]["id"]}','1', '{$cheap["price"]["mid"]}');">
                        <i class="fa fa-shopping-cart"></i>
                        SEPETE EKLE
                    </button>
                </div>
                {/if}
                <div class="notify" style=" float:left">
                    <a class="btn btn-compare" href="https://www.facebook.com/sharer/sharer.php?u={base_url("/genel/lastik/")}/{$uri}&t={$name}" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-share" href="https://twitter.com/share?url={base_url("/genel/lastik/")}/{$uri}&text={$name}" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    {if $yakit || $islak || $ses}
                    <a class="btn btn-add" href="{base_url("/genel/lastik/")}/{$uri}/etiket">
                        <i class="fa fa-eur"></i>
                        AVRUPA ETİKETİ
                    </a>
                    {/if}
                </div>
            </div>
            <div class="right col-md-2" data-toggle="tooltip" data-placement="left" title="Kişi bu ürünü inceledi">
                <i class="fa fa-eye"></i>
                {$hit}
            </div>
        </div>
        <div class="product-chars">
            <div class="panel">
                <div class="panel-header">ÜRÜN ÖZELLİKLERİ</div>
                <div class="panel-body">
                    <ul>
                        <li>
                            <span>Mevsim</span>
                            {$season|get_data:"season":"name"}
                        </li>
                        <li>
                            <span>Lastik Boyutu</span>
                            {$tire_width|get_data:"tire_width":"name"}/{$tire_rate|get_data:"tire_rate":"name"}R{$rim_diameter|get_data:"rim_diameter":"name"}
                        </li>
                        {if $weight_index}
                        <li>
                            <span>Ağırlık Endeksi</span>
                            {$weight_index}
                        </li>
                        {/if}
                        <li>
                            <span>Hız Endeksi</span>
                            {$speed_index|get_data:"speed_index":"name"}
                        </li>
                        <li>
                            <span>Araç Kategorisi</span>
                            {$category|get_data:"category":"name"|upper}
                        </li>
                        <li>
                            <span>Lastik Yılı</span>
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<ul class="nav nav-tabs">
    <li  class="active">
        <a href="#product" aria-controls="product" data-toggle="tab">ÜRÜN AÇIKLAMASI</a>
    </li>
    {if $grade}
    <li>
        <a href="#quality" aria-controls="quality" data-toggle="tab">ÜRÜN KALİTESİ</a>
    </li>
    {/if}
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="product">
        <div class="ads" style="width: 729px; height: 90px;margin: 10px 16%;border: 1px solid #ccc;background: #EFEFEE;line-height: 90px;text-align: center;font-size: 22px;">
            Reklam Alanı 729x90
        </div>
        {$property}
    </div>
    {if $grade}
    <div class="tab-pane" id="quality">{$grade}</div>
    {/if}
</div>
{if $offers|count > 0}
<h2 class="shops-header">ÖNERİLEN DİĞER ÜRÜNLER</h2>
<div class="other-products">
    <div id="carousel-id3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="item active">
                <div class="row">
                    {foreach from=$offers name=foo key=k item=offer}
                    <div class="col-sm-6 col-md-3">
                        <div class="product">
                            <a href="{base_url("/genel/lastik")}/{$offer->uri}">
                                <figure>
                                    <div class="img-wrapper">
                                        <img src="{if $offer->id|get_data_image:"image"}{base_url($offer->id|get_data_image:"image")}{else}{base_url("assets/images/no_image.jpg")}{/if}" class="img-responsive center-block">
                                    </div>
                                    <span class="badge">{$offer->brand|get_data:"brand":"name"}</span>
                                    <figcaption>
                                        <h3>{$offer->name}</h3>
                                        <div class="rating">
                                            <i class="fa {if $offer->id|comments:"product_stars" eq 1 || $offer->id|comments:"product_stars" > 1}fa-star{else}fa-star-o{/if}"></i>
                                            <i class="fa {if $offer->id|comments:"product_stars" eq 2 || $offer->id|comments:"product_stars" > 2}fa-star{else}fa-star-o{/if}"></i>
                                            <i class="fa {if $offer->id|comments:"product_stars" eq 3 || $offer->id|comments:"product_stars" > 3}fa-star{else}fa-star-o{/if}"></i>
                                            <i class="fa {if $offer->id|comments:"product_stars" eq 4 || $offer->id|comments:"product_stars" > 4}fa-star{else}fa-star-o{/if}"></i>
                                            <i class="fa {if $offer->id|comments:"product_stars" eq 5}fa-star{else}fa-star-o{/if}"></i>
                                        </div>
                                        <span class="price"><i class="fa fa-try"></i>{$offer->id|get_max_amount}</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>
            {if $offers_last|count > 0}
            <div class="item">
                <div class="row">
                    {foreach from=$offers_last name=foo key=k item=offer_last}
                        <div class="col-sm-6 col-md-3">
                            <div class="product">
                                <a href="{base_url("/genel/lastik")}/{$offer_last->uri}">
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="{if $offer_last->id|get_data_image:"image"}{base_url($offer_last->id|get_data_image:"image")}{else}{base_url("assets/images/no_image.jpg")}{/if}" class="img-responsive center-block">
                                        </div>
                                        <span class="badge">{$offer_last->brand|get_data:"brand":"name"}</span>
                                        <figcaption>
                                            <h3>{$offer_last->name}</h3>
                                            <div class="rating">
                                                <i class="fa {if $offer_last->id|comments:"product_stars" eq 1 || $offer_last->id|comments:"product_stars" > 1}fa-star{else}fa-star-o{/if}"></i>
                                                <i class="fa {if $offer_last->id|comments:"product_stars" eq 2 || $offer_last->id|comments:"product_stars" > 2}fa-star{else}fa-star-o{/if}"></i>
                                                <i class="fa {if $offer_last->id|comments:"product_stars" eq 3 || $offer_last->id|comments:"product_stars" > 3}fa-star{else}fa-star-o{/if}"></i>
                                                <i class="fa {if $offer_last->id|comments:"product_stars" eq 4 || $offer_last->id|comments:"product_stars" > 4}fa-star{else}fa-star-o{/if}"></i>
                                                <i class="fa {if $offer_last->id|comments:"product_stars" eq 5}fa-star{else}fa-star-o{/if}"></i>
                                            </div>
                                            <span class="price"><i class="fa fa-try"></i>{$offer_last->id|get_max_amount}</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>
                    {/foreach}
                </div>
            </div>
            {/if}
        </div>
    </div>
    <div class="slider-controls">
        <a class="left carousel-control" href="#carousel-id3" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#carousel-id3" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>
{/if}
{elseif $page eq "fiyatlar"}
<h2 style="margin-bottom: 20px">{$name}</h2>
<div class="row mb-30">
    <div class="col-md-6">
        <h2 class="shops-header">ÜRÜNÜ SATAN ONLINE MAĞAZALAR</h2>
        <ul class="shops">
            {foreach from=$online_merchants name=foo item=o_merchant}
            <li>
                <div class="left">
                    <div class="price"><i class="fa fa-try"></i>{$o_merchant->amount|string_format:"%.2f"} {if $o_merchant->year}<span style="font-size: 13px;color: #ce202a;"> (<a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="DOT:Lastiğin Üretim Yılıdır">DOT</a> Yılı: {$o_merchant->year} )</span>{/if}</div>
                    <div class="name">
                        <a href="{base_url("genel/bayi")}/{$o_merchant->mid|get_data:"merchant":"uri"}">{$o_merchant->mid|get_data:"merchant":"company"}</a>
                        <p>
                            <span class="rating">
                              <i class="fa {if $o_merchant->mid|comments:"merchant_stars" eq 1 || $o_merchant->mid|comments:"merchant_stars" > 1}fa-star{else}fa-star-o{/if}"></i>
                              <i class="fa {if $o_merchant->mid|comments:"merchant_stars" eq 2 || $o_merchant->mid|comments:"merchant_stars" > 2}fa-star{else}fa-star-o{/if}"></i>
                              <i class="fa {if $o_merchant->mid|comments:"merchant_stars" eq 3 || $o_merchant->mid|comments:"merchant_stars" > 3}fa-star{else}fa-star-o{/if}"></i>
                              <i class="fa {if $o_merchant->mid|comments:"merchant_stars" eq 4 || $o_merchant->mid|comments:"merchant_stars" > 4}fa-star{else}fa-star-o{/if}"></i>
                              <i class="fa {if $o_merchant->mid|comments:"merchant_stars" eq 5}fa-star{else}fa-star-o{/if}"></i>
                              <strong>({$o_merchant->mid|comments:"merchant_stars"|string_format:"%.2f"})</strong>
                            </span>
                        </p>
                        <p>Türkiye'nin her yerine ücretsiz kargo.</p>
                    </div>
                </div>
                <a class="btn" href="https://www.facebook.com/sharer/sharer.php?u={base_url("/genel/lastik/")}/{$uri}/fiyatlar&t={$name}" target="_blank" style="border: 1px solid #ccc;padding: 9px 10px; color: #ce202a;">
                    <i class="fa fa-facebook"></i>
                </a>
                <a class="btn btn-add" href="{base_url("genel/bayi")}/{$o_merchant->mid|get_data:"merchant":"uri"}" target="_blank"><i class="fa fa-eye"></i>BAYİYE GİT</a>
                {if $o_merchant->id}
                <button onclick="addCartModule('{$o_merchant->id}','1', '{$o_merchant->mid}');"  class="btn btn-add"><i class="fa fa-shopping-cart"></i>SEPETE EKLE</button>
                {/if}
            </li>
                {foreachelse}
            <li>
                Üzgünüz, herhangi bir fiyat bulunamadı!
            </li>
            {/foreach}
        </ul>
    </div>
    <div class="col-md-6">
        <h2 class="shops-header">ÜRÜNÜ SATAN BAYİLER</h2>
        <ul class="shops">
            {foreach from=$normal_merchants name=foo2 item=n_merchant}
                <li>
                    <div class="left">
                        <div class="price"><i class="fa fa-try"></i>{$n_merchant->amount|string_format:"%.2f"} {if $n_merchant->year}<span style="font-size: 13px;color: #ce202a;"> (<a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="DOT:Lastiğin Üretim Yılıdır">DOT</a> Yılı: {$n_merchant->year} )</span>{/if}</div>
                        <div class="name">
                            <a href="{base_url("genel/bayi")}/{$n_merchant->mid|get_data:"merchant":"uri"}">{$n_merchant->mid|get_data:"merchant":"company"}</a>
                            <p>
                                <span class="rating">
                                  <i class="fa {if $n_merchant->mid|comments:"merchant_stars" eq 1 || $n_merchant->mid|comments:"merchant_stars" > 1}fa-star{else}fa-star-o{/if}"></i>
                                  <i class="fa {if $n_merchant->mid|comments:"merchant_stars" eq 2 || $n_merchant->mid|comments:"merchant_stars" > 2}fa-star{else}fa-star-o{/if}"></i>
                                  <i class="fa {if $n_merchant->mid|comments:"merchant_stars" eq 3 || $n_merchant->mid|comments:"merchant_stars" > 3}fa-star{else}fa-star-o{/if}"></i>
                                  <i class="fa {if $n_merchant->mid|comments:"merchant_stars" eq 4 || $n_merchant->mid|comments:"merchant_stars" > 4}fa-star{else}fa-star-o{/if}"></i>
                                  <i class="fa {if $n_merchant->mid|comments:"merchant_stars" eq 5}fa-star{else}fa-star-o{/if}"></i>
                                  <strong>({$n_merchant->mid|comments:"merchant_stars"|string_format:"%.2f"})</strong>
                                </span>
                            </p>
                            <p>Türkiye'nin her yerine ücretsiz kargo.</p>
                        </div>
                    </div>
                    <a class="btn" href="https://www.facebook.com/sharer/sharer.php?u={base_url("/genel/lastik/")}/{$uri}/fiyatlar&t={$name}" target="_blank" style="border: 1px solid #ccc;padding: 9px 10px; color: #ce202a;">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-add" href="{base_url("genel/bayi")}/{$n_merchant->mid|get_data:"merchant":"uri"}" target="_blank"><i class="fa fa-eye"></i>BAYİYE GİT</a>
                    {if $o_merchant->id}<button class="btn btn-add" onclick="addCartModule('{$n_merchant->id}','1', '{$n_merchant->mid}');" ><i class="fa fa-shopping-cart"></i>SEPETE EKLE</button>{/if}
                </li>
                {foreachelse}
                <li>
                    Üzgünüz, herhangi bir fiyat bulunamadı!
                </li>
            {/foreach}
        </ul>
    </div>
</div>

{elseif $page eq "yorumlar"}

<section class="product-detail" style="padding:0">
    <div class="container">
        <h2 style="margin-bottom: 10px">{$name}</h2>

        <div class="alert alert-warning">
            <strong>Bilgilendirme!</strong> Yapacağınız yorumlar ürünü satın almak isteyen tüketicilerin fikirlerini etkileyecek ve DOĞRU KARAR VERMELERİNE yardımcı olacaktır. Bu sebeple; ürün hakkında edinmiş olduğunuz kanaatinizi içtenlikle ve doğru bir şekilde belirtmeniz çok önemlidir. Hakaret veya illegal yorumlar editörlerimiz tarafından silinmektedir. Yapacağınız yorumlar için teşekkür ederiz.
        </div>

        <div class="tab-content">
            <div class="tab-pane active" id="comments">

                <div class="panel panel-comment">
                    <div class="panel-header">YORUM YAP</div>
                    <div class="panel-body">
                        <form class="row d-flex align-stretch d-block-sm" name="commentss" method="post">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Adınız Soyadınız">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <input type="text" name="subject" class="form-control" placeholder="Yorum Başlığı">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group rating">
                                            <span>Ürüne Puan Verin</span>
                                            <ul class="rating stars">
                                                <li><i class="fa fa-star grey" data-value="1" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star grey" data-value="2" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star grey" data-value="3" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star grey" data-value="4" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star grey" data-value="5" aria-hidden="true"></i></li>
                                                <li><strong class="note">(<span>0</span>)</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <textarea rows="5" name="text" class="form-control" placeholder="Yorumunuz"></textarea>
                                    <input type="hidden" name="type" value="product"/>
                                    <input type="hidden" name="rating" value="0"/>
                                    <input type="hidden" name="merchantID" value="{$id}"/>
                                </div>
                            </div>
                            <div class="col-sm-2 d-flex">
                                <a id="postComment" class="btn btn-send" style="line-height: 115px;">Gönder</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="comments-section">
                    <div class="comment-header">
                        <span>YORUMLAR<span class="red">({$comments["number"]})</span></span>
                    </div>
                    {foreach from=$comment name=foo2 item=comments}

                        {if $company eq $comments->name|capitalize}

                        <div class="comment admin hidden">
                            <img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-responsive img-circle">
                            <div class="right">
                                <div class="header">
                                    <div class="name">{$comments->name|capitalize}
                                        <span>{$comments->create_time|c_ago}</span>
                                    </div>
                                </div>
                                <div class="body">{$comments->text|capitalize}</div></div>
                            </div>
                        </div>

                        {else}
                            <div class="comment hidden">
                                <img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-responsive img-circle">
                                <div class="right">
                                    <div class="header">
                                        <div class="name">{$comments->name|capitalize}
                                            <span>{$comments->create_time|c_ago}</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <div class="body col-md-10">{$comments->text|capitalize}</div>
                                        <div class="rating col-md-2">
                                            <div class="rate">
                                                <a href="javascript:void(0)" class="positive like" onclick="like({$comments->id})">
                                                    <i class="fa fa-thumbs-up"></i> <strong id="comment-like-{$comments->id}">( {$comments->like} )</strong>
                                                </a>
                                                <a href="javascript:void(0)" class="negative unlike" onclick="unlike({$comments->id})">
                                                    <i class="fa fa-thumbs-down"></i> <strong id="comment-unlike-{$comments->id}">( {$comments->unlike} )</strong>
                                                </a>
                                            </div>
                                            <div class="stars">
                                                <i class="fa {if $comments->rating != '0' || $comments->rating eq 1}fa-star{else}fa-star-o{/if}"></i>
                                                <i class="fa {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2}fa-star{else}fa-star-o{/if}"></i>
                                                <i class="fa {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2 || $comments->rating eq 3}fa-star{else}fa-star-o{/if}"></i>
                                                <i class="fa {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2 || $comments->rating eq 3 || $comments->rating eq 4}fa-star{else}fa-star-o{/if}"></i>
                                                <i class="fa {if $comments->rating != '0' || $comments->rating eq 1 || $comments->rating eq 2 || $comments->rating eq 3 || $comments->rating eq 4 || $comments->rating eq 5}fa-star{else}fa-star-o{/if}"></i> ({$comments->rating|string_format:"%.2f"})
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {/if}
                        {foreachelse}
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <p>Üzgünüm, Herhangi bir yorum yapılmamıştır. İlk yorumu siz yapabilirsiniz</p>
                            </div>
                        </div>
                    {/foreach}
                    <div class="col-md-12">
                        <a href="javascript:void(0)" class="btn btn-red" style="display: block" id="more_comment">Daha Fazla Yorum Göster</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
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

        <div class="col-md-5" style="border: 1px solid #ccc; margin-top: 20px">
            
            <div class="col-md-6">
                
                <div class="col-md-12 row">
                    <img src="{base_url("assets/img/yakit-tasarrufu-sinifi.png")}" alt="" style="display: inline-block;border-top: 1px solid #ccc;border-left: 1px solid #ccc;border-right: 1px solid #ccc;padding: 20px 27px; margin-top: 30px; border-radius: 50px 0 0 0;margin-left: 25.1%; background: #fff"/>
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

            <div class="col-md-6 row">

                <div class="col-md-12">
                    <img src="{base_url("assets/img/islak-yol-tutus-sinifi.png")}" style="display: inline-block;border-top: 1px solid #ccc;border-left: 1px solid #ccc;border-right: 1px solid #ccc;padding: 20px 27px; margin-top: 30px; border-radius: 50px 0 0 0;margin-left: 17%; background: #fff" alt=""/>
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
            <div style="border: 2px solid #CF2029; margin-top: 20px; margin-left: 5px; position: relative;min-height: 400px;">
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