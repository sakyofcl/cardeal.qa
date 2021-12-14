<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thanks For Joining... | cardeals.qa</title>

    @include('/component/link/css')

    <!-- IMAGE LAZY LOADER -->
    <script type="text/javascript">
        window.lazySizesConfig = window.lazySizesConfig || {};
        window.lazySizesConfig.loadMode = 1
        window.lazySizesConfig.init = 0
    </script>
    <script type="text/javascript" src="/assets/js/js-lazysizes.min.js"></script>


</head>


<body class="page-template-default page page-id-12772 wp-custom-logo vehica-version-1.0.58 vehica-menu-sticky elementor-default elementor-kit-16219 elementor-page elementor-page-12772">
    <div data-elementor-type="wp-post" data-elementor-id="12599" class="elementor elementor-12599" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">

                <!-- nav bar area -->
                @include('/component/nav')


                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center" style="height: 600px;">
                            <div class="card w-100 border-0 thanks-cart">
                                <div class="card-header bg-transparent d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success mr-2"></i>
                                    <h3> A verification link has been send to your email account </h3>
                                </div>
                                <div class="card-body">

                                    <p class="card-text text-left">

                                        Please click on the link that has just been sent to your email account
                                        </br>
                                        to verify your email and continue the registration process.
                                    </p>
                                    <a href="/auth/login" class="btn btn-danger mt-3 border">Login</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <!------------[ Footer Area ]----------->
                @include('/component/footer')
                <!---- End ---->
            </div>
        </div>
    </div>




    @include('/component/link/js')
</body>

</html>