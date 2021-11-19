
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
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditProfil">riwayat</button>
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </tbody>
    </table>
</div>
