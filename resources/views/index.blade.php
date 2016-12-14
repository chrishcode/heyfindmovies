@extends('layout')

@section('content')
<div class="sort-menu">
    <button class="ui button sort-active"><div><i class="facebook square icon"></i>TRENDING</div></button>
    <button class="ui button"><div><i class="calendar outline icon"></i>LATEST</div></button>
    <button class="ui button"><div><i class="heart icon"></i>POPULAR</div></button>
    <button class="ui button"><div><i class="star icon"></i>RATING</div></button>
</div>

<div class="cards">
    <div class="ui card">
        <div class="card-image-wrap">
            <div class="image">
                <div class="floating ui circular label price-tag">$29.99</div>
                <img src="https://images-na.ssl-images-amazon.com/images/I/61Y5LrEHXOL._SL1000_.jpg">
            </div>
        </div>
        
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>20,888 likes</div></div>
            {{-- <div class="price"><h1>$29.99</h1></div> --}}
            <h3>Bumpboosters Pregnancy Cookies - Oatmeal Chocolate Chip - 2 oz - 12 ct</h3>
            {{-- <div class="meta">
                <span class="date">Drama, Comedy</span>
            </div> --}}
            {{-- <div class="description">
                After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.
            </div> --}}
        </div>
        {{-- <div class="extra content">
            <div>
              <i class="calendar outline icon"></i>
              2016
            </div>
            <div>
              <i class="heart icon"></i>
              7
            </div>
            <div>
              <i class="star icon"></i>
              6.8
            </div>
        </div> --}}
        <div class="extra content">
          <a class="ui button" href="{{ url('/detail') }}"><i class="info circle icon"></i>More</a>
          <a class="ui button amazon-btn" href="{{ url('/detail') }}"><i class="amazon icon"></i>Get it on Amazon</a>
        </div>
    </div>
    <div class="ui card">
        <div class="card-image-wrap">
            <div class="image">
                <div style="font-size: 18px; background-color: #fe7992; color: white;" class="floating ui circular label">$29.99</div>
                <img src="https://images-na.ssl-images-amazon.com/images/I/61Y5LrEHXOL._SL1000_.jpg">
            </div>
        </div>
        
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>20,888 likes</div></div>
            {{-- <div class="price"><h1>$29.99</h1></div> --}}
            <h3>Bumpboosters Pregnancy Cookies - Oatmeal Chocolate Chip - 2 oz - 12 ct</h3>
            {{-- <div class="meta">
                <span class="date">Drama, Comedy</span>
            </div> --}}
            {{-- <div class="description">
                After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.
            </div> --}}
        </div>
        {{-- <div class="extra content">
            <div>
              <i class="calendar outline icon"></i>
              2016
            </div>
            <div>
              <i class="heart icon"></i>
              7
            </div>
            <div>
              <i class="star icon"></i>
              6.8
            </div>
        </div> --}}
        <div class="extra content">
          <a class="ui button" href="{{ url('/detail') }}"><i class="info circle icon"></i>More</a>
          <a class="ui button amazon-btn" href="{{ url('/detail') }}"><i class="amazon icon"></i>Get it on Amazon</a>
        </div>
    </div>
    <div class="ui card">
        <div class="card-image-wrap">
            <div class="image">
                <div style="font-size: 18px; background-color: #fe7992; color: white;" class="floating ui circular label">$29.99</div>
                <img src="https://images-na.ssl-images-amazon.com/images/I/61Y5LrEHXOL._SL1000_.jpg">
            </div>
        </div>
        
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>20,888 likes</div></div>
            {{-- <div class="price"><h1>$29.99</h1></div> --}}
            <h3>Bumpboosters Pregnancy Cookies - Oatmeal Chocolate Chip - 2 oz - 12 ct</h3>
            {{-- <div class="meta">
                <span class="date">Drama, Comedy</span>
            </div> --}}
            {{-- <div class="description">
                After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.
            </div> --}}
        </div>
        {{-- <div class="extra content">
            <div>
              <i class="calendar outline icon"></i>
              2016
            </div>
            <div>
              <i class="heart icon"></i>
              7
            </div>
            <div>
              <i class="star icon"></i>
              6.8
            </div>
        </div> --}}
        <div class="extra content">
          <a class="ui button" href="{{ url('/detail') }}"><i class="info circle icon"></i>More</a>
          <a class="ui button amazon-btn" href="{{ url('/detail') }}"><i class="amazon icon"></i>Get it on Amazon</a>
        </div>
    </div>
    <div class="ui card">
        <div class="card-image-wrap">
            <div class="image">
                <div style="font-size: 18px; background-color: #fe7992; color: white;" class="floating ui circular label">$29.99</div>
                <img src="https://images-na.ssl-images-amazon.com/images/I/61Y5LrEHXOL._SL1000_.jpg">
            </div>
        </div>
        
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>20,888 likes</div></div>
            {{-- <div class="price"><h1>$29.99</h1></div> --}}
            <h3>Bumpboosters Pregnancy Cookies - Oatmeal Chocolate Chip - 2 oz - 12 ct</h3>
            {{-- <div class="meta">
                <span class="date">Drama, Comedy</span>
            </div> --}}
            {{-- <div class="description">
                After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.
            </div> --}}
        </div>
        {{-- <div class="extra content">
            <div>
              <i class="calendar outline icon"></i>
              2016
            </div>
            <div>
              <i class="heart icon"></i>
              7
            </div>
            <div>
              <i class="star icon"></i>
              6.8
            </div>
        </div> --}}
        <div class="extra content">
          <a class="ui button" href="{{ url('/detail') }}"><i class="info circle icon"></i>More</a>
          <a class="ui button amazon-btn" href="{{ url('/detail') }}"><i class="amazon icon"></i>Get it on Amazon</a>
        </div>
    </div>
    <div class="ui card">
        <div class="card-image-wrap">
            <div class="image">
                <div style="font-size: 18px; background-color: #fe7992; color: white;" class="floating ui circular label">$29.99</div>
                <img src="https://images-na.ssl-images-amazon.com/images/I/61Y5LrEHXOL._SL1000_.jpg">
            </div>
        </div>
        
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>20,888 likes</div></div>
            {{-- <div class="price"><h1>$29.99</h1></div> --}}
            <h3>Bumpboosters Pregnancy Cookies - Oatmeal Chocolate Chip - 2 oz - 12 ct</h3>
            {{-- <div class="meta">
                <span class="date">Drama, Comedy</span>
            </div> --}}
            {{-- <div class="description">
                After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.
            </div> --}}
        </div>
        {{-- <div class="extra content">
            <div>
              <i class="calendar outline icon"></i>
              2016
            </div>
            <div>
              <i class="heart icon"></i>
              7
            </div>
            <div>
              <i class="star icon"></i>
              6.8
            </div>
        </div> --}}
        <div class="extra content">
          <a class="ui button" href="{{ url('/detail') }}"><i class="info circle icon"></i>More</a>
          <a class="ui button amazon-btn" href="{{ url('/detail') }}"><i class="amazon icon"></i>Get it on Amazon</a>
        </div>
    </div>
    <div class="ui card">
        <div class="card-image-wrap">
            <div class="image">
                <div style="font-size: 18px; background-color: #fe7992; color: white;" class="floating ui circular label">$29.99</div>
                <img src="https://images-na.ssl-images-amazon.com/images/I/61Y5LrEHXOL._SL1000_.jpg">
            </div>
        </div>
        
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>20,888 likes</div></div>
            {{-- <div class="price"><h1>$29.99</h1></div> --}}
            <h3>Bumpboosters Pregnancy Cookies - Oatmeal Chocolate Chip - 2 oz - 12 ct</h3>
            {{-- <div class="meta">
                <span class="date">Drama, Comedy</span>
            </div> --}}
            {{-- <div class="description">
                After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.
            </div> --}}
        </div>
        {{-- <div class="extra content">
            <div>
              <i class="calendar outline icon"></i>
              2016
            </div>
            <div>
              <i class="heart icon"></i>
              7
            </div>
            <div>
              <i class="star icon"></i>
              6.8
            </div>
        </div> --}}
        <div class="extra content">
          <a class="ui button" href="{{ url('/detail') }}"><i class="info circle icon"></i>More</a>
          <a class="ui button amazon-btn" href="{{ url('/detail') }}"><i class="amazon icon"></i>Get it on Amazon</a>
        </div>
    </div>
    <!--<div class="ui card">
        <div class="card-image-wrap">
            <div class="image">
                <img src="http://image.tmdb.org/t/p/w1000/xfWac8MTYDxujaxgPVcRD9yZaul.jpg">
            </div>
        </div>
        
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>20888</div></div>
            <h3>Doctor Strange (2016)</h3>
            {{-- <div class="meta">
                <span class="date">Drama, Comedy</span>
            </div> --}}
            <div class="description">
                After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.
            </div>
        </div>
        <div class="extra content">
            <div>
              <i class="heart icon"></i>
              7
            </div>
            <div>
              <i class="star icon"></i>
              6.8
            </div>
            <div>
              <i class="calendar outline icon"></i>
              2016
            </div>
            <div>
              <i class="hourglass empty icon"></i>
              120 min
            </div>
        </div>
    </div>
    <div class="ui card">
        <div class="card-image-wrap">
            <div class="image">
                <img src="http://image.tmdb.org/t/p/w1000/xfWac8MTYDxujaxgPVcRD9yZaul.jpg">
            </div>
        </div>
        
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>20888</div></div>
            <h3>Doctor Strange (2016)</h3>
            {{-- <div class="meta">
                <span class="date">Drama, Comedy</span>
            </div> --}}
            <div class="description">
                After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.
            </div>
        </div>
        <div class="extra content">
            <div>
              <i class="heart icon"></i>
              7
            </div>
            <div>
              <i class="star icon"></i>
              6.8
            </div>
            <div>
              <i class="calendar outline icon"></i>
              2016
            </div>
            <div>
              <i class="hourglass empty icon"></i>
              120 min
            </div>
        </div>
    </div>
    <div class="ui card">
        <div class="card-image-wrap">
            <div class="image">
                <img src="http://image.tmdb.org/t/p/w1000/xfWac8MTYDxujaxgPVcRD9yZaul.jpg">
            </div>
        </div>
        
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>20888</div></div>
            <h3>Doctor Strange (2016)</h3>
            {{-- <div class="meta">
                <span class="date">Drama, Comedy</span>
            </div> --}}
            <div class="description">
                After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.
            </div>
        </div>
        <div class="extra content">
            <div>
              <i class="heart icon"></i>
              7
            </div>
            <div>
              <i class="star icon"></i>
              6.8
            </div>
            <div>
              <i class="calendar outline icon"></i>
              2016
            </div>
            <div>
              <i class="hourglass empty icon"></i>
              120 min
            </div>
        </div>
    </div>
    <div class="ui card">
        <div class="card-image-wrap">
            <div class="image">
                <img src="http://image.tmdb.org/t/p/w1000/xfWac8MTYDxujaxgPVcRD9yZaul.jpg">
            </div>
        </div>
        
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>20888</div></div>
            <h3>Doctor Strange (2016)</h3>
            {{-- <div class="meta">
                <span class="date">Drama, Comedy</span>
            </div> --}}
            <div class="description">
                After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.
            </div>
        </div>
        <div class="extra content">
            <div>
              <i class="heart icon"></i>
              7
            </div>
            <div>
              <i class="star icon"></i>
              6.8
            </div>
            <div>
              <i class="calendar outline icon"></i>
              2016
            </div>
            <div>
              <i class="hourglass empty icon"></i>
              120 min
            </div>
        </div>
    </div>
    <div class="ui card">
        <div class="card-image-wrap">
            <div class="image">
                <img src="http://image.tmdb.org/t/p/w1000/xfWac8MTYDxujaxgPVcRD9yZaul.jpg">
            </div>
        </div>
        
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>20888</div></div>
            <h3>Doctor Strange (2016)</h3>
            {{-- <div class="meta">
                <span class="date">Drama, Comedy</span>
            </div> --}}
            <div class="description">
                After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.
            </div>
        </div>
        <div class="extra content">
            <div>
              <i class="heart icon"></i>
              7
            </div>
            <div>
              <i class="star icon"></i>
              6.8
            </div>
            <div>
              <i class="calendar outline icon"></i>
              2016
            </div>
            <div>
              <i class="hourglass empty icon"></i>
              120 min
            </div>
        </div>
    </div>-->
</div>

<button class="ui button load-more"><div><i class="plus icon"></i>MORE</div></button>
@endsection