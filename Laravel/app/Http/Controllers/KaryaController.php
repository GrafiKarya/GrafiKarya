<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use App\Http\Requests\StoreKaryaRequest;
use App\Http\Requests\UpdateKaryaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $karya = Karya::all();
        return view('daftarKarya', compact('karya'));
    }

    public function landingpageUser()
    {
        //
        $data = [
        'karya' => $karya = Karya::all(),
        'terbaru' =>  $terbaru = Karya::orderBy('created_at', 'DESC')->limit(4)->get(),
        ];
        //  dd($data['terbaru']);
        return view('index', compact('data'));
    }

    public function landingpage()
    {
        //
        $data = [
        'karya' => $karya = Karya::all(),
        'terbaru' =>  $terbaru = Karya::orderBy('created_at', 'DESC')->limit(4)->get(),
        ];
        // dd($data['terbaru']);
        return view('dashboard', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKaryaRequest $request)
    {
        //
        
        $data = $request->validated();

        if ($request->file('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('public/gambar-karya');
        }

        // dd($data['gambar']);
        Karya::create($data);

        return redirect()->route('karya.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karya $karya)
    {
        //
        return view('show', compact('karya'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karya $karya)
    {
        //
        return view('edit', compact('karya'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKaryaRequest $request, Karya $karya)
    {
        //
        $data = $request->validated();

        if ($request->file('gambar')) {
            if ($request->oldgambar) {
                Storage::delete($request->oldgambar);
            }
            $data['gambar'] = $request->file('gambar')->store('public/gambar-karya');
        }

        if ($karya->update($data)) {
            // Alert::success('Berhasil', 'Data karya Berhasil Diubah');
            return redirect(route('karya.index'));
        } else {
            // Alert::error('Gagal', 'Data karya Gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karya $karya)
    {
        //
        if ($karya->gambar) {
            Storage::delete($karya->gambar);
        }
        $karya->delete();
        return redirect(route('karya.index'));
    }
}
