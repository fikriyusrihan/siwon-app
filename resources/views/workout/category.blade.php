@extends('layout.main')
{{--
    Halaman yang menampilkan daftar workout yang ada sesuai dengan kategorinya. Penampilan poster dengan memanggil dari database.

    Kemudian untuk pagination menggunakan {{ $workouts->links() }} untuk menampilkan pilihan paginate
--}}
@section('content')
    <!-- Content -->
    <div id="main-content" class="container">
        <!-- Workouts -->
        <div class="menu-section row">
            <div class="description col-lg-6 col-sm-12 ps-4">
                <h3 class="content-header mt-5">{{ $data['title'] }}</h3>
                <p class="content-description">
                    {{ $data['description'] }}
                </p>
            </div>
            <div class="featured-card mt-5">
                <div class="row align-items-end">
                    @foreach ($workouts as $workout)
                        <div class="col-lg-4 col-12 mb-5">
                            <a href="/workout/{{ $workout->slug }}" style="text-decoration: none; color: black;">
                                <div class="category-card text-center">
                                    <h6 class="p-2 w-50 mx-auto border border-5">
                                        {{ $workout->name }}
                                    </h6>
                                    <div></div>
                                    <img class="mt-auto"
                                        src="{{ asset('assets/images/workout/cover/' . $workout->photo) }}" alt=""
                                        width="50%" height="220px" style="background-size: cover" />
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Pagination --}}
        <div class="mt-5 d-flex justify-content-center">
            {{ $workouts->links() }}
        </div>
    </div>
@endsection
