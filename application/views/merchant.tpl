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

<div class="Bayi-header">
    <div class="container">
        <div class="row">
            <div class="col-md-{if $gallery}6{else}12{/if}">
                <div class="Detail">
                    <div class="row">
                        <div class="col-sm-6 col-md-{if $gallery}12{else}6{/if}">
                            <div class="Main" {if !$gallery}style="border: 0!important"{/if}>
                                <figure>
                                    <img src="{if $logo}{base_url($logo)}{else}{base_url("assets/images/no_image.jpg")}{/if}" style="max-width: 170px; height: 170px">
                                    <figcaption>
                                        <i data-toggle="tooltip" title="Onaylanmış Hesap" class="fa fa-check"></i>
                                    </figcaption>
                                </figure>
                                <div class="right">
                                    <h1>{$company}
                                        <small>{$id|get_data:"merchant":"state"|get_data:"state":"state"|upper}, {$id|get_data:"merchant":"city"|get_data:"city":"city"|upper}</small>
                                    </h1>
                                    <div class="rating">
                                        <div class="stars">
                                            <i class="fa fa-star {if $ratings >= 1}active{/if}"></i>
                                            <i class="fa fa-star {if $ratings >= 2}active{/if}"></i>
                                            <i class="fa fa-star {if $ratings >= 3}active{/if}"></i>
                                            <i class="fa fa-star {if $ratings >= 4}active{/if}"></i>
                                            <i class="fa fa-star {if $ratings eq 5}active{/if}"></i>
                                            <span>({$ratings|string_format:"%.1f"})</span>
                                        </div>
                                        <a class="comments" href="#comments">
                                            <i class="fa fa-comment"></i>
                                            ({$commentNum}) Yorumları Oku
                                        </a>

                                    </div>
                                    {if $search}
                                    <a href="{base_url("main/contact")}/{$uri}" class="btn btn-red" style="float:left">
                                        <i class="fa fa-envelope-o"></i>
                                        MESAJ GÖNDER
                                    </a>
                                    {else}
                                     <a href="{base_url("main/contact")}/{$uri}" class="btn btn-red">
                                         BU MAĞAZA SİZİN Mİ ?
                                     </a>
                                    {/if}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-{if $gallery}12{else}6{/if}">
                            <div class="Address" {if !$gallery}style="border: 0!important; padding: 18px 0;"{/if}>
                                <dl class="dl-horizontal">
                                    <dt {if !$gallery}style="text-align: left"{/if}>Adres</dt>
                                    <dd>{$adress}</dd>
                                    <dt {if !$gallery}style="text-align: left"{/if}>Sabit Telefon</dt>
                                    <dd>{$homephone}</dd>
                                    {if $cellphone}<dt {if !$gallery}style="text-align: left"{/if}>GSM Telefon</dt>
                                    <dd>{if $cellphone}{$cellphone}{else}-{/if}</dd>{/if}
                                </dl>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-{if $gallery}12{else}6{/if}">
                            <div class="Views" {if !$gallery}style="border: 0!important"{/if}>
                                <i class="fa fa-eye"></i>
                                <span>{$company} bayimiz bu <br>zamana kadar
                                <strong>{$hit}</strong>
                                    görüntüleme aldı.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {if $gallery}
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-top: 35px;">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        {foreach from=$gallery name=gallery key=num item=gallerys}
                        <li data-target="#carousel-example-generic" data-slide-to="{$num}" {if $smarty.foreach.gallery.first}class="active"{/if}></li>
                        {/foreach}
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        {foreach from=$gallery name=gallery item=gallerys}
                        <div class="item {if $smarty.foreach.gallery.first}active{/if}">
                            <img src="https://www.lastikkent.com.tr/cache/t.php?src={base_url($gallerys->name)}&h=600&w=800">
                        </div>
                        {/foreach}
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            {/if}
        </div>
    </div>
</div>

