@extends('layouts.back')

@section('home')
<title>Project UTS | Detail</title>

<div class="container">
<!-- ISI -->
<h1>Page {{ $title }}</h1>
<hr>
<div class="clear"></div>

<div class="itemdetail">
    <img src="/img/{{ $katalog["gambar"] }}" alt="">
    <div class="content">
        <h4>Shop / {{ $katalog["category"] }}</h4>
        <hr>
    <ul>
        <li><b>Nama :</b> {{ $katalog["nama"] }}</li>
        <li><b>Category :</b> {{ $katalog["category"] }}</li>
        <li><b>Harga : </b> Rp.{{ $katalog["harga"] }}</li>
        <li><b>Penjelasan :</b></li>
        <li>{{ $katalog["penjelasan"] }}</li>
    </ul>
    <div class="back">
        <a href="../katalogs"><button>Back</button></a>
    </div>
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
