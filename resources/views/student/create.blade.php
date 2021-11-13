@extends('master')

@section('content')



<div class="row">
    <div class="col-md-4">
        <br>
        <h3 align="center">Add Data</h3>
        <br>
        <div class="card ">
            <div class="card-header text-white bg-danger">Student Add</div>
            <div class="card-body">

                <form method="POST" action="{{ route('student.store') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control"
                            placeholder="Enter First Name" />
                        <span class="text-danger">@error('first_name') ** {{ $message}} **

                            @enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control"
                            placeholder="Enter Last Name" />
                        <span class="text-danger">@error('last_name') ** {{ $message}} **

                            @enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <div class="col-md-8">
        <br>
        <h3 align="center">Show Data</h3>
        <br>
        <div class="card shadow">
            <div class="card-header bg-danger text-white">Show Data</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>FirstName</th>
                            <th>Lastname</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>

                        @forelse ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->first_name }}</td>
                            <td>{{ $item->last_name }}</td>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->id}}</td>
                        </tr>
                        @empty
                            <tr>
                                <th class="text-center" colspan="4">No Data Found</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection