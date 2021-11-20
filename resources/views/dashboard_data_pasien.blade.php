    <div class="container px-5 py-5">
        <h4 class="mb-3" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Data
            Pasien</h4>
        <table class="table table-striped table-hover">
            <thead class="thead-dark bg-dark text-white">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Ibu</th>
                    <th scope="col">Nama Suami</th>
                    <th scope="col">Usia</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($pasien as $data)
                    <tr>
                        <th scope="row"
                            style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            {{ $no }}</th>
                        <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            34798348932649388</td>
                        <td style="max-width: 500px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            {{ $data->nama }}</td>
                        <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            {{ $data->nama_suami }}
                        </td>
                        <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            35 tahun</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalDetailPasien">detail</button>
                            <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditPasien">edit</button>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusPasien">hapus</button>
                        </td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>


    {{-- ================================================ MODAL ================================================  --}}

    <!-- Modal Detail Data Pasien -->
    <div class="modal fade" id="modalDetailPasien" tabindex="-1" aria-labelledby="modalTambahDataKehamilanLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
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
                                    <tbody>
                                        <tr style="font-size: 15px">
                                            <td scope="row">NIK</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">Mark</td>
                                        </tr>
                                        <tr style="font-size: 15px">
                                            <td scope="row" style="min-width: 180px;">Nama</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">Mark</td>
                                        </tr style="word-break: break-all">
                                        <tr style="font-size: 15px">
                                            <td scope="row">Tempat, Tanggal Lahir</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">Mark</td>
                                        </tr>
                                        <tr style="font-size: 15px">
                                            <td scope="row" style="min-width: 180px;">Tinggi Badan</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">190 cm</td>
                                        </tr style="word-break: break-all">
                                        <tr style="font-size: 15px">
                                            <td scope="row">Usia</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">Mark</td>
                                        </tr>
                                        <tr style="font-size: 15px">
                                            <td scope="row">Nama Suami</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%">Mark</td>
                                        </tr>
                                        <tr style="font-size: 15px">
                                            <td scope="row">Alamat</td>
                                            <td style="min-width: 20px;"> : </td>
                                            <td style="width: 100%; word-break: break-all;">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</td>
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
    </div>




    <!-- Modal Edit Data Kehamilan -->
    <form class="needs-validation" action="proses-tambah-data-kehamilan" method="POST" id="formEditPasien" novalidate>
        <div class="modal fade" id="modalEditPasien" tabindex="-1" aria-labelledby="modalEditPasienLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
            <div class="modal-dialog modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h5>Edit Data Pasien</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body" style="padding: 30px;">   

                        {{-- Identitas Ibu --}}
                        <h6 style="margin-left: 3px;">Identitas Ibu</h6> 
                        <div class="card mb-3 px-3" style="border: 2px solid rgb(182, 182, 182);">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    {{-- Form --}}
                                    <div style="display: flex; flex-direction: column; margin-top : 20px; margin-bottom: 20px; background-color: #ffffff">
                                        
                                        @csrf
                                        <div class="mb-3">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input name="nik" type="text" class="form-control" id="nik" aria-describedby="emailHelp" required="required">
                                            <div class="invalid-feedback"> Tidak boleh kosong </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="nama_ibu" class="form-label">Nama</label>
                                            <input name="nama_ibu" type="text" class="form-control" id="nama_ibu" aria-describedby="emailHelp" required="required">
                                            <div class="invalid-feedback"> Tidak boleh kosong </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                            <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" aria-describedby="emailHelp" required="required">
                                            <div class="invalid-feedback"> Tidak boleh kosong </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                            <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" aria-describedby="emailHelp" required="required">
                                            <div class="invalid-feedback"> Tidak boleh kosong dan harus diisi lengkap </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                                            <input name="tinggi_badan" type="number" class="form-control" id="tinggi_badan" aria-describedby="emailHelp" required="required">
                                            <div class="invalid-feedback"> Tidak boleh kosong </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="nama_suami" class="form-label">Nama Suami</label>
                                            <input name="nama_suami" type="text" class="form-control" id="nama_suami" aria-describedby="emailHelp" required="required">
                                            <div class="invalid-feedback"> Tidak boleh kosong </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> {{-- end card identitas pasien --}}

                        {{-- Alamat Pasien --}}
                        <h6 style="margin-left: 3px;">Alamat</h6> 
                        <div class="card mb-3 px-3" style="border: 2px solid rgb(182, 182, 182);">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    {{-- Form --}}
                                    <div style="display: flex; flex-direction: column; margin-top : 20px; margin-bottom: 20px; background-color: #ffffff">
                                        
                                        @csrf
                                        <div class="mb-3">
                                            <label for="provinsi" class="form-label">Provinsi</label>
                                            <input name="provinsi" type="text" class="form-control" id="provinsi" aria-describedby="emailHelp" required="required">
                                            <div class="invalid-feedback"> Tidak boleh kosong </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="kabupaten_kota" class="form-label">Kabupaten / Kota</label>
                                            <input name="kabupaten_kota" type="text" class="form-control" id="kabupaten_kota" aria-describedby="emailHelp" required="required">
                                            <div class="invalid-feedback"> Tidak boleh kosong </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="kecamatan" class="form-label">Kecamatan</label>
                                            <input name="kecamatan" type="text" class="form-control" id="kecamatan" aria-describedby="emailHelp" required="required">
                                            <div class="invalid-feedback"> Tidak boleh kosong </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="kelurahan_desa" class="form-label">Kelurahan Desa</label>
                                            <input name="kelurahan_desa" type="text" class="form-control" id="kelurahan_desa" aria-describedby="emailHelp" required="required">
                                            <div class="invalid-feedback"> Tidak boleh kosong</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="rt" class="form-label">RT</label>
                                            <input name="rt" type="text" class="form-control" id="rt" aria-describedby="emailHelp" required="required">
                                            <div class="invalid-feedback"> Tidak boleh kosong </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="rw" class="form-label">RW</label>
                                            <input name="rw" type="text" class="form-control" id="rw" aria-describedby="emailHelp" required="required">
                                            <div class="invalid-feedback"> Tidak boleh kosong </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> {{-- end card alamat--}}

                    </div> {{-- end modal body --}}
                
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>


    <!-- Modal Hapus Data Kehamilan -->
    <form class="needs-validation" action="proses-hapus-data-pasien" method="POST" id="" novalidate>
        <div class="modal fade" id="modalHapusPasien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Penghapusan Data Pasien</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p style="margin-left: 4px;">Apakah Anda yakin ingin menghapus data pasien berikut ini : </p>
                        <div class="card mb-3" style="max-width: 800px;">
                            <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body" style="background-color: #fcc7c9; border: 2px solid rgb(182, 182, 182);">
                                    <table class="table table-sm table-borderless">
                                        <thead>
                                            <h6 class="card-title" style="margin-top: 10px; padding-left: 4px;">Data Pasien</h6>
                                        </thead>
                                        <tbody>
                                            <tr style="font-size: 15px">
                                                <td scope="row" style="min-width: 180px;">Nama</td>
                                                <td style="min-width: 20px;"> : </td>
                                                <td style="width: 100%">Mark</td>
                                            </tr style="word-break: break-all">
                                            <tr style="font-size: 15px">
                                                <td scope="row">NIK</td>
                                                <td style="min-width: 20px;"> : </td>
                                                <td style="width: 100%">Mark</td>
                                            </tr>
                                            <tr style="font-size: 15px">
                                                <td scope="row">Tempat, Tanggal Lahir</td>
                                                <td style="min-width: 20px;"> : </td>
                                                <td style="width: 100%">Mark</td>
                                            </tr>
                                            <tr style="font-size: 15px">
                                                <td scope="row">Usia</td>
                                                <td style="min-width: 20px;"> : </td>
                                                <td style="width: 100%">Mark</td>
                                            </tr>
                                            <tr style="font-size: 15px">
                                                <td scope="row">Tinggi Badan-</td>
                                                <td style="min-width: 20px;"> : </td>
                                                <td style="width: 100%; word-break: break-all;">100</td>
                                            </tr>
                                            <tr style="font-size: 15px">
                                                <td scope="row">Nama Suami</td>
                                                <td style="min-width: 20px;"> : </td>
                                                <td style="width: 100%">Mark</td>
                                            </tr>
                                            <tr style="font-size: 15px">
                                                <td scope="row">Alamat</td>
                                                <td style="min-width: 20px;"> : </td>
                                                <td style="width: 100%; word-break: break-all;">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end modal body -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </div>

                </div> <!-- end modal content -->
            </div> <!-- end modal dialog -->
        </div> <!-- end modal -->
    </form>


    <script src="js/dataPasien.js"></script>