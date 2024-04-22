{include file="admin/header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Siparişler</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Siparişler</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sipariş Detayını Görüyorsunuz
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12" style="height: 50px">
                            <form action="{base_url("/admin/orders_detail/")}/{$order["id"]}" method="post">
                                <div class="col-md-4">
                                    <label for="">Sipariş Durumunu</label>
                                </div>
                                <div class="col-md-6">
                                    <select name="status" class="form-control" id="">
                                        <option value="1" {if $order["status"] eq "1"}selected="selected"{/if}>Siparişiniz Değerlendiriliyor</option>
                                        <option value="2" {if $order["status"] eq "2"}selected="selected"{/if}>Ödeme Bekleniyor</option>
                                        <option value="3" {if $order["status"] eq "3"}selected="selected"{/if}>Sipariş İptal</option>
                                        <option value="4" {if $order["status"] eq "4"}selected="selected"{/if}>Tamamlandı</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-info">Güncelle</button>
                                </div>
                            </form>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-12">
                            <div class="row">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Sipariş Zamanı : </td>
                                        <td><strong>{$order["create_time"]}</strong></td>
                                        <td>Müşteri Adı Soyadı : </td>
                                        <td><strong>{$merchant["name"]}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Müşteri Email : </td>
                                        <td><strong>{$merchant["email"]}</strong></td>
                                        <td>Müşteri Şirket : </td>
                                        <td><strong>{$merchant["company"]}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Müşteri Web : </td>
                                        <td><strong>{$merchant["web"]}</strong></td>
                                        <td>Müşteri Vergi no : </td>
                                        <td><strong>{$merchant["vergino"]}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Müşteri Home phone : </td>
                                        <td><strong>{$merchant["homephone"]}</strong></td>
                                        <td>Müşteri Cell phone : </td>
                                        <td><strong>{$merchant["cellphone"]}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Müşteri Adres : </td>
                                        <td colspan="3"><strong>{$merchant["adress"]}</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Ürün ID</th>
                                        <th>Ürün Adı</th>
                                        <th>Ürün Adeti</th>
                                        <th>Ürün Fiyatı (KDV'li)</th>
                                        <th>Toplam (Adet X Fiyat)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {foreach from=$order["id"]|get_data_orders item=orders}
                                        <tr>
                                            <td>{$orders->pid}</td>
                                            <td><a href="{base_url("main/product")}/{$orders->uri}" target="_blank">{$orders->name}</a></td>
                                            <td>{$orders->stock} adet/birim</td>
                                            <td>{$orders->myamount+(($orders->myamount/100)*18)|string_format:"%.2f"}</td>
                                            <td>{(($orders->myamount+(($orders->myamount/100)*18))*$orders->stock)|string_format:"%.2f"}</td>
                                        </tr>
                                    {/foreach}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td>Toplam (KDV'li) : </td>
                                            <td><strong>{$order["total"]|string_format:"%.2f"}</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

{include file="admin/footer.tpl"}