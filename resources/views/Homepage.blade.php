@extends('layouts.mainhome')

@section('content')

<div class="row justify-content-center">
    <div class="col-9 mt-5">
        <div class="d-flex justify-content-between mb-3">
            <h2>List Key</h2>
            <a href="{{route('addcardpage')}}" class="btn btn-outline-info">ADD CARD</a>
        </div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Block</th>
                    <th scope="col">Number Card</th>
                    <th scope="col">Status</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allcards as $allcard)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td style="width: 40%">{{ $allcard->fullname }}</td>
                    <td style="width: 10%">{{ $allcard->block }}</td>
                    <td style="width: 20%">{{ $allcard->cardnumber }}</td>
                    <td style="width: 10%">
                        @if ($allcard->status == 1)
                        <span class="badge bg-success">Success</span>
                        @else
                        <span class="badge bg-danger">Failed</span>
                        @endif
                    </td>
                    <td style="width: 20%">
                        {{-- button delete and update --}}
                        <a href="{{url('deletecard'). '/'. $allcard->id}}" class="btn btn-danger btn-sm mx-1">Delete</a>
                        <a href="{{url('editcard'). '/'. $allcard->id}}" class="btn btn-warning btn-sm mx-1">Update</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection