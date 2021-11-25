<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <title>Hasil Pemeriksaan</title>

    <style>
        body{
            background-color: rgb(240, 240, 240);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif
        }

        #form{
            background-color: white;
            width: 70%;
        }

    </style>

  </head>
  <body>

    @include('partials.navbar_pemeriksaan')


    <fieldset id="form" style="border: 3px solid rgb(223, 223, 223); margin-top: 50px;">
        <legend class="w-auto ml-3 pl-2 pr-2" style="font-weight: 700">
            Hasil Analisis Risiko
        </legend>
        
        <fieldset style="border: 2px solid rgb(182, 182, 182); width: 70%; margin: 20px auto; border-radius: 5px">
            <legend class="w-auto ml-3 pl-2 pr-2" style="font-size: 20px; font-weight: 600;">Pasien</legend>
            <table class="table table-sm table-borderless mx-3">
                <tbody>
                    <div>
                        <tr style="height: 20px;">
                            <td style="min-width: 210px;">Nama</td>
                            <td style="min-width: 20px">:</td>
                            <td style="width: 100%;">{{ $pasien->nama }}</td>
                        </tr>

                        <tr style="height: 20px;">
                            <td style="min-width: 210px;">NIK</td>
                            <td style="min-width: 20px">:</td>
                            <td style="width: 100%;">{{ $pasien->nik }}</td>
                        </tr>

                        <tr style="height: 20px;">
                            <td style="min-width: 210px;">Usia Kehamilan</td>
                            <td style="min-width: 20px">:</td>
                            <td style="width: 100%;">{{ $usia_kehamilan_lengkap }}</td>
                        </tr>
    
                    </div>
                </tbody>
            </table>
        </fieldset>

        <fieldset style="border: 2px solid rgb(182, 182, 182); width: 70%; margin: 0px auto; margin-bottom: 50px; border-radius: 5px; background-color: #e4fbff; padding-bottom: 30px;">
            <legend class="w-auto ml-3 pl-2 pr-2" style="font-size: 20px; font-weight: 600;">Hasil Analisis</legend>
            <table class="table table-borderless table-sm">
                <tbody>

                    <tr style="height: 30px;">
                        <td style="text-align: center; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 19px; padding-top: 20px;">Tingkat Ibu Mengalami Pre-Eklampsia : {{ $hasilKategori }} </td>
                    </tr>

                    <tr style="height: 30px;">
                        <td style="text-align: center; font-weight: 700; font-size: 50px;">
                            {{ round($hasilPersen, 2) . ' %' }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>

        <div style="width: 100%; display: flex; justify-content: end; margin-bottom: 15px;">
            <a href="/dashboard" class="btn btn-primary" style="border-radius: 3px; padding: 7px 20px; font-weight: 700; background-color: #0081a7; color: white; font-size: 15px; margin-right: 30px;">Selesai</a>
        </div>
    </fieldset>

  </body>
</html>