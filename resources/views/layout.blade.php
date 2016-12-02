<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">


        <title>HeyFindMovies</title>

        <!-- Semantic UI -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('semantic/dist/semantic.min.css') }}">
        <script src="{{ URL::asset('semantic/dist/semantic.min.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Monoton|Open+Sans+Condensed:300,700|Open+Sans:300,400,700" rel="stylesheet"> 

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        <div class="top-bar">
            <div class="ui container top-bar-container">
                <div class="logo">
                    <p><span>Hey</span>FindMovies</p>
                </div>
                <p class="facebook">Gilla på facebook</p>
            </div>
        </div>

        <div class="header-image">
            <div class="header-text"><h2>Find movies trending on facebook.</h2></div>

            <img src="https://images.unsplash.com/photo-1461151304267-38535e780c79?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&s=6c6352ec73bb4dcb7b612aca32fd244f">
        </div>

        <div class="ui container">
        	@yield('content')
		</div>
		
        <div class="footer"></div>
    </body>
</html>