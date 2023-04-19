@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">

    <div class="page-content">

        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Ürün Ekleme menüsü
                        <small>Ürünlerinizi bu bölümden ekleyiniz</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                        </li>
                        <li class="active">Ürün ekleme menüsü</li>
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
                            <h4>Ürün ekleme bölümü</h4>
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
                                    <label for="textInput" class="col-sm-2 control-label">Ürün Adı</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="urunadi" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Ürün Kodu</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="urunkodu">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Ürün Fiyatı</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="urunfiyat">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Ürün Durumu</label>
                                    <div class="col-sm-10">
                                        <select name="urundurum" class="form-control" required>
                                            <option value="1" selected>Stokta var</option>
                                            <option value="0">Stokta yok</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Ürün Kategorisi</label>
                                    <div class="col-sm-10">
                                        <select name="urunkat" class="form-control" required>
                                            @foreach($urunkat as $urunkatlar)
                                                <option value="{{ $urunkatlar->id }}">@if($urunkatlar->katid!=0) -> @endif {{ $urunkatlar->sayfaadi }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Ürün Dili</label>
                                    <div class="col-sm-10">
                                        <select name="urundil" class="form-control" required>
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
                                    <label for="textInput" class="col-sm-2 control-label">Ürün İçeriği</label>
                                    <div class="col-sm-10">
                                        <textarea class="ckeditor"  name="urunicerik" id="urunicerik"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label"">Ürün Resim</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="exampleInputFile" name="urunresim"><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Ürün Anahtar Kelimeleri</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="textArea" name="urunkeyw" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Ürün Meta Açıklama</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="textArea" name="urundesc" required></textarea>
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