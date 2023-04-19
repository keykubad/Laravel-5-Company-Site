@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Video Düzenleme Menüsü
                            <small>Video düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Video Düzenleme</li>
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
                                <h4>Video düzenleme işlemleri</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Video Resim</th>
                                        <th>Video Başlık</th>
                                        <th>Video Dili</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($video as $videolar)
                                    <tr class="odd gradeX">
                                        <td align="center"><img src="{{ URL::to('resimler/video/'.$videolar->videoresim.'') }}" style="width:50px;height:50px;"></td>
                                        <td align="center">{{ $videolar->videoadi }} </td>
                                        <td align="center">
                                            @if($videolar->videodil=="tr") Türkçe
                                            @elseif($videolar->videodil=="en") İngilizce
                                            @elseif($videolar->videodil=="de") Almanca
                                            @elseif($videolar->videodil=="fr") Fransızca
                                            @endif
                                        </td>
                                        <td align="center"><a href="{{ URL::to('yonetim/videoduzen/'.$videolar->id.'') }}" class="btn btn-default">Düzenle</a>
                                            <a href="{{ URL::to('yonetim/videosil/'.$videolar->id.'') }}" class="btn btn-red">Sil</a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                @if($videosay==0) <td align="center">Henüz Kayıtlı bir veri yok</td> @endif
                            </div>
                            <?php
                            echo $video->setPath('videoduzenle')->render();
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