
@extends('layout.master-admin')
@section('admin_kuis', 'active')

@section('content')


    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tambah Kuis</h6>
                    <form action="{{ route('admin.kuis.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Nama Kuis</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="{{ route('admin.kuis.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                    
                </div>
            </div>
            
        </div>
    </div>
    <!-- Form End -->
@endsection