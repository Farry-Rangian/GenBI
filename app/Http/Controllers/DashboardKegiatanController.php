<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kegiatan.index',[
            'kegiatans' => Kegiatan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kegiatan.create',[
            'galerys' => Galeri::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:kegiatans',
            'galeri_id' => 'required',
            'content' => 'required',
            'image' => 'image|file|max:2048',
            'komisariat' => 'required|max:255'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('kegiatan-image');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Kegiatan::create($validatedData);
        return redirect('/dashboard/kegiatans');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('dashboard.kegiatan.show',[
            'kegiatan' => $kegiatan,
            'presensis' => $kegiatan->presensi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('dashboard.kegiatan.edit', [
            'galerys' => Galeri::all(),
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $rules = [
            'name' => 'required|max:255',
            'image' => 'image|file|max:2048',
            'content' => 'required',
        ];

        if($request->slug != $kegiatan->slug) {
            $rules['slug'] = 'required|unique:kegiatans';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('kegiatan-image');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Kegiatan::where('id', $kegiatan->id)->update($validatedData);
        return redirect('/dashboard/kegiatans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        if($kegiatan->image) {
            Storage::delete($kegiatan->image);
        }
        Kegiatan::destroy($kegiatan->id);
        return redirect('/dashboard/kegiatans');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Kegiatan::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
