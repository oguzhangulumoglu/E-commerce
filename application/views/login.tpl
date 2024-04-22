<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <title>Lastikkent.com.tr - Üye Girişi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{base_url('assets/css/ekko-lightbox.min.css')}?v={time()}">
    <link rel="stylesheet" type="text/css" href="{base_url('assets/css/main.css')}?v={time()}">

    <script src="https://cdn.jsdelivr.net/g/jquery@2.2.0,bootstrap@3.3.6"></script>
    <script src="{base_url('assets/js/ekko-lightbox.min.js')}"></script>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script>
        $(function(){
            $('i.fa-eye-slash').click(function () {

                $(this).parent("input").attr("type", "text");
            });
        })
    </script>
    <!--[if lt IE 9]>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script><![endif]-->
</head>
<body class="page--sign">
<header>
    <div class="container">
        <nav class="navbar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="{base_url()}">
                    <img src="{base_url("assets/img/logo.png")}">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=" navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</header>

<main class="Sign-content">
    <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab-1" data-toggle="tab">KULLANICI</a>
            </li>
            <li>
                <a href="#tab-2" data-toggle="tab">BAYİ</a>
            </li>
        </ul>

        <div class="Sign-content-items">
            <div class="tab-content">

                <div class="tab-pane active" id="tab-1">
                    <div class="col-md-8">
                        <h1>
                            <small>LASTİKKENT.COM.TR</small>
                            Kullanıcı Yönetim Paneli
                        </h1>
                        {if $error["code"] eq 2}
                            <div class="alert bg-primary" role="alert">
                                {$error["msg"]}<a href="{base_url("main/login")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            </div>
                        {/if}
                        <form action="{base_url("main/login")}" method="post" class="login-form">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control secondary" placeholder="E-POSTA ADRESİ" autocomplete="none">
                            </div>
                            <div class="form-group password">
                                <input type="password" name="password" class="form-control secondary" placeholder="ŞİFRE" autocomplete="none">
                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                            </div>
                            <div class="buttons">
                                <button type="submit" class="btn btn-red">SİSTEME GİRİŞ YAP</button>
                                <a href="{base_url("main/lost")}" class="forgot">Şifrenizi mi unuttunuz?</a>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4">
                        <div class="sign-up-panel">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                            <p>Yüzlerce kullanıcı binlerce ürün için hemen kayıt olun!</p>
                            <a href="{base_url("main/register/bireysel")}" class="btn btn-white">YENİ ÜYELİK OLUŞTUR</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2">

                    <div class="col-md-8">
                        <h1>
                            <small>LASTİKKENT.COM.TR</small>
                            Bayi Yönetim Paneli
                        </h1>
                        {if $error["code"] eq 2}
                            <div class="alert bg-primary" role="alert">
                                {$error["msg"]}<a href="{base_url("main/login")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            </div>
                        {/if}
                        <form action="{base_url("main/login")}" method="post" class="login-form">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control secondary" placeholder="E-POSTA ADRESİ" autocomplete="none">
                            </div>
                            <div class="form-group password">
                                <input type="password" name="password" class="form-control secondary" placeholder="ŞİFRE" autocomplete="none">
                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                            </div>
                            <div class="buttons">
                                <button type="submit" class="btn btn-red">SİSTEME GİRİŞ YAP</button>
                                <a href="{base_url("main/lost")}" class="forgot">Şifrenizi mi unuttunuz?</a>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4">
                        <div class="sign-up-panel">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                            <p>Yüzlerce bayi binlerce ürün için hemen kayıt olun!</p>
                            <a href="{base_url("main/register/kurumsal")}" class="btn btn-white">YENİ KURUMSAL ÜYELİK OLUŞTUR</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="Sign-content-boxes">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box">
                        <i class="fa fa-car"></i>
                        <p>
                            <strong>Türkiye genelinde yüzlerce bayi burada!</strong>
                            Yüzlerce bayi lastikkent.com.tr bünyesinde güvenli ve hızlı.
                        </p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="box">
                        <i class="fa fa-car"></i>
                        <p>
                            <strong>Güvenli alışverişi destekliyoruz.</strong>
                            Kandırmaya yönelik reklamlara karşın, gerçekçi fiyatlar sunuyoruz.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="container">
    <footer>
        <p>Telif Hakkı Bildirimi © 2017 Lastikkent.com.tr. Her hakkı saklıdır.</p>
        <p>Alsancak Mahallesi Şehit Hikmet Özer Cad No:182 Etimesgut, Ankara</p>
    </footer>
</div>

</body>