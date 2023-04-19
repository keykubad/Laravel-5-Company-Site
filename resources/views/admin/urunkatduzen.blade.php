@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Ürün Kategori Menüsü
                            <small>Ürün kategorisi düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Ürün Kategorisi düzenleme</li>
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
                                <h4>Ürün Kategorisi Düzenleme</h4>
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
                                        <label class="col-sm-2 control-label">Ürün Kategori</label>
                                        <div class="col-sm-10">
                                            <select name="ukatid" class="form-control" required>
                                                <option value="0">Üst Kategori</option>
                                                @foreach($urunkat as $urunkatlar)
                                                 <option value="{{ $urunkatlar->id }}" @if($urunkatlar->id==$ukat->katid) selected @endif >{{ $urunkatlar->sayfaadi }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Ürün Kategorisi</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="urunkatadi" value="{{ $ukat->sayfaadi }}">
                                        </div>

                                    </div>
                                     <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Ürün Açıklama(Description)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="urundesc" value="{{ $ukat->sayfadesc }}">
                                        </div>

                                    </div>
                                     <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Ürün Etiketleri(Keywords)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="urunkeyw" value="{{ $ukat->sayfakeyw }}">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Ürün Kategori Dili</label>
                                        <div class="col-sm-10">
                                            <select name="urunkatdil" class="form-control" required>
                                                <option value="tr" @if($ukat->urunkatdil=="tr") selected @endif>Türkçe</option>
                                                <option value="en" @if($ukat->urunkatdil=="en") selected @endif>İngilizce</option>
                                                <option value="de" @if($ukat->urunkatdil=="de") selected @endif>Almanca</option>
                                                <option value="fr" @if($ukat->urunkatdil=="fr") selected @endif>Fransızca</option>
                                            </select>
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