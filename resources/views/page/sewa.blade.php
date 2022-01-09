@extends('layouts.back')

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
                <th><b>Berapa lama</b></th>
                <th><b>Subtotal</b></th>


            </tr>

            <form method="GET" action="/hitungsewa/{{ $product->id }}">
                <tr>

                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <td>
                        <div class="cart-info">
                            <img src="/img/{{ $product->img }}" alt="{{ $product->name }}">

                            <div>
                                <p>{{ $product->name }}</p>

                                <small>Price: Rp.{{ $product->normal_price }}</small>
                                <input type="hidden" name="price" value="{{ $product->normal_price }}">
                                <input type="hidden" name="charge" value="0">
                                <br />

                                <a href="">Remove</a>

                            </div>

                        </div>

                    </td>

                    <td><input type="number" name="quantity" value="0"></td>

                    <td><input type="number" name="durasi" value="0"></td>

                    <td>Rp. {{ $total }}</td>





                </tr>
                <button type="submit" name="beli">Hitung</button>
            </form>

        </table>

        <div class="total-price">
            <table>
                <tr style="font-weight: bold;">
                    <td>Total</td>
                    <td>Rp. {{ $total }}</td>

                </tr>

            </table>

        </div>

    </div>
</div>

</div>

@endsection