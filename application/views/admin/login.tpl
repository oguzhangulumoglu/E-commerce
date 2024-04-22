<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="{base_url('assets/css/bootstrap.min.css')}" rel="stylesheet">
    <link href="{base_url('assets/css/datepicker3.css')}" rel="stylesheet">
    <link href="{base_url('assets/css/style.css')}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{base_url('assets/js/html5shiv.js')}"></script>
    <script src="{base_url('assets/js/respond.min.js')}"></script>
    <![endif]-->
</head>
<body>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
       {if $error eq 1}
           <div class="alert bg-danger" role="alert">
            {$msg} <a href="{base_url("admin/login")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
           </div>
       {/if}
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Giriş Yap</div>
            <div class="panel-body">
                <form role="form" method="post" action="">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Kullanıcı adınız" name="username" type="text" autocomplete="off" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Şifreniz" name="password" autocomplete="off" type="password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="1">Beni Hatırla
                            </label>
                        </div>
                        <button class="btn btn-primary">Giriş Yap</button> 
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{base_url('assets/js/jquery-1.11.1.min.js')}"></script>
<script src="{base_url('assets/js/bootstrap.min.js')}"></script>
<script src="{base_url('assets/js/script.js?v=_')}{mktime()}"></script>
<script>
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>
</html>
