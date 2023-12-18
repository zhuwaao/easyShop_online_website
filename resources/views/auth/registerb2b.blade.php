<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>B2B Register</title>
</head>
@include('user.css.register')

<body>
    <section class="login">
        <div style="height: 900px;" class="login_box">
            <div class="left">
                <div class="top_link"><a href="/"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
                <div class="contact">
                    
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <h3>B2B Registration</h3>

                        <div>
                            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="business name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div>
                            <input id="username" type="text" class="@error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="@business username or business name" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="example@gmail.com (business email)" required autocomplete="email">

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
                            <input id="phone" type="tel" name="phone" class="@error('password') is-invalid @enderror" placeholder=" business phone number" required required autocomplete="phone">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div>

                            <input id="address" type="address" class="@error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Business Address" required autocomplete="address">

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div>
                            <input id="id_number" type="text" class="@error('id_number') is-invalid @enderror" name="id_number" value="{{ old('id_number') }}" placeholder="Businesss Registration   Number" required autocomplete="id_number">

                            @error('id_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div>

                            <input id="id_image" type="file" name="id_image" class="@error('id_image') is-invalid @enderror" value="{{ old('id_image') }}" required required autocomplete="id_image">

                            @error('id_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div>
                            <label for="usertype">User</label>
                            <select id="usertype" name="usertype" required autocomplete="usertype">
                                <option value="b2b Cuctomer">B2B Customer</option>
                            </select>
                        </div>

                        <div>
                            <button class="submit" type="submit">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="right-text">
                    <h2>Dear B2B Customer</h2>
                    <h5>Thank you for your interest in registering on our website. When you </h5>
                    <h5>complete the registration process, you will initially be registered as a</h5>
                    <h5>normal user. This allows you to explore the features and benefits</h5>
                    <h5>available to all users. However, please note that in order to be </h5>
                    <h5>recognized as a B2B customer and access exclusive privileges and</h5>
                    <h5>pricing, your account will need to be verified by our shop administrators.</h5>
                    <h5>They will review your information and determine if you meet the</h5> 
                    <h5>qualifications to be classified as a B2B customer. Once your verification is</h5>
                    <h5>complete, you will enjoy the full range of benefits and services tailored</h5>
                    <h5>specifically for our B2B customers. We appreciate your patience during</h5>
                    <h5> this process and assure you that we will expedite the verification as soon</h5>
                    <h5> as possible. If you have any further questions or require assistance,</h5>
                    <h5>please feel free to reach out to our customer support team.</h5>
                    
                    
                    
                </div>
        </div>
    </section>
</body>
</html>