@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student Data') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($userdata)
                        <form action="student-data.create" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                {{ $userdata->name }}
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                {{ $userdata->email }}
                            </div>
                            <div class="form-group">
                                <label for="national_id">National ID:</label>
                                {{ $userdata->national_id }}
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                {{ $userdata->phone }}
                            </div>
                            <div class="form-group">
                                <label for="cv">Certificate:</label>
                                {{-- <input type="file" class="form-control-file" id="cv" name="cv" accept=".pdf,.doc,.docx"> --}}
                            </div>
                            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                        </form>
                    @else
                        <p>No user data available.</p>
                        <a href="{{ route('student-data.create') }}" class="btn btn-primary">Add Data</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
