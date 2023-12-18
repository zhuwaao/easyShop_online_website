

        <main>

            <section class="hero-section d-flex justify-content-center align-items-center">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <div class="hero-section-text mt-5">
                                <h6 class="text-white">Are you searching for the perfect online shopping experience?</h6>

                                <h1 class="hero-title text-white mt-4 mb-4"><em style="font-size: 40px;font-style:normal;" >Explore our easyShop. </em><br> <em style="font-size: 45px;font-style:normal;" >The Best Shopping Destination.</em></h1>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section  class="about-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-12">
                            <div class="about-image-wrap custom-border-radius-start ">
                                <a href="#shop" class="image-link">
                                <img src="ads/ad1.jpg" class="about-image custom-border-radius-start img-fluid dim-image" alt=""></a>
                                
                                
                            </div>
                            
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-text-block">
                                <h2 class="text-white mb-2">Introducing <em style="color: purple; font-style:normal;" >EasyShop</em></h2>

                                <p class="text-white">Discover a world of possibilities at EasyShop, your ultimate destination for online shopping. With a seamless and intuitive platform, we bring together a diverse range of shops, offering you an extensive collection of products all in one place. From <a href="/" target="_parent">fashion</a> and <a href="/" target="_parent">electronics</a> to <a href="/" target="_parent">home decor</a> and more, explore a multitude of categories curated to cater to your every need and desire.</p>

                                <div class="custom-border-btn-wrap d-flex align-items-center mt-5">
                                    <a href="{{url('/aboutUs')}}" class="custom-btn custom-border-btn btn me-4">Get to know us</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-12">
                            <div class="instagram-block ">
                                <a href="#shop" class="image-link">
                                <img src="ads/ad3.jpg" class="about-image custom-border-radius-end img-fluid dim-image" alt="">
                                </a>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="job-section job-featured-section section-padding" id="job-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 text-center mx-auto mb-4">
                            <h2 id="shops-section" >Featured Stores</h2>

                            <p><strong>Discover our curated selection of over 10,000 products from a variety of shops.</strong> Feel free to explore and find the perfect items for your needs. Take advantage of our wide range of choices and enjoy browsing through our collection of unique products. Don't forget to check out our special offers and discounts!</p>
                        </div>
                        @foreach($adminUsers as $user)
                        <div class="col-lg-12 col-12">
                            <div class="job-thumb d-flex">
                                
                               

                                
                                <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                                    <div class="mb-3">
                                        <h4 class="job-title mb-lg-0">
                                            <a href="{{ url('/shopHome', $user->id) }}" class="job-title-link" style="color: dodgerblue;">{{$user->name}}</a>
                                            
                                        </h4>
                                        <p style="font-weight: bold;" class="job-location mb-0">
                                                <i class="custom-icon bi-geo-alt me-1"></i>
                                                SUPPERMARKET
                                            </p>
                                        <div style="padding-left: 500px;" class="d-flex flex-wrap align-items-center">
                                           

                                            <div style="padding-left: 10px;" class="slideshow-container">
                                                <div  class="carousel slide" data-ride="carousel" data-interval="3000">
                                                    <div style="border-radius: 40px;" class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img style="border-radius: 40px; padding-bottom: 10px" height="100px" width="300px" class="img-fluid" src="shop/ok1.jpg" alt="">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img style="border-radius: 40px; padding-bottom: 10px" height="100px" width="300px" class="img-fluid" src="shop/ok2.jpg" alt="">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img style="border-radius: 40px; padding-bottom: 10px" height="100px" width="300px" class="img-fluid" src="shop/oklogo3.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="job-section-btn-wrap">
                                        <a href="{{url('/shopHome',$user->id)}}" class="custom-btn btn">Visit Now</a>
                                    </div>
                                </div>
                                
                            </div>
                            
                            @endforeach
                       

                            <div class="pagination-container text-center">
                                {{ $adminUsers->appends(request()->except('page'))->fragment('shops-section')->links() }}
                            </div>
                            
                        </div>
                        

                    </div>
                </div>
            </section>





            <section class="cta-section">
                <div class="section-overlay"></div>

                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-10">
                                <h2 class="text-white mb-2">Thank you for exploring easyShop platform</h2>

                                <p class="text-white">where you can discover a variety of shops all in one place. With a diverse range of products and a seamless shopping experience, we strive to make your browsing and buying journey enjoyable. Whether you're seeking fashion, electronics, home decor, or more, we have something for everyone. Start exploring now and find the perfect items that suit your style and needs. Happy shopping!</p>
                            </div>

                            <div class="col-lg-4 col-12 ms-auto">
                                <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                                    <a href="{{ url('register') }}" class="custom-btn custom-border-btn btn me-4">Sign Up</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </main>