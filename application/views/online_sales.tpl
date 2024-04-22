{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>bayi giriş</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Bayi Profili</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1>Bayi Paneli</h1>
    </div>
</div>

<section class="vendor-settings">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3">
                {include file="sidebar.tpl"}
            </div>

            <div class="col-sm-8 col-md-9">
                <div class="tab-content">

                    <div class="tab-pane active">
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Stokdaki Ürünlerim</h3>
                        <form action="{base_url("/online/sales")}" method="get">
                            <div class="input-group">
                                <div class="col-md-2">
                                    <label for="">Marka</label>
                                    <select name="category" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        {foreach from=$category name=foo2 item=brands}
                                            {if $brands->id|is:"brand":$id}<option value="{$brands->id}" {if $brands->id eq $smarty.get.category}selected="selected"{/if}>{$brands->name}</option>{/if}
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-2 row" style="margin-right:0!important">
                                    <label for="">Taban Genişliği</label>
                                    <select name="tire_width" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        {foreach from=$select_tire_width name=foo2 item=tire_width}
                                            {if $tire_width->id|is:"tire_width":$id}<option value="{$tire_width->id}" {if $tire_width->id eq $smarty.get.tire_width}selected="selected"{/if}>{$tire_width->name}</option>{/if}
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-2 row" style="margin-right:0!important">
                                    <label for="">Kesit Oranı</label>
                                    <select name="tire_rate" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        {foreach from=$select_tire_rate name=foo2 item=tire_rate}
                                            {if $tire_rate->id|is:"tire_rate":$id}<option value="{$tire_rate->id}" {if $brands->id eq $smarty.get.tire_rate}selected="selected"{/if}>{$tire_rate->name}</option>{/if}
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-2 row" style="margin-right:0!important">
                                    <label for="">Jant Çapı</label>
                                    <select name="rim_diameter" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        {foreach from=$select_rim_diameter name=foo2 item=rim_diameter}
                                            {if $rim_diameter->id|is:"rim_diameter":$id}<option value="{$rim_diameter->id}" {if $rim_diameter->id eq $smarty.get.rim_diameter}selected="selected"{/if}>{$rim_diameter->name}</option>{/if}
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-2 row" style="margin-right:0!important">
                                    <label for="">Mevsim</label>
                                    <select name="season" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        {foreach from=$select_season name=foo2 item=season}
                                            {if $season->id|is:"season":$id}<option value="{$season->id}" {if $season->id eq $smarty.get.season}selected="selected"{/if}>{$season->name}</option>{/if}
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-3 row" style="margin-right:0!important">
                                    <label for="">Ürün adı veya Kodu</label>
                                    <input type="text" name="search" class="form-control" placeholder="Ürün ara">
                                <span class="input-group-btn" style="top: 27px;right: 15px">
                                    <button type="submit" class="btn btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </form>
                        <div class="search-results">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><i class="fa fa-circle" aria-hidden="true"></i> Stok ve Fiyat Girilen Ürünler</h3>
                                </div>

                                {foreach from=$list item=product}

                                    <div class="col-md-12" id="ares_empty_stock{$product->id|get_data:"product":"id"}">
                                        <div class="white-bg">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <figure><img src="{if $product->id|get_data:"product_img":"image"}{base_url($product->id|get_data:"product_img":"image")}{else}{base_url("assets/images/no_image.jpg")}{/if}" alt="" style="max-height: 200px" class="img-responsive center-block"></figure>
                                                </div>
                                                <div class="col-md-8">
                                                    <h4>
                                                        <a href="{base_url("/genel/lastik")}/{$product->id|get_data:"product":"uri"}">
                                                            {$product->id|get_data:"product":"name"}
                                                        </a>
                                                    </h4>
                                                    <ul>
                                                        <li><span>Marka:</span> {$product->id|get_data:"product":"brand"|get_data:"brand":"name"}</li>
                                                        <li><span>Cinsi:</span> {$product->id|get_data:"product":"season"|get_data:"season":"name"}</li>
                                                        <li><span>Kategori:</span> {$product->id|get_data:"product":"category"|get_data:"category":"name"}</li>
                                                    </ul>
                                                    {if $status == "normal"}
                                                        <form action="{base_url("/main/product_online_update")}" method="post">
                                                            <input type="hidden" name="id" value="{$product->id}"/>
                                                            <input type="hidden" name="link" value="{base_url("online/sales")}"/>
                                                            <div class="form-group">
                                                                <label for="">Fiyat:</label>
                                                                <input type="text" name="amount" value="{$product->myamount}" class="form-control" placeholder="0 TL" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Stok:</label>
                                                                <input type="text" name="stock" value="10" class="form-control" placeholder="0" required="">
                                                            </div>
                                                            <input type="submit" class="btn btn-green" value="Güncelle">
                                                        </form>
                                                    {else}
                                                        <form action="{base_url("/main/product_online_update")}" method="post">
                                                            <input type="hidden" name="id" value="{$product->id}"/>
                                                            <input type="hidden" name="link" value="{base_url("online/sales")}"/>
                                                            <div class="form-group">
                                                                <label for="">Fiyat:</label>
                                                                <input type="text" name="amount" value="{$product->amount}" class="form-control" placeholder="0 TL" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">URL:</label>
                                                                <input type="text" name="url" value="{$product->url}" class="form-control" placeholder="http://" required="">
                                                            </div>
                                                            <input type="submit" class="btn btn-green" value="Güncelle">
                                                        </form>
                                                    {/if}

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        <span class="red">Bayi Satış Fiyat</span>
                                                        <span>{$product->myamount|string_format:"%.2f"}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {foreachelse}
                                <div class="col-md-12">
                                    <div class="white-bg">
                                        <div class="row">
                                            <span>Üzgünüm, herhangi bir ürün stoğu ve fiyatı eklenmemiş, lütfen daha sonra tekrar deneyiniz!</span>
                                        </div>
                                    </div>
                                </div>
                                {/foreach}

                            </div>
                            <ul class="pagination">
                                {for $foo=1 to $page}
                                    <li{if $foo eq $complete} class="active"{/if}><a href="{base_url("online/sales/")}/{$foo}">{$foo}</a></li>
                                {/for}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{include file="footer.tpl"}