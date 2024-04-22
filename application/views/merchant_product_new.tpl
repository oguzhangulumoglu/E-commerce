{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>mağaza detayı</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li>Mağaza Detay</li>
            <li class="active">{$company}</li>
        </ol>
    </div>
</div>

<section class="content pb">
    <div class="container">
        <div class="row">

            {include file="merchant_sidebar.tpl"}

            <div class="col-sm-8 col-md-9">
                <div class="wrapper">
                    <div class="vendor-header">
                        <h1>{$company}</h1>
                        <span class="location">{$id|get_data:"merchant":"state"|get_data:"state":"state"|capitalize}, {$id|get_data:"merchant":"city"|get_data:"city":"city"|capitalize}</span>
                        {if !$search}
                        <a href="{base_url("main/contact")}/{$uri}" class="question border-dashed">Bu Mağaza Sizin Mi? Yönetmek İçin Tıklayınız.</a>
                        {/if}
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-9">

                <div class="cart-list-page">

                    <div class="cart-list-title">
                        <div class="col-md-6">
                            <span>Ürün Detay</span>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li><a href="{base_url()}">Online Mağaza</a></li>
                                <li>Kategoriler</li>
                                <li>Lastik</li>
                                <li class="active">Ürün detay</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12" style="padding: 20px 5px">
                        <div class="col-md-5 image">
                            <div class="col-md-12 first-image">
                                <img src="https://www.lastikkent.com.tr/assets/upload/58c5a82c59e5a.jpg" class="img-responsive" alt=""/>
                            </div>
                            <div class="col-md-3">
                                <img src="https://www.lastikkent.com.tr/assets/upload/58c5a82c59e5a.jpg" class="img-responsive" alt=""/>
                            </div>
                            <div class="col-md-3">
                                <img src="https://www.lastikkent.com.tr/assets/upload/58c5a82c59e5a.jpg" class="img-responsive" alt=""/>
                            </div>
                            <div class="col-md-3">
                                <img src="https://www.lastikkent.com.tr/assets/upload/58c5a82c59e5a.jpg" class="img-responsive" alt=""/>
                            </div>
                            <div class="col-md-3">
                                <img src="https://www.lastikkent.com.tr/assets/upload/58c5a82c59e5a.jpg" class="img-responsive" alt=""/>
                            </div>
                        </div>

                        <div class="col-md-7 content-detail">
                            <h2>Continental 205/55R16 91V ContiPremium</h2>
                            <div class="sub-title">
                                <span>Goodyear</span>   /   Ürün Kodu: GDYR17565
                            </div>
                            <div class="col-md-12 row">
                                <div class="cart-sub-body-list-price">
                                    <span class="new-price">₺142.90</span>
                                    <span class="old-price"><del>₺108.90</del></span>
                                    <ul class="rating">
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
                                </div>

                                <div class="col-md-3 row">
                                    <input type="number" value="1" class="form-control"/>
                                </div>
                                <div class="col-md-9">
                                    <a class="btn btn-red" href="#">
                                        SEPETE EKLE
                                    </a>
                                    <a class="btn btn-red" href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a class="btn btn-red" href="#">
                                        <i class="fa fa-bell"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="exTab1">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a  href="#1a" data-toggle="tab">AÇIKLAMA</a>
                                </li>
                                <li>
                                    <a href="#2a" data-toggle="tab">TAKSİT SEÇENEKLERİ</a>
                                </li>
                                <li>
                                    <a href="#3a" data-toggle="tab">İADE & DEĞİŞİM</a>
                                </li>
                                <li>
                                    <a href="#4a" data-toggle="tab">TESLİMAT BİLGİLERİ</a>
                                </li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="1a">
                                    <p>
                                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                        <br/>
                                        Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. amet nibh. Donec sodales sagittis magna. Augue velit cursus nunc, quis gravida.
                                        <br/><br/>
                                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                        <br/>
                                        Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. amet nibh. Donec sodales sagittis magna. Augue velit cursus nunc, quis gravida.
                                    </p>
                                </div>
                                <div class="tab-pane" id="2a">
                                    <p>
                                        2Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                        <br/>
                                        Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. amet nibh. Donec sodales sagittis magna. Augue velit cursus nunc, quis gravida.
                                    </p>
                                </div>
                                <div class="tab-pane" id="3a">
                                    <p>
                                        3Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                        <br/>
                                        Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. amet nibh. Donec sodales sagittis magna. Augue velit cursus nunc, quis gravida.
                                    </p>
                                </div>
                                <div class="tab-pane" id="4a">
                                    <p>
                                        4Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                        <br/>
                                        Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. amet nibh. Donec sodales sagittis magna. Augue velit cursus nunc, quis gravida.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>

        </div>
    </div>
</section>

{include file="footer.tpl"}