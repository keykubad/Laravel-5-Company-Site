		<div id="footer-top">
            
		<!-- /// FOOTER-TOP     ///////////////////////////////////////////////////////////////////////////////////////////////// -->	
		
			<div class="container">
                <div class="row">
                    <div class="span12" id="footer-top-widget-area-1">
                        
                        <div class="widget ewf_widget_contact_info">
                            
                            <ul>                                
                                <li>
                                	<i class="fa fa-phone"></i>
                                    {{ $meta->sitetel }}
                                </li>
                                <li>
                                	<i class="fa fa-map-marker"></i>
                                {{ $meta->sitetel }}
								</li>
                                <li>
                                	<i class="fa fa-envelope-o"></i>
                                    <a href="mailto:{{ $user->email }}">{{ $user->email }}</a><br>
                                </li>
                            </ul>
                            
                        </div><!-- end .ewf_widget_contact_info -->
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
           </div><!-- end .container -->
		
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->    
		
		</div><!-- end #footer-top -->
		<div id="footer">
		
		<!-- /// FOOTER     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div class="container">
                <div class="row">
                    <div class="span4" id="footer-widget-area-1">
                        
                        <div class="widget widget_text">
                                    
                            <h5 class="widget-title">{{ $footer->siteadi}}</h5>
                        
                            <div class="textwidget">
                                <p><small>{{ date('Y') }} {{ $footer->sitedesc }} </small></p>
                            </div><!-- end .textwidget -->
                            
                        </div><!-- end .widget_text -->
                                                
                    </div><!-- end .span4 -->
                    <div class="offset2 span2" id="footer-widget-area-2">
                        
                        <div class="widget widget_pages">
                            
                            <h5 class="widget-title"></h5>
                        
                            <ul>
                                               
                            </ul>
                            
                        </div><!-- end .widget_pages -->
                        
                    </div><!-- end .span2 -->
                                                <div class="span2" id="footer-widget-area-3">
                        
                        <div class="widget widget_pages">
                            
                            <h5 class="widget-title">Bilgilerimiz</h5>
                        
                            <ul>
                                <li class="page_item"><a>{{$meta->siteadres}}</a></li>
                                <li class="page_item"><a>{{ $user->email }}</a></li>
                                <li class="page_item"><a>{{ $meta->sitetel }}</a></li>                              
                            </ul>
                            
                        </div><!-- end .widget_pages -->
                        
                    </div><!-- end .span2 -->
                    <div class="span2" id="footer-widget-area-4">
                        
                        <div class="widget widget_pages">
                            
                            <h5 class="widget-title">Menüler</h5>
                        
                            <ul>
                            @foreach($menucek as $menu)
                                <li class="page_item"><a href="{{ URL::to(''.\App\Helper::dillink().$menu->sayfaurl.'/'.$menu->id.'') }}">{{ $menu->sayfaadi }}</a></li>
                                @endforeach                             
                            </ul>
                            
                        </div><!-- end .widget_pages -->
                        
                    </div><!-- end .span2 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #footer -->
		<div id="footer-bottom">
            
		<!-- /// FOOTER-BOTTOM     ////////////////////////////////////////////////////////////////////////////////////////////// -->	
		
			<div class="container">
                <div class="row">
                    <div class="span8" id="footer-bottom-widget-area-1">
                        
                        <div class="widget widget_pages">
                        
                            <ul>
                            @foreach($menucek as $menu)
                                <li class="page_item"><a href="{{ URL::to(''.\App\Helper::dillink().$menu->sayfaurl.'/'.$menu->id.'') }}">{{ $menu->sayfaadi }}</a></li>
                                @endforeach                               
                            </ul>
                            
                        </div><!-- end .widget_pages -->
                        
                    </div><!-- end .span8 -->
                    <div class="span4" id="footer-bottom-widget-area-2">
                        
                        <div class="widget ewf_widget_social_media"> 
                            
                            <div class="fixed">
                               @if(count(@$genelayarsosyal[0])==1) 
                                <a href="{{ $genelayarsosyal[0] }}" class="facebook-icon social-icon">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                @endif
                                @if(count(@$genelayarsosyal[1])==1)
                                <a href="{{ $genelayarsosyal[1] }}" class="twitter-icon social-icon">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                @endif
                                @if(count(@$genelayarsosyal[2])==1)
                                <a href="{{ $genelayarsosyal[2] }}" class="googleplus-icon social-icon">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                @endif
                                @if(count(@$genelayarsosyal[3])==1)
                                <a href="{{ $genelayarsosyal[3] }}" class="instagram-icon social-icon">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                @endif
                            </div>
                        
                        </div><!-- end .ewf_widget_social_media -->
                        
                    </div><!-- end .span4 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
		
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->    
	
		</div><!-- end #footer-bottom -->
		
	</div><!-- end #wrap -->
    
    <a id="back-to-top" href="#">
    	<i class="ifc-up4"></i>
    </a>

    <!-- /// jQuery ////////  -->
	<script src="{{ URL::to('tema/income/assets/vendors/jquery-2.1.4.min.js') }}"></script>

    <!-- /// ViewPort ////////  -->
	<script src="{{ URL::to('tema/income/assets/vendors/viewport/jquery.viewport.js') }}"></script>
    
    <!-- /// Easing ////////  -->
	<script src="{{ URL::to('tema/income/assets/vendors/easing/jquery.easing.1.3.js') }}"></script>

    <!-- /// SimplePlaceholder ////////  -->
	<script src="{{ URL::to('tema/income/assets/vendors/simpleplaceholder/jquery.simpleplaceholder.js') }}"></script>

    <!-- /// Fitvids ////////  -->
    <script src="{{ URL::to('tema/income/assets/vendors/fitvids/jquery.fitvids.js') }}"></script>
    
    <!-- /// Animations ////////  -->
    <script src="{{ URL::to('tema/income/assets/vendors/animations/animate.js') }}"></script>
     
    <!-- /// Superfish Menu ////////  -->
	<script src="{{ URL::to('tema/income/assets/vendors/superfish/hoverIntent.js') }}"></script>
    <script src="{{ URL::to('tema/income/assets/vendors/superfish/superfish.js') }}"></script>
    
    <!-- /// Revolution Slider ////////  -->
    <script src="{{ URL::to('tema/income/assets/vendors/revolutionslider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ URL::to('tema/income/assets/vendors/revolutionslider/js/jquery.themepunch.revolution.min.js') }}"></script>
    
    <!-- /// bxSlider ////////  -->
	<script src="{{ URL::to('tema/income/assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    
   	<!-- /// Magnific Popup ////////  -->
	<script src="{{ URL::to('tema/income/assets/vendors/magnificpopup/jquery.magnific-popup.min.js') }}"></script>
    
    <!-- /// Isotope ////////  -->
	<script src="{{ URL::to('tema/income/assets/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ URL::to('tema/income/assets/vendors/isotope/isotope.pkgd.min.js') }}"></script>
    
    <!-- /// Parallax ////////  -->
	<script src="{{ URL::to('tema/income/assets/vendors/parallax/jquery.parallax.min.js') }}"></script>

	<!-- /// EasyPieChart ////////  -->
	<script src="{{ URL::to('tema/income/assets/vendors/easypiechart/jquery.easypiechart.min.js') }}"></script>
    
	<!-- /// YTPlayer ////////  -->
	<script src="{{ URL::to('tema/income/assets/vendors/itplayer/jquery.mb.YTPlayer.js') }}"></script>
	
    <!-- /// Easy Tabs ////////  -->
    <script src="{{ URL::to('tema/income/assets/vendors/easytabs/jquery.easytabs.min.js') }}"></script>	
    
    <!-- /// Form validate ////////  -->
    <script src="{{ URL::to('tema/income/assets/vendors/jqueryvalidate/jquery.validate.min.js') }}"></script>
    
	<!-- /// Form submit ////////  -->
    <script src="{{ URL::to('tema/income/assets/vendors/jqueryform/jquery.form.min.js') }}"></script>
    
    <!-- /// gMap ////////  -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="{{ URL::to('tema/income/assets/vendors/gmap/jquery.gmap.min.js') }}"></script>

	<!-- /// Twitter ////////  -->
	<script src="{{ URL::to('tema/income/assets/vendors/twitter/twitterfetcher.js') }}"></script>
	    @if(Session::has('mesaj'))
        <script type="text/javascript">
        swal({   title: "{{ Session::get('title') }}",   text: "{{ Session::get('mesaj') }}",   type: "{{ Session::get('type') }}",   confirmButtonText: "Tamam" });
        </script>
        @endif
	<!-- /// Custom JS ////////  -->
	<script src="{{ URL::to('tema/income/assets/js/main.js') }}"></script>	



</body>

</html>