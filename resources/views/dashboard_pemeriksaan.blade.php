
<style>
    #riwayatPemeriksaan .collapsible {
      cursor: pointer;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
      background-color: #2d6a4f;
      padding-left: 15px;
      padding-right: 10px;
    }
    
    #riwayatPemeriksaan .active, .collapsible:hover {
      background-color: #40916c;
    }
    
    #riwayatPemeriksaan .collapsible:after {
      content: '\002B';
      color: white;
      font-weight: bold;
      float: right;
      margin-right: 5px;
    }
    
    #riwayatPemeriksaan .collapsible .active:after {
      content: "\2212";
    }
    
    #riwayatPemeriksaan .content_collapsible {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.2s ease-out;
      padding-left: 10px;
      padding-right: 10px;
    }
</style>
<div class="container px-5 py-5">

    <h4 class="mb-3" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Data
        Pemeriksaan
        Pasien</h4>

    <table class="table table-striped table-hover">
        <thead class="thead-dark bg-dark text-white">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama Ibu</th>
                <th scope="col">Terakhir Periksa</th>
                <th scope="col">Usia Kehamilan</th>
                <th scope="col">Nama Suami</th>
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
                        {{ $no }}
                    </th>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        123
                    </td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        {{ $data->nama }}
                    </td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Otto
                    </td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">@mdo
                    </td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        {{ $data->nama_suami }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" style="margin-right: 5px;" href="#" role="button">periksa</a>
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalRiwayatPemeriksaan">riwayat</button>
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </tbody>
    </table>
</div>


<!-- Modal Riwayat Pemeriksaan -->
<form class="needs-validation" action="proses-tambah-data-kehamilan" method="POST" id="formEditDataKehamilan" novalidate>
    <div class="modal fade" id="modalRiwayatPemeriksaan" tabindex="-1" aria-labelledby="modalTambahDataKehamilanLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
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
                    <div id="riwayatPemeriksaan" style="display: flex; flex-direction: column; margin-top : 20px; margin-bottom: 20px; background-color: #ffffff">
                        
                            <fieldset class="p-3" style="border: 2px solid rgb(182, 182, 182); width: 100%;">
                                <legend class=""><h6>Riwayat Pemeriksaan</h6></legend>
                                @csrf

                                <button class="text-white py-1 collapsible" style="width: 100%; border: none; font-size: 15px;" type="button"> 
                                    Pemeriksaan tanggal 12 November 2021
                                </button>
                                <div class="content_collapsible" style="width: 100%; background-color: #d8d8d8;">
                                    <table class="table table-sm table-borderless">
                                        <tbody>
                                            <tr style="font-size: 15px">
                                                <td scope="row" style="min-width: 130px;">Hari, Tanggal</td>
                                                <td style="min-width: 20px;"> : </td>
                                                <td style="width: 100%">Selasa, 12 November 2021</td>
                                            </tr>
                                            <tr style="font-size: 15px">
                                                <td scope="row" style="min-width: 130px;">Tingkat Risiko</td>
                                                <td style="min-width: 20px;"> : </td>
                                                <td style="width: 100%">10 %</td>
                                            </tr>
                                        </tbody>
                                    </table>
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

<script src="js/pemeriksaan.js"></script>