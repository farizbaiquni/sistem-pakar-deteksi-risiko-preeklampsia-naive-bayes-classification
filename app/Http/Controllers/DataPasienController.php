<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPasienController extends Controller
{


    public function editDataPasien(Request $request, $nik_pasien)
    {
        // dd($request->id_alamat);

        try {
            DB::beginTransaction();

            DB::table('pasien')
                ->where('nik', $nik_pasien)
                ->update([
                    'nama' => $request->nama,
                    'tempat_lahir' => $request->tempat_lahir,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'nama_suami' => $request->nama_suami,
                    'tinggi_badan' => $request->tinggi_badan,
                ]);

            DB::table('alamat')
                ->where('id', $request->id_alamat)
                ->update([
                    'provinsi' => $request->provinsi,
                    'kabupaten_kota' => $request->kabupaten_kota,
                    'kecamatan' => $request->kecamatan,
                    'kelurahan_desa' => $request->kelurahan_desa,
                    'rt' => $request->rt,
                    'rw' => $request->rw,
                ]);

            DB::commit();
            return redirect('/dashboard');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('/dashboard');
        }
    }




    public function hapusDataPasien($nik_pasien)
    {
        dd($nik_pasien);

        try {
            DB::beginTransaction();

            DB::table('pasien')->where('nik', $nik_pasien)->delete();
            DB::table('kehamilan')->where('nik', $nik_pasien)->delete();

            DB::commit();
            return redirect('/dashboard');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('/dashboard');
        }
    }
}
