<?php
	$root_adjust="";
	$page_title="The Essential Swimming Tool";
	$page_description="Self-assess your swim strokes and make the necessary improvements in real-time with SwimMirrors—the only tool to help you enhance your swim technique.";
	$alt_tag="SwimMirror - The Essential Swimming Tool";
	$page_keywords="SwimMirrors, swim strokes, swim technique, swim training";
	include __DIR__."/includes/header.php";
?>
<style>
</style>
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F71766411945967" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F71766411945967" title="oEmbed Form">
</head>
<body>
  <?php include __DIR__."/includes/nav.php"; ?>

  <!-- HERO -->
  <div id="hero" class="text-center">
    <div class="container">
      <div class="col-sm-12">
        <h1>SwimMirror</h1>
        <h2>The Only Tool You Need to Enhance Your Swim Training</h2>
        <p>See the SwimMirror in action.</p>
        <a href="#swimmirror-video" class="btn-light"><i class="fa fa-play" aria-hidden="true"></i> Watch Now</a>
      </div>
    </div>
  </div>

	<div id="background-video">
	</div>

  <div id="about-SwimMirror" class="white-text text-center">
    <div class="container features-icon-section">
      <!-- Improve Instantly -->
      <div class="col-xs-12 col-sm-6 col-md-3 features-icons">
        <img class="img-responsive img-center" src="assets/imgs/swimmirror-improve-instantly.png" alt="SwimMirror - Improve Instantly">
        <h6>Improve Instantly</h6>
        <p>Improve your swim strokes in real-time by seeing your technique while you practice.</p>
      </div>
      <!-- Simple Setup -->
      <div class="col-xs-12 col-sm-6 col-md-3 features-icons">
        <img class="img-responsive img-center" src="assets/imgs/swimmirror-simple-setup.png" alt="SwimMirror - Improve Instantly">
        <h6>Simple Setup</h6>
        <p>No construction or extra attachments required. Simply put it down and start swimming.</p>
      </div>
      <!-- Long Lasting -->
      <div class="col-xs-12 col-sm-6 col-md-3 features-icons">
        <img class="img-responsive img-center" src="assets/imgs/swimmirror-long-lasting.png" alt="SwimMirror - Improve Instantly">
        <h6>Long Lasting</h6>
        <p>SwimMirrors are lightweight, corrosion-resistant and <br class="visible-lg">shatter-proof.</p>
      </div>
      <!-- Minimal Maintenance -->
      <div class="col-xs-12 col-sm-6 col-md-3 features-icons">
        <img class="img-responsive img-center" src="assets/imgs/swimmirror-minimal-maintenance.png" alt="SwimMirror - Improve Instantly">
        <h6>Minimal Maintenance</h6>
        <p>Just rinse and air dry for future use&mdash;no extra work is needed for SwimMirror upkeep.</p>
      </div>
    </div><!--/container.features-icon-section-->
		<img class="swimmirror-pool" src="assets/imgs/swimmirror-swimming-pool.png" alt="<?php echo $alt_tag ?>">
		<div class="container">
			<div class="col-sm-6" id="swimmirror-specs">
				<h3>SwimMirror Specs</h3>
				<div class="specs-table">
					<table class="table">
						<tbody>
							<tr><th scope="row">Size</th>
								<td>45.5" x 28" x 0.025"</td>
							</tr>
							<tr><th scope="row">Weight</th>
								<td id="hover-exterior">3 lbs</td>
							</tr>
							<tr><th scope="row">Material</th>
								<td id="hover-interior">High-Strength Anodized Aluminum</td>
							</tr>
							<tr><th scope="row">Shipping</th>
								<td id="hover-footprint">Free Ground Shipping</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
  </div><!--/#about-SwimMirror-->

	<!-- Assembly Video -->
	<div class="" id="swimmirror-video">
		<div class="container">
			<div class="col-md-6">
				<h3>No Assembly Required!</h3>
				<p>See how easy it is to use SwimMirror.</p>
				<a class="btn-light visible-md visible-lg" href="#buy-now" role="button">Improve Your Swim Stroke</a>
			</div>
			<div class="text-center play-btn visible-md visible-lg">
				<a href="#" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/TigN1QlVzGE?rel=0"><img class="play-btn" src="assets/imgs/play-btn.png" alt="<?php echo $alt_tag?>" type="svg"></a>
			</div>
			<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <div>
								<iframe width="100%" height="350" src="https://www.youtube.com/embed/TigN1QlVzGE?rel=0" frameborder="0" allowfullscreen></iframe>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<div id="assemble-video-mobile" class="visible-sm visible-xs">
			<div class="container">
				<iframe width="100%" height="350" src="https://www.youtube.com/embed/TigN1QlVzGE?rel=0" frameborder="0" allowfullscreen></iframe>
				<a class="btn-light visible-xs visible-sm" href="#buy-now" role="button">Improve Your Swim Stroke</a>
			</div>
		</div>
	</div>
	<!-- /Assembly Video -->

	<!-- SwimMirror Testimonials -->
	<div id="swimmirror-testimonials">
		<div class="container">
			<h3 class="text-center">SwimMirror Testimonials</h3>
			<div class="testimonial-container col-md-8 col-md-offset-2">
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active fade in" id="athletes">
						<img class="rowdy-gaines" src="assets/imgs/rowdy-gaines-olympic-swimmer-loves-swimmirror.png" alt="Rowdy Gaines, Three Time Olympic Gold Medalist, Loves SwimMirror">
						<p class="quote">I know firsthand how difficult it is to make adjustments to your swim stroke based solely off of a coach's advice. SwimMirror allows you to see your movements in real-time so you can improve your technique right on the spot.</p>
						<p class="cite text-right"><strong>Rowdy Gaines</strong><br>Three-Time Olympic Gold Medalist<br>International Swimming Hall of Fame Member</p>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="coaches">
						<img class="img-coaches" src="assets/imgs/swimmirror-testimonials-coaches.png" alt="Rowdy Gaines, Three Time Olympic Gold Medalist, Loves SwimMirror">
						<p class="quote">SwimMirrors are a great tool for swim coaches and swim instructors. They provide instant feedback to the swimmer while working on a variety of critical skills. They are also fun! Swimmers love them.</p>
						<p class="cite text-right"><strong>Southwest Aquatics Coach</strong><br>Orlando, FL</p>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="facilities">
						<img class="img-facilities" src="assets/imgs/swimmirror-testimonials-facilities.png" alt="Rowdy Gaines, Three Time Olympic Gold Medalist, Loves SwimMirror">
						<p class="quote">We are really getting great use out of SwimMirrors. They’re easy to setup and easy to store. Our swimmers love them.</p>
						<p class="cite text-right"><strong>Alan Pfau</strong><br>Director of Competitive Swimming<br>YMCA of Central Florida</p>
					</div>
				</div>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active left-tab"><a href="#athletes" aria-controls="athletes" role="tab" data-toggle="tab">Athletes</a></li>
					<li role="presentation" class="center-tab"><a href="#coaches" aria-controls="coaches" role="tab" data-toggle="tab">Coaches</a></li>
					<li role="presentation" class="right-tab"><a href="#facilities" aria-controls="facilities" role="tab" data-toggle="tab">Facilities</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /SwimMirror Testimonials -->

	<div id="buy-now">
		<div class="container">
			<div class="col-md-5 col-sm-12 buy-now-first-content">
				<h3>Buy Now</h3>
				<p>With SwimMirror, seeing really is believing.<br> Improve your swim technique today.</p>
				<p class="small-text">For 10 units or more, we offer custom quotes. <br>Use the form below to get started.</p>
			</div>
			<div class="col-md-4 col-xs-6 swimmirror-buybutton-img">
				<img class="img-responsive" src="assets/imgs/swimmirror-buynow.png" alt="<?php echo $alt_tag ?>">
			</div>
			<div class="col-md-3 col-xs-6">
				<img class="img-responsive" src="assets/imgs/swimmirror-logo.svg" alt="<?php echo $alt_tag ?>">
				<p class="price">$94.99</p>
				<div id='product-component-debc8f27a42'></div>
					<script type="text/javascript">
					/*<![CDATA[*/

					(function () {
					  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
					  if (window.ShopifyBuy) {
					    if (window.ShopifyBuy.UI) {
					      ShopifyBuyInit();
					    } else {
					      loadScript();
					    }
					  } else {
					    loadScript();
					  }

					  function loadScript() {
					    var script = document.createElement('script');
					    script.async = true;
					    script.src = scriptURL;
					    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
					    script.onload = ShopifyBuyInit;
					  }

					  function ShopifyBuyInit() {
					    var client = ShopifyBuy.buildClient({
					      domain: 'american-douglas-metals-metals-market.myshopify.com',
					      apiKey: '7d9a84f457e81ade6975bfd5b57ddd3f',
					      appId: '6',
					    });

					    ShopifyBuy.UI.onReady(client).then(function (ui) {
					      ui.createComponent('product', {
					        id: [5810224899],
					        node: document.getElementById('product-component-debc8f27a42'),
					        moneyFormat: '%24%7B%7Bamount%7D%7D',
					        options: {
					  "product": {
					    "variantId": "all",
					    "width": "100%",
					    "contents": {
					      "img": false,
					      "imgWithCarousel": false,
					      "title": false,
					      "variantTitle": false,
					      "price": false,
					      "description": false,
					      "buttonWithQuantity": false,
					      "quantity": false
					    },
					    "text": {
					      "button": "Buy Now"
					    },
					    "styles": {
					      "product": {
					        "text-align": "left",
					        "@media (min-width: 601px)": {
					          "max-width": "100%",
					          "margin-left": "0",
					          "margin-bottom": "50px"
					        }
					      },
					      "button": {
					        "background-color": "#0fa79d",
					        "font-size": "20px",
									"font-weight": "bold",
									"width": "100%",
					        "padding-top": "17px",
					        "padding-bottom": "17px",
					        "padding-left": "40px",
					        "padding-right": "40px",
					        ":hover": {
					          "background-color": "#0e968d"
					        },
					        "border-radius": "100px",
					        ":focus": {
					          "background-color": "#0e968d"
					        }
					      },
					      "quantityInput": {
					        "font-size": "18px",
					        "padding-top": "17px",
					        "padding-bottom": "17px"
					      },
					      "compareAt": {
					        "font-size": "12px"
					      },
								"buttonWrapper": {
									"margin-top": "0px"
								}
					    }
					  },
					  "cart": {
					    "contents": {
					      "button": true
					    },
					    "styles": {
					      "button": {
					        "background-color": "#0fa79d",
					        "font-size": "18px",
					        "padding-top": "17px",
					        "padding-bottom": "17px",
					        ":hover": {
					          "background-color": "#0e968d"
					        },
					        "border-radius": "100px",
					        ":focus": {
					          "background-color": "#0e968d"
					        }
					      },
					      "footer": {
					        "background-color": "#ffffff"
					      }
					    }
					  },
					  "modalProduct": {
					    "contents": {
					      "img": false,
					      "imgWithCarousel": true,
					      "variantTitle": false,
					      "buttonWithQuantity": true,
					      "button": false,
					      "quantity": false
					    },
					    "styles": {
					      "product": {
					        "@media (min-width: 601px)": {
					          "max-width": "100%",
					          "margin-left": "0px",
					          "margin-bottom": "0px"
					        }
					      },
					      "button": {
					        "background-color": "#0fa79d",
					        "font-size": "18px",
					        "padding-top": "17px",
					        "padding-bottom": "17px",
					        "padding-left": "40px",
					        "padding-right": "40px",
					        ":hover": {
					          "background-color": "#0e968d"
					        },
					        "border-radius": "100px",
					        ":focus": {
					          "background-color": "#0e968d"
					        }
					      },
					      "quantityInput": {
					        "font-size": "18px",
					        "padding-top": "17px",
					        "padding-bottom": "17px"
					      }
					    }
					  },
					  "toggle": {
					    "styles": {
					      "toggle": {
					        "background-color": "#0fa79d",
					        ":hover": {
					          "background-color": "#0e968d"
					        },
					        ":focus": {
					          "background-color": "#0e968d"
					        }
					      },
					      "count": {
					        "font-size": "18px"
					      }
					    }
					  },
					  "productSet": {
					    "styles": {
					      "products": {
					        "@media (min-width: 601px)": {
					          "margin-left": "-20px"
					        }
					      }
					    }
					  }
					}
					      });
					    });
					  }
					})();
					/*]]>*/
					</script>
			</div>
		</div>
	</div>

	<div id="contact-us">
		<div class="container">
			<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
				<h3 class="text-center">Contact Us</h3>
				<p class="white-text">Have a question or want to know more about SwimMirror?<br> Give us a call at 800-432-3423 or fill out this form and we'll get in touch with you right away.</p>
				<form class="jotform-form contact-us-form white-text text-left" action="https://submit.jotformpro.com/submit/71766411945967/" method="post" name="form_71766411945967" id="71766411945967" accept-charset="utf-8">
					<div class="form-group">
						<div class="">
							<label for="input_3">Name*</label>
							<input type="text" id="input_3" name="q3_name" data-type="input-textbox" class="form-textbox validate[required] form-control" value="" data-component="textbox" required/>
						</div>
					</div>
					<div class="clear"></div>

					<div class="form-group">
						<div class="">
							<label for="input_4">Email*</label>
							<input type="email" id="input_4" name="q4_email" class="form-control form-textbox validate[required, Email]" value="" data-component="email" required/>
						</div>
					</div>
					<div class="clear"></div>

					<div class="form-group">
						<div class="">
							<label for="input_6">Phone Number</label>
							<input type="tel" id="input_6" name="q6_phoneNumber" data-type="input-textbox" class="form-control form-textbox validate[Numeric]" value="" data-component="textbox" />
						</div>
					</div>
					<div class="form-group req">
						<div class="">
							<label for="input_7">Website</label>
							<input type="text" id="input_7" name="q7_website" data-type="input-textbox" class="form-textbox" value="" data-component="textbox" />
						</div>
					</div>
					<div class="clear"></div>
					<button id="input_2" type="submit" class="btn btn-default submit-btn col-xs-12 col-sm-4 col-sm-offset-4 form-submit-button" data-component="button">
            Submit
          </button>
					<script>
				  JotForm.showJotFormPowered = "0";
				  </script>
				  <input type="hidden" id="simple_spc" name="simple_spc" value="71766411945967" />
				  <script type="text/javascript">
				  document.getElementById("si" + "mple" + "_spc").value = "71766411945967-71766411945967";
				  </script>
				</form>
			</div>
		</div>
	</div>




<?php include __DIR__."/includes/footer.php" ?>

<script type="text/javascript">
	$(document).on('focus active', 'input',function(){
		$('label[for='+$(this).attr('id')+']').addClass('active-label');
	});
	$(document).on('blur', 'input',function(){
		$('label[for='+$(this).attr('id')+']').removeClass('active-label');
	});
	$(document).ready(function(){
      $(".req").hide();
  });
</script>
<script type="text/javascript">

var emptyfield = document.getElementsByName("q7_website");

var formz = document.getElementsByTagName("form");

formz[0].onsubmit = function(){

if (emptyfield[0].value != ""){

  alert ("Spammers alert!"); //trigger alert

  console.log("form cannot be sent"); //print log

  return false; //unsubmit form

}

else{

return true; //submit form

}

}

</script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.793" type="text/javascript"></script>

	 <!-- <script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script> -->
</body>
</html>
