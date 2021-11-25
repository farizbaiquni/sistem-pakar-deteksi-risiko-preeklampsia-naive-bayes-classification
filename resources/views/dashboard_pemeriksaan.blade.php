
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
                        {{ $data->nik }}
                    </td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        {{ $data->nama }}
                    </td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        @php
                            try{
                                $tgl_periksa = date('d F Y', strtotime($pemeriksaan->firstWhere('nik_ibu', $data->nik)->tanggal));
                            } catch(Exception $e) {
                                $tgl_periksa = '-';
                            }
                        @endphp 
                        {{ $tgl_periksa }}
                    </td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        @if ( in_array($data->nik, $nikIbuHamilArray) )
                            {{ date_diff(date_create($nikIbuHamilLatest->firstWhere('nik_ibu', $data->nik)->tanggal_awal_kehamilan), new DateTime('now'))->format('%m Bulan %d Hari') }}
                        @else
                            -
                        @endif
                    </td>
                    <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        {{ $data->nama_suami }}</td>
                    <td>
                        @if (in_array($data->nik, $nikIbuHamilArray))
                            <a class="btn btn-primary btn-sm" style="margin-right: 5px;" href="/form-pemeriksaan/{{ $data->nik }}" >periksa</a>
                        @else
                            <a class="btn btn-primary btn-sm disabled" style="margin-right: 5px;" href="/form-pemeriksaan/{{ $data->nik }}">periksa</a>
                        @endif
                        
                        <button type="button" class="btn btn-warning btn-sm btn-riwayat-pemeriksaan" data-id-pasien={{ $data->nik }}>riwayat</button>
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
<div id="container-riwayat-pemeriksaan">
    <form class="needs-validation" action="proses-tambah-data-kehamilan" method="POST" id="formEditDataKehamilan" novalidate>
        <div class="modal fade" id="modalRiwayatPemeriksaan" tabindex="-1" aria-labelledby="modalTambahDataKehamilanLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5)">
            <div class="modal-dialog modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h5>Riwayat Pemeriksaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body" style="padding: 30px;">    
                        <div class="my-3" style="width: 100%; display: flex; justify-content: center;">
                            <h4>Gagal Mendapatkan Data</h4>
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
</div>

<script src="js/pemeriksaan.js"></script>