<!DOCTYPE HTML>
<html>
<head>
<title>3drymez</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="kids rhymes" />
<script type="application/x-javascript"> 
addEventListener("load", function() { 
		setTimeout(hideURLbar, 0); }, false); 

function hideURLbar(){ window.scrollTo(0,1); 
} 

</script>
 <link href="{!! asset('css/bootstrap.css') !!}" media="all" rel="stylesheet" type="text/css" />
 <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
 <link href="{!! asset('css/font-awesome.css') !!}" media="all" rel="stylesheet" type="text/css" />
 <link href="{!! asset('css/icon-font.css') !!}" media="all" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="{!! asset('js/jquery-2.1.4.js') !!}"></script>



</head> 
    	 <!-- /w3layouts-agile -->
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
      <!-- left side start-->
		<div class="left-side sticky-left-side">
 @include('includes.sidebar')
			
		</div>
		 	 <!-- /w3layouts-agile -->
					<!-- app-->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog facebook" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="app-grids">
								<div class="app">
						<div class="col-md-5 app-left mpl">
							<h3>Mosaic mobile app on your smartphone!</h3>
							<p>Download and Avail Special Songs Videos and Audios.</p>
							<div class="app-devices">
								<h5>Gets the app from</h5>
								<a href="#"><img src="images/1.png" alt=""></a>
								<a href="#"><img src="images/2.png" alt=""></a>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-7 app-image">
							<img src="images/apps.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //app-->
 	 <!-- /w3l-agile -->
		<!-- signup -->
		<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="sign-grids">
								<div class="sign">
									<div class="sign-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
											<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
										</ul>
									</div>
									<div class="sign-right">
										<form action="#" method="post">

											<h3>Create your account </h3>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
											<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="CREATE ACCOUNT" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //signup -->
 	 <!-- /w3l-agile -->
		<!-- left side end-->
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->
			<!--notification menu start -->
				<div class="menu-right">
					<div class="profile_details">		
						  <div class="col-md-4 serch-part">
								<div id="sb-search" class="sb-search">
									<form action="#" method="post">

										<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
										<input class="sb-search-submit" type="submit" value="">
										<span class="sb-icon-search"> </span>
									</form>
								</div>
							</div>
							  <!-- search-scripts -->
									<script src="js/classie.js"></script>
									<script src="js/uisearch.js"></script>
										<script>
											new UISearch( document.getElementById( 'sb-search' ) );
										</script>
									<!-- //search-scripts -->
											 <!---->
											  <div class="col-md-4 player">
													<div class="audio-player">
														
														</div>
												<!---->
												<script type="text/javascript">
													$(function(){
													  $('#audio-player').mediaelementplayer({
														alwaysShowControls: true,
														features: ['playpause','progress','volume'],
														audioVolume: 'horizontal',
														iPadUseNativeControls: true,
														iPhoneUseNativeControls: true,
														AndroidUseNativeControls: true
													});
												 });
												</script>
												<!--audio-->
													<link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
													<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
													<!---->


												
											</div>
											<div class="col-md-4 login-pop">
												<div id="loginpop"> <a href="#" id="loginButton"><span>Login <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a><a class="top-sign" href="#" data-toggle="modal" data-target="#myModal5"><i class="fa fa-sign-in"></i></a>
														<div id="loginBox">  
												<form action="#" method="post" id="loginForm">
																	<fieldset id="body">
																		<fieldset>
																			  <label for="email">Email Address</label>
																			  <input type="text" name="email" id="email">
																		</fieldset>
																		<fieldset>
																				<label for="password">Password</label>
																				<input type="password" name="password" id="password">
																		 </fieldset>
																		<input type="submit" id="login" value="Sign in">
																		<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
																	</fieldset>
																<span><a href="#">Forgot your password?</a></span>
														 </form>
													</div>
												</div>

											</div>
										<div class="clearfix"> </div>
								</div>
							<!-------->
						</div>
					<div class="clearfix"></div>
				</div>
			<!--notification menu end -->
			<!-- //header-ends -->
 	 <!-- /w3l-agileits -->
		<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="inner-content">
				
				      <div class="music-left">
					      <!--banner-section-->
							<div class="banner-section">
								<div class="banner">
									 <div class="callbacks_container">
										<ul class="rslides callbacks callbacks1" id="slider4">
											   	<li>
														<div class="banner-img">
															 <img src="images/11.jpg" class="img-responsive" alt="">
														 </div>
														<div class="banner-info">
														              <a class="trend" href="single.html">TRENDING</a>
																	  <h3>Let Your Home</h3>
																	  <p>Album by <span>Rock star</span></p>
														 </div>

												</li>
												<li>
													<div class="banner-img">
															 <img src="images/22.jpg" class="img-responsive" alt="">
														 </div>
														<div class="banner-info">
																	  <a class="trend" href="single.html">TRENDING</a>
																	  <h3>Charis Brown feet</h3>
																	  <p>Album by <span>Rock star</span></p>
														 </div>


												</li>
												<li>
												 <div class="banner-img">
															 <img src="images/33.jpg" class="img-responsive" alt="">
														 </div>
														<div class="banner-info"> 
														             <a class="trend" href="single.html">TRENDING</a>
																	  <h3>Let Your Home</h3>
																	  <p>Album by <span>Rock star</span></p>
														 </div>

												 	 <!-- /w3layouts-agileits -->
												</li>
											</ul>
										</div>
										<!--banner-->
									<script src="js/responsiveslides.min.js"></script>
								 <script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								  </script>
								<div class="clearfix"> </div>
							</div>
						</div>	
				<!--//End-banner-->
					<!--albums-->
					<!-- pop-up-box --> 
							<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
							<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
							 <script>
									$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});
									});
							</script>		
					<!--//pop-up-box -->
						<div class="albums">
								<div class="tittle-head">
									<h3 class="tittle">New Releases <span class="new">New</span></h3>
									<a href="index.html"><h4 class="tittle">See all</h4></a>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/v1.jpg" title="allbum-name"></a>
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div id="small-dialog" class="mfp-hide">
								<iframe src="https://player.vimeo.com/video/12985622"></iframe>
								
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/v2.jpg" title="allbum-name"></a>

								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/v3.jpg" title="allbum-name"></a>

								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid last-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/v4.jpg" title="allbum-name"></a>
	
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/v5.jpg" title="allbum-name"></a>

								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div id="small-dialog" class="mfp-hide">
								<iframe src="https://player.vimeo.com/video/12985622"></iframe>
								
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/v6.jpg" title="allbum-name"></a>
		
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/v7.jpg" title="allbum-name"></a>

								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid last-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/v8.jpg" title="allbum-name"></a>
												<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
											</div>
											<div class="clearfix"> </div>
										</div>
					<!--//End-albums-->
						<!--//discover-view-->
						
						<div class="albums second">
										<div class="tittle-head">
											<h3 class="tittle">Discover <span class="new">View</span></h3>
											<a href="index.html"><h4 class="tittle two">See all</h4></a>
											<div class="clearfix"> </div>
										</div>
											<div class="col-md-3 content-grid">
												<a href="single.html"><img src="images/v11.jpg" title="allbum-name"></a>
												<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
											</div>
											<div class="col-md-3 content-grid">
													<a href="single.html"><img src="images/v22.jpg" title="allbum-name"></a>
													<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
												</div>
											<div class="col-md-3 content-grid">
													<a href="single.html"><img src="images/v33.jpg" title="allbum-name"></a>
													<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
												</div>
											<div class="col-md-3 content-grid last-grid">
													<a href="single.html"><img src="images/v44.jpg" title="allbum-name"></a>
													<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
											</div>
											<div class="col-md-3 content-grid">
													<a href="single.html"><img src="images/v55.jpg" title="allbum-name"></a>
													<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
											</div>
											<div class="col-md-3 content-grid">
												<a href="single.html"><img src="images/v66.jpg" title="allbum-name"></a>
												<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
											</div>
											<div class="col-md-3 content-grid">
													<a href="single.html"><img src="images/v11.jpg" title="allbum-name"></a>
													<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
											</div>
											<div class="col-md-3 content-grid last-grid">
													<a href="single.html"><img src="images/v22.jpg" title="allbum-name"></a>
													<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
											</div>
											<div class="clearfix"> </div>
									</div>
								<!--//discover-view-->
							</div>
							<!--//music-left-->
						    <!--/music-right-->
						   <div class="music-right">
								<!--/video-main-->
								 <div class="video-main">
									<div class="video-record-list">
										<div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
											<div class="jp-type-playlist">
												<div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;"><img id="jp_poster_0" src="video/play1.png" style="width: 480px; height: 270px; display: inline;"></div>
												<div class="jp-gui">
													
													
												</div>
											
												<div class="jp-no-solution" style="display: none;">
													<span>Update Required</span>
													To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
												</div>
											</div>
										</div>
									</div>
								</div>
						
				
				

								<!--//video-main-->
								<!--/app_store-->
									  <div class="apps">
												<h3 class="hd-tittle">Mosaic now available in</h3>
												<div class="banner-button">
													<a href="#"><img src="images/1.png" alt=""></a>
												</div>
												<div class="banner-button green-button">
													<a href="#"><img src="images/2.png" alt=""></a>
												</div>
													<div class="clearfix"></div>
										</div>
								  <!--//app_store-->
						         <!--/start-paricing-tables-->
									<div class="price-section">
											<div class="pricing-inner">
												<h3 class="hd-tittle">Upgrade your Plan</h3>
												<div class="pricing">
													<div class="price-top">
														<h3><span>$20</span></h3>
														<h4>per year</h4>
													</div>
													<div class="price-bottom">
														<ul>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Download unlimited songs</a><div class="clearfix"></div></li>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Stream songs in High Definition</a><div class="clearfix"></div></li>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">No ads unlimited Devices</a><div class="clearfix"></div></li>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Stream songs in High Definition</a><div class="clearfix"></div></li>
														</ul>
														<a href="single.html" class="price">Upgrade</a>
													</div>
												</div>
												<div class="pricing two">
													<div class="price-top">
														<h3><span>$30</span></h3>
														<h4>per year</h4>
													</div>
													<div class="price-bottom">
														<ul>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Download unlimited songs</a><div class="clearfix"></div></li>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Stream songs in High Definition</a><div class="clearfix"></div></li>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">No ads unlimited Devices</a><div class="clearfix"></div></li>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Stream songs in High Definition</a><div class="clearfix"></div></li>
														</ul>
														<a href="single.html" class="price">Upgrade</a>
													</div>
												</div>
													<div class="clearfix"></div>
												</div>
												<!--//end-pricing-tables-->
												</div>
											</div>
													 <!--//music-right-->
											<div class="clearfix"></div>
			 	 <!-- /w3l-agile-its -->
										</div>
						<!--body wrapper start-->
						
						<div class="review-slider">
								<div class="tittle-head">
									<h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
									<div class="clearfix"> </div>
								</div>
								 <ul id="flexiselDemo1">
								<li>
									<a href="single.html"><img src="images/v1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Adele21 </div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/v2.jpg" alt=""/></a>
									<div class="slide-title"><h4>Adele21</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/v3.jpg" alt=""/></a>
									<div class="slide-title"><h4>Shomlock</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/v4.jpg" alt=""/></a>
									<div class="slide-title"><h4>Stuck on a feeling</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/v5.jpg" alt=""/></a>
									<div class="slide-title"><h4>Ricky Martine </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/v6.jpg" alt=""/></a>
									<div class="slide-title"><h4>Ellie Goluding </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/v6.jpeg" alt=""/></a>
									<div class="slide-title"><h4>Fifty Shades </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
							</ul>
							<script type="text/javascript">
						$(window).load(function() {
							
						  $("#flexiselDemo1").flexisel({
								visibleItems: 5,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: false,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 2
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 3
									},
									tablet: { 
										changePoint:800,
										visibleItems: 4
									}
								}
							});
							});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
						</div>
								</div>
							<div class="clearfix"></div>
						<!--body wrapper end-->
 	 <!-- /w3l-agile -->
					</div>
			  <!--body wrapper end-->
			     <div class="footer">
				  @include('includes.footer')
				</div>
			</div>
        <!--footer section start-->
			<footer>
			   <p>&copy 2018 3DRymez | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
        <!--footer section end-->
 	 <!-- /w3l-agile -->
      <!-- main content end-->
   </section>
 
 <script type="text/javascript" src="{!! asset('js/jquery.nicescroll.js') !!}"></script>
 <script type="text/javascript" src="{!! asset('js/scripts.js') !!}"></script>
 <script type="text/javascript" src="{!! asset('js/bootstrap.js') !!}"></script>

</body>
</html>