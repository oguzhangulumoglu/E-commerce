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
                <div class="panel panel-default">
                    <div class="panel-body">
                        <figure>
                            <img src="{if $logo}{base_url($logo)}{else}{base_url("assets/img/bayilogo1.png")}{/if}" alt="" class="img-responsive center-block img-circle">
                            <figcaption>
                                <h3>{$company}</h3>
                                <span>{$email}</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                {include file="sidebar.tpl"}
            </div>

            <div class="col-sm-8 col-md-9">
                <div class="tab-content">

                    <div class="tab-pane active">
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Online Lastiklerim / Stoklarım</h3>
                        <form action="{base_url("/main/product_search")}" method="get">
                            <div class="input-group">
                                <div class="col-md-2">
                                    <label for="">Marka</label>
                                    <select name="category" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        {foreach from=$category name=foo2 item=brands}
                                            <option value="{$brands->id}" {if $brands->id eq $smarty.get.category}selected="selected"{/if}>{$brands->name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-2 row" style="margin-right:0!important">
                                    <label for="">Taban Genişliği</label>
                                    <select name="tire_width" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        {foreach from=$select_tire_width name=foo2 item=tire_width}
                                            <option value="{$tire_width->id}" {if $tire_width->id eq $smarty.get.tire_width}selected="selected"{/if}>{$tire_width->name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-2 row" style="margin-right:0!important">
                                    <label for="">Kesit Oranı</label>
                                    <select name="tire_rate" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        {foreach from=$select_tire_rate name=foo2 item=tire_rate}
                                            <option value="{$tire_rate->id}" {if $brands->id eq $smarty.get.tire_rate}selected="selected"{/if}>{$tire_rate->name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-2 row" style="margin-right:0!important">
                                    <label for="">Jant Çapı</label>
                                    <select name="rim_diameter" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        {foreach from=$select_rim_diameter name=foo2 item=rim_diameter}
                                            <option value="{$rim_diameter->id}" {if $rim_diameter->id eq $smarty.get.rim_diameter}selected="selected"{/if}>{$rim_diameter->name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-2 row" style="margin-right:0!important">
                                    <label for="">Mevsim</label>
                                    <select name="season" class="form-control" style="display: initial;float: none; height: 45px; position: initial; border: 0; border-radius: 0;color: #a3a3a3">
                                        <option value="0">Tümü</option>
                                        {foreach from=$select_season name=foo2 item=season}
                                            <option value="{$season->id}" {if $season->id eq $smarty.get.season}selected="selected"{/if}>{$season->name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-3 row" style="margin-right:0!important">
                                    <label for="">Ürün adı veya Kodu</label>
                                    <input type="text" name="search" class="form-control" placeholder="Ürün ara">
                                    <span class="input-group-btn" style="top: 30px;right: 15px">
                                        <button type="submit" class="btn btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </form>
                        <div class="search-results">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><i class="fa fa-circle" aria-hidden="true"></i> Ürünler</h3>
                                </div>

                                {foreach from=$list item=product}

                                    <div class="col-md-12">
                                        <div class="white-bg">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <figure><img src="{if $product->id|get_data:"product_img":"image"}{base_url($product->id|get_data:"product_img":"image")}{else}{base_url("assets/images/no_image.jpg")}{/if}" alt="" style="max-height: 100px" class="img-responsive center-block"></figure>
                                                </div>
                                                <div class="col-md-8">
                                                    <h4>
                                                        <a href="{base_url("/genel/lastik")}/{$product->uri}">
                                                            {$product->name}
                                                        </a>
                                                    </h4>
                                                    <ul>
                                                        <li><span>Marka:</span> {$product->brand|get_data:"brand":"name"}</li>
                                                        <li><span>Cinsi:</span> {$product->season|get_data:"season":"name"}</li>
                                                        <li><span>Kategori:</span> {$product->category|get_data:"category":"name"}</li>
                                                        <li>
                                                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal{$product->id}">Ürün detayı</a>
                                                            <div id="myModal{$product->id}" class="modal fade" role="dialog" style="background: rgba(0,0,0,0.3)">
                                                                <div class="modal-dialog" style="border: 1px solid #ddd;border-radius: 10px;padding: 10px;background: #fff;">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">{$product->name} Ürün Özellikleri</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        Lastik Marka
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        {$product->brand|get_data:"brand":"name"}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Lastik Yüksekliği
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        {$product->tire_width|get_data:"tire_width":"name"}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Lastik Oranı
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        {$product->tire_rate|get_data:"tire_rate":"name"}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Jant Çapı
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        {$product->rim_diameter|get_data:"rim_diameter":"name"}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Hız İndexi
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        {$product->speed_index|get_data:"speed_index":"name"}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Mevsim
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        {$product->season|get_data:"season":"name"}
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-info" data-dismiss="modal">Kapat</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    {if $status == "normal"}
                                                        <form action="{base_url("/main/product_update")}" method="post">
                                                            <input type="hidden" name="id" value="{$product->id}"/>
                                                            <input type="hidden" name="link" value="{$link}"/>
                                                            <div class="form-group">
                                                                <label for="">Yıl:</label>
                                                                <input type="text" name="year" value="{$product->id|get_data_session:"product_amount":"year"}" class="form-control" placeholder="2011" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Fiyat:</label>
                                                                <input type="text" name="amount" value="{$product->id|get_data_session:"product_amount":"amount"}" class="form-control" placeholder="0 TL">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Stok:</label>
                                                                <input type="text" name="stock" value="{$product->id|get_data_session:"product_amount":"stock"}" class="form-control" placeholder="0">
                                                            </div>
                                                            <input type="submit" class="btn btn-green" value="Güncelle">
                                                        </form>
                                                    {else}
                                                        <form action="{base_url("/main/product_update")}" method="post">
                                                            <input type="hidden" name="id" value="{$product->id}"/>
                                                            <input type="hidden" name="link" value="{$link}"/>
                                                            <div class="form-group">
                                                                <label for="">Fiyat:</label>
                                                                <input type="text" name="amount" value="{$product->id|get_data_session:"product_amount":"amount"}" class="form-control" placeholder="0 TL">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">URL:</label>
                                                                <input type="text" name="url" value="{$product->id|get_data_session:"product_amount":"url"}" class="form-control" placeholder="http://">
                                                            </div>
                                                            <input type="submit" class="btn btn-green" value="Güncelle">
                                                        </form>
                                                    {/if}

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        <span class="red">Minimum Fiyat</span>
                                                        <span>{$product->id|get_max_amount}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {foreachelse}
                                <div class="col-md-12">
                                    <div class="white-bg">
                                        <div class="row">
                                            <span>Üzgünüm, herhangi bir ürün eklenmemiş, lütfen daha sonra tekrar deneyiniz!</span>
                                        </div>
                                    </div>
                                </div>
                                {/foreach}

                            </div>

                            {assign var=exp value="?"|explode:$smarty.server.REQUEST_URI}
                            <ul class="pagination">
                                {if $page > 1}
                                    <li><a href="{base_url("main/product_update")}/1{if $exp[1]}?{$exp[1]}{/if}"> << </a></li>
                                    <li><a href="{base_url("main/product_update")}/{if $complete <= 1}1{else}{$complete-1}{/if}{if $exp[1]}?{$exp[1]}{/if}"> < </a></li>
                                {/if}
                                <li class="active"><a href="{base_url("main/product_update")}/{$complete}{if $exp[1]}?{$exp[1]}{/if}"> {$complete} </a></li>
                                {if $page > 1}
                                    <li><a href="{base_url("main/product_update")}/{if $page <= $complete+1}{$page}{else}{$complete+1}{/if}{if $exp[1]}?{$exp[1]}{/if}"> > </a></li>
                                    <li><a href="{base_url("main/product_update")}/{$page}{if $exp[1]}?{$exp[1]}{/if}"> >> </a></li>
                                {/if}
                            </ul>

                            <ul class="pagination hidden">
                                {for $foo=1 to $page}
                                    <li{if $foo eq $complete} class="active"{/if}><a href="{base_url("main/product_update/")}/{$foo}">{$foo}</a></li>
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