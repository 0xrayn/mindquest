
@extends('layout.master-admin')
@section('admin_masukan', 'active')

@section('content')

     <!-- Table Start -->
     <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tabel Masukan</h6>

                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                                <tr class="bg-light">
                                    <th class="col">#</th>
                                    <th class="col">Nama</th>
                                    <th class="col">Email</th>
                                    <th class="col">Nomor</th>
                                    <th class="col">Subjek</th>
                                    <th class="col">Pesan</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if(count($pertanyaan))
                                    @foreach($pertanyaan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->nomor }}</td>
                                            <td>{{ $item->subjek }}</td>
                                            <td>{{ $item->pesan }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center">Belum ada pertanyaan</td>
                                    </tr>

                                @endif
                            </tbody>
                        </table>
                        <!-- Tampilkan informasi di sini -->
                        {{ $pertanyaan->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->

     <!-- Table Start -->
     <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tabel Subscriber</h6>

                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                                <tr class="bg-light">
                                    <th class="col">#</th>
                                    <th class="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if(count($subscribe))
                                    @foreach($subscribe as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->email }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="2" class="text-center">Belum ada subscriber</td>
                                    </tr>

                                @endif
                            </tbody>
                        </table>
                        <!-- Tampilkan informasi di sini -->
                        {{ $subscribe->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
