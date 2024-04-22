{include file="admin/header.tpl"}
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
    {if $smarty.session.username|get_perm:"status" eq "staff"}
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div><!--/.row-->

    <div class="row">

        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget ">
                <div class="row no-padding">
                    <a href="/admin/orders">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
                        </div>

                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{$orders}</div>
                            <div class="text-muted">Yeni Sipariş</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <a href="/admin/users">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{$users}</div>
                            <div class="text-muted">Kullanıcı</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <a href="/admin/merchant/2">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{$merchant}</div>
                            <div class="text-muted">Bayi</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-red panel-widget">
                <a href="/admin/message">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">{$message}</div>
                        <div class="text-muted">Mesaj</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-red panel-widget">
                <a href="{base_url("admin/merchant/1")}">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">{$accepts}</div>
                        <div class="text-muted">
                            Pasif Üyelik
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-red panel-widget">
                <a href="{base_url("admin/message/10")}">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{$message_admin}</div>
                            <div class="text-muted">
                                Yönetici Mesaj
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-success panel-widget">
                <a href="{base_url("admin/e_ticaret/category/1")}">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left" style="border-right: 1px solid #ccc;">
                            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large text-center">{$e_ticaret_category}</div>
                            <div class="text-muted text-center">
                                Bekleyen Kategoriler
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-success panel-widget">
                <a href="{base_url("admin/e_ticaret/classfield/1")}">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left" style="border-right: 1px solid #ccc;">
                            <svg class="glyph stroked tag"><use xlink:href="#stroked-tag"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large text-center">{$e_ticaret_classfield}</div>
                            <div class="text-muted text-center">
                                Bekleyen İlanlar
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
    {/if}
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Yorumlar</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <a href="{base_url("admin/comments/merchant")}">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large text-center">{$merchant_comments}</div>
                            <div class="text-muted">Bayiye yorumlar</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <a href="{base_url("admin/comments/product")}">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large text-center">{$product_comments}</div>
                            <div class="text-muted">Ürüne yorumlar</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <a href="{base_url("admin/comments/marka")}">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large text-center">{$marca_comments}</div>
                            <div class="text-muted">Marka yorumlar</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <a href="{base_url("admin/comments/sales")}">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large text-center">{$sales_comments}</div>
                            <div class="text-muted">Satıcı yorumlar</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
{include file="admin/footer.tpl"}