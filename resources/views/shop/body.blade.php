    <!-- Carousel Start -->
    <div  class="container-fluid mb-3">
        <div  class="row px-xl-5">
            <div class="col-lg-8">
                <div  id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">    
                    <div style="border-radius: 40px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);" class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img style="border-radius: 40px;" class="position-absolute w-100 h-100" src="/shop/ok1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Beverage Section</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">In our beverage section, you'll find an extensive range of options to suit every preference and occasion. Indulge in a wide variety of soft drinks, including classic cola, zesty lemon-lime sodas, and an array of flavored sparkling waters. For those seeking hydration, we offer a diverse assortment of bottled water, featuring still water, mineral water, and even flavored varieties.</p>
                                    <a style="border-radius: 10px;" class="btn btn-outline-info py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#products-section">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div  class="product-offer mb-30" style="height: 200px;border-radius: 40px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
                    <img  class="img-fluid" src="/shop/ok2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save money on our Discounts</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a style="border-radius: 10px;" href="#products-section" class="btn btn-info">Shop Now</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;border-radius: 40px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
                    <img class="img-fluid" src="/shop/ok4.jpeg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save money on our Discounts</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a style="border-radius: 10px;" href="#products-section" class="btn btn-info">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div  class="row px-xl-5 pb-3">
            <div  class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div  style="border-radius: 35px;padding-bottom:30px;padding-top:30px;padding-left:20px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);" class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div style="border-radius: 35px;padding-bottom:30px;padding-top:30px;padding-left:20px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);" class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Fast Delivering</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div style="border-radius: 35px;padding-bottom:30px;padding-top:30px;padding-left:20px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);" class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


  

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
    <h2 id="products-section" class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured Products</span></h2>
    <div style="padding-top: 70px;" class="search-field d-none d-md-block" style="text-align: center;">
        <form style="padding-bottom: 30px; padding-bottom: 50px;" class="d-flex align-items-center h-100" action="{{ url('/shopHome/' . $id) }}" method="get">
            @csrf
                <div class="input-group" style="padding-left: 100px; width: 300px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.);">
                    <div class="input-group-prepend bg-transparent">
                    </div>
                    <input type="text" class="form-control bg-transparent border-7" name="search_product" placeholder="Search Product">
                </div>
                <div style="align-items: center;">
                    <input type="submit" class="btn btn-outline-info" value="Search">
                </div>
        </form>
    </div>
    <div class="row px-xl-5">
        <!-- shopHome.blade.php -->
@forelse($products as $product)
    @if($product->user_id == $id)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img style="width: 50px; height:400px;object-fit: contain;" class="img-fluid w-100" src="/product_image/{{$product->image}}" alt="">
                    @php
                            $shop = \App\Models\User::find($product->user_id);
                        @endphp
                    <div class="product-action">
                        <form id="myForm-{{$product->id}}" method="POST" action="{{url('/add_cart',$product->id.'/'.$shop->name)}}">
                            @csrf
                            <input type="number" name="quantity" value="{{ auth()->check() && auth()->user()->usertype === 'b2b' ? 10 : 1 }}" hidden>
                            <a class="btn btn-outline-dark btn-square" href="#" onclick="event.preventDefault(); document.getElementById('myForm-{{$product->id}}').submit();">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </form>
                        <a class="btn btn-outline-dark btn-square" href="{{ url('/search_compare/' . $product->id . '/' . $id) }}"><i class="fa fa-sync-alt"></i></a>
                        <a class="btn btn-outline-dark btn-square" href="{{ url('/product_details/' . $product->id . '/' . $id) }}"><i></i>view</a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">{{$product->title}}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>${{$product->price}}.00</h5>
                        <h6 class="text-muted ml-2"><del>
                            @if($product->discount_price!=null)
                                ${{$product->discount_price}}.00
                            @endif
                        </del></h6>
                    </div>
                    
                </div>
            </div>
        </div>
    @endif
@empty
    <div class="col-12">
        <p>No products found.</p>
    </div>
@endforelse
    </div>
</div>

        </div>
    </div>
    <!-- Products End -->





    

