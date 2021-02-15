<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom css -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom1.css') }}" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    
    {{-- dataTables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Hello, world!</title>
  </head>
  <body>
      <div class="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img id="app-logo" src="/images/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Account</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Contact Us</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/profile" class="dropdown-item">Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @if ($user->userProfile)
            <div id="card">
                <h5 class="text-center">User Shop Information</h5>
            </div>
                <div id="profile" class="mt-1">
                    <div class="my-static" id="p-col-3">
                        <div id="card">
                            <img id="p-image" src="/storage/storage/logo_images/{{$user->userShop->logo}}" alt="" id="p-image">
                            <p class="card-text"><strong>Name: </strong>{{$user->userShop->name}}</p>
                            <p class="card-text"><i class="fas fa-phone-alt mr-1 text-danger"></i>0{{$user->userProfile->phone}}</p>
                            <p class="card-text"><i class="fas fa-map-marker-alt mr-1 text-danger"></i>{{$user->userShop->location}}</p>
                            <p class="card-text"><i class="far fa-envelope mr-1 text-danger"></i>{{$user->email}}</p>
                            <div id="p-row">
                                <div id="p-col-6">
                                    <a href="profile/edit{{$user->id}}" class="btn btn-sm btn-success"><i class="far fa-edit mr-1"></i>Edit Shop</a>
                                </div>
                                <div id="p-col-6">
                                    <a href="profile" class="btn btn-sm btn-danger"><i class="far fa-trash-alt mr-1"></i>Delete Shop</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="p-col-7">
                        <div id="card">
                            <h3 class="card-title text-center"><i class="fab fa-shopify mr-2 text-danger"></i>User Shop</h3>
                            <hr>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                  </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <a href="product/create" class="btn btn-sm btn-success float-right m-2">Add product</a>
                                    <table id="contact-table"  class="table table-sm ">
                                        <thead style="background: #ff523b">
                                          <tr>
                                            <th scope="col">#</th>
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
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    Profile
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    Contact
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
                
            @else
                
            @endif
        </div>
      </div>


    {{-- dataTables --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
 
    <script type="text/javascript">
        var table1 = $('#contact-table').DataTable({
            processing: true,
            serverSide: true,
            language: {
                processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>'
            },
            ajax: "{{ route('all.catalog') }}",
            columns: [
                {data:'id', name:'id'},
                {data:'price', name:'price'},
                {data:'quantity', name:'quantity'},
                {data:'brand', name:'brand'},
                {data:'action', name:'action', orderable: false, searchable: false}
            ]
        });
    </script>
  </body>
</html>

