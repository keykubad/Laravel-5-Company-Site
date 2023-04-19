@include('tema.income.header')
@include('tema.income.topbar')
@include('tema.income.menu')	
	<div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div id="page-header">
				
                <div class="page-header-bg"></div>
                
				<div class="container">
					<div class="row">
						<div class="span12">

                            <h3>{{ $sayfa->sayfaadi }}</h3>
                        
						</div><!-- end .span12 -->
					</div><!-- end .row -->
				</div><!-- end .container -->
				
			</div><!-- end #page-header -->
            
            <div class="container">
                <div class="row">
                    <div class="span12">

						<h4>{{ $sayfa->sayfadesc }}</h4>
                
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            <br><br><br>
            
            <div class="container">
                <div class="row">
                    <div class="span8">

						<form class="form-signin cform" method="post" action="{{ URL::to('iletisimkayit')}}" id="cform" autocomplete="on">  
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div id="formstatus"></div>
                                <p>
                                    <input class="span12" type="text" id="name" name="adisoyadi" value="" placeholder="@if(Request::segment(1)=="en")
                                        Your name and your surname
                                        @elseif(Request::segment(1)=="sayfa")
                                        Adınız Soyadınız
                                        @elseif(Request::segment(1)=="de")
                                        Ihr Vor- und Nachname
                                        @elseif(Request::segment(1)=="fr")
                                        Votre nom et prénom
                                        @endif">
                                </p>
                                <p>
                                    <input class="span12" type="email" id="subject" name="email" value="" placeholder="@if(Request::segment(1)=="en")
                                        Email
                                        @elseif(Request::segment(1)=="sayfa")
                                        Email
                                        @elseif(Request::segment(1)=="de")
                                        E-Mail
                                        @elseif(Request::segment(1)=="fr")
                                        Courriel
                                        @endif">
                                </p>
                                <p>
                                   <input class="span12" type="text" id="email" name="konu" value="" placeholder="@if(Request::segment(1)=="en")
                                        Subject
                                        @elseif(Request::segment(1)=="sayfa")
                                        Konu
                                        @elseif(Request::segment(1)=="de")
                                        Subjekt
                                        @elseif(Request::segment(1)=="fr")
                                        Sujet
                                        @endif"> 
                                </p>
                                <p>
                                    <textarea class="span12" id="message" name="mesaj" rows="7" cols="25" placeholder="@if(Request::segment(1)=="en")
                                        Message
                                        @elseif(Request::segment(1)=="sayfa")
                                        Mesajınız
                                        @elseif(Request::segment(1)=="de")
                                        Message
                                        @elseif(Request::segment(1)=="fr")
                                        Message
                                        @endif"></textarea>
                                </p>
                                <p class="last">
                                    <input class="btn" id="submit" type="submit" name="submit" value="{{ trans('dil.gonder') }}" >
                                </p>
                            </fieldset>
                        </form><!-- end #contact-form -->
                
                    </div><!-- end .span8 -->
                    <div class="span4">
                    
                    	<br class="hidden-phone">
                    	
                        <p>{{ $footer->sitedesc }}</p>
                        
                        <br>
                        
                        <div class="widget ewf_widget_contact_info">
                            
                            <ul>
                            	<li>
                                	<i class="fa fa-phone"></i>
                                    {{ $footer->sitetel }}
                                </li>
                                <li>
                                	<i class="fa fa-map-marker"></i>
                                	{{ $footer->siteadres }}
								</li>                                
                                <li>
                                	<i class="fa fa-envelope-o"></i>
                                    <a href="mailto:{{ $user->email}}">{{ $user->email}}</a><br>
                                </li>
                            </ul>
                            
                        </div><!-- end .ewf_widget_contact_info -->
                        
                    </div><!-- end .span4 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            <div class="map" style="margin-bottom:-50px">
                <{!! $genelayar->sitegooglemap !!}
            </div><!-- end .map -->
    
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
@include('tema.income.footer')