<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Hasil Pemeriksaan</title>

    <style>
        body{
            background-color: rgb(240, 240, 240);
            display: flex;
            justify-content: center;
            font-family: Arial, Helvetica, sans-serif
        }

        #form{
            background-color: white;
            width: 70%;
        }

        #form tr{
            height: 50px;
        }

        #form tr td input {
            border: 2px solid #c2c2c2
        }
    </style>

  </head>
  <body>
    <fieldset id="form" style="border: 3px solid rgb(223, 223, 223); padding: 0px 20px; margin-top: 50px; border-radius: 5px;">
        <legend >
            <h2 style="margin-left: 10px; margin-right: 10px;">Hasil Analisis Risiko</h2>
        </legend>
        
        <fieldset style="border: 2px solid rgb(182, 182, 182); width: 70%; margin: 0px auto; margin-bottom: 20px; border-radius: 5px">
            <legend><h3 style="margin-left: 10px; margin-right: 10px;">Pasien</h3></legend>
            <table style="width: 100%; padding-left: 20px; padding-right: 20px;">
                <tbody>
                    <div>
                        <tr style="height: 20px;">
                            <td style="min-width: 210px;">Nama</td>
                            <td style="min-width: 20px">:</td>
                            <td style="width: 100%;">Random name</td>
                        </tr>

                        <tr style="height: 20px;">
                            <td style="min-width: 210px;">NIK</td>
                            <td style="min-width: 20px">:</td>
                            <td style="width: 100%;">Random name</td>
                        </tr>

                        <tr style="height: 20px;">
                            <td style="min-width: 210px;">Usia Kehamilan</td>
                            <td style="min-width: 20px">:</td>
                            <td style="width: 100%;">4 bulan</td>
                        </tr>
    
                    </div>
                </tbody>
            </table>
        </fieldset>

        <fieldset style="border: 2px solid rgb(182, 182, 182); width: 70%; margin: 0px auto; margin-bottom: 50px; border-radius: 5px; background-color: #e4fbff; padding-bottom: 30px;">
            <legend><h3 style="margin-left: 10px; margin-right: 10px;">Hasil</h3></legend>
            <table>
                <tbody>
                    <tr style="height: 0px;">
                        <td style="min-width: 210px;"></td>
                        <td style="min-width: 20px"></td>
                        <td style="width: 100%;"></td>
                    </tr>

                    <tr style="height: 30px;">
                        <td colspan="3" style="text-align: center; font-weight: 600">Tingkat risiko pre-eklampsia</td>
                    </tr>
    
                    <tr style="height: 30px;">
                        <td colspan="3" style="text-align: center; font-weight: 700; font-size: 50px;">
                            30%
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>

        <div style="width: 100%; display: flex; justify-content: end; margin-bottom: 15px;">
            <button type="submit" style="border-radius: 3px; padding: 7px 20px; font-weight: 700; background-color: #0081a7; color: white; font-size: 15px; margin-right: 30px;">Selesai</button>
        </div>
    </fieldset>

  </body>
</html>