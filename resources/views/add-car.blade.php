<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add your car | topcardeals.lk</title>

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



                                                                                                <div class="vehica-car-form">
                                                                                                    <div class="vehica-car-form__inner ">

                                                                                                        <h3 class="vehica-car-form__heading mt-3">
                                                                                                            Add Listing </h3>

                                                                                                        <vehica-car-form>
                                                                                                            <div slot-scope="carForm">
                                                                                                                <form action="/car/save" class="add-car-form" method="POST" enctype='multipart/form-data' id="car-add-form" novalidate>
                                                                                                                    <div class="vehica-car-form__section vehica-car-form__section--create-car pt-1">
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
                                                                                                                                            <input id="name" name="name" type="text"  placeholder="Enter title here" class="vehica-car-form__field form-control" required>
                                                                                                                                            <div class="invalid-feedback">
                                                                                                                                                Title is required.
                                                                                                                                            </div>
                                                                                                                                            
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
                                                                                                                                                        <select id="brand" name="brand" class="form-control h-100 text-capitalize" style="min-height: 51px; border-radius: 10px;" required>
                                                                                                                                                            
                                                                                                                                                            <option selected disabled value=''>Brand</option>

                                                                                                                                                            @foreach($brand as $brandItem)
                                                                                                                                                            <option value="{{$brandItem->brand_id}}">{{$brandItem->brand_name}}</option>

                                                                                                                                                            @endforeach

                                                                                                                                                        </select>
                                                                                                                                                        <div class="invalid-feedback">
                                                                                                                                                            Brand is required.
                                                                                                                                                        </div>
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
                                                                                                                                                        <select id="model" name="model" class="form-control h-100 text-capitalize" style="min-height: 51px; border-radius: 10px;" required>
                                                                                                                                                            <option value=''>Model</option>
                                                                                                                                                        </select>

                                                                                                                                                        <div class="invalid-feedback">
                                                                                                                                                            Model is required.
                                                                                                                                                        </div>
                                                                                                                                                    </div>

                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label">
                                                                                                                                            Condition
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height:51px;">
                                                                                                                                                        <select name="condition" class="form-control no border-0 h-100 text-capitalize" style="min-height: 51px; border-radius:10px;">
                                                                                                                                                            <option value="new">New</option>
                                                                                                                                                            <option value="used" selected>Used</option>
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
                                                                                                                                            <input id="mileage" class="vehica-car-form__field no" name="mileage" type="text" placeholder="Mileage">
                                                                                                                                            <div class="vehica-car-form__field-units">
                                                                                                                                                km
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label ">
                                                                                                                                            Price (LKR)
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <input id="price" name="price" type="text"  class="vehica-car-form__field no" placeholder="Price">
                                                                                                                                        </div>

                                                                                                                                        <div class="d-flex align-items-center">
                                                                                                                                            <input type="checkbox" class="form-check-input position-relative m-0 p-0 mr-2 no" name="negotiable" value="1" id="negotiable-btn">
                                                                                                                                            <label class="form-check-label text-capitalize text-muted" for="negotiable-btn">negotiable</label>
                                                                                                                                        </div>
                                                                                                                                        
                                                                                                                                    </div>
                                                                                                                                    
                                                                                                                                </div>

                                                                                                                                
                                                                                                                                <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label ">
                                                                                                                                            Year
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        <select name="year" class="form-control  no border-0 h-100 text-capitalize" style="min-height: 51px; border-radius: 10px;">

                                                                                                                                                            <option value="0">Year</option>
                                                                                                                                                            <option value="2021">2021</option>
                                                                                                                                                            <option value="2020">2020</option>
                                                                                                                                                            <option value="2019">2019</option>
                                                                                                                                                            <option value="2018">2018</option>
                                                                                                                                                            <option value="2017">2017</option>
                                                                                                                                                            <option value="2016">2016</option>
                                                                                                                                                            <option value="2015">2015</option>
                                                                                                                                                            <option value="2014">2014</option>
                                                                                                                                                            <option value="2013">2013</option>
                                                                                                                                                            <option value="2012">2012</option>
                                                                                                                                                            <option value="2011">2011</option>
                                                                                                                                                            <option value="2010">2010</option>
                                                                                                                                                            <option value="2009">2009</option>
                                                                                                                                                            <option value="2008">2008</option>
                                                                                                                                                            <option value="2007">2007</option>
                                                                                                                                                            <option value="2006">2006</option>
                                                                                                                                                            <option value="2005">2005</option>
                                                                                                                                                            <option value="2004">2004</option>
                                                                                                                                                            <option value="2003">2003</option>
                                                                                                                                                            <option value="2002">2002</option>
                                                                                                                                                            <option value="2001">2001</option>
                                                                                                                                                            <option value="2000">2000</option>
                                                                                                                                                            <option value="1999">1999</option>
                                                                                                                                                            <option value="1998">1998</option>
                                                                                                                                                            <option value="1997">1997</option>
                                                                                                                                                            <option value="1996">1996</option>
                                                                                                                                                            <option value="1995">1995</option>
                                                                                                                                                            <option value="1994">1994</option>
                                                                                                                                                            <option value="1993">1993</option>
                                                                                                                                                            <option value="1992">1992</option>
                                                                                                                                                            <option value="1991">1991</option>
                                                                                                                                                            <option value="1990">1990</option>

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
                                                                                                                                            Fuel Type
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        <select name="fuel_type" id="fuel_type" class="form-control border-0 h-100 text-capitalize" style="min-height: 51px; border-radius: 10px;" required>
                                                                                                                                                            
                                                                                                                                                            <option value="diesel">Diesel</option>
                                                                                                                                                            <option value="hybrid">Hybrid</option>
                                                                                                                                                            <option value="petrol" selected>Petrol</option>
                                                                                                                                                            <option value="electric">Electric</option>

                                                                                                                                                        </select>
                                                                                                                                                        <div class="invalid-feedback">
                                                                                                                                                            Fuel Type is required.
                                                                                                                                                        </div>
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
                                                                                                                                            <input id="fuel_capacity" name="fuel_capacity" type="text"  placeholder="Fuel Capacity" class="vehica-car-form__field no">
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                

                                                                                                                                 <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label vehica-car-form__label--required">
                                                                                                                                            Transmission
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        <select name="transmission" id="transmission" class="form-control border-0 h-100" style="min-height: 51px; border-radius: 10px;" required>
                                                                                                                                                            <option selected disabled value=''>Transmission</option>
                                                                                                                                                            <option value="automatic">Automatic</option>
                                                                                                                                                            <option value="manual">Manual</option>
                                                                                                                                                            <option value="semi-automatic">Semi-Automatic</option>


                                                                                                                                                        </select>
                                                                                                                                                        <div class="invalid-feedback">
                                                                                                                                                            Transmission is required.
                                                                                                                                                        </div>
                                                                                                                                                    </div>

                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                

                                                                                                                                <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label vehica-car-form__label--required">
                                                                                                                                            Body Type
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        
                                                                                                                                                        <select name="type" id="body_type" class="form-control border-0 h-100" style="min-height: 51px; border-radius: 10px;" required>
                                                                                                                                                            <option selected disabled value=''>Body Type</option>
                                                                                                                                                            @foreach($type as $typeItem)
                                                                                                                                                            <option value="{{$typeItem->type_id}}">{{$typeItem->type_name}}</option>

                                                                                                                                                            @endforeach

                                                                                                                                                        </select>
                                                                                                                                                        <div class="invalid-feedback">
                                                                                                                                                            Body type is required.
                                                                                                                                                        </div>
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
                                                                                                                                                        <select name="drive_type" class="form-control border-0 h-100 no" style="min-height: 51px; border-radius: 10px;">
                                                                                                                                                            <option value="0">Drive Type</option>
                                                                                                                                                            <option value="frontwheel">FrontWheel Drive</option>
                                                                                                                                                            <option value="rearwheel">RearWheel Drive</option>
                                                                                                                                                            <option value="awd_4wd">AWD/4WD</option>


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
                                                                                                                                            <input id="engine_size"  class="vehica-car-form__field no" name="engine_size" type="text" placeholder="Engine Size">
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
                                                                                                                                                        <select name="cylinders" class="form-control border-0 h-100 no" style="min-height: 51px; border-radius: 10px;">
                                                                                                                                                            <option value="0">Cylinders</option>
                                                                                                                                                            <option value="4">4</option>
                                                                                                                                                            <option value="6">6</option>
                                                                                                                                                            <option value="8">8</option>


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
                                                                                                                                            <input id="vehica_6664" class="vehica-car-form__field no" name="color" type="text" placeholder="Color">

                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="vehica-car-form__grid-element vehica-relation-field vehica-car-form-field__vehica_6654">
                                                                                                                                    <div>
                                                                                                                                        <label for="vehica_6654" class="vehica-car-form__label ">
                                                                                                                                            Doors
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-select-single">

                                                                                                                                            <div class="v-select vs--single vs--searchable">

                                                                                                                                                <div id="vs1__combobox" role="combobox" class="form-input">

                                                                                                                                                    <div class="vs__selected-options h-100" style="min-height: 51px;">
                                                                                                                                                        <select name="door" class="form-control no border-0 h-100" style="min-height: 51px; border-radius: 10px;">
                                                                                                                                                            <option value="0">Doors</option>
                                                                                                                                                            <option value="2">2-door</option>
                                                                                                                                                            <option value="3">3-door</option>
                                                                                                                                                            <option value="4">4-door</option>
                                                                                                                                                            <option value="5">5-door</option>


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
                                                                                                                                            <input id="contact_name" class="vehica-car-form__field no" name="contact_name" placeholder="Contact Name " type="text">

                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                

                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label vehica-car-form__label--required">
                                                                                                                                            Contact No
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <input id="contact" class="vehica-car-form__field form-control" pattern="^(\d{10})$" name="contact" type="text" placeholder="0XXXXXXXXXX" required>
                                                                                                                                            <div class="invalid-feedback">
                                                                                                                                                Contact no is required.
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label ">
                                                                                                                                           <i class="fab fa-whatsapp text-success"></i> Whatsapp No
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <input id="whatsapp" class="vehica-car-form__field no" name="whatsapp" type="text" placeholder="0XXXXXXXXXX">
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>


                                                                                                                                <div class="vehica-car-form__grid-element">
                                                                                                                                    <div class="vehica-car-form-field__name">
                                                                                                                                        <label for="vehica_name" class="vehica-car-form__label vehica-car-form__label--required">
                                                                                                                                            Car Location
                                                                                                                                        </label>
                                                                                                                                        <div class="vehica-car-form__field-wrapper">
                                                                                                                                            <select id="location" name="location" class="form-control h-100" style="min-height: 51px; border-radius: 10px;" required>
                                                                                                                                                <option value="" selected disabled >Location</option>
                                                                                                                                                <option value="ampara">Ampara</option>
                                                                                                                                                <option value="anuradhapura">Anuradhapura</option>
                                                                                                                                                <option value="batticaloa">Batticaloa</option>
                                                                                                                                                <option value="badulla">Badulla</option>
                                                                                                                                                <option value="colombo">Colombo</option>
                                                                                                                                                <option value="galle">Galle</option>
                                                                                                                                                <option value="gampaha">Gampaha</option>
                                                                                                                                                <option value="hambantota">Hambantota</option>
                                                                                                                                                <option value="jaffna">Jaffna</option>
                                                                                                                                                <option value="kurunegala">Kurunegala</option>
                                                                                                                                                <option value="kandy">Kandy</option>
                                                                                                                                                <option value="kalutara">Kalutara</option>
                                                                                                                                                <option value="kegalle">Kegalle</option>
                                                                                                                                                <option value="kilinochchi">Kilinochchi</option>
                                                                                                                                                <option value="mullativu">Mullativu</option>
                                                                                                                                                <option value="moneragala">Moneragala</option>
                                                                                                                                                <option value="matara">Matara</option>
                                                                                                                                                <option value="matale">Matale</option>
                                                                                                                                                <option value="mannar">Mannar</option>
                                                                                                                                                <option value="nuwara eliya">Nuwara Eliya</option>
                                                                                                                                                <option value="polonnaruwa">Polonnaruwa</option>
                                                                                                                                                <option value="puttalam">Puttalam</option>
                                                                                                                                                <option value="ratnapura">Ratnapura</option>
                                                                                                                                                <option value="trincomalee">Trincomalee</option>
                                                                                                                                                <option value="vavuniya">Vavuniya</option>




                                                                                                                                            </select>
                                                                                                                                            <div class="invalid-feedback">
                                                                                                                                                Location is required.
                                                                                                                                            </div>

                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>




                                                                                                                                <!-- Final all image store -->
                                                                                                                                <input type="file" name="more_images[]" class="custom-file-input" id="image_list" accept="image/*" multiple hidden required>

                                                                                                                                <!-- Final all feature store -->
                                                                                                                                <input type="text" name="feature" id="feature" value="0" class="vehica-car-form__field" hidden>

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

                                                                                                                                                <textarea name="discription" id="discription" class="wp-editor-area"></textarea>
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


                                                                                                                        <div class="invalid-feedback" id="gellary-container-msg-wrapper">
                                                                                                                            Gallery is required.
                                                                                                                        </div>

                                                                                                                        <div class="vehica-car-form__section vehica-car-form__section--gallery" id="gellary-container-wrapper">

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
                                                                                                                                    <label class="multiple_image_upload_btn" for="attachment">
                                                                                                                                        <i class="fas fa-paperclip" style="cursor: pointer;"></i>
                                                                                                                                    </label>
                                                                                                                                </div>

                                                                                                                                <div id="file-preview-root">

                                                                                                                                </div>
                                                                                                                            </div>

                                                                                                                        </div>



                                                                                                                    </div>




                                                                                                                    <div class="vehica-relation-field vehica-car-form-field__vehica_6670">
                                                                                                                        <h3 class="vehica-car-form__section-title">
                                                                                                                            Features </h3>
                                                                                                                        <div class="vehica-car-form__section">
                                                                                                                            <div class="vehica-car-form__multi-taxonomy">
                                                                                                                                @foreach($feature as $featureItem)
                                                                                                                                <div class="position-relative vehica-car-form__multi-taxonomy__term feature-list-item text-capitalize" dataIndex="{{$featureItem->feature_id}}">
                                                                                                                                    {{$featureItem->feature_name}}
                                                                                                                                </div>
                                                                                                                                @endforeach


                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>






                                                                                                                    <div class="vehica-car-form__save-submit">
                                                                                                                        <button type="submit" class="vehica-button vehica-button--with-progress-animation" id="submit-form-btn">

                                                                                                                            <span class="vehica-button__text-initial">Add Car</span>

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

    @include('/component/link/js')
    <script src="/assets/js/editerInit.js"></script>
    <script src="/assets/js/cart-add-feature.js"></script>
    <script src="/assets/js/axios.js"></script>
    <script src="/assets/js/api/car-filter-api.js"></script>
    <script src="/assets/js/car-file-animation.js"></script>
    <script src="/assets/js/validation/car-add-new.js"></script> 


</body>

</html>