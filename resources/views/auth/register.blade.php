@extends('layout.main')

@section('content')
    <!-- Jumbotron -->
    <div class="row mt-5">
        <div class="jumbotron py-5">
            <div class="container py-5">
                <div class="col-lg-6 col-12">
                    <div class="p-4 p-lg-5 bg-white rounded text-md-start text-sm-center">
                        <h1 class="header">Buat Akun Baru</h1>
                        <p>
                            Buat akun untuk menyimpan progress program yang kamu ikuti.
                        </p>
                        <form action="" method="POST">
                            <div class="mb-3">
                                <input type="email" class="form-control" id="field-email" placeholder="Email" />
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="field-name" placeholder="Nama" />
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="field-password" placeholder="Password" />
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="field-password-confirm"
                                    placeholder="Konfirmasi Password" />
                            </div>
                            <div class="g-recaptcha mb-3" data-sitekey="6LfN4BMdAAAAAEJCxdfxNjYPsFPad0nfnq7ZM6qg"></div>
                            <div class="mb-3">
                                <a href="./login"><small>Sudah memiliki akun? Login</small></a><br>
                                <a href="./forgot-password"><small>Lupa password?</small></a>
                            </div>
                            <button class="btn btn-danger mt-3" type="submit">Buat Akun</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection