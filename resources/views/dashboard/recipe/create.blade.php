@extends('dashboard.layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Resep Makanan</h1>
        <p class="mb-4">Menampilkan daftar resep makanan yang telah diterbitkan.</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Resep Makanan</h6>
            </div>
            <div class="card-body px-lg-5">
                <form action="dashboard/foodrecipes/store" method="post">
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0">Judul Resep Makanan</p>
                            <p class="small text-danger mb-2">*required</p>
                        </div>
                        <div class="col-md-9 col-sm-12 px-0">
                            <input class="form-control form-control-user" type="text" id="name" name="name" value="">
                            <small class="text-danger my-0"></small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0">Slug</p>
                            <p class="small text-danger mb-2">*autofill</p>
                        </div>
                        <div class="col-md-9 col-sm-12 px-0">
                            <input class="form-control form-control-user" type="text" id="name" name="name" value="" readonly>
                            <small class="text-danger my-0"></small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0">Upload Foto Cover</p>
                            <p class="small text-danger mb-2">Ekstensi file .png</p>
                        </div>
                        <div class="col-md-9 col-sm-12 custom-file">
                            <input class="custom-file-input" type="file" id="file-cover" name="file-cover" accept=".png">
                            <label class="custom-file-label" for="file-cover">Pilih file yang akan diupload</label>
                            <small class="text-danger"></small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0">Upload Foto Poster</p>
                            <p class="small text-danger mb-2">Ekstensi file .png</p>
                        </div>
                        <div class="col-md-9 col-sm-12 custom-file">
                            <input class="custom-file-input" type="file" id="file-poster" name="file-poster" accept=".png">
                            <label class="custom-file-label" for="file-poster">Pilih file yang akan diupload</label>
                            <small class="text-danger"></small>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
