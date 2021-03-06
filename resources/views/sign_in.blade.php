<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar</title>

    
    <style>
        .error {
            background-color: rgb(255, 206, 200); 
            color: rgb(77, 77, 77); 
            padding: 5px 10px; 
            margin: 0 1px;
        }
    </style>
</head>

<body style="display: flex; flex-direction: column;">

    @include('partials.navbar_home')

    <div class="container" style="width: 100%; display: flex; justify-content: center; align-items: center; margin: 0 auto; margin-top: 70px;">

        <img src="/images/ibu_hamil.jpg" style="width: 450px; height: 400px; margin-right: 20px" alt="">

        <div style="width: 400px; background: #b7e4c7;">
            <form action="sign-in-process" method="POST" style="width: 98%; padding: 15px;">
                <h3 style="text-align: center; margin-top: 15px;">Masuk</h3>

                @csrf

                @error('error')
                    <div class="error">{{ $message }}</div>
                @enderror
                
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" value="{{ old('email') }}">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="">
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success mb-3" style="width: 100%; font-weight: bold">Login</button>

            </form>

        </div>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
