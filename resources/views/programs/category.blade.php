@extends('layout.main')

@section('content')
    <!-- Content -->
    <div id="main-content" class="container">
        <!-- Programs -->
        <div class="menu-section row">
            <div class="description col-lg-6 col-sm-12 ps-4">
                <h3 class="content-header mt-5">Program 1 Minggu</h3>
                <p class="content-description">
                    Ikut berbagai program olahraga yang dapat dilakukan di manapun
                    dengan durasi latihan selama satu minggu.
                </p>
            </div>
            <div class="featured-card mt-5">
                <div class="row align-items-end">
                    @foreach ($programs as $program)
                        <div class="col-lg-4 col-12 mb-5">
                            <div class="category-card text-center">
                                <h6 class="p-2 w-50 mx-auto border border-5">
                                    {{ $program->name }}
                                </h6>
                                <div></div>
                                <img class="mt-auto"
                                    src="{{ asset('assets/images/program/poster/' . $program->poster) }}" alt=""
                                    width="50%" height="200px" style="background-size: cover" />
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
