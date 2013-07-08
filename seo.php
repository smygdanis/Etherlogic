<?php
	// Include WordPress
    define('WP_USE_THEMES', false);
    // Change path below to location of wp-blog-header.php on server
    require('./ethernews/wp-blog-header.php');
    // Change number below to show 1 or more post excerpts
    query_posts('showposts=2');
?>
<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title>SEM/SEO</title>
	
	<!--Meta tags gia Google-->
	<meta name="description" content="Στην EtherLogic δίνουμε βαρύτητα στην δημιουργία φιλικών προς τις μηχανές αναζήτησης ιστοσελίδων. Ωστόσο το SEO είναι ένας τομέας συνεχώς μεταβαλλόμενος που απαιτεί συνεχή και διαρκή παρακολούθηση. " />
	<meta name="author" content="Spyros Mygdanis"/>
	
	<!--Meta tags gia Facebook-->
	<link rel="image_src" href="http://etherlogic.gr/img/placeholders/seoanalytics.jpg" / ><!--poia photo trabaei-->
	<meta property="og:title" content="EtherLogic - Search Engine Optimization" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://etherlogic.gr/seo.php" />
	<meta property="og:image" content="http://etherlogic.gr/img/placeholders/seoanalytics.jpg" />
	<meta property="og:description" content="Στην EtherLogic δίνουμε βαρύτητα στην δημιουργία φιλικών προς τις μηχανές αναζήτησης ιστοσελίδων. Ωστόσο το SEO είναι ένας τομέας συνεχώς μεταβαλλόμενος που απαιτεί συνεχή και διαρκή παρακολούθηση. " />
	<meta property="og:site_name" content="EtherLogic" />

	<!--Share This-->
	<script type="text/javascript">var switchTo5x=false;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "51197ead-1687-4820-b959-1e7fb5686389", doNotHash: false, doNotCopy: false, hashAddressBar: false, shorten:false});</script>

	<!--[if !lte IE 6]><!-->
		<link rel="stylesheet" href="css/style.css" media="screen" />

		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />
		
		<link rel="stylesheet" href="css/fancybox.min.css" media="screen" />

		<link rel="stylesheet" href="css/video-js.min.css" media="screen" />

		<link rel="stylesheet" href="css/audioplayerv1.min.css" media="screen" />
	<!--<![endif]-->

	<!--[if lte IE 6]>
		<link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
	<![endif]-->

	<!-- HTML5 Shiv + detect touch events -->
	<script src="js/modernizr.custom.js"></script>

	<!-- HTML5 video player -->
	<script src="js/video.min.js"></script>
	<script>_V_.options.flash.swf = 'http://localhost/smartstart/js/video-js.swf';</script>
<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  -->

<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42175904-1', 'etherlogic.gr');
  ga('send', 'pageview');

</script>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);

  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://etherlogic.gr/etheranalytics/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "1"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->
</head>
<body>

<header id="header" class="container clearfix">

	<a href="index.php" id="logo">
		<img src="img/logo.png" alt="EtherLogic">
	</a>

		<nav id="main-nav">
		
		<ul>
			<li>
				<a href="index.php" data-description="All starts here">ΑΡΧΙΚΗ</a>
				
			</li>
			<li>
				<a href="about-us.html" data-description="Who we are">ABOUT</a>
					<ul>
						<li><a href="sitemap.html">Sitemap</a></li>
					</ul>
			</li>
			<li class="current">
				<a href="#" data-description="What we do">ΥΠΗΡΕΣΙΕΣ</a>
				<ul>
					<li><a href="websites.html">Website Design</a></li>
					<li><a href="socialmedia.html">Social Media</a></li>
					<li><a href="ecommerce.php">E-Commerce</a></li>
					<li><a href="mobileapps.html">Mobile Apps</a></li>
					<li><a href="seo.php">SEO & Analytics</a></li>
					<li><a href="contentcreation.html">Content Creation</a></li>
					<li><a href="banners.html">Banner Campaigns</a></li>
					<li><a href="massmail.html">Mass Mail Campaigns</a></li>
<!-- 					<li><a href="templates.html">Templates</a></li>
 -->					
				</ul>
			</li>
			<li>
				<a href="#" data-description="Working on">PROJECTS</a>
				<ul>
					<li><a href="augmentedreality.html">Augmented Reality</a></li>
					<li><a href="sensorapps.html">Sensor Apps</a></li>
