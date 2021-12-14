

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


<div class="container mt-5">
  <div class="row">
    <div class="col"> 
        <form action="/brand/create" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="brand" placeholder="add brand" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">save</button>
                </div>
            </div>
          
        </form>


    </div>

    <div class="col">
      <form action="/model/create" method="post">
        <div class="input-group">
          <input type="text" class="form-control" name="model" placeholder="Model">
          <select class="custom-select" name="brand">
            @foreach ($brand as $brandItem)
              <option value="{{$brandItem->brand_id}}">{{$brandItem->brand_name}}</option>
            @endforeach
          </select>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">save</button>
          </div>
        </div>
        </form>
    </div>


  </div>

  <div class="row">
      <div class="col"> 
        <form action="/feature/create" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="feature" placeholder="add feature">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">save</button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>


