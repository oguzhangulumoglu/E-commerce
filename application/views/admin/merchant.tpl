{include file="admin/header.tpl"}

    <div class="col-sm-10 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Bayiler</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bayiler</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {if $status eq 2}
                        Bayileri Görüyorsunuz
                        {else}
                            Pasif Bayileri Görüyorsunuz
                        {/if}
                        <a class="btn btn-primary" style="float: right" href="{base_url("admin/add/merchant")}">Yeni Bayi Ekle</a>
                    </div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="{base_url("admin/json/merchant/{$status}")}"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="desc">
                            <thead>
                                <tr>
                                    <th data-field="id" data-checkbox="true" >ID</th>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="create_time" data-sortable="true">Tarih</th>
                                    <th data-field="status" data-sortable="true">Statü</th>
                                    <th data-field="name" data-sortable="true">Sorumlu Adı</th>
                                    <th data-field="email" data-sortable="true">Email</th>
                                    <th data-field="company" data-sortable="true">Şirket Adı</th>
                                    <th data-field="homephone" data-sortable="true">Sabit Telefon</th>
                                    <th data-field="cellphone" data-sortable="true">Sabit Cep</th>
                                    <th data-field="city" data-sortable="true">Şehir</th>
                                    <th data-field="state" data-sortable="true">İlçe</th>
                                    <th data-field="accepts" data-sortable="false">Doğrulama</th>
                                    <th data-field="sales" data-sortable="false">Satıcı Grubu</th>
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