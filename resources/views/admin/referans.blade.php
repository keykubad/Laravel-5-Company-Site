@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Referans Düzenleme Menüsü
                            <small>Referans düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Referans Düzenleme</li>
                        </ol>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">

                <!-- Validation Examples -->
                <div class="col-lg-12">
                    <div class="portlet portlet-default">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Referans Ekleme</h4>
                            </div>
                            <div class="portlet-widgets">
                                <a data-toggle="collapse" data-parent="#accordion" href="#validationExamples"><i class="fa fa-chevron-down"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="validationExamples" class="panel-collapse collapse in">
                            <div class="portlet-body">
                                <form class="form-horizontal" id="validate" role="form" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Referans Başlık</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="refbaslik">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Referans Dili</label>
                                        <div class="col-sm-10">
                                            <select name="refdil" class="form-control" required>
                                                <option value="tr" selected>Türkçe</option>
                                                <option value="en">İngilizce</option>
                                                <option value="de">Almanca</option>
                                                <option value="fr">Fransızca</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Referans İçeriği</label>
                                        <div class="col-sm-10">
                                            <textarea class="ckeditor"  name="reficerik" id="habicerik"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Referans Açıklama</label>
                                        <div class="col-sm-10">
                                            <textarea name="refdesc" class="form-control" id="habicerik"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Referans Etiketler</label>
                                        <div class="col-sm-10">
                                            <textarea name="refkeyw" class="form-control" id="habicerik"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label"">Referans Resim</label>
                                        <div class="col-sm-10">
                                            <input type="file" id="exampleInputFile" name="refresim">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-default" id="top-right-message-demo">Kaydet</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
                <!-- End Validation Examples -->

            </div>
            <!-- /.row -->
            <!-- begin ADVANCED TABLES ROW -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="portlet portlet-default">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Referans düzenleme işlemleri</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Referans Resim</th>
                                        <th>Referans Başlık</th>
                                        <th>Referans Dil</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($referans as $referanslar)
                                    <tr class="odd gradeX">
                                        <td align="center"><img src="{{ URL::to('resimler/referans/'.$referanslar->refresim.'') }}" style="width:50px;height:50px;"></td>
                                        <td align="center">{{ $referanslar->refbaslik }} </td>
                                        <td align="center">
                                            @if($referanslar->refdil=="tr") Türkçe
                                            @elseif($referanslar->refdil=="en") İngilizce
                                            @elseif($referanslar->refdil=="de") Almanca
                                            @elseif($referanslar->refdil=="fr") Fransızca
                                            @endif</td>
                                        <td align="center"><a href="{{ URL::to('yonetim/referansgor/'.$referanslar->id.'') }}" class="btn btn-default">Düzenle</a>
                                            <a href="{{ URL::to('yonetim/referanssil/'.$referanslar->id.'') }}" class="btn btn-red">Sil</a>
                                        </td>

                                    </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                                @if($refkac==0) <td align="center">Henüz Kayıtlı bir veri yok</td> @endif
                            </div>
                            <?php
                            echo $referans->setPath('referans')->render();
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