<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <title>Form Pemeriksaan</title>

    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif
        }

        #form{
            width: 70%;
            border: 3px solid rgb(223, 223, 223); 
            margin-top: 50px;
        }

    </style>

  </head>
  <body>

    @include('partials.navbar_pemeriksaan')

    <fieldset id="form">

        <legend class="w-auto ml-3 pl-2 pr-2" style="font-weight: 700">
            Formulir Pemeriksaan
        </legend>

        <form action="/proses-kalkukasi-pre_eklampsia/{{ $nik_pasien }}" method="POST" class="mx-4 my-5">
            @csrf
            <table class="table table-borderless table-sm">
                <tbody>
                    <tr>
                        <td style="min-width: 210px;">Tekanan darah sistolik</td>
                        <td style="min-width: 20px">:</td>
                        <td style="width: 100%;">
                            <div class="input-group">
                                <input name="tekanan_darah_sistolik" class="form-control" type="number" aria-describedby="basic-addon1">
                                <span class="input-group-text" id="basic-addon1">mmhg</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 210px;">Tekanan darah diastolik</td>
                        <td style="min-width: 20px">:</td>
                        <td style="width: 100%;">
                            <div class="input-group">
                                <input name="tekanan_darah_diastolik" class="form-control" type="number" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">mmhg</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 210px;">Kenaikan berat badan</td>
                        <td style="min-width: 20px">:</td>
                        <td style="width: 100%;">
                            <div class="input-group">
                                <input name="kenaikan_berat_badan" class="form-control" type="number" aria-describedby="basic-addon3">
                                <span class="input-group-text" id="basic-addon3">kg</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 210px;">Edema</td>
                        <td style="min-width: 20px">:</td>
                        <td style="width: 100%;">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="edema" id="edema_ya" value="ya">
                                <label class="form-check-label" for="edema_ya">
                                  Ya
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="edema" id="edema_tidak" value="tidak" checked>
                                <label class="form-check-label" for="edema_tidak">
                                  Tidak
                                </label>
                            </div>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 210px;">Proteinuria</td>
                        <td style="min-width: 20px">:</td>
                        <td style="width: 100%;">
                            <select name="proteinuria" class="form-select w-100 p-2" aria-label="Default select example">
                                <option value=0>0</option>
                                <option value=1>+1</option>
                                <option value=2>+2</option>
                                <option value=3>+3</option>
                                <option value=4>+4</option>
                              </select>
                        </td>
                    </tr>
    
                    <tr>
                        <td colspan="3" style="align-items: flex-end;">
                            <div style="width: 100%; display: flex; justify-content: end; padding-top: 20px;">
                                <a href="/dashboard" class="btn btn-outline-dark" style="border-radius: 3px; padding: 7px 20px; font-weight: 700; background-color: #d3d3d3; color: black; font-size: 15px; margin-right: 10px;">Batal</a>

                                <button type="submit" style="border-radius: 3px; padding: 7px 20px; font-weight: 700; background-color: #0081a7; color: white; font-size: 15px;">Analisis</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </fieldset>

  </body>
</html>