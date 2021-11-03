@extends('layouts.main')

@section('home')

<!-- ISI -->

<div class="container">

    <h1>Page {{ $title }}</h1>
<hr>

<?php $x = 0; ?>

@foreach ($katalogs as $katalog)


@if ( $x <= 4)

    <div class="productbox">
        <p>{{ $x }}</p>
        <a href="/katalogs/{{ $katalog["id"]; }}">
            <img src="/img/{{ $katalog["gambar"] }}" alt="">
            <label for="">{{ $katalog["nama"] }}</label>
            <p>Rp. {{ $katalog["harga"] }}</p>
            <p>{{ $katalog["category"] }}</p>
        </a>
    </div>
@else
    <div class="clear"></div>
    <?php $x = 0; ?>
    <div class="productbox">
        <p>{{ $x }}</p>
        <a href="/katalogs/{{ $katalog["id"]; }}">
            <img src="/img/{{ $katalog["gambar"] }}" alt="">
            <label for="">{{ $katalog["nama"] }}</label>
            <p>Rp. {{ $katalog["harga"] }}</p>
            <p>{{ $katalog["category"] }}</p>
        </a>
    </div>
@endif

<?php $x++; ?>

@endforeach
</div> // container

@endsection
