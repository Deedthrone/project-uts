@extends('layouts.main')

@section('home')
@php
    use Carbon\Carbon;
@endphp

    <!-- ISI -->


<div class="container">
    <div class="home">

        <div class="homecontent">
            <h3>Selamat Datang {{ session('userdata')['username'] }}</h3>

            <h1>Page {{ $title }}</h1>
            <hr>

            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-xl-9 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-black">Data Katalog</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart" width="100" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row mt-4">
                    <div class="col-xl-9 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-black">Data Pesanan</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-responsive" id="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Barang</th>
                                            <th scope="col">Pendapatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{date('Y-m-d')}}</td>
                                            <td>Otto</td>
                                            <td>Rp {{number_format(4000000, 0, ',', '.')}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>{{date('Y-m-d', strtotime(' -1 day'))}}</td>
                                            <td>Thornton</td>
                                            <td>Rp {{number_format(5000000, 0, ',', '.')}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>{{date('Y-m-d', strtotime(' -2 day'))}}</td>
                                            <td>the Bird</td>
                                            <td>Rp {{number_format(1000000, 0, ',', '.')}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection

@section('c_js')
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Kat 1', 'Kat 2', 'Kat 3', 'Kat 4', 'Kat 5', 'Kat 6'],
                datasets: [{
                    label: 'Katalog',
                    data: [120, 209, 108, 56, 200, 132],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        $('#table').DataTable()
    </script>
@endsection
