@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Müşteri Siparişleri
                            <small>Sitenize ait ürünlere yapılan siparişleri takip edebileceğiniz kısımdır.</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Siparisler</li>
                        </ol>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- end PAGE TITLE ROW -->

            <!-- begin ADVANCED TABLES ROW -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="portlet portlet-default">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Siparişleriniz</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Ürün Resim</th>
                                        <th>Ürün Adı</th>
                                        <th>Ad soyad (Unvan)</th>
                                        <th>Email</th>
                                        <th>Telefon</th>
                                        <th>Adet</th>
                                        <th>Fiyat</th>
                                        <th>Durumu</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($siparis as $siparisler)
                                    <tr class="odd gradeX">
                                        <td><img style="width:100px;height:100px" src="{{  URL::to('resimler/urunler/'.$siparisler->resimcek->urunresim.'') }}"></td>
                                        <td>{{ $siparisler->urunadi }}</td>
                                        <td>{{ $siparisler->adunvan }}</td>
                                        <td>{{ $siparisler->email }}</td>
                                        <td>{{ $siparisler->telefon }}</td>
                                        <td>{{ $siparisler->adet }}</td>
                                        <td>{{ $siparisler->fiyat }}
                                        </td>
                                        <td>@if($siparisler->durum==1) <button class="btn btn-green">Teslim Edildi</button> @else <button class="btn btn-orange">Hazırlanıyor</button> @endif</td>
                                        <!-- Standard Modal -->
                            <div class="modal fade" id="modaal{{ $siparisler->id }}" tabindex="-1" role="dialog" aria-labelledby="modaalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="modaalLabel">Durum</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{{ $siparisler->mesaj }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->


                                        <!-- ilki bitti-->
                                        <form class="form-horizontal" id="validate" role="form" method="post" action="{{ URL::to('yonetim/siparisduzen/'.$siparisler->id.'') }}">
                                        <div class="modal fade" id="standardModal{{ $siparisler->id }}" tabindex="-1" role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="standardModalLabel">Durum</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Sipariş durumu</label>
                                                            <div class="col-sm-10">
                                                                <select name="durum" class="form-control" required>
                                                                    <option value="1" selected>Teslim Edildi</option>
                                                                    <option value="0">Hazırlanıyor</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-default">Kaydet</button>
                                                        </div>
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        </form></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                        <td align="center"><a href="{{ URL::to('yonetim/siparisdurum/'.$siparisler->id.'') }}" class="btn btn-default" data-toggle="modal" data-target="#standardModal{{ $siparisler->id }}">Durum Güncelle</a>

                                         <a href="{{ URL::to('yonetim/siparismesaj/'.$siparisler->id.'') }}" class="btn btn-primary" data-toggle="modal" data-target="#modaal{{ $siparisler->id }}">Mesaj Oku</a>

                                            <a href="{{ URL::to('yonetim/siparisduzenle/'.$siparisler->id.'') }}" class="btn btn-info">Sipariş Düzenle</a>
                                       
                                            <a href="{{ URL::to('yonetim/siparissil/'.$siparisler->id.'') }}" class="btn btn-red">Sil</a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if($sipariskac==0) <td class="center">Henüz Kayıtlı bir veri yok</td> @endif
                            </div>
                            <?php
                            echo $siparis->setPath('siparis')->render();
                            ?>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.portlet-body -->

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