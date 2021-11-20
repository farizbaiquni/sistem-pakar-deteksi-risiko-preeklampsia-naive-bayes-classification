<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Form Pemeriksaan</title>

    <style>
        body{
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
    <fieldset id="form" style="border: 2px solid rgb(182, 182, 182); padding: 20px; margin-top: 50px;">
        <legend >
            <h2 style="margin-left: 10px; margin-right: 10px;">Form Pemeriksaan</h2>
        </legend>
        <table style="width: 100%; padding-left: 20px; padding-right: 20px;">
            <tbody>
                <form action="">
                    <tr>
                        <td style="min-width: 210px;">Tekanan darah sistolik</td>
                        <td style="min-width: 20px">:</td>
                        <td style="width: 100%;">
                            <input name="" type="number" style="width: 100%; padding: 5px; border-radius: 3px;">
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 210px;">Tekanan darah diastolik</td>
                        <td style="min-width: 20px">:</td>
                        <td style="width: 100%;">
                            <input name="" type="number" style="width: 100%; padding: 5px; border-radius: 3px;">
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 210px;">Kenaikan berat badan</td>
                        <td style="min-width: 20px">:</td>
                        <td style="width: 100%;">
                            <input name="" type="number" style="width: 100%; padding: 5px; border-radius: 3px;">
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 210px;">Edema</td>
                        <td style="min-width: 20px">:</td>
                        <td style="width: 100%;">
                            <input name="" type="number" style="width: 100%; padding: 5px; border-radius: 3px;">
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 210px;">Proteinuria</td>
                        <td style="min-width: 20px">:</td>
                        <td style="width: 100%;">
                            <input name="" type="number" style="width: 100%; padding: 5px; border-radius: 3px;">
                        </td>
                    </tr>
    
                    <tr>
                        <td colspan="3" style="align-items: flex-end">
                            <div style="width: 100%; display: flex; justify-content: end;">
                                <button type="submit" style="border-radius: 3px; padding: 7px 20px; font-weight: 700; background-color: #d3d3d3; color: black; font-size: 15px; margin-right: 10px;">Batal</button>

                                <button type="submit" style="border-radius: 3px; padding: 7px 20px; font-weight: 700; background-color: #0081a7; color: white; font-size: 15px;">Analisis</button>
                            </div>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
    </fieldset>

  </body>
</html>