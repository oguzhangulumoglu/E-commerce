{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>Lastik Markaları</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Lastik Markaları</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <div class="col-md-12 row">
            <ul class="marca">
            {foreach from=$brand item=brands}
                <li class="col-md-2">
                    <a href="{base_url("marka/")}/{$brands->id}/{$brands->name|lower}-lastikleri" style="display: block; max-height: 100px; overflow:hidden">
                        <span class="name">{$brands->name} <span style="font-size: 12px; color: lightgray">({$brands->id|commentstar}/5)</span></span>
                        <img src="{$brands->image}" alt="" class="img-responsive" style="display: inline-block; max-height: 60px"/>
                    </a>
                </li>
            {/foreach}
            </ul>
        </div>
    </div>
</div>


{include file="footer.tpl"}