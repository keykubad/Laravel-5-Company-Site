		            <div class="container">
                <div class="row">
                    <div class="span12">

                        <div class="headline">
                            
                            <h2>{{ trans('dil.galeri')}}</h2>
                            
                            <h4>@if($galeriyazi) {!! mb_substr($galeriyazi->galeriicerik,0,75) !!} @else @endif </h4>
                            
                        </div><!-- end .headline -->
                
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            <div class="portfolio-grid four-cols portfolio-isotope">
            @foreach($galeri as $galeriler)
            	
                <div class="item term-2">
                	
                    <div class="portfolio-item">
                        	
                        <div class="portfolio-item-preview">
                            
                            <img src="{{ URL::to('resimler/galeri/'.$galeriler->galeriresim.'') }}" alt="">
                            
                            <div class="portfolio-item-overlay">
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="{{ URL::to('resimler/galeri/'.$galeriler->galeriresim.'') }}">
                                        <i class="ifc-zoom_in"></i>
                                    </a>
                                    
                                </div><!-- end .portfolio-item-overlay-actions -->
                                
                            </div><!-- end .portfolio-item-overlay -->
                            
                        </div><!-- end .portfolio-item-preview -->
                        
                    </div><!-- end .portfolio-item -->
                    
                </div><!-- end .item -->
                
            @endforeach
                
            </div><!-- end .portfolio-grid -->