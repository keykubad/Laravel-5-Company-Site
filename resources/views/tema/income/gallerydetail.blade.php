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

                            <h3>{{ $galeri->galeribaslik}}</h3>
                        
						</div><!-- end .span12 -->
					</div><!-- end .row -->
				</div><!-- end .container -->
				
			</div><!-- end #page-header -->
            
            <div class="container">    
                <div class="row">
                    <div class="span12">

						<div class="headline">
                        	
                            <h2>{{ $galeri->galeribaslik}}</h2>
                            
                            <h4>{{ $galeri->galeridesc}} </h4>
                            
                        </div><!-- end .headline -->
                    
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            <div class="container">    
                <div class="row">
                    <div class="span12">

						<div class="images-slider">
                        	
                            <ul class="slides">                            	
                                <li>
                                	<img src="{{ URL::to('resimler/galeri/'.$galeri->galeriresim.'') }}" alt="{{ $galeri->galeribaslik}}">
                                </li>
                                @foreach($galeriresimleri as $galeriresim)
                                <li>
                                	<img src="{{ URL::to('resimler/galeri/'.$galeriresim->galeriresimler.'') }}" alt="{{ $galeri->galeribaslik}}">
                                </li>
                                @endforeach
                            </ul>
                            
                        </div><!-- end .images-slider -->
                    
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            <div class="portfolio-grid four-cols gutter portfolio-isotope">
                
                <div class="item term-2">
        
                    <div class="portfolio-item">
                            
                        <div class="portfolio-item-preview">
                            
                            <img src="{{ URL::to('resimler/galeri/'.$galeri->galeriresim.'') }}" alt="">
                            
                            <div class="portfolio-item-overlay">
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="{{ URL::to('resimler/galeri/'.$galeri->galeriresim.'') }}">
                                        <i class="ifc-zoom_in"></i>
                                    </a>
                                    
                                </div><!-- end .portfolio-item-overlay-actions -->
                                
                            </div><!-- end .portfolio-item-overlay -->
                            
                        </div><!-- end .portfolio-item-preview -->
                        
                    </div><!-- end .portfolio-item -->
                    
                </div><!-- end .item -->
@foreach($galeriresimleri as $galeriresim)
            <div class="item term-2">
        
                    <div class="portfolio-item">
                            
                        <div class="portfolio-item-preview">
                            
                            <img src="{{ URL::to('resimler/galeri/'.$galeriresim->galeriresimler.'') }}" alt="">
                            
                            <div class="portfolio-item-overlay">
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="{{ URL::to('resimler/galeri/'.$galeriresim->galeriresimler.'') }}">
                                        <i class="ifc-zoom_in"></i>
                                    </a>
                                    
                                </div><!-- end .portfolio-item-overlay-actions -->
                                
                            </div><!-- end .portfolio-item-overlay -->
                            
                        </div><!-- end .portfolio-item-preview -->
                        
                    </div><!-- end .portfolio-item -->
                    
                </div><!-- end .item -->
 @endforeach
            </div><!-- end .portfolio-grid -->
            
        <br>
            
            <div class="container">
            	<div class="row">
                	<div class="span12">
                    	
                        <p>{!! $galeri->galeriicerik!!}</p>
                        
                     
                            
                            </div><!-- end .span12 -->
                        </div><!-- end .row -->
                    </div><!-- end .container -->
                    
                </div><!-- end .fullwidth-section-content -->
                
            </div><!-- end .fullwidth-section -->
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
@include('tema.income.footer')