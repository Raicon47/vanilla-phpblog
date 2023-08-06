<footer class="p-5 mt-5 text-light bg-dark shadow">
	<div class="container">
		<div class="row">

<div class="col">
<img src="<?php echo BASE_URL . "/assets/images/tangul.png" ?>" height="60" style="border-radius:50%;" alt="">
	<article class="mt-4">
	<h5 class="text-white">Contact Us</h5>
	<small>Tangul@gmail.com</small> <br>
	<small>+2348140005666</small>
	</article>
</div>

<div class="col">
    <ul>
		<h5 class="text-primary">Programs</h5>
	   <li id="footer-item"><a href="#0" class="text-white">Blog Posts</a></li>
	   <li id="footer-item"><a href="#0" class="text-white">Privacy Policy</a></li>
	   <li id="footer-item"><a href="https://dashboard.flutterwave.com/donate/7gr9ieozo8jr" target="_blank" class="text-white">Donate</a></li>
	</ul>

	<ul>
	<h5 class="text-primary">Documentation</h5>
	   <li id="footer-item"><a href="#0" class="text-white">Information</a></li>
	   <li id="footer-item"><a href="#0" class="text-white">Education</a></li>
	   <li id="footer-item"><a href="#0" class="text-white">Contributors</a></li>
	</ul>
</div>

<div class="col">
   
</div>


<div class="col">

<div class="container socials wow pulse" data-wow-duration="2s" data-wow-delay="10ms">
      <h6 class="text-white">FOLLOW US</h6>
      <a href="#0" target="_blank" class="mr-2 text-white">
        <i class="fab fab-top fa-facebook shadow"></i>
      </a>
      <a href="#0" target="_blank" class="mr-2 text-white">
        <i class="fab fab-top fa-twitter shadow"></i>
      </a>
      <a href="#0" target="_blank" class="mr-2 text-white">
        <i class="fab fab-top fa-instagram shadow"></i>
      </a>
      <a href="#0" target="_blank" class="mr-2 text-white">
        <i class="fab fab-top fa-youtube shadow"></i>
      </a>
    </div>
	
	 <!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup" class="p-4 tex-light bg-dark">
<form action="https://cypriandev.us18.list-manage.com/subscribe/post?u=7a72137ef724c0663a1d79e41&amp;id=299911fc26" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="mc-field-group">
	<label for="mce-EMAIL" class="text-warning">Subscribe to our newsletter</label>
	<input type="email" value="" placeholder="enter email" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7a72137ef724c0663a1d79e41_299911fc26" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" class="btn btn-outline-light mt-2 btn-lg" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
</div>


		</div>
	</div>

	<hr class="bg-light">

	<p class="text-center copyright">
		&copyAll Rights Reserved 2020 | <a href="#0">Privacy Policy</a> |
		 <a href="#0">Term of use</a> | Property of Isell-Africa Digital Services
	</p>
</footer>




<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/smooth-scroll.js"></script>
<script src="assets/js/ckeditor.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://checkout.flutterwave.com/v3.js"></script>
</body>
</html>
<script>
    function makePayment() {
      FlutterwaveCheckout({
        public_key: "FLWPUBK-a91aead1d7b16c47137afdc3409b1af1-X",
        tx_ref: "hooli-tx-1920bbtyt",
        amount: 1000,
        currency: "NGN",
        country: "NG",
        payment_options: "card, mobilemoneyghana, ussd",
        redirect_url: // specified redirect URL
          "https://my-flutterwave-api-test.netlify.app/",
        meta: {
          consumer_id: 23,
          consumer_mac: "92a3-912ba-1192a",
        },
        customer: {
          email: "user@gmail.com",
          phone_number: "08102909304",
          name: "yemi desola",
        },
        callback: function (data) {
          console.log(data);
        },
        onclose: function() {
          // close modal
        },
        customizations: {
          title: "",
          description: "Payment for items in cart",
          logo: "https://assets.piedpiper.com/logo.png",
        },
      });
    }
  </script>
<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>
</body>
</html>
<script>
    $(window).on("load",function(){
      $(".loader-wrapper").fadeOut("slow");
    });
</script>