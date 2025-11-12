@extends('layout.master2')
@section('tittle', 'Emoodji - Prediksi')
@section('header', 'header1')
@section('page', 'Prediksi')
@section('nav_prediksi', 'active')

@section('content')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Hasil dan Saran</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                            <img class="img-fluid rounded" src="{{ asset('/img/image (3).jpg') }}" >
                    </div>
                </div>
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.1s">
                    {{-- <p>Probabilitas Kelas 0 (Tidak Depresi): {{ $predicted_proba['predicted_proba_class_0'] }}</p>
                    <p>Probabilitas Kelas 1 (Depresi): {{ $predicted_proba['predicted_proba_class_1'] }}</p> --}}

                    <h1 class="display-5 mb-4">Hasil</h1>
                    <p>Wah, kamu luar biasa! Nampaknya suasana hatimu benar-benar cerah. Terus jaga pola hidup sehatmu, 
                    dan luangkan waktu untuk menikmati setiap momen kebahagiaan. Ingatlah bahwa merayakan keberhasilan 
                    kecilmu bisa menjadi bahan bakar yang luar biasa untuk semangat hidupmu.</p>

                    <h1 class="display-5 mb-4">Saran</h1>
                    <p>Wah, kamu luar biasa! Nampaknya suasana hatimu benar-benar cerah. Terus jaga pola hidup sehatmu, 
                    dan luangkan waktu untuk menikmati setiap momen kebahagiaan. Ingatlah bahwa merayakan keberhasilan 
                    kecilmu bisa menjadi bahan bakar yang luar biasa untuk semangat hidupmu.</p>

                </div>
                
            </div>
        </div>
    </div>

@endsection