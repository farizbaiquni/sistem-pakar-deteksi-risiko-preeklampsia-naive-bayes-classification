<div class="container" style="display: flex; flex-direction: column; align-items: center; justify-content: center; background-color: rgb(219, 218, 218); width: 100%;">

    {{-- <div style="width: 80%; padding: 30px; background-color: rgb(255, 255, 255); margin-top: 20px; margin-bottom: 30px; border-radius: 10px;">
        <h5 style="text-align: center">Gagal Menambahkan Data Pasien Baru</h5>
    </div> --}}

    <form action="tambah-pasien/{{ $user->id }}" method="POST"
        style="width: 80%; padding: 30px; background-color: rgb(255, 255, 255); margin-top: 20px; margin-bottom: 30px;">
        
        @csrf
        
        <h5 class="mb-4" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">FORMULIR UNTUK MENAMBAHKAN DATA PASIEN BARU</h5>

        <fieldset class="p-3" style="border: 2px solid rgb(197, 197, 197)">

            <div class="mb-4">
                <label for="inputNIK" class="form-label">No Induk Kependudukan (NIK)</label>
                <input type="number" name="nik" class="form-control" id="inputNIK" aria-describedby="emailHelp">
                @error('nik')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="inputNama" class="form-label">Nama Ibu</label>
                <input type="text" name="nama" class="form-control" id="inputNama" aria-describedby="emailHelp">
                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="inputTanggalPertamaKehamilan" class="form-label">Tempat lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" id="inputTanggalPertamaKehamilan" placeholder="kabupaten/kota">
                @error('tempat_lahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="inputTanggalLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="inputTanggalLahir">
                @error('tanggal_lahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="inputTinggiBadan" class="form-label">Tinggi Badan</label>
                <input type="number" name="tinggi_badan" class="form-control" id="inputTinggiBadan" placeholder="satuan centimeter (cm)">
                @error('tinggi_badan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="inputNamaSuami" class="form-label">Nama Suami</label>
                <input type="datetime" name="nama_suami" class="form-control" id="inputNamaSuami">
                @error('nama_suami')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </fieldset>
    

        <p style="font-weight: 600; margin-top: 35px; font-size: 18px; margin-bottom: 3px;">Alamat</p>
        <fieldset class="p-3" style="border: 2px solid rgb(197, 197, 197)">
            <div class="mb-3">
                <label for="inputProvinsi" class="form-label">Provinsi</label>
                <input type="text" name="provinsi" class="form-control" id="inputProvinsi">
                @error('provinsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputKabupatenKota" class="form-label">Kabupaten / Kota</label>
                <input type="text" name="kabupaten_kota" class="form-control" id="inputKabupatenKota">
                @error('kabupaten_kota')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputKecamatan" class="form-label">Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control" id="inputKecamatan">
                @error('kecamatan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="inputKelurahanDesa" class="form-label">Kelurahan / Desa</label>
                <input type="text" name="kelurahan_desa" class="form-control" id="inputKelurahanDesa">
                @error('kelurahan_desa')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">RT</span>
                <input type="number" name="rt" class="form-control" aria-label="RT">
                <span class="input-group-text">RW</span>
                <input type="number" name="rw" class="form-control" aria-label="RW">
            </div>

            @error('rt')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('rw')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </fieldset>

        <div style="width: 100%; display: flex; justify-content: end; margin-top: 20px;">
            <button type="submit" class="btn btn-primary bg-success">Tambah</button>
        </div>
    </form>
</div>
