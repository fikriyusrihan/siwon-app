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
                <a href="/programs/download/{{ $program->slug }}">
                    <img src="{{ asset('assets/images/download.png') }}" alt="" width="40%" />
                </a>
            </div>
        </div>

        {{-- Checklist --}}
        <div class="row mt-5 px-5">
            <h6 class="text-center">Checklists</h6>
            @if ($program->category->id == 1)
                <div class="menu-section row justify-content-center mt-5">
                    <?php
                    for ($i = 1; $i <= 7; $i += 1) {
                        echo '
                                <div class="col-lg-1 mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option-beginner-'. $i . '">
                                        <label class="form-check-label" for="inlineCheckbox1">Day' . $i . '</label>
                                    </div>
                                </div>
                                ';
                    }
                    ?>
            @elseif ($program->category->id == 2)
                    <div class="menu-section row mt-3">
                        <?php
                        for ($i = 1; $i <= 30; $i += 1) {
                            echo '
                                <div class="col-lg-2 mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option-intermediate-'. $i . '">
                                        <label class="form-check-label" for="inlineCheckbox1">Day ' . $i . '</label>
                                    </div>
                                </div>
                                ';
                        }
                        ?>
                    </div>
            @else
                    <div class="menu-section row mt-3">
                        {{-- Bulan 1 --}}
                        <h4 class="mt-5">Bulan 1</h4>
                        <?php
                        for ($i = 1; $i <= 30; $i += 1) {
                            echo '
                                <div class="col-lg-2 mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option-advanced-'. $i . '">
                                        <label class="form-check-label" for="inlineCheckbox1">Day ' . $i . '</label>
                                    </div>
                                </div>
                                ';
                        }
                        ?>
                        {{-- Bulan 2 --}}
                        <h4 class="mt-5">Bulan 2</h4>
                        <?php
                        for ($i = 31; $i <= 60; $i += 1) {
                            echo '
                                <div class="col-lg-2 mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option-advanced-'. $i . '">
                                        <label class="form-check-label" for="inlineCheckbox1">Day ' . $i-30 . '</label>
                                    </div>
                                </div>
                                ';
                        }
                        ?>
                        {{-- Bulan 3 --}}
                        <h4 class="mt-5">Bulan 3</h4>
                        <?php
                        for ($i = 61; $i <= 90; $i += 1) {
                            echo '
                                <div class="col-lg-2 mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option-advanced-'. $i . '">
                                        <label class="form-check-label" for="inlineCheckbox1">Day ' . $i-60 . '</label>
                                    </div>
                                </div>
                                ';
                        }
                        ?>
                    </div>
            @endif
    </div>
    </div>
    </div>
@endsection
