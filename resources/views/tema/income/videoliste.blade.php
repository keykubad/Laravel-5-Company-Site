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

						<div class="headline">
                        	
                            <h2>{{ $sayfa->sayfaadi }}</h2>
                            
                            <h4>{{ $sayfa->sayfadesc }} </h4>
                            
                        </div><!-- end .headline -->
                    
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            @foreach($video as $videolar)
            <div class="container">
                <div class="row">
                	<div class="span12">
                    	
                        <div class="portfolio-item">
                        	
                            <div class="row">
                            	<div class="span6">
                                	
                                    <div class="portfolio-item">
                                    	
                                        {!! $videolar->videourl !!}
                                        
                                        <div class="portfolio-item">
                                
                                            <div class="portfolio-item">
                                                
                                   
                                                
                                            </div><!-- end .portfolio-item-overlay-actions -->
                                            
                                        </div><!-- end .portfolio-item-overlay -->
                                        
                                    </div><!-- end .portfolio-item-preview -->
                                    
                                </div><!-- end .span8 -->
                                <div class="span6">
                                	
                                    <div class="portfolio-item-description">
                                    	
                                        <h4>
                                        	<a href="{{ URL::to(''.\App\Helper::dilduzlink().'video/'.$videolar->id.'/'.$videolar->videoslug.'')}}">{{ $videolar->videoadi }}</a>
                                        </h4>
                                        
                                        <p>{!! mb_substr($videolar->videoicerik,0,200) !!}</p>
                                        
                                        <a class="btn" href="{{ URL::to(''.\App\Helper::dilduzlink().'video/'.$videolar->id.'/'.$videolar->videoslug.'')}}">{{ trans('dil.devamoku') }}</a>
                                        
                                    </div><!-- end .portfolio-item-description -->
                                    
                                </div><!-- end .span4 -->
                            </div><!-- end .row -->
                            
                        </div><!-- end .portfolio-item -->
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            @endforeach
            
            <br>
            
<div class="container">
                <div class="row">
                    <div class="span12">

                        <div class="navigation pagination">
                            
                            <div class="portfolio-pagination text-center"> 
                            <div class="nav-links"> 
                                <a class="page-numbers current" href="<?php
                                        echo $video->setPath('')->previousPageUrl();
                                         ?>"><span class="meta-nav screen-reader-text"> </span> <<</a>
                                         &nbsp;  &nbsp; &nbsp; &nbsp;
                                 <a class="page-numbers current" href="<?php
                                        echo $video->setPath('')->currentPage();
                                         ?>"><span class="meta-nav screen-reader-text"> </span> <?php
                                        echo $video->setPath('')->currentPage();
                                         ?></a> &nbsp;  &nbsp; &nbsp; &nbsp;                                    
                                <a class="page-numbers" href="<?php
                                        echo $video->setPath('')->nextPageUrl();
                                         ?>"><span class="meta-nav screen-reader-text"></span>>>
                                         </a>                   
                                    
                           
                            </div><!-- end .nav-links -->
                            </div>
                        </div><!-- end .navigation -->
                    
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container --> 
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
@include('tema.income.footer')