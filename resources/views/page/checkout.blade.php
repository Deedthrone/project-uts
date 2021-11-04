@extends('layouts.main')

@section('home')

<!-- ISI -->

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

            @foreach ($katalogs as $katalog)
            <tr>
                
                
                <td>
                    <div class="cart-info">
                        <img src="img/{{ $katalog["gambar"] }}" alt="">

                        <div>
                            <p>{{ $katalog["nama"] }}</p>

                            <small>Price: Rp.{{ $katalog["harga"] }}</small>
                            <br />

                            <a href="">Remove</a>

                        </div>

                    </div>

                </td>

                <td><input type="number" value="1"></td>

                <td>Rp. {{ $katalog["harga"] }}</td>
                
            </tr>
            @endforeach

        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>Rp.1.550.000</td>

                </tr>

                <tr>
                    <td>Shipping</td>
                    <td>Rp.200.000</td>

                </tr>

                <tr style="font-weight: bold;">
                    <td>Total</td>
                    <td>Rp.1.750.000</td>

                </tr>

            </table>

        </div>

    </div>

</div>

@endsection