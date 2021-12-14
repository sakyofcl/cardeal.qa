<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$profile->name}} | cardeals.qa</title>

    @include('/component/link/css')

    <!-- IMAGE LAZY LOADER -->
    <script type="text/javascript">
        window.lazySizesConfig = window.lazySizesConfig || {};
        window.lazySizesConfig.loadMode = 1
        window.lazySizesConfig.init = 0
    </script>
    <script type="text/javascript" src="/assets/js/js-lazysizes.min.js"></script>
    <style>
        .card {
            border: none;
            margin-bottom: 24px;
            -webkit-box-shadow: 0 0 13px 0 rgba(236, 236, 241, .44);
            box-shadow: 0 0 13px 0 rgba(236, 236, 241, .44);
        }
    </style>


</head>


<body class="page-template-default page page-id-12772 wp-custom-logo vehica-version-1.0.58 vehica-menu-sticky elementor-default elementor-kit-16219 elementor-page elementor-page-12772">
    <div data-elementor-type="wp-post" data-elementor-id="12599" class="elementor elementor-12599" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">

                <!-- nav bar area -->
                @include('/component/nav')
                @include('/component/message/alert')


                <div class="container">
                    <div class="row">
                        <div class="col-12">

                    
                        </div>
                    </div>

                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 mt-5">


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
                            <div class="container">

                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card border">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card mb-0 h-100 shadow-none">
                                                        <div class="card-body">
                                                            <div class="d-flex flex-column align-items-center text-center">
                                                                @if($profile->image==null)
                                                                <img src="/assets/image/avatar.png" class="rounded-circle p-1 bg-primary" width="110">
                                                                @else
                                                                <img src="data:image/*;base64" class="rounded-circle p-1 bg-primary" width="110">

                                                                @endif
                                                                <div class="mt-3">
                                                                    <h4>{{$profile->name}}</h4>
                                                                    <p class="text-secondary mb-1 text-capitalize">
                                                                        @if($profile->role=="root")
                                                                        {{"admin"}}
                                                                        @endif
                                                                    </p>
                                                                    <p class="text-muted font-size-sm">
                                                                        @if($profile->verified=="1")
                                                                        <span class="badge badge-success ">Verified</span>
                                                                        @else
                                                                        <span class="badge badge-danger p-1 rounded-0">Not Verified </span>
                                                                        @endif
                                                                    </p>

                                                                </div>
                                                            </div>
                                                            <hr class="my-4">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="card mb-0 h-100 shadow-none">
                                                        <div class="card-body">
                                                            <div class="row mb-3">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">Name</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="text" class="form-control" value="{{$profile->name}}">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">Email</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="text" class="form-control" value="{{$profile->email}}">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">Phone</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="text" class="form-control" value="0{{$profile->phone}}">
                                                                </div>
                                                            </div>
                                                            

                                                            <div class="row">
                                                                <div class="col-sm-3"></div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="button" class="btn btn-primary px-4" value="Save Changes">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="card border">

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-2 col-md-6 user-card">
                                                        <div class="card bg-pattern border bg-primary ">
                                                            <a href="/user/profile?type=all" class="user-profile-card">
                                                                <div class="card-body">
                                                                    <div class="float-right">
                                                                        <i class="fas fa-car text-white h4 "></i>

                                                                    </div>
                                                                    <h5 class="font-size-20 mt-0 pt-1 text-white">{{$carCount}}</h5>
                                                                    <p class=" mb-0 text-white">Total Cars</p>
                                                                </div>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-md-6 user-card">
                                                        <div class="card bg-pattern border bg-danger">
                                                            <a href="/user/profile?type=sold" class="user-profile-card">
                                                                <div class="card-body">
                                                                    <div class="float-right">
                                                                        <i class="fas fa-car text-white h4 "></i>
                                                                    </div>
                                                                    <h5 class="font-size-20 text-white  mt-0 pt-1">{{$soldCarCount}}</h5>
                                                                    <p class="text-white mb-0 text-capitalize">sold cars</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-md-6 user-card">
                                                        <div class="card bg-pattern border bg-success" style="width: 160px;">
                                                            <a href="/user/profile?type=active" class="user-profile-card">
                                                                <div class="card-body">
                                                                    <div class="float-right">
                                                                        <i class="fas fa-car text-white  h4 "></i>
                                                                    </div>
                                                                    <h5 class="font-size-20 text-white  mt-0 pt-1">{{$activeCarCount}}</h5>
                                                                    <p class="text-white mb-0 text-capitalize ">active cars</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--
                                                <div class="d-flex mb-3">
                                                    <a href="/user/profile?type=all" type="button" class="btn btn-primary rounded-0 border text-bold mr-2">
                                                        <span class=" text-capitalize text-bold">all</span>
                                                    </a>
                                                    <a href="/user/profile?type=sold" type="button" class="btn btn-danger rounded-0 border text-bold mr-2">
                                                        <span class=" text-capitalize text-bold">sold</span>
                                                        <span class="badge badge-light rounded-0">{{$soldCarCount}}</span>

                                                    </a>
                                                    <a href="/user/profile?type=active" type="button" class="btn btn-success rounded-0 border">
                                                        <span class=" text-capitalize text-bold">active</span>
                                                        <span class="badge badge-light rounded-0">{{$activeCarCount}}</span>

                                                    </a>
                                                </div>
                                                    -->
                                                <!--
                                                <div class="table-responsive project-list profile-data-table-wrapper">
                                                    <table class="table project-table table-centered table-nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Image</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Views</th>
                                                                <th scope="col">Sold</th>

                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($userCar as $userCarData)
                                                            <tr>
                                                                <td>
                                                                    <div>
                                                                        <span>
                                                                            {{$userCarData->cid}}
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 110px;">
                                                                    <div class="team">
                                                                        <a href="javascript: void(0);" class="team-member w-100">
                                                                            <img src="data:image/*;base64,{{$userCarData->image}}" class="rounded-circle avatar-xs" alt="" />
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                <td class="name w-auto">
                                                                    <div class="w-auto flex-nowrap">
                                                                        <span>

                                                                            {{$userCarData->name}}
                                                                        </span>

                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    
                                                                   
                                                                    
                                                                    <div>
                                                                        @if($userCarData->status=="active")
                                                                        <input type="checkbox" onclick="location.href='/user/update/car/status?cid={{$userCarData->cid}}&v=sold'">
                                                                        @elseif($userCarData->status=="sold")
                                                                        <input type="checkbox" onclick="location.href='/user/update/car/status?cid={{$userCarData->cid}}&v=active'" checked>
                                                                        @endif
                                                                    </div>
                                                                </td>


                                                                <td>
                                                                    <div class="action">
                                                                        <a href="#" class="mr-2">
                                                                            <i class="fas fa-edit text-primary"></i>
                                                                        </a>
                                                                        <a href="/user/delete/car/?cid={{$userCarData->cid}}">
                                                                            <i class="fas fa-trash-alt text-danger h5 m-0"></i>

                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endforeach




                                                        </tbody>
                                                    </table>
                                                </div>
                                                -->


                                                <div id="main-content" class="file_manager mt-3">
                                                    <div class="container">
                                                        <div class="row clearfix">
                                                            @foreach($userCar as $userCarData)
                                                            <div class="col-lg-3 col-md-4 col-sm-12">

                                                                <div class="card border shadow-none">
                                                                    <div class="file" id="file">
                                                                            
                                                                           
                                                                            <div class="icon" id="icon-hover">
                                                                                <a href="/car/update?cid={{$userCarData->cid}}">
                                                                                    <img class="rounded" src="/products/{{$userCarData->image}}" style="height:180px;">
                                                                                </a>
                                                                            </div>

                                                                            
                                                                            
                                                                            <div class="file-name">

                                                                                <div style="height:30px;">
                                                                                    @if($userCarData->name!="0")
                                                                                        <span class="text-muted text-capitalize">{{$userCarData->name}}</span>
                                                                                    @endif
                                                                                </div>
                                                                                
                                                                                <small>
                                                                                    <!-- <i class="fas fa-eye"></i>15k -->
                                                                                    <span class="date text-muted">

                                                                                        <?php
                                                                                        $timestamp = date_parse($userCarData->date);
                                                                                        #echo $timestamp['month'];
                                                                                        echo $timestamp['day'] . " / " . $timestamp['month'] . "  / " . $timestamp['year'];
                                                                                        #echo date("F", mktime(0, 0, 0, $timestamp['month'], $timestamp['day']));
                                                                                        #var_dump(date_parse($userCarData->date)); 

                                                                                        ?>
                                                                                    </span>
                                                                                </small>
                                                                                <small>
                                                                                    @if($userCarData->status=="active")
                                                                                    <span class="badge badge-success p-1 rounded-0 text-uppercase">active</span>
                                                                                    @elseif($userCarData->status=="sold")
                                                                                    <span class="badge badge-danger p-1 rounded-0 text-uppercase">sold</span>
                                                                                    @endif

                                                                                    <span class="date text-muted text-capitalize ml-1">
                                                                                        
                                                                                        @foreach($model as $modelItem)
                                                                                        @if($modelItem->model_id==$userCarData->model)
                                                                                            {{$modelItem->model_name}}
                                                                                        @endif
                                                                                        @endforeach
                                                                                    </span>

                                                                                    <span class="date text-muted text-capitalize">
                                                                                        @foreach($brand as $brandItem)
                                                                                        @if($brandItem->brand_id==$userCarData->brand)
                                                                                        {{$brandItem->brand_name}}
                                                                                        @endif
                                                                                        @endforeach
                                                                                    </span>
                                                                                    
                                                                                    
                                                                                </small>
                                                                            </div>
                                                                        
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end project-list -->

                                                <div class="pt-3 w-100 d-flex justify-content-center">
                                                    {{$userCar->links()}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
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



    <!--------------- [ INCLUDE POPUP MODEL ] --------------->
    
    
    @include('/component/link/js')
    <script src="/assets/js/profile/profile.js"></script>
</body>

</html>