@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">

    <div class="page-content">

        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Galeri Ekleme menüsü
                        <small>Galeri kategorisine bu bölümden ana resim ve içerikleri ekleyebilirsiniz.</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                        </li>
                        <li class="active">Galeri ekleme menüsü</li>
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
                            <h4>Galeri ekleme bölümü</h4>
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
                                    <label for="textInput" class="col-sm-2 control-label">Galeri Başlık</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="galeribaslik" required>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Galeri Kategorisi</label>
                                    <div class="col-sm-10">
                                        <select name="galerikat" class="form-control" required>
                                            @foreach($galerikat as $galerikatlar)
                                                <option value="{{ $galerikatlar->id }}">@if($galerikatlar->katid!=0) -> @endif {{ $galerikatlar->sayfaadi}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Galeri Dili</label>
                                    <div class="col-sm-10">
                                        <select name="galeridil" class="form-control" required>
                                            <option value="tr" selected>Türkçe</option>
                                            <option value="en">İngilizce</option>
                                            <option value="de">Almanca</option>
                                            <option value="fr">Fransızca</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Anasayfa'da Gösterilsinmi ?</label>
                                    <div class="col-sm-10">
                                        <select name="anasayfa" class="form-control" required>
                                            <option value="1" selected>Evet</option>
                                            <option value="0">Hayır</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Galeri İçeriği</label>
                                    <div class="col-sm-10">
                                        <textarea class="ckeditor"  name="galeriicerik" id="galeriicerik"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Galeri Resim</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="exampleInputFile" name="galeriresim"><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Galeri Anahtar Kelimeleri</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="textArea" name="galerikeyw" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Galeri Meta Açıklama</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="textArea" name="galeridesc" required></textarea>
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