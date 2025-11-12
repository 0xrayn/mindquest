@extends('layout.master2')
@section('tittle', 'Emoodji - Kuis')
@section('header', 'header2')
@section('page', 'Kuis')
@section('nav_fitur', 'active')

@section('content')


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; ">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Kuis</p>
                <h1 class="display-5 mb-5">Daftar Kuis</h1>
                <a class="btn btn-primary py-3 px-5" href="{{ route('kuis.result') }}">Hasil Kuis</a>

                @if (session()->has('success') || session()->has('error'))

                <div class="my-3 alert alert-{{ session()->has('success') ? "success" : "danger" }}">
                    {{ session()->has('success') ? session('success') : session('error') }}
                </div>

                <script>
                    setTimeout(() => {
                        document.querySelector('.alert').remove();
                    }, 7000);
                </script>

                @endif
            </div>
            <div class="row g-4">
                

                  @if ($kuis)
                    @foreach ($kuis as $item)

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 60px;">
                            <div class="team-item">
                                <div class="team-text">
                                    <h4 class="mb-0">{{ $item->quiz_name }}</h4>
                                    <a class="btn btn-primary py-3 px-5" href="{{ route('kuis.kerjakan', $item->id) }}">Kerjakan</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                  @endif
                
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection