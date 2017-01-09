@extends('layout')

@section('content')
	<div class="big-image">
		<div class="big-image-overlay"></div>
		<div class="big-image-img"><img src="{{ $product->image_url }}"></div>
	</div>

	<div class="ui card detail-card">
        <div class="card-image-wrap detail-card-image-wrap">
            <div class="image">
                <div class="floating ui circular label price-tag">{{ $product->price }}</div>
                <img src="{{ $product->image_url }}">
            </div>
        </div>
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>{{ $product->fb_shares }} shares</div></div>
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
      <h2>{{ $product->title }}</h2>
      <div class="description detail-description">
        <ul>
          @foreach($product->description as $feature)
            <li>{{ $feature }}</li>
          @endforeach
        </ul>
      </div>

      <iframe class="reviews" src="{{ $product->reviews }}"></iframe>
    </div>
  </div>
</div>
@endsection