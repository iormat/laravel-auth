@extends('new.layouts.main-layout')
@section('content')
    {{-- login --}}
    <div class="my_container">
        <h2>Registration</h2>
        <form action="">
            @csrf
            @method('POST')

            <div class="form-floating mb-3">
                <label for="floatingInput">Username</label>
                <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Username">
            </div>
            <div class="form-floating mb-3">
                <label for="floatingInput">Email address</label>
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
            </div>
            <div class="form-floating mb-3">
                <label for="floatingPassword">Password</label>
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            </div>
            <div class="form-floating mb-3">
                <label for="floatingPasswordConfirmation">Password Confirmation</label>
                <input type="password" class="form-control" id="floatingPasswordConfirmation" name="password_confirmation" placeholder="Repeat Password">
            </div>

            <button class="btn btn-primary" name="submit">submit</button>
        </form>
    </div>
@endsection
