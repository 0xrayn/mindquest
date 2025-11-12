
@extends('layout.master-admin')
@section('admin_kuis', 'active')

@section('content')

    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tabel Pertanyaan Kuis</h6>

                    @php
                        $action = ($quiz->by == "guru") ? false : true;
                    @endphp

                    @if ($action)
                        <a href="{{ route('admin.q.create', $quiz_id) }}" class="btn btn-primary mb-3">Tambah Pertanyaan</a>
                    @endif

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
                                    <th class="col">Pertanyaan</th>
                                    <th class="col">Jawaban</th>
                                    <th class="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if(count($questions))
                                    @foreach($questions as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $item->question }}
                                                <p class=" mb-1"><b>Options : </b></p>
                                                <ul>
                                                    @foreach (json_decode($item->options) as $key => $val)
                                                        <li>{{ strtoupper($key) . ". " . $val }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>{{ strtoupper($item->answer) }}</td>
                                            <td>
                                                @if ($action)
                                                    <a href="{{ route('admin.q.edit', [$quiz_id,  $item->id]) }}">
                                                        <label class="btn btn-primary">Edit</label>
                                                    </a>
                                                    <form action="{{ route('admin.q.destroy', [$quiz_id,  $item->id]) }}" class="d-inline" onsubmit="return confirm('Apakah Anda Yakin Menghapus Question')">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger border-0">Hapus</button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                @else 
                                    <tr>
                                        <td colspan="5" class="text-center">Belum ada pertanyaan</td>
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
