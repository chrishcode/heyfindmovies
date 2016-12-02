<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>HeyPregnancyFood</title>

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
                    <p><span>Hey</span>Pregnancy Food</p>
                </div>
                <p class="facebook">Gilla på facebook</p>
            </div>
        </div>

        <div class="header-image">
            <div class="header-text"><h2>Find pregnancy food trending on facebook.</h2></div>

            <img src="https://images.unsplash.com/photo-1479803244419-b24dfe9cbafa?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=">
        </div>

        <div class="ui container">
        	@yield('content')
		</div>
		
        <div class="footer"></div>
    </body>
</html>