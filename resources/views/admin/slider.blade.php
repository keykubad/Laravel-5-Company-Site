@extends('admin.index')
@section('orta')

    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Slider Ekleme ve Düzenleme Menüsü
                            <small>Slider ekleme ve düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Slider Ekleme ve Düzenleme</li>
                        </ol>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">
<div class="modal fade" id="standardModal" tabindex="-1" role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="standardModalLabel">Slider eklemek için okuyunuz</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                    Slider eklemesi yaparken eğer sadece resim çıkmasını isterseniz
                                                    <p>--</p>
                                                    Eklemeniz yeterli olacaktır.
                                                    <br>
                                                    Ekleme işlemi için Örnek<br>
                                                    Merhaba deneme-Test yazı-Buda son yazı
                                                         
                                                        </div>
                                                         
                                                     <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
</div>
                                            <!-- /.modal-dialog -->
                <!-- Validation Examples -->
                <div class="col-lg-12">
                    <div class="portlet portlet-default">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Slider(Banner) Ekleme Formu</h4>
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
                                        <label for="textInput" class="col-sm-2 control-label">Slider Sıra</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="slidersira">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Slider Yazısı</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="textArea" name="slideryazi"></textarea>
                                             <a class="btn btn-success" data-toggle="modal" data-target="#standardModal">Mutlaka okuyunuz</a>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Slider Dili</label>
                                        <div class="col-sm-10">
                                            <select name="sliderdil" class="form-control" required>
                                                <option value="tr" selected>Türkçe</option>
                                                <option value="en">İngilizce</option>
                                                <option value="de">Almanca</option>
                                                <option value="fr">Fransızca</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label"">Slider Resim</label>
                                        <div class="col-sm-10">
                                            <input type="file" id="exampleInputFile" name="sliderresim">
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
                                <h4>Slider düzenleme işlemleri</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Slider Resim</th>
                                        <th>Slider Yazı</th>
                                        <th>Slider Dil</th>
                                        <th>Slider Sira</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($slider as $bannerlar)

                                        <!-- Standard Modal -->
                                        <form class="form-horizontal" id="validate" role="form" method="post" action="{{ URL::to('yonetim/slider/'.$bannerlar->id.'') }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="modal fade" id="standardModal{{ $bannerlar->slidersira }}" tabindex="-1" role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="standardModalLabel">Slider Sırası Değiş</h4>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="textInput" class="col-sm-2 control-label">Slider Sırası</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="textInput" name="slidersira" value="{{ $bannerlar->slidersira }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-default">Kaydet</button>
                                                        </div>

                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                               </form>
                                                <!-- /.modal-dialog -->
                                            </div>

                                        <!-- /.modal -->
                                        <tr class="odd gradeX">
                                            <td align="center"><img src="{{ URL::to('resimler/slider/'.$bannerlar->sliderresim.'') }}" style="width:100px;height:50px;"></td>
                                            <td align="center">{{ $bannerlar->slideryazi }} </td>
                                            <td align="center">
                                                @if($bannerlar->sliderdil=="tr") Türkçe
                                                @elseif($bannerlar->sliderdil=="en") İngilizce
                                                @elseif($bannerlar->sliderdil=="de") Almanca
                                                @elseif($bannerlar->sliderdil=="fr") Fransızca
                                                @endif</td>

                                            <td align="center">
                                                Mevcut Sıra : {{ $bannerlar->slidersira }}<br>
                                                <button class="btn btn-default" data-toggle="modal" data-target="#standardModal{{ $bannerlar->slidersira }}">Sıra Değiş</a>
                                            </td>
                                            <td align="center"><a href="{{ URL::to('yonetim/slidergor/'.$bannerlar->id.'') }}" class="btn btn-default">Düzenle</a>
                                                <a href="{{ URL::to('yonetim/slidersil/'.$bannerlar->id.'') }}" class="btn btn-red">Sil</a>
                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                                @if($sliderkac==0) <td align="center">Henüz Kayıtlı bir veri yok</td> @endif
                            </div>
                            <?php
                            echo $slider->setPath('slider')->render();
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

@stop