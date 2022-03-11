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
            <div class="card-header">Posts
                @can('people-create')
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('people.create') }}">New person</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $people)
                            <tr>
                                <td>{{ $people->id }}</td>
                                <td> {{ $people->fristName }}{{ $people->lastName }} {{ $people->middlename }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('people.show',$people->id) }}">Show</a>
                                    @can('people-edit')
                                        <a class="btn btn-primary" href="{{ route('people.edit',$people->id) }}">Edit</a>
                                    @endcan
                                    @can('people-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['people.destroy', $people->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->appends($_GET)->links() }}
            </div>
        </div>
    </div>
</div>
@endsection