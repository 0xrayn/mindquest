<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function info1()
    {
        return view('info.info1');
    }

    public function info2()
    {
        return view('info.info2');
    }

    public function info3()
    {
        return view('info.info3');
    }
    public function informasi()
    {
        $informasi = Informasi::latest()->get();

        return view('info.index', compact('informasi'));
    }
    
    // public function baca()
    // {
    //     return view('info.baca');
    // }

    public function baca(Request $request, $judul)
    {
        $informasi = Informasi::where('judul', $judul)->first();

        return view('info.baca', compact('informasi'));
    }

    // public function baca2(Request $request)
    // {
    //     $search = $request->input('search');

    //     $informasi = Informasi::where('judul', 'like', "%$search%")
    //                     ->orWhere('tag', 'like', "%$search%")
    //                     ->paginate(10);

    //     return view('admin.info.index', compact('informasi'));
    // }

    public function index()
    {
        $informasi = Informasi::latest()->paginate(6);

        return view('admin.info.index', compact('informasi'));
    }

    public function create()
    {
        return view('admin.info.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'sinopsis' => 'required',
            'isi' => 'required',
            'img_info' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $input = $request->all();

        if ($image = $request->file('img_info')) {
            $destinationPath = 'img/info/';
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['img_info'] = $imageName;
        }

        Informasi::create($input);

        return redirect()->route('admin.informasi.index')->with('success', 'Informasi Berhasil Ditambahkan!');
    }

    public function edit($judul)
    {
        $cerita = Informasi::where('judul', $judul)->get();
        if ($cerita->isEmpty()) {
            abort(404);
        }
        $item = $cerita->first();

        return view('admin.info.edit', compact('item'));
    }

    public function update(Request $request, $judul)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'sinopsis' => 'required',
            'isi' => 'required',
            'img_info' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $informasi = Informasi::where('judul', $judul)->firstOrFail();

        $informasi->judul = $request->input('judul');
        $informasi->kategori = $request->input('kategori');
        $informasi->sinopsis = $request->input('sinopsis');
        $informasi->isi = $request->input('isi');

        if ($request->hasFile('img_info')) {
            $imagePath = public_path('img/info/').$informasi->img_info;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $image = $request->file('img_info');
            $destinationPath = 'img/info/';
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $informasi->img_info = $imageName;
        }

        $informasi->save();

        return redirect()->route('admin.informasi.index')->with('success', 'Informasi Berhasil Diperbarui!');
    }

    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);

        $imagePath = public_path('img/info/').$informasi->img_info;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $informasi->delete();

        return redirect()->route('admin.informasi.index')->with('success', 'Informasi Berhasil Dihapus!');
    }

    // public function daftar_resep(Request $request)
    // {
    //     $showAll = $request->has('show_all');

    //     if ($showAll) {
    //         $informasi = Informasi::oldest()->get();
    //     } else {
    //         $informasi = Informasi::oldest()->paginate(6);
    //     }
    //     $informasi = Informasi::oldest()->paginate(6);

    //     return view('user.daftar_resep', compact('resep', 'showAll'));
    // }

    
}