<section class="Bayi-detay">
<div class="container">
<div class="row">
    <div class="col-sm-4">
        <div class="Products-list">
            <div class="title">
                <i class="fa fa-shopping-cart"></i>
                MAĞAZANIN ÜRÜNLERİ
            </div>
            <ul class="nav">
                <li {if !$product->e_category} class="active"{/if}>
                    <a href="{base_url("bayi")}/{$uri}/urunler/1">TÜMÜ <span class="badge">({$categorys->id|cat_num:$id:"all"})</span></a>
                </li>
                <li {if $product->e_category eq "lastik"} class="active"{/if}>
                    <a href="{base_url("bayi")}/{$uri}/lastik/1">LASTİK <span class="badge">({$categorys->id|cat_num:$id:"lastik"})</span></a>
                </li>
                {foreach from=$category item=categorys}
                    <li {if $product->e_category eq $categorys->id} class="active"{/if}>
                        <a href="{base_url("bayi")}/{$uri}/{$categorys->uri}/1">{$categorys->name|upper} <span class="badge">({$categorys->id|cat_num:$id:"cat"})</span></a>
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>

    <div class="col-sm-8">
        <div class="Search" style="position: relative">
            <div class="title">
                <i class="fa fa-search"></i>
                MAĞAZADA LASTİK ARA
            </div>
            {if !$search}
                <div class="over" style="position: absolute;background: rgba(0, 0, 0, 0.4);z-index: 9998;width: 100%;height: 78%;"></div>
                <div class="overtext" style="position: absolute;z-index: 99999;background: #fff;padding: 10px 20px;top: 50%;left: 8%;border-radius: 10px;border: 1px solid #a29898;">
                    Bu mağaza lastikkent.com.tr onaylı üyesi olmadığı için, mağaza içi arama motoru çalışmamaktadır.
                </div>
            {/if}
            <div class="body">
                {if !$search}
                <form class="row" action="#" method="post">
                {else}
                <form class="row" method="get" action="{base_url("bayide-ara")}/{$uri}">
                {/if}
                    <div class="col-sm-6 form-group">
                        <label for="">Marka</label>
                        <select name="brand" class="form-control">
                            <option value="0">Tümü</option>
                            {foreach from=$select_brand name=foo2 item=brand}
                                {if $brand->id|is:"brand":$merchantID}<option value="{$brand->id}">{$brand->name}</option>{/if}
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Araç Tipi</label>
                        <select name="category" class="form-control">
                            <option value="0">Tümü</option>
                            {foreach from=$select_category name=foo2 item=category}
                                <option value="{$category->id}">{$category->name}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Mevsim</label>
                        <select name="season" class="form-control">
                            <option value="0">Tümü</option>
                            {foreach from=$select_season name=foo2 item=season}
                                {if $season->id|is:"season":$merchantID}<option value="{$season->id}">{$season->name}</option>{/if}
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Desen</label>
                        <select name="patern" class="form-control" data-merchant="{$merchantID}">
                            <option value="0">Tümü</option>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Taban Genişliği</label>
                        <select name="tire_width" class="form-control">
                            <option value="0">Tümü</option>
                            {foreach from=$select_tire_width name=foo2 item=tire_width}
                                {if $tire_width->id|is:"tire_width":$merchantID}<option value="{$tire_width->id}">{$tire_width->name}</option>{/if}
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Kesit Oranı</label>
                        <select name="tire_rate" class="form-control">
                            <option value="0">Tümü</option>
                            {foreach from=$select_tire_rate name=foo2 item=tire_rate}
                                {if $tire_rate->id|is:"tire_rate":$merchantID}<option value="{$tire_rate->id}">{$tire_rate->name}</option>{/if}
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Jant Çapı</label>
                        <select name="rim_diameter" class="form-control">
                            <option value="0">Tümü</option>
                            {foreach from=$select_rim_diameter name=foo2 item=rim_diameter}
                                {if $rim_diameter->id|is:"rim_diameter":$merchantID}<option value="{$rim_diameter->id}">{$rim_diameter->name}</option>{/if}
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Hız Endeksi</label>
                        <select name="speed_index" class="form-control">
                            <option value="0">Tümü</option>
                            {foreach from=$select_speed_index name=foo2 item=speed_index}
                                {if $speed_index->id|is:"speed_index":$merchantID}<option value="{$speed_index->id}">{$speed_index->name}</option>{/if}
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-red btn-block">
                            <i class="fa fa-check"></i>
                            Hemen Bul
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- TABS -->
<div class="Tabs">
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab-1" data-toggle="tab">HİZMETLER</a>
        </li>
        <li>
            <a href="#tab-2" data-toggle="tab">LASTİK MARKALARI</a>
        </li>
        <li>
            <a href="#tab-3" data-toggle="tab">AKÜ MARKALARI</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="tab-1">
            <div class="row">
                <div class="col-sm-3">
                    <div class="feature">Lastik Değişimi {if $merchant->service_1 > 0}{$merchant->service_1_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_1 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Nitrojen Gaz Dolumu {if $merchant->service_2 > 0}{$merchant->service_2_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_2 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Rot Ayarı {if $merchant->service_3 > 0}{$merchant->service_3_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_3 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Sibop Değişimi {if $merchant->service_4 > 0}{$merchant->service_4_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_4 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Mobil Değişim {if $merchant->service_5 > 0}{$merchant->service_5_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_5 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Yağ Değişim {if $merchant->service_6 > 0}{$merchant->service_6_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_6 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Jant Satış {if $merchant->service_7 > 0}{$merchant->service_7_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_7 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Jant Düzeltme {if $merchant->service_8 > 0}{$merchant->service_8_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_8 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Jant Boyama {if $merchant->service_9 > 0}{$merchant->service_9_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_9 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Balata Değişimi {if $merchant->service_10 > 0}{$merchant->service_10_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_10 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Aksesuar {if $merchant->service_11 > 0}{$merchant->service_11_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_11 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">Balans Ayarı {if $merchant->service_12 > 0}{$merchant->service_12_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_12 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">OTO Yıkama {if $merchant->service_13 > 0}{$merchant->service_13_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_13 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature">OTO Kuaför {if $merchant->service_14 > 0}{$merchant->service_14_amount} <div class="fa fa-try"></div> {/if}
                        {if $merchant->service_14 > 0}<i class="fa fa-check"></i>{else}<i class="fa fa-times"></i>{/if}
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-2">
            <ul>
                {foreach from=$brand item=brands}
                    {if $id|get_data_num:"merchant_detail":"brand":"data":$brands->id > 0}
                        <li class="col-md-3">
                            <a href="{base_url("marka")}/{$brands->id}/{$brands->name|lower|replace:" ":"-"}">
                                <img src="{base_url($brands->image)}" class="img-responsive center-block">
                            </a>
                        </li>
                    {/if}
                {/foreach}
            </ul>
            <div style="clear: both"></div>
        </div>
        <div class="tab-pane" id="tab-3">
            <ul>
                {foreach from=$brand_aku item=brand_akus}
                    {if $id|get_data_num:"merchant_detail":"brand_aku":"data":$brand_akus->id > 0}
                        <li class="col-md-3">
                            <img src="{base_url($brand_akus->image)}" class="img-responsive center-block">
                        </li>
                    {/if}
                {/foreach}
            </ul>
            <div style="clear: both"></div>
        </div>
    </div>
</div>
<!-- #TABS -->


<!-- INFO BOXES -->
<div style="margin-bottom: 30px;" class="info-boxes">
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
<!-- #INFO BOXES -->
{if $populer_lastik|count > 0}
<!--SLIDER-->
<div class="widget-title-secondary">
    MAĞAZANIN POPÜLER ÜRÜNLERİ
</div>
<div id="carousel-id2" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active">
            <div class="row">
                {foreach from=$populer_lastik item=populer}
                    <div class="col-sm-4 col-md-3">
                        <a class="product-item" href="{base_url("/bayide-lastik/")}/{$uri}/{$populer->uri}" title="{$populer->name}">
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
                                    <img src="{if $populer->id|get_data_image}{base_url($populer->id|get_data_image)}{else}{base_url("assets/images/no_image.jpg")}{/if}" style="max-height: 188px">
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
{/if}

<!-- COMMENTS -->
<div class="Bayi-comments" id="comments">
    <div class="title">
        <figure>
            <img src="{if $logo}{base_url($logo)}{else}{base_url("assets/images/no_image.jpg")}{/if}" style="width: 140px; height: 70px">
        </figure>
        <div class="rating">
            <div class="company">{$company}</div>
            <span>
              <i class="fa fa-heart"></i>
              ({$ratings|string_format:"%.1f"}) - {$commentNum} Değerlendirme
            </span>
        </div>
        <div class="stats">
            <strong>
                <i class="fa fa-comment"></i>
                {$company} hakkında {$commentNum} adet yorum var
            </strong>
            <span>Puanlama kullanıcı deneyimleri tarafından verilen bilgiler doğrultusunda oluşturulmaktadır.</span>
        </div>
    </div>
    <div class="body">
        <p class="lead">Mağaza güvenilir mi, siparişleri nasıl ulaştırıyor? Mağaza hakkında bilgi almak, alışveriş tecrübelerinizi paylaşmak ve aynı zamanda başka alışverişçilerin tecrübelerinden yararlanmak için yorum yapabilir veya yorumları okuyabilirsiniz.</p>
        <form name="commentss" method="post" action="#">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="col-md-6">
                        <input type="text" {if $email eq $smarty.session.email} value="{$company}" disabled="disabled" name=""{else} name="name" {/if} class="form-control required" placeholder="Adınız Soyadınız" required style="border-radius: 5px; margin-bottom: 10px;">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="subject" class="form-control" placeholder="Yorum Başlığı" required style="border-radius: 5px;margin-bottom: 10px;">
                    </div>
                    <div class="col-md-12">
                        <textarea name="text" id="" rows="2" class="form-control" placeholder="Yorumunuz" required></textarea>
                    </div>
                    <input type="hidden" name="type" value="merchant"/>
                    <input type="hidden" name="rating" value="0"/>
                    <input type="hidden" name="merchantID" value="{$merchantID}"/>
                    {if $email eq $smarty.session.email}
                        <input type="hidden" name="name" value="{$company}"/>
                        <input type="hidden" name="status" value="1"/>
                    {/if}
                </div>
                <div class="col-md-4 col-lg-3">
                    {if $email neq $smarty.session.email}
                    <div class="rating-comment">
                        <span>YORUMUNU OYLA</span>
                        <div class="stars">
                            <ul class="rating">
                                <li><i class="fa fa-star" data-value="1" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" data-value="2" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" data-value="3" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" data-value="4" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" data-value="5" aria-hidden="true"></i></li>
                                <li><strong class="note" style="font-weight: normal">(<span>0</span>)</strong></li>
                            </ul>
                        </div>
                    </div>
                    {/if}
                    <a href="javascript:void(0)" class="btn btn-red" id="postComment">
                        <i class="fa fa-comment-o"></i>
                        GÖNDER
                    </a>
                </div>
            </div>
        </form>
        {if $commentNum > 0}
        <div class="Comment-list" id="comments_short">
            {foreach from=$comment name=foo2 item=comments}
                {if $company eq $comments->name|capitalize}
                    <div class="comment reply hidden">
                        <div class="title">
                            <div class="left">
                                <strong>{$comments->name|upper}</strong>
                                <time>{$comments->create_time|c_ago}</time>
                                <div class="stars">
                                    <i class="fa fa-star {if $comments->rating >= 1}active{/if}"></i>
                                    <i class="fa fa-star {if $comments->rating >= 2}active{/if}"></i>
                                    <i class="fa fa-star {if $comments->rating >= 3}active{/if}"></i>
                                    <i class="fa fa-star {if $comments->rating >= 4}active{/if}"></i>
                                    <i class="fa fa-star {if $comments->rating eq 5}active{/if}"></i>
                                    <span>({$comments->rating|string_format:"%.1f"})</span>
                                </div>
                            </div>
                            <div class="right">
                                <strong>Bu yorumu yararlı buldunuz mu?</strong>
                                <a href="javascript:void(0)" class="unlike" onclick="unlike({$comments->id})">
                                    <i class="fa fa-angle-down"></i>
                                    <strong id="comment-unlike-{$comments->id}" style="font-weight: normal">( {$comments->unlike} )</strong>
                                </a>
                                <a href="javascript:void(0)" class="like" onclick="like({$comments->id})">
                                    <i class="fa fa-angle-up"></i>
                                    <strong id="comment-like-{$comments->id}" style="font-weight: normal">( {$comments->like} )</strong>
                                </a>
                            </div>
                        </div>
                        <p>{$comments->text|capitalize}</p>
                    </div>
                {else}
                    <div class="comment hidden">
                        <div class="title">
                            <div class="left">
                                <strong>{$comments->name|upper}</strong>
                                <time>{$comments->create_time|c_ago}</time>
                                <div class="stars">
                                    <i class="fa fa-star {if $comments->rating >= 1}active{/if}"></i>
                                    <i class="fa fa-star {if $comments->rating >= 2}active{/if}"></i>
                                    <i class="fa fa-star {if $comments->rating >= 3}active{/if}"></i>
                                    <i class="fa fa-star {if $comments->rating >= 4}active{/if}"></i>
                                    <i class="fa fa-star {if $comments->rating eq 5}active{/if}"></i>
                                    <span>({$comments->rating|string_format:"%.1f"})</span>
                                </div>
                            </div>
                            <div class="right">
                                <strong>Bu yorumu yararlı buldunuz mu?</strong>
                                <a href="javascript:void(0)" class="unlike" onclick="unlike({$comments->id})">
                                    <i class="fa fa-angle-down"></i>
                                    <strong id="comment-unlike-{$comments->id}" style="font-weight: normal">( {$comments->unlike} )</strong>
                                </a>
                                <a href="javascript:void(0)" class="like" onclick="like({$comments->id})">
                                    <i class="fa fa-angle-up"></i>
                                    <strong id="comment-like-{$comments->id}" style="font-weight: normal">( {$comments->like} )</strong>
                                </a>
                            </div>
                        </div>
                        <p>{$comments->text|capitalize}</p>
                    </div>
                {/if}

            {/foreach}

        </div>
        <a href="javascript:void(0)" id="more_comment" class="load-more">DAHA FAZLA YORUM GÖSTER
            <i class="fa fa-angle-down"></i>
        </a>
        {/if}
    </div>
</div>
<!-- #COMMENTS -->
</div>
</section>

{include file="footer.tpl"}