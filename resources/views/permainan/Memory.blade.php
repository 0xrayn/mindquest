@extends('layout.master2')
@section('tittle', 'Emoodji - Memory Game')
@section('header', 'header1')
@section('page', 'Permainan')
@section('nav_fitur', 'active')


@section('css')
    <link rel="stylesheet" href="{{ asset('permainan/memory.css') }}">
    <script src="{{ asset('permainan/memory.js') }}" defer></script>
@endsection

@section('content')
    <div class="main">
        <div class="title">
            <h1 class="tengah">Memory Game</h1>
        </div>
        <div class="timer center-timer">
            <button id="time" disabled></button>
        </div>
        <div class="content">
            <button id="startButton" onclick="startGame()" class="btn btn-primary">Click to Start!</button>
            <div class="blocks">

            </div>
            <button id="resetButton" onclick="resetGame()" class="btn btn-primary">Reset Game</button>
        </div>
    </div>
@endsection
