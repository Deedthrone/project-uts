@extends('layouts.main')

@section('home')
<title>Project UTS | Checkout</title>
<!-- ISI -->


@php

$temp_total = 0; 

@endphp


<div class="container">
    <h1>Page {{ $title }}</h1>

    <hr>

    <div class="small-container chart-page">
        <table>
            <tr>
                <th><b>Product</b></th>
                <th><b>Quantity</b></th>
                <th><b>Subtotal</b></th>

            </tr>

            <form method="POST" action="hitung">
            @foreach ($katalogs as $katalog)
            <tr>
                
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="id" value="{{ $katalog["id"] }}">
                <td>
                    <div class="cart-info">
                        <img src="img/{{ $katalog["gambar"] }}" alt="">

                        <div>
                            <p>{{ $katalog["nama"] }}</p>

                            <small>Price: Rp.{{ $katalog["harga"] }}</small>
                            <input type="hidden" name="price" value="{{ $katalog["harga"] }}">

                            <br />

                            <a href="">Remove</a>

                        </div>

                    </div>

                </td>

                <td><input type="number" name="quantity" value="0"></td>


                <td>Rp. {{ $subtotal }}</td>

                @php
                    $temp_total = $temp_total + $subtotal;
                @endphp

                

                
            </tr>
            @endforeach
            <button type="submit" name="submit">Hitung</button>
        </form>

    </table>

    <div class="total-price">
        <table>
            <tr style="font-weight: bold;">
                <td>Total</td>
                <td>Rp.{{ $temp_total }}</td>

            </tr>

        </table>

    </div>
        
        </div>
    </div>

</div>

@endsection