<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" value="{{csrf_token()}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel </title>
  <base href="{{asset('')}}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
	<link rel="stylesheet" href="source/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/body_scroll.css">
	{{-- LOCATION --}}
	<link rel="stylesheet" href="source/assets/dest/css/location/ajax-progress.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/align.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/autocomplete-loading.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/fieldgroup.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/container-inline.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/clearfix.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/details.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/hidden.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/item-list.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/js.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/nowrap.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/position-container.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/progress.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/reset-appearance.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/resize.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/sticky-header.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/tabledrag.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/tablesort.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/tree-child.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/views.module.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/cafe.style.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/node.css" media="all">
	<link rel="stylesheet" href="source/assets/dest/css/location/custom.style.css" media="all">
</head>
<body>
	<div></div>

	@include('header')
	<div class="rev-slider">
	   @yield('content')
  </div>
  @include('footer')

	<!-- include js files -->
	<script src="source/assets/dest/js/jquery.js"></script>
	<script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="source/assets/dest/vendors/animo/Animo.js"></script>
	<script src="source/assets/dest/vendors/dug/dug.js"></script>
	<script src="source/assets/dest/js/scripts.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="source/assets/dest/js/waypoints.min.js"></script>
	<script src="source/assets/dest/js/wow.min.js"></script>
	<script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.3.7/jquery.jscroll.js"></script>
	<!--customjs-->
	<script src="source/assets/dest/js/custom2.js"></script>
	<script src="source/assets/dest/js/jscroll-paging.js"></script>
	<script src="source/assets/dest/js/cart.js"></script>
	<script src="source/assets/dest/js/autoSearch.js"></script>
	<script src="source/assets/dest/js/autoFill.js"></script>
	<script>
	$(document).ready(function($) {
		$(window).scroll(function(){
			if($(this).scrollTop()>250){
			$(".header-bottom").addClass('fixNav')
		}else {
				$(".header-bottom").removeClass('fixNav')
			}
		})
	})
	</script>
</body>
</html>
