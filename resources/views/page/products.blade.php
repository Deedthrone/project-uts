@extends('layouts.main')

@section('home')
<title>Project UTS | Katalog</title>

<!-- ISI -->

<div class="container">

    <h1>Page {{ $title }}</h1>
    <hr>

    <?php $x = 0; ?>

    @foreach ($products as $product)


    @if ( $x <= 4) <div class="productbox">
        <a href="/products/{{ $product->id }}">
            <img src="/img/{{ $product->img }}" alt="$product->name">
            <label for="">{{ $product->name }}</label>
            <p>Rp. {{ $product->normal_price }}</p>
            <p>Category : {{ $product->slug }}</p>
        </a>
        <div class="beli">
            <a href="/sewa/{{ $product->id }}">
                <button>Beli</button>
            </a>
        </div>

</div>
@else
<div class="clear"></div>
<?php $x = 0; ?>
<div class="productbox">
    <a href="/products/{{ $product->id }}">
        <img src="/img/{{ $product->img }}" alt="$product->name">
        <label for="">{{ $product->name }}</label>
        <p>Rp. {{ $product->normal_price }}</p>
        <p>Category : {{ $product->slug }}</p>
    </a>
    <div class="beli">
        <a href="/sewa/{{ $product->id }}">
            <button>Beli</button>
        </a>
    </div>

</div>
@endif

<?php $x++; ?>

@endforeach
</div> // container

@endsection