@extends('layout')

@section('content')
	<div class="big-image">
		<div class="big-image-overlay"></div>
		<div class="big-image-img"><img src="https://images-na.ssl-images-amazon.com/images/I/71oGeDtQHhL._SL1300_.jpg"></div>
	</div>

	<div class="ui card detail-card">
        <div class="card-image-wrap detail-card-image-wrap">
            <div class="image">
                <div class="floating ui circular label price-tag">$29.99</div>
                <img src="https://images-na.ssl-images-amazon.com/images/I/71oGeDtQHhL._SL1300_.jpg">
            </div>
        </div>
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>5,215 shares</div></div>
            {{-- <h3>Happy Baby Happy Mama Prenatal Organic Soft-Baked Oat Bars Pregnancy Snack, Blueberry/Beet, 5 Count</h3> --}}
            {{-- <div class="price"><h1>$29.99</h1></div> --}}
        </div>
        <div class="extra content">
          <button class="ui button amazon-btn"><i class="amazon icon"></i>Get it on Amazon</button>
        </div>
    </div>

    
    {{-- <div class="shares"><div><i class="facebook square icon"></i>20,888 likes</div></div> --}}

<div class="ui items">
  <div class="item">
    <div class="content">
      <h2>Happy Baby Happy Mama Prenatal Organic Soft-Baked Oat Bars Pregnancy Snack, Blueberry/Beet, 5 Count</h2>
      <div class="description detail-description">
        Power up with our delicious soft-baked fiber bars—a purse staple that's great for helping to round out your prenatal nutrition needs each day.Thoughtfully made with gluten-free whole grain oats, blueberries, beets and a bevy of essential nutrients—including DHA, Choline and Calcium—these delicious snacks offer the extra nutrition you and your growing babe need during this special time of development.
      </div>

      <iframe class="reviews" src="https://www.amazon.com/reviews/iframe?akid=AKIAIQZS2SS6JBUK4ZPQ&alinkCode=xm2&asin=1338099132&atag=associate_tag&exp=2016-12-20T22%3A03%3A12Z&v=2&sig=5T5WCYR7VNrBIjB17kdvvLX%2BuyStYErpxxXtZD070uU%3D"></iframe>
    </div>
  </div>
</div>
@endsection