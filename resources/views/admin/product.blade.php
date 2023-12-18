<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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
                    @if(session()->has('message'))

                        <div class="alert alert-success" >

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>

                            {{session()->get('message')}}

                        </div>

                    @endif
                    <div class="container-fluid">
                        <div class="row px-xl-5">
                            <div class="col-12">
                                <nav class="breadcrumb bg-light mb-30">
                                    <a class="breadcrumb-item text-dark" href="{{url('/home')}}">Dashboard</a>
                                    <span class="breadcrumb-item active">Add Product</span>
                                </nav>
                            </div>
                        </div>
                
                        <div class="div-center" >
                            <div  class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="title-top">Add Product</h4>
                                        <form style="padding-left:50px;" action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data" >
                                        
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Product Title</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" id="product_title" placeholder="Write title" name="product_title" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Product Description</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" id="product_description" placeholder="Write description" name="product_description" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Product Price</label>
                                                <div class="col-sm-9">
                                                <input type="number" class="form-control" id="product_price"  name="product_price" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Product Quantity</label>
                                                <div class="col-sm-9">
                                                <input type="number" class="form-control" id="product_quantity" name="product_quantity" min="1" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Discount Price</label>
                                                <div class="col-sm-9">
                                                <input type="number" class="form-control" id="discount_price"  name="discount_price" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Product Category</label>
                                                <select class="form-control form-control-sm" id="product_category" name="category" required>
                                                    <option value="" selected="" >Add category</option>
                                                    @foreach($category as $category)

                                                    <option value="{{$category->category_name}}" >{{$category->category_name}}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="product_image">Product Image</label>
                                                <div class=" btn-icon-upload">
                                                    <input type="file" class="btn btn-inverse-success" id="product_image" name="product_image" required>
                                                    
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-gradient-primary me-2" value="Add Product">Submit</button>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                @include('admin.footer')

            </div>
        
        </div>
      
    </div>
    
    @include('admin.js.dashboard')

  </body>



</html>