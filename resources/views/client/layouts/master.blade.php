<!DOCTYPE html>
<html lang="en">
    @include('client.layouts.head')
	<body>

		<!-- Start preloader -->
		<div id="preloader"></div>
		<!-- End preloader -->

		<!-- Search Screen start -->
	@include('client.layouts.top')
    @include('client.layouts.menu')
    <div class="main" id="main">

        @yield('title')
        @yield('content')

    </div>
    @include('client.layouts.foot')
    @include('client.layouts.js')
    <script>
			/* ------------ Newslater-popup JS Start ------------- */
				/*$(window).on('load', function(){
					setTimeout(function(){
						mfp = $.magnificPopup.instance;
						if(!mfp.isOpen) {
						    jQuery.magnificPopup.open({
						    	items: {src: '#newslater-popup'},type: 'inline'
						    }, 0);
						}
					},10000)
				});
		    /* ------------ Newslater-popup JS End ------------- */
		</script>
	</body>

</html>
