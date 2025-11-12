@extends('layout.master2')
@section('tittle', 'Emoodji - Masukan')
@section('header', 'header2')
@section('page', 'Masukan')
@section('nav_fitur', 'active')

@section('content')


    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Masukan</p>
                <h1 class="display-5 mb-5">Silahkan Berikan Masukan!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                        lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-1.jpg" alt="">
                    <h4>Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                        lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-2.jpg" alt="">
                    <h4>Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                        lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-3.jpg" alt="">
                    <h4>Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                        lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-4.jpg" alt="">
                    <h4>Client Name</h4>
                    <span>Profession</span>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->

    <!-- Callback Start -->
    <div class="container-fluid callback my-5 pt-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Masukan
                            </p>
                            <h1 class="display-5 mb-5">Berikan Masukan</h1>
                        </div>
                        <div class="row g-3">
                            @if(session()->has('success') || session()->has('error'))
                                <div class="alert alert-{{ session()->has('success') ? "success" : "danger" }}">
                                    {{ session()->has('success') ? session('success') : session('error') }}
                                </div>
                            @endif
                            
                            <form action="{{ route('pertanyaan') }}" method="POST" onSubmit="return valid_datas(this);" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nama" id="nama" required placeholder="Namamu" value="{{ isset($user) ? $user->name : '' }}">
                                            <label for="nama">Namamu</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="email" required placeholder="Email mu" value="{{ isset($user) ? $user->email : '' }}">
                                            <label for="email">Email mu</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nomor" id="nomor" placeholder="Nomor Telepon" value="{{ isset($user) ? $user->phone : '' }}">
                                            <label for="nomor">Nomor Telepon</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="subjek" id="subjek" required placeholder="Subject">
                                            <label for="subjek">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="pesan" id="pesan" required placeholder="Pesan" style="height: 100px"></textarea>
                                            <label for="pesan">Pesan</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                                    </div>
                                    <input type="hidden" name="token" value="FsWga4&@f6aw" />
                                </div>
                            </form>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Callback End -->



@endsection