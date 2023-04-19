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

                            <h3>{{ $haber->haberbaslik }}</h3>
                        
						</div><!-- end .span12 -->
					</div><!-- end .row -->
				</div><!-- end .container -->
				
			</div><!-- end #page-header -->
            
            <div class="container">    
                <div class="row">
                    <div class="span12">

						<div class="headline">
                        	
                            <h2>{{ $haber->haberbaslik }}</h2>
                            
                            <h4>{{ $haber->haberdesc }} </h4>
                            
                        </div><!-- end .headline -->
                    
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            <div class="container">
                <div class="row">
                    <div class="span8">
                    	
                        <div class="post format-standard has-post-thumbnail hentry">
                        
                        	<a href="{{ URL::to('resimler/haber/'.$haber->haberresim.'') }}" class="post-thumbnail">
								<img src="{{ URL::to('resimler/haber/'.$haber->haberresim.'') }}" alt="{{ $haber->haberbaslik }}">	
							</a>
	
							<div class="post-header">
							
								<h3 class="post-title">
									<a rel="bookmark" href="blog-post.html">{{ $haber->haberbaslik }}</a>
								</h3>
                                
                                <span class="posted-on">{{ $haber->tarih() }}</span>
                                <span class="byline">Maria Smith</span>
                                <span class="cat-links"><a href="#">Photography</a>, <a href="#">Design</a>, <a href="#">Article</a></span>
								
							</div><!-- .post-header -->                                                        
                            														
							<div class="post-content">
								
						
                                
                                <blockquote>
                                	
                           {!! $haber->habericerik !!}
                                    
                                </blockquote>
                                
                              
							</div><!-- .post-content -->
                            
						</div><!-- end .post -->
                    
                    </div><!-- end .span8 -->
                    <div class="span4">

                        
                        <div class="widget ewf_widget_latest_posts">
                            
                            <h4 class="widget-title">{{ trans('dil.sonkonu')}}</h4>
                        
                            <ul>
                            @foreach($haberson as $habersonkonular)
                                <li>
                                    
                                    <img style="width:115px;height:115px;" src="{{ URL::to('resimler/haber/'.$habersonkonular->haberresim.'')}}" alt="{{ $habersonkonular->haberbaslik}}"> 
                                    
                                    <a class="title" href="{{ URL::to(''.\App\Helper::dilduzlink().'haber/'.$habersonkonular->id.'/'.$habersonkonular->haberslug.'') }}">{{ $habersonkonular->haberbaslik}}</a><br>                                    
                                    <p class="post-date">{{ $habersonkonular->tarih() }}</p> 
                                    <a class="red-more" href="{{ URL::to(''.\App\Helper::dilduzlink().'haber/'.$habersonkonular->id.'/'.$habersonkonular->haberslug.'') }}"><em>{{ trans('dil.devamoku')}}</em></a>
                                    
                                </li>
                              @endforeach                                                                    
                            </ul>
                            
                        </div><!-- end .ewf_widget_latest_posts -->
                        
                        
                    </div><!-- end .span4 -->
                </div><!-- end .row -->
           </div><!-- end .container -->                                  
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
@include('tema.income.footer')