<!-- 					<li><a href="onlineeducation.html">Online Education Platform</a></li>
 -->				</ul>
			</li>
			<li>
				<a href="http://etherlogic.gr/ethernews/" data-description="Be updated!">NEWS</a>
					<ul>
					<li><a href="http://etherlogic.gr/ethernews/category/latest-news/">Latest News</a></li>
					<li><a href="http://etherlogic.gr/ethernews/category/knowledge-base/">Knowledge Base</a></li>
					<li><a href="http://etherlogic.gr/ethernews/category/online-marketing/">Online Marketing</a></li>
					<li><a href="http://etherlogic.gr/ethernews/category/website-features/">Website Features</a></li>
					</ul>
			</li>
			
			<li>
				<a href="contact-us.html" data-description="Enquire here">ΕΠΙΚΟΙΝΩΝΙΑ</a>
			</li>
		</ul>

	</nav><!-- end #main-nav -->
	
</header><!-- end #header -->

<section id="content" class="container clearfix">

	<header class="page-header">
	
		<h1 class="page-title">SEM/SEO</h1>
		
	</header><!-- end .page-header -->

	<section id="main">

		<article class="entry single clearfix">

			<a href="#" title="">
				<img src="img/placeholders/seoanalytics.jpg" alt="" class="entry-image">
			</a>

			<div class="entry-body">

				<a href="#">
					<h1 class="title">SEM/SEO</h1>
				</a>
				<h6>SEM/SEO</h6>

				<p>Στην EtherLogic δίνουμε βαρύτητα στην δημιουργία φιλικών προς τις μηχανές αναζήτησης ιστοσελίδων. Ωστόσο το SEO είναι ένας τομέας συνεχώς μεταβαλλόμενος που απαιτεί συνεχή και διαρκή παρακολούθηση.</p>
				
				<p>Αναλαμβάνουμε τον επανασχεδιασμό υπάρχουσας ιστοσελίδας για να βελτιστοποιήσουμε την εμφάνιση της στις μηχανές αναζήτησης. Μετά την ανάλυση της ιστοσελίδα σας θα επιλέγει το μίγμα ενεργειών που πρέπει να γίνουν ώστε η ανέβει ψηλά στα αποτελέσματα και να αυξηθεί η οργανική επισημότητα στο site σας.</p>
				
				<p>Σχεδιάζουμε μαζί σας στοχευόμενες καμπάνιες Adwords σε μορφή κειμένου ή σε visuals. Πλεονεκτήματα αυτού του τρόπου προώθησης αποτελούν το μετρίσιμο αποτέλεσμα και το χαμηλό κόστος. Στόχος μας να ενισχύσουμε την προβολή σας και σας να σας βάλουμε μπροστά από τον ανταγωνισμό.</p>
					<span class='st_sharethis_large' displayText='ShareThis'></span>
				<span class='st_facebook_large' st_image="http://etherlogic.gr/img/logo.png" displayText='Facebook'></span>
				<span class='st_twitter_large' displayText='Tweet'></span>
				<span class='st_linkedin_large' displayText='LinkedIn'></span>
				<span class='st_googleplus_large' displayText='Google +'></span>
				<span class='st_email_large' displayText='Email'></span>
				<span class='st_fblike_large' displayText='Facebook Like'></span>
				</div><!-- end .entry-body -->

			
			
		</article><!-- end .entry -->


		
		
	</section><!-- end #main -->

	<aside id="sidebar">

		<div class="widget">

			<h6 class="widget-title">ΑΛΛΕΣ ΥΠΗΡΕΣΙΕΣ</h6>

			<ul class="categories">
			
					<li><a href="websites.html">Website Design</a></li>
					<li><a href="socialmedia.html">Social Media</a></li>
 					<li><a href="ecommerce.php">E-Commerce</a></li>
					<li><a href="mobileapps.html">Mobile Apps</a></li>
