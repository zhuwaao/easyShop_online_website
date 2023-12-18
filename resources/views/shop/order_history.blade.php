<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OK Zimbabwe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="" rel="">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    @include('shop.css.home')
</head>

<body>

@include('sweetalert::alert')
 
@include('shop.nav')


<!-- Breadcrumb Start -->
<div class="container-fluid" style="padding-top: 30px;">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav style="border-radius: 20px;" class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{url('/')}}">Home</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop.home', ['id' => $id]) }}">shopHome</a>
                    <span class="breadcrumb-item active">Order History</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead style="background-color: steelblue; color:white;">
                        <tr>
                            <th>Order ID</th>
                            <th>Product Title</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php $totalprice=0; ?>
                        @foreach ($previousOrders as $order)
                            <tr>
                                <td class="align-middle">{{ $order->id }}</td>
                                <td class="align-middle">{{ $order->product_title }}</td>
                                <td class="align-middle">{{ $order->quantity }}</td>
                                <td class="align-middle">{{ $order->price }}</td>
                                <td class="align-middle"><img style="height: 100px;width:100px;object-fit:contain;" src="/product_image/{{$order->image}}" alt=""></td>
                                <td class="align-middle">
                                <a style="border-radius:8px;" href="{{ url('/remove_order', $order->id) }}" onclick="return confirmation(event)" class="btn btn-danger">Remove</a>
                                </td>
                            </tr>

                        <?php $totalprice=$totalprice + $order->price ?>
                        

                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>${{$totalprice}}.00</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Dilivery</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>${{$totalprice + 10}}.00</h5>
                        </div>
                        <a href="{{url('stripe',$totalprice + 10)}}" class="btn btn-block btn-primary font-weight-bold my-3 py-3">ReOrder Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->





    



@include('shop.js.home')



@include('shop.footer')
</body>

</html>