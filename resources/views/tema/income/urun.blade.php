            <div class="info-box info-box-bg-left">
            	
                <div class="info-box-img" style="background-image:url({{ URL::to('resimler/urunler/'.$urun->urunresim.'') }});">
                	
                    <img src="{{ URL::to('resimler/urunler/'.$urun->urunresim.'') }}" alt="">
                    
                </div><!-- end .info-box-img -->
                
                <div class="container">
                	<div class="row">
                    	<div class="offset6 span6">
                        	
                            <h2 class="text-highlight">{{ $urun->urunadi }}</h2>
                            
                            <p>{!! mb_substr($urun->urunicerik,0,1024) !!}</p>
                            
                            <br>

							<a class="btn" href="{{URL(''.\App\Helper::dilduzlink().'urun/'.$urun->id.'/'.$urun->urunslug.'')}}">{{ trans('dil.tumincele')}}</a>
                            
                        </div><!-- end .span6 -->
                    </div><!-- end .row -->
                </div><!-- end .container -->
                
            </div><!-- end .info-box -->