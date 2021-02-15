@extends('layouts.app')

@section('content')
<div class="container">      
    <h4>Contact list
        <a onclick="addForm()" class="btn btn-primary pull-right" >Add Contact</a>
    </h4>     
    <table id="contact-table" class="table table-striped table-sm " style="width:100%">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Brand</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>         
</div>
    
@endsection