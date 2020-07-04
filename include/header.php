	<!--GENERAL METADATA-->
	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="assets/img/hubss_favicon.png">
	<!-- PHP -->
	<?php
		// Current page url
		$currentpage = $_SERVER['REQUEST_URI'];
		$base_url = "/HUBSS_Redesign/";
		$home_page = "/HUBSS_Redesign/index.php";
		$terms = "/HUBSS_Redesign/terms-of-service.php";
		$privacy_policy = "/HUBSS_Redesign/privacy-policy.php";
		$about = "/HUBSS_Redesign/about-hubss.php";
		$installation = "/HUBSS_Redesign/installation-services.php";
		$lunch = "/HUBSS_Redesign/lnl.php";
		$specification_support = "/HUBSS_Redesign/specification-support-documents.php";
		$product_guide = "/HUBSS_Redesign/products.php";
		//PRODUCT PAGES
		$pre_mark = "/HUBSS_Redesign/premark.php";
		$dura_shield = "/HUBSS_Redesign/durashield.php";
		$air_mark = "/HUBSS_Redesign/airmark.php";
		$street_bond = "/HUBSS_Redesign/streetbond-150.php";
		$street_print = "/HUBSS_Redesign/streetprint-genuine-stamped-asphalt.php";
		$decomark = "/HUBSS_Redesign/decomark.php";
		$duratherm = "/HUBSS_Redesign/duratherm.php";
		$trafficpatternsxd = "/HUBSS_Redesign/trafficpatterns-xd.php";
		$trafficpatterns = "/HUBSS_Redesign/trafficpatterns.php";
		$streetbond_sr = "/HUBSS_Redesign/streetbond-sr.php";
	?>
	<!-- CSS LINKS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/material-kit.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--CAPTCHA API  -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<?php
	header('Content-Type: text/html; charset=utf-8');
	define('WP_USE_THEMES', false);
	require('../hubss/wp-blog-header.php');
	//Getting only content of H2 tag
	function getTextBetweenTags($tag, $html, $strict=0)
	{
		/* a new dom object */
		$dom = new domDocument;
		/* load the html into the object */
		$dom->loadHTML($html);
		/* discard white space */
		$dom->preserveWhiteSpace = false;
		/* the tag by its tag name */
		$content = $dom->getElementsByTagname($tag);
		/* the array to return */
		$out = array();
		foreach ($content as $item)
		{
			/* add node value to the out array */
			$out[] = $item->nodeValue;
		}
		/* return the results */
		return $out;
	}
	//Removing the content of H2 tag
	function strip_tags_content($text) {
		//strip_tags($text);
		$tags = "h4";
		//return preg_replace('@<(\w+)\b.*
		//foreach($tags as $t)
		return preg_replace('/<'. $tags .'\b[^>]>(.?)<\/'. $tags .'>/is', "", $text);
	}
