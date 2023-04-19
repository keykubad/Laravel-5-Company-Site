@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Sayfa Düzenleme Menüsü
                            <small>Sayfa düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Sayfa Düzenleme</li>
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
                                <h4>Sayfa düzenleme işlemleri</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Sayfa Adı</th>
                                        <th>Kategori</th>
                                        <th>Sayfa Dili</th>
                                        <th>Sayfa Durumu</th>
                                        <th>Modül</th>
                                        <th>Sayfa Sıra</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sayfa as $sayfalar)
                                     <!-- Standard Modal -->
                                        <form class="form-horizontal" id="validate" role="form" method="post" action="{{ URL::to('yonetim/sayfaduzenle/'.$sayfalar->id.'') }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="modal fade" id="standardModal{{ $sayfalar->sira }}" tabindex="-1" role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="standardModalLabel">Sayfa Sırası Değiş</h4>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="textInput" class="col-sm-2 control-label">Slider Sırası</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="textInput" name="sira" value="{{ $sayfalar->sira }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-default">Kaydet</button>
                                                        </div>

                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                               </form>
                                                <!-- /.modal-dialog -->
                                            </div>

                                        <!-- /.modal -->
                                    <tr class="odd gradeX">
                                        <td>{{ $sayfalar->sayfaadi }}</td>
                                        <td>@if($sayfalar->katid=="0") <button class="btn btn-white">Ana Kategori</button> @else 
                                        <button class="btn btn-green">{{ $sayfalar->kategori->sayfaadi }}</button>
                                         @endif
                                         </td>
                                        <td>
                                            @if($sayfalar->sayfadil=="tr") Türkçe
                                            @elseif($sayfalar->sayfadil=="en") İngilizce
                                            @elseif($sayfalar->sayfadil=="de") Almanca
                                            @elseif($sayfalar->sayfadil=="fr") Fransızca
                                            @endif
                                        </td>
                                        <td class="center">
                                            @if($sayfalar->durum=="1") Aktif
                                            @elseif($sayfalar->durum=="0") Pasif
                                                @endif
                                        </td>
                                         <td class="center">
                                         @if($sayfalar->modulid==0)
                                            Modül Yok
                                         @else
                                            {{ $sayfalar->modul->moduladi  }}
                                         @endif
                                        </td>
                                      
                                            <td align="center">
                                                Mevcut Sıra : {{ $sayfalar->sira }}<br>
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#standardModal{{ $sayfalar->sira }}">Sıra Değiş</a>
                                            </td>
                                     
                                        <td class="center"><a href="{{ URL::to('yonetim/sayfaduzenlekayit/'.$sayfalar->id.'') }}" class="btn btn-default">Düzenle</a>
                                            <a href="{{ URL::to('yonetim/sayfasil/'.$sayfalar->id.'') }}" class="btn btn-red">Sil</a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if($sayfasay==0) <td class="center">Henüz Kayıtlı bir veri yok</td> @endif
                            </div>
                            <?php
                            echo $sayfa->setPath('sayfaduzenle')->render();
                             ?>
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