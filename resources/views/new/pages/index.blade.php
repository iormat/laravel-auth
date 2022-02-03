@extends('new.layouts.main-layout')
@section('content')
<div class="my_container">
        {{-- login --}}
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-floating mb-3">
                <label for="floatingInput">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com" required>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                   </span>
                @enderror

            </div>
            <div class="form-floating mb-3">
                <label for="floatingPassword">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password" required>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        {{-- register --}}
        @guest
            <h2>Registration</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                @method('POST')
                <div class="form-floating mb-3">
                    <label for="floatingInput">Username</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" name="name" placeholder="Username" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <label for="floatingInput">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com" required>
                    @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <label for="floatingPassword">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password" required>
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <label for="floatingInput">Password Confirmation</label>
                    <input type="password" class="form-control" id="floatingInput" name="password_confirmation" placeholder="Repeat Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        @endguest
    </div>
@endsection
