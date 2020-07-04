
<style type="text/css">
	.contact-form{
		background-color: #FF7C19;
		padding:100px 0px; 
	}
	.contact-form .form label{
		color: #333333;
		font-size: 16px;
		letter-spacing: 1.26px;
		line-height: 19px;
		font-family: AvenirNextLTPro-Bold;
	}
	.form .inp-custom{
		height: 40px;
		border-radius: 3px;
		background-color: #f9f9f9!important;
		padding: 10px 15px;
		font-size: 16px;
		color: #333333;
		margin-bottom: 25px;
	}
	.form select.inp-custom{
		width: 420px;
	}
	.form textarea.inp-custom{
		min-height: 190px!important;
		padding-right: 15px;
		padding-top: 15px;
	}
	.form textarea.inp-custom::placeholder{
		font-size: 16px;
		color: #333333;
		letter-spacing: 1.13px;
	}
	input.btn-submit{
    border: 2px solid #FFFFFF;
    background: transparent;
    letter-spacing: 0.01px;
    width: 250px;
	border-radius: 50px;
    text-transform: inherit;
    transition: all .2s;
    margin-top: 22px;
    text-transform: capitalize;
	}
	.btn-submit:hover{
		background: #FFFFFF;
		color: #333333;
		border-color: #FFFFFF;
	}
	.form-control, .form-control, .is-focused .form-control{
		background: none;
	}
	.form-control:invalid{
		background: none;
	}

	span.select2-search.select2-search--dropdown{
		display: none
	}
	.select2-results__option{
	}
	.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b{
		    border-width: 0 6px 7px 6px;
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow b{
		border-width: 7px 6px 0 6px;
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow{
		top: 7px;
		right: 11px;
	}
	.subject-wrap{
		margin-bottom: 25px;
	}
	.select2-container--default .select2-selection--single .select2-selection__rendered{
		font-size: 16px;
		color: #333333;
		letter-spacing: 1.01px;
		line-height: 40px;
	}
	.select2-container--default .select2-selection--single{
		border-radius: 3px;
		height: 40px;
		border:none;
		background-color: #f9f9f9;
	}
	.select2.select2-container.select2-container--default{
		display: block!important;
	}
	@media(max-width: 575.98px){
		.contact-form{
	    padding: 80px 0px;
		}
		.form textarea.inp-custom{
			min-height: 200px!important;
		}
		.select2.select2-container.select2-container--default{
			width: 100%!important;
		}
	}

</style>

<!-- <div id="contact-us" class="sayhi-bg">
	<div class="container">
		<div class="sayhi-wrap text-center">
			<img src="assets/img/SAY-HI.png" class="img-fluid" alt="image">
		</div>
	</div>
</div> -->

<section class="contact-form">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form id="needs-validation" class="form mb-0">
					<label for="name">Name<sup>*</sup></label>
					<input type="text" id="fname" class="form-control inp-custom" required="true" name="name">

					<label for="email">Email<sup>*</sup></label>
					<input type="email" id="email" class="form-control inp-custom" required="true" name="email">

					<div class="subject-wrap">
						<label for="subject">Subject<sup>*</sup></label>
						<select class="inp-custom select-c form-control" id="subject" required="true" name="msg_subject">
							<option disabled="true" selected="true"></option>
							<option value="New Business Inquiry">New Business Inquiry</option>
							<option value="General Inquiry">General Inquiry</option>
							<option value="Media Inquiry">Media Inquiry</option>
							<option value="Lunch & Learn"> Lunch & Learn</option>

						</select>
					</div>
					<label for="message">Message<sup>*</sup></label>
					<textarea placeholder="" id="message" class="form-control inp-custom" required="true" name="message" ></textarea>
					<div class="g-recaptcha" data-sitekey="6LfJWp0UAAAAAHHbNWQe72MC6CMbByqCjnvo6aTV"></div>
					<div class="submit"><input type="submit" class="btn btn-submit" value="Submit"></div>
					<div id="msgSubmit" class=" hidden" style="margin-top:20px; color: #FFFFFF!important;"></div>
				</form>
			</div>
			<div class="col-md-4 form-aside">
				<h5>HUB SURFACE SYSTEMS (EAST)</h5>
				<p>(ON, QC, NB, NS, PEI, NFLD, NWT)</p>
				<p>430 Black Drive</p>
				<p>Milton, ON L9T 6S1 </p>
				<p><a href="mailto:doug.bain@hubss.com" target="_blank"> doug.bain@hubss.com</a></p>
				<p><a class="mt-1" href="tel:(416) 540-9287">(416) 540-9287</a></p>

				<h5>HUB SURFACE SYSTEMS (WEST)</h5>
				<p>(BC, AB, SK, MB, YK) </p>
				<p>4786 217A Street </p>
				<p>Langley, BC V3A 2N7 </p>
				<p><a href="mailto:cleve.stordy@hubss.com" target="_blank"> cleve.stordy@hubss.com </a></p>
				<p><a class="mt-1" href="tel:(604) 309-8212 ">(604) 309-8212 </a></p>

				<div class="lunch-img mt-5">
					<a href="<?php echo $base_url.'lnl.php'?>">
						<img src="assets/img/lunch&learn_logo.png" class="img-fluid" alt="image">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
