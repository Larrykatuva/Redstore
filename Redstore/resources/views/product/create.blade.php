@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="no-profile">
            <h3 class="card-title text-center">Add New product</h3>
            <hr>
            {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Product Name')}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter product name'])}}
                </div>
                <div class="form-group">
                    {{Form::label('price', 'Product Price')}}
                    {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Enter product price'])}}
                </div>
                <div class="form-group">
                    {{Form::label('quantity', 'Product Quantity')}}
                    {{Form::text('quantity', '', ['class' => 'form-control', 'placeholder' => 'Enter product quantity'])}}
                </div>
                <div class="form-group">
                    {{Form::label('brand', 'Product Brand')}}
                    {{Form::text('brand', '', ['class' => 'form-control', 'placeholder' => 'Enter product brand'])}}
                </div>
                <div class="form-group">
                    {{ Form::label('Category') }}
                    {{ Form::select('category', $category, null, array('class'=>'form-control', 'placeholder'=>'--Select product category--')) }}
                </div>
                <div class="form-group">
                    {{Form::label('desc', 'Product Description')}}
                    {{Form::textarea('desc', '', ['class' => 'form-control', 'placeholder' => 'Enter product description'])}}
                </div>
                <div class="form-group">
                    {{Form::file('cover_image')}}
                </div>
                {!! Form::submit('Submit', ['class' => 'btn btn-primary'])!!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection