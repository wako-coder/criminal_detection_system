@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Create post
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('people.index') }}">Posts</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::model($people, ['route' => ['people.update', $people->id], 'method'=>'PATCH']) !!}
                <div class="form-group">
                    <strong>fristName:</strong>
                    {!! Form::text('fristName', null, array('placeholder' => 'fristName','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>lastName</strong>
                    {!! Form::text('lastName', null, array('placeholder' => 'lastName','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>middlename:</strong>
                    {!! Form::text('middlename', null, array('placeholder' => 'middlename','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>kebele:</strong>
                    {!! Form::text('kebele', null, array('placeholder' => 'kebele','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>wereda:</strong>
                    {!! Form::text('wereda', null, array('placeholder' => 'wereda','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>zone:</strong>
                    {!! Form::text('zone', null, array('placeholder' => 'zone','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>state:</strong>
                    {!! Form::text('state', null, array('placeholder' => 'state','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>age:</strong>
                    {!! Form::text('age', null, array('placeholder' => 'age','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>job:</strong>
                    {!! Form::text('job', null, array('placeholder' => 'job','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>fingerPrint:</strong>
                    {!! Form::text('fingerPrint', null, array('placeholder' => 'fingerPrint','class' => 'form-control')) !!}
                </div>
                @can('status-edit')
                <div class="form-group">
                    <strong>status:</strong> <br>
                    <input type="radio" name="status"  class="" value="innocent">Innocent<br>
                    <input type="radio" name="status" value="creminal">Creminal<br>          
                </div>
                @endcan
                    <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection