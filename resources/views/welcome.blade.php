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
            <div class="header-text"><h2>Find movies popular on social media.</h2></div>

            <img src="https://images.unsplash.com/photo-1461151304267-38535e780c79?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&s=6c6352ec73bb4dcb7b612aca32fd244f">
        </div>

        <div class="ui container">
            <div class="sort-menu">
                <button class="ui button sort-active">POPULAR</button>
                <button class="ui button">RATING</button>
                <button class="ui button">YEAR</button>
                <button class="ui button">RUNTIME</button>
            </div>
        
            <div class="ui card">
                <div class="card-image-wrap">
                    <div class="image">
                        <img src="http://image.tmdb.org/t/p/w500/xfWac8MTYDxujaxgPVcRD9yZaul.jpg">
                    </div>
                </div>
                
                <div class="content">
                    <div class="shares"><div><i class="heart icon"></i>20888</div></div>
                    <h3>Doctor Strange (2016)</h3>
                    {{-- <div class="meta">
                        <span class="date">Drama, Comedy</span>
                    </div> --}}
                    <div class="description">
                        After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
