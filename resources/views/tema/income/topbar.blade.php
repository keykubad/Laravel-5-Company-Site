<body class="sticky-header">
	

    
	<div id="wrap">
    
		<div id="header-wrap">
			<div id="header">
			
			<!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

				<div class="container">
                    <div class="row">
                        <div class="span3">
                        
                            <!-- // Logo // -->
                            <div id="logo">
                                <a href="@if(Request::segment(1)=='en') {{ URL::to('/en')}} 
                                @elseif(Request::segment(1)=='/de') {{ URL::to('/de')}}
                                @elseif(Request::segment(1)=='/fr') {{ URL::to('/fr')}} @else {{ URL::to('/')}} @endif"><img src="{{ URL::to('resimler/'.$genelayar->sitelogo.'') }}" alt="{{ $metatitle }}"></a>
                            </div>
                        
                        </div><!-- end .span3 -->
                        <div class="span9">
                        
                            <!-- // Mobile menu trigger // -->
                            
                            <a href="#" id="mobile-menu-trigger">
                                <i class="fa fa-bars"></i>
                            </a>
                            
                            <!-- // Custom search // -->                                        
                            
                            <div class="fullscreen" id="custom-search-form-container">
                        <form id="custom-search-form" method="post" action="{{ URL::to('arama') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" name="ara" placeHolder="Aranacak kelimeyi yazınız" />
                                    <input type="submit" id="custom-search-submit" value="">
                                </form>
                                
                            </div><!-- end #custom-search-form-container -->
                            
                            <a id="custom-search-button" href="#"><i class="ifc-search"></i></a>