<!-- Load  magnificPOPUP -->
<link rel="stylesheet" href="assets/css/magnific-popup.css" />
<link rel="stylesheet" href="assets/css/portfolio.css" />



<!-- <script src="js/jquery.js" type="text/javascript"></script> -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
 $(document).ready(function() {



	$('.image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});

});
    </script>
<!-- ENDLoad  magnificPOPUP -->
