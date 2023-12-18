<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="" type="" href="" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        

        <title>EasyShop</title>

        @include('user.css.bootstrapIcons')
        @include('user.css.owl')
        @include('user.css.owlTheme')
        @include('user.css.tooplate')
        @include('user.css.style')

    </head>
    
    <body id="top">

        @include('user.nav')

        <main>


            <section class="job-section section-padding pb-0">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <h2 class="job-title mb-0">About Subscriptions</h2>

                            <div class="job-thumb job-thumb-detail">
                                <div class="d-flex flex-wrap align-items-center border-bottom pt-lg-3 pt-2 pb-3 mb-4">
                                    
                                </div>

                                <h4 class="mt-4 mb-2">Introducing Our Convenient Subscription Service: Never Run Out of Essentials Again!

</h4>
                
                                <p style="font-size:24px;">At easyShop, we understand the importance of having your everyday essentials readily available. That's why we offer a hassle-free subscription service that ensures you never run out of the products you love. During the checkout process, simply select the option to "Subscribe this Cart" and choose the frequency at which you'd like to receive your items.</p>


                                <p style="font-size:24px;">With our subscription service, you have full control over your delivery schedule. You can specify the number of days between each delivery, allowing you to customize the frequency based on your needs. Whether it's weekly, bi-weekly, or monthly, we've got you covered.</p>

                                <p style="font-size:24px;">Once you've subscribed, you can sit back and relax, knowing that your selected items will be automatically delivered to your doorstep according to your preferred schedule. No more last-minute trips to the store or worrying about running out of essential items.</p>

                                <p style="font-size:24px;">But convenience isn't the only benefit of our subscription service. By subscribing to your cart, you also unlock exclusive discounts and savings. Enjoy discounted prices on your subscribed items, making it even more cost-effective to maintain a steady supply of your favorite products.</p>

                                <p style="font-size:24px;">Our subscription service is flexible and user-friendly. You have the option to modify, pause, or cancel your subscription at any time, giving you full control over your shopping experience. Need to change the delivery frequency or update the items in your subscription? No problem – our platform makes it easy to manage your subscription preferences with just a few clicks. </p>

                                <p style="font-size:24px;">Experience the freedom and peace of mind that comes with our subscription service. Say goodbye to the inconvenience of running out of essentials and embrace a seamless shopping experience that ensures your favorite items are always within reach. Sign up for our subscription service today and enjoy the convenience, savings, and reliability it brings.</p>


                                <div class="d-flex justify-content-center flex-wrap mt-5 border-top pt-4">
                                    <a href="{{url('/show_cart')}}" class="custom-btn btn mt-2">Go to Cart</a>


                                    
                                </div>
                            </div>
                        </div>

                        
                        </div>

                    </div>
                </div>
            </section>

            


            


        </main>
        

    </body>

    <footer style="padding-top: 1300px;" class="site-footer">

    @include('user.footer')

    </footer>


    @include('user.js.bootstrap')
    @include('user.js.counter')
    @include('user.js.custom')
    @include('user.js.query')
    @include('user.js.script')
    @include('user.js.owl')


</html>