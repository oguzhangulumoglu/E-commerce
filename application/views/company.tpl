<div class="panel panel-default">
    <div class="panel-body">
        <figure>
            <img src="{if $logo}{base_url($logo)}{else}{base_url("assets/img/bayilogo1.png")}{/if}" alt="" class="img-responsive center-block img-circle">
            <figcaption>
                <h3>
                    <a href="{base_url("genel/bayi/")}/{$uri}">{$company}</a>
                </h3>
                <span>{$email}</span>
            </figcaption>
        </figure>
    </div>
</div>