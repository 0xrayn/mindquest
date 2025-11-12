@extends('layout.master3')

@section('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__option">
                    <a href="./home"><span class="fa fa-home"></span> Halaman Utama</a>
                    <span>Diskusi</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<style>

    .app {
    position: fixed;
    width: 100%;
    height: 100%;
    /* max-width: 600px; */
    background: #f5f5f5;
    border-left: 1px solid #eee;
    border-right: 1px solid #eee;
    }

    .app > .screen {
    display: none;
    }

    .app > .screen.active {
    display: block;
    width: 100%;
    height: 100%;
    }

    .screen .form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    max-width: 400px;
    }

    .screen .form-input {
    width: 100%;
    margin: 20px 0px;
    }

    .screen h2 {
    margin-bottom: 20px;
    font-size: 30px;
    color: #111;
    border-bottom: 4px solid #555;
    padding: 5px 0px;
    display: inline-block;
    }

    .screen .form-input label {
    display: block;
    margin-bottom: 5px;
    }

    .screen .form-input input {
    width: 100%;
    padding: 10px;
    border: 1px solid #555;
    font-size: 16px;
    }

    .screen .form-input button {
    padding: 10px 20px;
    background: #111;
    color: #eee;
    font-size: 16px;
    cursor: pointer;
    outline: none;
    border: none;
    }

    .chat-screen .header {
    background: #111;
    height: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0px 20px;
    }

    .chat-screen .header .logo {
    font-size: 18px;
    color: #eee;
    font-weight: 600;
    }

    .chat-screen .header button {
    padding: 5px 10px;
    border: 1px solid #eee;
    background: transparent;
    color: #eee;
    font-size: 15px;
    cursor: pointer;
    outline: none;
    }

    .chat-screen .messages {
    width: 100%;
    height: calc(100%-100px);
    background: #f5f5f5;
    overflow: auto;
    }

    .chat-screen .messages .message {
    display: flex;
    padding: 10px;
    }

    .chat-screen .messages .message > div {
    max-width: 80%;
    background: #f5f5f5;
    box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.05);
    padding: 10px;
    }

    .chat-screen .messages .message.my-message {
    justify-content: flex-end;
    }

    .chat-screen .messages .message.other-message {
    justify-content: flex-start;
    }

    .chat-screen .messages .message .name {
    font-size: 13px;
    color: #555;
    margin-bottom: 5px;
    }

    .chat-screen .messages .message .text {
    word-wrap: break-word;
    }

    .chat-screen .messages .update {
    text-align: center;
    padding: 10px;
    font-style: italic;
    }

    .chat-screen .typebox {
    width: 100%;
    height: 50px;
    display: flex;
    }

    .chat-screen .typebox input {
    flex: 1;
    height: 50px;
    font-size: 18px;
    }

    .chat-screen .typebox button {
    width: 80px;
    height: 100%;
    background: #4c57d6;
    color: #eee;
    font-size: 18px;
    outline: none;
    border: none;
    cursor: pointer;
    }
</style>

<!-- Chat App Begin -->
<div class="app">
    <div class="screen chat-screen active">
        <div class="messages">
            @foreach($diskusi as $diskusi)
                @if($diskusi->user->name == auth()->user()->name)
                    <div class="message my-message">
                        <div class="text">{{ $diskusi->isi}}</div>
                    </div>
                @else
                    <div class="message other-message">
                        <div>
                            <div class="name">{{ $diskusi->user->name }}</div>
                            <div class="text">{{ $diskusi->isi}}</div>
                        </div>
                    </div>
				@endif
			@endforeach

        </div>
        <form action="{{ route('diskusi.pesan')}}"  class="typebox fixed-bottom" id="message-form" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" id="isi" name="isi">
            <button type="submit">Kirim</button>
        </form>
    </div>
</div>
<!-- Chat App End -->


@endsection
