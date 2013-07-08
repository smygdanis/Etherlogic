<?php
  // Include WordPress
    define('WP_USE_THEMES', false);
    // Change path below to location of wp-blog-header.php on server
    require('./ethernews/wp-blog-header.php');
    // Change number below to show 1 or more post excerpts
    query_posts('showposts=2');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
xmlns:og="http://ogp.me/ns#"
xmlns:fb="http://www.facebook.com/2008/fbml">
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title>Etherlogic.gr - Αρχική</title>
	<!--Meta tags gia Google-->
	<meta name="description" content="Στην EtherLogic χαράσσουμε στρατηγικές για την Online παρουσία σας! Προωθήστε μαζί μας τις υπηρεσίες και τα προϊόντα σας, μεγιστοποιήστε την απόδοση της επένδυσης σας και απογειώστε τις πωλήσεις σας. Κύριες υπηρεσίες μας: Web Design/Social Media/E-Commerce/Mobile Apps/SEO & Analytics/Content Creation/Banner Campaigns/Mass Mail Campaign." />
	<meta name="author" content="Spyros Mygdanis"/>
	
	<!--Meta tags gia Facebook-->
	<link rel="image_src" href="http://etherlogic.gr/img/placeholders/websites.jpg" / ><!--poia photo trabaei-->
	<meta property="og:title" content="EtherLogic - Αρχική" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://etherlogic.gr/" />
	<meta property="og:image" content="http://etherlogic.gr/img/placeholders/websites.jpg" />
	<meta property="og:description" content="Στην EtherLogic χαράσσουμε στρατηγικές για την Online παρουσία σας! Προωθήστε μαζί μας τις υπηρεσίες και τα προϊόντα σας, μεγιστοποιήστε την απόδοση της επένδυσης σας και απογειώστε τις πωλήσεις σας. Κύριες υπηρεσίες μας: Web Design/Social Media/E-Commerce/Mobile Apps/SEO & Analytics/Content Creation/Banner Campaigns/Mass Mail Campaign." />
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
<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>
<!--Reveal.js-->
	  	<link rel="stylesheet" href="css/reveal.css">	

<!--End of Reveal.js-->

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

<body onload="$('#test').trigger('click');">

<header id="header" class="container clearfix">

	<a href="index.php" id="logo">
		<img src="img/logo.png" alt="EtherLogic">
	</a>

	<nav id="main-nav">
		
		<ul>
			<li class="current">
				<a href="index.php" data-description="All starts here">ΑΡΧΙΚΗ</a>
				
			</li>
			<li>
				<a href="about-us.html" data-description="Who we are">ABOUT</a>
					<ul>
						<li><a href="sitemap.html">Sitemap</a></li>
					</ul>
			</li>
			<li>
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



	<section id="features-slider" class="ss-slider">
	
		<article class="slide">
		
			<img src="img/placeholders/websites.jpg" alt="" class="slide-bg-image" />
			
			<div class="slide-button">
				<span class="dropcap">1</span>
				<h5>Web Design</h5>
<!-- 				<span class="description">Design & Development</span>
 -->			</div>
		
			<div class="slide-content">
				<h2>Web Design & Development</h2>
				<p>Σχεδιασμός δυναμικών ιστοσελίδων με Responsive Design και SEO Friendly Pages.</p>
				<p><a class="button" href="websites.html">Περισσότερα</a></p>
			</div>
			
		</article><!-- end .slide (Responsive Layout) -->
	
		<article class="slide">
		
			<img src="img/placeholders/ecommerce.jpg" alt="" class="slide-bg-image" />
		
			<div class="slide-button">		
				<span class="dropcap">2</span>
				<h5>E-Commerce</h5>
<!-- 				<span class="description">Online Marketing</span>
 -->			</div>	
			
			<div class="slide-content">
				<h2>E-Commerce</h2>
				<p>Αποκτήστε τώρα το δικό σας ηλεκτρονικό κατάστημα! Εμπορευθείτε με ασφάλεια και διευρύνετε την πελατειακή σας βάση με την λύση της EtherLogic.</p>
				<p><a class="button" href="ecommerce.php">Περισσότερα</a></p>
			</div>
			
		</article><!-- end .slide (HTML5 / CSS3) -->
	
		<article class="slide">
		
			<img src="img/placeholders/social.jpg" alt="" class="slide-bg-image" />
		
			<div class="slide-button">
				<span class="dropcap">3</span>
				<h5>Social Media</h5>
<!-- 				<span class="description">Social Media Marketing</span>
 -->			</div>
			
			<div class="slide-content">
				<h2>Social Media</h2>
				<p>Εκμεταλλευτείτε την δυναμική των Social Media! Με σύγχρονα Apps, υποστηρίξτε το community building και διαφημιστείτε στοχευμένα!</p>
				<p><a class="button" href="socialmedia.html">Περισσότερα</a></p>
			</div>
			
		</article><!-- end .slide (Easily Customisable) -->
	
		<article class="slide">
		
			<img src="img/placeholders/seo.jpg" alt="" class="slide-bg-image" />
		
			<div class="slide-button">
				<span class="dropcap">4</span>
				<h5>SEM/SEO</h5>
