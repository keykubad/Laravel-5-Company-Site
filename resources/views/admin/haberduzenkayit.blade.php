@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">

    <div class="page-content">

        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Haber Düzenleme menüsü
                        <small>Haberlerinizi bu bölümden düzenleyebilirsiniz</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                        </li>
                        <li class="active">Haber düzenleme menüsü</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->

        <div class="row">

            <!-- Validation Examples -->
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4>Haber düzenleme bölümü</h4>
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
                                    <label class="col-sm-2 control-label">Haber Durumu</label>
                                    <div class="col-sm-10">
                                        <select name="haberkatdurum" class="form-control" required>
                                            <option value="1" @if($haber->haberdurum==1)selected @endif>Aktif</option>
                                            <option value="0" @if($haber->haberdurum==0)selected @endif>Pasif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Haber Dili</label>
                                    <div class="col-sm-10">
                                        <select name="dil" class="form-control" required>
                                            <option value="tr" @if($haber->haberdil=="tr")selected @endif>Türkçe</option>
                                            <option value="en" @if($haber->haberdil=="en")selected @endif>İngilizce</option>
                                            <option value="de" @if($haber->haberdil=="de")selected @endif>Almanca</option>
                                            <option value="fr" @if($haber->haberdil=="fr")selected @endif>Fransızca</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Anasayfa'da Gösterilsinmi ?</label>
                                    <div class="col-sm-10">
                                        <select name="anasayfa" class="form-control" required>
                                            <option value="1" @if($haber->anasayfa=="1")selected @endif>Evet</option>
                                            <option value="0" @if($haber->anasayfa=="0")selected @endif>Hayır</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Haber Başlığı</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="habbaslik" value="{{ $haber->haberbaslik }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Haber İçeriği</label>
                                    <div class="col-sm-10">
                                        <textarea class="ckeditor"  name="habicerik" id="habicerik" >{{ $haber->habericerik }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label"">Haber Ana Resim</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="exampleInputFile" name="haberresim">
                                        <br>
                                        <p>
                                        <img src="{{ URL::to('resimler/haber/'.$haber->haberresim.'') }}" >
                                        </p>
                                    </div>
                                    </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Haber Anahtar Kelimeleri</label>
                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" id="tokenfield" name="habkeyw" placeholder="Etiketlerinizi yazınız!" value="{{ $haber->haberkeyw }}" />

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Haber Meta Açıklama</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="textArea" name="habdesc" required>{{ $haber->haberdesc }}</textarea>
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