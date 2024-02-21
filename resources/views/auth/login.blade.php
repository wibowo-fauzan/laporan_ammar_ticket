@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="" style="margin-top: 20%;">
    <div class="row card">
        <div class="col-12">
            <div class="p-5">
                <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                <a href="/Ticket" class="text-start text-primary" style="text-align: start;">
                    <p class="text-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            viewBox="0 0 24 24">
                            <g fill="none">
                                <path
                                    d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                <path fill="currentColor"
                                    d="M5.5 6a1.5 1.5 0 1 0-3 0v12a1.5 1.5 0 0 0 3 0zm7.556 11.303a1.5 1.5 0 0 0 0-2.121L11.374 13.5H20a1.5 1.5 0 0 0 0-3h-8.626l1.682-1.682a1.5 1.5 0 1 0-2.121-2.122L6.692 10.94a1.5 1.5 0 0 0 0 2.121l4.243 4.243a1.5 1.5 0 0 0 2.121 0Z" />
                            </g>
                        </svg> Back Home</p>
                </a>
                <form method="POST" action="{{ route('login') }}" class="user">
                    @csrf
                    <div class="form-group">
                        <input type="text"
                            class="form-control form-control-user @error('username') is-invalid @enderror"
                            name="username" required autocomplete="off" placeholder="Username">
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password"
                            class="form-control form-control-user @error('password') is-invalid @enderror"
                            name="password" required placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            {{ __('Login') }}
        </button>
        </form>
        <hr>
        <a href="{{ route('register') }}" class="btn btn-secondary text-center"
            style="width: 100%; border-radius: 20px;">
            Buat Akun!
        </a>
    </div>
</div>
</div>
</div>
@endsection
@section('script')
<script>
    $("body").addClass("bg-gradient-primary");

</script>
@endsection
