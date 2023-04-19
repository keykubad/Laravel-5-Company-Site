                            <!-- // Menu // -->
                            
                            <nav>
                            <ul class="sf-menu fixed" id="menu">
                            <li class="current"><a href="@if(Request::segment(1)=="en") {{ URL::to('/en')}} 
                                      @elseif(Request::segment(1)=="de") {{ URL::to('/de')}}
                                      @elseif(Request::segment(1)=="fr") {{ URL::to('/fr')}}
                                      @else
                                      {{ URL::to('/')}}
                                      @endif"> @if(Request::segment(1)=="en") Home 
                                      @elseif(Request::segment(1)=="de") Zuhause
                                      @elseif(Request::segment(1)=="fr") Maison
                                      @else
                                      Anasayfa
                                      @endif</a></li>
                            {{ App\Kategori::generate() }}
                            </ul>
                            
                            </nav>	
    
                        </div><!-- end .span9 -->
                    </div><!-- end .row -->		
				</div><!-- end .container -->
			
            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			</div><!-- end #header -->
		</div><!-- end #header-wrap -->	