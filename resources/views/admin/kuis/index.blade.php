
@extends('layout.master-admin')
@section('admin_kuis', 'active')

@section('content')


    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tabel Kuis</h6>
                    <a href="{{ route('admin.kuis.create') }}" class="btn btn-primary mb-3">Tambah Kuis</a>

                        @if(session()->has('success') || session()->has('error'))
                            <div class="alert alert-{{ session()->has('success') ? "success" : "danger" }}">
                                {{ session()->has('success') ? session('success') : session('error') }}
                            </div>
                        @endif

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="col">#</th>
                                    <th class="col">Nama Kuis</th>
                                    <th class="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if(count($quiz_admin))
                                    @foreach($quiz_admin as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->quiz_name }}</td>
                                            <td>
                                                <a href="{{ route('admin.kuis.edit', $item->id) }}">
                                                    <label class="btn btn-primary">Edit</label>
                                                </a>
                                                <a href="{{ route('admin.q.index', $item->id) }}">
                                                    <label class="btn btn-success">Question</label>
                                                </a>
                                                <form action="{{ route('admin.kuis.destroy', $item->id) }}" class="d-inline" onsubmit="return confirm('Apakah Anda Yakin Menghapus Kuis')" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger border-0">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center">Belum ada kuis</td>
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
