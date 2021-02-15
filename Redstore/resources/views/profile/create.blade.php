@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="no-profile">
            <h3 class="card-title">Complete Profile Information</h3>
            <hr>
            {!! Form::open(['action' => 'ProfileController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('phone', 'Phone Number')}}
                {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Enter your phone number'])}}
            </div>
            <div class="form-group">
                {{Form::label('id', 'National ID')}}
                {{Form::text('id', '', ['class' => 'form-control', 'placeholder' => 'Enter your nationa ID'])}}
            </div>
            <div class="form-group">
                <div class="form-group">
                    {{ Form::label('Gender') }}
                    {{ Form::select('gender', ['1'=>'Male', '2'=>'Female', '3'=>'Others'], null, array('class'=>'form-control', 'placeholder'=>'Select Gender')) }}
                </div>
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        </div>
    </div>
@endsection