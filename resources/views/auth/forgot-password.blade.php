@extends('layout.main')

@section('content')
    <!-- Jumbotron -->
    <div class="row mt-5">
        <div class="jumbotron py-5">
            <div class="container py-5">
                <div class="col-lg-6 col-12">
                    <div class="p-4 p-lg-5 bg-white rounded text-md-start text-sm-center">
                        <h1 class="header">Lupa Password</h1>
                        <p>
                            Silakan masukkan email yang telah terdaftar untuk mereset password.
                        </p>
                        <form action="" method="POST">
                            <div class="mb-3">
                                <input type="email" class="form-control" id="field-name" placeholder="Email" />
                            </div>
                            <div class="mb-3">
                                <a href="./login"><small>Sudah memiliki akun? Login</small></a><br>
                                <a href="./register"><small>Buat akun baru</small></a>
                            </div>
                            <button class="btn btn-danger mt-3" type="submit">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
