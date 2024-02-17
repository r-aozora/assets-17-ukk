@extends('layouts.app')

@section('link')
    <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="#" class="btn btn-icon">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>
                <h1>Title Here</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">Pengaturan</div>
                    <div class="breadcrumb-item active">
                        <a href="#">Kelola Pengguna</a>
                    </div>
                    <div class="breadcrumb-item">Title Here</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Title Here</h4>
                            </div>
                            <form action="#" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                <div class="card-body">
                                    {{-- Error Here --}}
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="nama">Nama Pengguna</label>
                                            <input type="text" name="nama" id="nama" class="form-control" value="" required autofocus>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" id="username" class="form-control" value="" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" value="" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control" value="" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="telepon">Telepon</label>
                                            <input type="text" name="telepon" id="telepon" class="form-control" value="" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="role">Role</label>
                                            <select name="role" id="role" class="form-control selectric" required>
                                                <option disabled selected>Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="pustakawan">Pustakawan</option>
                                                <option value="pembaca">Pembaca</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat" style="height: 250px" required></textarea>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="image-upload">Foto Profil</label>
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Pilih Gambar</label>
                                                <input type="file" name="foto_profil" id="image-upload">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-whitesmoke text-right">
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>
@endsection
