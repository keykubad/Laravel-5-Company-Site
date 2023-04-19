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
                                            <input type="text" class="form-control" id="textInput" name="refbaslik" value="{{ $refkac->refbaslik }}">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Referans Dili</label>
                                        <div class="col-sm-10">
                                            <select name="refdil" class="form-control" required>
                                                <option value="tr" @if($refkac->refdil=="tr")selected @endif>Türkçe</option>
                                                <option value="en" @if($refkac->refdil=="en")selected @endif>İngilizce</option>
                                                <option value="de" @if($refkac->refdil=="de")selected @endif>Almanca</option>
                                                <option value="fr" @if($refkac->refdil=="fr")selected @endif>Fransızca</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Referans İçeriği</label>
                                        <div class="col-sm-10">
                                            <textarea class="ckeditor"  name="reficerik" id="habicerik">{{ $refkac->reficerik }}</textarea>
                                        </div>
                                    </div>
                                 <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Referans Açıklama</label>
                                        <div class="col-sm-10">
                                            <textarea name="refdesc" class="form-control" id="habicerik">{{ $refkac->refdesc }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Referans Etiketler</label>
                                        <div class="col-sm-10">
                                            <textarea name="refkeyw" class="form-control" id="habicerik">{{ $refkac->refkeyw }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label"">Referans Resim</label>
                                        <div class="col-sm-10">
                                            <input type="file" id="exampleInputFile" name="refresim">
                                            <br>
                                            <img src="{{ URL::to('resimler/referans/'.$refkac->refresim.'') }}" >
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