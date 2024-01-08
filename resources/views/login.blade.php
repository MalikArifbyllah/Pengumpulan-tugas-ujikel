@extends('layouts.template')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="{{ route('auth-login') }}" method="POST" class="card p-4" style="margin-left: 250px; margin-bottom: 50px; width: 30%; text-align: center; box-shadow: 5px 10px 10px rgba(0.3, 0.2, 3, 0.3);">
        @csrf
        {{-- menampilkan error validasi --}}
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {{-- menampilkan message dari controller with namanya failed --}}
        @if (Session::get('failed'))
            <div class="alert alert-danger">{{ Session::get('failed') }}</div>
        @endif
        <div class="mb-3 mx-1" style="text-align: center;">
            <h3 style="text-decoration: underline;">Login</h3>
            <label for="email" class="form-label" style="font-size: 15px; font-weight: 600;">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email anda..."
                style="padding: 5px; max-width: 250px;">
        </div>
        <div class="mb-3 mx-1" style="text-align: center;">
            <label for="password" class="form-label"  style="font-size: 15px; font-weight: 600;">Password</label>
            <input type="password" name="password" id="password" class="form-control"
                placeholder="Masukkan Password anda.." style="padding: 5px; max-width: 250px;">
        </div>
        <button type="submit" class="btn btn-light btn-lg btn-block" style="padding: 2px;text-align: center; font-size: 12px;">Login</button>
    </form>
</div>
@endsection