<!-- 				<li><a href="seo.php">SEO & Analytics</a></li>
 -->				<li><a href="contentcreation.html">Content Creation</a></li>
					<li><a href="banners.html">Banner Campaigns</a></li>
					<li><a href="massmail.html">Mass Mail Campaigns</a></li>	</ul>

		</div><!-- end .widget -->
		
			<div class="widget">

			<h6 class="widget-title">Τελευταία Νέα</h6>
							
					<?php query_posts('cat=5','showposts=2'); while(have_posts()) : ?>
					<?php $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

					<p><strong><a href="<?php the_permalink(); ?>" title="Read full post"><?php the_title(); ?></a></strong></p>					
					<?php endif; endwhile; ?>
					<?php $i = 0; rewind_posts(); ?>
						

					<?php query_posts('cat=5','showposts=2'); while(have_posts()) : ?>
					<?php $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

					<p><strong><a href="<?php the_permalink(); ?>" title="Read full post"><?php the_title(); ?></a></strong></p>
					
					<?php endif; endwhile; ?>
					<?php $i = 0; rewind_posts(); ?>
			
			
					
			</div><!-- end .widget -->
					
			<!--Social Login-->
			<div class="widget">
			<h4>ΣΥΝΔΕΘΕΙΤΕ ΜΕ:</h4>			
			<a href="ecommerce.html" onclick="window.open('https://www.facebook.com/dialog/oauth?client_id=644962728864397&redirect_uri=http%3A%2F%2Fetherlogic.api.oneall.com%2Fsocialize%2Fcallback.html%3Fprovider_connection_token%3Dcf488874-5735-4b0b-9d1d-1e009979521d%26oainonce%3D56323c90-b7a0-44b0-b45f-ed28da7a87ac&state=a27ebe65ff148f50da3e23ca9d372660&display=popup&scope=email','targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=500,height=500')"><img src="img/facebookoneall.jpg"></a>
			<a href="https://accounts.google.com/o/openid2/auth?openid.ns=http://specs.openid.net/auth/2.0&openid.mode=checkid_setup&openid.claimed_id=http://specs.openid.net/auth/2.0/identifier_select&openid.identity=http://specs.openid.net/auth/2.0/identifier_select&openid.return_to=http://etherlogic.api.oneall.com/socialize/callback.html?provider_connection_token%3D5b9a8300-99df-413e-9d18-244abcd528bd%26oainonce%3D0e1c58b4-c6aa-47ca-b72a-c5d6cf564341&openid.ns.ax=http://openid.net/srv/ax/1.0&openid.ax.mode=fetch_request&openid.ax.type.alias1=http://axschema.org/namePerson/first&openid.ax.count.alias1=1&openid.ax.type.alias2=http://axschema.org/namePerson/last&openid.ax.count.alias2=1&openid.ax.type.alias3=http://axschema.org/contact/email&openid.ax.count.alias3=1&openid.ax.type.alias4=http://axschema.org/contact/country/home&openid.ax.count.alias4=1&openid.ax.type.alias5=http://axschema.org/pref/language&openid.ax.count.alias5=1&openid.ax.type.alias6=http://schemas.openid.net/ax/api/user_id&openid.ax.count.alias6=1&openid.ax.required=alias1,alias2,alias3,alias4,alias5,alias6&openid.ns.ui=http://specs.openid.net/extensions/ui/1.0&openid.ui.mode=popup&openid.ui.lang=en-US&openid.realm=http://etherlogic.api.oneall.com"target="_blank"><img src="img/googleoneall.jpg"></a>
			<p><a href="http://etherlogic.gr/ethernews/wp-login.php">Εγγραφή</a></p>
			<!--End of Social Login-->
			
		<div class="one-fourth last">

		<h4>ΕΠΙΚΟΙΝΩΝΙΑ</h4>

		<p>	<ul class="contact-info">
				<p></p>
				<p></p>
				<li class="phone">211-800-2044</li>
				<li class="phone">210-523-4350</li>
				<li class="email"><a href="mailto:info@etherlogic.gr">info@etherlogic.gr</a></li>
			</ul>
		</p>

		<h4>
		<a href="contact-us.html" class="button no-bg">Περισσότερα<span class="arrow">&raquo;</span></a>
		</h4>
		
	</div>

	<!-- 	<div class="widget">
		
			<h6 class="widget-title">Text Widget</h6>

			<p>Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

		</div> --><!-- end .widget -->

	<!-- 	<div class="widget">

			<h6 class="widget-title">Accordion Widget</h6>

			<h4 class="acc-trigger">
				<a href="#">User Research</a>
			</h4>

			<div class="acc-container">
				<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu. Aenean nisl orci, cosequat eu.</div>
			</div>

			<h4 class="acc-trigger">
				<a href="#">Organizational Consulting</a>
			</h4>

			<div class="acc-container">
				<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu. Aenean nisl orci, cosequat eu.</div>
			</div>

			<h4 class="acc-trigger">
				<a href="#">Competitive Analysis</a>
			</h4>

			<div class="acc-container">
				<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu. Aenean nisl orci, cosequat eu.</div>
			</div>

			<h4 class="acc-trigger">
				<a href="#">Market Research</a>
			</h4>

			<div class="acc-container">
				<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu. Aenean nisl orci, cosequat eu.</div>
			</div>

		</div> --><!-- end .widget -->

		<!-- <div class="widget">
		
			<h6 class="widget-title">Twitter Feed</h6>

			<ul class="tweets-feed">
				<li>Oops, our Twitter feed is unavailable at the moment - <a href="http://twitter.com/">Follow us on Twitter!</a></li>
			</ul>

		</div> --><!-- end .widget -->

	
		
	</aside><!-- end #sidebar -->
	
