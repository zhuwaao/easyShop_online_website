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
                    @if(session()->has('message'))

                        <div class="alert alert-success" >

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>

                            {{session()->get('message')}}

                        </div>

                    @endif
                
                        <div class="div-center" >
                            <div  class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="title-top">Update Product</h4>
                                        <form style="padding-left:50px;" action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data" >
                                        
                                            @csrf
                                            <div class="form-group row">
                                                <label style="font-weight: bold;" class="col-sm-3 col-form-label">Product Title</label>
                                                <div class="col-sm-9">
                                                <input type="text" value="{{$product->title}}" class="form-control" id="product_title" placeholder="Write title" name="product_title" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label style="font-weight: bold;" class="col-sm-3 col-form-label">Product Description</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" id="product_description" placeholder="Write description" name="product_description" value="{{$product->description}}" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label style="font-weight: bold;" class="col-sm-3 col-form-label">Product Price</label>
                                                <div class="col-sm-9">
                                                <input type="number" class="form-control" id="product_price"  name="product_price" value="{{$product->price}}" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label style="font-weight: bold;" class="col-sm-3 col-form-label">Product Quantity</label>
                                                <div class="col-sm-9">
                                                <input type="number" class="form-control" id="product_quantity" name="product_quantity" min="1" value="{{$product->quantity}}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label style="font-weight: bold;" class="col-sm-3 col-form-label">Discount Price</label>
                                                <div class="col-sm-9">
                                                <input type="number" class="form-control" id="discount_price"  name="discount_price" value="{{$product->discount_price}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label style="font-weight: bold;" for="">Product Category</label>
                                                <select class="form-control form-control-sm" id="product_category" name="category" required>
                                                    

                                                    <option value="{{$product->category}}" selected="" >{{$product->category}}</option>
                                                    @foreach($category as $category)

                                                    <option value="{{$category->category_name}}" >{{$category->category_name}}</option>

                                                    @endforeach
                                                </select>

                                                    
                                                </select>
                                            </div>


                                           
                                            
                                            <div class="form-group">
                                                <label style="font-weight: bold;" for="product_image">Current Product Image</label>
                                                
                                                <img style="margin: auto;" height="200" width="200" src="/product_image/{{$product->image}}">
                                            </div>

                                            <div class="form-group">
                                                <label style="font-weight: bold;" for="product_image">Update Product Image</label>
                                                <div class=" btn-icon-upload">
                                                    <input type="file" class="btn btn-inverse-success" id="product_image" name="product_image">
                                                    
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-gradient-primary me-2" value="Update Product">Update</button>
                                            
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