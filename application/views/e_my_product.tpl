{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>E-ticaret mağazam</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Mağaza Kategori</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1>Mağaza Ürünlerim</h1>
    </div>
</div>

<section class="vendor-settings">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3">
                {include file="company.tpl"}
                {include file="sidebar.tpl"}
            </div>

            <div class="col-sm-8 col-md-9">
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="info-update">
                        <h3>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            Ürünlerim
                            <a href="{base_url("main/my_product_add")}" class="btn btn-green pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Yeni Ürün Ekle</a>
                        </h3>
                        <div class="table-responsive">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th></th>
                                        <th>Yayın Tarihi</th>
                                        <th>İlan Başlığı</th>
                                        <th>Durum</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                {foreach from=$data item=product}
                                    <tr>
                                        <td>{$product->id}</td>
                                        <td>
                                            <img src="{base_url($product->id|imageProduct)}" style="height: 100px; width: 100px; border: 1px solid #ccc; padding: 1px; border-radius: 5px" class="img-responsive" alt=""/>
                                        </td>
                                        <td>{$product->create_time}</td>
                                        <td>
                                            <a href="{base_url("/main/urunler")}/{$uri}/{$product->uri}">
                                                {$product->title}
                                            </a>
                                        </td>
                                        <td>
                                            {if $product->status eq 'active'}
                                                <span style="color: green">Yayında</span>
                                            {else}
                                                <span style="color: red">Onay Bekliyor..</span>
                                            {/if}
                                        </td>
                                        <td>
                                            <a href="{base_url("main/my_product_delete")}/{$product->id}" class="btn btn-danger">
                                                <i class="fa fa-close"></i> Sil
                                            </a>
                                            <a href="{base_url("main/my_product_edit")}/{$product->id}" class="btn btn-success">
                                                <i class="fa fa-edit"></i> Düzenle
                                            </a>
                                        </td>
                                    </tr>
                                {foreachelse}
                                    <tr>
                                        <td colspan="6">Üzgünüm, herhangi bir ilanınız bulunmuyor</td>
                                    </tr>
                                {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{include file="footer.tpl"}