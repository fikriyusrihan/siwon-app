@extends('layout.main')

@section('content')
    <!-- Content -->
    <div id="main-content" class="container">

        <!--gambar program-->
        <div class="menu-section row">
            <div class="featured-card">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-12">
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
            <div class="description col-lg-6 col-sm-12 mt-5 mx-auto">
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
    </div>
@endsection
