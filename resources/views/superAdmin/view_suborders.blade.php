<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>easyShop Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- End layout styles -->
    <link rel="" href="" />

  </head>


  <body>
    <div class="container-scroller">
      
      @include('superAdmin.nav')
      
        <div class="container-fluid page-body-wrapper">
        
            @include('superAdmin.sidebar')

            <div class="main-panel">
    <div style="padding-bottom: 100px; padding-top:20px;" class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{url('/home')}}">Dashboard</a>
                    <a class="breadcrumb-item text-dark" href="{{url('/order')}}">Orders</a>
                    <span class="breadcrumb-item active">Order Info</span>
                </nav>
            </div>
        </div>
    </div>

                <h2>Order</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Product Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                    @if($order->delivery_status !== 'Delivered')
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>
                            <img src="/product_image/{{$order->image}}">
                        </td>
                    </tr>
                    @endif
                    @empty
                    <tr>
                        <td colspan="6" style="color: red; text-align: center;">
                            No Data Found
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <br><br><br>

            <h2>User Details</h2>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($userDetails as $userDetail)
                    @php
                    $matchingOrder = $orders->where('user_id', $userDetail->user_id)->first();
                    @endphp
                    @if($matchingOrder)
                    <tr>
                        <td>{{$userDetail->name}}</td>
                        <td>{{$userDetail->phone}}</td>
                        <td>{{$userDetail->address}}</td>
                    </tr>
                    @endif
                    @empty
                    <tr>
                        <td colspan="3" style="color: red; text-align: center;">
                            No Data Found
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            <br><br>

            <h2>Delivered Products</h2>

            <table class="table table-hover table-light">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Product Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($deliveredOrders as $subOrder)
                    <tr>
                        <td>{{$subOrder->name}}</td>
                        <td>{{$subOrder->email}}</td>
                        <td>{{$subOrder->product_title}}</td>
                        <td>{{$subOrder->quantity}}</td>
                        <td>{{$subOrder->price}}</td>
                        <td>
                            <img src="/product_image/{{$subOrder->image}}">
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" style="color: red; text-align: center;">
                            No Data Found
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
           
        </div>
        </div>
        <div style="padding-top: 90px;">
            @include('superAdmin.footer')
        </div>
    </div>
    
    @include('superAdmin.js.dashboard')

  </body>

</html>