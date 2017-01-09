@extends('layout')

@section('content')
<div class="sort-menu">
    <button class="ui button sort-active"><div><i class="facebook square icon"></i>TRENDING</div></button>
    <button class="ui button"><div><i class="calendar outline icon"></i>LATEST</div></button>
    <button class="ui button"><div><i class="heart icon"></i>PRICE</div></button>
</div>

<div class="cards">
  @foreach($products as $product)
    <div class="ui card">
        <div class="card-image-wrap">
            <div class="image">
                <div class="floating ui circular label price-tag">{{ $product->price }}</div>
                <img src="{{ $product->image_url }}">
            </div>
        </div>
        
        <div class="content">
            <div class="shares"><div><i class="facebook square icon"></i>{{ $product->fb_shares }} shares</div></div>
            <h3>{{ $product->title }}</h3>
        </div>
        <div class="extra content">
          <a class="ui button" href="{{ url($product->id) }}"><i class="info circle icon"></i>Details</a>
          <a class="ui button amazon-btn" href="{{ url($product->amazon_url) }}"><i class="amazon icon"></i>Get it on Amazon</a>
        </div>
    </div>
  @endforeach
</div>

{{ $products->links() }}
<button class="ui button load-more"><div><i class="plus icon"></i>MORE</div></button>
@endsection