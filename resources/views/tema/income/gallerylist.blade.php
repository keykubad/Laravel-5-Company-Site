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
                    <div class="span12">
            
                        <div class="portfolio-grid three-cols gutter">
                        @foreach($galeri as $galeriler)
                            
                            <div class="item">
                                
                                <div class="portfolio-item">
                                        
                                    <div class="portfolio-item-preview">
                                        
                                        <img src="{{ URL::to('resimler/galeri/'.$galeriler->galeriresim.'') }}" alt="{{ $galeriler->galeribaslik }}">
                                        
                                        <div class="portfolio-item-overlay">
                                            
                                            <div class="portfolio-item-overlay-actions">
                                                
                                                <a class="portfolio-item-zoom magnificPopup-gallery" href="{{ URL::to('resimler/galeri/'.$galeriler->galeriresim.'') }}">
                                                    <i class="ifc-zoom_in"></i>
                                                </a>
                                                
                                            </div><!-- end .portfolio-item-overlay-actions -->
                                            
                                        </div><!-- end .portfolio-item-overlay -->
                                        
                                    </div><!-- end .portfolio-item-preview -->
                                    
                                    <div class="portfolio-item-description">
                                        
                                        <h4>
                                            <a href="{{ URL::to(''.\App\Helper::dilduzlink().'galeri/'.$galeriler->id.'/'.$galeriler->galerislug.'')}}">{{ $galeriler->galeribaslik }}</a>
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
                                        echo $galeri->setPath('')->previousPageUrl();
                                         ?>"><span class="meta-nav screen-reader-text"> </span> <<</a>
                                         &nbsp;  &nbsp; &nbsp; &nbsp;
                                 <a class="page-numbers current" href="<?php
                                        echo $galeri->setPath('')->currentPage();
                                         ?>"><span class="meta-nav screen-reader-text"> </span> <?php
                                        echo $galeri->setPath('')->currentPage();
                                         ?></a> &nbsp;  &nbsp; &nbsp; &nbsp;                                    
                                <a class="page-numbers" href="<?php
                                        echo $galeri->setPath('')->nextPageUrl();
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