</section><!-- end #content -->

<footer id="footer" class="clearfix">

	<div class="container">

		<div class="three-fourth">

			<nav id="footer-nav" class="clearfix">

				<ul>
					<li><a href="index.php">ARXIKH</a></li>
					<li><a href="elements.html">ABOUT</a></li>
					<li><a href="blog.html">ΥΠΗΡΕΣΙΕΣ</a>	</li>
					<li><a href="portfolio-4-columns.html">PROJECTS</a>
						<ul>
							<li><a href="augmentedreality.html">Augmented Reality</a></li>
							<li><a href="sensorapps.html">Sensor Apps</a></li>
							<li><a href="onlineeducation.html">Online Education Platform</a></li>
						</ul>
					</li>
					<li><a href="portfolio-4-columns.html">NEWS</a></li>
					<li><a href="contact-us.html">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
				</ul>
				
			</nav><!-- end #footer-nav -->

			<ul class="contact-info">
				<li class="address">Σοφοκλέους 38 Ομόνοια, Αθήνα</li>
				<li class="phone">211-800-2044</li>
				<li class="phone">210-523-4350</li>
				<li class="email"><a href="mailto:info@etherlogic.gr">info@etherlogic.gr</a></li>
			</ul><!-- end .contact-info -->
			
		</div><!-- end .three-fourth -->

		<div class="one-fourth last">

			<span class="title">Stay connected</span>

			<ul class="social-links">
				<li class="twitter"><a href="https://twitter.com/EtherLogic">Twitter</a></li>
				<li class="facebook"><a href="https://www.facebook.com/etherlogic.gr">Facebook</a></li>
			<!-- 	<li class="digg"><a href="#">Digg</a></li>
				<li class="vimeo"><a href="#">Vimeo</a></li> -->
				<li class="youtube"><a href="http://www.youtube.com/channel/UCnENoe9Ix4d1OKIpTcuMqlQ">YouTube</a></li>
				<li class="skype"><a href="#">Skype</a></li>
			</ul><!-- end .social-links -->

		</div><!-- end .one-fourth.last -->
		
	</div><!-- end .container -->

</footer><!-- end #footer -->
<footer id="footer-bottom" class="clearfix">

	<div class="container">

		<ul>
			<li>EtherLogic &copy; 2013</li>
<!-- 			<li><a href="#">Legal Notice</a></li>
			<li><a href="#">Terms</a></li> -->
		</ul>

	</div><!-- end .container -->

</footer><!-- end #footer-bottom -->
<!--[if !lte IE 6]><!-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
	<!--[if lt IE 9]> <script src="js/selectivizr-and-extra-selectors.min.js"></script> <![endif]-->
	<script src="js/respond.min.js"></script>
	<script src="js/jquery.easing-1.3.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.smartStartSlider.min.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/jquery.cycle.all.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/audioplayerv1.min.js"></script>
	<script src="//maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.gmap.min.js"></script>
	<script src="js/jquery.touchSwipe.min.js"></script>
	<script src="js/custom.js"></script>
<!--<![endif]-->
</body>
</html>