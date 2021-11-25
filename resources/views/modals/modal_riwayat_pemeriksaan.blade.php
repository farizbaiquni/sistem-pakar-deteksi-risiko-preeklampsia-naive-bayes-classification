<form class="needs-validation" action="" method="GET" id="formRiwayatPemeriksaan" novalidate>
    <div class="modal fade" id="modalRiwayatPemeriksaan" tabindex="-1" aria-labelledby="modalRiwayatPemeriksaan" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
        <div class="modal-dialog modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h5>Riwayat Pemeriksaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body" style="padding: 30px;">    
                    <div class="card mb-3" style="max-width: 800px;">
                        <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body" style="background-color: #dcf7ca; border: 2px solid rgb(182, 182, 182);">
                                <table class="table table-sm table-borderless">
                                    <thead>
                                        <h6 class="card-title" style="margin-top: 10px; padding-left: 4px;">Identitas Ibu</h6>
                                    </thead>
                                    <tbody>
                                        <tr style="font-size: 15px">
                                            <td scope="row">NIK</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">{{ $pasien->nik }}</td>
                                        </tr>
                                        <tr style="font-size: 15px">
                                            <td scope="row" style="min-width: 180px;">Nama</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">{{ $pasien->nama }}</td>
                                        </tr style="word-break: break-all">
                                        <tr style="font-size: 15px">
                                            <td scope="row">Tempat, Tanggal Lahir</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">{{ $pasien->tempat_lahir.", ".date('d F Y', strtotime($pasien->tanggal_lahir)) }}</td>
                                        </tr>
                                        <tr style="font-size: 15px">
                                            <td scope="row" style="min-width: 180px;">Tinggi Badan</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">{{ $pasien->tinggi_badan." cm" }}</td>
                                        </tr style="word-break: break-all">
                                        <tr style="font-size: 15px">
                                            <td scope="row">Usia</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">{{ date_diff(date_create($pasien->tanggal_lahir), date_create('today'))->y." tahun" }}</td>
                                        </tr>
                                        <tr style="font-size: 15px">
                                            <td scope="row">Nama Suami</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">{{ $pasien->nama_suami }}</td>
                                        </tr>
                                        <tr style="font-size: 15px">
                                            <td scope="row">Alamat</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%; word-break: break-all;">{{$alamatPasien->provinsi.", ".$alamatPasien->kabupaten_kota.", ".$alamatPasien->kecamatan.", ".$alamatPasien->kelurahan_desa. ", rt ".$alamatPasien->rt.", rw ".$alamatPasien->rw.", "}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Form --}}
                    <div id="riwayatPemeriksaan" style="display: flex; flex-direction: column; margin-top : 20px; margin-bottom: 20px; background-color: #ffffff">
                        
                            <fieldset class="p-3" style="border: 2px solid rgb(182, 182, 182); width: 100%;">
                                <legend class=""><h6>Riwayat Pemeriksaan</h6></legend>
                                @csrf

                                @foreach ($pemeriksaan as $data)
                                
                                <button class="text-white py-1 collapsible" style="width: 100%; border: none; font-size: 15px;" type="button"> 
                                    Pemeriksaan tanggal {{ date('d F Y', strtotime($data->tanggal)) }}
                                </button>
                                
                                <table class="table table-sm table-borderless">
                                    <tbody>
                                        <tr style="font-size: 15px">
                                            <td scope="row" style="min-width: 130px;">Kategori Risiko</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">{{ $data->kategori_risiko }}</td>
                                        </tr>
                                        <tr style="font-size: 15px">
                                            <td scope="row" style="min-width: 130px;">Peluang </td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">{{ $data->tingkat_risiko. ' %' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                @endforeach
                                
                            </fieldset>
                            
                    </div>
                    
                </div> <!-- end modal body -->
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
                
            </div> <!-- end modal content -->
        </div> <!-- end modal dialog -->
    </div> <!-- end modal -->
</form>