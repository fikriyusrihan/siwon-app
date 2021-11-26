@extends('layout.main')

@section('content')
    <!-- Content -->
    <div id="main-content" class="container">
        <!-- Programs -->
        <div class="menu-section row">
            <div class="description col-lg-6 col-sm-12 ps-4">
                <h3 class="content-header mt-5">{{ $data['title'] }}</h3>
                <p class="content-description">
                    {{ $data['description'] }}
                </p>
            </div>
            <div class="featured-card mt-5">
                <div class="row align-items-end">
                    @foreach ($programs as $program)
                        <div class="col-lg-4 col-12 mb-5">
                            <a href="/programs/{{ $program->slug }}" style="text-decoration: none; color: black;">
                                <div class="category-card text-center">
                                    <h6 class="p-2 w-50 mx-auto border border-5">
                                        {{ $program->name }}
                                    </h6>
                                    <div></div>
                                    <img class="mt-auto"
                                        src="{{ asset('assets/images/program/poster/' . $program->poster) }}" alt=""
                                        width="50%" height="220px" style="background-size: cover" />
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <nav aria-label="pagination" class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">
                        << </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"> >> </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
