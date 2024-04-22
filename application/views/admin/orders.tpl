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
                        Tüm Siparişleri Görüyorsunuz
                    </div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="{base_url("admin/json/orders")}"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="desc">
                            <thead>
                                <tr>
                                    <th data-field="id" data-checkbox="true" >ID</th>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="create_time" data-sortable="true">Oluşturma Tarihi</th>
                                    <th data-field="merchant" data-sortable="true">Bayi</th>
                                    <th data-field="city" data-sortable="true">İl</th>
                                    <th data-field="state" data-sortable="true">İlçe</th>
                                    <th data-field="status" data-sortable="false">Sipariş Durumu</th>
                                    <th data-field="detail" data-sortable="false">Detay</th>
                                    <th data-field="settings" data-sortable="false"></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

{include file="admin/footer.tpl"}