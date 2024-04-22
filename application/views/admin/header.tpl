<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link href="{base_url('assets/css/bootstrap.min.css')}" rel="stylesheet">
        <link href="{base_url('assets/css/datepicker3.css')}" rel="stylesheet">
        <link href="{base_url('assets/css/style.css')}?v={time()}" rel="stylesheet">
        <link href="{base_url('assets/css/panel-custom.css')}?v={time()}" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="{base_url('assets/js/html5shiv.js')}"></script>
        <script src="{base_url('assets/js/respond.min.js')}"></script>
        <![endif]-->
        <script src="{base_url('assets/js/lumino.glyphs.js')}"></script>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea.editor' });</script>
        <style>
            .todo {
                background: rgba(255, 248, 202);
            }
        </style>
    </head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{base_url("admin")}"><span>Lastikkent</span>Admin</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> #{$smarty.session.user_id} {$smarty.session.username}  <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{base_url("admin/logout")}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Çıkış Yap</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="sidebar-collapse" class="col-sm-2 col-lg-2 sidebar">
    <ul class="nav menu">
        <li class="active"><a href="{base_url("admin")}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
        {if $smarty.session.username|get_perm:"status" eq "staff"}
        <li><a href="{base_url("admin/management")}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Yöneticiler</a></li>
        <li><a href="{base_url("admin/users")}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Kullanıcılar</a></li>
        <li><a href="{base_url("admin/merchant/2")}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Bayiler</a></li>
        <li><a href="{base_url("admin/contract")}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Sözleşmeler</a></li>
        <li role="presentation" class="divider"></li>
        <li><a href="{base_url("admin/product")}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Ürünler</a></li>
        <li class="parent">
            <a data-toggle="collapse" href="#sub-item-1" href="javascript:void(0)" style="width:100%;display:block;">
                <span><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg></span> Özellikler
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href="{base_url("admin/brand")}">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Lastik Marka
                    </a>
                </li>
                <li>
                    <a class="" href="{base_url("admin/sales")}">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Lastik Satıcıları
                    </a>
                </li>
                <li>
                    <a class="" href="{base_url("admin/brand_aku")}">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Akü Marka
                    </a>
                </li>
                <li>
                    <a class="" href="{base_url("admin/rim_diameter")}">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Jant Çapı
                    </a>
                </li>
                <li>
                    <a class="" href="{base_url("admin/season")}">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Mevsim Tipi
                    </a>
                </li>
                <li>
                    <a class="" href="{base_url("admin/speed_index")}">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Hız İndexi
                    </a>
                </li>
                <li>
                    <a class="" href="{base_url("admin/tire_rate")}">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Lastik Oranı
                    </a>
                </li>
                <li>
                    <a class="" href="{base_url("admin/tire_width")}">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Lastik Genişliği
                    </a>
                </li>
                <li>
                    <a class="" href="{base_url("admin/category")}">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Kategori
                    </a>
                </li>
                <li>
                    <a class="" href="{base_url("admin/marca")}">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Araç Marka
                    </a>
                </li>
                <li>
                    <a class="" href="{base_url("admin/model")}">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Araç Model
                    </a>
                </li>
                <li>
                    <a class="" href="{base_url("admin/patern")}">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Lastik Model/Desen
                    </a>
                </li>
            </ul>
        </li>
        <li role="presentation" class="divider"></li>
        <li><a href="{base_url("admin/e_ticaret/category/2")}"><svg class="glyph stroked glyphicon-comment"><use xlink:href="#stroked-chevron-right"></use></svg> E-Kategoriler</a></li>
        <li><a href="{base_url("admin/e_ticaret/classfield/2")}"><svg class="glyph stroked glyphicon-comment"><use xlink:href="#stroked-chevron-right"></use></svg> E-İlanlar</a></li>
        <li><a href="#"><svg class="glyph stroked glyphicon-comment"><use xlink:href="#stroked-chevron-right"></use></svg> E-Siparişler</a></li>
        <li role="presentation" class="divider"></li>
        <li><a href="{base_url("admin/message")}"><svg class="glyph stroked glyphicon-comment"><use xlink:href="#stroked-chevron-right"></use></svg> Mesajlar</a></li>
        <li><a href="{base_url("admin/page")}"><svg class="glyph stroked glyphicon-comment"><use xlink:href="#stroked-chevron-right"></use></svg> Sayfalar</a></li>
        <li><a href="{base_url("admin/orders")}"><svg class="glyph stroked glyphicon-comment"><use xlink:href="#stroked-chevron-right"></use></svg> Siparişler</a></li>

        <li role="presentation" class="divider"></li>
        <li><a href="{base_url("admin/seo")}"><svg class="glyph stroked glyphicon-comment"><use xlink:href="#stroked-chevron-right"></use></svg> Ayarlar</a></li>
        <li><a href="{base_url("admin/bulten")}"><svg class="glyph stroked glyphicon-comment"><use xlink:href="#stroked-chevron-right"></use></svg> Bülten</a></li>
        {else}
            <li><a href="{base_url("admin/merchant/2")}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Bayiler</a></li>
            <li role="presentation" class="divider"></li>
            <li><a href="{base_url("admin/product")}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Ürünler</a></li>
            <li><a href="{base_url("admin")}"><svg class="glyph stroked empty-message"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-empty-message"></use></svg> Yorumlar</a></li>
        {/if}
    </ul>

</div>