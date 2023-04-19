@extends('admin.index')
@section('orta')               
 <!-- end PAGE TITLE ROW -->
 <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>
                                Arama Sonuçları
                                
                            </h1>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <div class="row">
                    <div class="col-lg-12">
        
                        <!-- /input-group -->
                        <h4>Arama Sonuçları <strong>"{{ $ara }}"</strong> 
                        </h4>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <br>
                <div class="row">
                    <div class="col-lg-8">
                    @if($ne==1)
                    @foreach($arama as $aramasonuc)
                        <div class="search-item">
                            <span class="sr-name"><a href="{{ URL::to('yonetim/urunduzenleme/'.$aramasonuc->id.'') }}">{{ $aramasonuc->urunadi }}</a>
                            </span>
                            <br>{!! mb_substr($aramasonuc->urunicerik,0,300) !!}
                        </div>
                    @endforeach
                    @elseif($ne==2)
                    @foreach($arama as $aramasonuc)
                        <div class="search-item">
                            <span class="sr-name"><a href="{{ URL::to('yonetim/sayfaduzenlekayit/'.$aramasonuc->id.'') }}">{{ $aramasonuc->sayfaadi }}</a>
                            </span>
                            <br>{!! mb_substr($aramasonuc->sayfaicerik,0,300) !!}
                        </div>
                    @endforeach
                    @elseif($ne==3)
                    @foreach($arama as $aramasonuc)
                        <div class="search-item">
                            <span class="sr-name"><a href="{{ URL::to('yonetim/duyurugor/'.$aramasonuc->id.'') }}">{{ $aramasonuc->duyurubaslik }}</a>
                            </span>
                            <br>{!! mb_substr($aramasonuc->duyuruicerik,0,300) !!}
                        </div>
                    @endforeach
                    @elseif($ne==4)
                    @foreach($arama as $aramasonuc)
                        <div class="search-item">
                            <span class="sr-name"><a href="{{ URL::to('yonetim/galeriduzenleme/'.$aramasonuc->id.'') }}">{{ $aramasonuc->galeribaslik }}</a>
                            </span>
                            <br>{!! mb_substr($aramasonuc->galeriicerik,0,300) !!}
                        </div>
                    @endforeach
                    @elseif($ne==5)
                    @foreach($arama as $aramasonuc)
                        <div class="search-item">
                            <span class="sr-name"><a href="{{ URL::to('yonetim/haberduzenkayit/'.$aramasonuc->id.'') }}">{{ $aramasonuc->haberbaslik }}</a>
                            </span>
                            <br>{!! mb_substr($aramasonuc->habericerik,0,300) !!}
                        </div>
                    @endforeach
                    @elseif($ne==6)
                    @foreach($arama as $aramasonuc)
                        <div class="search-item">
                            <span class="sr-name"><a href="{{ URL::to('yonetim/referansgor/'.$aramasonuc->id.'') }}">{{ $aramasonuc->refbaslik }}</a>
                            </span>
                            <br>{!! mb_substr($aramasonuc->reficerik,0,300) !!}
                        </div>
                    @endforeach
                    @elseif($ne==7)
                    @foreach($arama as $aramasonuc)
                        <div class="search-item">
                            <span class="sr-name"><a href="{{ URL::to('yonetim/siparisduzenle/'.$aramasonuc->id.'') }}">{{ $aramasonuc->urunadi }}</a>
                            </span>
                            <br>{!! mb_substr($aramasonuc->mesaj,0,300) !!}
                        </div>
                    @endforeach
                    @elseif($ne==8)
                    @foreach($arama as $aramasonuc)
                        <div class="search-item">
                            <span class="sr-name"><a href="{{ URL::to('yonetim/videoduzen/'.$aramasonuc->id.'') }}">{{ $aramasonuc->videoadi }}</a>
                            </span>
                            <br>{!! mb_substr($aramasonuc->videoicerik,0,300) !!}
                        </div>
                    @endforeach
                    @endif
                        <div class="text-center">
                            <ul class="pagination">
                                {!! $arama->appends(['ara' => Input::get('ara'),'ne' => Input::get('ne')])->render() !!}
                            </ul>
                        </div>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.page-content -->

        </div>
        <!-- /#page-wrapper -->
@stop