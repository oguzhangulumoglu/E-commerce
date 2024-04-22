{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>bayi giriş</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Sipariş Ver</li>
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
                        <h3>
                            <i class="fa fa-circle" aria-hidden="true"></i> Sipariş Ver
                            <span class="pull-right">
                                <a href="{base_url("main/sepet")}" style="color: #cf2029; padding: 10px 20px; border: 1px solid #cf2029;border-radius: 5px;" class="cart-content">
                                    <i class="glyphicon glyphicon-shopping-cart" style="font-size: 16px"></i> sepette <strong>{$sepet}</strong> ürün var
                                </a>
                            </span>
                        </h3>
                        <div class="search-results">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><i class="fa fa-circle" aria-hidden="true"></i> Ürünler</h3>
                                    <div class="input-group">
                                        <input type="text" name="search_order" class="form-control" placeholder="Ürün adı veya kodu ile ara">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="white-bg">
                                        <form action="" method="post">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Ürün ID</th>
                                                    <th>Ürün Adı</th>
                                                    <th>Fiyat (Birim)</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {foreach from=$list item=product}
                                                    <tr>
                                                        <td>{$product->id}</td>
                                                        <td class="name">{$product->name}</td>
                                                        <!--<td>{$product->myamount+(($product->myamount/100)*18)|string_format:"%.2f"} TL</td>-->
                                                        <td>{$product->myamount|string_format:"%.2f"} <i class="fa fa-try"></i></td>
                                                        <td>
                                                            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal{$product->id}">Ürün detayı</a>
                                                            <a href="javascript:addCheckout({$product->id});" class="btn btn-red">
                                                                <i class="glyphicon glyphicon-plus"></i> Sepete Ekle
                                                            </a>
                                                            <div id="myModal{$product->id}" class="modal fade" role="dialog" style="background: rgba(0,0,0,0.3)">
                                                                <div class="modal-dialog" style="border: 1px solid #ddd;border-radius: 10px;padding: 10px;background: #fff;">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">{$product->id} Nolu Ürün Özellikleri</h4>
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
                                                        </td>
                                                    </tr>
                                                    {foreachelse}
                                                    <tr>
                                                        <td colspan="4">
                                                            <span>Üzgünüm, herhangi bir ürün bulunmamaktadır!</span>
                                                        </td>
                                                    </tr>
                                                {/foreach}
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination">
                                {for $foo=1 to $page}
                                    <li{if $foo eq $complete} class="active"{/if}><a href="{base_url("main/order/")}/{$foo}">{$foo}</a></li>
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