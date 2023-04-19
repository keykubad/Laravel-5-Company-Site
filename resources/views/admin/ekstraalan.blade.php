@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Ekstra Alan Menüsü
                            <small>Ekstra alanları ekleme,silme ve düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Ekstra Alan Düzenleme</li>
                        </ol>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="modal fade" id="standardModal" tabindex="-1" role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                 <div class="modal-content">
                    <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                         <h4 class="modal-title" id="standardModalLabel">Ekstra Alanlar</h4>
                    </div>
                        <div class="modal-body">
                        Ekstra alanlar sitenize ek olarak eklenebilecek html içerikler yada ek açıklamaları içerir.Ekstra alan eklemesi için bizimle iletişime geçmeniz yada ilk satın almada belirtilmesi gerekir.Burada eklenen içerikler Yazılımın ilk kurulumuyla gelmektedir.<br><br>
                        Ekstra alanlar dil sayfalarınıza görede ayarlanabilir,her dilde ayrı ayarlar yapılandırılabilir.<br>Örnek sitenize hava durumu eklemek için bu kısım kullanılınır.                          
                            </div>                                      
                        <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                            </div>
                     </div>
                                                    
                    </div>
                <!-- /.modal-content -->
                </div>
            <!-- /.row -->
            <div class="row">

                <!-- Validation Examples -->
                <div class="col-lg-12">
                    <div class="portlet portlet-default">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Ekstra Alan Ekleme</h4>
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
                                        <label for="textInput" class="col-sm-2 control-label">Ekstra Alan Adı</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="textInput" name="adi">
                                        </div>

                                    </div>
                                 <div class="form-group">
                                        <label class="col-sm-2 control-label">Ekstra Alan Durumu</label>
                                        <div class="col-sm-10">
                                            <select name="durum" class="form-control" required>
                                                <option value="1" selected>Açık</option>
                                                <option value="0">Kapalı</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Ekstra Alan Dili</label>
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
                                        <label for="textInput" class="col-sm-2 control-label">Ekstra Alan İçeriği</label>
                                        <div class="col-sm-10">
                                            <textarea class="ckeditor"  name="icerik" id="icerik"></textarea>
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
                                <h4>Ekstra alan düzenleme işlemleri</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Ekstra Alan Adı</th>
                                        <th>Ekstra Alan Dil</th>
                                        <th>Ekstra Alan Durumu</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ekstra as $alan)
                                    <tr class="odd gradeX">
                                
                                        <td align="center">{{ $alan->adi }}</td>
                                        <td align="center">
                                          @if($alan->dil=="tr") Türkçe
                                            @elseif($alan->dil=="en") İngilizce
                                            @elseif($alan->dil=="de") Almanca
                                            @elseif($alan->dil=="fr") Fransızca
                                            @endif
                                           </td>
                                           <td align="center">
                                            @if($alan->durum=="1") Açık
                                            @else
                                            Kapalı
                                            @endif
                                           </td>
                                        <td align="center"><a href="{{ URL::to('yonetim/ekstraalanduzen/'.$alan->id.'') }}" class="btn btn-default">Düzenle</a>
                                            <a href="{{ URL::to('yonetim/ekstraalansil/'.$alan->id.'') }}" class="btn btn-red">Sil</a>
                                        </td>
                                    
                                    </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                                @if($ekstrakac==0) <td align="center">Henüz Kayıtlı bir veri yok</td> @endif
                            </div>
                            <?php
                            echo $ekstra->setPath('ekstraalan')->render();
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