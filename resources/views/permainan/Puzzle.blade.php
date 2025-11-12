@extends('layout.master2')
@section('tittle', 'Emoodji - Game Puzzle')
@section('header', 'header1')
@section('page', 'Permainan')
@section('nav_fitur', 'active')

@section('css')
    <link rel="stylesheet"href="{{ asset('permainan/Puzzle.css') }}">
    <script src="{{ asset('permainan/Puzzle.js') }}" defer></script>
@endsection

@section('content')
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="cover-screen">
                <p id="result"></p>
                <button id="start-button" class="btn btn-primary">Mulai Permainan</button>
            </div>
            <h1 id="moves"></h1>
            <div class="slider-game">
                <div class="kotak"></div>
                <div class="original-image">
                    <img src="/permainan/original_image.png" alt="" />
                </div>
            </div>
            <!-- Script -->
        </div>
    </div>
@endsection
