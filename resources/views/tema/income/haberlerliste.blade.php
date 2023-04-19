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
            
            <div class="container">
                <div class="row">
                    <div class="span8">
                    	@foreach($haber as $haberler)
                        <div class="post format-standard has-post-thumbnail hentry">
                        
                        	<a href="{{ URL::to(''.\App\Helper::dilduzlink().'haber/'.$haberler->id.'/'.$haberler->haberslug.'') }}" class="post-thumbnail">
								<img src="{{ URL::to('resimler/haber/'.$haberler->haberresim.'')}}" alt="{{ $haberler->haberbaslik}}">	
							</a>
	
							<div class="post-header">
							
								<h3 class="post-title">
									<a rel="bookmark" href="{{ URL::to(''.\App\Helper::dilduzlink().'haber/'.$haberler->id.'/'.$haberler->haberslug.'') }}">{{ $haberler->haberbaslik}}</a>
								</h3>
                                
                                <span class="posted-on">{{ $haberler->tarih() }}</span>
                               
                                <span class="cat-links"><a href="{{ URL::to(''.\App\Helper::dilduzlink().'haber/'.$haberler->id.'/'.$haberler->haberslug.'') }}">{{ $haberler->haberkeyw}}</a></span>
								
							</div><!-- .post-header -->                                                        
                            														
							<div class="post-content">
								
								<p>{!! mb_substr($haberler->habericerik,0,150) !!}</p> 
								
								<p><a class="more-link btn" href="{{ URL::to(''.\App\Helper::dilduzlink().'haber/'.$haberler->id.'/'.$haberler->haberslug.'') }}">{{ trans('dil.devamoku')}}</a></p>
							
							</div><!-- .post-content -->
                            
						</div><!-- end .post -->
                        @endforeach 
                     
                    
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
           
           <div class="container">
                <div class="row">
                    <div class="span12">

                        <div class="navigation pagination">
							
                            
                            <div class="nav-links"> 
                                <a class="page-numbers current" href="<?php
                                        echo $haber->setPath('')->previousPageUrl();
                                         ?>"><span class="meta-nav screen-reader-text"> </span> <<</a>
                                         &nbsp;  &nbsp; &nbsp; &nbsp;
                                 <a class="page-numbers current" href="<?php
                                        echo $haber->setPath('')->currentPage();
                                         ?>"><span class="meta-nav screen-reader-text"> </span> <?php
                                        echo $haber->setPath('')->currentPage();
                                         ?></a> &nbsp;  &nbsp; &nbsp; &nbsp;                                    
                                <a class="page-numbers" href="<?php
                                        echo $haber->setPath('')->nextPageUrl();
                                         ?>"><span class="meta-nav screen-reader-text"></span>>>
                                         </a>					
								    
                           
							</div><!-- end .nav-links -->
							
						</div><!-- end .navigation -->
                    
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->                                 
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
@include('tema.income.footer')