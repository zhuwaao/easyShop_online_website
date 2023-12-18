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

@include('shop.topbar')

<!-- Breadcrumb Start -->
<div class="container-fluid" style="padding-top: 30px;">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav style="border-radius: 20px;" class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{url('/')}}">Home</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop.home', ['id' => $user->id]) }}">Shop</a>
                    <span class="breadcrumb-item active">Product Comparison</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <div class="container-fluid pt-5 pb-3">
    <h2 id="products-section" class="section-title position-relative  mx-xl-5 mb-4"><span class="bg-secondary pr-3">Similar Products Across Shops</span></h2>
    <div class="row px-xl-5">

        @foreach($products as $product)

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                        @php
                            $shop = \App\Models\User::find($product->user_id);
                        @endphp

                        <div >
                            <a href="#" class="btn btn-block btn-primary font-weight-bold my-3 py-3">From: {{$shop->name}}</a>
                        </div>
                    <div class="product-img position-relative overflow-hidden">
                        <img style="width: 50px; height:400px;object-fit: contain;" class="img-fluid w-100" src="/product_image/{{$product->image}}" alt="">
                        <div class="product-action">
                        <form id="myForm-{{$product->id}}" method="POST" action="{{url('/add_cart',$product->id.'/'.$shop->name)}}">
                            @csrf
                            <input type="number" name="quantity" value="{{ auth()->check() && auth()->user()->usertype === 'b2b' ? 10 : 1 }}" hidden>
                            <a class="btn btn-outline-dark btn-square" href="#" onclick="event.preventDefault(); document.getElementById('myForm-{{$product->id}}').submit();">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </form>
                            <a class="btn btn-outline-dark btn-square" href="{{ url('/product_details/' . $product->id . '/' . $id) }}"><i></i>view</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">{{$product->title}}</a>

                        

                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>${{$product->price}}</h5>
                            <h6 class="text-muted ml-2">
                                <del>
                                    @if($product->discount_price != null)
                                        ${{$product->discount_price}}
                                    @endif
                                </del>
                            </h6>
                        </div>
                      
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</div>


@include('shop.js.home')
<script>
    document.addEventListener("DOMContentLoaded", function(event) { 
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };

      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you sure to cancel this product",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  
            


        });

        
    }
    document.addEventListener('DOMContentLoaded', function() {
    const compareForm = document.getElementById('compareForm');
    const compareBtn = document.getElementById('compareBtn');
    compareBtn.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the default link behavior
      compareForm.submit(); // Submit the form
    });
  });

    
</script>
<script>
    
</script>


@include('shop.footer')
</body>

</html>