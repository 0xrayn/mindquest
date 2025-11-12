
@extends('layout.master1')
@section('tittle', 'Emoodji')

@section('content')

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="img/image (1).jpg">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">About Us</p>
                    <h1 class="display-5 mb-4">Emoodji memberi dukungan kesehatan mental kepada klien </h1>
                    <p class="mb-4">Emoodji berkomitmen untuk menjadi pendukung bagi mereka yang melawan depresi. Dengan pengalaman yang mendalam dalam bidang kesehatan mental, 
                        Emoodji berupaya untuk menyediakan sumber daya yang bermanfaat dan lingkungan yang mendukung bagi individu yang menghadapi tantangan ini.
                    </p>
                    <div class="border rounded p-4">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">Story</button>
                                <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="false">Mission</button>
                                <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                    aria-selected="false">Vision</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <p>Dengan laporan yang berasal dari World Health Organization (WHO) 2023 menunjukkan bahwa sekitar 280 juta orang di seluruh dunia mengalami depresi. </p>
                                <p class="mb-0">Ini menjadi pemicu utama untuk mendirikan website ini, yang bertujuan memberikan akses mudah dan sumber daya yang bermanfaat bagi individu yang menghadapi tantangan kesehatan mental. </p>
                            </div>
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                aria-labelledby="nav-mission-tab">
                                <p>★ Memberikan akses mudah dan informatif kepada individu yang menghadapi depresi.</p>
                                <p class="mb-0">★ Menyediakan informasi mendalam tentang depresi, termasuk gejala, penyebab, dan strategi pengelolaan.</p><br>
                                <p>★ Memperkuat ketahanan mental dan membantu individu merasa didengar, didukung, dan diarahkan menuju pemulihan yang positif.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>➛ Menjadi sumber utama bagi individu yang menghadapi depresi.</p>
                                <p class="mb-0">➛ Menyediakan harapan, dukungan, dan sumber daya yang diperlukan.</p><br>
                                <p class="mb-0">➛ Membantu individu mencapai kesejahteraan mental yang berkelanjutan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Beberapa alasan kenapa orang memilih Emoodji</h1>
                    {{-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p> --}}
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Komitmen pada Kesehatan Mental</h4>
                                        <p class="mb-3">Emoodji memahami pentingnya kesehatan mental dan berkomitmen untuk menyediakan dukungan yang diperlukan bagi mereka yang menghadapi tantangan ini.</p>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Keterbukaan dan Keamanan</h4>
                                        <p class="mb-3">Emoodji menjaga kerahasiaan dan keamanan informasi pribadi Anda dengan sangat serius. Anda dapat merasa nyaman untuk berbagi pengalaman Anda di platform kami tanpa takut akan kebocoran atau penyalahgunaan informasi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Kemudahan Akses</h4>
                                <p class="mb-3">Platform ini dirancang dengan pemikiran tentang kemudahan akses. Anda dapat mengakses sumber daya dan dukungan kami kapan saja dan di mana saja, melalui perangkat apa pun yang Anda gunakan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


@endsection