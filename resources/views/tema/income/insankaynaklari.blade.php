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
  		<form method="post" action="{{ URL::to('ikgonder') }}" id="reg_form" enctype="multipart/form-data"> 
  		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div id="formstatus"></div>
                                <p>
                                    <input class="span12" type="text" id="name" name="adsoyad" value="" placeholder="{{ trans('dil.adunvan') }}">
                                </p>
                                <p>
                                {{ trans('dil.cinsiyet') }}
                            <label>
									<input type="radio" name="cinsiyet" value="Erkek" /> {{ trans('dil.erkek') }}
								</label>
								
								<label>
									<input type="radio" name="cinsiyet" value="Bayan" /> {{ trans('dil.bayan') }}
								</label>
                                </p>
                                <p>
                                   <input class="span12" type="text" id="email" name="dogumtarih" value="" placeholder="{{ trans('dil.dogumtarih') }}"> 
                                </p>
                                  <p>
                                   <input class="span12" type="text" id="email" name="dogumyer" value="" placeholder="{{ trans('dil.dogumyer') }}"> 
                                </p>
                                 <p>
                                   <input class="span12" type="text" id="email" name="email" value="" placeholder="{{ trans('dil.email') }}"> 
                                </p>
                         		 <p>
                                   <input class="span12" type="text" id="email" name="tel" value="" placeholder="{{ trans('dil.tel') }}"> 
                                </p>
                                <p>
                                    <textarea class="span12" id="message" name="tecrube" rows="7" cols="25" placeholder="{{ trans('dil.tecrube') }}"></textarea>
                                </p>
                                 <p>
                                    <textarea class="span12" id="message" name="referans" rows="7" cols="25" placeholder="{{ trans('dil.referans') }}"></textarea>
                                </p>
                                 <p>
                               <label for="file-input">{{ trans('dil.ozgecmis') }}</label>
								<input type="file" name="ozgecmis" required>
								</p>
							 <p>
                                    <textarea class="span12" id="message" name="mesaj" rows="7" cols="25" placeholder="{{ trans('dil.mesaj') }}"></textarea>
                                </p>
                                <p class="last">
                                    <input id="submit" type="submit" value="{{ trans('dil.gonder') }}" >
                                    <input type="reset" value="{{ trans('dil.temizle') }}">
                                </p>
                            </fieldset>
                        </form><!-- end #contact-form -->
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
          
            <br><br>			            
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
@include('tema.income.footer')