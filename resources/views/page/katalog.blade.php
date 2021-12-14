@extends('layouts.back')

@section('home')

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

</div>

@endsection
