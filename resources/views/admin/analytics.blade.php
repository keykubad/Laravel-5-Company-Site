@extends('admin.index')
@section('orta')
    <!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">

    <div class="page-content">

        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Analytics Menüsü
                        <small>Google Analytics Bilgileri</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('yonetim/admin') }}">Anasayfa</a>
                        </li>
                        <li class="active">Google Analytics</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->
        <div class="portlet portlet-red">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>Google Analytics Ayarları Nasıl Yapılır ?</h4>
                </div>
                <div class="portlet-widgets">
                    <span class="divider"></span>
                    <a data-toggle="collapse" data-parent="#accordion" href="#defaultPortlet" class=""><i class="fa fa-chevron-down"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="defaultPortlet" class="panel-collapse in" style="height: auto;">
                <div class="portlet-body">
                    <p>1. Adım : Ayarlar için ilk önce Google analytics hesabı açmanız gerekmektedir.Hesabı açmak için <a href="http://www.google.com/analytics/">Tıklayınız.</a></p>
                    <p>2. Adım : Hesabınızı açtıysanız şimdi size verilen gmail adresi ve şifrenizi bir yere not ediniz ve Profil ID temin edebilmek için Hesabınıza giriş yapınız.</p>
                    <p>3. Adım : Hesabınıza sitenizi ekledikten sonra rapor sayfasında açılan linkte <code>p</code> yazısından sonraki 8 haneyi kaydedin. </p>
                    <p>4. Adım : Bu bilgileri aşağıdaki ilgili alanlara giriş yapıp kaydediniz. </p>
                    <p>5. Adım : Hesabınıza kurumsal site panelinin erişim bu linke <a href="https://accounts.google.com/b/0/DisplayUnlockCaptcha">Tıklayınız.</a></p>
                </div>
            </div>
            <div class="portlet-footer">
               Tüm bu adımlar doğru ise artık ziyaretçi istatistikleriniz yönetici panelinde gözükecektir.Problem yaşamanız halinde bizimle iletişime geçiniz.
            </div>
        </div>
        <div class="row">

            <!-- Validation Examples -->
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4>Google Analytics Bilgileri</h4>
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
                                    <label for="textInput" class="col-sm-2 control-label">Analytics Profil ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="analytics_profilid" value="{{ $user->analiytcs_profilid }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Analiytcs Mail Adresi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="analytics_mail" value="{{ $user->analytics_mail }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Analytics Şifre</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="textInput" name="analytics_sifre" value="{{ $user->analiytcs_sifre }}" required>
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