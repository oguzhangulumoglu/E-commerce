{include file="admin/header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Ürünler</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Ürünler</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <form action="" method="get">
                        <div class="col-md-2">
                            <label for="">Marka</label>
                            <select name="category" class="form-control">
                                <option value="0">Tümü</option>
                                {foreach from=$category name=foo2 item=brands}
                                    <option value="{$brands->id}" {if $brands->id eq $smarty.get.category} selected="selected"{/if}>{$brands->name}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">Taban Genişliği</label>
                            <select name="tire_width" class="form-control">
                                <option value="0">Tümü</option>
                                {foreach from=$select_tire_width name=foo2 item=tire_width}
                                    <option value="{$tire_width->id}" {if $tire_width->id eq $smarty.get.tire_width} selected="selected"{/if}>{$tire_width->name}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">Kesit Oranı</label>
                            <select name="tire_rate" class="form-control">
                                <option value="0">Tümü</option>
                                {foreach from=$select_tire_rate name=foo2 item=tire_rate}
                                    <option value="{$tire_rate->id}" {if $tire_rate->id eq $smarty.get.tire_rate} selected="selected"{/if}>{$tire_rate->name}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">Jant Çapı</label>
                            <select name="rim_diameter" class="form-control">
                                <option value="0">Tümü</option>
                                {foreach from=$select_rim_diameter name=foo2 item=rim_diameter}
                                    <option value="{$rim_diameter->id}" {if $rim_diameter->id eq $smarty.get.rim_diameter} selected="selected"{/if}>{$rim_diameter->name}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">Mevsim</label>
                            <select name="season" class="form-control">
                                <option value="0">Tümü</option>
                                {foreach from=$select_season name=foo2 item=season}
                                    <option value="{$season->id}" {if $season->id eq $smarty.get.season} selected="selected"{/if}>{$season->name}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for=""></label>
                            <button class="btn btn-danger" type="submit" style="margin-top: 25px;">HEMEN ARA</button>
                        </div>
                        <div class="col-md-2">
                            <label for="">Ürün ID</label>
                            <input type="number" name="id_search" class="form-control" placeholder="ID ile ara" value="{$smarty.get.id_search}"/>
                        </div>
                        <div class="col-md-8">
                            <label for="">İsimde Ara</label>
                            <input type="text" name="search" class="form-control" placeholder="Ürün adı ile ara" value="{$smarty.get.search}"/>
                        </div>
                        <div class="col-md-2">
                            <label for=""></label>
                            <button class="btn btn-danger" type="submit" style="margin-top: 25px;">HEMEN ARA</button>
                        </div>
                    </form>
                </div>
                <br/>
            </div>
            <div class="col-lg-12 panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Ürünleri Görüyorsunuz</h3>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <a class="btn btn-sm btn-primary btn-create" href="{base_url("admin/add/product")}">Yeni Ürün Ekle</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>
                            <th><a href="{current_url()}?short=id">Ürün Kodu</a></th>
                            <th><a href="{current_url()}?short=name">Ürün Adı</a></th>
                            <th><a href="{current_url()}?short=brand">Ürün Marka</a></th>
                            <th><a href="{current_url()}?short=category">Kategori</a></th>
                            <th>Ağırlık İndex</th>
                            <th>Ürün Jant Çapı</th>
                            <th>Lastik Oranı</th>
                            <th>Lastik Genişliği</th>
                            <th>Hız İndex</th>
                            <th>Lastik Tipi</th>
                            <th>Sıralama</th>
                            <th><em class="fa fa-cog"></em></th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach from=$results item=result}
                            <tr>
                                <td>{$result['id']}</td>
                                <td>{$result['name']}</td>
                                <td>{$result['brand']|get_data:"brand":"name"}</td>
                                <td>{$result['category']|get_data:"category":"name"}</td>
                                <td>{$result['weight_index']}</td>
                                <td>{$result['rim_diameter']|get_data:"rim_diameter":"name"}</td>
                                <td>{$result['tire_rate']|get_data:"tire_rate":"name"}</td>
                                <td>{$result['tire_width']|get_data:"tire_width":"name"}</td>
                                <td>{$result['speed_index']|get_data:"speed_index":"name"}</td>
                                <td>{$result['season']|get_data:"season":"name"}</td>
                                <td>{if !$result['popular']}-{else}{$result['popular']}{/if}</td>
                                <td align="center">
                                    {if $smarty.session.status eq "staff"}
                                    <a href="{base_url("admin/edit/product")}/{$result['id']}" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                    <a href="{base_url("admin/delete/product")}/{$result['id']}" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                    {else}
                                        <a href="{base_url("admin/edit/product")}/{$result['id']}" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                    {/if}
                                </td>
                            </tr>
                        {/foreach}
                        </tbody>
                    </table>

                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col col-xs-4">Sayfa {$page} of {$totalRow}
                        </div>
                        <div class="col col-xs-8">
                            <ul class="pagination hidden-xs pull-right">
                                <li><a href="{base_url("admin/product")}/1{if $param}?{$param}{/if}">«</a></li>
                                {for $foo=$pagination_left to $pagination_right}
                                    <li {if $foo eq $page}class="active"{/if}><a {if $foo eq $page}class="active"{/if} href="{base_url("admin/product")}/{$foo}{if $param}?{$param}{/if}">{$foo}</a></li>
                                {/for}
                                <li><a href="{base_url("admin/product")}/{$totalRow}{if $param}?{$param}{/if}">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

{include file="admin/footer.tpl"}