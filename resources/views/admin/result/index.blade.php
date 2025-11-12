
@extends('layout.master-admin')
@section('admin_hasil', 'active')

@section('content')

   <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tabel Hasil Kuis</h6>

                        @if(session()->has('success') || session()->has('error'))
                            <div class="alert alert-{{ session()->has('success') ? "success" : "danger" }}">
                                {{ session()->has('success') ? session('success') : session('error') }}
                            </div>
                        @endif

                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                                <tr class="bg-light">
                                    <th class="col">#</th>
                                    <th class="col">Kuis</th>
                                    <th class="col">Nama</th>
                                    <th class="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
  
                                @if(count($quiz))
                                    @foreach($quiz as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->quiz_name }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>
                                                <a href="{{ route('admin.result.list', $item->id) }}">
                                                    <label for="" class="btn btn-primary">Lihat Hasil</label>
                                                </a>
                                            </td>
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
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection