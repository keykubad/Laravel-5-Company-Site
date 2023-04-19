@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>İletişim Mesajları
                            <small>Sitenizin iletişim mesajlarını buradan görebilirsiniz.Mesajların bir kopyası mailinize yollanmaktadır.</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">İletişim</li>
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
                                <h4>İletişim Mesajlarınız</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Gönderen</th>
                                        <th>Email</th>
                                        <th>Başlık</th>
                                        <th>Durumu</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($iletisim as $mesajlar)
                                    <tr class="odd gradeX">
                                        <td>{{ $mesajlar->adsoyad }}</td>
                                        <td>{{ $mesajlar->email }}</td>
                                        <td>{{ $mesajlar->baslik }}
                                        </td>
                                        <td>@if($mesajlar->kontrol==1) Okundu @else Okunmadı @endif</td>
                                        <!-- Standard Modal -->

                                        <div class="modal fade" id="standardModal{{ $mesajlar->id }}" tabindex="-1" role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="standardModalLabel">İletişim Mesajı</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{{ $mesajlar->mesaj }}</p>
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
                                        <td align="center"><a href="{{ URL::to('yonetim/iletisimoku/'.$mesajlar->id.'') }}" class="btn btn-default" data-toggle="modal" data-target="#standardModal{{ $mesajlar->id }}">Mesajı Oku</a>
                                            <a href="{{ URL::to('yonetim/iletisimyanit/'.$mesajlar->id.'') }}" class="btn btn-info">Yanıtla</a>
                                            @if($mesajlar->kontrol==0)
                                            <a href="{{ URL::to('yonetim/iletisimokundu/'.$mesajlar->id.'') }}" class="btn btn-primary">Okundu İşaretle</a>
                                            @endif
                                            <a href="{{ URL::to('yonetim/iletisimsil/'.$mesajlar->id.'') }}" class="btn btn-red">Sil</a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if($iletisimkac==0) <td class="center">Henüz Kayıtlı bir veri yok</td> @endif
                            </div>
                            <?php
                            echo $iletisim->setPath('mesajlar')->render();
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