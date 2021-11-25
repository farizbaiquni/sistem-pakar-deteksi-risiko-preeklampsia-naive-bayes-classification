<?php

namespace App\Http\Controllers;

use DateTime;
use Date;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemeriksaanController extends Controller
{
    public function prosesKalkulasi(Request $request, $nik_pasien)
    {

        $pasien = DB::table('pasien')
            ->where('nik', $nik_pasien)
            ->first();

        $tanggal = DB::table('kehamilan')->where('nik_ibu', $nik_pasien)->max('tanggal_awal_kehamilan');
        $bulan_kehamilan = (int)date_diff(date_create($tanggal), new DateTime('now'))->format('%m');
        $usia_kehamilan_lengkap = date_diff(date_create($tanggal), new DateTime('now'))->format('%m Bulan %d Hari');

        // dd((int)date_diff(date_create($tanggal), new DateTime('now'))->format('%m'));
        // dd(date_diff(date_create($pasien->tanggal_lahir), date_create('today'))->y);

        $tekanan_darah_sistolik = '';
        $tekanan_darah_diastolik = '';
        $kenaikan_berat_badan = '';
        $usia_kehamilan = '';
        $usia_ibu = '';
        $edema = '';
        $proteinuria = '';

        $hasilProbabilitasKelasNormal = 0;
        $hasilProbabilitasKelasRingan = 0;
        $hasilProbabilitasKelasTinggi = 0;


        if ($bulan_kehamilan <= 3) {
            $usia_kehamilan = 'var_trisemester_1';
        } else if ($bulan_kehamilan > 3 && $bulan_kehamilan <= 6) {
            $usia_kehamilan = 'var_trisemester_2';
        } else {
            $usia_kehamilan = 'var_trisemester_3';
        }


        if (date_diff(date_create($pasien->tanggal_lahir), date_create('today'))->y < 20) {
            $usia_ibu = 'var_usia_tinggi';
        } else if (date_diff(date_create($pasien->tanggal_lahir), date_create('today'))->y >= 20 && date_diff(date_create($pasien->tanggal_lahir), date_create('today'))->y < 40) {
            $usia_ibu = 'var_usia_normal';
        } else {
            $usia_ibu = 'var_usia_sangat_tinggi';
        }



        if ($request->tekanan_darah_sistolik <= 120) {
            $tekanan_darah_sistolik = 'var_sistolik_normal';
        } else if ($request->tekanan_darah_sistolik > 120 && $request->tekanan_darah_sistolik < 160) {
            $tekanan_darah_sistolik = 'var_sistolik_tinggi';
        } else {
            $tekanan_darah_sistolik = 'var_sistolik_sangat_tinggi';
        }

        if ($request->tekanan_darah_diastolik <= 110) {
            $tekanan_darah_diastolik = 'var_diastolik_normal';
        } else if ($request->tekanan_darah_diastolik > 110 && $request->tekanan_darah_diastolik < 150) {
            $tekanan_darah_diastolik = 'var_diastolik_tinggi';
        } else {
            $tekanan_darah_diastolik = 'var_diastolik_sangat_tinggi';
        }

        if ($request->kenaikan_berat_badan <= 2) {
            $kenaikan_berat_badan = 'var_bb_rendah';
        } else if ($request->kenaikan_berat_badan > 2 && $request->kenaikan_berat_badan <= 4) {
            $kenaikan_berat_badan = 'var_bb_normal';
        } else {
            $kenaikan_berat_badan = 'var_bb_tinggi';
        }

        if ($request->edema == 'ya') {
            $edema = 'var_edema_ya';
        } else {
            $edema = 'var_edema_tidak';
        }

        if ($request->proteinuria <= 0) {
            $proteinuria = 'var_proteinuria_normal';
        } else if ($request->proteinuria == 1) {
            $proteinuria = 'var_proteinuria_tinggi';
        } else {
            $proteinuria = 'var_proteinuria_sangat_tinggi';
        }


        // echo $tekanan_darah_sistolik . ', ' . $tekanan_darah_diastolik . ',' . $kenaikan_berat_badan . ', ' . $edema . ', ' . $proteinuria . '' . $usia_kehamilan . '' . $usia_ibu . '';
        // dd("h");
        // dd($request->tekanan_darah_sistolik);
        // dd($request->all());

        // =========================== HITUNG SETIAP PROBABILITAS KELAS ===========================
        $kelas = DB::table('kelas')
            ->get();

        $jumlah_aturan = DB::table('aturan')
            ->count();

        foreach ($kelas as $data) {
            $jumlah_kelas_normal = DB::table('aturan')
                ->where('id_kelas', $data->id)
                ->count();
            $jumlah_kelas_ringan = DB::table('aturan')
                ->where('id_kelas', $data->id)
                ->count();
            $jumlah_kelas_tinggi = DB::table('aturan')
                ->where('id_kelas', $data->id)
                ->count();
        }

        $probabilitas_kelas_normal = $jumlah_kelas_normal / $jumlah_aturan;
        $probabilitas_kelas_ringan = $jumlah_kelas_ringan / $jumlah_aturan;
        $probabilitas_kelas_tinggi = $jumlah_kelas_tinggi / $jumlah_aturan;


        // =========================== HITUNG SETIAP PROBABILITAS KELAS NORMAL ===========================

        $probabilitasSistolik_kelasNormal = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $tekanan_darah_sistolik)
            ->where('aturan.id_kelas', "kls_normal")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasDiastolik_kelasNormal = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $tekanan_darah_diastolik)
            ->where('aturan.id_kelas', "kls_normal")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasBeraBadan_kelasNormal = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $kenaikan_berat_badan)
            ->where('aturan.id_kelas', "kls_normal")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasUsiaKehamilan_kelasNormal = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $usia_kehamilan)
            ->where('aturan.id_kelas', "kls_normal")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasUsiaIbu_kelasNormal = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $usia_ibu)
            ->where('aturan.id_kelas', "kls_normal")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasEdema_kelasNormal = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $edema)
            ->where('aturan.id_kelas', "kls_normal")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasProteinuria_kelasNormal = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $proteinuria)
            ->where('aturan.id_kelas', "kls_normal")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();


        try {
            $hasilProbabilitasKelasNormal = ($probabilitasSistolik_kelasNormal / $jumlah_kelas_normal) * ($probabilitasDiastolik_kelasNormal / $jumlah_kelas_normal) * ($probabilitasBeraBadan_kelasNormal / $jumlah_kelas_normal) * ($probabilitasUsiaKehamilan_kelasNormal / $jumlah_kelas_normal) * ($probabilitasUsiaIbu_kelasNormal / $jumlah_kelas_normal) * ($probabilitasEdema_kelasNormal / $jumlah_kelas_normal) * ($probabilitasProteinuria_kelasNormal / $jumlah_kelas_normal);
        } catch (Exception $e) {
        }


        // =========================== HITUNG SETIAP PROBABILITAS KELAS RINGAN ===========================
        $probabilitasSistolik_kelasRingan = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $tekanan_darah_sistolik)
            ->where('aturan.id_kelas', "kls_ringan")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasDiastolik_kelasRingan = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $tekanan_darah_diastolik)
            ->where('aturan.id_kelas', "kls_ringan")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasBeraBadan_kelasRingan = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $kenaikan_berat_badan)
            ->where('aturan.id_kelas', "kls_ringan")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasUsiaKehamilan_kelasRingan = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $usia_kehamilan)
            ->where('aturan.id_kelas', "kls_ringan")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasUsiaIbu_kelasRingan = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $usia_ibu)
            ->where('aturan.id_kelas', "kls_ringan")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasEdema_kelasRingan = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $edema)
            ->where('aturan.id_kelas', "kls_ringan")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasProteinuria_kelasRingan = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $proteinuria)
            ->where('aturan.id_kelas', "kls_ringan")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        try {
            $hasilProbabilitasKelasRingan = ($probabilitasSistolik_kelasRingan / $jumlah_kelas_ringan) * ($probabilitasDiastolik_kelasRingan / $jumlah_kelas_ringan) * ($probabilitasBeraBadan_kelasRingan / $jumlah_kelas_ringan) * ($probabilitasUsiaKehamilan_kelasRingan / $jumlah_kelas_ringan) * ($probabilitasUsiaIbu_kelasRingan / $jumlah_kelas_ringan) * ($probabilitasEdema_kelasRingan / $jumlah_kelas_ringan) * ($probabilitasProteinuria_kelasRingan / $jumlah_kelas_ringan);
        } catch (Exception $e) {
        }


        // =========================== HITUNG SETIAP PROBABILITAS KELAS TINGGI ===========================
        $probabilitasSistolik_kelasTinggi = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $tekanan_darah_sistolik)
            ->where('aturan.id_kelas', "kls_tinggi")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasDiastolik_kelasTinggi = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $tekanan_darah_diastolik)
            ->where('aturan.id_kelas', "kls_tinggi")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasBeraBadan_kelasTinggi = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $kenaikan_berat_badan)
            ->where('aturan.id_kelas', "kls_tinggi")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasUsiaKehamilan_kelasTinggi = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $usia_kehamilan)
            ->where('aturan.id_kelas', "kls_tinggi")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasUsiaIbu_kelasTinggi = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $usia_ibu)
            ->where('aturan.id_kelas', "kls_tinggi")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasEdema_kelasTinggi = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $edema)
            ->where('aturan.id_kelas', "kls_tinggi")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        $probabilitasProteinuria_kelasTinggi = DB::table('aturan')
            ->join('detail_aturan', 'aturan.id', '=', 'detail_aturan.id_aturan')
            ->where('detail_aturan.id_variabel', $proteinuria)
            ->where('aturan.id_kelas', "kls_tinggi")
            ->select('aturan.*', 'detail_aturan.*',)
            ->count();

        try {
            $hasilProbabilitasKelasTinggi = ($probabilitasSistolik_kelasTinggi / $jumlah_kelas_tinggi) * ($probabilitasDiastolik_kelasTinggi / $jumlah_kelas_tinggi) * ($probabilitasBeraBadan_kelasTinggi / $jumlah_kelas_tinggi) * ($probabilitasUsiaKehamilan_kelasTinggi / $jumlah_kelas_tinggi) * ($probabilitasUsiaIbu_kelasTinggi / $jumlah_kelas_tinggi) * ($probabilitasEdema_kelasTinggi / $jumlah_kelas_tinggi) * ($probabilitasProteinuria_kelasTinggi / $jumlah_kelas_tinggi);
        } catch (Exception $e) {
        }


        // =========================== PRESENTASE PROBABILITAS SETIAP KELAS ===========================

        $presentase_probabilitas_kelas_normal = $hasilProbabilitasKelasNormal / ($hasilProbabilitasKelasNormal + $hasilProbabilitasKelasRingan + $hasilProbabilitasKelasTinggi);

        $presentase_probabilitas_kelas_ringan = $hasilProbabilitasKelasRingan / ($hasilProbabilitasKelasNormal + $hasilProbabilitasKelasRingan + $hasilProbabilitasKelasTinggi);

        $presentase_probabilitas_kelas_tinggi = $hasilProbabilitasKelasTinggi / ($hasilProbabilitasKelasNormal + $hasilProbabilitasKelasRingan + $hasilProbabilitasKelasTinggi);

        $hasilPersen = max($presentase_probabilitas_kelas_normal, $presentase_probabilitas_kelas_ringan, $presentase_probabilitas_kelas_tinggi);

        $hasilKategori = '';


        if ($hasilPersen == $presentase_probabilitas_kelas_normal) {
            $hasilKategori = 'Hamil Normal';
        } else if ($hasilPersen == $presentase_probabilitas_kelas_ringan) {
            $hasilKategori = 'Ringan';
        } else {
            $hasilKategori = 'Berat';
        }


        $hasilPersen = $hasilPersen * 100;

        // echo $presentase_probabilitas_kelas_normal . ', ' . $presentase_probabilitas_kelas_ringan . ', ' . $presentase_probabilitas_kelas_tinggi;
        // dd($hasilKategori, $hasilPersen);
        // dd($hasilProbabilitasKelasTinggi);


        try {
            DB::beginTransaction();

            $id = DB::table('pemeriksaan')->insertGetId([
                'tanggal' => date('Y-m-d H:i:s'),
                'tekanan_darah_sistolik' => (int) $request->tekanan_darah_sistolik,
                'tekanan_darah_diastolik' => (int)$request->tekanan_darah_diastolik,
                'kenaikan_berat_badan' => (int) $request->kenaikan_berat_badan,
                'edema' => $request->edema,
                'proteinuria' => (int) $request->proteinuria,
                'usia_kehamilan' => $usia_kehamilan_lengkap,
                'usia_ibu' => (int) date_diff(date_create($pasien->tanggal_lahir), date_create('today'))->y,
                'tingkat_risiko' => (int) $hasilPersen,
                'kategori_risiko' => $hasilKategori,
                'nik_ibu' => (int) $pasien->nik
            ]);

            DB::commit();
            return view('hasil_pemeriksaan', [
                'pasien' => $pasien,
                'usia_kehamilan_lengkap' => $usia_kehamilan_lengkap,
                'hasilPersen' => $hasilPersen,
                'hasilKategori' => $hasilKategori,
            ]);
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('/dashboard');
        }
    }
}
