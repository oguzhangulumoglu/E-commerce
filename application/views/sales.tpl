{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>Lastik Satıcıları</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Lastik Satıcıları</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <div class="col-md-12 row">
            <ul class="marca">
            {foreach from=$sales item=sale}
                <li class="col-md-2">
                    <a href="{base_url("lastik-saticisi/")}/{$sale->id}/{$sale->name|lower|replace:" ":"-"}">
                        <span class="name">{$sale->name}</span>
                        <img src="{$sale->image}" alt="" class="img-responsive"/>
                    </a>
                </li>
            {/foreach}
            </ul>
        </div>
    </div>
</div>


{include file="footer.tpl"}