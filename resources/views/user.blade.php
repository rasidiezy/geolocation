@extends('layouts.app')

@section('content')
<section class="container">
    <div class="jumbotron">
        <h1>GEOLOCATION</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <button onclick="getLocation()">Deteksi Lokasi Saya</button>

            <p id="demo"></p>

            <h4>Alamat Saya : <p id="adress"></p>
            </h4>
        </div>
        <!-- Elemen yang akan menjadi kontainer peta -->
        <div id="googleMap" style="width:100%;height:380px;"></div>
    </div>
</section>
@endsection
