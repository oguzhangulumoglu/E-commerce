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
                {$ads["reklam_6"]}
            </div>

            <div class="col-sm-9">
                <div class="wrapper">

                    <div class="page-header">
                        <h1><span class="black">{if $smarty.get.state|get_data:"state":"state"|capitalize}{$smarty.get.state|get_data:"state":"state"|capitalize}, {$smarty.get.city|get_data:"city":"city"|capitalize}{/if} Bayi Arama Sonuçları</span></h1>
                        <div class="search-result pull-right">
                            <span class="page">Toplam {$page} Sayfa</span>
                            <span class="count">{$total} Bayi Bulundu</span>
                        </div>
                    </div>

                    {foreach from=$searchs name=foo item=search}

                        <div class="result {if $smarty.foreach.foo.index is even}lightgrey{/if}">
                            <div class="row row-sm-mg">
                                {if $search->hit > 10}
                                <div class="col-sm-3 col-sm-pd">
                                    <figure class="banner"><span>popüler</span><img src="{if $search->logo}{base_url($search->logo)}{else}{base_url("assets/images/no_image.jpg")}{/if}" style="width: 134px; height:126px" alt="" class="img-responsive center-block"></figure>
                                </div>
                                {else}
                                <div class="col-sm-3 col-sm-pd">
                                    <figure><img src="{if $search->logo}{base_url($search->logo)}{else}{base_url("assets/images/no_image.jpg")}{/if}" style="width: 134px; height:126px" alt="" class="img-responsive center-block"></figure>
                                </div>
                                {/if}
                                <div class="col-sm-9 col-sm-pd">
                                    <h3 class="result-header">
                                        <!--<a href="{base_url("/main/merchant")}/{$search->uri}">{$search->company|capitalize} Bayi</a>-->
                                        <a href="{base_url("/genel/bayi/")}/{$search->uri}">{$search->company|capitalize} Bayi</a>
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
                                            padding: 10px 0;
                                        }
                                    </style>
                                    <div class="result-body">
                                        <div class="col-md-12" style="padding: 20px 0 0"><strong>Verilen Hizmetler</strong></div>
                                        <div class="vendor-services">
                                            <ul class="col-md-6 tire-info" style="background-color: #fff; padding: 10px; border-radius: 10px; border: 1px solid #ddd">
                                                <li>Lastik Değişimi <i class="fa fa-fw {if $search->service_1 > 0}fa-check{else}fa-times{/if}"></i></li>
                                                <li>Nitrojen Gaz Dolumu <i class="fa fa-fw {if $search->service_2 > 0}fa-check{else}fa-times{/if}"></i></li>
                                                <li>Rot Ayarı <i class="fa fa-fw {if $search->service_3 > 0}fa-check{else}fa-times{/if}"></i></li>
                                            </ul>
                                            <ul class="col-md-6 tire-info" style="background-color: #fff; padding: 10px; border-radius: 10px;border: 1px solid #ddd">
                                                <li>Sibop Değişimi <i class="fa fa-fw {if $search->service_4 > 0}fa-check{else}fa-times{/if}"></i></li>
                                                <li>Mobil Değişim <i class="fa fa-fw {if $search->service_5 > 0}fa-check{else}fa-times{/if}"></i></li>
                                                <li>Yağ Değişim <i class="fa fa-fw {if $search->service_6 > 0}fa-check{else}fa-times{/if}"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--<a href="{base_url("/main/merchant")}/{$search->uri}" class="btn btn-red" style="display: inline-block; margin-top: 10px">Bayi Detayı <i class="fa fa-angle-right"></i></a>-->
                                    <a href="{base_url("/genel/bayi")}/{$search->uri}" class="btn btn-red" style="display: inline-block; margin-top: 10px">Bayi Detayı <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                    {foreachelse}
                        <div class="col-md-12">
                            <div class="white-bg">
                                <div class="row">
                                    <span style="padding: 15px;display: inline-block;">Üzgünüm, herhangi bir bayi bulunamadı, lütfen daha sonra tekrar deneyiniz!</span>
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