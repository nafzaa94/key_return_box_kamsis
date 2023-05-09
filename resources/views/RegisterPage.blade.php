@extends('layouts.main')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="height: 100vh">
    <div class="col-5" style="border: 1px solid #000; border-radius: 20px; padding: 30px; background-color: burlywood">
        <h1 class="text-center mb-2">LOGIN</h1>
        {{-- error --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                <li>{{$errors}}</li>
                @endforeach
            </ul>
        </div>
        <form>
            {{-- Name input --}}
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name">
            </div>

            <!-- Email input -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email">
            </div>

            {{-- No Student --}}
            <div class="mb-3">
                <label for="noStudent" class="form-label">Number Student</label>
                <input type="text" class="form-control" id="noStudent">
            </div>

            {{-- block --}}
            <div class="mb-3">
                <label for="block" class="form-label">Block</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Block</option>
                    <option value="1">A3</option>
                    <option value="2">B6</option>
                </select>
            </div>


            <!-- Password input -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>

            <div class="mb-3">
                <label for="passwordConfirm" class="form-label">Password Confirm</label>
                <input type="password" class="form-control" id="passwordConfirm">
            </div>

            <!-- Submit button -->
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
            </div>


            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="#!">Login</a></p>
            </div>
        </form>
    </div>
</div>

@endsection