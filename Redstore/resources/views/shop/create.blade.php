@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="no-profile">
            <h3 class="card-title text-center">Create Shop</h3>
            <hr>
            {!! Form::open(['action' => 'ShopController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Shop Name')}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your shop name'])}}
                </div>
                <div class="form-group">
                    {{Form::label('location', 'Shop Location')}}
                    {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Enter your shop location'])}}
                </div>
                <div class="form-group">
                    {{Form::label('desc', 'Shop Description')}}
                    {{Form::textarea('desc', '', ['class' => 'form-control', 'placeholder' => 'Enter your shop name'])}}
                </div>
                <div class="form-group">
                    {{Form::file('logo_image')}}
                </div>
                {!! Form::submit('Submit', ['class' => 'btn btn-primary'])!!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection