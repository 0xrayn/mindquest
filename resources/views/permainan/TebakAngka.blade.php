@extends('layout.master2')
@section('tittle', 'Emoodji - Permainan Tebak Angka')
@section('header', 'header2')
@section('page', 'Permainan')
@section('nav_fitur', 'active')


@section('css')
    <link rel="stylesheet" href="{{ asset('permainan/GuessNumber.css') }}">
    <script src="{{ asset('permainan/GuessNumber.js') }}" defer></script>
@endsection

@section('content')

    <!-- Testimonial Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div id="game">
                <h4 class="mb-5 display-5">
                    Saya memikirkan angka antara 1-100.<br />
                    Bisakah Anda menebaknya?
                </h4>
                <div class="input-wrapper">
                    <input type="number" placeholder="00" id="guess" />
                    <button id="check-btn">Tebak</button>
                </div>
                <p id="no-of-guesses" class="hasil">Jumlah Tebakan: 0</p>
                <p id="guessed-nums" class="hasil">Angka yang Ditebak adalah: Tidak ada</p>
            </div>
            <button id="restart">Mengulang Kembali</button>
            <div class="result">
                <div id="hint"></div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
