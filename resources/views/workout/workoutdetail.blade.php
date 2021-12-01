@extends('layout.main')

@section('content')

    <!-- Content Baris 1-->
    <div id="main-content" class="container mb-4">
        <p class="category-card text-center mt-5">
            <img src="/assets/images/workout/poster/{{ $workouts->poster }}" alt="" width="60%" class="img1" />
        </p>
        <div class="category-card mt-5">
            <label for="minutes">Menit: </label>
            <input type="number" name="minutes" id="minutes">

            <label for="seconds">Detik: </label>
            <input type="number" name="seconds" id="seconds">
        </div>
        <!--Timer-->
        <div id="chronoExample" class="category-card d-flex align-items-center mt-3">
            <div id="showtm" class="fs-1 fw-bold">00:00:00</div><br>
            <div class="mx-3">
                <button class="btn btn-success mx-2" onclick="startChr()">Start</button>
                <button class="btn btn-danger mx-2" onclick="stopChr()">Stop</button>
                <button class="btn btn-warning mx-2" onclick="resetChr()">Reset</button>
            </div>
        </div>

        <!--Download-->
        <div class="d-flex align-items-center justify-content-end">
            <a href="{{ url('/download/' . $workouts->id) }}">
                <img src="/assets/images/workout/detail_page/icon_download.png" alt="" width="35%" class="img2" />
            </a>

        </div>
    </div>
@endsection
