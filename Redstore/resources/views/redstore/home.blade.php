@extends('layouts.app')

@section('content')
    <div class="container">
        <!------- Top page Header -------->
        <div id="home-row">
            <div id="col-3">
                <div id="card">
                    <div id="small-card">
                        <h4>Categories</h4>
                    <hr>
                    <div id="items">
                        <div id="item" onmouseover="mouseOver()" onmouseout="mouseOut()">
                            <p class="card-text">
                                <i class="mr-1 text-danger fas fa-laptop"></i>
                                Computing 
                                <span class="float-right text-danger"><i class="fas fa-chevron-right"></i></span>
                            </p>
                        </div>
                        <div id="item">
                            <p class="card-text">
                                <i class="mr-1 text-danger fas fa-tshirt"></i>
                                Fashion 
                                <span class="float-right text-danger"><i class="fas fa-chevron-right"></i></span>
                            </p>
                        </div>
                        <div id="item">
                            <p class="card-text">
                                <i class="mr-1 text-danger fas fa-tv"></i>
                                Electronics 
                                <span class="float-right text-danger"><i class="fas fa-chevron-right"></i></span>
                            </p>
                        </div>
                        <div id="item">
                            <p class="card-text">
                                <i class="mr-1 text-danger fas fa-tablet-alt"></i>
                                Phones & tablets
                                <span class="float-right text-danger"><i class="fas fa-chevron-right"></i></span>
                            </p>
                        </div>
                        <div id="item">
                            <p class="card-text">
                                <i class="mr-1 text-danger fas fa-house-user"></i>
                                Property 
                                <span class="float-right text-danger"><i class="fas fa-chevron-right"></i></span>
                            </p>
                        </div>
                        <div id="item">
                            <p class="card-text">
                                <i class="mr-1 text-danger fas fa-couch"></i>
                                Home funture & appliances 
                                <span class="float-right text-danger"><i class="fas fa-chevron-right"></i></span>
                            </p>
                        </div>
                        <div id="item">
                            <p class="card-text">
                                <i class="mr-1 text-danger fas fa-dumbbell"></i>
                                Sport and fitness 
                                <span class="float-right text-danger"><i class="fas fa-chevron-right"></i></span>
                            </p>
                        </div>
                        <div id="item">
                            <p class="card-text">
                                <i class="mr-1 text-danger fas fa-angle-double-right"></i>
                                More categories... 
                                <span class="float-right text-danger"><i class="fas fa-chevron-right"></i></span>
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div id="col-9">
                <div class="slides" id="card">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img id="c-img" src="/images/smart1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img id="c-img" src="/images/fridge.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img id="c-img" src="/images/laptops.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>
        </div>
        <!------- Featured products ------>
        <h2 class="mt-3" id="title">Featured Products</h2>
        <div id="row">
            <div id="col-4">
                <img src="/images/ufuta.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div id="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Brian</p>
            </div>
            <div id="col-4">
                <img src="/images/product-2.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div id="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Brian</p>
            </div>
            <div id="col-4">
                <img src="/images/product-2.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div id="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Brian</p>
            </div>
            <div id="col-4">
                <img src="/images/product-3.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div id="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Brian</p>
            </div>
            <div id="col-4">
                <img src="/images/product-4.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div id="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Brian</p>
            </div>
            <div id="col-4">
                <img src="/images/product-5.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div id="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Brian</p>
            </div>
            
        </div>
        <div id="row">
            <div id="col-4">
                <img src="/images/jameson.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div id="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Brian</p>
            </div>
            <div id="col-4">
                <img src="/images/moflix.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div id="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Brian</p>
            </div>
            <div id="col-4">
                <img src="/images/lasting.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div id="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Brian</p>
            </div>
            <div id="col-4">
                <img src="/images/product-3.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div id="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Brian</p>
            </div>
            <div id="col-4">
                <img src="/images/product-4.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div id="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Brian</p>
            </div>
            <div id="col-4">
                <img src="/images/product-5.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div id="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Brian</p>
            </div>
            
        </div>
    </div>
    
@endsection