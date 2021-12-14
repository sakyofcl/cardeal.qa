<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @if($data->name!="0")
                {{$data->name}} | topcardeals.lk
            @else
               View car | topcardeals.lk
            @endif
        </title>

        @include('/component/link/css')
        <link rel="stylesheet" href="/assets/css/app.css"/>

        <!-- IMAGE LAZY LOADER -->
        <script type="text/javascript">
            window.lazySizesConfig = window.lazySizesConfig || {};
            window.lazySizesConfig.loadMode = 1
            window.lazySizesConfig.init = 0
        </script>
        <script type="text/javascript" src="/assets/js/js-lazysizes.min.js"></script>
    </head>
    <body >
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDQSJP4" height="0" width="0" style="display: none; visibility: hidden;"></iframe></noscript>

        <div >
            <div class="elementor-inner">
                <div class="elementor-section-wrap vh-100">
                    
                    <!-- nav bar area -->
				    @include('/component/nav')

                    <div class="car-view container">

                        <!-- bredcrumb area -->
                        <div class="row ml-0 mr-0">
                            <div class="col-12">
                                <div class="breadcrumb-wrapper app-shadow rounded">
                                    <nav aria-label="breadcrumb ">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                                            <li class="breadcrumb-item"><a href="/car">Car</a></li>

                                            <li class="breadcrumb-item">
                                            
                                                @foreach( $brand as $brandItem)
													@if($data->brand==$brandItem->brand_id)
														<a href="/search?brand={{$brandItem->brand_id}}" title="{{$brandItem->brand_name}}">
                                                            <span style="text-transform:capitalize !important;">{{$brandItem->brand_name}}</span>
															
														</a>
													@endif
												@endforeach
                                            </li>
                                            @if($data->model!="0")
                                                <li class="breadcrumb-item">
                                                    @foreach( $model as $modelItem)
                                                        @if($data->model==$modelItem->model_id)

                                                            <a class="text-capitalize" href="/search?brand={{$data->brand}}&model={{$data->model}}" title="{{$modelItem->model_name}}">
                                                                <span style="text-transform:capitalize !important;">{{$modelItem->model_name}}</span>
                                                                
                                                            </a>

                                                        @endif
                                                    @endforeach
                                                </li>
                                            @endif
                                            
                                            @if($data->name!="0")
                                                <li class="breadcrumb-item active text-capitalize">
                                                    <span style="text-transform:capitalize !important;">{{$data->name}}</span>
                                                </li>
                                            @endif
                                        </ol>
                                    </nav>  
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2 h-100  ml-0 mr-0">

                            <div class="col-12">

                                <div class="d-flex flex-column justify-content-start">
                                   
                                    
                                        <span class="font-weight-bold text-capitalize" style="font-size:30px;">
                                            @if($data->name!="0")
                                                {{$data->name}}
                                            @endif
                                            @if($data->status=="sold")
                                                <span class="badge badge-danger app-shadow ml-2 p-1 pl-3 pr-3 text-uppercase" style="font-size:30px;">Sold</span>
                                            @endif
                                        </span>
                                    
                                    
                                    
                                    <span class="d-flex align-items-center">
                                        @if($data->price!=0)
                                            <span class="font-weight-bold text-capitalize" style="font-size:20px;color:#ff4605;">
                                                Rs. {{number_format($data->price)}}
                                            </span>
                                        @endif
                                        @if($data->negotiable==1)
                                            <span class="badge badge-primary app-shadow ml-2 p-1 pl-2 pr-2">Negotiable</span>
                                        @endif
                                        
                                    </span>
                                   
                                    

                                    <span class="text-dark text-uppercase font-weight-bold" style="font-size:15px;">
                                        <i class="fas fa-calendar-week"></i>
                                        <span>posted on</span>
                                        <span>{{$data->date}}</span>
                                    </span>
                                    
                                </div>
                            
                            </div>

                            <div class="col-12 col-md-8 p-3">
                                
                                <div class="image-slider-wrapper">
                                    <div class="owl-carousel h-100 image-slider p-2" id="car-info-slider">	
                                    
                                        <div class="item">
											<img class="slider-item-image"  src="/products/{{$data->image}}">
										</div>									
										@foreach($more_image as $more_image_item)
											<div class="item">
												<img class="slider-item-image"  src="/products/{{$more_image_item->images}}">
											</div>
										@endforeach													
									</div>
                                </div>

                                <div class="col-12 col-md-4 pt-3 d-block d-md-none">

                                <div class="list-group list-group-flush car-spec border rounded mb-3">

                                    <div class="list-group-item border-0 text-uppercase">
                                        <span class="font-weight-bold">key details</span>
                                    </div>
                                   

                                </div>


                                <div class="list-group list-group-flush car-spec border rounded">

                                    <div class="list-group-item   text-capitalize d-flex ">
                                        <div class="w-50"><span class="font-weight-bold">make</span></div>
                                        <div class="w-50">
                                            <span >
                                                @foreach( $brand as $brandItem)
													@if($data->brand==$brandItem->brand_id)
														{{$brandItem->brand_name}}
													@endif
												@endforeach
                                            </span>
                                        </div>
                                    </div>

                                    @if(!$data->model=="" && !$data->model==null && !$data->model=="0")
                                    <div class="list-group-item text-capitalize d-flex ">
                                        <div class="w-50 "><span class="font-weight-bold">Model</span></div>
                                        <div class="w-50">
                                            <span >
                                                @foreach( $model as $modelItem)
													@if($data->model==$modelItem->model_id)
														{{$modelItem->model_name}}
													@endif
												@endforeach
                                            </span>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="list-group-item text-capitalize d-flex ">
                                        <div class="w-50"><span class="font-weight-bold">Condition</span></div>
                                        <div class="w-50">
                                            <span >
                                                {{$data->condition}}
                                            </span>
                                        </div>
                                    </div>

                                    @if(!$data->mileage=="" && !$data->mileage==null && !$data->mileage=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Mileage</span></div>
                                            <div class="w-50"><span >{{$data->mileage}} Km</span></div>
                                        </div>
                                    @endif

                                    @if($data->location!="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Location</span></div>
                                            <div class="w-50">
                                                <span >
                                                    {{$data->location}}
                                                </span>
                                            </div>
                                        </div>
                                    @endif

                                    @if($data->year!="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Year</span></div>
                                            <div class="w-50">
                                                <span >
                                                    {{$data->year}}
                                                </span>
                                            </div>
                                        </div>
                                    @endif

                                    @if($data->transmission!="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Transmission</span></div>
                                            <div class="w-50">
                                                <span >
                                                    {{$data->transmission}}
                                                </span>
                                            </div>
                                        </div>
                                    @endif

                                    
                                    @if(!$data->color=="" && !$data->color==null && !$data->color=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Color</span></div>
                                            <div class="w-50"><span>{{$data->color}}</span></div>
                                        </div>
                                    @endif

                                    @if(!$data->fuel_type=="" && !$data->fuel_type==null && !$data->fuel_type=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Fuel Type</span></div>
                                            <div class="w-50"><span >{{$data->fuel_type}}</span></div>
                                        </div>
                                    @endif                                    

                                    @if(!$data->fuel_capacity=="" && !$data->fuel_capacity==null && !$data->fuel_capacity=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold"> fuel capacity</span></div>
                                            <div class="w-50"><span >{{$data->fuel_capacity}} L</span></div>
                                        </div>
                                    @endif

                                    
                                    
                                    @if(!$data->drive_type=="" && !$data->drive_type==null && !$data->drive_type=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">drive type</span></div>
                                            <div class="w-50"><span >{{$data->drive_type}}</span></div>
                                        </div>
                                    @endif

                                    @if(!$data->door=="" && !$data->door==null && !$data->door=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Doors</span></div>
                                            <div class="w-50"><span >{{$data->door}}</span></div>
                                        </div>
                                    @endif

                                    @if(!$data->cylinders=="" && !$data->cylinders==null && !$data->cylinders=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Cylinders</span></div>
                                            <div class="w-50"><span >{{$data->cylinders}}</span></div>
                                        </div>
                                    @endif

                                    @if(!$data->engine_size=="" && !$data->engine_size==null && !$data->engine_size=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">engine size</span></div>
                                            <div class="w-50"><span >{{$data->engine_size}} <span class="text-lowercase">cc</span> </span></div>
                                        </div>
                                    @endif

                                    
                                    

                                </div>

                                
                                

                                
                                @if($data->contact_name || $data->contact || $data->whatsapp)
                                    <div class="list-group list-group-flush car-spec border rounded mt-3 mb-3">
                                        <div class="list-group-item  text-uppercase">
                                            <span class="font-weight-bold">Contact</span>
                                        </div>
                                        
                                        @if($data->contact_name!=null && $data->contact_name!="0" && $data->contact_name!="unknown")
                                            <div class="list-group-item text-capitalize d-flex">
                                                <div class="w-100 text-center"><span >{{$data->contact_name}}</span></div>
                                            </div>
                                        @endif

                                        @if($data->contact!="" && $data->contact!=null && $data->contact!="0")
                                            <div class="list-group-item text-capitalize d-flex vehica-phone-show-number">
                                                <button id="revealBtn" class="d-flex flex-nowrap justify-content-center revealBtn">
                                                    <i class="fas fa-phone-alt"></i>
                                                    <span id="defaultShow" class="defaultShow">075 *** *** - reveal</span>
                                                    <a href="tel:{{$data->contact}}" class="d-none p-0 border-0 w-auto finalshow" id="finalshow">{{$data->contact}}</a>
                                                </button>
                                            </div>
                                        @endif

                                        @if($data->whatsapp!="" && $data->whatsapp!=null && $data->whatsapp!="0")
                                            <div class="list-group-item text-capitalize d-flex ">
                                                <div class="vehica-whats-app-button w-100">
                                                    <a href="https://api.whatsapp.com/send?phone={{$data->whatsapp}}" target="_blank">
                                                        <i class="fab fa-whatsapp"></i>Chat via WhatsApp
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                        
                                    </div>
                                @endif

                            </div>

                                @if($data->description!="0")

                                    <div class="discription-box app-shadow">
                                        <div class="p-2">
                                            <span class='text-capitalize font-weight-bold'>description</span>
                                        </div>
                                        <div class="text show-less p-3" id="description-wrapper">
                                            <?php
                                                echo $data->description;
                                            ?>
                                        </div>
                                        
                                        <div class="d-flex justify-content-center p-2">
                                            <button type="button" class="btn btn-light text-capitalize"  id="show-more">
                                                Show more
                                            </button>
                                        </div>
                                    </div>

                                @endif
                                
                                @if(count($feature)>0)

                                    <div class="discription-box w-100 app-shadow">
                                        <div class="p-2">
                                            <span class='text-capitalize font-weight-bold'>features</span>
                                        </div>
                                        <div class='d-flex flex-wrap pb-2 pl-2'>
                                            @foreach($feature as $featureItem)
                                                <div class="p-2 d-flex mb-1 vehica-car-features-pills__single">
                                                    <i class="far fa-check-circle"></i>
                                                    <span class="w-100 text-capitalize" style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap;">{{$featureItem->feature}}</span>
                                                </div> 
                                            @endforeach
                                        </div>
                                    </div>

                                @endif

                                @if($data->attachment!=null)
                                    <div class="discription-box w-100 app-shadow">
                                        <div class="p-2">
                                            <span class='text-capitalize font-weight-bold'>Attachments</span>
                                        </div>
                                        <div class='d-flex flex-wrap'>
                                        <div class="vehica-attachments mt-3 mb-3">
                                                <div class="vehica-attachment-single-wrapper">
                                                    <a class="vehica-attachment pl-2" href="/file/file.pdf" download>
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
                                @endif

                                <div class="discription-box w-100 app-shadow vehica-contact-form p-3">
                                    <div class="pb-3">
                                        <span class='text-capitalize font-weight-bold'>send message</span>
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

																										
																									</form>
                                </div>


                                
                            </div>
                            <div class="col-12 col-md-4 pt-3 d-none d-md-block">

                                <div class="list-group list-group-flush car-spec border rounded mb-3">

                                    <div class="list-group-item border-0 text-uppercase">
                                        <span class="font-weight-bold">key details</span>
                                    </div>
                                   

                                </div>


                                <div class="list-group list-group-flush car-spec border rounded">

                                    <div class="list-group-item   text-capitalize d-flex ">
                                        <div class="w-50"><span class="font-weight-bold">make</span></div>
                                        <div class="w-50">
                                            <span >
                                                @foreach( $brand as $brandItem)
													@if($data->brand==$brandItem->brand_id)
														{{$brandItem->brand_name}}
													@endif
												@endforeach
                                            </span>
                                        </div>
                                    </div>

                                    @if(!$data->model=="" && !$data->model==null && !$data->model=="0")
                                    <div class="list-group-item text-capitalize d-flex ">
                                        <div class="w-50 "><span class="font-weight-bold">Model</span></div>
                                        <div class="w-50">
                                            <span >
                                                @foreach( $model as $modelItem)
													@if($data->model==$modelItem->model_id)
														{{$modelItem->model_name}}
													@endif
												@endforeach
                                            </span>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="list-group-item text-capitalize d-flex ">
                                        <div class="w-50"><span class="font-weight-bold">Condition</span></div>
                                        <div class="w-50">
                                            <span >
                                                {{$data->condition}}
                                            </span>
                                        </div>
                                    </div>

                                    @if(!$data->mileage=="" && !$data->mileage==null && !$data->mileage=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Mileage</span></div>
                                            <div class="w-50"><span >{{$data->mileage}} Km</span></div>
                                        </div>
                                    @endif


                                    @if($data->location!="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Location</span></div>
                                            <div class="w-50">
                                                <span >
                                                    {{$data->location}}
                                                </span>
                                            </div>
                                        </div>
                                    @endif

                                    @if($data->year!="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Year</span></div>
                                            <div class="w-50">
                                                <span >
                                                    {{$data->year}}
                                                </span>
                                            </div>
                                        </div>
                                    @endif

                                    @if($data->transmission!="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Transmission</span></div>
                                            <div class="w-50">
                                                <span >
                                                    {{$data->transmission}}
                                                </span>
                                            </div>
                                        </div>
                                    @endif

                                    
                                    
                                    

                                    @if(!$data->color=="" && !$data->color==null && !$data->color=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Color</span></div>
                                            <div class="w-50"><span>{{$data->color}}</span></div>
                                        </div>
                                    @endif

                                    @if(!$data->fuel_type=="" && !$data->fuel_type==null && !$data->fuel_type=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Fuel Type</span></div>
                                            <div class="w-50"><span >{{$data->fuel_type}}</span></div>
                                        </div>
                                    @endif                                    

                                    @if(!$data->fuel_capacity=="" && !$data->fuel_capacity==null && !$data->fuel_capacity=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold"> fuel capacity</span></div>
                                            <div class="w-50"><span >{{$data->fuel_capacity}} L</span></div>
                                        </div>
                                    @endif

                                    
                                    
                                    @if(!$data->drive_type=="" && !$data->drive_type==null && !$data->drive_type=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">drive type</span></div>
                                            <div class="w-50"><span >{{$data->drive_type}}</span></div>
                                        </div>
                                    @endif

                                    @if(!$data->door=="" && !$data->door==null && !$data->door=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Doors</span></div>
                                            <div class="w-50"><span >{{$data->door}}</span></div>
                                        </div>
                                    @endif

                                    @if(!$data->cylinders=="" && !$data->cylinders==null && !$data->cylinders=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">Cylinders</span></div>
                                            <div class="w-50"><span >{{$data->cylinders}}</span></div>
                                        </div>
                                    @endif

                                    @if(!$data->engine_size=="" && !$data->engine_size==null && !$data->engine_size=="0")
                                        <div class="list-group-item text-capitalize d-flex ">
                                            <div class="w-50"><span class="font-weight-bold">engine size</span></div>
                                            <div class="w-50"><span >{{$data->engine_size}} <span class="text-lowercase">cc</span> </span></div>
                                        </div>
                                    @endif
                                    
                                    

                                </div>

                                
                               
                                @if($data->contact_name || $data->contact || $data->whatsapp)    
                                
                                    <div class="list-group list-group-flush car-spec border rounded mt-3 mb-3">
                                        
                                        <div class="list-group-item  text-uppercase">
                                            <span class="font-weight-bold">Contact</span>
                                        </div>
                                        

                                        @if($data->contact_name!=null && $data->contact_name!="0" && $data->contact_name!="unknown")
                                            <div class="list-group-item text-capitalize d-flex">
                                                <div class="w-100 text-center font-weight-bold"><span >{{$data->contact_name}}</span></div>
                                            </div>
                                        @endif

                                        @if($data->contact!="" && $data->contact!=null && $data->contact!="0")
                                            <div class="list-group-item text-capitalize d-flex vehica-phone-show-number">
                                                <button id="revealBtn" class="d-flex flex-nowrap justify-content-center revealBtn">
                                                    <i class="fas fa-phone-alt"></i>
                                                    <span id="defaultShow" class="defaultShow">075 *** *** - reveal</span>
                                                    <a href="tel:{{$data->contact}}" class="d-none p-0 border-0 w-auto finalshow" id="finalshow">{{$data->contact}}</a>
                                                </button>
                                            </div>
                                        @endif

                                        @if($data->whatsapp!="" && $data->whatsapp!=null && $data->whatsapp!="0")
                                            <div class="list-group-item text-capitalize d-flex ">
                                                <div class="vehica-whats-app-button w-100">
                                                    <a href="https://api.whatsapp.com/send?phone={{$data->whatsapp}}" target="_blank">
                                                        <i class="fab fa-whatsapp"></i>Chat via WhatsApp
                                                    </a>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                @endif

                            </div>
                        </div>

                        <div class="row ml-0 mr-0 ">
                            <div class="col-12 p-3">
                                
                                <div class="discription-box app-shadow">
                                    <div class="p-2">
                                        <span class='text-capitalize font-weight-bold'>Related listings</span>
                                    </div>
                                    <div class="owl-carousel h-100 image-slider p-2 " id="car-related-slider">

                                    @foreach($related_car as $related_car_item)
                                        @if($related_car_item->cid!=$data->cid)
                                            <div class="item">
                                            
                                                <div class="vehica-swiper-slide vehica-carousel-v1__slide vehica-swiper-slide-visible vehica-swiper-slide-active" style="width: 263.5px; margin-right: 22px;">
                                                    <div data-id="9475" id="vehica-car-9475" class="vehica-car-card vehica-car-card-v1 ">
                                                        <div class="vehica-car-card__inner">
                                                            <a href="/car/info?v={{$related_car_item->cid}}" class="vehica-car-card-link">
                                                                <div class="vehica-car-card__image" style="padding-top: 55.5224%;">
                                                                    <div>
                                                                                                                                                        <!---->
                                                                    </div>

                                                                </div>
                                                            </a>

                                                            @if($related_car_item->status=="sold")
																<div class="vehica-car-card__featured">
																	<div class="vehica-car-card__featured__inner">
																		SOLD
																	</div>
																</div>
															@endif    

                                                            <div class="vehica-car-card__image-bg">
                                                                <a href="#" class="vehica-car-card__image" style="padding-top: 55.5224%;">
                                                                    <img src="/products/{{$related_car_item->image}}">
                                                                    <div class="vehica-car-card__image-info">
                                                                        <span class="vehica-car-card__image-info__photos">
                                                                            <i class="far fa-images"></i>
                                                                            <?php
																				$imageCount = 0;
																			?>
																			@foreach($all_more_image as $moreimageItem)
																				@if($moreimageItem->cid == $related_car_item->cid)
																					<?php
																						$imageCount++;
																					?>
                                                                                    
																				@endif
																			@endforeach
																			<span>{{$imageCount+1}}</span>
                                                                            
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="vehica-car-card__content">
                                                                @if($related_car_item->name!="0")
                                                                    <a href="/car/info?v={{$related_car_item->cid}}" title="Mercedes-Benz AMG GT 2-door coupe yellow" class="vehica-car-card__name text-capitalize">
                                                                        {{$related_car_item->name}}
                                                                    </a>
                                                                @endif
                                                                
                                                            
                                                                <div class="vehica-car-card__separator"></div>
                                                                <div class="vehica-car-card__info">
                                                                    @if($related_car_item->year!="0")
                                                                        <div class="vehica-car-card__info__single text-capitalize">
                                                                            {{$related_car_item->year}}
                                                                        </div>
                                                                    @endif

                                                                    @if($related_car_item->transmission!="0")
                                                                        <div class="vehica-car-card__info__single text-capitalize"  >
                                                                            {{$related_car_item->transmission}}
                                                                        </div>
                                                                    @endif

                                                                    @if($related_car_item->mileage!="0")
                                                                        <div class="vehica-car-card__info__single text-capitalize">
                                                                            {{$related_car_item->mileage}} Km
                                                                        </div>
                                                                    @endif


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    

                <div class="container-fluid m-0 p-0 ">
                    @include('/component/footer')
                </div>
                  
                </div>
            </div>
        </div>
     

	    @include('/component/link/js')
        <script src="/assets/js/car-info-carousel.js"></script>
        <script src="/assets/js/car_view_reveal_show_more.js"></script>
    </body>
</html>
