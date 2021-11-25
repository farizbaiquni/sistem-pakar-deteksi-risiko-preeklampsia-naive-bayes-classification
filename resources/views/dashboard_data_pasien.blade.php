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
                            {{ $data->nik }}</td>
                        <td style="max-width: 500px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            {{ $data->nama }}</td>
                        <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            {{ $data->nama_suami }}
                        </td>
                        <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            {{ date_diff(date_create($data->tanggal_lahir), date_create('today'))->y }} tahun</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm button_detail_pasien" data-id-pasien={{ $data->nik }}>detail</button>
                            <button type="button" class="btn btn-info btn-sm button_edit_pasien" data-id-pasien={{ $data->nik }}>edit</button>
                            <button type="button" class="btn btn-danger btn-sm button_hapus_pasien" data-id-pasien={{ $data->nik }}>hapus</button>
                        </td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>


    {{-- ========================================= MODAL =========================================  --}}

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
                                
                                    <div class="my-3" style="width: 100%; display: flex; justify-content: center;">
                                        <h4>Gagal Mendapatkan Data</h4>
                                    </div>

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
    <div id="containerModalEditPasien">
    <form class="needs-validation" action="/dashboard" method="POST" id="formEditPasien" novalidate>
        <div class="modal fade" id="modalEditPasien" tabindex="-1" aria-labelledby="modalEditPasienLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
            <div class="modal-dialog modal-dialog modal-lg modal-dialog-scrollable">
                <div id="modal-content-edit" class="modal-content">
                    
                    <div class="modal-header">
                        <h5>Edit Data Pasien</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body" style="padding: 30px;">   
                        <div class="my-3" style="width: 100%; display: flex; justify-content: center;">
                            <h4>Gagal Mendapatkan Data</h4>
                        </div>
                    </div> {{-- end modal body --}}
                
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit"class="btn btn-primary" disabled="disabled">Simpan Perubahan</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>
    </div>


    <!-- Modal Hapus Data Kehamilan -->
    <div id="containerModalHapusPasien">
        <form class="needs-validation" action="/dashboard" method="GET" novalidate>
            <div class="modal fade" id="modalHapusPasien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Konfirmasi Penghapusan Data Pasien</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="my-3" style="width: 100%; display: flex; justify-content: center;">
                                <h4>Gagal Mendapatkan Data</h4>
                            </div>
                        </div> <!-- end modal body -->
    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button style="submit" class="btn btn-danger" disabled="disabled">Hapus</button>
                        </div>
    
                    </div> <!-- end modal content -->
                </div> <!-- end modal dialog -->
            </div> <!-- end modal -->
        </form>
    </div>
    


    <script src="js/dataPasien.js"></script>

