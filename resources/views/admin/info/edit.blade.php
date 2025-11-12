


@extends('layout.master-admin')
@section('admin_informasi', 'active')

@section('content')

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ubah Informasi</h6>
                            <form action="{{ route('admin.informasi.update', $item->judul) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" value="{{ $item->judul }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <input type="text" name="kategori" class="form-control @error('kategori') is-invalid @enderror" value="{{ $item->kategori }}" id="kategori" required>
                                </div>
                                <div class="mb-3">
                                    <label for="sinopsis" class="form-label">Sinopsis</label>
                                    <textarea id="sinopsis" name="sinopsis" class="form-control @error('sinopsis') is-invalid @enderror" rows="4" required>{{ str_replace('<br />', "", nl2br($item->sinopsis)) }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="isi" class="form-label">Isi</label>
                                    <textarea id="isi" name="isi" class="form-control @error('isi') is-invalid @enderror" rows="6" required>{{ str_replace('<br />', "", nl2br($item->isi)) }}</textarea>
                                </div>
                                <div class="mb-3">
                                    @if($item->img_info)
                                        <img id="previewImage" src="/img/info/{{ $item->img_info }}" class="img-fluid" alt="Gambar Resep" style="height: 200px;"><br>
                                    @else
                                        <img id="previewImage" src="/img/info/default.jpg" class="img-fluid" alt="Gambar Default" style="display: none; height: 200px;"><br>
                                    @endif
                                    {{-- <img id="previewImage" src="/img/info/default.jpg" class="img-fluid" alt="Gambar Default" style="display: none; height: 200px;"><br> --}}
                                    <input name="img_info" type="file" class="form-control @error('img_info') is-invalid @enderror" onchange="previewFile()"><br>
                                </div>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                                <a href="{{ route('admin.informasi.show') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Form End -->

            <script>
                function previewFile() {
                    const preview = document.getElementById('previewImage');
                    const file = document.querySelector('input[type=file]').files[0];
                    const reader = new FileReader();
            
                    reader.onloadend = function () {
                        preview.src = reader.result;
                        preview.style.display = 'block'; // Tampilkan gambar pratinjau
                    }
            
                    if (file) {
                        reader.readAsDataURL(file); // Baca file sebagai URL data
                    } else {
                        preview.src = '/img/info/default.jpg'; // Tampilkan gambar default jika tidak ada gambar yang dipilih
                        preview.style.display = 'none'; // Sembunyikan gambar pratinjau
                    }
                }
            </script>

@endsection