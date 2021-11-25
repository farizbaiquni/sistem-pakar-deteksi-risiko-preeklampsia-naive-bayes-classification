<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataKehamilanController extends Controller
{
    public function tambahDataKehamilan(Request $request, $nik_pasien)
    {
        // dd($nik_pasien);
        try {
            DB::beginTransaction();

            DB::table('kehamilan')->insert([
                'kehamilan_anak_ke' => $request->kehamilanKe,
                'tanggal_awal_kehamilan' => $request->tanggalAwalKehamilan,
                'nik_ibu' => $nik_pasien,
            ]);

            DB::commit();
            return redirect('/dashboard');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('/dashboard');
        }
    }

    public function editDataKehamilan(Request $request, $nik_pasien)
    {
        try {
            DB::beginTransaction();

            DB::table('kehamilan')->where('nik_ibu', $nik_pasien)
                ->update([
                    'kehamilan_anak_ke' => $request->kehamilanKe,
                    'tanggal_awal_kehamilan' => $request->tanggalAwalKehamilan,
                    'tanggal_melahirkan' => $request->tanggalMelahirkan,
                ]);

            DB::commit();
            return redirect('/dashboard');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('/dashboard');
        }
    }

    public function hapusDataKehamilan($nik_pasien)
    {
        DB::table('kehamilan')->where('nik_ibu', $nik_pasien)->delete();
        return redirect('/dashboard');
    }
}
