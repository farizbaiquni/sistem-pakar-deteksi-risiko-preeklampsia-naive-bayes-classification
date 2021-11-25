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
</head>

<style>
    .error {
        background-color: rgb(255, 206, 200); 
        color: rgb(77, 77, 77); 
        padding: 5px 10px; 
        margin: 0 1px;
    }
</style>

<body style="display: flex; flex-direction: column;">

    @include('partials.navbar_home')

    <div class="container" style="display: flex; justify-content: center; align-items: center; margin-top: 70px; margin-left: 10px; width: 100%;">

        <img src="/images/ibu_hamil.jpg" style="width: 450px; height: 400px; margin-right: 40px" alt="">

        <div style="width: 450px; background: #b7e4c7;">
            <form action="sign-up-process" method="POST" style="width: 98%; padding: 15px;">
                @csrf
                <h3 style="text-align: center; margin-top: 20px;">BUAT AKUN</h3>
                <div class="mb-3">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" value="{{ old('username') }}" name="username" class="form-control" id="inputUsername" placeholder="">
                    @error('username')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="inputEmail" placeholder="">
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
                <div class="mb-3">
                    <label for="inputConfirmPassword" class="form-label">Masukan Ulang Password</label>
                    <input type="password"   name="password_confirmation" class="form-control" id="inputConfirmPassword" placeholder="">
                    @error('password_confirmation')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success mb-3"
                    style="width: 100%; font-weight: bold">Daftar</button>

                <span style="display: flex; justify-content: center;">
                    Sudah punya akun ? <a href="/login"> Masuk disini</a>
                </span>
            </form>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
