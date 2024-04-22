{include file="header.tpl"}
<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>SEPET</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li><a href="{base_url()}">Online Mağaza</a></li>
            <li class="active">Sepet</li>
        </ol>
    </div>
</div>
<section class="cart container">
    <table class="table cart-table">
        <thead>
            <tr>
                <th colspan="4">ÜRÜN</th>
                <th>FİYAT</th>
                <th>ADET</th>
                <th>TOPLAM</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {foreach from=$data item=product}
            <tr data-id="{$product->id}">
                <td>
                    {if $product->p_type eq 1}
                        <img src="{if $product->p_id|get_data_image:"product_img":"image"}{base_url($product->p_id|get_data_image:"product_img":"image")}{else}{base_url("assets/images/no_image.jpg")}{/if}"  style="max-height: 150px; max-width: 150px" class="img-responsive" alt=""/>
                    {else}
                        <img src="{base_url($product->p_id|get_image:"uri")}" alt="" style="max-height: 150px; max-width: 150px" class="img-responsive"/>
                    {/if}
                </td>
                <td colspan="3">
                    <a href="{if $product->p_type eq 1}{base_url("/genel/lastik")}/{$product->p_id|get_data:"product":"uri"}{else}{base_url("/main/urunler")}/{$product->p_id|get_data:"e_product":"userID"|get_data:"merchant":"uri"}/{$product->p_id|get_data:"e_product":"uri"}{/if}">
                        <h2>{if $product->p_type eq 1}{$product->p_id|get_data:"product":"name"}{else}{$product->p_id|get_data:"e_product":"title"}{/if}</h2>
                        {if $product->p_type eq 1}
                        <div class="cart-sub-detail">
                            <strong>{$product->p_id|get_data:"product":"brand"|get_data:"brand":"name"}</strong>   /   Ürün Kodu: {$product->p_id|get_data:"product":"brand"|get_data:"brand":"name"|upper}{$product->pid}
                        </div>
                        {else}
                        <div class="cart-sub-detail">
                            <strong>{$product->p_id|get_data:"e_product":"e_category"|get_data:"e_category":"name"}</strong>   /   Ürün Kodu: {$product->p_id|get_data:"e_product":"productCode"}
                        </div>
                        {/if}
                        {if $product->p_type eq 1}
                        <ul class="cart-border">
                            <li>{$product->p_id|get_data:"product":"rim_diameter"|get_data:"rim_diameter":"name"}</li>
                            <li>{$product->p_id|get_data:"product":"tire_rate"|get_data:"tire_rate":"name"}</li>
                            <li>{$product->p_id|get_data:"product":"tire_width"|get_data:"tire_width":"name"}</li>
                            <li>{$product->p_id|get_data:"product":"speed_index"|get_data:"speed_index":"name"}</li>
                            <li>{$product->p_id|get_data:"product":"season"|get_data:"season":"name"}</li>
                        </ul>
                        {/if}
                    </a>
                </td>
                <td>
                    <strong>₺
                        {if $product->p_type eq 1}
                            {$product->p_id|get_data_where:"product_amount":"pid":$product->m_id:"amount"|number_format:2:".":""}
                        {else}
                            {if $product->p_id|get_data:"e_product":"knock_off" eq "no"}
                                {$product->p_id|get_data:"e_product":"price"|number_format:2:".":""}
                            {else}
                                {if $product->p_id|get_data:"e_product":"knock_off_type" eq "fiyat"}
                                    {$product->p_id|get_data:"e_product":"knock_off_price"|number_format:2:".":""}
                                {else}
                                    {($product->p_id|get_data:"e_product":"price" - (($product->p_id|get_data:"e_product":"price"/100)*$product->p_id|get_data:"e_product":"knock_off_price"))|number_format:2:".":""}
                                {/if}
                            {/if}
                        {/if}
                    </strong>
                </td>
                <td>
                    <input type="number" class="form-control" data-quantity="{$product->id}" name="quantity" {if $product->p_type eq 2}disabled="disabled" {/if}value="{$product->quantity}"/>
                </td>
                <td>
                    <strong data-total_price="{$product->id}">₺
                        {if $product->p_type eq 1}
                            {(($product->p_id|get_data_where:"product_amount":"pid":$product->m_id:"amount")*$product->quantity)|number_format:2:".":""}
                        {else}
                            {if $product->p_id|get_data:"e_product":"knock_off" eq "no"}
                                {$product->p_id|get_data:"e_product":"price"|number_format:2:".":""}
                            {else}
                                {if $product->p_id|get_data:"e_product":"knock_off_type" eq "fiyat"}
                                    {$product->p_id|get_data:"e_product":"knock_off_price"|number_format:2:".":""}
                                {else}
                                    {($product->p_id|get_data:"e_product":"price" - (($product->p_id|get_data:"e_product":"price"/100)*$product->p_id|get_data:"e_product":"knock_off_price"))|number_format:2:".":""}
                                {/if}
                            {/if}
                        {/if}
                    </strong>
                </td>
                <td>
                    <a href="javascript:void(0)" onclick="deleteProductCart('{$product->id}')">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
        {foreachelse}
            <tr>
                <td colspan="8" style="padding: 10px">Sepetinizde ürün bulunmamaktadır!</td>
            </tr>
        {/foreach}
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" rowspan="3">
                    <form action="#">
                        <h4>İNDİRİM KUPONU</h4>
                        <span>Kuponu sepete işlemek için lütfen bu alana girin</span>
                        <div class="form-group">
                            <div class="col-md-8 row">
                                <input type="text" class="form-control"/>
                            </div>
                            <div class="col-md-4 row">
                                <button class="btn btn-red">KUPONU GİR</button>
                            </div>
                        </div>
                    </form>
                </td>
                <td colspan="3">
                    TOPLAM
                </td>
                <td colspan="2">
                    <strong> ₺{$totalAmount}</strong>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    KARGO
                </td>
                <td colspan="2">
                    ÜCRETSİZ KARGO
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <strong>GENEL TOPLAM (+KDV)</strong>
                </td>
                <td colspan="2">
                    <strong>₺{$genelAmount}</strong>
                </td>
            </tr>
        </tfoot>
    </table>

    <a class="pull-right btn btn-red" href="#">ÖDEMEYİ TAMAMLA</a>
    <a class="pull-right btn btn-default" href="#">MAĞAZAYA DÖN</a>
</section>

{include file="footer.tpl"}
