@extends('layouts.main')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="height: 100vh">
    <div class="col-5" style="border: 1px solid #000; border-radius: 20px; padding: 30px; background-color: burlywood">
        <h1 class="text-center mb-2">LOGIN</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{route('login')}}">
            @csrf
            <!-- Email input -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <!-- Password input -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <!-- Submit button -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
            </div>

        </form>
    </div>
</div>

@endsection