<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="/public">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>easyShop Admin</title>
    <!-- plugins:css -->
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
          
                @include('admin.body')
          

                

            </div>
        
        </div>
        @include('admin.footer')
      
    </div>
    
    @include('admin.js.dashboard')

  </body>

</html>