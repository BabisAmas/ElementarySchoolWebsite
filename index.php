<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ΑΡΧΙΚΗ</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/slider.css">
		<link rel="stylesheet" href="css/style.css">
            	<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/kwiks.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
				var owl = $("#owl");
				owl.owlCarousel({
					items : 4, //10 items above 1000px browser width
					itemsDesktop : [995,3], //5 items between 1000px and 901px
					itemsDesktopSmall : [767, 2], // betweem 900px and 601px
					itemsTablet: [700, 2], //2 items between 600 and 0
					itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
					navigation : true,
				});
			})
			var Main = Main || {};
			jQuery(window).load(function() {
				window.responsiveFlag = jQuery('#responsiveFlag').css('display');
				Main.gallery = new Gallery();
				jQuery(window).resize(function() {
					Main.gallery.update();
				});
			});
			function Gallery(){
				var self = this,
					container = jQuery('.flexslider'),
					clone = container.clone( false );
					this.init = function (){
						if( responsiveFlag == 'block' ){
						var slides = container.find('.slides');
						slides.kwicks({
							max : 500,
							spacing : 0
						}).find('li > a').click(function (){
							return false;
						});
						} else {
							container.flexslider();
						}
					}
					this.update = function () {
						var currentState = jQuery('#responsiveFlag').css('display');
						if(responsiveFlag != currentState) {
							responsiveFlag = currentState;
							container.replaceWith(clone);
							container = clone;
							clone = container.clone( false );
							this.init();
						}
					}
				this.init();
			}
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div class="clear"></div>
	
                        <div class="container_12">
                         
                            
				<div class="grid_12">
                                    <h1>
                                            <a href="index.php">
                                                <img src="images/kladi.png" alt="kladi"style="width:110px;height:50px;">
                                            </a>
					</h1>
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
                                                            <li class="current"><a href="index.php">Αρχική</a>
									
                                                            </li>
                                                                <li><a href="ourschool.php">Το Σχολειο μας </a></li>
                                                                <li><a href="parents.php">Για γονεις</a></li>
                                                                <li><a href="actions.php">Δρασεις </a></li>
                                                                <li><a href="europianprograms.php">Ευρωπαϊκα Προγραμματα</a></li>
                                                        </ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
		<div class="main">
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - December 16, 2013!</div>
				<div class="container_12">
					<div class="grid_8">
						<div class="flexslider">
							<ul class="slides">
								<li>
                                                                    <img src="images/school1.jpg" alt="">
									<div class="flex-caption">
										<p>το</p>
									</div>
								</li>
								<li>
                                                                    <img src="images/school2.jpg" alt="" >
									<div class="flex-caption c2">
										<p>σχολειο</p>
									</div>
								</li>
								<li>
                                                                    <img src="images/school1.jpg" alt="">
									<div class="flex-caption">
										<p>μας</p>
									</div>
								</li>
							</ul>
						</div>
						<span id="responsiveFlag"></span>
					</div>
					<div class="grid_4">
                                            <a href="#" class="donate">Καλως ηρθατε</a>
						<div class="text1">στο Δημοτικό σχολείο Σκουτάρεως</div>
						<p>Θα μείνουμε ευχαριστημένοι αν η περιήγησή σας στον ιστοτοπό μας, έχει να σας προσφέρει οτιδήποτε επιμορφωτικό, πληροφοριακό ή ψυχαγωγικό.</p>
					</div>
					<div class="clear"></div>
					
					<div class="grid_12">
						<h2><font color="FF0066">μ</font> <font color="FF9900">ε</font> <font color="9933CC">γ</font>
                                                        <font color="33FFFF">α</font> <font color="CC0000">λ</font> <font color="000066">α</font> &nbsp;
                                                <font color="660066">λ</font> <font color="663333">ο</font> <font color="006600">γ</font>
                                                <font color="FF0066">ι</font> <font color="FF9900">α</font> </h2> 
						<div id="owl">
							
							<div class="item it1">
                                                            <a href="#"><img src="images/albert.png" alt=""> <br>
								<i>Παιδεία είναi αυτό που μένει, όταν έχεις ξεχάσεις όσα έμαθες στο σχολείο</i><br>
                                                                Αϊνσταιν <br>
								</a>
							</div>
							<div class="item it2">
                                                            <a href="#"><img src="images/aristo.png" alt=""> <br>
                                                                <i> Οι ρίζες της εκπαιδευσης πικρές, μα οι καρποί γλυκοί</i> 
                                                                Αριστοτελης <br><br></a>
							</div>
							<div class="item it3">
                                                            <a href="#"><img src="images/nelson.png" alt=""> <br>
                                                                <i>Η εκπαίδευση είναι το πιο ισχυρό όπλο για να αλλάξεις τον κόσμο.</i><br>
								Νέλσον Μαντελα</a>
							</div>
							
						</div>
					</div>
                                        <div class="container_12">
                                            <div class="grid_8">
                                               <h3> <b> <u>
                                                    <font color="FF0066">Α</font> <font color="FF9900">ν</font> <font color="9933CC">α</font>
                                                    <font color="33FFFF">κ</font> <font color="CC0000">ο</font> <font color="000066">ι</font>
                                                    <font color="660066">ν</font> <font color="663333">ω</font> <font color="006600">σ</font>
                                                    <font color="FF0066">ε</font> <font color="003300">ι</font> <font color="0000FF">ς</font>
                                                </u></b></h3>
						
						<div class="extra_wrapper">
                                                    
							<p class="p1 col1"><a href="#">Τιτλος Ανακοινωσης 1</a></p>
							<p class="p1 col1"><a href="#">Τιτλος Ανακοινωσης 2</a></p>
                                                        <p class="p1 col1"><a href="#">Τιτλος Ανακοινωσης 3</a></p>
						</div>
						
						
                                            </div>
                                            <div class="grid_4 ">
						
                                                <h3> <b><u> <font color="FF0066">σ</font> <font color="FF9900">υ</font> <font color="9933CC">ν</font>
                                                <font color="33FFFF">δ</font> <font color="CC0000">ε</font> <font color="000066">σ</font>
                                                <font color="660066">μ</font> <font color="663333">ο</font> <font color="006600">ι</font> 
                                                </u></b></h3>  
						<ul class="list">
							<li><a href="http://www.minedu.gov.gr/">υπουργειο παιδειας</a></li>
							<li><a href="http://kmaked.pde.sch.gr/site/index.php/paratiritirio-bias/paratiritirio-bias-3">παρατηρητηριο βιας κεντρικης μακεδονιας</a></li>
							<li><a href="http://www.sch.gr/">πανελληνιο σχολικο δικτυο</a></li>
							<li><a href="http://www.sch.gr/">ψηφιακο σχολειο</a></li>
						</ul>
						
                                            </div>
                                    </div>
                                        
					<div class="grid_4">
						<h3 class="nowrap mb0">
                                                <font color="FF0066">χ</font> <font color="FF9900">ρ</font> <font color="9933CC">η</font>
                                                <font color="33FFFF">σ</font> <font color="CC0000">τ</font> <font color="000066">ε</font> <font color="660066">ς</font>
                                                </h3>
						Πατήστε παρακάτω για να συνδεθείτε
                                                <div class="alright"><a href="users.php" class="btn">συνδεση</a></div>
					</div>
					<div class="grid_7 prefix_1">
                                            <h3>
                                                <font color="FF0066">ε</font> <font color="FF9900">π</font> <font color="9933CC">ι</font>
                                                <font color="33FFFF">κ</font> <font color="CC0000">ο</font> <font color="000066">ι</font>
                                                <font color="660066">ν</font> <font color="663333">ω</font> <font color="006600">ν</font>
                                                <font color="FF0066">ι</font> <font color="003300">α</font> 
                                            </h3>
						<img src="images/page1_img8.jpg" alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<p>Το σχολείο μας στεγάζεται στο Σκούταρι Σερρών. Πατήστε παρακάτω για πλοήγηση στο χάρτη <span class="col1"><a href=" http://blog.templatemonster.com/free-website-templates/" rel="dofollow">εδώ</a></span>.</p>
							Αν θέλετε να επικοινωνήσετε πατήστε παρακάτω. 
						</div>
						<div class="clear"></div>
                                                <div class="alright"><a href="contactus.php" class="btn">περισσότερα</a></div>
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
			<footer>
				<div class="hor bg3"></div>
				<div class="container_12">
					<div class="grid_12 ">
						<div class="socials">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<div class="clear"></div>
						</div>
						<div class="copy">
							<strong>Δημοτικό Σχολείο Σκουτάρεως</strong>   &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a><br>
							Website designed by <a href="http://informatics.teicm.gr/" rel="nofollow">ΤΕΙ Κεντρικής Μακεδονίας Τμήμα ΜηχανικώνΠληροφορικής</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>