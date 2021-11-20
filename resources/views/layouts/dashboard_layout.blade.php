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

    <style>

        #container_nama_app{
            display: flex; 
            justify-content: center;
            align-items: center;
            height: 54px;
            width: 100%;
            background-color: #1a759f;
        }

        #nama_app{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 22px;
        }

    </style>

</head>

<body>

        <div style="display: flex;">

            <div>
                <div class="d-flex flex-column flex-shrink-0 text-white bg-dark"
                    style="width: 200px; height: 100%; min-height: 100vh;">
                    
                    <div id="container_nama_app">
                        <h5 id="nama_app" style="font-weight: bolder">Pre-eklampsia</h5>
                    </div>

                    <ul id="sidebar_list" class="nav nav-pills flex-column mb-auto p-3 ">
                        
                        <li class="nav-item" style="margin-top: 20px">
                            <a href="#" class="nav-link text-white active" aria-current="page" data-topik="tambah">
                                Tambah Pasien
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" data-topik="pasien">
                                Data Pasien
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" data-topik="kehamilan">
                                Data Kehamilan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" data-topik="pemeriksaan">
                                Pemeriksaan
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; width: 100%; background-color: white;">

                @include('partials.navbar')

                <div id="content_tambah_pasien" style="width: 100%; display: block;">
                    @include('dashboard_tambah_pasien')
                </div>

                <div id="content_pasien" style="width: 100%; display: none;">
                    @include('dashboard_data_pasien')
                </div>

                <div id="content_kehamilan" style="width: 100%; display: none;">
                    @include('dashboard_data_kehamilan')
                </div>

                <div id="content_pemeriksaan" style="width: 100%; display: none;">
                    @include('dashboard_pemeriksaan')
                </div>

            </div>


        </div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function(){
            document.querySelectorAll(".nav-item a").forEach(list => {
                list.addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    if (current.length > 0) {
                        current[0].className = current[0].className.replace(" active", "");
                    }
    
                    this.className += " active"
    
                    if (this.getAttribute('data-topik') == "tambah") {
                        document.getElementById("content_tambah_pasien").style.display = "block"
                        document.getElementById("content_pasien").style.display = "none"
                        document.getElementById("content_kehamilan").style.display = "none"
                        document.getElementById("content_pemeriksaan").style.display = "none"
                    } else if (this.getAttribute('data-topik') == "pasien") {
                        document.getElementById("content_tambah_pasien").style.display = "none"
                        document.getElementById("content_pasien").style.display = "block"
                        document.getElementById("content_kehamilan").style.display = "none"
                        document.getElementById("content_pemeriksaan").style.display = "none"
                    }  else if (this.getAttribute('data-topik') == "kehamilan") {
                        document.getElementById("content_tambah_pasien").style.display = "none"
                        document.getElementById("content_pasien").style.display = "none"
                        document.getElementById("content_kehamilan").style.display = "block"
                        document.getElementById("content_pemeriksaan").style.display = "none"
                    }  else {
                        document.getElementById("content_tambah_pasien").style.display = "none"
                        document.getElementById("content_pasien").style.display = "none"
                        document.getElementById("content_kehamilan").style.display = "none"
                        document.getElementById("content_pemeriksaan").style.display = "block"
                    }
                });
            })
        })
    </script>

</body>

</html>
