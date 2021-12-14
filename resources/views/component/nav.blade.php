<section class="elementor-section elementor-top-section elementor-element elementor-element-97f8a3c elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="97f8a3c" data-element_type="section" data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-73bbc28" data-id="73bbc28" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated p-0">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-c5bb9ce elementor-widget elementor-widget-vehica_menu_general_widget" data-id="c5bb9ce" data-element_type="widget" data-widget_type="vehica_menu_general_widget.default">
                            <div class="elementor-widget-container">
                                <header class="vehica-app vehica-header vehica-header--with-submit-button vehica-header--with-dashboard-link">
                                    <div class="vehica-menu__transparent-wrapper">
                                        <div class="vehica-menu__transparent-container" style="background-color:#000;">



                                            <div class="vehica-hide-mobile vehica-hide-tablet">
                                                <div class="vehica-menu__desktop " style="background-color: #0f141e;">
                                                    <div class="vehica-menu__wrapper" style="background-color: #0f141e;">
                                                        <div class="vehica-menu__left">
                                                            <div class="vehica-logo">
                                                                <a href="/" >
                                                                    <img src="/assets/image/favicone/logo.png" >
                                                                </a>
                                                            </div>
                                                            <div class="vehica-logo vehica-logo--sticky">
                                                                <a href="/" >
                                                                    <img src="/assets/image/favicone/logo.png" >
                                                                </a>
                                                            </div>
                                                            <div class="vehica-menu__container">
                                                                <div class="vehica-menu-hover"></div>
                                                                <div id="vehica-menu" class="vehica-menu">

                                                                    <div id="vehica-menu-element-menu-item-1-18064" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent  menu-item-18064 vehica-menu-item-depth-0">
                                                                        <a href="/" title="Home" class="vehica-menu__link root-link">
                                                                            Home
                                                                        </a>
                                                                    </div>

                                                                    <div id="vehica-menu-element-menu-item-1-17861" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17861 vehica-menu-item-depth-0">
                                                                        <a href="/car" title="More" class="vehica-menu__link root-link">
                                                                            Cars
                                                                        </a>
                                                                        <div class="vehica-submenu vehica-submenu--level-0">

                                                                            @if(Session::has('brand'))
                                                                            @foreach(Session::get('brand') as $navItem)
                                                                            <div id="vehica-menu-element-menu-item-1-16523" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16523 vehica-menu-item-depth-1">
                                                                                <a href="/search?brand={{$navItem->brand_id}}" title="Main Features" class="vehica-menu__link text-capitalize">
                                                                                    {{$navItem->brand_name}}
                                                                                </a>

                                                                                <div class="vehica-submenu vehica-submenu--level-1">
                                                                                    @if(Session::has('model'))
                                                                                    @foreach(Session::get('model') as $navItemModel)
                                                                                    @if( $navItem->brand_id== $navItemModel->brand_id)
                                                                                    <div id="vehica-menu-element-menu-item-1-16526" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16526 vehica-menu-item-depth-2">
                                                                                        <a href="/search?brand={{$navItem->brand_id}}&model={{$navItemModel->model_id}}" title="Search Form" class="vehica-menu__link text-capitalize">
                                                                                            {{$navItemModel->model_name}}
                                                                                        </a>
                                                                                    </div>
                                                                                    @endif
                                                                                    @endforeach
                                                                                    @endif

                                                                                </div>

                                                                            </div>
                                                                            @endforeach
                                                                            @endif


                                                                        </div>
                                                                    </div>

                                                                    <div id="vehica-menu-element-menu-item-1-18064" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent  menu-item-18064 vehica-menu-item-depth-0">
                                                                        <a href="/blog" title="Blog" class="vehica-menu__link root-link">
                                                                            Blog
                                                                        </a>
                                                                    </div>


                                                                    

                                                                    <div id="vehica-menu-element-menu-item-1-11761" class="menu-item menu-item-type-post_type_archive menu-item-object-vehica_car menu-item-has-children menu-item-11761 vehica-menu-item-depth-0">
                                                                        <a href="search.html" title="Search" class="vehica-menu__link">
                                                                            Search </a>
                                                                        <div class="vehica-submenu vehica-submenu--level-0">
                                                                            <div id="vehica-menu-element-menu-item-1-18298" class="menu-item menu-item-type-post_type_archive menu-item-object-vehica_car menu-item-18298 vehica-menu-item-depth-1">
                                                                                <a href="search.html" title="Classic" class="vehica-menu__link">
                                                                                    Classic </a>
                                                                            </div>
                                                                            <div id="vehica-menu-element-menu-item-1-18296" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18296 vehica-menu-item-depth-1">
                                                                                <a href="map-search.html" title="Map" class="vehica-menu__link">
                                                                                    Map </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vehica-menu__sticky-submit">
                                                            <div class="vehica-top-bar__element vehica-top-bar__element--panel">
                                                                <div class="vehica-menu-desktop-login-register-link">
                                                                    <span class="vehica-menu-desktop-login-register-link__user-icon mr-1">
                                                                        @if(session()->has('signature'))
                                                                        <i class="far fa-user"></i>

                                                                        @else
                                                                        <i class="fas fa-sign-in-alt"></i>
                                                                        @endif
                                                                    </span>
                                                                    <div class="vehica-menu-item-depth-0 mr-4 pr-3">
                                                                        @if(session()->has('signature'))
                                                                        <a href="/user/profile" class="root-link">
                                                                            <span class="vehica-menu-desktop-login-register-link__login-text vehica-menu-item-depth-0">
                                                                                Profile
                                                                            </span>
                                                                        </a>
                                                                        @else
                                                                        <a href="/auth/login" class="root-link">

                                                                            <span class="vehica-menu-desktop-login-register-link__login-text vehica-menu-item-depth-0">
                                                                                Login / Register
                                                                            </span>
                                                                        </a>
                                                                        @endif
                                                                    </div>
                                                                   


                                                                    <div class="vehica-menu-item-depth-0">
                                                                        @if(session()->has('signature'))
                                                                        <a href="/auth/user/logout" class="root-link">
                                                                            <span class="vehica-menu-desktop-login-register-link__user-icon mr-1">

                                                                                <i class="fas fa-sign-out-alt"></i>

                                                                            </span>
                                                                            <span class="vehica-menu-desktop-login-register-link__register-text vehica-menu-item-depth-0">
                                                                                Logout
                                                                            </span>
                                                                        </a>
                                                                        @endif

                                                                    </div>



                                                                </div>
                                                            </div>

                                                            @if(session()->has('signature'))
                                                            @if(session()->has('verified'))
                                                            @if(session()->get('verified')=="1")
                                                            <a class="vehica-button vehica-button--menu-submit root-link" href="/car/add">
                                                                <span class="vehica-menu-item-depth-0">
                                                                    <i class="fas fa-plus"></i>
                                                                    <span>Add Car</span>
                                                                </span>
                                                            </a>
                                                            @elseif(session()->get('verified')=="0")
                                                            <a class="vehica-button vehica-button--menu-submit root-link" href="/auth/user/unverified">
                                                                <span class="vehica-menu-item-depth-0">
                                                                    <i class="fas fa-plus"></i>
                                                                    <span>Add Car</span>
                                                                </span>
                                                            </a>


                                                            @endif
                                                            @endif
                                                            @else
                                                            <a class="vehica-button vehica-button--menu-submit root-link" href="/auth/login">
                                                                <span class="vehica-menu-item-depth-0">
                                                                    <i class="fas fa-plus"></i>
                                                                    <span>Add Car</span>
                                                                </span>
                                                            </a>
                                                            @endif


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="vehica-hide-desktop">
                                                <div class="vehica-mobile-menu__wrapper vehica-hide-desktop">

                                                    <!-- Mobile nav -->
                                                    <div class="vehica-mobile-menu__hamburger">
                                                        <div>

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 28 21" class="vehica-menu-icon" id="mobile-nav-icon">
                                                                <g id="vehica-menu-svg" transform="translate(-11925 99)">
                                                                    <rect id="Op_component_1" data-name="Op component 1" width="28" height="4.2" rx="1.5" transform="translate(11925 -99)" fill="#ff4605"></rect>
                                                                    <rect id="Op_component_2" data-name="Op component 2" width="19.6" height="4.2" rx="1.5" transform="translate(11925 -90.6)" fill="#ff4605"></rect>
                                                                    <rect id="Op_component_3" data-name="Op component 3" width="14" height="4.2" rx="1.5" transform="translate(11925 -82.2)" fill="#ff4605"></rect>
                                                                </g>
                                                            </svg>

                                                            <div class="vehica-mobile-menu__open" id="mobile-nav-container">
                                                                <div class="vehica-mobile-menu__open__content">


                                                                    <div class="vehica-mobile-menu__open__top">

                                                                        <div class="vehica-mobile-menu__open__top__submit-button">

                                                                            @if(session()->has('signature'))
                                                                                @if(session()->has('verified'))
                                                                                    @if(session()->get('verified')=="1")
                                                                                        <a class="vehica-button" href="/car/add">
                                                                                            <span class="vehica-menu-item-depth-0">
                                                                                                <i class="fas fa-plus"></i>
                                                                                                <span>Add Car</span>
                                                                                            </span>
                                                                                        </a>
                                                                                    @elseif(session()->get('verified')=="0")
                                                                                        <a class="vehica-button" href="/auth/user/unverified">
                                                                                            <span class="vehica-menu-item-depth-0">
                                                                                                <i class="fas fa-plus"></i>
                                                                                                <span>Add Car</span>
                                                                                            </span>
                                                                                        </a>
                                                                                    @endif
                                                                                @endif
                                                                            @else
                                                                                <a class="vehica-button" href="/auth/login">
                                                                                    <span class="vehica-menu-item-depth-0">
                                                                                        <i class="fas fa-plus"></i>
                                                                                        <span>Add Car</span>
                                                                                    </span>
                                                                                </a>
                                                                            @endif

                                                                        </div> 

                                                                        <div class="vehica-mobile-menu__open__top__x">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.124" height="21.636" viewBox="0 0 20.124 21.636" id="mobile-nav-close-icon">
                                                                                <g id="close" transform="translate(-11872.422 99.636)">
                                                                                    <path id="Path_19" data-name="Path 19" d="M20.163-1.122a2.038,2.038,0,0,1,.61,1.388A1.989,1.989,0,0,1,20.05,1.79a2.4,2.4,0,0,1-1.653.649,2.116,2.116,0,0,1-1.637-.754l-6.034-6.94-6.1,6.94a2.18,2.18,0,0,1-1.637.754A2.364,2.364,0,0,1,1.37,1.79,1.989,1.989,0,0,1,.648.266a2.02,2.02,0,0,1,.578-1.388l6.58-7.363L1.45-15.636a2.038,2.038,0,0,1-.61-1.388,1.989,1.989,0,0,1,.722-1.524A2.364,2.364,0,0,1,3.184-19.2a2.177,2.177,0,0,1,1.669.785l5.874,6.669,5.809-6.669A2.177,2.177,0,0,1,18.2-19.2a2.364,2.364,0,0,1,1.621.649,1.989,1.989,0,0,1,.722,1.524,2.02,2.02,0,0,1-.578,1.388L13.615-8.485Z" transform="translate(11871.773 -80.439)" fill="#ff4605"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </div>

                                                                    </div>

                                                                    <div class="vehica-mobile-menu__nav">
                                                                        <div class="vehica-menu">


                                                                            <div class="menu-item d-flex justify-content-between align-items-center">
                                                                                
                                                                                <a href="/" title="Home" class="vehica-menu__link">Home</a>
                                                                                <i class="fas fa-chevron-right text-white pr-2" style="font-size:20px;"></i>
                                                                            </div>
                                                                            
                                                                            <div class="menu-item d-flex justify-content-between align-items-center">
                                                                                <a href="/car" title="Home" class="vehica-menu__link">Cars</a>
                                                                                <i class="fas fa-chevron-right text-white pr-2" style="font-size:20px;"></i>
                                                                            </div>
                                                                          
                                                                            <div class="menu-item d-flex justify-content-between align-items-center">
                                                                                <a href="/auth/login" title="Home" class="vehica-menu__link">Login / Register</a>
                                                                                <i class="fas fa-chevron-right text-white pr-2" style="font-size:20px;"></i>
                                                                            </div>
                                                                            
                                                                            
                                                                        </div>
                                                                    </div>

                                                                    

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Nav -->

                                                    <!-- Mobile Logo -->
                                                    <div class="vehica-mobile-menu__logo">
                                                        <div class="vehica-logo">
                                                            <a href="/">
                                                                <img src="/assets/image/favicone/logo.png">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- End Logo -->

                                                    <!-- Profile Logo -->
                                                    <div class="vehica-mobile-menu__login">
                                                        <a href="/user/profile" style="font-size:20px;">
                                                            <i class="fas fa-user"></i>
                                                        </a>
                                                    </div>
                                                    <!-- End Profile -->


                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>