@extends('dashboard.layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Workout</h1>
        <p class="mb-4">Menambahkan data workout baru.</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Workout</h6>
            </div>
            <div class="card-body px-lg-5">
                <form action="/dashboard/workouts" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0">Judul Workout</p>
                            <p class="small text-danger mb-2">*required</p>
                        </div>
                        <div class="col-md-9 col-sm-12 px-0">
                            <input class="form-control form-control-user" type="text" id="name" name="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="small text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0">Slug</p>
                            <p class="small text-danger mb-2">*autofill</p>
                        </div>
                        <div class="col-md-9 col-sm-12 px-0">
                            <input class="form-control form-control-user" type="text" id="slug" name="slug"
                                value="{{ old('slug') }}">
                            @error('slug')
                                <div class="small text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0">Kategori</p>
                            <p class="small text-danger mb-2">*required</p>
                        </div>
                        <div class="col-md-9 col-sm-12 px-0">
                            <select class="form-control" id="category" name="category">
                                <option value="" disabled selected>-- Pilih Kategori --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if (old('category') == $category->id) selected @endif>{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="small text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0">Upload Foto Cover</p>
                            <p class="small text-danger mb-2">Ekstensi file .png, .jpg</p>
                        </div>
                        <div class="col-md-9 col-sm-12 custom-file">
                            <input class="custom-file-input" type="file" id="file_cover" name="file_cover"
                                accept=".png,.jpg">
                            <label class="custom-file-label" for="file_cover">Pilih file yang akan diupload</label>
                            @error('file_cover')
                                <div class="small text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0">Upload Foto Poster</p>
                            <p class="small text-danger mb-2">Ekstensi file .png, .jpg</p>
                        </div>
                        <div class="col-md-9 col-sm-12 custom-file">
                            <input class="custom-file-input" type="file" id="file_poster" name="file_poster"
                                accept=".png,.jpg">
                            <label class="custom-file-label" for="file_poster">Pilih file yang akan diupload</label>
                            @error('file_poster')
                                <div class="small text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection


@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        // Generate slug
        function slugify(string) {
            return string
                .toString()
                .trim()
                .toLowerCase()
                .replace(/\s+/g, "-")
                .replace(/[^\w\-]+/g, "")
                .replace(/\-\-+/g, "-")
                .replace(/^-+/, "")
                .replace(/-+$/, "");
        }

        // Print name file in cover form
        $('#file_cover').on('change', function() {
            //get the file name
            var fileName = $(this).val().replace('C:\\fakepath\\', " ");
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })

        // Print name file in poster form
        $('#file_poster').on('change', function() {
            //get the file name
            var fileName = $(this).val().replace('C:\\fakepath\\', " ");
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })

        // Mengisi file
        $('#name').keyup(function() {
            let title = $(this).val();
            $('#slug').val(slugify(title));
        });
    </script>
@endsection
