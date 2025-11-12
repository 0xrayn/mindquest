@extends('layout.master2')
@section('tittle', 'Emoodji - 404')
@section('header', 'header4')
@section('page', '404 Error')


@section('content')


    <!-- 404 Start -->
    <div class="py-5 container-xxl wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">Maaf, halaman yang Anda cari tidak ada di website kami! Mungkin pergi ke
                        beranda</p>
                    <a class="px-5 py-3 btn btn-primary" href="{{ route('index') }}">Kembali Ke Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->


@endsection