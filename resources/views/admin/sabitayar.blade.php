@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">

    <div class="page-content">

        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Site Sabit Ayarları
                        <small>Site sabit ayarları ve resim kırpma ayarları düzenleme menüsü</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                        </li>
                        <li class="active">Sabit Ayarlar ve Resim Kırpma</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->
               <div class="modal fade" id="standardModal" tabindex="-1" role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                 <div class="modal-content">
                    <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                         <h4 class="modal-title" id="standardModalLabel">Sabit Ayar Yapılandırması</h4>
                    </div>
                        <div class="modal-body">
                        Bu bölümden sitenize değişmeyen sabit ayarlarınızı ekleyebilirsiniz
                        <br>
                        Site sosyal hesapları sırasıyla;<br>
                        Facebook<br>
                        Twitter<br>
                        Google+<br>
                        Instagram<br>
                        Bu sıra ile eklemeniz ve alt alta girmeniz gereklidir.<br><br>
                        Site google haritası kodunda aldığınız kodun witdh(genişlik) kısmı 100% eklenirse tasarıma tam oturacak akıllı cihazlarda kayma yapmayacaktır.
                        <br><br>
                        Resim Boyutları site tasarımına uygun kırpılmıştır.Ayarları değiştirmeniz kalıcı oldugundan önerilmemektedir.                              
                            </div>                                      
                        <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                            </div>
                     </div>
                                                    
                    </div>
                <!-- /.modal-content -->
                </div>
        <div class="row">

            <!-- Validation Examples -->
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4>Site Sabit Ayarları ve Resim Kırpma Özellikleri</h4>
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
                                        <label for="textInput" class="col-sm-2 control-label">Cache (Önbellek)</label>
                                        <div class="col-sm-10">
                         
                                    <div class="btn-group sw-btn">
                                        <button name="cachedurum" value="1" class="btn @if($sabit->cachedurum!=0)btn-primary @else btn-white @endif">AÇ</button>
                                        <button name="cachedurum" value="0" class="btn @if($sabit->cachedurum==0)btn-primary @else btn-white @endif">KAPAT</button>
                                    </div>
                                    </div>
                                    </div>
                                <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Kullanımı</label>
                                        <div class="col-sm-10">
                                        <a class="btn btn-success" data-toggle="modal" data-target="#standardModal">Mutlaka okuyunuz</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Site Sosyal Hesaplar</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="textArea" name="sitesosyal" required>{{ $sabit->sitesosyal }}</textarea>
                                        </div>
                                    </div>
                                    
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Site Google Haritası</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="textArea" name="sitegooglemap" required>{{ $sabit->sitegooglemap }}</textarea>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Site Google Analiz</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="textArea" name="siteanaliz" required>{{ $sabit->siteanaliz }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label"">Site Logonu yükle</label>
                                        <div class="col-sm-10">
                                            <input type="file" id="exampleInputFile" name="logo">
                                            <p class="help-block"><img src="{{URL::to('resimler/'. $sabit->sitelogo.'')}}"></p>
                                            <br><br>
                                        </div>

                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Referanslar Resim Boyutları</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="textInput" name="refyukseklik" value="{{ $ref->yukseklik }}">
                                        </div>
                                        <div class="col-sm-1">
                                             <input type="text" class="form-control" id="textInput" name="refgenislik" value="{{ $ref->genislik }}">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Galeri Resim Boyutları</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="textInput" name="galyukseklik" value="{{ $gal->yukseklik }}">
                                        </div>
                                        <div class="col-sm-1">
                                             <input type="text" class="form-control" id="textInput" name="galgenislik" value="{{ $gal->genislik }}">
                                        </div>

                                    </div>
                                  <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Logo Resim Boyutları</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="textInput" name="logoyukseklik" value="{{ $logo->yukseklik }}">
                                        </div>
                                        <div class="col-sm-1">
                                             <input type="text" class="form-control" id="textInput" name="logogenislik" value="{{ $logo->genislik }}">
                                        </div>

                                    </div>
                                <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Haber Resim Boyutları</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="textInput" name="haberyukseklik" value="{{ $haber->yukseklik }}">
                                        </div>
                                        <div class="col-sm-1">
                                             <input type="text" class="form-control" id="textInput" name="habergenislik" value="{{ $haber->genislik }}">
                                        </div>

                                    </div>
                                 <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Slider Resim Boyutları</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="textInput" name="slideryukseklik" value="{{ $slider->yukseklik }}">
                                        </div>
                                        <div class="col-sm-1">
                                             <input type="text" class="form-control" id="textInput" name="slidergenislik" value="{{ $slider->genislik }}">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Ürün Resim Boyutları</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="textInput" name="urunyukseklik" value="{{ $urun->yukseklik }}">
                                        </div>
                                        <div class="col-sm-1">
                                             <input type="text" class="form-control" id="textInput" name="urungenislik" value="{{ $urun->genislik }}">
                                        </div>

                                    </div>
                                 <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Video Resim Boyutları</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="textInput" name="videoyukseklik" value="{{ $video->yukseklik }}">
                                        </div>
                                        <div class="col-sm-1">
                                             <input type="text" class="form-control" id="textInput" name="videogenislik" value="{{ $video->genislik }}">
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