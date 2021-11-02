@extends('layouts.main')

@section('home')

<div class="container">
<!-- ISI -->
<h1>Page {{ $title }}</h1>
<hr>


<div class="checkout">
    <img src="/img/{{ $katalog["gambar"] }}" alt="">
    <div class="content">
        <h4>Shop / {{ $katalog["category"] }}</h4>
        <hr>
    </div>
</div>


{{-- <div class="test">
    <ul>
        <li>{{  $katalog["id"] }}</li>
        <li>{{  $katalog["nama"] }}</li>
        <li>{{  $katalog["category"] }}</li>
        <li>{{  $katalog["harga"] }}</li>
        <li>{{  $katalog["gambar"] }}</li>
    </ul>
</div> --}}
</div>

@endsection
