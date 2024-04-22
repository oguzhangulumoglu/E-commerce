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
                            <i class="fa fa-circle" aria-hidden="true"></i> Sepetim
                            <a class="pull-right btn btn-red" href="{base_url("main/order")}" style="margin-top: -9px;">< Geri Dön</a>
                        </h3>
                        <div class="search-results">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><i class="fa fa-circle" aria-hidden="true"></i> Ürünler</h3>
                                </div>

                                <div class="col-md-12">
                                    <div class="white-bg">
                                        <form action="javascript:return false;" name="orders" method="post">
                                            <table id="cart" class="table table-hover table-condensed">
                                                <thead>
                                                <tr>
                                                    <th style="width:48%">Ürün Adı</th>
                                                    <th style="width:10%">Fiyat</th>
                                                    <th style="width:10%">Miktar</th>
                                                    <th style="width:22%" class="text-center">Ara Toplam</th>
                                                    <th style="width:10%"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {foreach from=$sepet item=product}
                                                    <tr id="cart-{$product->cid}">
                                                        <td data-th="Product">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h5 class="nomargin" style="line-height: 34px;">{$product->name}</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-th="Price">{$product->myamount|string_format:"%.2f"} <i class="fa fa-try"></i></td>
                                                        <td data-th="Quantity">
                                                            <input type="number" name="product_{$product->pid}" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control text-center quantity myCheck{$product->pid}" data-pid="{$product->pid}" value="{$product->quantity}">
                                                        </td>
                                                        <td data-th="Subtotal" class="text-center"><strong class="sub_{$product->pid}">{($product->myamount * $product->quantity)|string_format:"%.2f"}</strong> <i class="fa fa-try"></i></td>
                                                        <td class="actions" data-th="">
                                                            <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                                            <button class="btn btn-danger btn-sm" onclick="deleteCart({$product->cid})"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    {foreachelse}
                                                    <tr>
                                                        <td colspan="5">
                                                            <span>Üzgünüm, herhangi bir ürün bulunmamaktadır!</span>
                                                        </td>
                                                    </tr>
                                                {/foreach}
                                                </tbody>
                                                <tfoot>
                                                <tr class="visible-xs">
                                                </tr>
                                                <tr>
                                                    <input type="hidden" name="total_amount" value="{$total}"/>
                                                    <td><a href="{base_url("main/order")}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Geri Git</a></td>
                                                    <td colspan="3" class="hidden-xs text-center">Toplam Fiyat (+18% KDV) : <strong class="total_amount">{$total|string_format:"%.2f"}</strong> <i class="fa fa-try"></i></td>
                                                    {if $total > 0}
                                                    <td><button type="submit" class="btn btn-success order-accept btn-block">Siparişi Tamamla <i class="fa fa-angle-right"></i></button></td>
                                                    {/if}
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{include file="footer.tpl"}