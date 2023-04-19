            <div class="container">    
                <div class="row">
                    <div class="span12">

						<div class="headline">
                        	
                            <h2>Haberler</h2>
                            
                            <h4>Firmamıza ait son gelişmeler </h4>
                            
                        </div><!-- end .headline -->
                    
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            <div class="container">
                <div class="row">

                @foreach($haberler as $haber)
                    <div class="span4">
                    
                        <div class="post format-standard has-post-thumbnail hentry">
                        
                        	<a href="blog-post.html" class="post-thumbnail">
								<img src="{{ URL::to('resimler/haber/'.$haber->haberresim.'') }}" alt="{{ mb_substr($haber->haberbaslik,0,25) }}">	
							</a>
	
							<div class="post-header">
							
								<h3 class="post-title">
									<a rel="bookmark" href="{{ URL::to(''.\App\Helper::dilduzlink().'haber/'.$haber->id.'/'.$haber->haberslug.'') }}">{{ mb_substr($haber->haberbaslik,0,150) }}</a>
								</h3>
                                
                                <span class="posted-on">August 07, 2015</span>
                                <span class="byline">Maria Smith</span>
								
							</div><!-- .post-header -->                                                        
                            														
							<div class="post-content">
								
								<p>{!! mb_substr($haber->habericerik,0,150) !!}</p> 
								
								<p><a class="more-link btn" href="{{ URL::to(''.\App\Helper::dilduzlink().'haber/'.$haber->id.'/'.$haber->haberslug.'') }}">{{ trans('dil.devamoku') }}</a></p>
							
							</div><!-- .post-content -->
                            
						</div><!-- end .post -->
                        
                    </div><!-- end .span4 -->
                    @endforeach
                   
                </div><!-- end .row -->
            </div><!-- end .container -->