@extends('layouts.main')

@section('home')

<div class="container">
<!-- ISI -->
<h1>Page {{ $title }}</h1>
<hr>


<div class="checkout">
    <input type="text" name="" id="" placeholder="{{ $katalog["harga"] }}">
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
