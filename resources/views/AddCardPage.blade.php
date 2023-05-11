@extends('layouts.mainhome')

@section('content')

<div class="row justify-content-center">
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Add Card</h2>
            </div>
            <div class="card-body">
                <form action="{{route('storecard')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullname">
                    </div>
                    <div class="mb-3">
                        <label for="block" class="form-label">Block</label>
                        <select class="form-select" aria-label="Default select example" name="block">
                            <option selected>Select Block</option>
                            <option value="A3">A3</option>
                            <option value="B6">B6</option>
                            <option value="C9">C9</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cardnumber" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="cardnumber" name="cardnumber">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-block mb-4">Add Card</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection