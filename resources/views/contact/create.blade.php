@extends('layouts.app')
@section('content')

<!-- BEGIN -->

<div class="container">

    @if ($errors->all())
    <ul class="alert-danger">
        @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            
        @endforeach
    </ul>    

    @endif

   

    {!! Form::open(['action' => 'ContactController@store','method'=> 'post']) !!}
        <div class="col-md-6">

            
            <div class="form-group">
                {!! Form::label('NAME') !!}
            {!! Form::text('name',null,["class"=>"form-control"]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Email') !!}
            {!! Form::text('email',null,["class"=>"form-control"]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('PHONE') !!}
            {!! Form::text('phone',null,["class"=>"form-control"]) !!}
            </div>
            
            <input type="submit" value="Save" class="btn btn-primary">
            <a href="/contact" class="btn btn-success"> Back </a>
        </div>
    {!! Form::close() !!}

    </div>    
<!-- END -->
@endsection