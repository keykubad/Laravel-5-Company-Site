@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Çoklu Galeri Resim Düzenleme Menüsü
                            <small>Çoklu Galeri resimleri düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Çoklu Galeri Resimleri Düzenleme</li>
                        </ol>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- begin ADVANCED TABLES ROW -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="portlet portlet-default">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Çoklu Galeri resimleri düzenleme işlemleri</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Galeri Resim</th>
                                        <th>Yükleme Alanı</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($galeriresimler as $galeriler)
                                    <tr class="odd gradeX">
                                        <td align="center"><img src="{{ URL::to('resimler/galeri/'.$galeriler->galeriresimler.'') }}" style="width:100px;height:100px;"></td>
                                        <td align="center">
                                            <form class="form-horizontal" id="validate" action="{{ URL::to('yonetim/coklugaleriresimduzenle/'.$galeriler->id.'') }}" role="form" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="file" name="galeriimage" class="form-group">
                                               <button type="submit" class="btn btn-default" id="top-right-message-demo">Kaydet</button>

                                                </div>

                                        </form>
                                        </td>

                                        <td align="center"><a href="{{ URL::to('yonetim/galeriresimsil/'.$galeriler->id.'') }}" class="btn btn-danger">SİL</a>
                                        </td>
                                    </tr>

                                        @endforeach
                                    </tbody>

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


    <!-- end MAIN PAGE CONTENT -->
@stop