<!-- 				<span class="description">Search Engine Optimisation</span>
 -->			</div>
			
			<div class="slide-content">
				<h2>SEM/SEO</h2>
				<p>Ανεβάστε το Site σας ψηλά στις μηχανές αναζήτησης! Αυξήστε την προβολή της επιχείρησης σας και επικρατήστε  στον ανταγωνισμό.</p>
				<p><a class="button" href="seo.php">Περισσότερα</a></p>
			</div>
			
		</article><!-- end .slide (Unique & Clean) -->
		
		<article class="slide">
		
			<img src="img/placeholders/massmail.jpg" alt="" class="slide-bg-image" />
		
			<div class="slide-button">
				<span class="dropcap">5</span>
				<h5>Mass eMail</h5>
<!-- 				<span class="description">eMail Marketing</span>
 -->			</div>
			
			<div class="slide-content">
				<h2>Email Marketing</h2>
				<p>Για τη προώθηση της ιστοσελίδας σας άμεσα και αποτελεσματικά και για τη συνεχή ενημέρωση των πελατών σας, παρέχουμε τη δυνατότητα αποστολής μαζικών emails καθώς και σχεδιασμό του περιεχομένου αποστολής.</p>
				<p><a class="button" href="massmail.html">Περισσότερα</a></p>
			</div>
			
		</article><!-- end .slide (Unique & Clean) -->
		
	</section><!-- end #features-slider -->
	
<h2 class="slogan align-center">Στην EtherLogic χαράσσουμε στρατηγικές για την Online παρουσία σας! Προωθήστε μαζί μας τις υπηρεσίες και τα προϊόντα σας, 
μεγιστοποιήστε την απόδοση της επένδυσης σας και απογειώστε τις πωλήσεις σας.</h2>
		
		<p>Με πάνω από 10 χρόνια εμπειρίας στο χώρο οι άνθρωποι της EtherLogic , θα μεριμνήσουν ώστε να αποκτήσετε ισχυρή ταυτότητα στο Internet, 
μετατρέποντας τους επισκέπτες σας σε πελάτες.<a id="test" href="img/wuc.jpg" class="single-image"></a></p>
		<p><ul class="check dotted">
			<li>Τα έργα μας χαρακτηρίζονται από υψηλή αισθητική και ευχρηστία</li>
			<li>Είμαστε δίπλα σας καθημερινά δίνοντας απαντήσεις και λύσεις άμεσα στα προβλήματα σας</li>
			<li>Καταγράφουμε τις ανάγκες σας, αναλύουμε τις απαιτήσεις, προτείνουμε νέες ιδέες, και κάνουμε δοκιμές μαζί σας για να φτάσουμε στο ιδανικό αποτέλεσμα</li>
			<li>Παρακολουθούμε διαρκώς τις τεχνολογικές εξελίξεις και ενημερωνόμαστε καθημερινά ώστε οι υπηρεσίες μας και τα προϊόντα μας να ακολουθούν την αιχμή της τεχνολογίας</li>
		</ul></p>
		
		
				<div class="clear"></div>
		<br><br/>
		<h6 class="section-title">ΤΕΛΕΥΤΑΙΑ ΝΕΑ ΑΠΟ ΤΟ BLOG ΜΑΣ!</h6>

		
		<div class="one-half">
		
<?php query_posts('showposts=2'); while(have_posts()) : ?>
<?php $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

<h4>Post στις <?php the_time('jS F') ?></h4>
<p><strong><a href="<?php the_permalink(); ?>" title="Read full post"><?php the_title(); ?></a></strong></p>
<?php the_excerpt(); ?>
<p><a href="<?php the_permalink(); ?>" title="Read full post"><?php the_post_thumbnail('medium'); ?><?php?></p></a>
<p><a href="<?php the_permalink(); ?>" title="Read full post"><span style="color:#f15a23">Περισσότερα..</span><?php?></p></a>
<?php endif; endwhile; ?>
<?php $i = 0; rewind_posts(); ?>
	</div><!-- end .one-half -->

	<div class="one-half last">
<?php query_posts('showposts=2'); while(have_posts()) : ?>
<?php $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

<h4>Post στις <?php the_time('jS F') ?></h4>
<p><strong><a href="<?php the_permalink(); ?>" title="Read full post"><?php the_title(); ?></a></strong></p>
<?php the_excerpt(); ?>
<p><a href="<?php the_permalink(); ?>" title="Read full post"><?php the_post_thumbnail('medium'); ?><?php?></p></a>
<p><a href="<?php the_permalink(); ?>" title="Read full post"><span style="color:#f15a23">Περισσότερα..</span><?php?></p></a>
<?php endif; endwhile; ?>
<?php $i = 0; rewind_posts(); ?>
	</div><!-- end .one-half last -->

	<div class="clear"></div>
	


	
	
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
<!--Reveal.js-->

		<script type="text/javascript" src="js/jquery.reveal.js"></script>
<!--End of Reveal.js-->

</body>
</html>