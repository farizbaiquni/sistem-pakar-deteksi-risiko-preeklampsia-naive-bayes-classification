<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasisPengetahuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $variabel = array(
            'var_sistolik_normal' => 'td_sistolik_normal',
            'var_sistolik_tinggi' => 'td_sistolik_tinggi',
            'var_sistolik_sangat_tinggi' => 'td_sistolik_sangat_tinggi',
            'var_diastolik_normal' => 'td_diastolik_normal',
            'var_diastolik_tinggi' => 'td_diastolik_tinggi',
            'var_diastolik_sangat_tinggi' => 'td_diastolik_sangat_tinggi',
            'var_bb_rendah' => 'kenaikan_bb_rendah',
            'var_bb_normal' => 'kenaikan_bb_normal',
            'var_bb_tinggi' => 'kenaikan_bb_tinggi',
            'var_trisemester_1' => 'kehamilan_trisemester_1',
            'var_trisemester_2' => 'kehamilan_trisemester_2',
            'var_trisemester_3' => 'kehamilan_trisemester_3',
            'var_usia_normal' => 'usia_ibu_normal',
            'var_usia_tinggi' => 'usia_ibu_tinggi',
            'var_usia_sangat_tinggi' => 'usia_ibu_sangat_tinggi',
            'var_edema_ya' => 'edema_ya',
            'var_edema_tidak' => 'edema_tidak',
            'var_proteinuria_normal' => 'proteinuria_normal',
            'var_proteinuria_tinggi' => 'proteinuria_tinggi',
            'var_proteinuria_sangat_tinggi' => 'proteinuria_sangat_tinggi'
        );

        foreach ($variabel as $id => $value) {
            DB::table('variabel')->insert([
                'id' => $id,
                'nama' => $value,
                'id_gejala' => 1,
            ]);
        }

        $detailAturan = array(
            ['atr_1', 'var_sistolik_normal'],
            ['atr_1', 'var_diastolik_sangat_tinggi'],
            ['atr_1', 'var_bb_rendah'],
            ['atr_1', 'var_trisemester_1'],
            ['atr_1', 'var_usia_normal'],
            ['atr_1', 'var_edema_tidak'],
            ['atr_1', 'var_proteinuria_normal'],
            ['atr_2', 'var_sistolik_normal'],
            ['atr_2', 'var_diastolik_tinggi'],
            ['atr_2', 'var_bb_normal'],
            ['atr_2', 'var_trisemester_2'],
            ['atr_2', 'var_usia_normal'],
            ['atr_2', 'var_edema_ya'],
            ['atr_2', 'var_proteinuria_tinggi'],
            ['atr_3', 'var_sistolik_tinggi'],
            ['atr_3', 'var_diastolik_normal'],
            ['atr_3', 'var_bb_tinggi'],
            ['atr_3', 'var_trisemester_3'],
            ['atr_3', 'var_usia_normal'],
            ['atr_3', 'var_edema_ya'],
            ['atr_3', 'var_proteinuria_normal'],
            ['atr_4', 'var_sistolik_tinggi'],
            ['atr_4', 'var_diastolik_normal'],
            ['atr_4', 'var_bb_normal'],
            ['atr_4', 'var_trisemester_2'],
            ['atr_4', 'var_usia_tinggi'],
            ['atr_4', 'var_edema_tidak'],
            ['atr_4', 'var_proteinuria_tinggi'],
            ['atr_5', 'var_sistolik_sangat_tinggi'],
            ['atr_5', 'var_diastolik_normal'],
            ['atr_5', 'var_bb_rendah'],
            ['atr_5', 'var_trisemester_3'],
            ['atr_5', 'var_usia_tinggi'],
            ['atr_5', 'var_edema_tidak'],
            ['atr_5', 'var_proteinuria_normal'],
            ['atr_6', 'var_sistolik_sangat_tinggi'],
            ['atr_6', 'var_diastolik_normal'],
            ['atr_6', 'var_bb_tinggi'],
            ['atr_6', 'var_trisemester_1'],
            ['atr_6', 'var_usia_sangat_tinggi'],
            ['atr_6', 'var_edema_ya'],
            ['atr_6', 'var_proteinuria_tidak'],
            ['atr_7', 'var_sistolik_normal'],
            ['atr_7', 'var_diastolik_tinggi'],
            ['atr_7', 'var_bb_tinggi'],
            ['atr_7', 'var_trisemester_2'],
            ['atr_7', 'var_usia_normal'],
            ['atr_7', 'var_edema_ya'],
            ['atr_7', 'var_proteinuria_sangat_tinggi'],
            ['atr_8', 'var_sistolik_normal'],
            ['atr_8', 'var_diastolik_sangat_tinggi'],
            ['atr_8', 'var_bb_rendah'],
            ['atr_8', 'var_trisemester_3'],
            ['atr_8', 'var_usia_tinggi'],
            ['atr_8', 'var_edema_tidak'],
            ['atr_8', 'var_proteinuria_tinggi'],
            ['atr_9', 'var_sistolik_tinggi'],
            ['atr_9', 'var_diastolik_normal'],
            ['atr_9', 'var_bb_rendah'],
            ['atr_9', 'var_trisemester_3'],
            ['atr_9', 'var_usia_sangat_tinggi'],
            ['atr_9', 'var_edema_ya'],
            ['atr_9', 'var_proteinuria_normal'],
            ['atr_10', 'var_sistolik_tinggi'],
            ['atr_10', 'var_diastolik_sangat_tinggi'],
            ['atr_10', 'var_bb_normal'],
            ['atr_10', 'var_trisemester_1'],
            ['atr_10', 'var_usia_tinggi'],
            ['atr_10', 'var_edema_tidak'],
            ['atr_10', 'var_proteinuria_normal'],
            ['atr_11', 'var_sistolik_sangat_tinggi'],
            ['atr_11', 'var_diastolik_tinggi'],
            ['atr_11', 'var_bb_tinggi'],
            ['atr_11', 'var_trisemester_2'],
            ['atr_11', 'var_usia_normal'],
            ['atr_11', 'var_edema_tidak'],
            ['atr_11', 'var_proteinuria_normal'],
            ['atr_12', 'var_sistolik_sangat_tinggi'],
            ['atr_12', 'var_diastolik_normal'],
            ['atr_12', 'var_bb_tinggi'],
            ['atr_12', 'var_trisemester_2'],
            ['atr_12', 'var_usia_sangat_tinggi'],
            ['atr_12', 'var_edema_tidak'],
            ['atr_12', 'var_proteinuria_tinggi'],
            ['atr_13', 'var_sistolik_tinggi'],
            ['atr_13', 'var_diastolik_sangat_tinggi'],
            ['atr_13', 'var_bb_tinggi'],
            ['atr_13', 'var_trisemester_2'],
            ['atr_13', 'var_usia_tinggi'],
            ['atr_13', 'var_edema_ya'],
            ['atr_13', 'var_proteinuria_tinggi'],
            ['atr_14', 'var_sistolik_tinggi'],
            ['atr_14', 'var_diastolik_sangat_tinggi'],
            ['atr_14', 'var_bb_tinggi'],
            ['atr_14', 'var_trisemester_3'],
            ['atr_14', 'var_usia_tinggi'],
            ['atr_14', 'var_edema_tidak'],
            ['atr_14', 'var_proteinuria_sangat_tinggi'],
            ['atr_15', 'var_sistolik_sangat_tinggi'],
            ['atr_15', 'var_diastolik_sangat_tinggi'],
            ['atr_15', 'var_bb_tinggi'],
            ['atr_15', 'var_trisemester_2'],
            ['atr_15', 'var_usia_sangat_tinggi'],
            ['atr_15', 'var_edema_ya'],
            ['atr_15', 'var_proteinuria_tinggi'],
            ['atr_16', 'var_sistolik_sangat_tinggi'],
            ['atr_16', 'var_diastolik_sangat_tinggi'],
            ['atr_16', 'var_bb_tinggi'],
            ['atr_16', 'var_trisemester_1'],
            ['atr_16', 'var_usia_sangat_tinggi'],
            ['atr_16', 'var_edema_ya'],
            ['atr_16', 'var_proteinuria_normal'],
            ['atr_17', 'var_sistolik_sangat_tinggi'],
            ['atr_17', 'var_diastolik_sangat_tinggi'],
            ['atr_17', 'var_bb_tinggi'],
            ['atr_17', 'var_trisemester_2'],
            ['atr_17', 'var_usia_normal'],
            ['atr_17', 'var_edema_tidak'],
            ['atr_17', 'var_proteinuria_tinggi'],
            ['atr_18', 'var_sistolik_sangat_tinggi'],
            ['atr_18', 'var_diastolik_sangat_tinggi'],
            ['atr_18', 'var_bb_tinggi'],
            ['atr_18', 'var_trisemester_3'],
            ['atr_18', 'var_usia_tinggi'],
            ['atr_18', 'var_edema_ya'],
            ['atr_18', 'var_proteinuria_sangat_tinggi'],
        );


        $arrlength = count($detailAturan);

        for ($x = 0; $x < $arrlength; $x++) {
            DB::table('detail_aturan')->insert([
                'id_aturan' => $detailAturan[$x][0],
                'id_variabel' => $detailAturan[$x][1],
            ]);
        }



        $kelas = array(
            'kls_normal' => 'normal',
            'kls_ringan' => 'pre-eklampsia_ringan',
            'kls_tinggi' => 'pre-eklampsia_tinggi'
        );

        foreach ($kelas as $id => $value) {
            DB::table('kelas')->insert([
                'id' => $id,
                'nama' => $value,
            ]);
        }



        $aturan = array(
            'atr_1' => ['aturan_1', 'kls_normal'],
            'atr_2' => ['aturan_2', 'kls_normal'],
            'atr_3' => ['aturan_3', 'kls_normal'],
            'atr_4' => ['aturan_4', 'kls_normal'],
            'atr_5' => ['aturan_5', 'kls_normal'],
            'atr_6' => ['aturan_6', 'kls_normal'],
            'atr_7' => ['aturan_7', 'kls_ringan'],
            'atr_8' => ['aturan_8', 'kls_ringan'],
            'atr_9' => ['aturan_9', 'kls_ringan'],
            'atr_10' => ['aturan_10', 'kls_ringan'],
            'atr_11' => ['aturan_11', 'kls_ringan'],
            'atr_12' => ['aturan_12', 'kls_ringan'],
            'atr_13' => ['aturan_13', 'kls_tinggi'],
            'atr_14' => ['aturan_14', 'kls_tinggi'],
            'atr_15' => ['aturan_15', 'kls_tinggi'],
            'atr_16' => ['aturan_16', 'kls_tinggi'],
            'atr_17' => ['aturan_17', 'kls_tinggi'],
            'atr_18' => ['aturan_18', 'kls_tinggi'],
        );

        foreach ($aturan as $id => $value) {
            DB::table('aturan')->insert([
                'id' => $id,
                'nama' => $value[0],
                'id_kelas' => $value[1],
            ]);
        }
    } // End function run 
} // End class
