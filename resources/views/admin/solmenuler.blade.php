<nav class="navbar-side" role="navigation">
    <div class="navbar-collapse sidebar-collapse collapse">
        <ul id="side" class="nav navbar-nav side-nav">
            <!-- begin SIDE NAV USER PANEL -->
            <li class="side-user hidden-xs">
                <img class="img-circle" src="" alt="">
                <p class="welcome">
                    <i class="fa fa-key"></i> Hoşgeldin
                </p>
                <p class="name tooltip-sidebar-logout">

                    <span class="last-name">{{ Auth::user()->name }}</span> <a style="color: inherit" class="logout_open" href="{{ URL::to('yonetim/cikis') }}"  title="Çıkış"></a>
                </p>
                <div class="clearfix"></div>
            </li>
            <!-- end SIDE NAV USER PANEL -->
            <!-- begin SIDE NAV SEARCH -->
            <li class="nav-search">
                <form role="form" method="post" action="{{ URL::to('yonetim/arama') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="search" class="form-control" name="ara" placeholder="Ara...">
                     <select name="ne" class="form-control" required>
                                            <option value="1">Ürünler</option>
                                            <option value="2">Sayfalar</option>
                                            <option value="3">Duyurular</option>
                                            <option value="4">Galeriler</option>
                                            <option value="5">Haberler</option>
                                            <option value="6">Referanslar</option>
                                            <option value="7">Siparişler</option>
                                            <option value="8">Videolar</option>
                                        </select>
                    <button class="btn">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </li>
            <!-- end SIDE NAV SEARCH -->
            <!-- begin DASHBOARD LINK -->
            <li>
                <a href="{{ URL::to('yonetim/admin') }}">
                    <i class="fa fa-dashboard"></i> Anasayfa
                </a>
            </li>
            <!-- end DASHBOARD LINK -->
            <?php 
            //modulleri çekiyoruz
                $modul=DB::table('moduller')->where('id', '1')->first();
                $modul2=DB::table('moduller')->where('id', '2')->first();
                $modul3=DB::table('moduller')->where('id', '3')->first();
                $modul4=DB::table('moduller')->where('id', '4')->first();
                $modul5=DB::table('moduller')->where('id', '5')->first();
                $modul6=DB::table('moduller')->where('id', '6')->first();
                $modul10=DB::table('moduller')->where('id', '10')->first();
             ?>
            <!-- begin CHARTS DROPDOWN -->
            <li class="panel">
                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#charts">
                    <i class="fa fa-gears"></i> Genel Ayarlar <i class="fa fa-caret-down"></i>
                </a>
                <ul @if(Request::segment(2)=='sifreduzenle') class="nav in" @elseif(Request::segment(2)=='siteayarlari')
                    class="nav in" @elseif(Request::segment(2)=='siteayarliste')
                    class="nav in"  @elseif(Request::segment(2)=='analytics')
                    class="nav in"  @elseif(Request::segment(2)=='moduller')
                    class="nav in"  @elseif(Request::segment(2)=='sabitayarlar')
                    class="nav in"  @elseif(Request::segment(2)=='ekstraalan')
                    class="nav in"  @elseif(Request::segment(2)=='ekstraalanduzen')
                    class="nav in"  @elseif(Request::segment(2)=='maillistesi')
                    class="nav in" @else class="collapse nav" @endif  id="charts">
                    <li>
                        <a href="{{ URL::to('yonetim/sifreduzenle') }}">
                            <i class="fa fa-angle-double-right"></i> Yönetici ve Mail Ayarları
                        </a>
                    </li>
                        <li>
                        <a @if(Request::segment(2)=='moduller') class="active" @endif href="{{ URL::to('yonetim/moduller') }}">
                            <i class="fa fa-angle-double-right"></i> Modül Ayarları
                        </a>
                    </li>
                    <li>
                        <a @if(Request::segment(2)=='sabitayarlar') class="active" @endif href="{{ URL::to('yonetim/sabitayarlar') }}">
                            <i class="fa fa-angle-double-right"></i> Sabit Ayarlar
                        </a>
                    </li>
                    <li>
                        <a @if(Request::segment(2)=='analytics') class="active" @endif href="{{ URL::to('yonetim/analytics') }}">
                            <i class="fa fa-angle-double-right"></i> Google Analytics Ayarları
                        </a>
                    </li>
                    <li>
                        <a @if(Request::segment(2)=='siteayarlari') class="active" @endif href="{{ URL::to('yonetim/siteayarlari') }}">
                            <i class="fa fa-angle-double-right"></i> Site Ayarları
                        </a>
                    </li>
                    <li>
                        <a @if(Request::segment(2)=='siteayarliste') class="active" @endif href="{{ URL::to('yonetim/siteayarliste') }}">
                            <i class="fa fa-angle-double-right"></i> Site Ayarları Düzenle
                        </a>
                    </li>
                    <li>
                        <a @if(Request::segment(2)=='ekstraalan') class="active" @elseif(Request::segment(2)=='ekstraalanduzen') class="active" @endif href="{{ URL::to('yonetim/ekstraalan') }}">
                            <i class="fa fa-angle-double-right"></i> Ekstra Alanlar
                        </a>
                    </li>
                    <li>
                        <a @if(Request::segment(2)=='maillistesi') class="active" @endif href="{{ URL::to('yonetim/maillistesi') }}">
                            <i class="fa fa-angle-double-right"></i> Mail Listesi
                        </a>
                    </li>
                </ul>
            </li>
            <!-- end CHARTS DROPDOWN -->
            <!-- begin FORMS DROPDOWN -->
            <li class="panel">
                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms">
                    <i class="fa fa-file-text-o"></i> Sayfalar <i class="fa fa-caret-down"></i>
                </a>
                <ul @if(Request::segment(2)=='sayfaekle') class="nav in" @elseif(Request::segment(2)=='sayfaduzenle') class="nav in" @else class="collapse nav" @endif id="forms">
                    <li>
                        <a @if(Request::segment(2)=='sayfaekle') class="active" @endif href="{{ URL::to('yonetim/sayfaekle') }}">
                            <i class="fa fa-angle-double-right"></i> Sayfa Ekle
                        </a>
                    </li>
                    <li>
                        <a @if(Request::segment(2)=='sayfaduzenle') class="active" @endif href="{{ URL::to('yonetim/sayfaduzenle') }}">
                            <i class="fa fa-angle-double-right"></i> Sayfa Düzenle
                        </a>
                    </li>
                    </li>
                </ul>
            </li>
            <!-- end FORMS DROPDOWN -->
        @if($modul10->durum==1)
        <!-- begin CALENDAR LINK -->
        <li @if(Request::segment(2)=='slider') class="nav in" @endif>
            <a @if(Request::segment(2)=='slider') class="active" @endif href="{{ URL::to('yonetim/slider') }}">
                <i class="fa fa-share-square-o"></i> Slider(Banner)
            </a>
        </li>
        @endif
        <!-- end CALENDAR LINK -->
        @if($modul->durum==1)
            <!-- begin CALENDAR LINK -->
            <li @if(Request::segment(2)=='referans') class="nav in" @endif>
                <a @if(Request::segment(2)=='referans') class="active" @endif href="{{ URL::to('yonetim/referans') }}">
                    <i class="fa fa-info-circle"></i> Referanslar
                </a>
            </li>
            @endif
            <!-- end CALENDAR LINK -->
        <!-- begin CALENDAR LINK -->
        <li @if(Request::segment(2)=='mesajlar') class="nav in" @endif>
            <a @if(Request::segment(2)=='mesajlar') class="active" @endif href="{{ URL::to('yonetim/mesajlar') }}">
                <i class="fa fa-comment"></i> İletişim Mesajları
            </a>
        </li>
        <!-- end CALENDAR LINK -->
