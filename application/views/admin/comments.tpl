{include file="admin/header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Yorumlar</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{$text}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tüm Yorumları Görüyorsunuz
                    </div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="{base_url("admin/json/comments/")}/{$type}"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="desc">
                            <thead>
                                <tr>
                                    <th data-field="id" data-checkbox="true" >ID</th>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="create_time" data-sortable="true">Tarih</th>
                                    <th data-field="type"  data-sortable="true">Kime</th>
                                    <th data-field="rating"  data-sortable="true">Puan</th>
                                    <th data-field="page"  data-sortable="true">Sayfa</th>
                                    <th data-field="name"  data-sortable="true">Yorumcu</th>
                                    <th data-field="subject"  data-sortable="true">Konu</th>
                                    <th data-field="text"  data-sortable="true">İçerik</th>
                                    <th data-field="status"  data-sortable="true">Statü</th>
                                    <th data-field="link"  data-sortable="true">İşlem</th>
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