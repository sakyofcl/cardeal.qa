<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Car info | cardeals.qa</title>

	@include('/component/link/css')

	<!-- IMAGE LAZY LOADER -->
	<script type="text/javascript">
		window.lazySizesConfig = window.lazySizesConfig || {};
		window.lazySizesConfig.loadMode = 1
		window.lazySizesConfig.init = 0
	</script>
	<script type="text/javascript" src="/assets/js/js-lazysizes.min.js"></script>


</head>

<body class="vehica_car-template-default single single-vehica_car postid-9650 wp-custom-logo vehica-version-1.0.58 vehica-menu-sticky elementor-default elementor-kit-16219">
	<div data-elementor-type="wp-post" data-elementor-id="12599" class="elementor elementor-12599" data-elementor-settings="[]">
		<div class="elementor-inner">
			<div class="elementor-section-wrap">

				<!-- nav bar area -->
				@include('/component/nav')


				<section class="pt-3 mt-5 elementor-section elementor-top-section elementor-element elementor-element-1cd3f209 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="1cd3f209" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
					<div class="elementor-container elementor-column-gap-no">
						<div class="elementor-row">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e7c5937" data-id="e7c5937" data-element_type="column">
								<div class="elementor-column-wrap elementor-element-populated">
									<div class="elementor-widget-wrap">
										<div class="elementor-element elementor-element-723b5cfd elementor-widget elementor-widget-vehica_template_content" data-id="723b5cfd" data-element_type="widget" data-widget_type="vehica_template_content.default">
											<div class="elementor-widget-container">
												<div data-elementor-type="wp-post" data-elementor-id="11943" class="elementor elementor-11943" data-elementor-settings="[]">
													<div class="elementor-inner">
														<div class="elementor-section-wrap">
															<section class="elementor-section elementor-top-section elementor-element elementor-element-c67b745 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c67b745" data-element_type="section">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-row">
																		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-920bd21" data-id="920bd21" data-element_type="column">
																			<div class="elementor-column-wrap elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-b25c25c elementor-widget elementor-widget-vehica_breadcrumbs_general_widget" data-id="b25c25c" data-element_type="widget" data-widget_type="vehica_breadcrumbs_general_widget.default">
																						<div class="elementor-widget-container">
																							<div>
																								<div class="vehica-breadcrumbs-wrapper">
																									<div class="d-flex flex-wrap vehica-breadcrumbs text-uppercase" style="font-weight:bold;">
																										<div class="vehica-breadcrumbs__single">
																											<a href="/" title="Homepage" class="vehica-breadcrumbs__link">
																												Home
																											</a>
																											<span class="vehica-breadcrumbs__separator"></span>
																										</div>
																										<div class="vehica-breadcrumbs__single">
																											<a href="/car" title="Search" class="vehica-breadcrumbs__link">
																												Car
																											</a>
																											<span class="vehica-breadcrumbs__separator"></span>
																										</div>
																										<div class="vehica-breadcrumbs__single">

																											@foreach( $brand as $brandItem)
																											@if($data->brand==$brandItem->brand_id)
																											<a href="/search?brand={{$brandItem->brand_id}}" title="{{$brandItem->brand_name}}" class="vehica-breadcrumbs__link text-capitalize">
																												{{$brandItem->brand_name}}
																											</a>
																											@endif
																											@endforeach

																											<span class="vehica-breadcrumbs__separator"></span>
																										</div>
																										<div class="vehica-breadcrumbs__single">
																											<a href="#" title="8-Serie" class="vehica-breadcrumbs__link">
																												@foreach( $model as $modelItem)
																												@if($data->model==$modelItem->model_id)

																												<a href="/search?brand={{$data->brand}}&model={{$data->model}}" title="{{$modelItem->model_name}}" class="vehica-breadcrumbs__link">
																													{{$modelItem->model_name}}
																												</a>
																												<span class="vehica-breadcrumbs__separator"></span>

																												@endif
																												@endforeach

																												
																										</div>
																										<span class="vehica-breadcrumbs__last text-capitalize">
																											{{$data->name}}
																										</span>
																									</div>
																								</div>

																								@if (Session::has('msg'))
																								<div class="alert alert-success" role="alert" id="contact-msg">
																									{{Session::get('msg')}}
																								</div>
																								@endif
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
															<section class="elementor-section elementor-top-section elementor-element elementor-element-85ed0dd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="85ed0dd" data-element_type="section">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-row">
																		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cfb5452" data-id="cfb5452" data-element_type="column">
																			<div class="elementor-column-wrap elementor-element-populated">
																				<div class="elementor-widget-wrap">


																					
																						<div class="elementor-widget-container w-100">
																							<div class="owl-carousel car-info-slider-wrapper h-100" id="car-info-slider">

																								<div class="item h-100">
																									<img class="h-100 w-100" src="/products/{{$data->image}}" style="border-radius:15px;">
																								</div>
																								@foreach($more_image as $more_image_item)
																									<div class="item h-100">
																										<img class="h-100 w-100" src="/products/{{$more_image_item->images}}" style="border-radius:15px;">
																									</div>
																								@endforeach
													
																							</div>
																						</div>
																					




																					
									
																					<div class="elementor-widget-container mt-4">
																						<div>
																							<h3 class="vehica-section-label vehica-section-label--description">
																								Description 
																							</h3>
																							<div class="vehica-car-description">
																								<div class="vehica-car-description__inner" style="word-wrap: break-word;">

																									<?php
																										echo $data->description;
																									?>
																								</div>

																							</div>
																						</div>
																					</div>


																					<div class="elementor-widget-container mt-4">
																						<div>
																							<h3 class="vehica-section-label vehica-section-label--list">
																								Features
																							</h3>
																							<section style="background-color: #f2f5fb;" class="p-2 border rounded elementor-section elementor-inner-section elementor-element elementor-element-d1f3be1 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="d1f3be1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																								<div class="elementor-container elementor-column-gap-default">
																									<div class="elementor-row  d-flex justify-content-center align-items-center">
																										<div class="  elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-021c69f" data-id="021c69f" data-element_type="column">
																											<div class="  elementor-column-wrap elementor-element-populated">

																												<div class=" elementor-widget-wrap">
																													<div class=" elementor-element elementor-element-c7cb2e2 elementor-widget elementor-widget-vehica_big_features_single_car_widget" data-id="c7cb2e2" data-element_type="widget" data-widget_type="vehica_big_features_single_car_widget.default">
																														<div class="elementor-widget-container">

																															<div class="row m-0 vehica-car-features-pills d-flex justify-content-center">
																																@foreach($feature as $featureItem)

																																<div class="col-md-5 p-3 d-flex mb-1 vehica-car-features-pills__single" >
																																	<i class="far fa-check-circle"></i>
																																	<span class="w-100" style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap;">{{$featureItem->feature}}</span>
																																</div>
																																

																																@endforeach
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</section>
																						</div>
																					</div>

																					
																					

																					<div class="elementor-element elementor-element-5e29033 elementor-widget elementor-widget-spacer" data-id="5e29033" data-element_type="widget" data-widget_type="spacer.default">
																						<div class="elementor-widget-container">
																							<div class="elementor-spacer">
																								<div class="elementor-spacer-inner"></div>
																							</div>
																						</div>
																					</div>
																					<div class="elementor-element elementor-element-cb7d25a elementor-widget elementor-widget-vehica_embed_single_car_widget" data-id="cb7d25a" data-element_type="widget" data-widget_type="vehica_embed_single_car_widget.default">
																						<div class="elementor-widget-container">
																							<div class="vehica-car-embed-wrapper">
																								<h3 class="vehica-section-label">Video</h3>
																								<div class="vehica-car-embed">
																									<div class="vehica-car-embed__inner">
																										<iframe width="560" height="315" src="<?php echo str_replace('/watch?v=','/embed/',$data->vdo_link); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>

																					<div class="mb-3 elementor-element elementor-element-4c8e117 elementor-widget elementor-widget-vehica_attachments_single_car_widget" data-id="4c8e117" data-element_type="widget" data-widget_type="vehica_attachments_single_car_widget.default">
																						<div class="elementor-widget-container">
																							<h3 class="vehica-section-label vehica-section-label--attachments">
																								Attachments </h3>
																							<div class="vehica-attachments">

																								<div class="vehica-attachment-single-wrapper">
																									<a class="vehica-attachment" href="/file/file.pdf" download>
																										<div class="vehica-attachment__icon">
																											<img src="/file/iconpdf.svg" alt="Sample PDF File">
																										</div>
																										<div class="vehica-attachment__name">
																											Sample PDF File
																										</div>
																									</a>
																								</div>

																							</div>
																						</div>
																					</div>



																				</div>
																			</div>
																		</div>

																		<!-- info box spec-->
																		
																		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-54f21c3 vehica-sticky vehica-sidebar-gap-right elementor-hidden-tablet elementor-hidden-phone" data-id="54f21c3" data-element_type="column">
																			<div class="elementor-column-wrap elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="vehica-sticky-element">
																						<section class="elementor-section elementor-inner-section elementor-element elementor-element-1df0498 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1df0498" data-element_type="section">
																							<div class="elementor-container elementor-column-gap-default">
																								<div class="elementor-row">
																									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8c61bd1" data-id="8c61bd1" data-element_type="column">
																										<div class="elementor-column-wrap elementor-element-populated">
																											<div class="elementor-widget-wrap">
																												<div class="elementor-element elementor-element-7124659 elementor-widget elementor-widget-vehica_name_single_car_widget" data-id="7124659" data-element_type="widget" data-widget_type="vehica_name_single_car_widget.default">
																													<div class="elementor-widget-container">
																														<h1 class="vehica-car-name">
																															{{$data->name}}
																														</h1>
																													</div>
																												</div>
																												<div class="elementor-element elementor-element-e13e597 elementor-widget elementor-widget-spacer" data-id="e13e597" data-element_type="widget" data-widget_type="spacer.default">
																													<div class="elementor-widget-container">
																														<div class="elementor-spacer">
																															<div class="elementor-spacer-inner"></div>
																														</div>
																													</div>
																												</div>
																												<div class="elementor-element elementor-element-c433c4c elementor-widget elementor-widget-vehica_features_single_car_widget" data-id="c433c4c" data-element_type="widget" data-widget_type="vehica_features_single_car_widget.default">
																													<div class="elementor-widget-container">
																														<div class="vehica-car-features">
																															<div class="vehica-car-feature">
																																<span>
																																	{{$data->year}}
																																</span>
																																<i class="fas fa-circle"></i>
																															</div>

																															@foreach( $type as $typeItem)
																															@if($data->type==$typeItem->type_id)
																															<span class="vehica-car-feature">
																																<span>
																																	{{$typeItem->type_name}}
																																</span>
																																<i class="fas fa-circle"></i>
																															</span>
																															@endif
																															@endforeach



																															<span class="vehica-car-feature">
																																<span>
																																	{{$data->fuel_type}}
																																</span>
																																<i class="fas fa-circle"></i>
																															</span>
																														</div>
																													</div>
																												</div>
																												<div class="elementor-element elementor-element-0cf5a44 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="0cf5a44" data-element_type="widget" data-widget_type="divider.default">
																													<div class="elementor-widget-container">
																														<div class="elementor-divider">
																															<span class="elementor-divider-separator">
																															</span>
																														</div>
																													</div>
																												</div>
																												<div class="elementor-element elementor-element-4f3a65d elementor-widget elementor-widget-spacer" data-id="4f3a65d" data-element_type="widget" data-widget_type="spacer.default">
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
																						<div class="elementor-element elementor-element-a507d29 elementor-widget__width-auto elementor-widget elementor-widget-vehica_price_single_car_widget" data-id="a507d29" data-element_type="widget" data-widget_type="vehica_price_single_car_widget.default">
																							<div class="elementor-widget-container">
																								<div class="vehica-car-price">
																									Rs. {{number_format($data->price)}}
																								</div>
																							</div>
																						</div>


																						<section class="elementor-section elementor-inner-section elementor-element elementor-element-0f8a261 elementor-hidden-tablet elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0f8a261" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																							<div class="elementor-container elementor-column-gap-default">
																								<div class="elementor-row">
																									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7540650" data-id="7540650" data-element_type="column">
																										<div class="elementor-column-wrap elementor-element-populated">
																											<div class="elementor-widget-wrap">
																												<div class="elementor-element elementor-element-98a431c elementor-widget elementor-widget-vehica_attributes_single_car_widget" data-id="98a431c" data-element_type="widget" data-widget_type="vehica_attributes_single_car_widget.default">
																													<div class="elementor-widget-container">
																														<div class="vehica-car-attributes">
																															<div class="vehica-car-attributes-grid vehica-grid">
																																<div class="vehica-grid__element vehica-grid__element--1of1 vehica-grid__element--tablet-1of2 vehica-grid__element--mobile-1of1">
																																	<div class="vehica-grid">
																																		<div class="vehica-car-attributes__name vehica-grid__element--1of2">
																																			Make: </div>
																																		<div class="vehica-car-attributes__values vehica-grid__element--1of2">
																																			@foreach( $brand as $brandItem)
																																			@if($data->brand==$brandItem->brand_id)
																																			{{$brandItem->brand_name}}
																																			@endif
																																			@endforeach
																																		</div>
																																	</div>
																																</div>
																																<div class="vehica-grid__element vehica-grid__element--1of1 vehica-grid__element--tablet-1of2 vehica-grid__element--mobile-1of1">
																																	<div class="vehica-grid">
																																		<div class="vehica-car-attributes__name vehica-grid__element--1of2">
																																			Model: </div>
																																		<div class="vehica-car-attributes__values vehica-grid__element--1of2">
																																			@foreach( $model as $modelItem)
																																			@if($data->model==$modelItem->model_id)
																																			{{$modelItem->model_name}}
																																			@endif
																																			@endforeach
																																		</div>
																																	</div>
																																</div>
																																<div class="vehica-grid__element vehica-grid__element--1of1 vehica-grid__element--tablet-1of2 vehica-grid__element--mobile-1of1">
																																	<div class="vehica-grid">
																																		<div class="vehica-car-attributes__name vehica-grid__element--1of2">
																																			Mileage: </div>
																																		<div class="vehica-car-attributes__values vehica-grid__element--1of2">
																																			{{$data->mileage}} miles
																																		</div>
																																	</div>
																																</div>
																																<div class="vehica-grid__element vehica-grid__element--1of1 vehica-grid__element--tablet-1of2 vehica-grid__element--mobile-1of1">
																																	<div class="vehica-grid">
																																		<div class="vehica-car-attributes__name vehica-grid__element--1of2">
																																			Location: </div>
																																		<div class="vehica-car-attributes__values vehica-grid__element--1of2">
																																			{{$data->location}}


																																		</div>
																																	</div>
																																</div>
																																<div class="vehica-grid__element vehica-grid__element--1of1 vehica-grid__element--tablet-1of2 vehica-grid__element--mobile-1of1">
																																	<div class="vehica-grid">
																																		<div class="vehica-car-attributes__name vehica-grid__element--1of2">
																																			Color: </div>
																																		<div class="vehica-car-attributes__values vehica-grid__element--1of2">
																																			{{$data->color}}
																																		</div>
																																	</div>
																																</div>
																																<div class="vehica-grid__element vehica-grid__element--1of1 vehica-grid__element--tablet-1of2 vehica-grid__element--mobile-1of1">
																																	<div class="vehica-grid">
																																		<div class="vehica-car-attributes__name vehica-grid__element--1of2">
																																			Drive Type: </div>
																																		<div class="vehica-car-attributes__values vehica-grid__element--1of2">
																																			{{$data->drive_type}}
																																		</div>
																																	</div>
																																</div>
																																<div class="vehica-grid__element vehica-grid__element--1of1 vehica-grid__element--tablet-1of2 vehica-grid__element--mobile-1of1">
																																	<div class="vehica-grid">
																																		<div class="vehica-car-attributes__name vehica-grid__element--1of2">
																																			Transmission: </div>
																																		<div class="vehica-car-attributes__values vehica-grid__element--1of2">
																																			{{$data->transmission}}
																																		</div>
																																	</div>
																																</div>
																																<div class="vehica-grid__element vehica-grid__element--1of1 vehica-grid__element--tablet-1of2 vehica-grid__element--mobile-1of1">
																																	<div class="vehica-grid">
																																		<div class="vehica-car-attributes__name vehica-grid__element--1of2">
																																			Condition: </div>
																																		<div class="vehica-car-attributes__values vehica-grid__element--1of2">
																																			{{$data->condition}}
																																		</div>
																																	</div>
																																</div>
																																<div class="vehica-grid__element vehica-grid__element--1of1 vehica-grid__element--tablet-1of2 vehica-grid__element--mobile-1of1">
																																	<div class="vehica-grid">
																																		<div class="vehica-car-attributes__name vehica-grid__element--1of2">
																																			Year: </div>
																																		<div class="vehica-car-attributes__values vehica-grid__element--1of2">
																																			{{$data->year}}
																																		</div>
																																	</div>
																																</div>
																																<div class="vehica-grid__element vehica-grid__element--1of1 vehica-grid__element--tablet-1of2 vehica-grid__element--mobile-1of1">
																																	<div class="vehica-grid">
																																		<div class="vehica-car-attributes__name vehica-grid__element--1of2">
																																			Fuel Type: </div>
																																		<div class="vehica-car-attributes__values vehica-grid__element--1of2">
																																			{{$data->fuel_type}}
																																		</div>
																																	</div>
																																</div>
																																<div class="vehica-grid__element vehica-grid__element--1of1 vehica-grid__element--tablet-1of2 vehica-grid__element--mobile-1of1">
																																	<div class="vehica-grid">
																																		<div class="vehica-car-attributes__name vehica-grid__element--1of2">
																																			Engine Size: </div>
																																		<div class="vehica-car-attributes__values vehica-grid__element--1of2">
																																			{{$data->engine_size}}L
																																		</div>
																																	</div>
																																</div>
																																<div class="vehica-grid__element vehica-grid__element--1of1 vehica-grid__element--tablet-1of2 vehica-grid__element--mobile-1of1">
																																	<div class="vehica-grid">
																																		<div class="vehica-car-attributes__name vehica-grid__element--1of2">
																																			Doors: </div>
																																		<div class="vehica-car-attributes__values vehica-grid__element--1of2">
																																			{{$data->engine_size}}-door
																																		</div>
																																	</div>
																																</div>
																																<div class="vehica-grid__element vehica-grid__element--1of1 vehica-grid__element--tablet-1of2 vehica-grid__element--mobile-1of1">
																																	<div class="vehica-grid">
																																		<div class="vehica-car-attributes__name vehica-grid__element--1of2">
																																			Cylinders: </div>
																																		<div class="vehica-car-attributes__values vehica-grid__element--1of2">
																																			{{$data->cylinders}}
																																		</div>
																																	</div>
																																</div>


																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</section>
																						<section class="elementor-section elementor-inner-section elementor-element elementor-element-a60f194 vehica-single-bg-tablet elementor-hidden-tablet elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a60f194" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																							<div class="elementor-container elementor-column-gap-default">
																								<div class="elementor-row">
																									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-01ceb84" data-id="01ceb84" data-element_type="column">
																										<div class="elementor-column-wrap elementor-element-populated">
																											<div class="elementor-widget-wrap p-3">

																												<div class= "pb-2 elementor-element elementor-element-5002e53 elementor-widget elementor-widget-vehica_whats_app_button_single_car_widget" data-id="5002e53" data-element_type="widget" data-widget_type="vehica_whats_app_button_single_car_widget.default">
																													<div class="elementor-widget-container">
																														<div class="vehica-whats-app-button bg-light p-2 border d-flex justify-content-center" style="border-radius: 10px;">
																															<span class="text-uppercase font-weight-bold">mohamed 5aky</span>
																														</div>
																													</div>
																												</div>

																												<div class=" pb-2 elementor-element elementor-element-25a4c91 elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-vehica_phone_single_car_widget" data-id="25a4c91" data-element_type="widget" data-widget_type="vehica_phone_single_car_widget.default">
																													<div class="elementor-widget-container">
																														<div>
																															<div class="vehica-phone-show-number">
																																<div>
																																	<button id="revealBtn" class="d-flex flex-nowrap justify-content-center">
																																		<i class="fas fa-phone-alt"></i>
																																		<span id="defaultShow">075 *** *** - reveal</span>
																																		<a href="tel:{{$data->contact}}" class="d-none p-0 border-0 w-auto " id="finalshow">{{$data->contact}}</a>
																																	</button>
																																	<!---->
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>
																												<div class="pb-2 elementor-element elementor-element-5002e53 elementor-widget elementor-widget-vehica_whats_app_button_single_car_widget" data-id="5002e53" data-element_type="widget" data-widget_type="vehica_whats_app_button_single_car_widget.default">
																													<div class="elementor-widget-container">
																														<div class="vehica-whats-app-button">
																															<a href="https://api.whatsapp.com/send?phone={{$data->contact}}" target="_blank">
																																<i class="fab fa-whatsapp"></i>Chat via WhatsApp </a>
																														</div>
																													</div>
																												</div>
																												<div class=" pb-2 elementor-element elementor-element-87f83e4 elementor-align-justify elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit vehica-button-no-animate-bg elementor-widget elementor-widget-button" data-id="87f83e4" data-element_type="widget" data-widget_type="button.default">
																													<div class="elementor-widget-container">
																														<div class="elementor-button-wrapper">
																															<a href="#contact" class="elementor-button-link elementor-button elementor-size-sm" role="button">
																																<span class="elementor-button-content-wrapper">
																																	<span class="elementor-button-text">Send message</span>
																																</span>
																															</a>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</section>



																						<div class="elementor-element elementor-element-3c798ea elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-vehica_social_share_general_widget" data-id="3c798ea" data-element_type="widget" data-widget_type="vehica_social_share_general_widget.default">
																							<div class="elementor-widget-container">
																								<div class="vehica-social-share">
																									<a class="vehica-social-share__icon vehica-social-share__icon--facebook" href="https://www.facebook.com/sharer/sharer.php?u=#" target="_blank">
																										<i class="fab fa-facebook-f"> </i>
																										Share
																									</a>
																									<a class="vehica-social-share__icon vehica-social-share__icon--twitter bg-danger " href="#" target="_blank">
																										<i class="fab fa-instagram"></i>
																										Share
																									</a>
																								</div>
																							</div>
																						</div>

																					</div>
																				</div>
																			</div>
																		</div>

																	</div>
																</div>
															</section>

															<section style="background-color: #f2f5fb;" class="pb-3 elementor-section elementor-top-section elementor-element elementor-element-ad1a841 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ad1a841" data-element_type="section" id="contact" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-row">
																		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-92d7c27" data-id="92d7c27" data-element_type="column">
																			<div class="elementor-column-wrap elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-7a5f512 elementor-widget elementor-widget-spacer" data-id="7a5f512" data-element_type="widget" data-widget_type="spacer.default">
																						<div class="elementor-widget-container">
																							<div class="elementor-spacer">
																								<div class="elementor-spacer-inner"></div>
																							</div>
																						</div>
																					</div>
																					<div class="elementor-element elementor-element-cd36e64 elementor-widget elementor-widget-heading" data-id="cd36e64" data-element_type="widget" data-widget_type="heading.default">
																						<div class="elementor-widget-container">
																							<h3 class="elementor-heading-title elementor-size-default">Send message</h3>
																						</div>
																					</div>
																					<div class="elementor-element elementor-element-53e8779 elementor-widget elementor-widget-spacer" data-id="53e8779" data-element_type="widget" data-widget_type="spacer.default">
																						<div class="elementor-widget-container">
																							<div class="elementor-spacer">
																								<div class="elementor-spacer-inner"></div>
																							</div>
																						</div>
																					</div>
																					<div class="elementor-element elementor-element-27bb35e elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-vehica_contact_owner_single_car_widget" data-id="27bb35e" data-element_type="widget" data-widget_type="vehica_contact_owner_single_car_widget.default">
																						<div class="elementor-widget-container">
																							<div class="vehica-contact-form">
																								<div role="form" class="wpcf7" id="wpcf7-f6201-o1" lang="en-US" dir="ltr">
																									<div class="screen-reader-response">
																										<p role="status" aria-live="polite" aria-atomic="true"></p>
																										<ul></ul>
																									</div>
																									<form action="/contact/seller" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">


																										<div class="clearfix">
																											<div class="vehica-3-fields">
																												<div class="vehica-3-fields__left">
																													<span class="wpcf7-form-control-wrap your-name">
																														<input type="text" value="" name="name" class="wpcf7-form-control wpcf7-text" placeholder="Name">
																													</span>
																												</div>
																												<div class="vehica-3-fields__middle">
																													<span class="wpcf7-form-control-wrap your-email">
																														<input type="email" value="" name="email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" placeholder="Email*">
																													</span>
																												</div>
																												<div class="vehica-3-fields__right">
																													<span class="wpcf7-form-control-wrap your-phone">
																														<input type="text" value="" name="phone" class="wpcf7-form-control wpcf7-text" placeholder="Phone">
																													</span>
																												</div>
																											</div>
																											<p>
																												<span class="wpcf7-form-control-wrap your-message">
																													<textarea name="message" value="" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" placeholder="Message*">

																													</textarea>
																												</span>
																											</p>
																											<div class="vehica-2-fields">

																												<div class="vehica-2-fields__left">
																													<button id="submit" class="wpcf7-form-control wpcf7-submit vehica-button vehica-button--icon vehica-button--icon--send">Send</button>
																													<span class="ajax-loader"></span>

																												</div>
																											</div>
																										</div>

																										<div class="wpcf7-response-output" aria-hidden="true"></div>
																									</form>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="elementor-element elementor-element-32617b9 elementor-widget elementor-widget-spacer" data-id="32617b9" data-element_type="widget" data-widget_type="spacer.default">
																						<div class="elementor-widget-container">
																							<div class="elementor-spacer">
																								<div class="elementor-spacer-inner"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e32d899 vehica-sidebar-gap-right" data-id="e32d899" data-element_type="column">
																			<div class="elementor-column-wrap elementor-element-populated">
																				<div class="elementor-widget-wrap">


																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>

															<section class="elementor-section elementor-top-section elementor-element elementor-element-804e4cc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="804e4cc" data-element_type="section">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-row">
																		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-028325c" data-id="028325c" data-element_type="column">
																			<div class="elementor-column-wrap elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-e9cc5e2 elementor-widget elementor-widget-vehica_related_car_carousel_single_car_widget" data-id="e9cc5e2" data-element_type="widget" data-widget_type="vehica_related_car_carousel_single_car_widget.default">
																						<div class="elementor-widget-container">
																							<div>
																								<h3 class="vehica-section-label">
																									Related listings </h3>
																								<div class="vehica-car-tabs-carousel vehica-carousel-v1--cars-6">
																									<div class="vehica-carousel-v1">
																										<div>
																											<div class="vehica-carousel__swiper">
																												<div class="vehica-swiper-container vehica-swiper-container-initialized vehica-swiper-container-horizontal">
																													<div class="vehica-swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
																														@foreach($related_car as $related_car_item)
																														@if($related_car_item->cid!=$data->cid)
																														<div class="vehica-swiper-slide vehica-carousel-v1__slide vehica-swiper-slide-visible vehica-swiper-slide-active" style="width: 263.5px; margin-right: 22px;">
																															<div data-id="9475" id="vehica-car-9475" class="vehica-car-card vehica-car-card-v1 ">
																																<div class="vehica-car-card__inner"><a href="/car/info?v={{$related_car_item->cid}}" class="vehica-car-card-link">
																																		<div class="vehica-car-card__image" style="padding-top: 55.5224%;">
																																			<div>
																																				<!---->
																																			</div>

																																		</div>
																																	</a>
																																	@if($related_car_item->condition=="new")
																																	<div class="vehica-car-card__featured">

																																		<div class="vehica-car-card__featured__inner">
																																			New
																																		</div>

																																	</div>
																																	@else
																																	<div class="vehica-car-card__featured bg-dark">

																																		<div class="vehica-car-card__featured__inner">
																																			Used
																																		</div>

																																	</div>
																																	@endif
																																	<div class="vehica-car-card__image-bg">
																																		<a href="#" class="vehica-car-card__image" style="padding-top: 55.5224%;">
																																			<img src="data:image/gif;base64,{{$related_car_item->image}}">
																																			<div class="vehica-car-card__image-info">
																																				<span class="vehica-car-card__image-info__photos">
																																					<i class="far fa-images"></i>
																																					<span>7</span>
																																				</span>
																																			</div>
																																		</a>
																																	</div>
																																	<div class="vehica-car-card__content">
																																		<a href="/car/info?v={{$related_car_item->cid}}" title="Mercedes-Benz AMG GT 2-door coupe yellow" class="vehica-car-card__name">
																																			{{$related_car_item->name}}
																																		</a>
																																		<div class="vehica-car-card__price">
																																			Rs. {{number_format($related_car_item->price)}}
																																		</div>
																																		<div class="vehica-car-card__separator"></div>
																																		<div class="vehica-car-card__info">
																																			<div class="vehica-car-card__info__single">
																																				{{$related_car_item->year}}
																																			</div>

																																			<div class="vehica-car-card__info__single">
																																				{{$related_car_item->mileage}} miles

																																			</div>

																																		</div>
																																	</div>
																																</div>
																															</div>
																														</div>
																														@endif
																														@endforeach

																													</div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
																												</div>
																											</div>

																											<div class="vehica-carousel-v1__arrows"><button class="vehica-carousel__arrow vehica-carousel__arrow--left"></button> <button class="vehica-carousel__arrow vehica-carousel__arrow--right"></button></div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!------------[ Footer Area ]----------->
				@include('/component/footer')
				<!---- End ---->
			</div>
		</div>
	</div>

	@include('/component/link/js')
	<script src="/assets/js/car-info-carousel.js"></script>


	<script>
		$(document).ready((e) => {
			const revealBtn = document.getElementById('revealBtn');
			revealBtn.addEventListener('click', (e) => {
				document.getElementById('defaultShow').classList.add('d-none');
				document.getElementById('finalshow').classList.remove('d-none');
				document.getElementById('finalshow').classList.add('d-block');




			})
			if (document.getElementById('contact-msg')) {
				setTimeout((e) => {
					document.getElementById('contact-msg').classList.add('d-none');

				}, 2000)
			}
		})
	</script>
</body>

</html>