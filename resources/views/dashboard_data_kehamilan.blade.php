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
                        {{ $data->nik }}</td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        {{ $data->nama }}</td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"> 
                        {{ $data->nama_suami }}
                    </td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        @if (in_array($data->nik, $nikIbuHamilArray))
                            hamil
                        @else
                            tidak hamil
                        @endif
                    </td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        @if ( in_array($data->nik, $nikIbuHamilArray) )
                            {{ date_diff(date_create($nikIbuHamilLatest->firstWhere('nik_ibu', $data->nik)->tanggal_awal_kehamilan), new DateTime('now'))->format('%m Bulan %d Hari') }}
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if (in_array($data->nik, $nikIbuHamilArray))
                            <button type="button" class="btn btn-primary btn-sm btn-tambah-kehamilan" disabled="disabled" data-id-pasien={{ $data->nik }}>tambah</button>
                        @else
                            <button type="button" class="btn btn-primary btn-sm btn-tambah-kehamilan" data-id-pasien={{ $data->nik }}>tambah</button>
                        @endif
                        
                        @if (in_array($data->nik, $nikIbuHamilArray))
                            <button type="button" class="btn btn-info btn-sm btn-edit-kehamilan" data-id-pasien={{ $data->nik }}>edit</button>
                        @else
                            <button type="button" class="btn btn-info btn-sm btn-edit-kehamilan" disabled="disabled" data-id-pasien={{ $data->nik }}>edit</button>
                        @endif
                        
                        @if (in_array($data->nik, $nikIbuHamilArray))
                            <button type="button" class="btn btn-danger btn-sm btn-hapus-kehamilan" data-id-pasien={{ $data->nik }}>hapus</button>
                        @else
                            <button type="button" class="btn btn-danger btn-sm btn-hapus-kehamilan" disabled="disabled" data-id-pasien={{ $data->nik }}>hapus</button>
                        @endif
                        
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </tbody>
    </table>
</div>

    
    <!-- Modal Tambah Data Kehamilan -->
    <div id="container-tambah_kehamilan">
        <form class="needs-validation" action="proses-edit-data-kehamilan" method="POST" id="formTambahDataKehamilan" novalidate>
            <div class="modal fade" id="modalTambahDataKehamilan" tabindex="-1" aria-labelledby="modalTambahDataKehamilanLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
                <div class="modal-dialog modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        
                        <div class="modal-header">
                            <h5>Tambah Data Kehamilan Baru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <div class="modal-body" style="padding: 30px;">    

                            <div class="my-3" style="width: 100%; display: flex; justify-content: center;">
                                <h4>Gagal Mendapatkan Data</h4>
                            </div>
                            
                        </div> {{-- modal-body --}}
                            
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button id="submitTambahDataKehamilan" type="button" class="btn btn-primary">Tambah Data</button>
                        </div>
                        
                    </div> {{-- modal-contenr --}}
                </div>
            </div>
        </form>
    </div>
    
 
    
    <!-- Modal Edit Data Kehamilan -->
    <div id="container-edit-kehamilan">
        <form class="needs-validation" action="proses-tambah-data-kehamilan" method="POST" id="formEditDataKehamilan" novalidate>
            <div class="modal fade" id="modalEditDataKehamilan" tabindex="-1" aria-labelledby="modalTambahDataKehamilanLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
                <div class="modal-dialog modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        
                        <div class="modal-header">
                            <h5>Edit Data Kehamilan Baru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <div class="modal-body" style="padding: 30px;">    
                            
                            <div class="my-3" style="width: 100%; display: flex; justify-content: center;">
                                <h4>Gagal Mendapatkan Data</h4>
                            </div>
                            
                        </div> <!-- end modal body -->
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button id="submitTambahDataKehamilan" type="submit" disabled="disabled" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                        
                    </div> <!-- end modal content -->
                </div> <!-- end modal dialog -->
            </div> <!-- end modal -->
        </form>
    </div>
    
    


    <!-- Modal Hapus Data Kehamilan -->
    <div id="container-hapus-kehamilan">
        <form class="needs-validation" action="proses-hapus-data-kehamilan" method="POST" id="formHapusDataKehamilan" novalidate>
            <div class="modal fade" id="modalHapusDataKehamilan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Konfirmasi Penghapusan Data Kehamilan</h5>
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
                                                <div class="my-3" style="width: 100%; display: flex; justify-content: center;">
                                                    <h4>Gagal Mendapatkan Data</h4>
                                                </div>
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
    </div>
    


<script src="js/dataKehamilan.js"></script>


