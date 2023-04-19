@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">

    <div class="page-content">

        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Şifre Menüsü
                        <small>Yönetici Şifresi ve Mail Gönderim Ayarları Değiştirme</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                        </li>
                        <li class="active">Mail Ayarları ve Şifre Değiştirme</li>
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
                         <h4 class="modal-title" id="standardModalLabel">Mail Ayarları</h4>
                    </div>
                        <div class="modal-body">
                        Mail ayarları sunucunuza göre yapılandırılmaktadır.

                        <u>PHP mail özelliği tercih edilmeyen güvenlik düzeyi az olan gönderim metodu olup kullanmanız önerilmemektedir.</u><br>
                        Örnek mail ayarları<br>
                            Sunucu : mail.site.com<br>
                            Port : 587<br>
                            Şifreleme : Hiçbiri<br>
                            Kullanıcı adı : kurumsal@kurumsalsite.co<br>
                            Şifre: mail şifreniz<br><br>
                            Site genelinde tüm iletişim formları bu ayarlarınızla çalışmaktadır.
                                                         
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
                            <h4>Mail ve Kullanıcı Bilgileri</h4>
                        </div>
                        <div class="portlet-widgets">
                            <a data-toggle="collapse" data-parent="#accordion" href="#validationExamples"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="validationExamples" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <form class="form-horizontal" id="validate" role="form" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Adı</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="adi" value="{{ $user->name }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Kullanıcı Adı</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="kullaniciadi" value="{{ $user->email }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Şifre</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="textInput" name="password" value="{{ $user->password }}">
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
        <div class="portlet portlet-red">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>Mail Server Ayarları</h4>
                </div>
                <div class="portlet-widgets">
                    <span class="divider"></span>
                    <a data-toggle="collapse" data-parent="#accordion" href="#defaultPortlet" class=""><i class="fa fa-chevron-down"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="defaultPortlet" class="panel-collapse in" style="height: auto;">
                <div class="portlet-body">
                <form class="form-horizontal" id="validate" role="form" method="post" action="{{ URL::to('yonetim/mailserver') }}">

             <a class="btn btn-primary" data-toggle="modal" data-target="#standardModal">Mutlaka okuyunuz</a>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Mail Sunucu</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="sunucu" value="{{ $mailcek->mailhost }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Mail Port</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="port" value="{{ $mailcek->port }}" required>
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Mail Şifreleme Tipi</label>
                                    <div class="col-sm-10">
                                        <select name="tip" class="form-control" required>
                                            <option value="tls" @if($mailcek->sifretip=="tls") selected @endif>TLS</option>
                                            <option value="ssl" @if($mailcek->sifretip=="ssl") selected @endif>SSL</option>
                                            <option value="" @if($mailcek->sifretip=="") selected @endif>HİÇBİRİ</option>
                                        </select>
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Mail Driver (Gönderim Ayarı)</label>
                                    <div class="col-sm-10">
                                        <select name="driver" class="form-control" required>
                                            <option value="smtp" @if($mailcek->driver=="smtp") selected @endif>SMTP</option>
                                            <option value="mail" @if($mailcek->driver=="mail") selected @endif>PHP MAIL</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Mail Adresi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="maili" value="{{ $mailcek->mailkullanici }}" required>
                                    </div>
                                </div>
                               <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Mail Şifresi</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="textInput" name="sifre" value="{{ $mailcek->mailsifre }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Mail Gönderen Adres</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="kime" value="{{ $mailcek->kime }}" required>
                                    </div>
                                </div>
                               <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Gönderilecek Mail Başlığı</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="baslik" value="{{ $mailcek->baslik }}" required>
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
            <div class="portlet-footer">
               Mail server ayarları için ilgili alanları doldurup bilgilerinizi giriniz.
            </div>
        </div>
</div>
<!-- /#page-wrapper -->
<!-- end MAIN PAGE CONTENT -->
@stop