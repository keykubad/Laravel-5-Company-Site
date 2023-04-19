@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Sipariş Düzenleme Menüsü
                            <small>Sipariş düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Sipariş Düzenleme</li>
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
                                <h4>Sipariş Düzenleme Kaydı</h4>
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
                                            <input type="text" value="{{ $siparis->urunadi }}" class="form-control" id="textInput" name="urunadi">
                                        </div>

                                    </div>
                                    
                                        <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Ad soyad (Unvan)</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $siparis->adunvan }}" class="form-control" id="textInput" name="adunvan">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Adres</label>
                                        <div class="col-sm-10">
                                        <textarea class="form-control" id="textArea" name="adres" required="">{{ $siparis->adres }}</textarea>
                                        </div>

                                    </div>
                                        <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $siparis->email }}" class="form-control" id="textInput" name="email">
                                        </div>

                                    </div>
                                     <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Telefon</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $siparis->telefon }}" class="form-control" id="textInput" name="telefon">
                                        </div>

                                    </div>
                             <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Mesaj</label>
                                        <div class="col-sm-10">
                                        <textarea class="form-control" id="textArea" name="mesaj" required="">{{ $siparis->mesaj }}</textarea>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Sipariş Durumu</label>
                                        <div class="col-sm-10">
                                            <select name="durum" class="form-control" required>
                                                <option value="1" @if ($siparis->durum==1) selected @endif>Teslim Edildi</option>
                                                <option value="0" @if ($siparis->durum==0) selected @endif>Hazırlanıyor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Sipariş Adedi</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $siparis->adet }}" class="form-control" id="textInput" name="adet">
                                        </div>
                                        </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Sipariş Fiyatı</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $siparis->fiyat }}" class="form-control" id="textInput" name="fiyat">
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