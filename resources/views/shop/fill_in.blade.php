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
                    <a class="breadcrumb-item text-dark" href="{{ route('shop.home', ['id' => $id]) }}">Shop</a>
                    <a class="breadcrumb-item text-dark" href="{{ url('/show_cart', ['id' => $id]) }}">Shopping Cart</a>
                    <span class="breadcrumb-item active">Shop</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->



    <div class="container-fluid">
        <h2 class="section-title position-relative  mx-xl-5 mb-4"><span class="bg-secondary pr-3">Add Delivery Details</span></h2>
        <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
    <div class="contact-form bg-light p-30">
        <div id="success"></div>
        <form id="proceedform" method="POST" action="{{url('/user_details/'.$total.'/'.$id)}}">
            @csrf

            <div class="control-group">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" placeholder="Enter your full name"
                    autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <br>
            <div class="control-group">
                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone"
                    value="{{ old('phone') }}" required autocomplete="phone" placeholder="Enter phone number"
                    autofocus>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <br>
            <div class="control-group">
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                    name="address" value="{{ old('address') }}" required autocomplete="address"
                    placeholder="Enter your address for Delivery" autofocus>
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <br>
        </form>
    </div>
</div>
<div class="col-lg-5 mb-5">
    <a href="#" class="btn btn-block btn-primary font-weight-bold my-3 py-3"
        onclick="event.preventDefault(); document.getElementById('proceedform').submit();">
        Proceed To Checkout ${{$total}}.00
    </a>
    <div class="bg-light p-30 mb-3">
        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, Westgate, Harare, Zimbabwe</p>
        <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@easyshop.com</p>
        <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+263 77 543 7899</p>
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