<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kurumsal Site Yönetim Paneli</title>

    <!-- GLOBAL STYLES -->
    <link href="{{ URL::to('admin/css/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="{{ URL::to('admin/icons/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ URL::to('admin/css/plugins/messenger/messenger.css') }}" rel="stylesheet">
    <link href="{{ URL::to('admin/css/plugins/messenger/messenger-theme-flat.css') }}" rel="stylesheet">
    <!-- PAGE LEVEL PLUGIN STYLES -->

    <!-- THEME STYLES -->
    <link href="{{ URL::to('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::to('admin/css/plugins.css') }}" rel="stylesheet">

    <!-- THEME DEMO STYLES -->
    <link href="{{ URL::to('admin/css/demo.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{ URL::to('admin/js/html5shiv.js') }}"></script>
    <script src="{{ URL::to('admin/js/respond.min.js') }}"></script>
    <![endif]-->

</head>

<body class="login">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-banner text-center">
                <h1><i class="fa fa-gears"></i> Yönetici Paneli</h1>
            </div>
            <div class="portlet portlet-green">
                <div class="portlet-heading login-heading">
                    <div class="portlet-title">
                        <h4><strong>Kurumsal Site Yönetici Paneli</strong>
                        </h4>
                    </div>
                    <div class="portlet-widgets">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="portlet-body">
                    <form accept-charset="UTF-8" role="form" method="post" action="{{ URL::to('yonetim/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Şifreniz" name="password" type="password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Beni hatırla">Beni Hatırla
                                </label>
                            </div>
                            <br>
                            <button class="btn btn-lg btn-green btn-block" id="top-right-message-demo">Giriş yap</button>

                        </fieldset>
                        <br>


                </div>
            </div>
        </div>
    </div>
</div>

<!-- GLOBAL SCRIPTS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{ URL::to('admin/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ URL::to('admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<script src="{{ URL::to('admin/js/plugins/popupoverlay/jquery.popupoverlay.js') }}"></script>
<script src="{{ URL::to('admin/js/plugins/popupoverlay/defaults.js') }}'"></script>
<!-- PAGE LEVEL PLUGIN SCRIPTS -->
<!-- PAGE LEVEL PLUGIN SCRIPTS -->
<script src="{{ URL::to('admin/js/plugins/messenger/messenger.min.js') }}"></script>
<script src="{{ URL::to('admin/js/plugins/messenger/messenger-theme-flat.js') }}"></script>

<!-- THEME SCRIPTS -->
<script src="{{ URL::to('admin/js/flex.js') }}'"></script>

@include('admin.uyari')
@yield('uyari')

</body>

</html>
