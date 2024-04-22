{include file="admin/header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Mesajlar</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                {if $status eq 1}
                <h1 class="page-header">Mesajlar</h1>
                {else}
                <h1 class="page-header">Yöneticiye Gönderilen Mesajlar</h1>
                {/if}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tüm Mesajları Görüyorsunuz
                    </div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="{base_url("admin/json/message/{$status}")}"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="desc">
                            <thead>
                                <tr>
                                    <th data-field="id" data-checkbox="true" >ID</th>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="create_time" data-sortable="true">Tarih</th>
                                    <th data-field="mid"  data-sortable="true">Kime</th>
                                    <th data-field="name"  data-sortable="true">Sorumlu</th>
                                    <th data-field="email"  data-sortable="true">Email</th>
                                    <th data-field="text"  data-sortable="true">Mesaj</th>
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