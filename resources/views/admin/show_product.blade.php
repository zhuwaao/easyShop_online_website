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
                                <span class="breadcrumb-item active">Products</span>
                            </nav>
                        </div>
                    </div>
                </div>
                <div style="display:flex;justify-content:center;align-items:center;padding-top:80px;" >
          
                    <div class="col-lg-6 grid-margin stretch-card">
                        
                        <div class="card-body">
                            <h2 style="text-align: center;" class="toptext">Products</h2>
                            <p class="card-description"> All Products
                            </p>
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>Product title</th>
                                <th >Description</th>
                                <th>Quantity</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Product Image</th>
                                <th>Remove</th>
                                <th>Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $product)
                                <tr>
                                    <td>{{$product->title}}</td>
                                    <td >{{$product->description}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->category}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->discount_price}}</td>
                                    <td>
                                        <a href="/view_image/{{$product->id}}">
                                            <img src="/product_image/{{$product->image}}">
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-danger" href="{{url('delete_product',$product->id)}}" onclick="return confirm('Are you Sure to Delete this Product!')">Remove</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-dark" href="{{url('update_product',$product->id)}}">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>

                

            </div>
            @include('admin.footer')
        
        </div>
        
      
    </div>
    
    @include('admin.js.dashboard')

  </body>

</html>