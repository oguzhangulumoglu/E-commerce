{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>bayi giriş</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Siparişlerim</li>
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
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Siparişler</h3>
                        <div class="search-results">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><i class="fa fa-circle" aria-hidden="true"></i> Siparişlerim</h3>
                                </div>

                                <div class="col-md-12">
                                    <div class="white-bg">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Sipariş ID</th>
                                                <th>Sipariş Zamanı</th>
                                                <th>Sipariş Durumu</th>
                                                <th>Sipariş Tutarı (KDV)</th>
                                                <th>Sipariş Detayı</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {foreach from=$list item=product}
                                                <tr>
                                                    <td>{$product->id}</td>
                                                    <td>{$product->create_time|get_time}</td>
                                                    <td>{if $product->status eq "1"}Siparişiniz Değerlendiriliyor{elseif $product->status eq "2"}Ödeme Bekleniyor{elseif $product->status eq "3"}Sipariş İptal{else}Tamamlandı {/if}</td>
                                                    <td>{$product->total|string_format:"%.2f"} TL</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal{$product->id}">Detayı göster</a>
                                                        <div id="myModal{$product->id}" class="modal fade" role="dialog" style="background: rgba(0,0,0,0.3)">
                                                            <div class="modal-dialog" style="border: 1px solid #ddd;border-radius: 10px;padding: 10px;background: #fff;">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">{$product->id} Nolu Sipariş Detayı</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Ürün ID</th>
                                                                                <th>Ürün Adı</th>
                                                                                <th>Ürün Adeti</th>
                                                                                <th>Ürün Fiyatı(KDV'li)</th>
                                                                                <th>Toplam</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            {foreach from=$product->id|get_data_orders item=orders}
                                                                                <tr>
                                                                                    <td>{$orders->pid}</td>
                                                                                    <td><a href="{base_url("main/product")}/{$orders->uri}" target="_blank">{$orders->name}</a></td>
                                                                                    <td>{$orders->stock} adet</td>
                                                                                    <td>{$orders->myamount+(($orders->myamount/100)*18)|string_format:"%.2f"}</td>
                                                                                    <td>{($orders->stock*($orders->myamount+(($orders->myamount/100)*18)))|string_format:"%.2f"}</td>
                                                                                </tr>
                                                                            {/foreach}
                                                                            </tbody>
                                                                            <tfoot>
                                                                            <tr>
                                                                                <td colspan="2"></td>
                                                                                <td colspan="2 text-right">Toplam Fiyat (KDV'li):</td>
                                                                                <td><strong>{$product->total|string_format:"%.2f"}</strong></td>
                                                                            </tr>
                                                                            </tfoot>
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
                                                        <span>Üzgünüm, herhangi bir ürün siparişiniz bulunmamaktadır!</span>
                                                    </td>
                                                </tr>
                                            {/foreach}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination">
                                {for $foo=1 to $page}
                                    <li{if $foo eq $complete} class="active"{/if}><a href="{base_url("main/orders/")}/{$foo}">{$foo}</a></li>
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