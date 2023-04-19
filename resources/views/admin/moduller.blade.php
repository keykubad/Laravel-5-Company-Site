@extends('admin.index')
@section('orta')

    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">
 <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Modül Düzenleme Menüsü
                            <small>Modül düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Modül Düzenleme</li>
                        </ol>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        <div class="page-content">
            <!-- begin ADVANCED TABLES ROW -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="portlet portlet-default">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Modül düzenleme işlemleri</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Modül adı</th>
                                        <th>Durum</th>
                                    
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($moduller as $modul)
                                    <tr class="odd gradeX">
                                        <td align="center">{{ $modul->moduladi }} </td>
                                        <td align="center">
                                            <form method="post" action="{{ URL::to('yonetim/moduller/'.$modul->id.'') }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="container">
                                    <div class="btn-group sw-btn">
                                        <input type="hidden" value="{{ $modul->id }}">
                                        <button name="durum" value="1" class="btn @if($modul->durum!=0)btn-primary @else btn-white @endif">AÇ</button>
                                        <button name="durum" value="0" class="btn @if($modul->durum==0)btn-primary @else btn-white @endif">KAPAT</button>
                                    </div>
                                    </div>
                                        </form>
                                            </td>
                                       

                                    </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                                @if($modulkac==0) <td align="center">Henüz Kayıtlı bir veri yok</td> @endif
                            </div>
                            <?php
                            echo $moduller->setPath('moduller')->render();
                            ?>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.portlet-body -->

                    </div>
                    <!-- /.portlet -->

                </div>
                <!-- /.col-lg-12 -->

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
