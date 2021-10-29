@extends('layouts.dashboard_layout')

{{-- ============= TAMPILAN TAMBAH PASIEN ============= --}}
@section('content_tambah_pasien')
    <div class="container" style="display: flex; justify-content: center; background-color: rgb(209, 209, 209);">

        <form
            style="width: 80%; padding: 30px; background-color: rgb(255, 255, 255); margin-top: 20px; margin-bottom: 30px;">
            <h3 style="margin-bottom: 25px;">TAMBAH DATA PASIEN BARU</h3>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Ibu</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                <input type="datetime" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tanggal Pertama Kehamilan</label>
                <input type="datetime" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Suami</label>
                <input type="datetime" class="form-control" id="exampleInputPassword1">
            </div>
            <p style="font-weight: bolder; margin-top: 35px; font-size: 18px;">Alamat</p>
            <hr style="margin-top: -5px">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kabupaten / Kota</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kelurahan / Desa</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>

@endsection

{{-- ============= TAMPILAN PERIKSA ============= --}}
@section('content_periksa')

    <div class="container" style="padding: 25px;">
        <table class="table table-striped table-hover">
            <thead class="thead-dark bg-dark text-white">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Ibu</th>
                    <th scope="col">Terakhir Periksa</th>
                    <th scope="col">Usia Kehamilan</th>
                    <th scope="col">Nama Suami</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
