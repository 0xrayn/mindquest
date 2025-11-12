@extends('layout.master2')
@section('tittle', 'Emoodji - Prediksi')
@section('header', 'header2')
@section('page', 'Prediksi')
@section('nav_prediksi', 'active')

@section('content')

<form method="POST" action="/cek-depresi">
    @csrf <!-- Ini digunakan untuk melindungi aplikasi dari serangan CSRF -->
    
    <div>
        <label for="day_of_week">Hari dalam Seminggu saat mengisi:</label>
        <input type="text" id="day_of_week" name="day_of_week">
    </div>

    <div>
        <label for="saved_mpesa">Apakah Anda Menyimpan Uang Melalui M-Pesa?</label>
        <input type="number" id="saved_mpesa" name="saved_mpesa" >
    </div>

    <div>
        <label for="received_mpesa">Apakah Anda Menerima Uang Melalui M-Pesa?</label>
        <input type="number" id="received_mpesa" name="received_mpesa" >
    </div>

    <div>
        <label for="given_mpesa">Apakah Anda Memberikan Uang Melalui M-Pesa?</label>
        <input type="number" id="given_mpesa" name="given_mpesa" >
    </div>

    <div>
        <label for="ent_wagelabor">Keterlibatan dalam Pekerjaan Upah atau Pekerjaan Berbayar:</label>
        <input type="text" id="ent_wagelabor" name="ent_wagelabor">
    </div>

    <div>
        <label for="ent_ownfarm">Keterlibatan dalam Pertanian yang Dimiliki Sendiri:</label>
        <input type="text" id="ent_ownfarm" name="ent_ownfarm">
    </div>

    <div>
        <label for="ent_business">Keterlibatan dalam Bisnis:</label>
        <input type="text" id="ent_business" name="ent_business">
    </div>

    <div>
        <label for="ent_nonagbusiness">Keterlibatan dalam Bisnis Non-Pertanian:</label>
        <input type="text" id="ent_nonagbusiness" name="ent_nonagbusiness">
    </div>

    <div>
        <label for="femaleres">Apakah Peserta Wanita?</label>
        <input type="number" id="femaleres" name="femaleres">
    </div>

    <div>
        <label for="age">Usia:</label>
        <input type="number" id="age" name="age">
    </div>

    <div>
        <label for="married">Apakah Menikah?</label>
        <input type="number" id="married" name="married">
    </div>

    <div>
        <label for="children">Jumlah Anak?</label>
        <input type="number" id="children" name="children">
    </div>

    <div>
        <label for="hhsize">Ukuran Rumah Tangga:</label>
        <input type="number" id="hhsize" name="hhsize">
    </div>

    <div>
        <label for="edu">Pendidikan:</label>
        <input type="number" id="edu" name="edu">
    </div>

    <button type="submit">Submit</button>
</form>


@endsection