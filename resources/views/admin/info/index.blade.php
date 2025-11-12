
@extends('layout.master-admin')
@section('admin_informasi', 'active')

@section('content')


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
        
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Tabel Informasi</h6>
                            <a href="{{ route('admin.informasi.create') }}" class="btn btn-primary mb-3">Tambah Informasi</a>

                                @if(session()->has('success') || session()->has('error'))
                                    <div class="alert alert-{{ session()->has('success') ? "success" : "danger" }}">
                                        {{ session()->has('success') ? session('success') : session('error') }}
                                    </div>
                                @endif

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Sinopsis</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if(count($informasi))
                                            @foreach($informasi as $item)
                                                <tr>
                                                    <td scope="row">{{ $loop->iteration }}</td>
                                                    <td>{{ $item->judul }}</td>
                                                    <td>{{ $item->kategori }}</td>
                                                    <td>{{ $item->sinopsis }}</td>
                                                    <td><img src="/img/info/{{ $item->img_info }}" width="100px"></td>
                                                    <td>
                                                        <a href="{{ route('admin.informasi.edit', $item->judul) }}">
                                                            <label class="btn btn-primary">Edit</label>
                                                        </a>
                                                        <form action="{{ route('admin.informasi.destroy', $item->id) }}" class="d-inline" onsubmit="return confirm('Apakah kamu yakin menghapus informasi ini?')" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger border-0">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" class="text-center">Belum ada informasi</td>
                                            </tr>
                                        @endif

                                    </tbody>
                                </table>

                                {{ $informasi->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->

@endsection