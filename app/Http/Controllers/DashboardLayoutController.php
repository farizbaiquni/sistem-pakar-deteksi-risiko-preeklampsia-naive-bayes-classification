<?php

namespace App\Http\Controllers;

use App\Models\Kehamilan;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardLayoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $pasien = DB::table('pasien')->get();
        $user = DB::table('users')->get();

        $nikIbuHamil = DB::table('pasien')
            ->join('kehamilan', 'pasien.nik', '=', 'kehamilan.nik_ibu')
            ->select('kehamilan.nik_ibu')
            ->where('kehamilan.tanggal_melahirkan', NULL)
            ->get();

        $nikIbuHamilArray = array();
        foreach ($nikIbuHamil as $data) {
            array_push($nikIbuHamilArray, $data->nik_ibu);
        }

        $nikIbuHamilLatest = DB::table('kehamilan')
            ->select('nik_ibu', DB::raw('MAX(tanggal_awal_kehamilan) as tanggal_awal_kehamilan'))
            ->where('tanggal_melahirkan', NULL)
            ->groupBy('nik_ibu')
            ->get();

        $pemeriksaan = DB::table('pemeriksaan')
            ->select('nik_ibu', DB::raw('MAX(tanggal) as tanggal'))
            ->groupBy('nik_ibu')
            ->get();

        // dd($pemeriksaan->firstWhere('nik_ibu', 123456)->tanggal);

        return view('layouts.dashboard_layout', [
            'pasien' => $pasien,
            'user' => $user[0],
            'nikIbuHamilArray' => $nikIbuHamilArray,
            'nikIbuHamilLatest' => $nikIbuHamilLatest,
            'pemeriksaan' => $pemeriksaan,
        ]);
    }

    public function modalDetailPasien($nik_pasien)
    {
        $pasien = DB::table('pasien')->where('nik', $nik_pasien)->first();
        $alamatPasien = DB::table('alamat')->where('id', $pasien->id_alamat)->first();

        return view('modals.modal_detail_pasien', [
            'pasien' => $pasien,
            'alamatPasien' => $alamatPasien,
        ]);
    }

    public function modalEditPasien($nik_pasien)
    {
        $pasien = DB::table('pasien')->where('nik', $nik_pasien)->first();
        $alamatPasien = DB::table('alamat')->where('id', $pasien->id_alamat)->first();

        return view('modals.modal_edit_pasien', [
            'pasien' => $pasien,
            'alamatPasien' => $alamatPasien,
        ]);
    }

    public function modalHapusPasien($nik_pasien)
    {

        $pasien = DB::table('pasien')->where('nik', $nik_pasien)->first();
        $alamatPasien = DB::table('alamat')->where('id', $pasien->id_alamat)->first();


        return view('modals.modal_hapus_pasien', [
            'pasien' => $pasien,
            'alamatPasien' => $alamatPasien,
        ]);
    }

    public function modalTambahKehamilan($nik_pasien)
    {

        $pasien = DB::table('pasien')->where('nik', $nik_pasien)->first();
        $alamatPasien = DB::table('alamat')->where('id', $pasien->id_alamat)->first();


        return view('modals.modal_tambah_kehamilan', [
            'pasien' => $pasien,
            'alamatPasien' => $alamatPasien,
        ]);
    }

    public function modalEditKehamilan($nik_pasien)
    {

        $pasien = DB::table('pasien')->where('nik', $nik_pasien)->first();
        $alamatPasien = DB::table('alamat')->where('id', $pasien->id_alamat)->first();
        $kehamilan = DB::table('kehamilan')->where('nik_ibu', $nik_pasien)->first();


        return view('modals.modal_edit_kehamilan', [
            'pasien' => $pasien,
            'alamatPasien' => $alamatPasien,
            'kehamilan' => $kehamilan
        ]);
    }


    public function modalHapusKehamilan($nik_pasien)
    {

        $pasien = DB::table('pasien')->where('nik', $nik_pasien)->first();
        $alamatPasien = DB::table('alamat')->where('id', $pasien->id_alamat)->first();
        $kehamilan = DB::table('kehamilan')->where('nik_ibu', $nik_pasien)->first();


        return view('modals.modal_hapus_kehamilan', [
            'pasien' => $pasien,
            'alamatPasien' => $alamatPasien,
            'kehamilan' => $kehamilan
        ]);
    }


    public function modalRiwayatPemeriksaan($nik_pasien)
    {

        $pasien = DB::table('pasien')->where('nik', $nik_pasien)->first();
        $alamatPasien = DB::table('alamat')->where('id', $pasien->id_alamat)->first();
        $kehamilan = DB::table('kehamilan')->where('nik_ibu', $nik_pasien)->first();
        $pemeriksaan = DB::table('pemeriksaan')->where('nik_ibu', $nik_pasien)->get();


        return view('modals.modal_riwayat_pemeriksaan', [
            'pasien' => $pasien,
            'alamatPasien' => $alamatPasien,
            'kehamilan' => $kehamilan,
            'pemeriksaan' => $pemeriksaan,
        ]);
    }
}
