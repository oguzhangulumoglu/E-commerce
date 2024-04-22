{include file="header.tpl"}
<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>{$subject}</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active"> Sayfalar</li>
        </ol>
    </div>
</div>
<section class="content white-bg">
    <div class="container">
        <p class="content-text">
            {$text}
        </p>
    </div>
</section>

{include file="footer.tpl"}