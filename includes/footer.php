<!-- start footer -->
<footer>
	<div class="container">
		<div class="col-md-12 text-center">
			<p>&copy; SwimMirror 2017 | We value your <a href="https://americandouglasmetals.com/privacy-policy/" target="_blank">privacy</a>. | View our <a href="https://americandouglasmetals.com/refunds-returns/" target="_blank">Refunds &amp; Returns Policy</a>. | Website by <a href="https://dreamfactoryagency.com/" target="_blank">Dream Factory</a>.</p>
		</div>
		<!-- <div class="col-md-4 social-media-icons">
			<a href="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
      <a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
      <a href="" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</div> -->
	</div>
</footer>

<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
	// smooth scrolling
	$(function() {
	  $('a[href*="#"]:not([data-toggle="tab"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
</script>
