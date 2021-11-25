<form class="needs-validation" action="/edit-data-pasien/{{ $pasien->nik }}" method="POST" id="formEditPasien" novalidate>
    <div class="modal fade" id="modalEditPasien" tabindex="-1" aria-labelledby="modalEditPasienLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
        <div class="modal-dialog modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5>Edit Data Pasien</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                {{-- Identitas Ibu --}}
                <div class="modal-body" style="padding: 30px;">
                    <h6 style="margin-left: 3px;">Identitas Ibu</h6> 
                    <div class="card mb-3 px-3" style="border: 2px solid rgb(182, 182, 182);">
                        <div class="row g-0">
                            <div class="col-md-12">
                                {{-- Form --}}
                                <div style="display: flex; flex-direction: column; margin-top : 20px; margin-bottom: 20px; background-color: #ffffff">
                                    
                                    @csrf

                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input name="nik" type="text" class="form-control" id="nik" aria-describedby="emailHelp" required="required" value="{{ $pasien->nik }}">
                                        <div class="invalid-feedback"> Tidak boleh kosong </div>
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" required="required" value="{{ $pasien->nama }}">
                                        <div class="invalid-feedback"> Tidak boleh kosong </div>
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                        <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" aria-describedby="emailHelp" required="required" value="{{ $pasien->tempat_lahir }}">
                                        <div class="invalid-feedback"> Tidak boleh kosong </div>
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                        <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" aria-describedby="emailHelp" required="required" value="{{ $pasien->tanggal_lahir }}">
                                        <div class="invalid-feedback"> Tidak boleh kosong dan harus diisi lengkap </div>
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                                        <div class="input-group">
                                            <input name="tinggi_badan" type="number" class="form-control" id="tinggi_badan" aria-describedby="emailHelp" required="required" value="{{ $pasien->tinggi_badan }}">
                                            <span class="input-group-text">cm</span>
                                        </div>
                                        <div class="invalid-feedback"> Tidak boleh kosong </div>
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="nama_suami" class="form-label">Nama Suami</label>
                                        <input name="nama_suami" type="text" class="form-control" id="nama_suami" aria-describedby="emailHelp" required="required" value="{{ $pasien->nama_suami }}">
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
                                    
                                    <input type="text" name="id_alamat" value="{{ $pasien->id_alamat }}" hidden>
                                    
                                    <div class="mb-3">
                                        <label for="provinsi" class="form-label">Provinsi</label>
                                        <input name="provinsi" type="text" class="form-control" id="provinsi" aria-describedby="emailHelp" required="required" value="{{ $alamatPasien->provinsi }}">
                                        <div class="invalid-feedback"> Tidak boleh kosong </div>
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="kabupaten_kota" class="form-label">Kabupaten / Kota</label>
                                        <input name="kabupaten_kota" type="text" class="form-control" id="kabupaten_kota" aria-describedby="emailHelp" required="required" value="{{ $alamatPasien->kabupaten_kota }}">
                                        <div class="invalid-feedback"> Tidak boleh kosong </div>
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                        <input name="kecamatan" type="text" class="form-control" id="kecamatan" aria-describedby="emailHelp" required="required" value="{{ $alamatPasien->kecamatan }}">
                                        <div class="invalid-feedback"> Tidak boleh kosong </div>
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="kelurahan_desa" class="form-label">Kelurahan Desa</label>
                                        <input name="kelurahan_desa" type="text" class="form-control" id="kelurahan_desa" aria-describedby="emailHelp" required="required" value="{{ $alamatPasien->kelurahan_desa }}">
                                        <div class="invalid-feedback"> Tidak boleh kosong</div>
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="rt" class="form-label">RT</label>
                                        <input name="rt" type="number" class="form-control" id="rt" aria-describedby="emailHelp" required="required" value="{{ $alamatPasien->rt }}">
                                        <div class="invalid-feedback"> Tidak boleh kosong </div>
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="rw" class="form-label">RW</label>
                                        <input name="rw" type="number" class="form-control" id="rw" aria-describedby="emailHelp" required="required" value="{{ $alamatPasien->rw }}">
                                        <div class="invalid-feedback"> Tidak boleh kosong </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div> {{-- end card alamat--}}
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit"class="btn btn-primary">Simpan Perubahan</button>
                </div>

            </div>
        </div>
    </div>
</form>

