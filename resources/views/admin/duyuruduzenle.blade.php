@extends('admin.index')
@section('orta')
            <!-- begin MAIN PAGE CONTENT -->
            <div id="page-wrapper">

                <div class="page-content">

                    <!-- begin PAGE TITLE ROW -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title">
                                <h1>Duyuru Düzenleme Menüsü
                                    <small>Duyuru düzenleme işlemlerini buradan yapabilirsiniz</small>
                                </h1>
                                <ol class="breadcrumb">
                                    <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                                    </li>
                                    <li class="active">Duyuru Düzenleme</li>
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
                                <h4>Duyuru Ekleme</h4>
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
                                        <label for="textInput" class="col-sm-2 control-label">Duyuru Başlık</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="duyurubaslik" value="{{ $duyuru->duyurubaslik }}">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Duyuru Dili</label>
                                        <div class="col-sm-10">
                                            <select name="duyurudil" class="form-control" required>
                                                <option value="tr" @if($duyuru->duyurudil=="tr")selected @endif>Türkçe</option>
                                                <option value="en" @if($duyuru->duyurudil=="en")selected @endif>İngilizce</option>
                                                <option value="de" @if($duyuru->duyurudil=="de")selected @endif>Almanca</option>
                                                <option value="fr" @if($duyuru->duyurudil=="fr")selected @endif>Fransızca</option>
                                            </select>
                                        </div>
                                    </div>
                             <div class="form-group">
                                    <label class="col-sm-2 control-label">Anasayfa'da Gösterilsinmi ?</label>
                                    <div class="col-sm-10">
                                        <select name="anasayfa" class="form-control" required>
                                            <option value="1" @if($duyuru->anasayfa=="1")selected @endif>Evet</option>
                                            <option value="0" @if($duyuru->anasayfa=="0")selected @endif>Hayır</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Duyuru İçeriği</label>
                                        <div class="col-sm-10">
                                            <textarea class="ckeditor"  name="duyuruicerik" id="duyuruicerik">{{ $duyuru->duyuruicerik }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Duyuru Anahtar Kelimeleri</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="tokenfield" name="duyurukeyw" placeholder="Etiketlerinizi yazınız!" value="{{ $duyuru->duyurukeyw }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Duyuru Meta Açıklama</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="textArea" name="duyurudesc" required>{{ $duyuru->duyurudesc }}</textarea>
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