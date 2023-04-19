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
            
            <div class="divider single-line"></div>
                    	
			<div class="container">
                <div class="row">
                    <div class="span12">
                    
                        <div class="portfolio-filter">
                    
                            <ul>
                           @if(count($sayfaurun)==0)
                                    <li><a>HERHANGİ BİR KATEGORİ EKLENMEMİŞ</a></li>
                            @endif
                            @foreach($sayfaurun as $urunkategori)
                            <?php
                                        $url=\App\Helper::dillink();
                            ?>
                                <li>
                                    <a TARGET="_blank" href="{{ URL::to(''.$url.''.$urunkategori->sayfaurl.'/'.$urunkategori->id.'') }}">{{ $urunkategori->sayfaadi }}</a>
                                </li>
                             @endforeach
                            
                            </ul>
                            
                        </div><!-- end .portfolio-filter -->
                
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            <div class="container">
            	<div class="row">
                	<div class="span12">
            
                        <div class="portfolio-grid three-cols gutter portfolio-isotope">
                            @foreach($urun as $urunler)
                            <div class="item term-2">
                	
                                <div class="portfolio-item">
                                        
                                    <div class="portfolio-item-preview">
                                        
                                        <img src="{{URL('resimler/urunler/'.$urunler->urunresim.'')}}" alt="{{ $urunler->urunadi }}">
                                        
                                        <div class="portfolio-item-overlay">
                                            
                                            <div class="portfolio-item-overlay-actions">
                                                
                                                <a class="portfolio-item-zoom magnificPopup-gallery" href="{{URL('resimler/urunler/'.$urunler->urunresim.'')}}">
                                                    <i class="ifc-zoom_in"></i>
                                                </a>
                                                
                                            </div><!-- end .portfolio-item-overlay-actions -->
                                            
                                        </div><!-- end .portfolio-item-overlay -->
                                        
                                    </div><!-- end .portfolio-item-preview -->
                                   
                                    <div class="portfolio-item-description">
                                    	
                                        <h4>
                                        	<a href="{{ URL::to(''.\App\Helper::dilduzlink().'urun/'.$urunler->id.'/'.$urunler->urunslug.'')}}">{{ $urunler->urunadi }}</a>
                                        </h4>
                                        
                                    </div><!-- end .portfolio-item-description -->
                                    
                                </div><!-- end .portfolio-item -->
                                
                            </div><!-- end .item -->
                             @endforeach

                                        
                        </div><!-- end .portfolio-grid -->
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
        <div class="container">
                <div class="row">
                    <div class="span12">

                        <div class="navigation pagination">
                            
                            <div class="portfolio-pagination text-center"> 
                            <div class="nav-links"> 
                                <a class="page-numbers current" href="<?php
                                        echo $urun->setPath('')->previousPageUrl();
                                         ?>"><span class="meta-nav screen-reader-text"> </span> <<</a>
                                         &nbsp;  &nbsp; &nbsp; &nbsp;
                                 <a class="page-numbers current" href="<?php
                                        echo $urun->setPath('')->currentPage();
                                         ?>"><span class="meta-nav screen-reader-text"> </span> <?php
                                        echo $urun->setPath('')->currentPage();
                                         ?></a> &nbsp;  &nbsp; &nbsp; &nbsp;                                    
                                <a class="page-numbers" href="<?php
                                        echo $urun->setPath('')->nextPageUrl();
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