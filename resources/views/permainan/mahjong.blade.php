@extends('layout.master2')
@section('tittle', 'Emoodji - Permainan Mahjong')
@section('header', 'header4')
@section('page', 'Permainan')
@section('nav_fitur', 'active')


@section('css')
    <link rel="stylesheet" href="{{ asset('permainan/mystyle.css') }}">
	<link rel="stylesheet" href="{{ asset('permainan/animations.css') }}">
    <script src="{{ asset('permainan/myscript.js') }}" defer></script>
@endsection

@section('content')

	<!-- Testimonial Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <h1 id="title">Mahjong</h1>
			<div id="startscreenDiv">
				<p>Pilih pengaturan dan tekan tombol untuk bermain!</p>

				<div id="textContainer">
					<div id="textLeft">
						<!-- Settings -->
						<br />Ukuran Papan: &nbsp;&nbsp;&nbsp;1 <input type="range" id="sizeSlider" min="2" max="6" style="width: 128px;" onchange="gimmeTitle();" /> 5
						<br />Kesulitan: MUDAH <input type="range" id="difficultySlider" min="1" max="3" style="width: 128px;" onchange="gimmeTitle();" /> SULIT
					</div>
				</div>
				<br /><input type="button" style="margin-top: 10px;" class="btn btn-primary"  value="MAIN" onclick="startGame();" />
			</div>

			<div id="divTable">
			</div>
			<div id="container">
				<div id="bottomBar" class="bottomBarHidden">
					<span id="nGButton"></span>
					<span id="correctMovesCounter"></span>
					<span id="wrongMovesCounter"></span>
					<span id="timeCounter"></span>
				</div>
			</div>
        </div>
    </div>
    <!-- Testimonial End -->


@endsection
