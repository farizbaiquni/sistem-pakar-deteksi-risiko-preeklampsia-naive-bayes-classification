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

</head>

<body>

    <div style="display: flex; flex-direction: column;">

        @include('partials.navbar')

        <div style="display: flex;">

            <div>
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark"
                    style="width: 200px; height: 100%; min-height: 100vh;">
                    <ul id="sidebar_list" class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item" style="margin-top: 20px">
                            <a href="#" class="nav-link text-white active" aria-current="page"
                                data-tambah-pasien="tambah">
                                Tambah Pasien
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" data-periksa="periksa">
                                Periksa
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="content_tambah_pasien" style="width: 100%; display: block;">
                @yield('content_tambah_pasien')
            </div>

            <div id="content_periksa" style="width: 100%; display: none;">
                @yield('content_periksa')
            </div>

        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
        document.querySelectorAll(".nav-item a").forEach(list => {
            list.addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                if (current.length > 0) {
                    current[0].className = current[0].className.replace(" active", "");
                }

                this.className += " active"

                if (this.getAttribute('data-tambah-pasien') == "tambah") {
                    document.getElementById("content_periksa").style.display = "none"
                    document.getElementById("content_tambah_pasien").style.display = "block"
                } else {
                    document.getElementById("content_periksa").style.display = "block"
                    document.getElementById("content_tambah_pasien").style.display = "none"
                }
            });
        })
    </script>

</body>

</html>
