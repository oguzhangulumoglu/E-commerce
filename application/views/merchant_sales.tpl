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

            <div class="col-sm-8 col-md-9">
                <div class="wrapper">
                    <div class="vendor-header">
                        <h1><a href="{base_url("/genel/bayi/")}/{$uri}" style="color: #CF2029">{$company}</a></h1>
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
                        <div class="col-md-7">
                            <span>Mağazanın Ürünleri</span>
                        </div>
                        <div class="col-md-5">
                            <ol class="breadcrumb">
                                <li><a href="{base_url()}">Anasayfa</a></li>
                                <li>Online Mağaza</li>
                                <li class="active">{$productCategory}</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="cart-list-body">

                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="col-md-1 cart-list-body-title">
                                    Sırala
                                </div>
                                <div class="col-md-4">
                                    <form action="https://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}" name="sort" method="get">
                                        <select name="sort" id="sort" class="form-control">
                                            <option {if $smarty.get.sort eq "title.asc"} selected{/if} value="title.asc">Ad</option>
                                            <option {if $smarty.get.sort eq "price.asc"} selected{/if} value="price.asc">Fiyat Artan</option>
                                            <option {if $smarty.get.sort eq "price.desc"} selected{/if} value="price.desc">Fiyat Azalan</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 pull-right">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-1 cart-list-body-title">
                                    Göster
                                </div>
                                <div class="col-md-4">
                                    <form action="https://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}" name="show" method="get">
                                        <select name="show" id="show" class="form-control">
                                            <option {if $smarty.get.show eq "12"} selected{/if} value="12">12</option>
                                            <option {if $smarty.get.show eq "24"} selected{/if} value="24">24</option>
                                            <option {if $smarty.get.show eq "48"} selected{/if} value="48">48</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-md-1 cart-list-body-title" style="text-align: left">
                                    Ürün
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="cart-list-body-list">
                        {foreach from=$data item=product}

                        <article class="col-md-12">
                            {if !$product->stock}
                            <div class="col-md-3 cart-list-body-list-image">
                                {if $product->knock_off eq "yes"}
                                    {if $product->knock_off_type eq "yuzde"}
                                    <span class="discount"> %{$product->knock_off_price} </span>
                                    {/if}
                                {/if}
                                <span class="category-name">{$product->e_category|cat_num:$product->userID:"name"}</span>
                                <img src="{base_url($product->id|get_image:"uri")}" style="max-height: 200px" class="img-responsive" alt=""/>
                            </div>
                            <div class="col-md-9">
                                <div class="cart-sub-body-list-title">
                                    <h2>
                                        <a href="{base_url("/main/urunler")}/{$uri}/{$product->uri}">{$product->title|capitalize}</a>
                                    </h2>
                                    <div class="cart-sub-title">
                                        <span>{$product->e_category|cat_num:$product->userID:"name"}</span>   /   Ürün Kodu: {$product->productCode}
                                    </div>
                                </div>
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
                                    <ul class="rating">
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <p>{$product->short_property|mb_substr:0:170}..</p>
                                </div>
                                <a class="btn btn-red" href="#">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a class="btn btn-red" href="#">
                                    <i class="fa fa-bell"></i>
                                </a>
                                <a class="btn btn-red" href="javascript:void(0)" onclick="addCartModule('{$product->id}','2', '{$product->userID}');">
                                    SEPETE EKLE
                                </a>
                                <a class="btn btn-red pull-right" href="{base_url("/main/urunler")}/{$uri}/{$product->uri}">
                                    ÜRÜN DETAYI <i class="fa fa-angle-double-right"></i>
                                </a>
                            </div>
                            {else}
                            <div class="col-md-3 cart-list-body-list-image">
                                <span class="category-name">{$product->brand|get_data:"brand":"name"}</span>
                                <img src="{if $product->pid|get_data_img:"product_img":"image"}{base_url($product->pid|get_data_img:"product_img":"image")}{else}{base_url("assets/images/no_image.jpg")}{/if}" style="max-height: 200px" class="img-responsive" alt=""/>
                            </div>
                            <div class="col-md-9">
                                <div class="cart-sub-body-list-title">
                                    <h2>
                                        <a href="{base_url("/bayide-lastik/")}/{$uri}/{$product->uri}">{$product->name|capitalize}</a>
                                    </h2>
                                    <div class="cart-sub-title">
                                        <span>{$product->brand|get_data:"brand":"name"}</span>   /   Ürün Kodu: {$product->brand|get_data:"brand":"name"|upper}{$product->pid}
                                    </div>
                                </div>
                                <div class="cart-sub-body-list-price">
                                    <span class="new-price">₺{$product->amount|number_format:2:".":""}</span>
                                    <ul class="rating">
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <p>{$product->property|strip_tags|mb_substr:0:170}..</p>
                                </div>
                                <a class="btn btn-red" href="#">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a class="btn btn-red" href="#">
                                    <i class="fa fa-bell"></i>
                                </a>
                                <a class="btn btn-red" href="javascript:void(0)" onclick="addCartModule('{$product->id}', '1', '{$product->mid}');">
                                    SEPETE EKLE
                                </a>
                                <a class="btn btn-red" href="{base_url("/bayide-lastik/")}/{$uri}/{$product->uri}" target="_blank">
                                    ÜRÜN DETAYI
                                </a>
                            </div>
                            {/if}
                        </article>

                        {foreachelse}
                            <article class="col-md-12">
                                <div>Üzgünüm, herhangi bir ürün bulunamadı. Daha sonra yeniden deneyiniz.</div>
                            </article>
                        {/foreach}
                        <div class="clearfix"></div>
                    </div>

                    <ul class="page">
                        {for $paged=1 to $totalPage}
                            <li><a href="{base_url("/bayi")}/{$uri}/{$type}/{$paged}{if $req}?{$req}{/if}" {if $paged eq $page} class="active"{/if}>{$paged}</a></li>
                        {/for}
                    </ul>

                    <div class="clearfix"></div>
                </div>

            </div>

        </div>
    </div>
</section>

{include file="footer.tpl"}