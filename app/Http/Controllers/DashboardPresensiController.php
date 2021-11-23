<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.presensi.index',[
            'presensis' => Presensi::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.presensi.create',[
            'kegiatans' => Kegiatan::all()
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
            'kegiatan_id' => 'required',
            'kesimpulan' => 'required',
            'image' => 'image|file|max:2048'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('presensi-image');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Presensi::create($validatedData);
        return redirect('/dashboard/presensi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function show(Presensi $presensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Presensi $presensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presensi $presensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presensi $presensi)
    {
        Presensi::destroy($presensi->id);
        return redirect('/dashboard/presensi');
    }
}
