@extends('layouts.app')

@section('content')
    <div id="small-container">
        <div id="home-row">
            <div id="col-3">
                <div id="card">
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
                <div id="category">
                    <h5 class="card-title">Trending products</h5>
                    <div id="home-row">
                        <a href="/redstore/1">
                            <div id="product-col">
                                <img src="images/product-1.jpg" alt="" id="product-img">
                                <div class="mt-1 text-center">
                                    <h6 class="name">Ufuta coocking oil </h6>
                                    <p id="rating" class="text-danger">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star-half"></i>
                                    </p>
                                    <p class="seller">Brian 1</p>
                                </div>
                            </div>
                        </a>
                        <div id="product-col">
                            <img src="images/product-2.jpg" alt="" id="product-img">
                            <div class="mt-1 text-center">
                                <h6 class="name">Red Printed T-shirt</h6>
                                <p id="rating" class="text-danger">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star-half"></i>
                                </p>
                                <p class="seller">Brian</p>
                            </div>
                        </div>
                        <div id="product-col">
                            <img src="images/product-3.jpg" alt="" id="product-img">
                            <div class="mt-1 text-center">
                                <h6 class="name">Red Printed T-shirt</h6>
                                <p id="rating" class="text-danger">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star-half"></i>
                                </p>
                                <p class="seller">Brian</p>
                            </div>
                        </div>
                        <div id="product-col">
                            <img src="images/product-4.jpg" alt="" id="product-img">
                            <div class="mt-1 text-center">
                                <h6 class="name">Red Printed T-shirt</h6>
                                <p id="rating" class="text-danger">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star-half"></i>
                                </p>
                                <p class="seller">Brian</p>
                            </div>
                        </div>
                        
                    </div>
                    <div id="home-row">
                        <a href="/redstore/1">
                            <div id="product-col">
                                <img src="images/product-5.jpg" alt="" id="product-img">
                                <div class="mt-1 text-center">
                                    <h6 class="name">Red Printed T-shirt</h6>
                                    <p id="rating" class="text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star-half"></i>
                                    </p>
                                    <p class="seller">Brian</p>
                                </div>
                            </div>
                        </a>
                        <div id="product-col">
                            <img src="images/product-6.jpg" alt="" id="product-img">
                            <div class="mt-1 text-center">
                                <h6 class="name">Red Printed T-shirt</h6>
                                <p id="rating" class="text-danger">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star-half"></i>
                                </p>
                                <p class="seller">Brian</p>
                            </div>
                        </div>
                        <div id="product-col">
                            <img src="images/product-7.jpg" alt="" id="product-img">
                            <div class="mt-1 text-center">
                                <h6 class="name">Red Printed T-shirt</h6>
                                <p id="rating" class="text-danger">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star-half"></i>
                                </p>
                                <p class="seller">Brian</p>
                            </div>
                        </div>
                        <div id="product-col">
                            <img src="images/product-8.jpg" alt="" id="product-img">
                            <div class="mt-1 text-center">
                                <h6 class="name">Red Printed T-shirt</h6>
                                <p id="rating" class="text-danger">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star-half"></i>
                                </p>
                                <p class="seller">Brian</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div id="top-footer">
                <div id="footer-row">
                    <div id="footer-col-1">
                        <img src="/images/logo.png" alt="">
                    </div>
                    <div id="footer-col-2">
                        <p class=" text-white card-text">Subcribe for more information</p>
                        <form class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                              <input type="email" class="form-control input-sm" id="inputemail" placeholder="Enter email address">
                            </div>
                            <button type="submit" class="btn btn-sm btn-danger mb-2">Submit</button>
                        </form>
                    </div>
                    <div id="footer-col-3"></div>
                </div>
            </div>
        </footer>
    </div> 
    <script>
        function mouseOver(){
            var carousel = document.getElementsByClassName('slides');

            carousel.style.display = "none";
            document.getElementsByClassName('slides').style.display = "none";
        }

        function mouseOut(){
            var carousel = document.getElementsByClassName('slides');
            carousel.style.display = "block";
        }
    </script>   
@endsection