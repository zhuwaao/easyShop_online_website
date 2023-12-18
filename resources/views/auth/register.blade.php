<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Register</title>
</head>
@include('user.css.register')
<body>
    <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="top_link"><a href="/"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
                <div class="contact">                     
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <h3>SIGN IN</h3>  

                        <div>
                            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="first name   surname" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                                        
                        <div>
                            <input id="username" type="text" class="@error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="@username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="example@gmail.com" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required autocomplete="new-password">
                        </div>
                        
                        <div>
                            <button type="submit" class="submit">{{ __('Register') }}</button>
                            <br>
                                <a class="register-btn" href="{{ url('login') }}">Sign in</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="right-text">
                    <h2>Did you know?</h2>
                    <h5>Did you know that we offer exclusive B2B </h5>
                    <h5>(Business-to-Business) discounts? By signing</h5>
                    <h5>up now, you can take advantage of special </h5>
                    <h5>pricing and benefits tailored specifically </h5>
                    <h5>for businesses. Whether you're looking to </h5>
                    <h5>purchase in bulk or regularly source products</h5>
                    <h5>or services, our B2B section provides</h5> 
                    <h5>cost-effective solutions to meet your needs.</h5>
                    <h5>Don't miss out on these valuable discounts </h5>
                    <h5>sign up today and start saving!</h5>
                    
                    <a href="{{ url('registerb2b') }}">
                        <button type="submit" class="submit-right">Sign Up</button>
                    </a>
                    
                </div>
            </div>
    </section>
</body>
</html>

