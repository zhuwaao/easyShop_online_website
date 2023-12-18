<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OK Zimbabwe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
@include('shop.css.product_details')
</head>

<body>
@include('sweetalert::alert')
    
    @include('shop.topbar')


    @include('shop.nav')


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav style="border-radius: 20px;" class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{url('/')}}">Home</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop.home', ['id' => $id]) }}">Shop</a>
                    <span class="breadcrumb-item active">Shop Detail</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img height="700px" width="450px" style="object-fit: contain;"   src="{{ asset('product_image/' . $product->image) }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div style="padding-top: 80px;" class="h-100 bg-light p-30">
                    <h3>{{$product->title}}</h3>

                    <h3 class="font-weight-semi-bold mb-4">${{$product->price}}.00</h3><h6 class="text-muted ml-2">Discount <del>
                                @if($product->discount_price!=null)
                                    ${{$product->discount_price}}.00
                                @endif
                            </del></h6>
                    <p style="padding-top: 20px;" class="mb-4">{{$product->description}}</p>
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus" onclick="updateQuantity(-1)">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input id="quantityInput" type="text" class="form-control bg-secondary border-0 text-center" value="10">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus" onclick="updateQuantity(1)">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        @php
                            $shop = \App\Models\User::find($product->user_id);
                        @endphp

                        <form id="quantityForm" method="POST" action="{{ url('/add_cart', $product->id).'/'.$shop->name }}">
                            @csrf
                            <input id="quantityFormInput" type="number" name="quantity" value="1" min="1" style="display: none;">
                            <button class="btn btn-primary px-3" onclick="setQuantityAndSubmit(event)">
                                <i class="fa fa-shopping-cart mr-1"></i> Add To Cart
                            </button>
                        </form>
                    </div>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="https://www.facebook.com">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="https://www.x.com">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="https://www.linkedin.com">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="https://www.pinterest.com">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{$product->description}}</p>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->

    @include('shop.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    @include('shop.js.product_details')
</body>

</html>