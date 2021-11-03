@extends('layouts.main')

@section('home')

<!-- ISI -->

<div class="container">
    <h1>Page {{ $title }}</h1>

    <hr>

    <div class="small-container chart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>

            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/tenda.jpg" alt="">

                        <div>
                            <p>Tenda</p>

                            <small>Price: Rp.1.490.000</small>
                            <br />

                            <a href="">Remove</a>

                        </div>

                    </div>

                </td>

                <td><input type="number" value="1"></td>

                <td>Rp.1.490.000</td>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/tas.jpg" alt="">

                        <div>
                            <p>Tas Carrier</p>

                            <small>Price: Rp.60.000</small>
                            <br>

                            <a href="">Remove</a>

                        </div>

                    </div>

                </td>

                <td><input type="number" value="1"></td>

                <td>Rp.60.000</td>

            </tr>


            </tr>

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