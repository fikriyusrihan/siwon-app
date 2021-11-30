@extends('layout.main')

@section('content')
    <!-- Content -->
    <div id="main-content" class="container">

        <!--gambar program-->
        <div class="menu-section row">
            <div class="featured-card">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12 px-5">
                        <div class="category-card mt-5">
                            <img src="{{ asset('assets/images/program/poster/' . $program->poster) }}" alt=""
                                width="100%" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- keterangan program -->
        <div class="menu-section row mt-5">
            <div class="description col-lg-8 col-sm-12 mt-5 mx-auto ps-5">
                <p class="content-description">
                    {{ $program->description }}
                </p>
            </div>
            <div class="col-lg-4 col-12 my-auto">
                <center>
                    <img src="{{ asset('assets/images/download.png') }}" alt="" width="40%" />
                </center>
            </div>
        </div>

        {{-- Checklist --}}
        <div class="row mt-5 px-5">
            <h6 class="text-center">Checklists</h6>
                @if ($program->category->id == 1)
                    <p>hello</p>
                @elseif ($program->category->id == 2)
                    <p>hi</p>
                @else
                    <p>gatau</p>
                @endif
        </div>
    </div>
@endsection
