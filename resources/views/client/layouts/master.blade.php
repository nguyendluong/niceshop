<!DOCTYPE html>
<html lang="en">
@include('client.layouts.head')

<body>

    <!-- Start preloader -->
    <!-- <div id="preloader"></div> -->
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
    @yield('js')
    @yield('css')
    @yield('js')
    <script src="/js/app.js"></script>
    <script>
        $("#loginForm").submit(function(e) {
            e.preventDefault();
            var payload = window.getFormData($(this));
            axios
                .post('/login', payload)
                .then((res) => {
                    if(res.data.status == 1) {
                        toastr.success("Đã login thành công!");
                        window.location.href = "/";
                    } else if(res.data.status == 2) {
                        toastr.warning("Tài khoản chưa kích hoạt!");
                    } else {
                        toastr.error("Đăng nhập thất bại");
                    }
                })
                .catch((res) => {
                    var listError = res.response.data.errors;
                    $.each(listError, function(key, value) {
                        toastr.error(value[0]);
                    });
                });
        });

        $("#registerForm").submit(function(e) {
                e.preventDefault();
                var payload = window.getFormData($(this));
                console.log(payload);
                axios
                    .post('/register', payload)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success("Đã tạo tài khoản thành công!");
                            $("#registerForm").hide();
                            $("#loginForm").show();
                        }
                    })
                    .catch((res) => {
                        var listError = res.response.data.errors;
                        $.each(listError, function(key, value) {
                            toastr.error(value[0]);
                        });
                    });
            });

        // $(".addToCart").click(function(e) {
        //     var id_san_pham = $(this).data('id');
        //     axios
        //         .get('/client/add-to-cart/' + id_san_pham)
        //         .then((res) => {
        //             if(res.data.status) {
        //                 toastr.success(res.data.message);
        //             } else {
        //                 toastr.error(res.data.message);
        //             }
        //         });
        // });
    </script>
</body>

</html>
