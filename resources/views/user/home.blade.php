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

        @include('user.body')
        

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