@if($modul2->durum==1)
        <!-- begin CALENDAR LINK -->
        <li @if(Request::segment(2)=='siparis') class="nav in" @endif>
            <a @if(Request::segment(2)=='siparis') class="active" @endif href="{{ URL::to('yonetim/siparis') }}">
                <i class="fa fa-comment"></i> Siparişler
            </a>
        </li>
@endif
        <!-- end CALENDAR LINK -->
        @if($modul3->durum==1)
        <!-- begin CALENDAR LINK -->
        <li @if(Request::segment(2)=='duyurular') class="nav in" @endif>
            <a @if(Request::segment(2)=='duyurular') class="active" @endif href="{{ URL::to('yonetim/duyurular') }}">
                <i class="fa fa-bullhorn"></i> Duyurular
            </a>
        </li>
        @endif
        <!-- end CALENDAR LINK -->
            <!-- begin TABLES DROPDOWN -->
        <li class="panel">
            <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#haber">
                <i class="fa fa-edit"></i> Haberler <i class="fa fa-caret-down"></i>
            </a>
            <ul @if(Request::segment(2)=='haberekle') class="nav in" @elseif(Request::segment(2)=='haberduzenle') class="nav in" @else class="collapse nav" @endif id="haber">
                <li>
                    <a @if(Request::segment(2)=='haberekle') class="active" @endif href="{{ URL::to('yonetim/haberekle') }}">
                        <i class="fa fa-angle-double-right"></i> Haber Ekle
                    </a>
                </li>
                <li>
                    <a @if(Request::segment(2)=='haberduzenle') class="active" @endif href="{{ URL::to('yonetim/haberduzenle') }}">
                        <i class="fa fa-angle-double-right"></i> Haber Düzenle
                    </a>
                </li>
        </li>
        </ul>
        </li>
        <!-- end FORMS DROPDOWN -->
        @if($modul4->durum==1)
        <!-- begin TABLES DROPDOWN -->
        <li class="panel">
            <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#video">
                <i class="fa fa-youtube-play"></i> Videolar <i class="fa fa-caret-down"></i>
            </a>
            <ul @if(Request::segment(2)=='videoekle') class="nav in" @elseif(Request::segment(2)=='videoduzenle') class="nav in" @else class="collapse nav" @endif id="video">
                <li>
                    <a @if(Request::segment(2)=='videoekle') class="active" @endif href="{{ URL::to('yonetim/videoekle') }}">
                        <i class="fa fa-angle-double-right"></i> Video Ekle
                    </a>
                </li>
                <li>
                    <a @if(Request::segment(2)=='videoduzenle') class="active" @endif href="{{ URL::to('yonetim/videoduzenle') }}">
                        <i class="fa fa-angle-double-right"></i> Video Düzenle
                    </a>
                </li>
        </li>
        </ul>
        </li>
        @endif
        <!-- end FORMS DROPDOWN -->
        @if($modul5->durum==1)
        <!-- begin TABLES DROPDOWN -->
        <li class="panel">
            <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#urun">
                <i class="fa fa-shopping-cart"></i> Ürünler <i class="fa fa-caret-down"></i>
            </a>
            <ul @if(Request::segment(2)=='urunkategori') class="nav in" @elseif(Request::segment(2)=='urunekle') class="nav in" @elseif(Request::segment(2)=='urunduzen') class="nav in" @elseif(Request::segment(2)=='cokluurunekle') class="nav in" @elseif(Request::segment(2)=='cokluurunduzen') class="nav in" @elseif(Request::segment(2)=='urunkatduzen') class="nav in" @elseif(Request::segment(2)=='urunduzenleme') class="nav in" @else class="collapse nav" @endif id="urun">
                <li>
                    <a @if(Request::segment(2)=='urunkategori') class="active" @endif href="{{ URL::to('yonetim/urunkategori') }}">
                        <i class="fa fa-angle-double-right"></i> Ürün Kategori
                    </a>
                </li>
                <li>
                    <a @if(Request::segment(2)=='urunekle') class="active" @endif href="{{ URL::to('yonetim/urunekle') }}">
                        <i class="fa fa-angle-double-right"></i> Ürün Ekle
                    </a>
                </li>
                <li>
                    <a @if(Request::segment(2)=='urunduzen') class="active" @endif href="{{ URL::to('yonetim/urunduzen') }}">
                        <i class="fa fa-angle-double-right"></i> Ürün Düzenleme
                    </a>
                </li>
        </li>
        </ul>
        </li>
        @endif
        <!-- end FORMS DROPDOWN -->
        @if($modul6->durum==1)
        <!-- begin TABLES DROPDOWN -->
        <li class="panel">
            <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#galeri">
                <i class="fa fa-picture-o"></i> Galeri <i class="fa fa-caret-down"></i>
            </a>
            <ul @if(Request::segment(2)=='galerikategori') class="nav in" @elseif(Request::segment(2)=='galeriekle') class="nav in" @elseif(Request::segment(2)=='galeriduzen') class="nav in" @elseif(Request::segment(2)=='galericokluekle') class="nav in" @elseif(Request::segment(2)=='galericokluduzen') class="nav in" @elseif(Request::segment(2)=='galerikatduzen') class="nav in" @elseif(Request::segment(2)=='galeriduzenleme') class="nav in" @elseif(Request::segment(2)=='coklugaleriduzen') class="nav in" @else class="collapse nav" @endif id="galeri">
                <li>
                    <a @if(Request::segment(2)=='galerikategori') class="active" @endif href="{{ URL::to('yonetim/galerikategori') }}">
                        <i class="fa fa-angle-double-right"></i> Galeri Kategori
                    </a>
                </li>
                <li>
                    <a @if(Request::segment(2)=='galeriekle') class="active" @endif href="{{ URL::to('yonetim/galeriekle') }}">
                        <i class="fa fa-angle-double-right"></i> Galeri Ekle
                    </a>
                </li>
                <li>
                    <a @if(Request::segment(2)=='galeriduzen') class="active" @endif href="{{ URL::to('yonetim/galeriduzen') }}">
                        <i class="fa fa-angle-double-right"></i> Galeri Düzenleme
                    </a>
                </li>
        </li>
        </ul>
        </li>
        @endif
        <!-- end FORMS DROPDOWN -->
       <li @if(Request::segment(2)=='onbellek') class="nav in" @endif>
            <a @if(Request::segment(2)=='onbellek') class="active" @endif href="{{ URL::to('yonetim/onbellek') }}">
                <i class="fa fa-eraser"></i> Site Önbelleğini Temizle
            </a>
        </li>
        </ul>
        <!-- /.side-nav -->
    </div>
    <!-- /.navbar-collapse -->
</nav>