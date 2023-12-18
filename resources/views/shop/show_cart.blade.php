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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    @include('shop.css.home')

</head>

<body>

@include('sweetalert::alert')



    @include('shop.nav')


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav style="border-radius: 20px;" class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{url('/')}}">Home</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop.home', ['id' => $id]) }}">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
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
                <thead style="background-color: steelblue;color:white;">
                    <tr>
                        <th>Product Title</th>
                        <th>Product Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Shop</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php $totalProducts = 0; ?>
                    <?php $totalprice = 0; ?>
                    <?php $shopTotalPrices = []; ?>
                    @foreach($cart as $item)
                        <tr>
                            <td class="align-middle">{{ $item->product_title }}</td>
                            <td class="align-middle">{{ $item->quantity }}</td>
                            <td class="align-middle">${{ $item->price }}.00</td>
                            <td class="align-middle"><img style="height: 100px;width:100px;object-fit: contain;" src="/product_image/{{ $item->image }}" alt=""></td>
                            <td class="align-middle" style="color: dodgerblue;font-weight:bold;">{{ $item->shop_name }}</td>
                            <td class="align-middle">
                                <a style="border-radius:8px;" href="{{ url('/remove_cart', $item->id) }}" onclick="return confirmation(event)" class="btn btn-danger">Remove</a>
                            </td>
                        </tr>

                        <?php
                            $totalProducts += 1;
                            $totalprice += $item->price;
                            if (isset($shopTotalPrices[$item->shop_name])) {
                                $shopTotalPrices[$item->shop_name] += $item->price;
                            } else {
                                $shopTotalPrices[$item->shop_name] = $item->price;
                            }
                        ?>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            @php
                $userType = auth()->user()->usertype ?? '';
            @endphp

            @if ($userType === 'b2b' && $totalProducts < 5)
                <div class="alert alert-danger" role="alert">
                    A business customer is only allowed to buy 5 products and above.
                </div>
            @endif

            
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    
                    @foreach ($shopTotalPrices as $shopName => $shopTotalPrice)
                    <div class="d-flex justify-content-between mb-3">
                        <h6>{{ $shopName }}</h6>
                        <h6>${{ $shopTotalPrice }}.00</h6>
                    </div>
                    @endforeach

                    @php
                        $discountAmount = 0;
                        if ($userType === 'b2b') {
                            $discountAmount = ($totalprice * 0.1);
                            $totalprice -= $discountAmount;
                        }
                    @endphp

                    @if ($discountAmount > 0)
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Discount for B2B (10%)</h6>
                        <h6>-${{ $discountAmount }}</h6>
                    </div>
                    @endif

                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6>${{$totalprice}}.00</h6>
                    </div>

                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Delivery</h6>
                        <h6 class="font-weight-medium">$10.00</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5>${{$totalprice + 10}}.00</h5>
                    </div>
                    @if (!($userType === 'b2b' && $totalProducts < 5))
                        <a href="{{ url('fill_in/' . ($totalprice + 10) . '/' . $id) }}" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</a>
                    @endif
                </div>
                <div class="pt-2">
                    @if (!($userType === 'b2b' && $totalProducts < 5))
                        <a href="{{ url('fill_in_subscribe/' . ($totalprice + 10) . '/' . $id) }}" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Subscribe this Cart</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Cart End -->


    @include('shop.footer')


    @include('shop.js.home')


    
</body>

</html>