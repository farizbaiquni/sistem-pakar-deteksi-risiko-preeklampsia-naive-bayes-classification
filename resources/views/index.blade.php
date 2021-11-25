<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home | Pre-eklampsia</title>

    <link href="css/index.css" rel="stylesheet"/>
</head>

<body>

    @include('partials.navbar_home')


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
        <h1>Selamat Datang</h1>
        <h2>Ke dalam sistem untuk menentukan tingkat risiko pre-eklampsia</h2>
        @auth 
          <a href="/dashboard" class="btn-get-started scrollto">Masuk</a>
        @else
          <a href="/sign-in" class="btn-get-started scrollto">Masuk</a>
        @endauth
      </div> 
    </section><!-- End Hero -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="mb-5 why-us">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-xl-4 d-flex align-items-stretch" style="height: 250px;">
                    <div class="icon-box mt-4 mt-xl-0" style="background-color: #2d6a4f;">
                      <i class="bx bx-receipt"></i>
                      <h4>Pre-Eklampsia</h4>
                      <p>Preeklamsia adalah kondisi peningkatan tekanan darah disertai dengan adanya protein dalam urine. Kondisi ini terjadi setelah usia kehamilan lebih dari 20 minggu.</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch" style="height: 250px;">
                    <div class="icon-box mt-4 mt-xl-0" style="background-color: #2d6a4f;">
                      <i class="bx bx-cube-alt"></i>
                      <h4>Petingnya Deteksi Dini</h4>
                      <p>Preeklamsia harus diberikan penanganan untuk mencegah komplikasi dan mencegahnya berkembang menjadi eklamsia yang dapat mengancam nyawa ibu hamil dan janin.</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch" style="height: 250px;">
                    <div class="icon-box mt-4 mt-xl-0" style="background-color: #2d6a4f;">
                      <i class="bx bx-images"></i>
                      <h4>Jika Mengalami Pre-Eklampsia</h4>
                      <p>Jika didiagnosis mengalami preeklamsia, ibu hamil akan diminta untuk lebih sering melakukan pemeriksaan kehamilan ke dokter, agar kondisinya dan kondisi janinnya dapat terus terpantau.</p>
                    </div>
                  </div>
                </div>
              </div><!-- End .content-->
            </div>
          </div>
  
        </div>
      </section><!-- End Why Us Section -->

    {{-- <div class="container" style="display: none; justify-content: center; margin-top: 70px;">
        <div class="div" style="display: flex; flex-direction: column;">
            <h2 style="margin: auto;">Selamat Datang</h2>
            <h4 style="margin: auto;">Ke dalam sistem pakar untuk deteksi risiko pre-eklampsia pada ibu hamil</h4>
            <div style="margin: auto">
                <img src="/images/ibu_hamil.jpg" style="width: 500px; height: auto;" alt="">
            </div>
        </div>
    </div> --}}

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
