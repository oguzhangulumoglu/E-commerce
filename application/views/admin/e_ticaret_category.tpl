
{include file="admin/header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">{if $status eq 1} Onaysız {/if} Müşteri Kategori</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{if $status eq 1} Onaysız {/if} Müşteri Kategori</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Müşteri Kategori Görüyorsunuz
                    </div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="{base_url("admin/json")}/{if $status eq 1}category_onaysiz{else}category_onayli{/if}"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <thead>
                                <tr>
                                    <th data-field="id" data-checkbox="true" >ID</th>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="username" data-sortable="true">Kullanıcı Adı</th>
                                    <th data-field="name" data-sortable="true">Kategory</th>
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