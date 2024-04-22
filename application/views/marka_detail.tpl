{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>{$brand->name}</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Lastik Markaları</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1 class="pull-left">{$brand->name} hakkında detaylı bilgi</h1>

        <div class="col-md-12 row" style="padding: 20px 0;">
            <div class="col-md-4" style="">
                <img src="{base_url($brand->image)}" alt="" class="img-responsive"/>
                <br/>

                <div class="container2">
                    <div class="tab-content">
                        <div class="tab-pane active" id="size" style="display: block;margin: 10px 0;border-top: 1px solid #dadada;padding: 20px 0;border-bottom: 1px solid #dadada;">
                            <form class="row" method="get" action="{base_url("main/search")}/{$uri}">
                                <input type="hidden" name="brand" value="{$brand->id} "/>
                                <div class="col-md-12">
                                    <h4 style="border-bottom: 1px solid #dadada;display: inline-block;padding-bottom: 10px; margin-bottom: 15px;">{$brand->name} lastiklerini ara</h4>
                                </div>
                                <div class="col-sm-6 col-md-6 form-group">
                                    <label for="">Taban Genişliği</label>
                                    <div class="select">
                                        <select name="tire_width" class="form-control" style="-webkit-appearance: none;">
                                            <option value="0">Tümü</option>
                                            {foreach from=$select_tire_width name=foo2 item=tire_width}
                                                <option value="{$tire_width->id}">{$tire_width->name}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 form-group">
                                    <label for="">Kesit Oranı</label>
                                    <div class="select">
                                        <select name="tire_rate" class="form-control" style="-webkit-appearance: none;">
                                            <option value="0">Tümü</option>
                                            {foreach from=$select_tire_rate name=foo2 item=tire_rate}
                                                <option value="{$tire_rate->id}">{$tire_rate->name}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 form-group">
                                    <label for="">Jant Çapı</label>
                                    <div class="select">
                                        <select name="rim_diameter" class="form-control" style="-webkit-appearance: none;">
                                            <option value="0">Tümü</option>
                                            {foreach from=$select_rim_diameter name=foo2 item=rim_diameter}
                                                <option value="{$rim_diameter->id}">{$rim_diameter->name}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 form-group">
                                    <label for="">Hız Endeksi</label>
                                    <div class="select">
                                        <select name="speed_index" class="form-control" style="-webkit-appearance: none;">
                                            <option value="0">Tümü</option>
                                            {foreach from=$select_speed_index name=foo2 item=speed_index}
                                                <option value="{$speed_index->id}">{$speed_index->name}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 form-group">
                                    <label for="">Mevsim</label>
                                    <div class="select">
                                        <select name="season" class="form-control" style="-webkit-appearance: none;">
                                            <option value="0">Tümü</option>
                                            {foreach from=$select_season name=foo2 item=season}
                                                <option value="{$season->id}">{$season->name}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 form-group">
                                    <label for="">Araç Tipi</label>
                                    <div class="select">
                                        <select name="category" class="form-control" style="-webkit-appearance: none;">
                                            <option value="0">Tümü</option>
                                            {foreach from=$select_category name=foo2 item=category}
                                                <option value="{$category->id}">{$category->name}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 form-group">
                                    <label for="">Şehir</label>
                                    <div class="select">
                                        <select name="city" id="city" class="form-control" style="-webkit-appearance: none;">
                                            <option value="0">Tümü</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 form-group">
                                    <label for="">İlçe</label>
                                    <div class="select">
                                        <select name="state" id="state" class="form-control" style="-webkit-appearance: none;">
                                            <option value="0">Tümü</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 text-sm-center">
                                            <button class="btn col-md-12 btn-red">HEMEN BUL</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <br/>
            </div>
            <div class="col-md-8" style="border-left: 1px solid #dadada;">
                <div class="pull-left marca_details" style="text-align: left; border-bottom:1px solid #dadada; margin-bottom:20px; padding-bottom:20px">
                    {$brand->details}
                </div>

                <div class="col-xs-12" style="text-align: left!important;">
                    <h3 class="small-header text-left" style="padding-bottom:20px">{$brand->name} Hakkında Yapılan Yorumlar</h3>

                    <div class="col-md-12 row">

                        {foreach from=$comment name=foo2 item=comments}

                            <div class="row">
                                <div class="col-md-2 hidden-sm" style="margin-bottom: 15px">
                                    <div>
                                        <img class="img-responsive img-circle user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                    </div>
                                </div>

                                <div class="col-md-10" style="margin-bottom: 15px">
                                    <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                        <div class="panel-heading" style="padding: 5px 15px;">
                                            <strong>{$comments->name|capitalize}</strong>
                                            <span class="text-muted" style="font-size: 12px"> {$comments->create_time|c_ago}</span>
                                            <span class="like pull-right">
                                                <a href="javascript:void(0)" class="like" onclick="like({$comments->id})">
                                                    <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-{$comments->id}">( {$comments->like} )</strong>
                                                </a>
                                                <a href="javascript:void(0)" class="unlike" onclick="unlike({$comments->id})">
                                                    <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-{$comments->id}">( {$comments->unlike} )</strong>
                                                </a>
                                            </span>
                                            <span class="star">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star {if $comments->rating < 1}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $comments->rating < 2}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $comments->rating < 3}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $comments->rating < 4}grey{/if}" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star {if $comments->rating < 5}grey{/if}" aria-hidden="true"></i></li>
                                                </ul>
                                            </span>
                                        </div>
                                        <div class="panel-body">
                                            {$comments->text|capitalize}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {foreachelse}
                            <div class="col-md-12">
                                <div class="comment-body">
                                    <p>Üzgünüm, Herhangi bir yorum yapılmamıştır. İlk yorumu siz yapabilirsiniz</p>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                </div>

                <div class="col-xs-12" style="padding: 0">
                    <form action="#" name="commentss" method="post" class="comment-form" style="padding: 20px; border-radius: 5px">
                        <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                            <div class="panel-heading" style="padding: 5px 15px;">
                                <strong>Yorum Yap</strong>
                            </div>
                            <div class="panel-body" style="padding: 20px 0">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="col-md-12" style="padding-right: 0px">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control required" placeholder="Adınız Soyadınız" required style="border-radius: 5px">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="padding-right: 0px">
                                            <div class="form-group">
                                                <input type="text" name="subject" class="form-control" placeholder="Yorum Başlığı" required style="border-radius: 5px">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="text" id="" cols="30" rows="5" class="form-control" placeholder="Yorumunuz" required style="border-radius: 5px"></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="type" value="marka"/>
                                        <input type="hidden" name="rating" value="0"/>
                                        <input type="hidden" name="status" value="0"/>
                                        <input type="hidden" name="merchantID" value="{$brand->id}"/>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            <div class="col-md-4" style="border: 1px solid #e2e2e2; border-radius: 5px; height: 55px;border-right: 0;">
                                                <span><strong style="font-weight: 500;line-height: 52px;">Puanla</strong></span>
                                            </div>

                                            <div class="col-md-8" style="border: 1px solid #e2e2e2; border-radius: 5px;border-left: 0;">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star grey" data-value="1" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star grey" data-value="2" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star grey" data-value="3" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star grey" data-value="4" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star grey" data-value="5" aria-hidden="true"></i></li>
                                                    <li><strong class="note">(<span>0</span>)</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <a id="postComment" class="btn btn-red" style="margin:0 6px; border-radius: 5px;padding: 15px 0; font-weight:700; font-size: 16px">Yorumu Gönder</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>


{include file="footer.tpl"}