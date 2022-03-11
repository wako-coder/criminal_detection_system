@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Post
                @can('role-create')
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('people.index') }}">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Name:</strong>
                    {{ $people->fristName }}{{ $people->lastName }} {{ $people->middlename }}
                </div>
                <div class="lead">
                    <strong>kebele:</strong>
                    {{ $people->kebele }}
                </div>
                <div class="lead">
                    <strong>wereda:</strong>
                    {{ $people->wereda }}
                </div>
                <div class="lead">
                    <strong>zone:</strong>
                    {{ $people->zone }}
                </div>
                <div class="lead">
                    <strong>state:</strong>
                    {{ $people->state }}
                </div>
                <div class="lead">
                    <strong>job:</strong>
                    {{ $people->job }}
                </div>
                <div class="lead">
                    <strong>status:</strong>
                    {{ $people->status }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection