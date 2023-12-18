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
<div class="container-fluid" style="padding-top: 30px; padding-bottom:700px; height:400px;width:900px;">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav style="border-radius: 20px;" class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{url('/')}}">Home</a>
                    <span class="breadcrumb-item active">Shop</span>
                </nav>
            </div>
        </div>
    <!-- Breadcrumb End -->
<div>
    
    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Subscription</span></h5>
        <div class="bg-light p-30 mb-5">
            <div class="border-bottom pb-2">
                <div class="d-flex justify-content-between mb-3">
                    <h6>Total</h6>
                    <h6>${{ $total }}.00</h6>
                </div>
                
            </div>
            <div class="pt-2">
                <div class="d-flex justify-content-between mt-2">
                    <h5>Total</h5>
                    <h5>${{ $total }}.00</h5>
                </div>
                <form action="{{ url('stripe_subscribe',['total' => $total]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="subscription_days">Subscribe for how many Days</label>
                        <select class="form-control" id="subscription_days" name="subscription_days" required>
                            @for ($i = 5; $i <= 30; $i++)
                                <option value="{{ $i }}">{{ $i }} days</option>
                            @endfor
                        </select>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Subscribe this Cart</button>
                </form>
            </div>
            <div class="pt-2">
                <a href="{{ url('/show_cart') }}" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Back</a>
            </div>
        </div>
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