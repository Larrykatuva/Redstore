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
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- Fontawesome -->
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
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
        </div>
        <!---- side nav --->
        <div id="sidebar">
            <div id="sidebar-header">
                <h3 id="brand">
                    <span id="ti-unlink"></span>
                    <span>Redstore</span>
                    <span class="float-right ml-5" ><i class="fas fa-bars"></i></span>
                </h3>
            </div>
            <div class="pl-4" id="siderbar-menu">
                <ul>
                    <li>
                        <a href="">
                            <span><i class="fas fa-home"></i></span>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span ><i class="fas fa-users"></i></span>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span ><i class="fas fa-tasks"></i></span>
                            <span>Tasks</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><i class="fas fa-project-diagram"></i></span>
                            <span>Projects</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="main-content">
            <header>
                <div>
                    <span id="ti-search"></span>
                    <input type="text" placeholder="search">
                </div>
                <div id="social-icons">
                    <span id="ti-bell"></span>
                    <span id="ti-comment"></span>
                    <div></div>
                </div>
            </header>

            <main>
                <h2 id="dash-title">Overview</h2>
                <div id="dash-cards">
                    <div id="single-card">
                        <div id="card-body">
                            <span><i class="fas fa-dollar-sign"></i></span>
                            <div>
                                <h5>Earnings Daily</h5>
                                <h4>Ksh 66090</h4>
                            </div>
                        </div>
                    </div>
                    <div id="single-card">
                        <div id="card-body">
                            <span><i class="fas fa-shopping-cart"></i></span>
                            <div>
                                <h5>Daily Sales</h5>
                                <h4>145</h4>
                            </div>
                        </div>
                    </div>
                    <div id="single-card">
                        <div id="card-body">
                            <span ><i class="fas fa-users"></i></span>
                            <div>
                                <h5>Total Users</h5>
                                <h4>1050</h4>
                            </div>
                        </div>
                    </div>
                    <div id="single-card">
                        <div id="card-body">
                            <span ><i class="fas fa-briefcase"></i></span>
                            <div>
                                <h5>Account Balance</h5>
                                <h4>$30,659.45</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <table id="contact-table" class="table table-striped table-sm table-bordered " style="width:100%">
                    <thead style="background: #ff523b">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>     
            </main>
        </div>



    {{-- dataTables --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        var table1 = $('#contact-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('all.users') }}",
            columns: [
                {data:'id', name:'id'},
                {data:'name', name:'name'},
                {data:'email', name:'email'},
                {data:'action', name:'action', orderable: false, searchable: false}
            ]
        });
    </script>
  </body>
</html>

