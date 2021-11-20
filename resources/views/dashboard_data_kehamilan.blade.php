<div class="container px-5 py-5">
    <h4 class="mb-3" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Data
        Kehamilan
        Pasien</h4>
    <table class="table table-striped table-hover">
        <thead class="thead-dark bg-dark text-white">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama Ibu</th>
                <th scope="col">Nama Suami</th>
                <th scope="col">Status Kehamilan</th>
                <th scope="col">Usia Kehamilan</th>
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
                        123</td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        {{ $data->nama }}</td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Otto
                    </td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">@mdo
                    </td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        {{ $data->nama_suami }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahDataKehamilan">tambah</button>
                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditDataKehamilan">edit</button>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusDataKehamilan">hapus</button>
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </tbody>
    </table>

    
    <!-- Modal Tambah Data Kehamilan -->
    <form class="needs-validation" action="proses-edit-data-kehamilan" method="POST" id="formTambahDataKehamilan" novalidate>
        <div class="modal fade" id="modalTambahDataKehamilan" tabindex="-1" aria-labelledby="modalTambahDataKehamilanLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
            <div class="modal-dialog modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h5>Tambah Data Kehamilan Baru</h5>
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
                    
                    {{-- Form --}}
                    <div style="display: flex; flex-direction: column; margin-top : 20px; margin-bottom: 20px; background-color: #ffffff">
                        
                            <fieldset class="p-3" style="border: 2px solid rgb(182, 182, 182);">
                                <legend class=""><h6>Data Kehamilan</h6></legend>
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kehamilan anak ke-</label>
                                    <input name="kehamilanKe" type="number" class="form-control" id="kehamilanKe" aria-describedby="emailHelp" required="required">
                                    <div class="invalid-feedback"> Tidak boleh kosong </div>
                                </div>
    
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal awal kehamilan</label>
                                    <input name="tanggalAwalKehamilan" type="date" class="form-control" id="tanggalAwalKehamilan" aria-describedby="emailHelp" required="required">
                                    <div class="invalid-feedback"> Tidak boleh kosong dan harus diisi lengkap </div>
                                </div>
                            </fieldset>
                            
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button id="submitTambahDataKehamilan" type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                    
                </div>
            </div>
            </div>
        </div>
        </form>
 
    
    <!-- Modal Edit Data Kehamilan -->
    <form class="needs-validation" action="proses-tambah-data-kehamilan" method="POST" id="formEditDataKehamilan" novalidate>
        <div class="modal fade" id="modalEditDataKehamilan" tabindex="-1" aria-labelledby="modalTambahDataKehamilanLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
            <div class="modal-dialog modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h5>Edit Data Kehamilan Baru</h5>
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
                        
                        {{-- Form --}}
                        <div style="display: flex; flex-direction: column; margin-top : 20px; margin-bottom: 20px; background-color: #ffffff">
                            
                                <fieldset class="p-3" style="border: 2px solid rgb(182, 182, 182);">
                                    <legend class=""><h6>Data Kehamilan</h6></legend>
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kehamilan anak ke-</label>
                                        <input name="kehamilanKe" type="number" class="form-control" id="kehamilanKe" aria-describedby="emailHelp" required="required">
                                        <div class="invalid-feedback"> Tidak boleh kosong </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal awal kehamilan</label>
                                        <input name="tanggalAwalKehamilan" type="date" class="form-control" id="tanggalAwalKehamilan" aria-describedby="emailHelp" required="required">
                                        <div class="invalid-feedback"> Tidak boleh kosong dan harus diisi lengkap </div>
                                    </div>
                                </fieldset>
                                
                        </div>
                        
                    </div> <!-- end modal body -->
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button id="submitTambahDataKehamilan" type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                    
                </div> <!-- end modal content -->
            </div> <!-- end modal dialog -->
        </div> <!-- end modal -->
    </form>
    


    <!-- Modal Hapus Data Kehamilan -->
    <form class="needs-validation" action="proses-hapus-data-kehamilan" method="POST" id="formHapusDataKehamilan" novalidate>
        <div class="modal fade" id="modalHapusDataKehamilan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Penghapusan Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p style="margin-left: 4px;">Apakah Anda yakin ingin menghapus data kehamilan berikut ini : </p>
                        <div class="card mb-3" style="max-width: 800px;">
                            <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body" style="background-color: #fcc7c9; border: 2px solid rgb(182, 182, 182);">
                                    <table class="table table-sm table-borderless">
                                        <thead>
                                            <h6 class="card-title" style="margin-top: 10px; padding-left: 4px;">Data Kehamilan Ibu</h6>
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
                                                <td scope="row">Nama Suami</td>
                                                <td style="min-width: 20px;"> : </td>
                                                <td style="width: 100%">Mark</td>
                                            </tr>
                                            <tr style="font-size: 15px">
                                                <td scope="row">Alamat</td>
                                                <td style="min-width: 20px;"> : </td>
                                                <td style="width: 100%; word-break: break-all;">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</td>
                                            </tr>
                                            <tr style="font-size: 15px">
                                                <td scope="row">Kehamilan anak ke-</td>
                                                <td style="min-width: 20px;"> : </td>
                                                <td style="width: 100%; word-break: break-all;">100</td>
                                            </tr>
                                            <tr style="font-size: 15px">
                                                <td scope="row">Tanggal awal kehamilan</td>
                                                <td style="min-width: 20px;"> : </td>
                                                <td style="width: 100%; word-break: break-all;">10 Januari 2010</td>
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


<script src="js/dataKehamilan.js"></script>


