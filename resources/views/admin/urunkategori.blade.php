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
                            <small>ürün kategori ekleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Ürün Kategorisi</li>
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
                                <h4>Ürün Kategorisi Ekleme</h4>
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
                                                    @if($urunkatlar->katid==0)   <option value="{{ $urunkatlar->id }}">{{ $urunkatlar->sayfaadi }}</option> @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Ürün Kategorisi</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="urunkatadi">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Ürün Açıklama(Description)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="urundesc">
                                        </div>

                                    </div>
                                 <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Ürün Etiketleri(Keywords)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="urunkeyw">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Ürün Kategori Dili</label>
                                        <div class="col-sm-10">
                                            <select name="urunkatdil" class="form-control" required>
                                                <option value="tr" selected>Türkçe</option>
                                                <option value="en">İngilizce</option>
                                                <option value="de">Almanca</option>
                                                <option value="fr">Fransızca</option>
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
            <!-- begin ADVANCED TABLES ROW -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="portlet portlet-default">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Ürün Kategorisi düzenleme işlemleri</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Kategori Dili</th>
                                        <th>Ürün Kategori Adı</th>
                                        <th>Üst Kategori</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($urunkat as $urunkatlar)
                                    <tr class="odd gradeX">
                                        <td align="center">
                                            @if($urunkatlar->sayfadil=="tr") Türkçe
                                            @elseif($urunkatlar->sayfadil=="en") İngilizce
                                            @elseif($urunkatlar->sayfadil=="de") Almanca
                                            @elseif($urunkatlar->sayfadil=="fr") Fransızca
                                            @endif</td>
                                        <td align="center">{{ $urunkatlar->sayfaadi }} </td>
                                        <td align="center">@if($urunkatlar->katid=="0") Ana Kategori @else {{ $urunkatlar->kategori->sayfaadi }} @endif</td>

                                        <td align="center"><a href="{{ URL::to('yonetim/urunkatduzen/'.$urunkatlar->id.'') }}" class="btn btn-default">Düzenle</a>
                                            <a href="{{ URL::to('yonetim/urunkatsil/'.$urunkatlar->id.'') }}" class="btn btn-red">Sil</a>
                                        </td>

                                    </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                                @if($katkac==0) <td align="center">Henüz Kayıtlı bir veri yok</td> @endif
                            </div>
                            <?php
                            echo $urunkat->setPath('urunkategori')->render();
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