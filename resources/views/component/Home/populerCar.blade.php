<section class="elementor-section elementor-top-section elementor-element elementor-element-3f339b60 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3f339b60" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5723253e" data-id="5723253e" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-7bb7a48f elementor-widget elementor-widget-spacer" data-id="7bb7a48f" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2a210ddd elementor-widget elementor-widget-vehica_car_tabs_carousel_general_widget" data-id="2a210ddd" data-element_type="widget" data-widget_type="vehica_car_tabs_carousel_general_widget.default">
                            <div class="elementor-widget-container">
                                <div class="vehica-app vehica-706809309">
                                    <vehica-car-tabs widget-id="2a210ddd" :tabs="[{&quot;id&quot;:2339,&quot;key&quot;:&quot;vehica_2339&quot;,&quot;name&quot;:&quot;Audi&quot;,&quot;slug&quot;:&quot;audi&quot;,&quot;link&quot;:&quot;https:\/\/demo.vehica.com\/search\/audi\/?&quot;,&quot;postsNumber&quot;:14,&quot;type&quot;:&quot;vehica_term&quot;,&quot;parentTerm&quot;:false,&quot;carsEndpoint&quot;:&quot;https:\/\/demo.vehica.com\/wp-json\/vehica\/v1\/cars?make=audi&quot;,&quot;taxonomy&quot;:&quot;make&quot;,&quot;taxonomyKey&quot;:&quot;vehica_6659&quot;},{&quot;id&quot;:2341,&quot;key&quot;:&quot;vehica_2341&quot;,&quot;name&quot;:&quot;BMW&quot;,&quot;slug&quot;:&quot;bmw&quot;,&quot;link&quot;:&quot;https:\/\/demo.vehica.com\/search\/bmw\/?&quot;,&quot;postsNumber&quot;:11,&quot;type&quot;:&quot;vehica_term&quot;,&quot;parentTerm&quot;:false,&quot;carsEndpoint&quot;:&quot;https:\/\/demo.vehica.com\/wp-json\/vehica\/v1\/cars?make=bmw&quot;,&quot;taxonomy&quot;:&quot;make&quot;,&quot;taxonomyKey&quot;:&quot;vehica_6659&quot;},{&quot;id&quot;:2350,&quot;key&quot;:&quot;vehica_2350&quot;,&quot;name&quot;:&quot;Cadillac&quot;,&quot;slug&quot;:&quot;cadillac&quot;,&quot;link&quot;:&quot;https:\/\/demo.vehica.com\/search\/cadillac\/?&quot;,&quot;postsNumber&quot;:13,&quot;type&quot;:&quot;vehica_term&quot;,&quot;parentTerm&quot;:false,&quot;carsEndpoint&quot;:&quot;https:\/\/demo.vehica.com\/wp-json\/vehica\/v1\/cars?make=cadillac&quot;,&quot;taxonomy&quot;:&quot;make&quot;,&quot;taxonomyKey&quot;:&quot;vehica_6659&quot;},{&quot;id&quot;:2333,&quot;key&quot;:&quot;vehica_2333&quot;,&quot;name&quot;:&quot;Ferrari&quot;,&quot;slug&quot;:&quot;ferrari&quot;,&quot;link&quot;:&quot;https:\/\/demo.vehica.com\/search\/ferrari\/?&quot;,&quot;postsNumber&quot;:12,&quot;type&quot;:&quot;vehica_term&quot;,&quot;parentTerm&quot;:false,&quot;carsEndpoint&quot;:&quot;https:\/\/demo.vehica.com\/wp-json\/vehica\/v1\/cars?make=ferrari&quot;,&quot;taxonomy&quot;:&quot;make&quot;,&quot;taxonomyKey&quot;:&quot;vehica_6659&quot;}]" :featured="false" :card-config="{&quot;type&quot;:&quot;vehica_card_v1&quot;,&quot;showLabels&quot;:true}" request-url="https://demo.vehica.com/wp-admin/admin-ajax.php?action=vehica_car_carousel" :limit="12" sort-by="date" sort-by-rewrite="sort-by" content-class="vehica-swiper-wrapper">
                                        <div slot-scope="carTabs" class="vehica-car-tabs-carousel vehica-car-tabs-carousel__arrows-inside" :class="'vehica-carousel-v1--cars-' + carTabs.viewAllCount">
                                            <div class="vehica-tabs-top-v2">
                                                <h3 class="vehica-tabs-top-v2__heading">
                                                    Popular Cars </h3>
                                                <div class="vehica-tabs-top-v2__tabs">
                                                    <div v-dragscroll.pass="true" class="vehica-tabs-wrapper">
                                                        <div class="vehica-tabs">
                                                            <div class="vehica-tab vehica-tab--big vehica-tab--bg-white" :class="{'vehica-tab--active': carTabs.isActive('vehica_2339')}" @click="carTabs.setTab('vehica_2339')">
                                                                <div class="vehica-tab__title">
                                                                    Audi </div>
                                                                <div class="vehica-tab__subtitle">
                                                                    14 Listings </div>
                                                            </div>
                                                            <div class="vehica-tab vehica-tab--big vehica-tab--bg-white" :class="{'vehica-tab--active': carTabs.isActive('vehica_2341')}" @click="carTabs.setTab('vehica_2341')">
                                                                <div class="vehica-tab__title">
                                                                    BMW </div>
                                                                <div class="vehica-tab__subtitle">
                                                                    11 Listings </div>
                                                            </div>
                                                            <div class="vehica-tab vehica-tab--big vehica-tab--bg-white" :class="{'vehica-tab--active': carTabs.isActive('vehica_2350')}" @click="carTabs.setTab('vehica_2350')">
                                                                <div class="vehica-tab__title">
                                                                    Cadillac </div>
                                                                <div class="vehica-tab__subtitle">
                                                                    13 Listings </div>
                                                            </div>
                                                            <div class="vehica-tab vehica-tab--big vehica-tab--bg-white" :class="{'vehica-tab--active': carTabs.isActive('vehica_2333')}" @click="carTabs.setTab('vehica_2333')">
                                                                <div class="vehica-tab__title">
                                                                    Ferrari </div>
                                                                <div class="vehica-tab__subtitle">
                                                                    12 Listings </div>
                                                            </div>
                                                            <div class="vehica-carousel-v1__tab-ghost"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vehica-carousel-v1">
                                                <vehica-swiper :config="{&quot;prevNextButtons&quot;:false,&quot;loop&quot;:true,&quot;autoplay&quot;:false,&quot;autoplayDelay&quot;:0,&quot;settings&quot;:{&quot;spaceBetween&quot;:22,&quot;loopFillGroupWithBlank&quot;:false}}" widget-id="2a210ddd" :breakpoints="[{&quot;width&quot;:1200,&quot;number&quot;:4},{&quot;width&quot;:900,&quot;number&quot;:3},{&quot;width&quot;:600,&quot;number&quot;:2},{&quot;width&quot;:0,&quot;number&quot;:1}]">
                                                    <div slot-scope="swiperProps">
                                                        <div class="vehica-carousel__swiper">
                                                            <div class="vehica-swiper-container vehica-swiper-container-horizontal">
                                                                <div class="vehica-swiper-wrapper">


                                                                    @include('/component/cart/carsCart')
                                                                    @include('/component/cart/carsCart')
                                                                    @include('/component/cart/carsCart')
                                                                    @include('/component/cart/carsCart')
                                                                    @include('/component/cart/carsCart')


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <template>
                                                            <div class="vehica-carousel-v1__arrows">
                                                                <button class="vehica-carousel__arrow vehica-carousel__arrow--left" @click.prevent="swiperProps.prevSlide">
                                                                </button>
                                                                <button class="vehica-carousel__arrow vehica-carousel__arrow--right" @click.prevent="swiperProps.nextSlide">
                                                                </button>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </vehica-swiper>
                                            </div>
                                            <div class="vehica-carousel-v1-button">
                                                <a class="vehica-button" :href="carTabs.viewAllUrl" :title="carTabs.viewAllTitle">
                                                    View <template>dsadas</template>
                                                </a>
                                            </div>
                                        </div>
                                    </vehica-car-tabs>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-68fa31ee elementor-widget elementor-widget-spacer" data-id="68fa31ee" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>