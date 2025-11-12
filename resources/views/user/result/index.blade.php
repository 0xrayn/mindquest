@extends('layout.master2')
@section('tittle', 'Emoodji - Kuis')
@section('header', 'header2')
@section('page', 'Kuis')
@section('nav_fitur', 'active')

@section('content')

<style>
  body {
    overflow-x: hidden;
  }

  .btn-group {
    display: flex;
    justify-content: center;
    gap: 10px;
  }

  .btn-group .primary-btn {
    font-weight: 400;
    font-size: .8rem;
    padding: 4px 7px !important;
    border-radius: none !important; 
  }
</style>

        <!-- 404 Section Begin -->
        <div class="row">
            <div class="col-lg-12">
                <div class="text__404">
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; ">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Hasil Kuis</p>
                        <h1 class="display-5 mb-5">Daftar Hasil Kuis</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="pricing-section spad">
            <div class="container">
                <div class="row monthly__plans active">

                    @if (session()->has('success') || session()->has('error'))
                    <div class="col-md-12 alert">
                        <div class="row justify-content-center">
                            <div class="col-md-8">

                                <div class="my-3 alert alert-{{ session()->has('success') ? "success" : "danger" }}">
                                    {{ session()->has('success') ? session('success') : session('error') }}
                                </div>

                                <script>
                                    setTimeout(() => {
                                        document.querySelector('.alert').remove();
                                    }, 7000);
                                </script>
                            </div>
                        </div>      
                    </div>
                    @endif

                        <table class="table v-middle table-hover">
                            <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Siswa</th>
                                    <th class="border-top-0">Kuis</th>
                                    <th class="border-top-0">Benar</th>
                                    <th class="border-top-0">Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($results))
                                    @foreach($results as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->quiz->quiz_name }}</td>
                                            <td>{{ ( $item->true) }}</td>
                                            <td>{{ ( $item->score) }}</td>
                                        </tr>
                                    @endforeach
                                @else 
                                    <tr>
                                        <td colspan="5" class="text-center">Belum ada data</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>  
                </div>
            </div>
        </section>
        
        <br><br><br><br><br><br><br><br><br><br>
@endsection