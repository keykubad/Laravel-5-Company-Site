@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Galeri Kategori Menüsü
                            <small>Galeri kategorisi düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Galeri Kategorisi düzenleme</li>
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
                                <h4>Galeri Kategorisi Düzenleme</h4>
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
                                        <label class="col-sm-2 control-label">Galeri Kategori</label>
                                        <div class="col-sm-10">
                                            <select name="galkatid" class="form-control" required>
                                                <option value="0">Üst Kategori</option>
                                                @foreach($galerikat as $galerikatlar)
                                                 <option value="{{ $galerikatlar->id }}" @if($galerikatlar->id==$ukat->katid) selected @endif >{{ $galerikatlar->sayfaadi }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Galeri Kategorisi</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="galerikatadi" value="{{ $ukat->sayfaadi }}">
                                        </div>

                                    </div>
                                 <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Galeri Açıklama(Description)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="galeridesc" value="{{ $ukat->sayfadesc }}">
                                        </div>

                                    </div>
                                <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Galeri Etiket(Keywords)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="galerikeyw" value="{{ $ukat->sayfakeyw }}">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Galeri Kategori Dili</label>
                                        <div class="col-sm-10">
                                            <select name="galerikatdil" class="form-control" required>
                                                <option value="tr" @if($ukat->sayfadil=="tr") selected @endif>Türkçe</option>
                                                <option value="en" @if($ukat->sayfadil=="en") selected @endif>İngilizce</option>
                                                <option value="de" @if($ukat->sayfadil=="de") selected @endif>Almanca</option>
                                                <option value="fr" @if($ukat->sayfadil=="fr") selected @endif>Fransızca</option>
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