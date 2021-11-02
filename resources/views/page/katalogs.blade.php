@extends('layouts.main')

@section('home')

<!-- ISI -->

<div class="container">

    <h1>Page {{ $title }}</h1>
<hr>

@foreach ($katalogs as $katalog)

    <div class="productbox">
        <a href="/katalogs/{{ $katalog["id"]; }}">
            <img src="/img/{{ $katalog["gambar"] }}" alt="">
            <label for="">{{ $katalog["nama"] }}</label>
            <p>Rp. {{ $katalog["harga"] }}</p>
            <p>{{ $katalog["category"] }}</p>
        </a>
    </div>
 

@endforeach
</div>

@endsection
