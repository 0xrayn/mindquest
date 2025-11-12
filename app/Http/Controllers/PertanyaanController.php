<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subscribe;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = Pertanyaan::latest()->paginate(5);
        $subscribe = Subscribe::latest()->paginate(5);

        $data = [
            'pertanyaan' => $pertanyaan,
            'subscribe' => $subscribe,
        ];

        return view('admin.pertanyaan.index', $data);
    }

    public function masukan()
    {
        if (!Auth::check()) {
            return view('masukan');
        } else {
            $user = Auth::user();
            return view('masukan', ['user' => $user]);
        }
    }

    public function kirim(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'subjek' => 'required',
            'pesan' => 'required',
            'nomor' => 'nullable',
        ]);

        $input = $request->all();

        Pertanyaan::create($input);

        return redirect()->route('masukan')->with('success', 'Pesan Berhasil Dikirim!');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $input = $request->all();

        Subscribe::create($input);

        return redirect()->route('index');
    }

    public function subscribe2(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $input = $request->all();

        Subscribe::create($input);

        return redirect()->route('index2');
    }
}
