@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($user->userProfile)
        <div id="card">
            <h5 class="text-center">User Profile Information</h5>
        </div>
            <div id="profile" class="mt-1">
                <div id="p-col-3">
                    <div id="card">
                        <img id="p-image" src="/storage/storage/profile_images/{{$user->userProfile->image}}" alt="" id="p-image">
                        <p class="card-text"><strong>Name: </strong>{{$user->name}}</p>
                        <p class="card-text"><i class="fas fa-phone-alt mr-1 text-danger"></i>0{{$user->userProfile->phone}}</p>
                        <p class="card-text"><i class="far fa-envelope mr-1 text-danger"></i>{{$user->email}}</p>
                        <div id="p-row">
                            <div id="p-col-6">
                                <a href="profile/edit{{$user->id}}" class="btn btn-sm btn-success"><i class="far fa-edit mr-1"></i>Edit Account</a>
                            </div>
                            <div id="p-col-6">
                                <a href="profile" class="btn btn-sm btn-danger"><i class="far fa-trash-alt mr-1"></i>Delete Account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="p-col-7">
                    <div id="card">
                        <h3 class="card-title text-center"><i class="fab fa-shopify mr-2 text-danger"></i>User Shop</h3>
                        <hr>
                        @if ($user->userShop)
                            <div id="s-row">
                                <div id="s-col-3">
                                    <img src="/storage/storage/logo_images/{{$user->userShop->logo}}" alt="" id="s-image">
                                </div>
                                <div id="s-col-7">
                                    <p class="card-text">View my shop details.</p>
                                    <a href="/shop" class="btn btn-sm btn-danger">Go to {{$user->userShop->name}}</a>
                                </div>
                            </div>
                            <hr>
                            <p class="card-text">
                                Several studies suggest that in-store purchase aren't thing of the past 
                            and online in-store retail can coexist. If you're intrested in 
                            opening a retail business, it's important to plan for the event. We have experts 
                            in the industry who run our ecommerce.
                            </p>
                        @else
                            <h5>About Selling Online</h5>
                            <p class="card-text">
                                Several studies suggest that in-store purchase aren't thing of the past 
                                and online in-store retail can coexist. If you're intrested in 
                                opening a retail business, it's important to plan for the event. We have experts 
                                in the industry who run our ecommerce.
                            </p>
                            <h5>Get yourself a shop and enjoy our endless advantages</h5>
                            <p class="card-text">Lower set up & running costs than an offline businesses,
                                operate your business from anywhere, make your business open all throgh,
                                scale-ability advantages, improved sales and profits and many other more.
                            </p>
                            <p class="card-text">Click the button bellow to register</p>
                            <a href="shop/create" class="btn btn-sm btn-danger">Create Shop</a>
                        @endif
                    </div>
                </div>

            </div>
            
        @else
            <div id="no-profile">
                <h3 class="card-title">User Profile Information</h3>
                <hr>
                <p>Complete your profile to be able to open a shop and get 
                    super amazing offers and advantages from red store
                    online shopping site.
                </p>
                <a href="profile/create" class="btn btn-sm btn-danger">Complete Profile</a>
            </div>
        @endif
    </div>    
@endsection