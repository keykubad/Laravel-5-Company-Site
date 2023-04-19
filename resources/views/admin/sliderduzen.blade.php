@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Slider Ekleme ve Düzenleme Menüsü
                            <small>Slider ekleme ve düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Slider Ekleme ve Düzenleme</li>
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
                                <h4>Slider(Banner) Ekleme Formu</h4>
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
                                        <label for="textInput" class="col-sm-2 control-label">Slider Sıra</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="slidersira" value="{{ $slider->slidersira }}">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Slider Yazısı</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="textArea" name="slideryazi">{{ $slider->slideryazi }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Slider Dili</label>
                                        <div class="col-sm-10">
                                            <select name="sliderdil" class="form-control" required>
                                                <option value="tr" @if($slider->sliderdil=="tr")selected @endif>Türkçe</option>
                                                <option value="en" @if($slider->sliderdil=="en")selected @endif>İngilizce</option>
                                                <option value="de" @if($slider->sliderdil=="de")selected @endif>Almanca</option>
                                                <option value="fr" @if($slider->sliderdil=="fr")selected @endif>Fransızca</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label"">Slider Resim</label>
                                        <div class="col-sm-10">
                                            <input type="file" id="exampleInputFile" name="sliderresim">
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

        </div>
        <!-- /.page-content -->

    </div>
    <!-- /#page-wrapper -->
    <!-- end MAIN PAGE CONTENT -->
@stop