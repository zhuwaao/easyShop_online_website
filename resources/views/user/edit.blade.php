<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="/public">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="" type="" href="" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        

        <title>EasyShop</title>

        @include('user.css.bootstrapIcons')
        @include('user.css.owl')
        @include('user.css.owlTheme')
        @include('user.css.tooplate')
        @include('user.css.style')
        @include('user.css.register')

    </head>
    
    <body id="top">

        @include('user.nav')



        <main>
        <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="top_link"><a href="/"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
                <div class="contact">                     
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <h3>Edit Profile</h3>  

                        <div>
                            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                                        
                        <div>
                            <input id="username" type="text" class="@error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        
                        <div>
                            <button type="submit" class="submit">Submit</button>
                            
                        </div>
                    </form>
                </div>
            </div>
            
    </section>
                







            <div >
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
            </div>
        </main>
        

    </body>

    <footer class="site-footer">

    @include('user.footer')

    </footer>


    @include('user.js.bootstrap')
    @include('user.js.counter')
    @include('user.js.custom')
    @include('user.js.query')
    @include('user.js.script')
    @include('user.js.owl')


</html>