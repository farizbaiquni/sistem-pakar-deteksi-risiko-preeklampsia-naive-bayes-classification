<nav class="navbar navbar-expand-lg navbar-light"
    style="background-color: #b7e4c7; padding-left: 10px; padding-right: 10px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/" style="font-weight: bolder">Pre-eklampsia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form class="d-flex">
                <a class="btn btn-success" href="/daftar" role="button" style="margin-right: 20px;">Daftar</a>
                <a class="btn btn-success" href="/login" role="button">Masuk</a>
            </form>
        </div>
    </div>
</nav>





{{-- <!doctype html>
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

            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 230px; height: 100vh;">
                <ul id="sidebar_list" class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item" style="margin-top: 20px">
                        <a href="#" class="nav-link text-white active" aria-current="page">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                            Orders
                        </a>
                    </li>
                </ul>
            </div>

            @yield('content')
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
        document.querySelectorAll(".nav-item a").forEach(list => {
            console.log(list.className)
            list.addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                if (current.length > 0) {
                    current[0].className = current[0].className.replace(" active", "");
                }
                this.className += " active"
            });
        })
    </script>

</body>

</html> --}}
