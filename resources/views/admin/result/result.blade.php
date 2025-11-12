
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
                                <th class="col">Siswa</th>
                                <th class="col">Kuis</th>
                                <th class="col">Benar</th>
                                <th class="col">Nilai</th>
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
                    <a href="{{ route('admin.result') }}" class="">
                        <label for="" class="btn btn-primary mb-3">Kembali</label>
                      </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection