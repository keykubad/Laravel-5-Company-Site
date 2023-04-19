@extends('admin.index')
@section('orta')

    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">
 <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Mail Listesi Düzenleme Menüsü
                            <small>Mail listesi düzenleme ve çıktı alma işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Mail Listesi Düzenleme</li>
                        </ol>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        <div class="page-content">
            <!-- begin ADVANCED TABLES ROW -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="portlet portlet-default">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Mail düzenleme işlemleri</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                     @if($_POST)
                     <br>
                    <div class="col-lg-12">
                  
                            <div class="form-control" style="height:200px;overflow-x: hidden; overflow-y: scroll;">
                           
                                @foreach($mailtum as $mailtumu)
                                {!! trim($mailtumu->email)."<br>" !!}
                                @endforeach
                             </div>
                 
                           </div><br>
                    @endif
                        <div class="portlet-body">
                            <div class="table-responsive">
                            <div align="center">
                            <form method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-default" name="cek" value="Tüm Mail Listesini Çek">
                            </form>
        
                            </div>
                            <br>

                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Mail Adresi</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($mail as $mailler)
                                    <tr class="odd gradeX">
                                        <td align="center">{{ $mailler->id }} </td>
                                        <td align="center">{{ $mailler->email }}
                                            </td>
                                        <td>  
                                        <a href="{{ URL::to('yonetim/maillersil/'.$mailler->id.'') }}" class="btn btn-red">Sil</a> 
                                        </td>

                                    </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                                Toplam {{ $mailkac}} adet mail kaydı bulunuyor.
                                @if($mailkac==0) <td align="center">Henüz Kayıtlı bir veri yok</td> @endif
                            </div>
                            <?php
                            echo $mail->setPath('mailler')->render();
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
