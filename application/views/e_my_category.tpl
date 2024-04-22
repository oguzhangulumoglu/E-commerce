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
        <h1>Mağaza Kategori</h1>
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
                            Kategoriler
                            <a href="{base_url("main/my_category_add")}" class="btn btn-green pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Yeni Kategori Ekle</a>
                        </h3>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kategori Adı</th>
                                    <th>Durum</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$data item=category}
                                <tr>
                                    <td>{$category->id}</td>
                                    <td>{$category->name|capitalize}</td>
                                    <td>
                                        {if $category->status eq 'active'}
                                            <i class="fa fa-check" style="color: green"></i> <span style="color: green">Onaylandı</span>
                                        {else}
                                            <span style="color: red">Onay Bekliyor...</span>
                                        {/if}
                                    </td>
                                    <td>
                                        <a href="{base_url("main/my_category_edit/")}/{$category->id}" class="btn btn-green"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="{base_url("main/my_category_delete/")}/{$category->id}" class="btn btn-red"><i class="glyphicon glyphicon-folder-close"></i></a>
                                    </td>
                                </tr>
                                {foreachelse}
                                    <tr>
                                        <td colspan="4">Üzgünüm, Herhangi bir kategoriniz bulunmamaktadır.</td>
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