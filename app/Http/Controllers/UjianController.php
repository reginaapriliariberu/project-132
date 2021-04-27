<?php

namespace App\Http\Controllers;

use App\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tableujian = DB::table('table_ujian132')->get();
        // $tableujian = DB::table('dosenss')->get();
        // dd($tableujian);
        $ujian = Ujian::all();
        // return view('mahasiswa.index', ['tableujian' => $tableujian]);
        return view('mahasiswa.index', compact('ujian'));
    }

    public function indexSeluruh()
    {
        // $tableujian = DB::table('table_ujian132')->get();
        // $tableujian = DB::table('dosenss')->get();
        // dd($tableujian);
        $ujian = Ujian::all();
        // // return view('mahasiswa.index', ['tableujian' => $tableujian]);
        return view('mahasiswa.indexSeluruh', compact('ujian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // Cara pertama
        // $ujian = new Ujian;
        // $ujian->nama_mk = $request->nama_mk;
        // $ujian->dosen = $request->dosen;
        // $ujian->jumlah_soal = $request->jumlah_soal;
        // $ujian->keterangan = $request->keterangan;
        // $ujian->save();

        // cara kedua
        // Ujian::create([
        //     'nama_mk' => $request->nama_mk,
        //     'dosen' => $request->dosen,
        //     'jumlah_soal' => $request->jumlah_soal,
        //     'keterangan' => $request->keterangan
        // ]);

        // cara ketiga
        $request->validate([
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jumlah_soal' => 'required',
            'keterangan' => 'required'
        ]);
        Ujian::create($request->all());

        return redirect('/ujian')->with('status', 'Data Ujian Berhasil Ditambahkan!');

        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function show(Ujian $ujian)
    {
        return view('mahasiswa.show', compact('ujian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function edit(Ujian $ujian)
    {
        return view('mahasiswa.edit', compact('ujian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ujian $ujian)
    {
        Ujian::where('id', $ujian->id)
            ->update([
                'nama_mk' => $request->nama_mk,
                'dosen' => $request->dosen,
                'jumlah_soal' => $request->jumlah_soal,
                'keterangan' => $request->keterangan
            ]);
        return redirect('/ujian')->with('status', 'Data Ujian Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ujian $ujian)
    {
        Ujian::destroy($ujian->id);
        return redirect('/ujian')->with('status', 'Data Ujian Berhasil Dihapus!');
    }
}
