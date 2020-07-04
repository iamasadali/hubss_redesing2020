
	<!-- FOOTER  -->
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-7 col-md-12">
					<div class="row mb-sm-30">
						<div class="col-sm-2 footer-links  mb-mob-30">
							<h3>COMPANY</h3>
							<a href="<?php echo $base_url.'about-hubss.php'?>">About</a>
							<a href="<?php echo $base_url.'#contact-us'?>">Contact</a>
						</div>
						<div class="col-sm-2 col-6 footer-links px-sm-0 mb-mob-30">
							<h3>PRODUCTS</h3>
							<a href="<?php echo $base_url.'streetprint-genuine-stamped-asphalt.php'?>">StreetPrint</a>
							<a href="<?php echo $base_url.'decomark.php'?>"> DecoMark      </a>
						</div>
						<div class="col-sm-2 col-6  mt footer-links px-sm-0">
							<a href="<?php echo $base_url.'airmark.php'?>">   AirMark   </a>
							<a href="<?php echo $base_url.'premark.php'?>"> 	PreMark     </a>
						</div>
						<div class="col-sm-2 col-6  mt footer-links px-sm-0">
							<a href="<?php echo $base_url.'streetbond-150.php'?>">StreetBond </a>
							<a href="<?php echo $base_url.'streetbond-sr.php'?>">StreetBondSR   </a>
						</div>
						<div class="col-sm-2 col-6 mt footer-links px-sm-0 ">
							<a href="<?php echo $base_url.'duratherm.php'?>"> DuraTherm      </a>
							<a href="<?php echo $base_url.'durashield.php'?>" > 	DuraShield     </a>

						</div>
						<div class="col-sm-2 col-6 mt footer-links px-sm-0 ">
							<a href="<?php echo $base_url.'trafficpatterns.php'?>">TrafficPatterns   </a>
							<a href="<?php echo $base_url.'trafficpatterns-xd.php'?>">TrafficPatternsXD  </a>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<ul class="our-mission">
						<h3>OUR MISSION</h3>
						<p>With more than three decades of combined experience, we help make sure your project incorporates the right products, installed by qualified professionals on time and on budget.</p>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-7 footer-logo">
					<a href="<?php echo $base_url ?>"><img data-src="assets/img/logo_footer.png" class="lazy img-fluid" alt="image"></a>
				</div>
				<div class="col-lg-4 col-md-5 bot-links">
					<p> <?php echo date('Y'); ?> © | <a href="<?php echo $base_url.'privacy-policy.php'?>" > Privacy Policy</a> | <a href="<?php echo $base_url.'terms-of-service.php'?>">Terms of service</a>  | 🇨🇦    </p>

				</div>
				<div class="col-lg-5">
					<ul class="footer-icons">
						<li><a href="https://twitter.com/HUB_SS" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="https://www.facebook.com/HUBSurfaceSystems" target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a></li>
						<li><a href="https://www.instagram.com/hub_surface_systems/?hl=en" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
						<li>
							<a href="https://www.houzz.com/pro/hubss/hub-surface-systems" target="_blank">
								<img style="margin-bottom: 10px" class="lazy" data-src="assets/img/houzz_logo.png" alt="Houzz Logo">
							</a>
						</li>
						<li><a href="https://www.youtube.com/channel/UCcHUWv8BTes_fZ9BC_ohBpw" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
						<li><a href="https://www.linkedin.com/company/hub-surface-systems/" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="https://www.pinterest.ca/hubsurfacesystems/" target="_blank"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- FOOTER END -->

	<script type="text/javascript" src="assets/js/core/jquery.js"></script>
	<script type="text/javascript" src="assets/js/core/popper.js"></script>
	<!-- <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> -->
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-material-design.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jasny-bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.js"></script>
	<script type="text/javascript" src="assets/js/material-kit.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/owl.carousel.js"></script>
	<script type="text/javascript" src="assets/js/plugins/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/typed.min.js"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>

	<script type="text/javascript">
		//  -------------SAYHI FORM --------------------------------------------------------------------------------- 
		jQuery(function() {
			jQuery("#needs-validation").on("submit", function (event) {

			  	if (event.isDefaultPrevented()) {
			      	// handle the invalid form...
			      	formError();
			      	submitMSG(false, "Did you fill in the form properly?");
			  	}
			  	else {
			    	// everything looks good!
			      	event.preventDefault();
			      	submitForm();
			  	}
			});
		});

		function submitForm(){
		    // Initiate Variables With Form Content
		    var name = jQuery("#fname").val();
		    var email = jQuery("#email").val();
		    var message = jQuery("#message").val();
		    var subject = jQuery('#subject option:selected').val();

		    jQuery.ajax({
		        type: "POST",
		        url: "assets/php/form-process.php",
		        data: {
		            	name: name,
		             	email: email,
		              	message: message,
		              	msg_subject: subject,
		              	captcha: grecaptcha.getResponse()
		            },
		        	success : function(text){
		            	if (text == "success"){
		                	formSuccess();
		                	grecaptcha.reset();
		            }else{
		              	grecaptcha.reset();
		                submitMSG(false,text);
		            }
		        }
		    });
		}
		function formSuccess(){
		    jQuery("#needs-validation")[0].reset();
		    submitMSG2(true, "Thank you for contacting us!  We’ll get back to you ASAP");
		}

		function submitMSG2(valid, msg){
		  	$("#msgSubmit").text("");
		    $("#message").attr("placeholder",msg);
		}

		// ---------------------------------------REQUEST FORM-----------------------------------------------------
		jQuery(function() {
		jQuery("#request-form").on("submit", function (event) {
		    if (event.isDefaultPrevented()) {
		        // handle the invalid form...
		        formError();
		        submitMSG(false, "Did you fill in the form properly?");
		    }
		    else{
		         	// everything looks good!
		          	event.preventDefault();
		          	submitForm2();
		      	}
		  	});
		});

		function submitForm2(){
		    // Initiate Variables With Form Content
		    var name_2 = jQuery("#fname_2").val();
		    var email_2 = jQuery("#email_2").val();
		    var message_2 = jQuery("#message_2").val();
		    var company_2 = jQuery("#company_2").val();
			var title_2 = jQuery("#title_2").val();
		    var city_2 = jQuery("#city_2").val();
		    var phone_2 = jQuery("#phone_2").val();
		    
		    jQuery.ajax({
		        type: "POST",
		        url: "assets/php/form-process2.php",
		        data: {
					name_2: name_2,
					email_2: email_2,
					message_2: message_2,
					company_2: company_2,
					title_2: title_2,
					phone_2: phone_2,
					city_2: city_2,
		            captcha: grecaptcha.getResponse()
		            },
		        success : function(text){
		            if(text == "success"){
		                formSuccess2();
		               grecaptcha.reset();

		            }else {
		              	grecaptcha.reset();
		                submitMSG(false,text);
		            }
		        }
		    });
		}
		function formSuccess2(){
		    jQuery("#request-form")[0].reset();
		    submitMSG3(true, "Thank you for contacting us!  We’ll get back to you ASAP");
		}
		function submitMSG3(valid, msg){
		  $("#msgSubmit").text("");
		    $("#message_2").attr("placeholder",msg);
		}
		function submitMSG(valid, msg){
		    if(valid){
		        var msgClasses = " tada animated text-success";
		    } else {
		        var msgClasses = " text-danger";
		    }
		    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
		}
	</script>

	<!-- NAV LOGO SNIPPET -->
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
			    if ($(this).scrollTop() < 40){
			      	<?php  
			      		if( $specification_support == $currentpage || $product_guide  == $currentpage  ){

			      			echo '$(".navbar-brand img").attr("src","assets/img/nav-logo.png");';
			      		}
			      		elseif($home_page == $currentpage || $base_url == $currentpage){
			      			echo '$(".navbar-brand img").attr("src","assets/img/index-nav-logo.png");';

			      		}
			      		elseif($privacy_policy == $currentpage || $terms == $currentpage){
			      			echo '$(".navbar-brand img").attr("src","assets/img/logo-white-backfround.png");';
			      		}
			      		else{
		      				echo '$(".navbar-brand img").attr("src","assets/img/large-logo-_white.png");
		      				$(".navbar").addClass("nav-transparent");';
			      		}
			      	?>
			      	$(".navbar-brand").addClass("logo-simple");
			      	$(".navbar-brand").removeClass("logo-scroll");

			    }
			    else if($(window).scrollTop() > 40){
			    	<?php 
			    		if($privacy_policy == $currentpage || $terms == $currentpage){
			    			echo '$(".navbar-brand img").attr("src","assets/img/logo-white-backfround.png");';
			    		}
			    		else{
			    			echo '$(".navbar-brand img").attr("src" , "assets/img/HUB-logo_white.png");
			    			$(".navbar").removeClass("nav-transparent");';
			    		}
			    	?>
			    	$(".navbar-brand").removeClass("logo-simple");
			    	$(".navbar-brand").addClass("logo-scroll");
			    }
			});
		});
	</script>

	</body>
</html>
