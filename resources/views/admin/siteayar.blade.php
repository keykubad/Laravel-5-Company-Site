@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">

    <div class="page-content">

        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Site Genel ayarları
                        <small>Site genel ayarları ekleme menüsü</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                        </li>
                        <li class="active">Site Ayarları</li>
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
                         <h4 class="modal-title" id="standardModalLabel">Site Ayarları Yapılandırması</h4>
                    </div>
                        <div class="modal-body">
                        Bu bölümden sitenizin Dil sayfalarını google açıklama ve anahtar kelimelerini belirleyebilirsiniz.                            
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
                            <h4>Site Ayarları</h4>
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
                                        <label for="textInput" class="col-sm-2 control-label">Kullanımı</label>
                                        <div class="col-sm-10">
                                        <a class="btn btn-success" data-toggle="modal" data-target="#standardModal">Mutlaka okuyunuz</a>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Site Durumu</label>
                                    <div class="col-sm-10">
                                        <select name="durum" class="form-control" required>
                                            <option value="1">Açık</option>
                                            <option value="2">Kapalı</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Site Dili</label>
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
                                    <label for="textInput" class="col-sm-2 control-label">Site Adı</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="siteadi" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Site Anahtar Kelimeleri</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="textArea" name="sitekeyword" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Site Açıklama</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="textArea" name="sitedesc" required></textarea>
                                    </div>
                                </div>
                                     <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Site Tel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="sitetel" required>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Site Adres</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="textArea" name="siteadres" required></textarea>
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