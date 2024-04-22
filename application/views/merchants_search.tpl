{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
        <span>
          <i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>
          arama sonuçları
        </span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Arama Sonuçları</li>
        </ol>
    </div>
</div>

<section class="content pb">
<div class="container">
<div class="row">
<div class="col-sm-3 hidden-xs sticky">
    <div class="search-result--filters">
        <div class="search-result--top">
            <div class="title">Filtreler</div>
            <a class="btn btn-clear" href="{base_url("bayide-ara")}/{$merchant["uri"]} "><i class="fa fa-trash-o"></i> Temizle</a>
        </div>

        <form action="{base_url($smarty.server.REQUEST_URI)}" method="get">

            <div class="search--result--section" style="max-height: 300px; overflow: auto">
                <div class="title">Markalar</div>
                <a class="collapse-select {if !$smarty.get.brand}selected{/if} brand" data-id="0" href="javascript:void(0)">
                    <input type="radio" name="brand" class="form-control" value="0" {if !$smarty.get.brand}checked="checked" {/if}/>
                    TÜMÜ
                </a>
                {foreach from=$select_brand name=foo2 item=brand}
                    {if $brand->id|get_product > 0}
                        {if $brand->id|is:"brand":$merchant["id"]}
                        <a class="collapse-select {if $smarty.get.brand eq $brand->id}selected{/if} brand" data-id="{$brand->id}" href="javascript:void(0)">
                            <input type="radio" name="brand" class="form-control" value="{$brand->id}" {if $smarty.get.brand eq $brand->id}checked="checked" {/if}/>
                            {$brand->name|upper}
                        </a>
                        {/if}
                    {/if}
                {/foreach}
            </div>

            {if $smarty.get.brand}
                <div class="search--result--section patern" data-merchant="{$merchant["id"]}" style="max-height: 300px; overflow: auto">
                    <div class="title">Desenler</div>
                    {foreach from=$select_patern name=foo2 item=patern}
                        {if $patern->id|is:"patern":$merchant["id"]}
                        <a class="collapse-select {if $smarty.get.patern eq $patern->id}selected{/if}" data-id="{$patern->id}" href="javascript:void(0)">
                            <input type="radio" name="patern" class="form-control" value="{$patern->id}" {if $smarty.get.patern eq $patern->id}checked="checked" {/if}/>
                            {$patern->paternName|upper}
                        </a>
                        {/if}
                    {/foreach}
                </div>
            {else}
                <div class="search--result--section patern" data-merchant="{$merchant["id"]}" style="max-height: 300px; overflow: auto"></div>
            {/if}

            <div class="search--result--section">
                <div class="title">Diğer özellikler</div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Taban Genişliği</label>
                        <select name="tire_width" class="form-control">
                            <option value="0">Tümü</option>
                            {foreach from=$select_tire_width name=foo2 item=tire_width}
                                {if $tire_width->id|is:"tire_width":$merchant["id"]}<option value="{$tire_width->id}">{$tire_width->name}</option>{/if}
                            {/foreach}
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label>Kesit Oranı</label>
                        <select name="tire_rate" class="form-control">
                            <option value="0">Tümü</option>
                            {foreach from=$select_tire_rate name=foo2 item=tire_rate}
                                {if $tire_rate->id|is:"tire_rate":$merchant["id"]}<option value="{$tire_rate->id}">{$tire_rate->name}</option>{/if}
                            {/foreach}
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label>Jant Çapı</label>
                        <select name="rim_diameter" class="form-control">
                            <option value="0">Tümü</option>
                            {foreach from=$select_rim_diameter name=foo2 item=rim_diameter}
                                {if $rim_diameter->id|is:"rim_diameter":$merchant["id"]}<option value="{$rim_diameter->id}">{$rim_diameter->name}</option>{/if}
                            {/foreach}
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label>Hız Endeksi</label>
                        <select name="speed_index" class="form-control">
                            <option value="0">Tümü</option>
                            {foreach from=$select_speed_index name=foo2 item=speed_index}
                                {if $speed_index->id|is:"speed_index":$merchant["id"]}<option value="{$speed_index->id}">{$speed_index->name}</option>{/if}
                            {/foreach}
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label>Mevsim</label>
                        <select name="season" class="form-control">
                            <option value="0">Tümü</option>
                            {foreach from=$select_season name=foo2 item=season}
                                {if $season->id|is:"season":$merchant["id"]}<option value="{$season->id}">{$season->name}</option>{/if}
                            {/foreach}
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label>Araç Tipi</label>
                        <select name="category" class="form-control">
                            <option value="0">Tümü</option>
                            {foreach from=$select_category name=foo2 item=category}
                                <option value="{$category->id}">{$category->name}</option>
                            {/foreach}
                        </select>
                    </div>

                </div>
            </div>

            <div class="search--result--section">
                <div class="title">Fiyat Aralığı</div>
                <div class="row">
                    <div class="col-md-6">
                        <label>İtibaren</label>
                        <input type="number" name="min_amount" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label>Kadar</label>
                        <input type="number" name="max_amount" class="form-control">
                    </div>
                </div>
            </div>

            <div class="search-result--submit">
                <button type="submit" class="btn btn-red"><i class="fa fa-check"></i> Uygula</button>
            </div>

        </form>

    </div>
</div>


<div class="col-sm-9">
    <div class="wrapper">

        <div class="page-header">
            <h1>
                <span class="black">{$merchant["company"]} Bayide Bulunan Arama Sonuçları</span>
            </h1>
            <span class="page">Toplam
                <strong>{$page}</strong>
                sayfa
            </span>
            <span class="count">
                <strong>{$total}</strong>
                ürün bulundu
            </span>
        </div>

        {foreach from=$searchs name=foo item=search}

            {if $search->company}

            {else}
                <div class="search-item">
                    <div class="search-item--left">
                        <figure class="brand">
                            <img src="{base_url($search->brand|get_data:"brand":"image")}" class="img-responsive" style="display: inline-block;"/>
                        </figure>
                        <figure style="padding: 15px 0;">
                            <img src="{if $search->id}{if $search->id|get_data_image:"image"}{base_url($search->id|get_data_image:"image")}{else}{base_url("assets/images/no_image.jpg")}{/if}{else}{if $search->id|get_data_image:"image"}{base_url($search->id|get_data_image:"image")}{else}{base_url("assets/images/no_image.jpg")}{/if}{/if}" style="max-width: 134px; max-height:130px">
                        </figure>
                        <div class="ratings">
                            <div class="stars">
                                <i class="fa fa-star {if $search->id|comments:"product_stars" eq 1 || $search->id|comments:"product_stars" > 1}active{/if}"></i>
                                <i class="fa fa-star {if $search->id|comments:"product_stars" eq 2 || $search->id|comments:"product_stars" > 2}active{/if}"></i>
                                <i class="fa fa-star {if $search->id|comments:"product_stars" eq 3 || $search->id|comments:"product_stars" > 3}active{/if}"></i>
                                <i class="fa fa-star {if $search->id|comments:"product_stars" eq 4 || $search->id|comments:"product_stars" > 4}active{/if}"></i>
                                <i class="fa fa-star {if $search->id|comments:"product_stars" eq 5}active{/if}"></i>
                                <span class="rating">({$search->id|comments:"product_stars"}.00)</span>
                            </div>
                            <div class="count">({$search->pid|comments:"product"}) Yorum</div>
                        </div>
                    </div>

                    <div class="search-item--main">
                        <div class="title">{$search->name|capitalize}</div>

                        <ul class="facilities">
                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Mevsim">{$search->season|get_data:"season":"name"}</li>
                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Lastik Yüksekliği">{$search->tire_width|get_data:"tire_width":"name"}</li>
                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Lastik Oranı">{$search->tire_rate|get_data:"tire_rate":"name"}</li>
                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Jant Çapı">{$search->rim_diameter|get_data:"rim_diameter":"name"}</li>
                            {if $search->pid|urunyili}<li data-toggle="tooltip" data-placement="top" title="" data-original-title="Ürün Yılı">{$search->pid|urunyili}</li>{/if}
                        </ul>

                        <ul class="facilities">
                            <li class="facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebookda paylaş">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={base_url("/genel/lastik")}/{$search->uri}&t={$search->name|capitalize}" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter paylaş">
                                <a href="https://twitter.com/share?url={base_url("/genel/lastik")}/{$search->uri}&t={$search->name|capitalize}" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="facilities-secondary">
                            <li>
                                <div class="label">Güvenlik</div>
                                <div class="box">
                                    <img src="{base_url("assets/img/icon@security.png")}">
                                    {$search->guvenlik}.0
                                </div>
                            </li>
                            <li>
                                <div class="label">Tasarruf</div>
                                <div class="box">
                                    <img src="{base_url("assets/img/icon@oil.png")}">
                                    {$search->tasarruf}.0
                                </div>
                            </li>
                            <li>
                                <div class="label">Konfor</div>
                                <div class="box">
                                    <img src="{base_url("assets/img/icon@wheel.png")}">
                                    {$search->konfor}.0
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="search-item--right">
                        <div class="company">
                            <strong>{$search->id|get_amount:"merchant"|get_data:"merchant":"company"}</strong>
                            {$search->id|get_amount:"merchant"|get_data:"merchant":"state"|get_data:"state":"state"|upper}, {$search->id|get_amount:"merchant"|get_data:"merchant":"city"|get_data:"city":"city"|upper}
                            <a href="{if $search->id|get_amount:"merchant"|get_data:"merchant":"id"}{base_url("genel/bayi/")}/{$search->id|get_amount:"merchant"|get_data:"merchant":"uri"}{else}#{/if}">
                                <i class="fa fa-comments-o"></i>
                                ({$search->id|get_amount:"merchant"|comments:"merchant"}) Yorum
                            </a>
                        </div>
                        <div class="rating">
                            <i class="fa fa-heart"></i>
                            {$search->id|get_amount:"merchant"|comments:"merchant_stars"|string_format:"%.2f"}
                        </div>
                        <div class="price">
                            <small>En Ucuz Fiyat</small>
                            {$search->id|get_amount:"amount"|number_format:2:".":""} TL
                        </div>
                        <a href="{base_url("/bayide-lastik")}/{$merchant["uri"]}/{$search->uri}">Fiyatları Gör
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            {/if}

            {foreachelse}
            <div class="col-md-12">
                <div class="white-bg">
                    <div class="row">
                        <span style="padding: 15px;display: inline-block;">Üzgünüm, herhangi bir ürün bulunamadı, lütfen daha sonra tekrar deneyiniz!</span>
                    </div>
                </div>
            </div>
        {/foreach}

        {assign var=exp value="?"|explode:$smarty.server.REQUEST_URI}
        <div class="text-center">
            <ul class="pagination search-result-pagination">
                {if $page > 1}
                    <li><a href="{base_url("/bayide-ara")}/{$merchant["uri"]}/1{if $exp[1]}?{$exp[1]}{/if}"> << </a></li>
                    <li><a href="{base_url("/bayide-ara")}/{$merchant["uri"]}/{if $complete <= 1}1{else}{$complete-1}{/if}{if $exp[1]}?{$exp[1]}{/if}"> < </a></li>
                {/if}
                <li><a href="{base_url("/bayide-ara")}/{$merchant["uri"]}/{$complete}{if $exp[1]}?{$exp[1]}{/if}"> {$complete} </a></li>
                {if $page > 1}
                    <li><a href="{base_url("/bayide-ara")}/{$merchant["uri"]}/{if $page <= $complete+1}{$page}{else}{$complete+1}{/if}{if $exp[1]}?{$exp[1]}{/if}"> > </a></li>
                    <li><a href="{base_url("/bayide-ara")}/{$merchant["uri"]}/{$page}{if $exp[1]}?{$exp[1]}{/if}"> >> </a></li>
                {/if}
            </ul>
        </div>
    </div>
</div>
</div>

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
                <div class="title"><strong>DÜRÜST HİZMET</strong> Lastikkent yüzlerde bayi içinden size en uygun fiyat garantisini sunar.</div>
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

</div>
</section>
{include file="footer.tpl"}
