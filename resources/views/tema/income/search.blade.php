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

                            <h3>{{ Input::get('ara') }}</h3>
                        
						</div><!-- end .span12 -->
					</div><!-- end .row -->
				</div><!-- end .container -->
				
			</div><!-- end #page-header -->
            
            <div class="container">    
                <div class="row">
                    <div class="span12">

						<div class="headline">
                        	
                            <h2>{{ Input::get('ara') }}</h2>
                            

                            
                        </div><!-- end .headline -->
                    
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            <div class="container">
                <div class="row">
                @foreach($arama as $ara)
				<?php 
					$aramaa 		=explode('-',$ara->created_at);
					$aramatarih		=explode(' ',$aramaa[2]);
				?>
                    <div class="span3">
                    
                        <div class="post format-standard has-post-thumbnail hentry">
                        
	
							<div class="post-header">
							
								<h3 class="post-title">
									<a rel="bookmark" href="{{ URL::to('sayfa/') }}
														@if(Request::segment(1)=="en")
														en
														@elseif(Request::segment(1)=="de")
														de
														@elseif(Request::segment(1)=="fr")
														fr
														@endif
														/{{ $ara->sayfaadi }}">{{ $ara->sayfaadi }}</a>
								</h3>
                                
                                <span class="posted-on">{{ $aramatarih[0] }} / {{ $aramaa[1] }}</span>
                             
								
							</div><!-- .post-header -->                                                        
                            														
							<div class="post-content">
								
								<p>{!! mb_substr($ara->sayfadesc,0,45,'UTF8') !!}</p> 
								
								<p><a class="more-link btn" href="{{ URL::to('sayfa/') }}
														@if(Request::segment(1)=="en")
														en
														@elseif(Request::segment(1)=="de")
														de
														@elseif(Request::segment(1)=="fr")
														fr
														@endif
														/{{ $ara->sayfaadi }}">{{ trans('dil.devamoku') }}</a></p>
							
							</div><!-- .post-content -->
                            
						</div><!-- end .post -->
                        
                    </div><!-- end .span4 -->
                    @endforeach

                </div><!-- end .row -->
            </div><!-- end .container -->     
            
            <div class="container">
                <div class="row">
                    <div class="span12">

                        <div class="navigation pagination">
							
							<div class="nav-links">								
								<a class="page-numbers current" href="<?php
                                        echo $arama->setPath('')->previousPageUrl();
                                         ?>"><span class="meta-nav screen-reader-text"> </span> <<</a>
                                         &nbsp;  &nbsp; &nbsp; &nbsp;
                                 <a class="page-numbers current" href="<?php
                                        echo $arama->setPath('')->currentPage();
                                         ?>"><span class="meta-nav screen-reader-text"> </span> <?php
                                        echo $arama->setPath('')->currentPage();
                                         ?></a> &nbsp;  &nbsp; &nbsp; &nbsp;                                    
                                <a class="page-numbers" href="<?php
                                        echo $arama->setPath('')->nextPageUrl();
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