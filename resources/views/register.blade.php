<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | cardeals.qa</title>

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


                <div class="container ">
                    <div class="row">
                        <div class="col-12">
                            <div class="vehica-login-register-wide-container ">

                                <div class="vehica-panel-login-register bg-transparent">

                                    <div class=" vh-100 w-100 d-flex justify-content-center align-items-center vehica-register p-0 pl-2 bg-transparent ">
                                        <div class="vehica-register__inner">
                                            <h2>Register</h2>
                                            <h3>Create new account today.</h3>
                                            <form action="/auth/register/store" method="POST">

                                                <div class="vehica-fields">
                                                    <div class="vehica-field">
                                                        <input id="name" name="name" type="text" placeholder="Username*" required>

                                                    </div>
                                                    <div class="vehica-field">
                                                        <input id="email" name="email" type="text" placeholder="Email*" required>

                                                    </div>
                                                    <div class="vehica-field">
                                                        <input id="phone" name="phone" type="text" placeholder="Phone">

                                                    </div>
                                                    <div class="vehica-field">
                                                        <input id="vehica-register-password" name="password" type="text" placeholder="Password*" required>
                                                    </div>
                                                    <div class="vehica-field">
                                                        <input id="vehica-register-password" name="confrm_password" type="text" placeholder="confirm password" required>
                                                    </div>
                                                </div>


                                                <button type="submit" class="bx-shadow vehica-button vehica-button--register vehica-button--with-progress-animation w-100 ">
                                                    <template>
                                                        <svg v-if="registerForm.inProgress" width="120" height="30" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg" fill="#fff">
                                                            <circle cx="15" cy="15" r="15">
                                                                <animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite" />
                                                                <animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite" />
                                                            </circle>
                                                            <circle cx="60" cy="15" r="9" fill-opacity="0.3">
                                                                <animate attributeName="r" from="9" to="9" begin="0s" dur="0.8s" values="9;15;9" calcMode="linear" repeatCount="indefinite" />
                                                                <animate attributeName="fill-opacity" from="0.5" to="0.5" begin="0s" dur="0.8s" values=".5;1;.5" calcMode="linear" repeatCount="indefinite" />
                                                            </circle>
                                                            <circle cx="105" cy="15" r="15">
                                                                <animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite" />
                                                                <animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite" />
                                                            </circle>
                                                        </svg>
                                                    </template>
                                                    <span>Register</span>
                                                </button>

                                                <div class="vehica-register__terms ">
                                                    <div class="vehica-checkbox text-center w-100">
                                                        <label for="checkbox_terms">
                                                            - or <a href="/auth/login">login</a>
                                                        </label>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>

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
    <script src="/assets/js/validation/register.js"></script>
</body>

</html>