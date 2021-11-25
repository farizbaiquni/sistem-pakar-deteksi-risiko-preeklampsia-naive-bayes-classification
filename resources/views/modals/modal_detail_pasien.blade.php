<div class="modal-dialog modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
        
        <div class="modal-header">
            <h5>Detail Data Pasien</h5>
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
                                <tbody id="modal-body-detail">
                                    
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
        </div> {{-- end modal body --}}
        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
        
        
    </div> {{-- end modal content --}}
</div>


