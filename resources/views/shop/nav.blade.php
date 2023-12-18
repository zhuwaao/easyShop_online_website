    <!-- Navbar Start -->
   
    <div style="background-color: dodgerblue; padding-top:20px; padding-bottom:20px;"  class="container-fluid mb-30">
        <div class="row px-xl-5">
            
            <div  class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    
                    <div style="background-color: dodgerblue;"   class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">

                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a  style="color: white;font-size:20px;" href="{{ url('/show_order' . '/' . $id) }}" class="btn px-0">Order
                            </a>
                            <em style="color: black;">------</em>
                            <a style="color: white;font-size:20px;"  href="{{ url('/order_history' . '/' . $id) }}" class="btn px-0">Order History
                                <i class="fas text-primary"></i>
                            </a>
                            <em style="color: black;">-----</em>
                            <a style="color: white;font-size:20px;"  href="{{ url('/show_cart' . '/' . $id) }}" class="btn px-0 ml-3">Cart
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">{{$count_cart}}</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->