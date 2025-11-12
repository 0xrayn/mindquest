@extends('layout.master2')
@section('tittle', 'Emoodji - Permainan')
@section('header', 'header1')
@section('page', 'Permainan')
@section('nav_fitur', 'active')

@section('content')


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Permainan</p>
                <h1 class="display-5 mb-5">Permainan Penanggulangan Depresi</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Memory Game</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Teka-Teki Blok</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Mahjong</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Tebak Angka</h5>
                        </button>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border rounded p-4">
                                        <nav>
                                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                                <button class="nav-link fw-semi-bold active" id="nav-deskripsi1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-deskripsi1" type="button" role="tab" aria-controls="nav-deskripsi1"
                                                    aria-selected="true">Deskripsi</button>
                                                <button class="nav-link fw-semi-bold" id="nav-tujuan1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-tujuan1" type="button" role="tab" aria-controls="nav-tujuan1"
                                                    aria-selected="false">tujuan</button>
                                                <button class="nav-link fw-semi-bold" id="nav-carakerja1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-carakerja1" type="button" role="tab" aria-controls="nav-carakerja1"
                                                    aria-selected="false">Cara kerja</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-deskripsi1" role="tabpanel"
                                                aria-labelledby="nav-deskripsi1-tab">
                                                <p class="mb-4">Permainan Memori (Memory Game) adalah sebuah permainan yang dirancang untuk mengasah fokus dan konsentrasi pengguna dengan mencocokkan pasangan warna yang tersembunyi. 
                                        Permainan ini memiliki tujuan utama untuk penanggulangan dan pencegahan depresi, dengan memberikan aktivitas yang menyenangkan dan menenangkan yang dapat membantu mengurangi gejala depresi dan kecemasan. 
                                        Selain itu.</p>
                                                <a href="{{ route('Ingat') }}" class="btn btn-primary py-3 px-5 mt-3">Main!</a>
                                            </div>
                                            <div class="tab-pane fade" id="nav-tujuan1" role="tabpanel"
                                                aria-labelledby="nav-tujuan1-tab">
                                                <p><i class="fa fa-check text-primary me-3"></i>Penanggulangan Depresi</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Pencegahan Depresi</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Melatih Daya Ingat dan Konsentrasi</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-carakerja1" role="tabpanel" aria-labelledby="nav-carakerja1-tab">
                                                <p class="mb-4">Permainan dimulai dengan menampilkan kartu-kartu secara tertutup dalam bentuk grid. Setiap kartu 
                                                    memiliki pasangan warna identik yang tersembunyi di antara kartu-kartu lainnya. Pengguna dapat memilih dua kartu dalam setiap giliran dengan mengkliknya, 
                                                    dan jika dua kartu yang dipilih memiliki warna yang sama, kartu tersebut akan tetap terbuka dan dianggap 
                                                    sebagai pasangan yang cocok. Namun, jika kartu yang dipilih tidak cocok, kartu tersebut akan kembali tertutup setelah 
                                                    beberapa detik, memungkinkan pengguna untuk mencoba lagi. Permainan selesai ketika semua pasangan kartu berhasil dicocokkan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border rounded p-4">
                                        <nav>
                                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                                <button class="nav-link fw-semi-bold active" id="nav-deskripsi-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-deskripsi" type="button" role="tab" aria-controls="nav-deskripsi"
                                                    aria-selected="true">Deskripsi</button>
                                                <button class="nav-link fw-semi-bold" id="nav-tujuan-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-tujuan" type="button" role="tab" aria-controls="nav-tujuan"
                                                    aria-selected="false">Tujuan</button>
                                                <button class="nav-link fw-semi-bold" id="nav-carakerja-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-carakerja" type="button" role="tab" aria-controls="nav-carakerja"
                                                    aria-selected="false">Cara Kerja</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-deskripsi" role="tabpanel"
                                                aria-labelledby="nav-deskripsi-tab">
                                                <p class="mb-4">Teka-Teki Blok adalah permainan yang dirancang untuk melatih kemampuan berpikir strategis dan spasial.Game ini mengajak kamu untuk menyusun blok-blok dengan cara yang benar agar sesuai dan mengisi ruang yang tersedia. 
                                        Permainan ini tidak hanya menyenangkan tetapi juga dapat berkontribusi pada peningkatan kesehatan mentalmu.</p>
                                                <a href="{{ route('Puzzle') }}" class="btn btn-primary py-3 px-5 mt-3">Main!</a>
                                            </div>
                                            <div class="tab-pane fade" id="nav-tujuan" role="tabpanel"
                                                aria-labelledby="nav-tujuan-tab">
                                                <p><i class="fa fa-check text-primary me-3"></i>Meningkatkan fokus dan konsentrasi.</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Mengembangkan kemampuan pemecahan masalah</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Mengalihkan pikiran dari stres dan kecemasan sehari-hari.</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-carakerja" role="tabpanel" aria-labelledby="nav-carakerja-tab">
                                                <p class="mb-4">Permainan dimulai dengan memberikan sejumlah blok dengan bentuk yang berbeda kepada pemain. Mereka harus 
                                                    menyelesaikan grid permainan dengan cara menarik dan meletakkan blok-blok tersebut ke dalam grid untuk mengisi ruang yang 
                                                    kosong. Tujuan utamanya adalah menyusun blok agar sesuai dengan gambar tujuan.</p>
                                            </div>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border rounded p-4">
                                        <nav>
                                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                                <button class="nav-link fw-semi-bold active" id="nav-deskripsi2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-deskripsi2" type="button" role="tab" aria-controls="nav-deskripsi2"
                                                    aria-selected="true">Deskripsi</button>
                                                <button class="nav-link fw-semi-bold" id="nav-tujuan2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-tujuan2" type="button" role="tab" aria-controls="nav-tujuan2"
                                                    aria-selected="false">Tujuan</button>
                                                <button class="nav-link fw-semi-bold" id="nav-carakerja2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-carakerja2" type="button" role="tab" aria-controls="nav-carakerja2"
                                                    aria-selected="false">Cara Kerja</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-deskripsi2" role="tabpanel"
                                                aria-labelledby="nav-deskripsi2-tab">
                                                <p class="mb-4">Mahjonh dirancang khusus untuk mengkombinasikan dua tile dengan angka yang sama. Game ini menantang dan menenangkan, mengajak Anda untuk menemukan pasangan tile yang serupa untuk menghapusnya dari papan. 
                                        Permainan ini tidak hanya mengasyikkan, tetapi juga memiliki manfaat untuk kesehatan mental Anda.</p>
                                                <a href="{{ route('mahjong') }}" class="btn btn-primary py-3 px-5 mt-3">Main!</a>
                                            </div>
                                            <div class="tab-pane fade" id="nav-tujuan2" role="tabpanel"
                                                aria-labelledby="nav-tujuan2-tab">
                                                <p><i class="fa fa-check text-primary me-3"></i>Pengalihan Pikiran</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Stimulasi Kognitif</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Kepuasan Emosional</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-carakerja2" role="tabpanel" aria-labelledby="nav-carakerja2-tab">
                                                <p class="mb-4">Permainan dimulai dengan mencari dan mengklik dua tile yang sama untuk mengkombinasikannya dan menghapusnya dari 
                                                    papan permainan. Hanya tile yang tidak terhalang oleh tile lainnya yang dapat dipilih. Tujuannya adalah untuk menghapus 
                                                    semua tile dari papan dengan menemukan semua pasangan yang cocok. Setelah semua pasangan ditemukan dan dihapus, game selesai 
                                                    dengan skor yang ditampilkan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border rounded p-4">
                                        <nav>
                                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                                <button class="nav-link fw-semi-bold active" id="nav-deskripsi3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-deskripsi3" type="button" role="tab" aria-controls="nav-deskripsi3"
                                                    aria-selected="true">Deskripsi</button>
                                                <button class="nav-link fw-semi-bold" id="nav-tujuan3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-tujuan3" type="button" role="tab" aria-controls="nav-tujuan3"
                                                    aria-selected="false">Tujuan</button>
                                                <button class="nav-link fw-semi-bold" id="nav-carakerja3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-carakerja3" type="button" role="tab" aria-controls="nav-carakerja3"
                                                    aria-selected="false">Cara Kerja</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-deskripsi3" role="tabpanel"
                                                aria-labelledby="nav-deskripsi3-tab">
                                                <p class="mb-4">Permainan Tebak Angka 1-100 menguji kemampuan pemain dalam menebak angka dari 1 hingga 100. 
                                                    Pemain harus memilih angka yang tepat dengan umpan balik apakah angka tersebut terlalu besar, terlalu 
                                                    kecil, atau sudah benar. Selain menghibur, permainan ini juga dapat meningkatkan ketajaman pikiran dan fokus, 
                                                    serta memberikan manfaat positif bagi kesehatan mental.</p>
                                                <a href="{{ route('TebakAngka') }}" class="btn btn-primary py-3 px-5 mt-3">Main!</a>
                                            </div>
                                            <div class="tab-pane fade" id="nav-tujuan3" role="tabpanel"
                                                aria-labelledby="nav-tujuan3-tab">
                                                <p><i class="fa fa-check text-primary me-3"></i>Menguji Ketepatan</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Memperkuat Kemampuan Analitis</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Menumbuhkan Fokus dan Konsentrasi</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-carakerja3" role="tabpanel" aria-labelledby="nav-carakerja3-tab">
                                                <p class="mb-4">Permainan dimulai dengan menebak angka yang dipilih secara acak dari rentang 1 hingga 100. Pemain harus 
                                                    memilih angka yang mereka kira benar dengan memasukkannya ke dalam kotak yang disediakan. Setiap tebakan 
                                                    akan diberikan umpan balik apakah angka tersebut terlalu besar, terlalu kecil, atau sudah tepat. Tujuannya 
                                                    adalah untuk menebak angka yang benar dengan seakurat mungkin. Setelah berhasil menebak angka yang tepat, 
                                                    permainan selesai, dan skor akan ditampilkan.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->  



@endsection