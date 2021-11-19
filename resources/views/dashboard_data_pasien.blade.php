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
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
                
            </div>
            </div>
        </div>
    </div>