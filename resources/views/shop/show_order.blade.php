<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OK Zimbabwe</title>
    <base href="/public">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    

    @include('shop.css.home')

</head>

<body>




    @include('shop.nav')


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav style="border-radius: 20px;" class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{url('/')}}">Home</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop.home', ['id' => $id]) }}">Shop</a>
                    <span class="breadcrumb-item active">Order</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            
            <div class="col-lg-8 table-responsive mb-5">
                <table style="padding-left:90px;" class="table table-light table-borderless table-hover text-center mb-0">
                    <thead style="background-color: steelblue; color:white;">
                        <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Payment Status</th>
                            <th>Delivery Status</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        
                        @foreach($order as $order)
                            <tr>
                                <td class="align-middle">{{$order->product_title}}</td>
                                <td class="align-middle">{{$order->quantity}}</td>
                                <td class="align-middle">${{$order->price}}.00</td>
                                <td class="align-middle">{{$order->payment_status}}</td>
                                <td class="align-middle">{{$order->delivery_status}}</td>
                                <td>
                                    <img style="height: 100px;width:100px;object-fit:contain;" src="product_image/{{$order->image}}" >
                                </td>
                            </tr>
                        @endforeach
                        

                        
                    </tbody>
                </table>
            </div>
            
    <!-- Cart End -->


    @include('shop.footer')


    @include('shop.js.home')

    
</body>

</html>