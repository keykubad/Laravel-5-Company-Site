@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper">

        <div class="page-content">

            <!-- begin PAGE TITLE ROW -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>Galeri Düzenleme Menüsü
                            <small>Galeri düzenleme işlemlerini buradan yapabilirsiniz</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                            </li>
                            <li class="active">Galeri Düzenleme</li>
                        </ol>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- begin ADVANCED TABLES ROW -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="portlet portlet-default">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Galeri düzenleme işlemleri</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                    <thead>
                                    <tr>
                                        <th>Galeri Resim</th>
                                        <th>Galeri Başlık</th>
                                        <th>Galeri Kategorisi</th>
                                        <th>Galeri Dili</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($galeri as $galeriler)

                                        <!-- /.modal-dialog -->
                            </div>

                            <!-- /.modal -->
                                    <tr class="odd gradeX">
                                        <td align="center"><img src="{{ URL::to('resimler/galeri/'.$galeriler->galeriresim.'') }}" style="width:100px;height:100px;"></td>
                                        <td align="center">{{ $galeriler->galeribaslik }}</td>
                                        <td align="center">{{ $galeriler->kategori->sayfaadi  }}</td>
                                        <td align="center">
                                            @if($galeriler->galeridil=="tr") Türkçe
                                            @elseif($galeriler->galeridil=="en") İngilizce
                                            @elseif($galeriler->galeridil=="de") Almanca
                                            @elseif($galeriler->galeridil=="fr") Fransızca
                                            @endif
                                        </td>
                                        <td align="center"><a href="{{ URL::to('yonetim/galeriduzenleme/'.$galeriler->id.'') }}" class="btn btn-default">Düzenle</a>
                                            <a href="{{ URL::to('yonetim/galeriduzen/'.$galeriler->id.'') }}" class="btn btn-info">Çoklu Ürün Resmi Ekle</a>
                                            <a href="{{ URL::to('yonetim/coklugaleriduzen/'.$galeriler->id.'') }}" class="btn btn-primary">Çoklu Ürün Resmi Düzenle</a>
                                            <a href="{{ URL::to('yonetim/galerisil/'.$galeriler->id.'') }}" class="btn btn-red">Sil</a>
                                        </td>
                                    </tr>

                                    </div>

                                        @endforeach
                                    </tbody>

                                </table>
                                @if($galerikac==0) <td align="center">Henüz Kayıtlı bir veri yok</td> @endif
                            </div>
                            <?php
                            echo $galeri->setPath('galeriduzen')->render();
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

    <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>

    <!-- /#page-wrapper -->
    <script type="text/javascript">
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div><input type="file" name="urunresimler[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
                }
            });

            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });
    </script>

    <!-- end MAIN PAGE CONTENT -->
@stop