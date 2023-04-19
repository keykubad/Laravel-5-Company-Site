@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Site Ayarları Düzenleme Menüsü
                            <small>Site ayarları düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Site Ayarları Düzenleme</li>
                        </ol>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- end PAGE TITLE ROW -->

            <!-- begin ADVANCED TABLES ROW -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="portlet portlet-default">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Site ayarları düzenleme işlemleri</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Site Adı</th>
                                        <th>Site Açıklama</th>
                                        <th>Site Keyword</th>
                                        <th>Site Dili</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($site as $siteler)
                                    <tr class="odd gradeX">
                                        <td>{{ $siteler->siteadi }}</td>
                                        <td>{{ $siteler->sitedesc }}</td>
                                        <td class="center">
                                            {{ $siteler->sitekeyw }}
                                        </td>
                                        <td>
                                            @if($siteler->dil=="tr") Türkçe
                                            @elseif($siteler->dil=="en") İngilizce
                                            @elseif($siteler->dil=="de") Almanca
                                            @elseif($siteler->dil=="fr") Fransızca
                                            @endif
                                        </td>
                                        <td class="center"><a href="{{ URL::to('yonetim/siteayarduzenle/'.$siteler->id.'') }}" class="btn btn-default">Düzenle</a>
                                            <a href="{{ URL::to('yonetim/sitesil/'.$siteler->id.'') }}" class="btn btn-red">Sil</a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                    @if($siteayarsay==0) Henüz Kayıtlı bir veri yok @endif
                                </table>

                            </div>

                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.portlet-body -->

                    </div>
                    <!-- /.portlet -->

                </div>
                <!-- /.col-lg-12 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.page-content -->

    </div>
    <!-- /#page-wrapper -->
    <!-- end MAIN PAGE CONTENT -->
@stop