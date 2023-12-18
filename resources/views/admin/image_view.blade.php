<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>easyShop Admin</title>
    <!-- plugins:css -->
    <base href="/public">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- End layout styles -->
    <link rel="" href="" />

  </head>


  <body>
    <div class="container-scroller">
      
      @include('admin.nav')
      
        <div class="container-fluid page-body-wrapper">
        
            @include('admin.sidebar')

            <div class="main-panel">
                <div class="container-fluid">
                    <div class="row px-xl-5">
                        <div class="col-12">
                            <nav class="breadcrumb bg-light mb-30">
                                <a class="breadcrumb-item text-dark" href="{{url('/home')}}">Dashboard</a>
                                <a class="breadcrumb-item text-dark" href="{{url('/show_product')}}">Products</a>
                                <span class="breadcrumb-item active">Product Image</span>
                            </nav>
                        </div>
                    </div>
                </div>

                <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                    <img src="/product_image/{{$product->image}}" alt="Product Image">
                </div>
                
            </div>
            
        
        </div>
        @include('admin.footer')
        
      
    </div>
    
    @include('admin.js.dashboard')

  </body>

</html>