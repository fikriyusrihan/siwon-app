@extends('layout.main')

@section('content')
    <!-- Jumbotron -->
    <div class="row mt-5">
        <div class="jumbotron py-5">
            <div class="container py-5">
                <div class="col-lg-6 col-12">
                    <div class="p-4 p-lg-5 bg-white rounded text-md-start text-sm-center">
                        <h1 class="header">Selamat Datang</h1>
                        <p>
                            Mulai gaya hidup sehat kamu dengan berbagai informasi program
                            olahraga, workout, mealplan, hingga resep makanan sehat dari
                            website SiWON.
                        </p>
                        <a class="btn btn-danger" href="#main-content">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div id="main-content" class="container">
        <!-- Programs -->
        <div class="menu-section row">
            <div class="description text-center col-lg-6 col-sm-12 mx-auto">
                <h3 class="content-header">Programs</h3>
                <p class="content-description">
                    Program olahraga ini membantumu berolahraga secara efektif
                    berdasarkan panduan dari kami
                </p>
            </div>
            <div class="featured-card mt-4">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="programs-card p-5 mb-3 rounded"
                            style="background-image: url('assets/images/programs/programs-1.png');">
                            <div class="layer p-5 rounded">
                                <p class="mb-1">Programs</p>
                                <h4 class="fw-bold">Daily Routine Excercise</h4>
                            </div>
                        </div>
                        <div class="programs-card py-5 rounded"
                            style="background-image: url('assets/images/programs/programs-2.png');">
                            <div class="layer p-5 rounded">
                                <p class="mb-1">Programs</p>
                                <h4 class="fw-bold">Intense Fat Burning</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="programs-card p-5 mb-3 rounded"
                            style="background-image: url('assets/images/programs/programs-3.png');">
                            <div class="layer p-5 rounded">
                                <p class="mb-1">Programs</p>
                                <h4 class="fw-bold">Beginner Workout Excercise</h4>
                            </div>
                        </div>
                        <div class="programs-card p-5 rounded"
                            style="background-image: url('assets/images/programs/programs-4.png');">
                            <div class="layer p-5 rounded">
                                <p class="mb-1">Programs</p>
                                <h4 class="fw-bold">7 Days of Cardio</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Workout -->
        <div class="menu-section row">
            <div class="description text-center col-lg-6 col-sm-12 mx-auto">
                <h3 class="content-header">Workout</h3>
                <p class="content-description">
                    Aktivitas olahraga yang dilakukan untuk meningkatkan dan memelihara
                    kebugaran tubuh
                </p>
            </div>
            <div class="featured-card mt-4">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="programs-card p-5 mb-3 rounded"
                            style="background-image: url('assets/images/workout/workout-1.png');">
                            <div class="layer p-5 rounded">
                                <p class="mb-1">Workout</p>
                                <h4 class="fw-bold">Fat Burning Workout</h4>
                            </div>
                        </div>
                        <div class="programs-card py-5 rounded"
                            style="background-image: url('assets/images/workout/workout-2.png');">
                            <div class="layer p-5 rounded">
                                <p class="mb-1">Workout</p>
                                <h4 class="fw-bold">Simple Workout for Arm</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="programs-card p-5 mb-3 rounded"
                            style="background-image: url('assets/images/workout/workout-3.png');">
                            <div class="layer p-5 rounded">
                                <p class="mb-1">Workout</p>
                                <h4 class="fw-bold">9 Minutes Workout</h4>
                            </div>
                        </div>
                        <div class="programs-card p-5 rounded"
                            style="background-image: url('assets/images/workout/workout-4.png');">
                            <div class="layer p-5 rounded">
                                <p class="mb-1">Workout</p>
                                <h4 class="fw-bold">Intense Workout for Thighs and Hips</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Healthy Foods -->
        <div class="menu-section row">
            <div class="description text-center col-lg-6 col-sm-12 mx-auto">
                <h3 class="content-header">Healthy Foods</h3>
                <p class="content-description">
                    Kumpulan berbagai resep makanan sehat dan meal plan
                </p>
            </div>
            <div class="featured-card mt-4">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="programs-card p-5 mb-3 rounded"
                            style="background-image: url('assets/images/healthy_foods/foods-1.png');">
                            <div class="layer p-5 rounded">
                                <p class="mb-1">Healthy Foods</p>
                                <h4 class="fw-bold">Salmon Steak</h4>
                            </div>
                        </div>
                        <div class="programs-card py-5 rounded"
                            style="background-image: url('assets/images/healthy_foods/foods-2.png');">
                            <div class="layer p-5 rounded">
                                <p class="mb-1">Healthy Foods</p>
                                <h4 class="fw-bold">Heavenly Beans</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="programs-card p-5 mb-3 rounded"
                            style="background-image: url('assets/images/healthy_foods/foods-3.png');">
                            <div class="layer p-5 rounded">
                                <p class="mb-1">Healthy Foods</p>
                                <h4 class="fw-bold">Avocado Toast</h4>
                            </div>
                        </div>
                        <div class="programs-card p-5 rounded"
                            style="background-image: url('assets/images/healthy_foods/foods-4.png');">
                            <div class="layer p-5 rounded">
                                <p class="mb-1">Healthy Foods</p>
                                <h4 class="fw-bold">Berries Smoothie</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Saran -->
        <div class="menu-section row">
            <div class="col-lg-4 col-sm-12 mb-3">
                <h3 class="content-header text-center text-md-start">Saran</h3>
                <p class="text-center text-md-start">
                    Masukan dan saran anda akan sangat membantu kami untuk mengembangkan
                    SiWON menjadi lebih baik
                </p>
                @if (session()->has('home'))
                    <div class="alert alert-success" role="alert">
                        {{ session('home') }}
                    </div>
                @endif
            </div>
            <div class="col-lg-6 col-sm-12 mb-3 ms-auto">
                <form action="/" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input name="name" type="name" class="form-control" id="name" aria-describedby="name"
                            placeholder="Nama" />
                        @error('name')
                            <div class="small text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="email"
                            placeholder="Email" />
                        @error('email')
                            <div class="small text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" id="pesan" rows="3"
                            placeholder="Kritik dan Saran"></textarea>
                        @error('message')
                            <div class="small text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        {!! htmlFormSnippet() !!}
                        @error('g-recaptcha-response')
                            <div class="small text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-danger" type="submit">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection
