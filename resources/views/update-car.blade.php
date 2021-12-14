<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Your car | topcardeals.lk</title>

    @include('/component/link/css')

    <!-- IMAGE LAZY LOADER -->
    <script type="text/javascript">
        window.lazySizesConfig = window.lazySizesConfig || {};
        window.lazySizesConfig.loadMode = 1
        window.lazySizesConfig.init = 0
    </script>
    <script type="text/javascript" src="/assets/js/js-lazysizes.min.js"></script>


</head>


<body class="page-template-default page page-id-12758 wp-custom-logo vehica-version-1.0.58 vehica-menu-sticky elementor-default elementor-kit-16219 elementor-page elementor-page-12758">

    <div data-elementor-type="wp-post" data-elementor-id="12599" class="elementor elementor-12599" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">

                <!-- nav bar area -->
                @include('/component/nav')
                @include('/component/message/alert')


                <section class="elementor-section elementor-top-section elementor-element elementor-element-1cd3f209 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="1cd3f209" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e7c5937" data-id="e7c5937" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-723b5cfd elementor-widget elementor-widget-vehica_template_content" data-id="723b5cfd" data-element_type="widget" data-widget_type="vehica_template_content.default">
                                            <div class="elementor-widget-container">
                                                <div data-elementor-type="wp-page" data-elementor-id="12758" class="elementor elementor-12758" data-elementor-settings="[]">
                                                    <div class="elementor-inner">
                                                        <div class="elementor-section-wrap">
                                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-33b17b0 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="33b17b0" data-element_type="section">
                                                                <div class="elementor-container elementor-column-gap-default">
                                                                    <div class="elementor-row">
                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8a4c808" data-id="8a4c808" data-element_type="column">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-d14db8d elementor-widget elementor-widget-vehica_panel_general_widget" data-id="d14db8d" data-element_type="widget" data-widget_type="vehica_panel_general_widget.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="vehica-app vehica-panel">



                                                                                                <div class="vehica-car-form mt-4">
                                                                                                    <div class="vehica-car-form__inner">

                                                                                                        
                                                                                                        <div class="p-3 d-flex justify-content-between w-100">
                                                                                                            <h3 class="vehica-car-form__heading">Update Listing</h3>
                                                                                                            <div class="d-flex flex-column">
                                                                                                                <button t="sold" class="btn btn-danger text-uppercase mb-2 car-status-change-popup" url="/profile/car/status-change?status=sold&cid={{$data->cid}}" data-toggle="modal" data-target="#user-edit-car-status-model">Mark as Sold</button>
                                                                                                                <span t="active" style="cursor:pointer;" class="text-uppercase car-status-change-popup" url="/profile/car/status-change?status=active&cid={{$data->cid}}" data-toggle="modal" data-target="#user-edit-car-status-model">Mark as not sold</span>
                                                                
                                                                                                            </div>
                                                                                                        </div>


                                                                                                        <?php
                                                                                                            if(session::has('message')){
                                                                                                                $status=0;
                                                                                                                $msg=session::get('message');

                                                                                                                if(session::has('status')){
                                                                                                                    $status=session::get('status');
                                                                                                                }
                                                                                                                echo alertBox($msg,$status);
                                                                                                            }

                                                                                                            
                                                                                                        ?>
                                                                                                        

                                                                                                        <vehica-car-form>
                                                                                                            <div slot-scope="carForm">
                                                                                                                <form action="/car/update/save" method="POST" enctype='multipart/form-data' id="car-add-form">
                                                                                                                    <input type="text" name="cid" value={{$data->cid}} hidden/>
                                                                                                                    <div class="vehica-car-form__section vehica-car-form__section--create-car">
                                                                                                                        @if(Session::has('productSave'))
                                                                                                                        <div class="alert alert-success" role="alert">
                                                                                                                            Car successfully added.
                                                                                                                        </div>
                                                                                                                        @endif

                                                                                                                        <div class="vehica-car-form__grid-wrapper">
                                                                                                                            <div class="vehica-car-form__grid">

                                                                                                                                <div class="vehica-car-form__grid-element vehica-car-form__grid-element--row">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label vehica-car-form__label--required">
                                                                                                                                            Listing Title
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <input id="name" name="name" type="text" value="{{$data->name!="0"?$data->name:''}}" placeholder="Enter title here" class="vehica-car-form__field" required>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>


                                                                                                                                <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label vehica-car-form__label--required">
                                                                                                                                            Brand
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        <select id="brand" name="brand" class="form-control border-0 h-100" style="min-height: 51px; border-radius: 10px;">

                                                                                                                                                            @foreach($brand as $brandItem)
                                                                                                                                                            <option value="{{$brandItem->brand_id}}" {{$data->brand==$brandItem->brand_id?'selected':''}}>{{$brandItem->brand_name}}</option>

                                                                                                                                                            @endforeach

                                                                                                                                                        </select>
                                                                                                                                                    </div>

                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>



                                                                                                                                <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label vehica-car-form__label--required">
                                                                                                                                            Model
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        <select id="model" name="model" class="form-control border-0 h-100" style="min-height: 51px; border-radius: 10px;">
                                                                                                                                                            <option value="0">Model</option>
                                                                                                                                                            @foreach ($model as $modelItem)
                                                                                                                                                                @if($modelItem->model_id==$data->model)
                                                                                                                                                                    <option value="{{$modelItem->model_id}}" selected>{{$modelItem->model_name}}</option>
                                                                                                                                                                @else 
                                                                                                                                                                     <option value="{{$modelItem->model_id}}">{{$modelItem->model_name}}</option>
                                                                                                                                                                @endif
                                                                                                                                                            @endforeach
                                                                                                                                                            


                                                                                                                                                        </select>
                                                                                                                                                    </div>

                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label vehica-car-form__label--required">
                                                                                                                                            Condition
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        <select name="condition" class="form-control border-0 h-100" style="min-height: 51px; border-radius: 10px;">
                                                                                                                                                            <option value="new" {{$data->condition=="new"?'selected':''}}>New</option>
                                                                                                                                                            <option value="used" {{$data->condition=="used"?'selected':''}}>Used</option>
                                                                                                                                                        </select>
                                                                                                                                                    </div>

                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label ">
                                                                                                                                            Mileage
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <input id="mileage" class="vehica-car-form__field" placeholder="Mileage" name="mileage" type="text" value="{{$data->mileage!=0?$data->mileage:''}}" >
                                                                                                                                            <div class="vehica-car-form__field-units">
                                                                                                                                                km
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label vehica-car-form__label--required">
                                                                                                                                            Price (LKR)
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <input id="price" name="price" type="text"  placeholder="Price" class="vehica-car-form__field" value="{{$data->price!=0?$data->price:''}}">
                                                                                                                                        </div>

                                                                                                                                        <div class="d-flex align-items-center">
                                                                                                                                            <input type="checkbox" class="form-check-input position-relative m-0 p-0 mr-2" name="negotiable" value="{{$data->negotiable==1?'1':'0'}}" id="negotiable-btn" {{$data->negotiable==1?'checked':''}}>
                                                                                                                                            <label class="form-check-label text-capitalize text-muted" for="negotiable-btn">negotiable</label>
                                                                                                                                        </div>
                                                                                                                                        
                                                                                                                                    </div>
                                                                                                                                    
                                                                                                                                </div>


                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label ">
                                                                                                                                            Year
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <?php
                                                                                                                                                $yearData=[
                                                                                                                                                 
                                                                                                                                                    "2021",
                                                                                                                                                    "2020",
                                                                                                                                                    "2019",
                                                                                                                                                    "2018",
                                                                                                                                                    "2017",
                                                                                                                                                    "2016",
                                                                                                                                                    "2015",
                                                                                                                                                    "2014",
                                                                                                                                                    "2013",
                                                                                                                                                    "2012",
                                                                                                                                                    "2011",
                                                                                                                                                    "2010",
                                                                                                                                                    "2009",
                                                                                                                                                    "2008",
                                                                                                                                                    "2007",
                                                                                                                                                    "2006",
                                                                                                                                                    "2005",
                                                                                                                                                    "2004",
                                                                                                                                                    "2003",
                                                                                                                                                    "2002",
                                                                                                                                                    "2001",
                                                                                                                                                    "2000",
                                                                                                                                                    "1999",
                                                                                                                                                    "1998",
                                                                                                                                                    "1997",
                                                                                                                                                    "1996",
                                                                                                                                                    "1995",
                                                                                                                                                    "1994",
                                                                                                                                                    "1993",
                                                                                                                                                    "1992",
                                                                                                                                                    "1991",
                                                                                                                                                    "1990",
                                                                                                                                                ]        
                                                                                                                                            ?>
                                                                                                                                            <select name="year" class="form-control border-0 h-100" style="min-height: 51px; border-radius: 10px;">
                                                                                                                                                <option value="0">Year</option>
                                                                                                                                                @foreach ($yearData as $yearDataItem )
                                                                                                                                                    @if($yearDataItem==$data->year)
                                                                                                                                                        <option value="{{$yearDataItem}}" selected>{{$yearDataItem}}</option>
                                                                                                                                                    @else
                                                                                                                                                        <option value="{{$yearDataItem}}">{{$yearDataItem}}</option>
                                                                                                                                                    @endif
                                                                                                                                                @endforeach
                                                                                                                                                
                                                                                                                                            </select>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label ">
                                                                                                                                            Fuel Type
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        <?php
                                                                                                                                                            $fuel_type=[
                                                                                                                                                                'diesel',
                                                                                                                                                                'hybrid',
                                                                                                                                                                'petrol',
                                                                                                                                                                'electric'
                                                                                                                                                            ];
                                                                                                                                                        ?>
                                                                                                                                                        
                                                                                                                                                        <select name="fuel_type" class="form-control border-0 h-100 text-capitalize" style="min-height: 51px; border-radius: 10px;">
                                                                                                                                                            
                                                                                                                                                            <option value="0">Fuel Type</option>

                                                                                                                                                            @foreach ($fuel_type as $fuel_typeItem)
                                                                                                                                                                @if($fuel_typeItem==$data->fuel_type)
                                                                                                                                                                    <option value="{{$fuel_typeItem}}" selected>{{$fuel_typeItem}}</option>
                                                                                                                                                                @else
                                                                                                                                                                    <option value="{{$fuel_typeItem}}">{{$fuel_typeItem}}</option>
                                                                                                                                                                @endif
                                                                                                                                                            @endforeach
                                                                                                                                                            
                                                                                                                                                    
                                                                                                                                                        </select>
                                                                                                                                                    </div>

                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label ">
                                                                                                                                            Fuel Capacity
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <input id="fuel_capacity" name="fuel_capacity" placeholder="Fuel Capacity" type="text" value="{{($data->fuel_capacity=="0" || $data->fuel_capacity==null)?'':$data->fuel_capacity }}" class="vehica-car-form__field">
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                

                                                                                                                                 <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label ">
                                                                                                                                            Transmission
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        <?php
                                                                                                                                                            $transmission=[
                                                                                                                                                                'automatic',
                                                                                                                                                                'manual',
                                                                                                                                                                'semi-automatic',
                                                                                                                                                                
                                                                                                                                                            ];
                                                                                                                                                        ?>
                                                                                                                                                        <select name="transmission" class="form-control border-0 h-100 text-capitalize" style="min-height: 51px; border-radius: 10px;">
                                                                                                                                                                    
                                                                                                                                                            <option value="0">Transmission</option>
                                                                                                                                                            @foreach ($transmission as $transmissionItem)
                                                                                                                                                                @if($transmissionItem==$data->transmission)
                                                                                                                                                                    <option value="{{$transmissionItem}}" selected>{{$transmissionItem}}</option>
                                                                                                                                                                @else
                                                                                                                                                                    <option value="{{$transmissionItem}}">{{$transmissionItem}}</option>
                                                                                                                                                                @endif
                                                                                                                                                            @endforeach
                                                                                                                                                        
                                                                                                                                                        </select>
                                                                                                                                                    </div>

                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                

                                                                                                                                <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label ">
                                                                                                                                            Body type
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        
                                                                                                                                                        <select name="type" class="form-control border-0 h-100 text-capitalize" style="min-height: 51px; border-radius: 10px;">
                                                                                                                                                            <option value="0">Body Type</option>
                                                                                                                                                            @foreach($type as $typeItem)
                                                                                                                                                                @if($typeItem->type_id==$data->type)
                                                                                                                                                                    <option value="{{$typeItem->type_id}}" selected>{{$typeItem->type_name}}</option>
                                                                                                                                                                @else 
                                                                                                                                                                    <option value="{{$typeItem->type_id}}">{{$typeItem->type_name}}</option> 
                                                                                                                                                                @endif
                                                                                                                                                            @endforeach

                                                                                                                                                        </select>
                                                                                                                                                    </div>

                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>






                                                                                                                                
                                                                                                                   


                                                                                                                                <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label ">
                                                                                                                                            Drive Type
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        <?php
                                                                                                                                                            $drive_type=[
                                                                                                                                                                'frontwheel',
                                                                                                                                                                'rearwheel',
                                                                                                                                                                'awd_4wd',
                                                                                                                                                                
                                                                                                                                                            ];
                                                                                                                                                        ?>
                                                                                                                                                        <select name="drive_type" class="form-control border-0 h-100 text-capitalize" style="min-height: 51px; border-radius: 10px;">
                                                                                                                                                            <option value="0">Drive Type</option>
                                                                                                                                                            @foreach ($drive_type as $drive_typeItem)
                                                                                                                                                                @if($drive_typeItem==$data->drive_type)
                                                                                                                                                                    <option value="{{$drive_typeItem}}" selected>{{$drive_typeItem}}</option>
                                                                                                                                                                @else
                                                                                                                                                                    <option value="{{$drive_typeItem}}">{{$drive_typeItem}}</option>
                                                                                                                                                                @endif
                                                                                                                                                            @endforeach
                                                                                                                                                            
                                                                                                                                                        </select>
                                                                                                                                                    </div>

                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>



                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label ">
                                                                                                                                            Engine Size
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <input id="engine_size"  class="vehica-car-form__field" placeholder="Engine Size" name="engine_size" type="text" value="{{$data->engine_size!='0'?$data->engine_size:''}}">
                                                                                                                                            <div class="vehica-car-form__field-units">
                                                                                                                                                CC
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label ">
                                                                                                                                            Cylinders
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        <?php
                                                                                                                                                            $cylinders=[
                                                                                                                                                                '4',
                                                                                                                                                                '6',
                                                                                                                                                                '8',
                                                                                                                                                                
                                                                                                                                                            ];
                                                                                                                                                        ?>
                                                                                                                                                        <select name="cylinders" class="form-control border-0 h-100" style="min-height: 51px; border-radius: 10px;">
                                                                                                                                                            <option value="0">Cylinders</option>
                                                                                                                                                            
                                                                                                                                                            @foreach ($cylinders as $cylindersItem)
                                                                                                                                                                @if($cylindersItem==$data->cylinders)
                                                                                                                                                                    <option value="{{$cylindersItem}}" selected>{{$cylindersItem}}</option>
                                                                                                                                                                @else
                                                                                                                                                                    <option value="{{$cylindersItem}}">{{$cylindersItem}}</option>
                                                                                                                                                                @endif
                                                                                                                                                            @endforeach


                                                                                                                                                        </select>
                                                                                                                                                    </div>

                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>


                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label ">
                                                                                                                                            Color
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <input id="vehica_6664" class="vehica-car-form__field" name="color" type="text" placeholder="Color" value="{{$data->color!='0'?$data->color:''}}">

                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label ">
                                                                                                                                            Door
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        <?php
                                                                                                                                                            $door=[
                                                                                                                                                                '2',
                                                                                                                                                                '3',
                                                                                                                                                                '4',
                                                                                                                                                                '5'
                                                                                                                                                            ];
                                                                                                                                                        ?>
                                                                                                                                                        <select name="door" class="form-control border-0 h-100" style="min-height: 51px; border-radius: 10px;">
                                                                                                                                                            <option value="0">Door</option>
                                                                                                    
                                                                                                                                                            @foreach ($door as $doorItem)
                                                                                                                                                                @if($doorItem==$data->door)
                                                                                                                                                                    <option value="{{$doorItem}}" selected>{{$doorItem}}</option>
                                                                                                                                                                @else
                                                                                                                                                                    <option value="{{$doorItem}}">{{$doorItem}}</option>
                                                                                                                                                                @endif
                                                                                                                                                            @endforeach


                                                                                                                                                        </select>
                                                                                                                                                    </div>

                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>


                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label ">
                                                                                                                                            Contact Name
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <input id="contact_name" class="vehica-car-form__field" placeholder="Contact Name" name="contact_name" type="text" value="{{$data->contact_name!='0'?$data->contact_name:''}}">

                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                

                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label ">
                                                                                                                                            Contact No
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <input id="contact" class="vehica-car-form__field" name="contact" type="text" placeholder="0XXXXXXXXXX" value="{{$data->contact!='0'?$data->contact:''}}">
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label ">
                                                                                                                                           <i class="fab fa-whatsapp text-success"></i> Whatsapp No
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <input id="whatsapp" class="vehica-car-form__field" name="whatsapp" type="text" placeholder="0XXXXXXXXXX" value="{{$data->whatsapp!='0'?$data->whatsapp:''}}">
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>


                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label ">
                                                                                                                                            Car Location
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                         <?php
                                                                                                                                            $location=[
                                                                                                                                                
                                                                                                                                                "ampara",
                                                                                                                                                "anuradhapura",
                                                                                                                                                "batticaloa",
                                                                                                                                                "badulla",
                                                                                                                                                "colombo",
                                                                                                                                                "galle",
                                                                                                                                                "gampaha",
                                                                                                                                                "hambantota",
                                                                                                                                                "jaffna",
                                                                                                                                                "kurunegala",
                                                                                                                                                "kandy",
                                                                                                                                                "kalutara",
                                                                                                                                                "kegalle",
                                                                                                                                                "kilinochchi",
                                                                                                                                                "mullativu",
                                                                                                                                                "moneragala",
                                                                                                                                                "matara",
                                                                                                                                                "matale",
                                                                                                                                                "mannar",
                                                                                                                                                "nuwara eliya",
                                                                                                                                                "polonnaruwa",
                                                                                                                                                "puttalam",
                                                                                                                                                "ratnapura",
                                                                                                                                                "trincomalee",
                                                                                                                                                "vavuniya",
                                                                                                                                            ];
                                                                                                                                        ?>
                                                                                                                                            <select id="location" name="location" class="form-control border-0 h-100 text-capitalize" style="min-height: 51px; border-radius: 10px;">
                                                                                                                                                <option value="0">Location</option>
                                                                                                                                             
                                                                                                                                                @foreach ($location as $locationItem)
                                                                                                                                                    @if($locationItem==$data->location)
                                                                                                                                                        <option value="{{$locationItem}}" selected>{{$locationItem}}</option>
                                                                                                                                                    @else
                                                                                                                                                        <option value="{{$locationItem}}">{{$locationItem}}</option>
                                                                                                                                                    @endif
                                                                                                                                                @endforeach

                                                                                                                                            </select>


                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>




                                                                                                                                <!-- Final all image store -->
                                                                                                                                <input type="file" name="more_images[]" id="image_list" accept="image/*" multiple hidden>

                                                                                                                                <!-- Final all feature store -->
                                                                                                                                <input type="text" name="feature" id="feature" value="{{$car_feature_default}}" class="vehica-car-form__field" hidden>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="vehica-car-form__grid-element vehica-car-form__grid-element--row vehica-car-form-field__description">
                                                                                                                            <vehica-description-panel-field :car="carForm.car" :is-required="false" :is-advanced="true">
                                                                                                                                <div slot-scope="descriptionField" :class="{'vehica-has-error': carForm.showErrors && descriptionField.hasError}">
                                                                                                                                    <label for="vehica_description" class="vehica-car-form__label">
                                                                                                                                        Description </label>

                                                                                                                                    <div>
                                                                                                                                        <div id="wp-vehica_description-wrap" class="wp-core-ui wp-editor-wrap tmce-active">
                                                                                                                                            <div id="wp-vehica_description-editor-container" class="wp-editor-container">

                                                                                                                                                <textarea name="discription" id="discription" class="wp-editor-area">
                                                                                                                                                    <?php
                                                                                                                                                        if($data->description!="0"){
                                                                                                                                                            echo $data->description;
                                                                                                                                                        }
                                                                                                                                                        else{
                                                                                                                                                            echo "";
                                                                                                                                                        }
                                                                                                                                                        
                                                                                                                                                    ?>
                                                                                                                                                </textarea>
                                                                                                                                            </div>

                                                                                                                                        </div>

                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </vehica-description-panel-field>
                                                                                                                        </div>

                                                                                                                        <div class="vehica-car-form__grid-element vehica-car-form__grid-element--row vehica-relation-field vehica-car-form-field__vehica_6674 d-none">

                                                                                                                            <vehica-embed-panel-field :car="carForm.car" :field="{&quot;id&quot;:6674,&quot;key&quot;:&quot;vehica_6674&quot;,&quot;name&quot;:&quot;Video&quot;,&quot;type&quot;:&quot;embed&quot;,&quot;prettyType&quot;:&quot;embed&quot;,&quot;typeName&quot;:&quot;Embed&quot;,&quot;isRequired&quot;:false,&quot;editLink&quot;:&quot;https:\/\/demo.vehica.com\/wp-admin\/admin.php?page=vehica_6674&amp;vehica_type=field&quot;,&quot;rewritable&quot;:false}" request-url="https://demo.vehica.com/wp-admin/admin-post.php?action=vehica_embed_preview">
                                                                                                                                <div slot-scope="embedField" :class="{'vehica-has-error': carForm.showErrors && embedField.hasError}">
                                                                                                                                    <div class="vehica-car-form__embed-wrapper">
                                                                                                                                        <label for="vehica_6674" class="vehica-car-form__label">
                                                                                                                                            Video - copy any online video link e.g. YouTube, Facebook, Instagram or .mp4 </label>

                                                                                                                                        <div class="vehica-car-form__field-wrapper vehica-car-form__field-wrapper--embed">
                                                                                                                                            <input id="vehica_6674" class="vehica-car-form__field" name="vdo_link" type="text" value="0">
                                                                                                                                        </div>


                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </vehica-embed-panel-field>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                     <div class="vehica-relation-field vehica-car-form-field__vehica_6673">

                                                                                                                        <div class="vehica-car-form__tip-title">
                                                                                                                            <h3 class="vehica-car-form__section-title vehica-car-form__label--required">
                                                                                                                                Gallery
                                                                                                                            </h3>
                                                                                                                        </div>

                                                                                                                        <input type="text" name="prev_image" value="{{$more_image}}" id="prev_image" hidden/>

                                                                                                                        <div class="vehica-car-form__section vehica-car-form__section--gallery">

                                                                                                                            <div class="vue-dropzone dropzone dz-clickable p-3 d-flex align-items-center h-100 justify-content-center flex-row-reverse" id="image-preview-wrapper">

                                                                                                                                <div id="deafult-add-wrapper" class="vue-dropzone dropzone dz-clickable p-2 d-block">
                                                                                                                                    <!---->
                                                                                                                                    <div class="dz-default dz-message d-flex justify-content-center align-items-center mt-0">
                                                                                                                                        <input type="file" name="images[]" id="images" class="vehica-car-form__field multiple_image_upload_input" accept="image/*" multiple>
                                                                                                                                        <label class="multiple_image_upload_btn" for="images" id="multiple_image_upload_btn">
                                                                                                                                            <i class="fas fa-image" style="cursor: pointer;"></i>
                                                                                                                                        </label>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>

                                                                                                                            <div class="vehica-car-form__gallery__bottom mt-2 h-100 d-none" style="position: relative;" id="add-more-btn">
                                                                                                                                <input type="file" name="images[]"  id="images" class="vehica-car-form__field multiple_image_upload_input" accept="image/*" multiple>
                                                                                                                                <label class="multiple_image_upload_btn" for="images" id="multiple_image_upload_btn">
                                                                                                                                    <i class="fas fa-image" style="cursor: pointer;"></i>
                                                                                                                                </label>
                                                                                                                            </div>


                                                                                                                        </div>



                                                                                                                    </div>

                                                                                                                    
                                                                                                                     <div class="vehica-relation-field vehica-car-form-field__vehica_18820">


                                                                                                                        <div class="vehica-car-form__tip-title">
                                                                                                                            <h3 class="vehica-car-form__section-title">
                                                                                                                                Attachments

                                                                                                                            </h3>

                                                                                                                        </div>

                                                                                                                        <div class="vehica-car-form__section vehica-car-form__section--gallery vehica-car-form__section--attachment">
                                                                                                                            <div class="vue-dropzone dropzone dz-clickable p-3 d-flex align-items-center h-100 justify-content-center flex-row-reverse">

                                                                                                                                <!---->
                                                                                                                                <div class="dz-default dz-message p-3 h-100 m-0 d-flex justify-content-center align-items-center">
                                                                                                                                    <input type="file" name="attachment" id="attachment" class="vehica-car-form__field multiple_image_upload_input" accept=".pdf">
                                                                                                                                    <input type="text" name="isHaveAttachment" id="isHaveAttachment" value="{{$data->attachment?'1':'0'}}" hidden>
                                                                                                                                    <label class="multiple_image_upload_btn" for="attachment">
                                                                                                                                        <i class="fas fa-paperclip" style="cursor: pointer;"></i>
                                                                                                                                    </label>
                                                                                                                                </div>

                                                                                                                                <div id="file-preview-root">
                                                                                                                                    @if($data->attachment)
                                                                                                                                        <div class="dz-preview bg-light m-2 d-block" id="file-root-none">
                                                                                                                                            <span class="image-preview-close file-close-btn-event">
                                                                                                                                                <i class="fas fa-times-circle p-0 m-0 file-close-btn-event"></i>
                                                                                                                                            </span>
                                                                                                                                            <div class="dz-image h-100 w-100">
                                                                                                                                                <img src="/assets/image/pdf-img.png" class="h-100 w-100">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    @endif
                                                                                                                                </div>
                                                                                                                            </div>

                                                                                                                        </div>



                                                                                                                    </div>




                                                                                                                    <div class="vehica-relation-field vehica-car-form-field__vehica_6670">
                                                                                                                        <h3 class="vehica-car-form__section-title">
                                                                                                                            Features </h3>
                                                                                                                        <div class="vehica-car-form__section">
                                                                                                                            <div class="vehica-car-form__multi-taxonomy">
                                                                                                                                <?php 
                                                                                                                                    $macthed=false;
                                                                                                                                    foreach($feature as $featureItem){
                                                                                                                                        foreach($car_feature as $car_feature_item){
                                                                                                                                            if(strtolower($car_feature_item->feature) == strtolower($featureItem->feature_name)){
                                                                                                                                                 
                                                                                                                                                echo"
                                                                                                                                                    <div class='position-relative vehica-car-form__multi-taxonomy__term feature-list-item text-capitalize update-feature vehica-car-form__multi-taxonomy__term--active' dataIndex='$featureItem->feature_id'>
                                                                                                                                                        $featureItem->feature_name
                                                                                                                                                    </div>
                                                                                                                                                ";
                                                                                                                                                $macthed=true;
                                                                                                                                                break;
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                        if($macthed!=true){
                                                                                                                                            echo"
                                                                                                                                                <div class='position-relative vehica-car-form__multi-taxonomy__term feature-list-item text-capitalize update-feature' dataIndex='$featureItem->feature_id'>
                                                                                                                                                    $featureItem->feature_name
                                                                                                                                                </div>
                                                                                                                                            ";
                                                                                                                                        }
                                                                                                                                        else{
                                                                                                                                            $macthed=false;
                                                                                                                                        }
                                                                                                                                   
                                                                                                                                    }
                                                                                                                                    
                                                                                                                                ?>
                                                                                                                               

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>






                                                                                                                    <div class="d-flex justify-content-between align-items-center w-100 ">
                                                                                                                        <span class="w-auto text-uppercase text-danger font-weight-bold" id="car-delete-popup-btn" cid="{{$data->cid}}" style="cursor:pointer;" data-toggle="modal" data-target="#user-car-delete-model">Delete this car</span>
                                                                                                                
                                                                                                                        <button type="submit" class="vehica-button vehica-button--with-progress-animation w-auto" id="submit-form-btn">
                                                                                                                            <span class="vehica-button__text-initial">Update Car</span>
                                                                                                                        </button>
                                                                                                                    </div>


                                                                                                                </form>
                                                                                                            </div>
                                                                                                        </vehica-car-form>
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
                                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-8721935 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8721935" data-element_type="section">
                                                                <div class="elementor-container elementor-column-gap-default">
                                                                    <div class="elementor-row">
                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6e96d03" data-id="6e96d03" data-element_type="column">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-ba9d6aa elementor-widget elementor-widget-spacer" data-id="ba9d6aa" data-element_type="widget" data-widget_type="spacer.default">
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

    <!--------------- [ INCLUDE POPUP MODEL ] --------------->
    @include('/component/popup/car-del')
    @include('/component/popup/userEdit')
    @include('/component/link/js')

    <script src="/assets/js/editerInit.js"></script>
    <script src="/assets/js/cart-add-feature.js"></script>
    <script src="/assets/js/axios.js"></script>
    <script src="/assets/js/api/car-filter-api.js"></script>
    <script src="/assets/js/car-file-animation.js"></script>
    <script src="/assets/js/profile/profile.js"></script>
    <!-- <script src="/assets/js/validation/car-add.js"></script> -->

</body>

</html>