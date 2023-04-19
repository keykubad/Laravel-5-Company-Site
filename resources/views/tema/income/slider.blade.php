<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div class="fullwidthbanner-container slider-revolution">
				<div class="fullwidthbanner">
					<ul>					   						                        
						@foreach($slider as $sliderlar)
                        <?php $yazi         =explode('-',$sliderlar->slideryazi); ?>
                        <li data-transition="fade">
						
                            <img src="{{ URL::to('resimler/slider/'.$sliderlar->sliderresim.'') }}" alt="{{ $yazi[1] }}">
                            
                            <div class="caption title sft"
                                 data-x="305"
                                 data-y="175"
                                 data-speed="600"
                                 data-start="1000"
                                 data-easing="easeOutExpo">
                                {{ $yazi[0] }}
                            </div>
                            
                            <div class="caption text text-center sft"
                                 data-x="270"
                                 data-y="260"
                                 data-speed="600"
                                 data-start="1400"
                                 data-easing="easeOutExpo">
                                     
                            </div>
                            @if($yazi[1] or $yazi[2])
                            <div class="caption sfb"
                                 data-x="500"
                                 data-y="380"
                                 data-speed="600"
                                 data-start="1800"
                                 data-easing="easeOutExpo">
                                 <a class="btn" href="{{ $yazi[2] }}">{{ $yazi[1] }}</a>
                            </div>
                            @endif

                            
                    	</li>
                        @endforeach
                    </ul>
                    
                    <div class="tp-bannertimer tp-bottom"></div>
                    
                </div><!-- end .fullwidthbanner -->
            </div><!-- end .fullwidthbanner-container -->