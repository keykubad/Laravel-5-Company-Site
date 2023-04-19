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
                                            <input type="text" class="form-control" id="textInput" name="duyurubaslik">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Duyuru Dili</label>
                                        <div class="col-sm-10">
                                            <select name="duyurudil" class="form-control" required>
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
                                        <label for="textInput" class="col-sm-2 control-label">Duyuru İçeriği</label>
                                        <div class="col-sm-10">
                                            <textarea class="ckeditor"  name="duyuruicerik" id="duyuruicerik"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Duyuru Anahtar Kelimeleri</label>
                                        <div class="col-sm-10">

                                            <input type="text" class="form-control" id="tokenfield" name="duyurukeyw" placeholder="Etiketlerinizi yazınız!" />

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Duyuru Meta Açıklama</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="textArea" name="duyurudesc" required></textarea>
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
            <!-- begin ADVANCED TABLES ROW -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="portlet portlet-default">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Duyuru düzenleme işlemleri</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Duyuru Başlık</th>
                                        <th>Duyuru Dil</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($duyuru as $duyurular)
                                    <tr class="odd gradeX">
                                        <td align="center">{{ $duyurular->duyurubaslik }} </td>
                                        <td align="center">
                                            @if($duyurular->duyurudil=="tr") Türkçe
                                            @elseif($duyurular->duyurudil=="en") İngilizce
                                            @elseif($duyurular->duyurudil=="de") Almanca
                                            @elseif($duyurular->duyurudil=="fr") Fransızca
                                            @endif</td>
                                        <td align="center"><a href="{{ URL::to('yonetim/duyurugor/'.$duyurular->id.'') }}" class="btn btn-default">Düzenle</a>
                                            <a href="{{ URL::to('yonetim/duyurusil/'.$duyurular->id.'') }}" class="btn btn-red">Sil</a>
                                        </td>

                                    </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                                @if($duyurukac==0) <td align="center">Henüz Kayıtlı bir veri yok</td> @endif
                            </div>
                            <?php
                            echo $duyuru->setPath('duyurular')->render();
                            ?>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.portlet-body -->

                    </div>
                    <!-- /.portlet -->

                </div>
                <!-- /.col-lg-12 -->

            </div>



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