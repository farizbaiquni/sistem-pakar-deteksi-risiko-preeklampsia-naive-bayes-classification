<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TambahPasienController extends Controller
{

    public function tambahPasienBaru(Request $request, $id_user)
    {

        //VALIDATE
        $validated = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'tinggi_badan' => 'required',
            'nama_suami' => 'required',
            'provinsi' => 'required',
            'kabupaten_kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan_desa' => 'required',
            'rt' => 'required',
            'rw' => 'required',
        ]);

        try {
            DB::beginTransaction();

            $id = DB::table('alamat')->insertGetId([
                'provinsi' => $request->provinsi,
                'kabupaten_kota' => $request->kabupaten_kota,
                'kecamatan' => $request->kecamatan,
                'kelurahan_desa' => $request->kelurahan_desa,
                'rt' => $request->rt,
                'rw' => $request->rw,
            ]);

            DB::table('pasien')->insert([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'nama_suami' => $request->nama_suami,
                'tinggi_badan' => $request->tinggi_badan,
                'id_alamat' => $id,
                'id_user' => 0,
            ]);

            DB::commit();
            return redirect('/dashboard');
        } catch (Exception $e) {
            DB::rollBack();
        }


        // $pasien = Pasien::create([
        //     'nama' => $request->nama,
        //     'tanggal_lahir' => $request->tanggal_lahir,
        //     'tanggal_pertama_kehamilan' => $request->tanggal_pertama_kehamilan,
        //     'nama_suami' => $request->nama_suami,
        // ]);

        // $pasien->save();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        //
    }
}
