@include('tema.income.header')
@include('tema.income.topbar')
@include('tema.income.menu')                            
		<div id="content">
		
@include('tema.income.slider')		
            @if(!$duyurusorgu)
            @else          
            <div class="container">
            	<div class="row">
                	<div class="span4">
                    	
                        <h1>
                            <strong>
                                <span class="text-highlight"><a href="{{URL(''.$dil.$duyurusorgu->sayfaurl.'/'.$duyurusorgu->id.'')}}">{{ $duyuru->duyurubaslik }}</a></span>
                            </strong>
                        </h1>
                        
                    </div><!-- end .span4 -->
                    <div class="span8">
                    	
                        <p>{!! mb_substr($duyuru->duyuruicerik,0,750,'windows-1254') !!}..</p>
                        
                    </div><!-- end .span8 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            @endif
            <div class="container">
            	<div class="row">
                	<div class="span12">
                    	
                        <div class="divider thick-line"></div>
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            <br>
            
         
            
 @include('tema.income.urun') 
            
            <div class="fullwidth-section custom-color-selected parallax" id="bg-1">
            	
                <div class="fullwidth-section-content">
                	
                    <div class="container">
                        <div class="row">
                            <div class="offset2 span12">
                            	
                                <p>{!! $ekalanorta->alan !!}</p>
                                
                             </div><!-- end .span5 -->
                        </div><!-- end .row -->
                    </div><!-- end .container -->
                    
                </div><!-- end .fullwidth-section-content -->
                
            </div><!-- end .fullwidth-section -->
            @if(($videomodul->durum==1) and ($video))
            <div class="container">
            	<div class="row">
                	<div class="span6">
                    	
                        <h3><span class="text-highlight">@if(!$video) @else {{ $video->videoadi }} @endif</span></h3>
                        
                        <br>
                        
                        <p>@if(!$video) @else {!!  mb_substr($video->videoicerik,0,600,'utf-8') !!} @endif</p>
                        
                        <br>
                        
                        <a class="btn btn-alt" href="{{URL(''.$dil.$videosorgu->sayfaurl.'/'.$videosorgu->id.'')}}">Tümüne bak</a>
                        
                    </div><!-- end .span6 -->
                    <div class="span6">
                        
                        <br><br>
                        
                        <p>
                        	@if(!$video) @else {!! $video->videourl !!} @endif
                        </p>
                        
                    </div><!-- end .span6 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
                @else
                @endif
            <br>
            
            <div class="divider single-line"></div>
            
            <br>
                    	

            @include('tema.income.gallery')         
            
            <div class="container">
                <div class="row">
                @foreach($referans as $referanslar)
                    <div class="span3">
                    
                        <div class="icon-box-2">
                            
                            <img alt="" src="{{ URL::to('resimler/referans/'.$referanslar->refresim.'') }}">
      
                            <div class="icon-box-content">
                            
                                <h4>
                                    <a href="single-service.html">{{ $referanslar->refbaslik }}</a>
                                </h4>
                                
                                <p>{!!  mb_substr($referanslar->reficerik,0,100,'utf-8') !!}</p>
                                
                                <a href="single-service.html">Read more</a>
                            
                            </div><!-- end .icon-box-content -->
                            
                        </div><!-- end .icon-box-2 -->
                    
                    </div><!-- end .span3 -->
                    @endforeach

                </div><!-- end .row -->
            </div><!-- end .container -->
            
            <div class="fullwidth-section custom-color-selected parallax" id="bg-2">
            	
                <div class="fullwidth-section-content">
                	
                    <div class="container">
                    	<div class="row">
                        	<div class="span12">
                            	
                                <div class="testimonial-slider">
                                	
                                    <ul class="slides">
                                    @foreach($musteriyorum as $musteriyorumlar)
                                    	<li>
                                        	
                                            <div class="testimonial">
                                            	
                                                <blockquote>
                                        {!! $musteriyorumlar !!}
                                                </blockquote>
                                                
                                            </div><!-- end .testimonial -->
                                            
                                        </li>
                                                                          
                                    @endforeach
                                    </ul>
                                    
                                </div><!-- end .testimonial-slider -->
                                
                            </div><!-- end .span12 -->
                        </div><!-- end .row -->
                    </div><!-- end .container -->
                    
                </div><!-- end .fullwidth-section-content -->
                
            </div><!-- end .fullwidth-section -->
            
@include('tema.income.haberler')
            
            <div class="fullwidth-section custom-color-selected" id="bg-3">
            	
                <div class="fullwidth-section-content">
                	
                    <div class="container">
                        <div class="row">
                            <div class="span12 text-center">
                            	
                                
                                
                                <h2> {!! $ekalan->alan !!} </h2>
                                
                            </div><!-- end .span12 -->
                        </div><!-- end .row -->
                    </div><!-- end .container -->
                    
                </div><!-- end .fullwidth-section-content -->
                
            </div><!-- end .fullwidth-section -->
    
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
@include('tema.income.footer')