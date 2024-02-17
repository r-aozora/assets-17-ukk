@extends('layouts.auth')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Title Here</h4>
        </div>
        <div class="card-body">
            <form action="#" method="POST" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="user">Email atau Username</label>
                    <input id="user" type="user" class="form-control" name="user" tabindex="1" value="" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        Belum punya akun? <a href="#">Daftar</a>.
    </div>
@endsection
