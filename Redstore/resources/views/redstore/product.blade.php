@extends('layouts.app')

@section('content')
    <div class="container">
        <!------- Cart page  -------->
        <div id="cart">
            <h3 id="c-header">Cart Items</h3>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead style="background: #ff523b;">
                          <tr>
                            <th scope="col" colspan="2">Item</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="2">
                                <div id="c-row">
                                    <div id="c-col-4">
                                        <img src="/images/product-5.jpg" alt="">
                                    </div>
                                    <div id="c-col-6">
                                        <p class="card-text">Seller: Brian</p>
                                        <p class="card-text">Vegetable Oil 5l</p>
                                        <a href="" class="btn btn-sm"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                            <th scope="row">
                                <div class="form-inline">
                                    <div id="form" class="from-group">
                                        <a href="" class="btn btn-sm">-</a>
                                        <input type="number" value="1">
                                        <a href="" class="btn btn-sm">+</a>
                                    </div>
                                </div>
                            </th>
                            <td>
                                <p id="price">Ksh 550</p>
                            </td>
                            <hr>
                          </tr>
                          <tr>
                            <td colspan="2">
                                <div id="c-row">
                                    <div id="c-col-4">
                                        <img src="/images/product-5.jpg" alt="">
                                    </div>
                                    <div id="c-col-6">
                                        <p class="card-text">Seller: Brian</p>
                                        <p class="card-text">Vegetable Oil 5l</p>
                                        <a href="" class="btn btn-sm"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                            <th scope="row">
                                <div class="form-inline">
                                    <div id="form" class="from-group">
                                        <a href="" class="btn btn-sm">-</a>
                                        <input type="number" value="1">
                                        <a href="" class="btn btn-sm">+</a>
                                    </div>
                                </div>
                            </th>
                            <td>
                                <p id="price">Ksh 550</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
        
    </div>
    
@endsection