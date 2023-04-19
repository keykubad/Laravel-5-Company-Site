@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">

    <div class="page-content">

        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Sayfa Ekleme menüsü
                        <small>Sayfalarınızı bu bölümden ekleyiniz</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                        </li>
                        <li class="active">Sayfa ekleme menüsü</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->

            <div class="row">
                <div class="modal fade" id="standardModal" tabindex="-1" role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="standardModalLabel">Slider eklemek için okuyunuz</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                   Sayfa ekleme işlemlerinde sayfanın yapısının nasıl olacağını buradan beliryebilirsiniz.Örnek olarak video sayfası seçtiğinizde ön sayfa yapısı video listeleme sayfası halini alacaktır.
                                                         
                                                        </div>
                                                         
                                                     <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                                <!-- /.modal-content -->
                </div>
            <!-- Validation Examples -->
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4>Sayfa ekleme bölümü</h4>
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
                                    <label class="col-sm-2 control-label">Sayfa Durumu</label>
                                    <div class="col-sm-10">
                                        <select name="durum" class="form-control" required>
                                            <option value="1" selected>Aktif</option>
                                            <option value="0">Pasif</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Sayfa Sırası</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="sira" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select name="kat" class="form-control" required>
                                            <option value="0" selected>Üst Kategori</option>
                                            <?php $kat_type = ''; ?>
                                            @foreach ($sayfa as $sayfalar)
                                                @if ($kat_type != $sayfalar->sayfadil)
                                                    @if ($kat_type != '')
                                                        </optgroup>
                                                    @endif
                                                    <optgroup label='@if($sayfalar->sayfadil=="tr")Türkçe Kategoriler @elseif($sayfalar->sayfadil=="en") İngilizce Kategoriler @elseif($sayfalar->sayfadil=="de") Almanca Kategoriler @elseif($sayfalar->sayfadil=="fr") Fransızca Kategoriler @endif'>
                                                @endif
                                            <option value="{{ $sayfalar->id }}">@if($sayfalar->katid!=0) -> @endif {{ $sayfalar->sayfaadi }}</option>
                                            {{ $kat_type = $sayfalar->sayfadil }}
                                            @endforeach
                                                    @if ($kat_type != '')
                                                    </optgroup>
                                                    @endif
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Modül Ekle</label>
                                    <div class="col-sm-10">
                                        <select name="modulid" class="form-control" required>
                                            <option value="0" selected>Normal Sayfa</option>
                                            @foreach($modul as $moduller)
                                                <option value="{{ $moduller->id }}">{{ $moduller->moduladi }}</option>
                                                @endforeach
                                        </select>
                                 <a class="btn btn-success" data-toggle="modal" data-target="#standardModal">Mutlaka okuyunuz</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Sayfa Dili</label>
                                    <div class="col-sm-10">
                                        <select name="dil" class="form-control" required>
                                            <option value="tr" selected>Türkçe</option>
                                            <option value="en">İngilizce</option>
                                            <option value="de">Almanca</option>
                                            <option value="fr">Fransızca</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Sayfa Adı</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="sayfaadi" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Sayfa İçeriği</label>
                                    <div class="col-sm-10">
                                        <textarea class="ckeditor"  name="sayfaicerik" id="sayfaicerik"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Sayfa Anahtar Kelimeleri</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="textArea" name="sayfakeyw" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Sayfa Açıklama</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="textArea" name="sayfadesc" required></textarea>
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