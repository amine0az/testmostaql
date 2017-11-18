@extends('layouts.app')
@section('pageTitle', 'Contact')
@section('content')
<div class="padd-vertical-45">
			    	<div class="container">
			    			<script type="text/javascript" src="http://maps.google.com/maps/api/js?key={{setting('google-map.apikeyk')}}&sensor=false"></script>
							<div id="map_canvas" style="height: 450px; width: 100%;">
						    <script type="text/javascript"> 
						    	function init_map(){
						    		var myOptions = {zoom:14,center:new google.maps.LatLng({{setting('google-map.lat')}},{{setting('google-map.long')}}),
						    		mapTypeId: google.maps.MapTypeId.ROADMAP};
						    		map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
						    		marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.157530, -8.614916)});
						    		infowindow = new google.maps.InfoWindow({content:"<div class='noScroll'>name of address</div>" });
						    		google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
						    		infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
						    </script>
			    		</div>
		    	     </div>
			</div>

            <div class="padd-top-50">
					<div class="container">
						<div class="row">
			    			<div class="cell-7 contact-form fx" data-animate="fadeInLeft" id="contact">
			    				<h3 class="block-head">Get in Touch</h3>
			    				<mark id="message"></mark>
                                @if (session('status'))
                                    <div class="box success-box fx" data-animate="fadeInRight">
                                        <p>Your message has been send successfully</p>
                                    </div>
                                @endif
			    				<form class="form-signin cform" method="post" action="contact" id="cform" autocomplete="on">
                                    {{ csrf_field() }}
			    					<div class="form-input">
				    					<label>First name<span class="red">*</span></label>
				    					<input type="text" required="required" name="name" id="name">
			    					</div>
			    					<div class="form-input">
			    						<label>Email<span class="red">*</span></label>
			    						<input name="email" type="email" id="email" required="required">
			    					</div>
			    					<div class="form-input">
			    						<label>Phone<span class="red">*</span></label>
			    						<input name="phone" type="text" id="phone" required="required">			    						
			    					</div>
			    					
                                    <div class="form-input">
                                        <label>Country<span class="red">*</span></label>
                                        @include('layouts.countries')
                                    </div>
			    					<div class="form-input">
			    						<label>Message<span class="red">*</span></label>
			    						<textarea required="required" name="message" cols="40" rows="7" id="messageTxt" spellcheck="true"></textarea>
			    					</div>
			    					<div class="form-input">
			    						<input type="submit" class="btn btn-large main-bg" value="Submit">&nbsp;&nbsp;<input type="reset" class="btn btn-large" value="Reset" id="reset">
			    					</div>
			    				</form>
			    			</div>
						</div>
					</div>
				</div>
@endsection