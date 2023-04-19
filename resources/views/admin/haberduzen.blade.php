@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Haber Düzenleme Menüsü
                            <small>Haber düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Haber Düzenleme</li>
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
                                <h4>Haber düzenleme işlemleri</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Haber Resim</th>
                                        <th>Haber Başlık</th>
                                        <th>Haber Dili</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($haber as $haberler)
                                    <tr class="odd gradeX">
                                        <td align="center"><img src="{{ URL::to('resimler/haber/'.$haberler->haberresim.'') }}" style="width:100px;height:100px;"></td>
                                        <td align="center">{{ $haberler->haberbaslik }}</td>
                                        <td align="center">
                                            @if($haberler->haberdil=="tr") Türkçe
                                            @elseif($haberler->haberdil=="en") İngilizce
                                            @elseif($haberler->haberdil=="de") Almanca
                                            @elseif($haberler->haberdil=="fr") Fransızca
                                            @endif
                                        </td>
                                        <td align="center"><a href="{{ URL::to('yonetim/haberduzenkayit/'.$haberler->id.'') }}" class="btn btn-default">Düzenle</a>
                                            <a href="{{ URL::to('yonetim/habersil/'.$haberler->id.'') }}" class="btn btn-red">Sil</a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                @if($habersay==0) <td align="center">Henüz Kayıtlı bir veri yok</td> @endif
                            </div>
                            <?php
                            echo $haber->setPath('haberduzenle')->render();
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