{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>arama sonuçları</span>
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
            <div class="col-sm-3 hidden-xs">
                {$ads["reklam_7"]}
            </div>

            <div class="col-sm-9">
                <div class="wrapper">

                    <div class="page-header">
                        <h1><span class="black">{$merchant["company"]} Bayide Bulunan Arama Sonuçları</span></h1>
                        <div class="search-result pull-right">
                            <span class="page">Toplam {$page} Sayfa</span>
                            <span class="count">{$total} Ürün Bulundu</span>
                        </div>
                    </div>

                    {foreach from=$searchs name=foo item=search}

                        <div class="result {if $smarty.foreach.foo.index is even}lightgrey{/if}">
                            <div class="row row-sm-mg">
                                {if $search->hit > 10}
                                <div class="col-sm-3 col-sm-pd">
                                    <figure class="banner"><span>popüler</span><img src="{if $search->id|get_data_image:"image"}{base_url($search->id|get_data_image:"image")}{else}{base_url("assets/images/no_image.jpg")}{/if}" style="width: 134px; height:126px" alt="" class="img-responsive center-block"></figure>
                                </div>
                                {else}
                                <div class="col-sm-3 col-sm-pd">
                                    <figure><img src="{if $search->id|get_data_image:"image"}{base_url($search->id|get_data_image:"image")}{else}{base_url("assets/images/no_image.jpg")}{/if}" style="width: 134px; height:126px" alt="" class="img-responsive center-block"></figure>
                                </div>
                                {/if}
                                <div class="col-sm-7 col-sm-pd">
                                    <h3 class="result-header">
                                        <a href="{base_url("/bayide-lastik")}/{$merchant["uri"]}/{$search->uri}">{$search->name|capitalize}</a>
                                    </h3>
                                    <style>
                                        .tire-info .description {
                                            font-weight: bold;
                                            padding-right: 10px;
                                            font-size: 12px;
                                        }
                                        .tire-info .value {
                                            padding-left: 10px;
                                            font-size: 12px;
                                        }
                                        .tire-info {
                                            padding: 30px 0;
                                        }
                                    </style>
                                    <div class="result-body">
                                        <ul class="tire-info col-md-6" style="min-height: 140px">
                                            <li><span class="description">Lastik Marka</span>:<span class="value">{$search->brand|get_data:"brand":"name"}</span></li>
                                            <li><span class="description">Lastik Yüksekliği</span>:<span class="value">{$search->tire_width|get_data:"tire_width":"name"}</span></li>
                                            <li><span class="description">Lastik Oranı</span>:<span class="value">{$search->tire_rate|get_data:"tire_rate":"name"}</span></li>
                                            <li><span class="description">Üretim Tarihi</span>:<span class="value">{$search->year}</span></li>
                                        </ul>
                                        <ul class="tire-info col-md-6" style="min-height: 140px">
                                            <li><span class="description">Jant Çapı</span>:<span class="value">{$search->rim_diameter|get_data:"rim_diameter":"name"}</span></li>
                                            <li><span class="description">Hız İndexi</span>:<span class="value">{$search->speed_index|get_data:"speed_index":"name"}</span></li>
                                            <li><span class="description">Mevsim</span>:<span class="value">{$search->season|get_data:"season":"name"}</span></li>
                                        </ul>
                                        <ul class="specs">
                                            <li>Güvenlik
                                                <ul class="rating">
                                                    <li><i class="fa fa-star {if $search->guvenlik < 1}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $search->guvenlik < 2}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $search->guvenlik < 3}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $search->guvenlik < 4}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $search->guvenlik < 6}grey{/if}" aria-hidden="true"></i></li>
                                                </ul>
                                            </li>
                                            <li>Tasarruf
                                                <ul class="rating">
                                                    <li><i class="fa fa-star {if $search->tasarruf < 1}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $search->tasarruf < 2}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $search->tasarruf < 3}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $search->tasarruf < 4}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $search->tasarruf < 6}grey{/if}" aria-hidden="true"></i></li>
                                                </ul>
                                            </li>
                                            <li>Konfor
                                                <ul class="rating">
                                                    <li><i class="fa fa-star {if $search->konfor < 1}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $search->konfor < 2}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $search->konfor < 3}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $search->konfor < 4}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $search->konfor < 6}grey{/if}" aria-hidden="true"></i></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-sm-pd">
                                    <div class="price">
                                        <span class="red" style="color: #CF2029;font-size: 14px;">Min. Fiyat</span>
                                        <span>{$search->id|get_max_amount}</span>
                                    </div>
                                    <a href="{base_url("/bayide-lastik")}/{$merchant["uri"]}/{$search->uri}" class="btn btn-red">Ürün Detayı <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

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
                    <ul class="pagination">
                        {for $foo=1 to $page}
                            <li{if $foo eq $complete} class="active"{/if}><a href="{base_url("main/search")}/{$foo}{if $exp[1]}?{$exp[1]}{/if}">{$foo}</a></li>
                        {/for}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{include file="footer.tpl"}