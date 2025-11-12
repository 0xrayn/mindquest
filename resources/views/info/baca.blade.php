@extends('layout.master2')
@section('tittle', 'Emoodji - Informasi')
@section('header', 'header3')
@section('page', 'Informasi')
@section('nav_fitur', 'active')

@section('content')

    <!-- Contact Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                    <p class="px-3 py-1 border rounded d-inline-block text-primary fw-semi-bold">{{ $informasi->kategori }}</p>
                    <h1 class="mb-4 display-5">{{ $informasi->judul }}</h1>
                    <p class="mb-4">{!! nl2br(e($informasi->isi)) !!}</p>

                </div>
                {{-- <div class="col-lg-3 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="overflow-hidden rounded position-relative h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                        <img class="rounded img-fluid" src="{{ asset('/img/image (3).jpg') }}" style="width: 200px; height: auto;">
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Contact End -->
    


@endsection