@extends('layout.master2')
@section('tittle', 'Emoodji - Informasi')
@section('header', 'header3')
@section('page', 'Informasi')
@section('nav_fitur', 'active')

@section('content')

    <!-- Features Start -->
    <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Informasi</p>
                    <h1 class="display-5 mb-4">Daftar Informasi!</h1>
                    <p class="mb-4">Selamat datang di fitur Informasi Depresi, sumber terpercaya Anda untuk memahami dan mengelola depresi.
                     Di sini, kami menyajikan berbagai informasi penting yang dirancang untuk membantu Anda mengenali gejala, mengetahui 
                     cara pencegahan, serta langkah-langkah penanganan yang efektif. 
                    </p>
                    {{-- <a class="btn btn-primary py-3 px-5" href="">Explore More</a> --}}
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Gejala Depresi pada Remaja</h4>
                                        <p class="mb-3">Gejala depresi pada remaja meliputi perasaan sedih, menarik diri dari 
                                            kegiatan sosial, kesulitan konsentrasi, perubahan pola makan, gangguan tidur, dan kelelahan.
                                        </p>
                                        <a class="fw-semi-bold" href="{{ route('info1') }}">Baca<i
                                                class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Gejala Depresi</h4>
                                        <p class="mb-3">
                                            Depresi adalah gangguan mental yang memengaruhi aspek emosional, motivasi, fungsi motorik, dan kognitif, 
                                            dengan gejala seperti perubahan mood drastis, kurang motivasi, gangguan tidur, perubahan nafsu makan, dan 
                                            pemikiran negatif.</p>
                                        <a class="fw-semi-bold" href="{{ route('info2') }}">Baca<i
                                                class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Macam macam gangguan depresi</h4>
                                <p class="mb-3">Depresi memiliki berbagai jenis, termasuk Major Depressive Disorder yang ditandai dengan kesedihan 
                                    mendalam dan kehilangan minat, serta Dysthymic Disorder yang merupakan depresi kronis lebih ringan tetapi berlangsung lama, 
                                    keduanya membutuhkan perhatian profesional.
                                </p>
                                <a class="fw-semi-bold" href="{{ route('info3') }}">Baca<i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row g-4 align-items-center">
                        @if(count($informasi))
                            @foreach($informasi as $item)
                                <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">{{ $item->judul }}</h4>
                                        <p class="mb-3">{{ $item->sinopsis }}</p>
                                        <a href="{{ route('baca', ['judul' => $item->judul]) }}" class="fw-semi-bold">Baca<i class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            {{-- <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="feature__item">
                                    <h5>Tidak ada Resep</h5>
                                </div>
                            </div> --}}
                        @endif
                        
                        {{-- <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Financial Secure</h4>
                                <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                                    erat amet</p>
                                <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Financial Secure</h4>
                                <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                                    erat amet</p>
                                <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


@endsection