?>
<body data-spy="scroll" data-offset="200">
	<header class="header-bg">
		<nav class="navbar navbar-expand-lg fixed-top <?php if ($privacy_policy == $currentpage || $terms == $currentpage) { echo'terms-nav'; }
			if( $about == $currentpage || $lunch == $currentpage || $installation == $currentpage || $pre_mark == $currentpage || $dura_shield == $currentpage || $air_mark == $currentpage || $street_bond == $currentpage || $street_print == $currentpage || $decomark == $currentpage || $duratherm == $currentpage || $currentpage == $trafficpatternsxd || $trafficpatterns == $currentpage || $streetbond_sr == $currentpage) {echo 'nav-transparent';} ?> ">
			<div class="container-fluid">
				<a class="navbar-brand logo-simple" href="<?php echo $base_url?>">
					<?php
					    if ($privacy_policy == $currentpage || $terms == $currentpage){
					        echo '<img src="assets/img/logo-white-backfround.png" class="img-fluid" alt="Privacy Policy and Terms of Service Navigation Logo">';
					    }
					    elseif( $base_url == $currentpage || $home_page == $currentpage ){
					    	echo '<img src="assets/img/index-nav-logo.png" class="img-fluid" alt="Hub Surface System Navigation Logo">';	
					    }
					    elseif($specification_support == $currentpage || $product_guide  == $currentpage ){
					        echo '<img src="assets/img/nav-logo.png" class="img-fluid" alt="Specification Support and Product Guide Nav Logo">';
					    }
					    else{
					        echo '<img src="assets/img/large-logo-_white.png" class="img-fluid" alt="Hub surface systems navigation logo">';
					    }
					?>
				</a>
			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			    	<span class="navbar-toggler-icon"></span>
			    	<span class="navbar-toggler-icon"></span>
			  	</button>
			  	<div class="collapse navbar-collapse" id="navbarNav">
			    	<ul class="navbar-nav ml-auto">
	      			    <li class="nav-item dropdown">
	      			         <a class="product-menu nav-link dropdown-toggle" href=""  id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	      			           <span> Products </span>
	      			         </a>
	      			        <div class="dropdown-menu products-dd" aria-labelledby="navbarDropdownMenuLink2">
	      			            <a class="dropdown-item" href="<?php echo $base_url.'trafficpatterns-xd.php'?>">TrafficPatterns XD <br> 
	      			            <span> Enhanced Asphalt Surfacing </span>
	      			        	</a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'streetbond-150.php'?>">StreetBond 150 <br>
	      			            <span> Pavement Coatings </span>
	      			            </a>
	      			        	<a class="dropdown-item" href="<?php echo $base_url.'streetprint-genuine-stamped-asphalt.php'?>">StreetPrint <br>
	      			        	<span> Stamped Asphalt </span>
	      			        	</a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'trafficpatterns.php'?>">TrafficPatterns <br>
	      			            <span>  Durable Pavement Markings  </span>
	      			            </a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'decomark.php'?>">DecoMark <br>
	      			            <span> Custom Surface Markings </span> </a>
	      			        	<a class="dropdown-item" href="<?php echo $base_url.'duratherm.php'?>">DuraTherm <br> 
	      			        		<span> Decorative Pavement Markings </span> </a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'streetbond-sr.php'?>"> StreetBond SR <br> <span> Solar Reflective Coatings </span> </a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'premark.php'?>">PreMark <br>
	      			            <span> Preferential Bike Lanes </span>	</a>
	      			            
	      			            <a class="dropdown-item" href="<?php echo $base_url.'airmark.php'?>">AirMark <br> <span> Airfield Runway Markings </span> </a>
	      			            
	      			        	<a class="dropdown-item" href="<?php echo $base_url.'durashield.php'?>">DuraShield <br>
	      			        	<span>  Asphalt Sealing & Protection </span> </a>
	      			        </div>
	      			    </li>
		      			<li class="nav-item dropdown">
	      			        <a class="nav-link applications-menu dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	      			           <span> Applications </span>
	      			         </a>
	      			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	      			        	<a class="dropdown-item" href="<?php echo $base_url.'decorative-high-performance-crosswalks.php'?>">High Performance Crosswalks</a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'parks-paths.php'?>">Parks, Paths & Pedestrian</a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'traffic-calming-streetscape-improvement.php'?>">Traffic Calming & Streetscapes</a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'parking-lot-surfaces.php'?>">Commercial Parking Lots</a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'leed-heat-island.php'?>">LEED & Heat Island Mitigation</a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'branding-and-wayfinding-solutions.php'?>">Branding & Wayfinding</a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'public-art.php'?>">Public Art</a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'decorative-stamped-driveways.php'?>">Decorative Stamped Driveways</a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'green-preferential-bike-lane-treatments.php'?>">Green Bike Lanes</a>
	      			            <a class="dropdown-item" href="<?php echo $base_url.'airportmilitary-markings.php'?>">Airfield Markings</a>
                            </div>
                        </li>
                        <li class="nav-item">
			        		<a class="nav-link support-docs" href="<?php echo $base_url.'specification-support-documents.php'?>">
			        			<span>Support Docs</span>
			        		</a>
			      		</li>
                        <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle mr-lg-4" href="" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <span> Company </span>
                             </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                <a class="dropdown-item" href="<?php echo $base_url.'about-hubss.php'?>">About</a>
                                <a class="dropdown-item" href="<?php echo $base_url.'#contact-us'?>">Contact Us</a>
								<a class="dropdown-item" href="<?php echo $base_url.'installation-services.php'?>">Installation</a>
								<a class="dropdown-item" href="<?php echo $base_url.'featured-projects'?>">Projects</a>
	      			        </div>
	      			    </li>
                        <li class="nav-item dropdown">
                             <a class="nav-link nav-btn dropdown-toggle" href="" id="navbarDropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="fas fa-phone" aria-hidden="true"></i> Get in Touch
                             </a>
                            <div class="dropdown-menu get-touch-dd" aria-labelledby="navbarDropdownMenuLink4">
                                <a class="dropdown-item" href="tel:(604) 309-8212"> HUB Canada (West) <br> <span> (604) 309-8212 </span> </a>
                                <div class="dropdown-divider"></div>
								<a class="dropdown-item" href="tel:(416) 540-9287"> HUB Canada (East) <br> <span> (416) 540-9287 </span> </a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="mailto:info@hubss.com" target="_blank"> Email <br> <span> info@hubss.com </span> </a>
	      			        </div>
	      			    </li>
			    	</ul>
			  	</div>
			</div>
		</nav>



	