<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kurumsal Site Yönetici Paneli</title>

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <link href="{{ URL::to('admin/css/plugins/pace/pace.css') }}" rel="stylesheet">


    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="{{ URL::to('admin/css/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="{{ URL::to('admin/icons/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ URL::to('admin/css/plugins/messenger/messenger.css') }}" rel="stylesheet">
    <link href="{{ URL::to('admin/css/plugins/messenger/messenger-theme-flat.css') }}" rel="stylesheet">
    <link href="{{ URL::to('admin/css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">
    <link href="{{ URL::to('admin/css/plugins/morris/morris.css') }}" rel="stylesheet">
    <link href="{{ URL::to('admin/css/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <link href="{{ URL::to('admin/css/plugins/datatables/datatables.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::to('ckeditor/ckeditor.js') }}"></script>
    <!-- THEME STYLES - Include these on every page. -->
    <link href="{{ URL::to('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::to('admin/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ URL::to('admin/css/plugins/dropzone/css/dropzone.css') }}" rel="stylesheet">
    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->
    <link href="{{ URL::to('admin/css/demo.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{ URL::to('admin/js/html5shiv.js') }}"></script>
    <script src="{{ URL::to('admin/js/respond.min.js') }}"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- begin TOP NAVIGATION -->
    <nav class="navbar-top" role="navigation">

        <!-- begin BRAND HEADING -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
                <i class="fa fa-bars"></i> Menu
            </button>
            <div class="navbar-brand">
                <a href="{{ URL::to('yonetim/admin')}}">
                    <img src="{{ URL::to('admin/img/flex-admin-logo.png') }}" data-1x="{{ URL::to('admin/img/flex-admin-logo.png') }}" data-2x="{{ URL::to('admin/img/flex-admin-logo.png') }}" class="hisrc img-responsive" alt="">
                </a>
            </div>
        </div>
        <!-- end BRAND HEADING -->

        <div class="nav-top">

            <!-- begin LEFT SIDE WIDGETS -->
            <ul class="nav navbar-left">
                <li class="tooltip-sidebar-toggle">
                    <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Sidebar Toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <!-- You may add more widgets here using <li> -->
            </ul>
            <!-- end LEFT SIDE WIDGETS -->

            <!-- begin MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->
            <ul class="nav navbar-right">
                <?php  
                $Iletisim        =  DB::table('iletisim')->where('kontrol','=',0)->count(); 
                $Iletisimmesaj   =  DB::table('iletisim')->where('kontrol','=',0)->take(5)->get(); 
                ?>
                <!-- begin MESSAGES DROPDOWN -->
                <li class="dropdown">
                    <a href="#" class="messages-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="number">{{ $Iletisim }}</span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-scroll dropdown-messages">

                      

                        <!-- Messages Dropdown Body - This is contained within a SlimScroll fixed height box. You can change the height using the SlimScroll jQuery features. -->
                        <li id="messageScroll">
                            <ul class="list-unstyled">
                            @foreach($Iletisimmesaj as $mesajlar)
                                <li>
                                    <a href="#">
                                        <div class="row">
                                      
                                            <div class="col-xs-10">
                                                <p>
                                                    <strong>{{ $mesajlar->adsoyad }}</strong>: {{ $mesajlar->mesaj }}
                                                </p>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <!-- Messages Dropdown Footer -->
                        <li class="dropdown-footer">
                            <a href="{{ URL::to('yonetim/mesajlar') }}">Tüm Mesajları Oku</a>
                        </li>

                    </ul>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <!-- end MESSAGES DROPDOWN -->

                <!-- begin USER ACTIONS DROPDOWN -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="{{ URL::to('yonetim/sifreduzenle') }}">
                                <i class="fa fa-user"></i> Yönetici Şifresi
                            </a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="{{ URL::to('yonetim/siteayarlari') }}">
                                <i class="fa fa-gear"></i> Ayarlar
                            </a>
                        </li>
                        <li>
                            <a class="logout_open" href="{{ URL::to('yonetim/cikis') }}">
                                <i class="fa fa-sign-out"></i> Çıkış
                                <strong>{{ Auth::user()->name }}</strong>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <!-- end USER ACTIONS DROPDOWN -->

            </ul>
            <!-- /.nav -->
            <!-- end MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->

        </div>
        <!-- /.nav-top -->
    </nav>
    <!-- /.navbar-top -->
    <!-- end TOP NAVIGATION -->

    <!-- sol menüler buraya -->
    @include('admin.solmenuler')

    <!-- /.navbar-side -->
    <!-- end SIDE NAVIGATION -->

    @yield('orta')

    <!-- orta kısım değişen içerikler -->

</div>
<!-- /#wrapper -->

<!-- GLOBAL SCRIPTS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{ URL::to('admin/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ URL::to('admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ URL::to('admin/js/plugins/popupoverlay/jquery.popupoverlay.js') }}"></script>
<script src="{{ URL::to('admin/js/plugins/popupoverlay/defaults.js') }}"></script>
<!-- Logout Notification Box -->
<div id="logout">
    <div class="logout-message">
        
        <h3>
            <i class="fa fa-sign-out text-green"></i> Çıkış yapmak istiyormusunuz?
        </h3>
        <p>Çıkış yaptığınızda kayıtlı tüm çerezler silinecektir.</p>
        <ul class="list-inline">
            <li>
                <a href="{{ URL::to('yonetim/cikis') }}" class="btn btn-green">
                    <strong>Çıkış yap</strong>
                </a>
            </li>
            <li>
                <button class="logout_close btn btn-green">İptal</button>
            </li>
        </ul>
    </div>
</div>
@include('admin.uyari')
@yield('uyari')
<!-- /#logout -->
<!-- Logout Notification jQuery -->
<script src="{{ URL::to('admin/js/plugins/popupoverlay/logout.js') }}"></script>
<!-- HISRC Retina Images -->
<script src="{{ URL::to('admin/js/plugins/hisrc/hisrc.js') }}"></script>

<!-- PAGE LEVEL PLUGIN SCRIPTS -->
<!-- HubSpot Messenger -->
<script src="{{ URL::to('admin/js/plugins/messenger/messenger.min.js') }}"></script>
<script src="{{ URL::to('admin/js/plugins/messenger/messenger-theme-flat.js') }}"></script>
<!-- Date Range Picker -->
<script src="{{ URL::to('admin/js/plugins/daterangepicker/moment.js') }}"></script>
<script src="{{ URL::to('admin/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Morris Charts -->
<script src="{{ URL::to('admin/js/plugins/morris/raphael-2.1.0.min.js') }}"></script>
<!-- Flot Charts -->
<script src="{{ URL::to('admin/js/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ URL::to('admin/js/plugins/flot/jquery.flot.resize.js') }}"></script>
<!-- Sparkline Charts -->
<script src="{{ URL::to('admin/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- Moment.js -->
<script src="{{ URL::to('admin/js/plugins/moment/moment.min.js') }}"></script>
<!-- jQuery Vector Map -->
<script src="{{ URL::to('admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ URL::to('admin/js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ URL::to('admin/js/demo/map-demo-data.js') }}"></script>
<!-- Easy Pie Chart -->
<script src="{{ URL::to('admin/js/plugins/easypiechart/jquery.easypiechart.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ URL::to('admin/js/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ URL::to('admin/js/plugins/datatables/datatables-bs3.js') }}"></script>

<!-- THEME SCRIPTS -->
<script src="{{ URL::to('admin/js/flex.js') }}"></script>


<!-- PAGE LEVEL PLUGIN SCRIPTS -->
<script src="{{ URL::to('admin/js/plugins/dropzone/dropzone.js') }}"></script>
</body>

</html>
