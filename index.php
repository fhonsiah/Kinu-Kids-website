<?php

    require_once('bin/connector.php');


    $query = "SELECT * FROM events ORDER BY id";
    $result = mysql_query($query) or die(mysql_error());

?>

<html>

<head>
	<title> KinuKids </title>
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
	<link rel="stylesheet" type="text/css" href="style/bs/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="style/tabs.css" />
	<link rel="stylesheet" type="text/css" href="style/tabstyles.css" />
	<link rel="stylesheet" type="text/css" href="style/font-awesome.min.css" />
</head>

	<body>

		<div class="container" id="mainDiv">
			<!-- the top layer -->
			<div class="row" id="qs">
				<!-- <div id="qnDiv" class="qn-div col-md-3"></div>
				<div class="score col-md-3 pull-right" id="score"></div> -->
			<section id="section-iconfall-3">
				<div style="border: none" class="tabs tabs-style-circlefill">
					<nav style="border: none">
						<ul class="qna-ul">
							<li><a href="#" class="icon-top1 fa pull-left"> <span> Question </span> <br> <span id="qnDiv"> Question </span></a></li>
							<li><a href="#" class="icon-top2 icon-plane pull-right"><span>High Score</span> <br> <span id="highScore"> 12009 </span> </a></li>
						</ul>
					</nav>

					<div style="border: none" class="content-wrap">
						<section id="section-circlefill-1"></section>
						<section id="section-circlefill-2"></section>
						<section id="section-circlefill-3"></section>
						<section id="section-circlefill-4"></section>
						<section id="section-circlefill-5"></section>
					</div><!-- /content -->

				</div><!-- /tabs -->
			</section>
			</div>
			<!--the main  body-->
			<div class="row" id="gameCon">

					<!-- <div style="position: absolute; width: 40px; height: 40px; top: 16%; left:48%; z-index:10000; background: red;" class="bblAnimate ascDesc"></div> -->
					<!-- game part -->
					<div class="hero start-game">
			            <div class="container">
			              <div class="row">
			                <div id="gameDiv" class="col-md-6 col-md-offset-3 game-margin-top text-center animated">
			                  <h1 class="animated fadeInDown">Bubble <span>game</span></h1>
			                  <span class="play-game fa fa-play" onclick="startGame()"></span>
			                </div>
			              </div>
			            </div>
			        </div>

				<div class="push-down">
		        		<section class="swag text-center">
				          <div class="container">
				            <div class="row">
				              <div class="col-md-8 events-div col-md-offset-2">
				                <h1>Events<span> <em>Schedule</em></span></h1>
				                <a href="#section-iconfall-4" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
				              </div>
				            </div>
				          </div>
				        </section>

				        <section class="portfolio text-center section-padding" id="section-iconfall-4">
				          <div class="container">
				            <div class="row">
				              <div id="portfolioSlider">
				        

				                <!-- events -->
				                <div class="container-event">
				                    <div class="main">
				                      <ul class="cbp_tmtimeline">
				                      	<?php
				                      		if(mysql_num_rows($result) > 0){
                        						while ($row  = mysql_fetch_object($result)) {
				                      	?>
				                        <li>
				                          <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span style="font-size: 23px;"><?php echo $row->date ?></span> <span style="font-size: 28px;"><?php echo $row->time?></span></time>
				                          <div class="cbp_tmicon cbp_tmicon-phone"></div>
				                          <div class="cbp_tmlabel">
				                                <ul class="ev_header">
				                                  <li>
				                                    <h2><?php echo $row->event_name ?></h2>
				                                  </li>
				                                  <li class="pull-right" style="float:right; cursor:pointer;">
				                                    <span class="glyphicon glyphicon-pencil" ></span> <span>Edit</span>
				                                  </li>
				                                </ul>
				                            <div class="ev_container">
				                              <div class="banner fa fa-calendar-o"> 
				                                <!-- <div>
				                                  <img height="400px" width="400px" src="img/cyberBullying.png"/> 
				                                </div> -->
				                              </div>
				                              <div class="event">
				                                <p style="margin-left : 20px; font-size: 13px; font-weight:bold; text-overflow: ellipsis-word; max-height: 110px; overflow: hidden;"><?php echo $row->description?></p>
				                                <ul class="ev_footer">
				                                  <li>
				                                    <span class="fa fa-map-marker location"></span> <span><?php echo $row->venue?></span>
				                                  </li>
				                                  <li>
				                                    <span class="fa fa-clock-o"></span> <span>12:30pm</span>
				                                  </li>
				                                  <li>
				                                    <span></span> <span>Today</span>
				                                  </li>
				                                  
				                                </ul>
				                              </div>
				                            </div>
				                                <ul class="ev_gallery">
				                                  <li class="ev_gal">
				                                    <span class="fa fa-file-image-o pic_art"></span> <span>Gallery</span>
				                                  </li>
				                                  <li>
				                                    <span></span> <img height="33px" width="40px" src="img/cyberBullying.png"/>  <span></span>
				                                  </li>
				                                  <li>
				                                    <span></span> <img height="33px" width="40px" src="img/cyberBullying.png"/>  <span></span>
				                                  </li>
				                                  <li>
				                                    <span></span> <img height="33px" width="40px" src="img/cyberBullying.png"/>  <span></span>
				                                  </li>
				                                  <li>
				                                    <span></span> <img height="33px" width="40px" src="img/cyberBullying.png"/>  <span></span>
				                                  </li>
				                                  <li>
				                                    <span></span> <img height="33px" width="40px" src="img/cyberBullying.png"/>  <span></span>
				                                  </li>
				                                  <li>
				                                    <span></span> <img height="33px" width="40px" src="img/cyberBullying.png"/>  <span></span>
				                                  </li>
				                                </ul>
				                          </div>

				                        </li>

				                      <?php
				                      		}
				                      	}
				                      ?>

				                      </ul>
				                    </div>
				                  </div>

				              </div>
				            </div>
				          </div>
				       </section>

				        <section id="section-iconfall-2" class="subscribe text-center">
					          <div class="container-fluid">
					            <div class="row subscribe subscribe_div">
					              <div class="col-xs-12 pull-left text-div">
					                    <h1>Are you a parent?</h1>
					                    <p class="lead"> Help your children gain experience in everyday life by subscribing to this website</p>
					                    <button>Register as Parent</button>
					                </div>
					            </div>
					          </div>
					    </section>
					        <section class="dark-bg text-center section-padding contact-wrap" id="section-iconfall-5">
					          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
					          <div class="container">
					            <div class="row">
					              <div class="col-md-12">
					                <h1 class="arrow">Talk to us</h1>
					              </div>
					            </div>
					            <div class="row contact-details">
					              <div class="col-md-4">
					                <div class="light-box box-hover">
					                  <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
					                  <p>Conservation House, 1st Floor</p>
					                </div>
					              </div>
					              <div class="col-md-4">
					                <div class="light-box box-hover">
					                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
					                  <p>+255 685 154 542</p>
					                </div>
					              </div>
					              <div class="col-md-4">
					                <div class="light-box box-hover">
					                  <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
					                  <p><a href="#">juliustheodory@gmail.com</a></p>
					                </div>
					              </div>
					            </div>
					            <div class="row">
					              <div class="col-md-12">
					                <ul class="social-buttons">
					                  <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
					                  <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
					                  <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
					                </ul>
					              </div>
					            </div>
					          </div>
					        </section>
					        <footer>
					          <div class="container">
					            <div class="row">
					              <div class="col-md-6 credit">
					                <p>Designed &amp; Developed by <a href="http://kinu.co.tz">Kinu Iternship Program </a> exclusively for <a href="#"><em>Kinu Kids</em></a></p>
					              </div>
					            </div>
					          </div>
					        </footer>
					</div>
					
				
			</div>

			<!-- the bottom line -->
			<div class="row col-md-10" id="footer">
				<section>
					<div class="tabs tabs-style-iconfall">
						<nav>
							<ul class="menu-icons">
								<li><a href="#section-iconfall" class="icon fa fa-lightbulb-o"><span>Kinu kids</span></a></li>
								<li><a style="color:#ef064d !important" href="#section-iconfall-2" class="icon glyphicon glyphicon-user"><span>Parents</span></a></li>
								<li><a style="color:#a1611f !important" href="#section-iconfall-3" class="icon fa fa-arrow-circle-up"><span>Up</span></a></li>
								<li><a style="color:#258eca !important" href="#section-iconfall-4" class="icon glyphicon glyphicon-calendar"><span>Events</span></a></li>
								<li><a style="color:#f0520e !important" href="#section-iconfall-5" class="icon glyphicon glyphicon-info-sign"><span>About us</span></a></li>
							</ul>
						</nav>
						<div class="content-wrap">
							<section id="section-iconfall-1"><p></p></section>
							<section id="section-iconfall-2"><p></p></section>
							<section id="section-iconfall-3"><p></p></section>
							<section id="section-iconfall-4"><p></p></section>
							<section id="section-iconfall-5"><p></p></section>
						</div><!-- /content -->
					</div><!-- /tabs -->
				</section>
			</div>

		</div>


		<script type="text/javascript" src="behaviour/bblgame.js"></script>
		<script type="text/javascript" src="behaviour/jQuery/jQuery.js"></script>
		<script type="text/javascript" src="style/bs/js/bootstrap.js"></script>
		<script src="behaviour/cbpFWTabs.js"></script>
		<script>
			(function() {

				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});

			})();

			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});

			function startGame(){
				var gameDiv = document.getElementById('gameDiv');
					// gameDiv.style.background = "red";
				if( hasClass(gameDiv,'fadeOutUp')){
					removeClass(gameDiv,'fadeOutUp');
					addClass(gameDiv,'fadeOutUp');
					// alert('Has class');
				}
				else{
					addClass(gameDiv,'fadeOutUp');
					// alert('Has no class');
					bblGame.questionGen();
				}

			}
		</script>


		
	</body>
</html>