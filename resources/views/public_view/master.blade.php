<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', App\Base::$name)</title>
    <link rel="icon" href="{{asset('logos/logos/fav.png')}}">
    
    <link href="{{asset('css/theme.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/feather-icons-web/feather.css')}}">
    @yield('head')

</head>
<body>
<div class="" id="themeHeaderSpacer"></div>

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom position-fixed top-0 w-100">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{asset('logos/logos/logo.PNG')}}" style="height: 40px" class="mr-1" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="feather-align-right"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="menu-top-right-menu" class="navbar-nav ms-auto mb-2 mb-md-0 ">
                <li id="menu-item-12"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home nav-item nav-item-12">
                    <a href="{{route('welcome')}}" class="nav-link ">Home</a></li>
                <li id="menu-item-16"
                    class="menu-item menu-item-type-post_type menu-item-object-page nav-item nav-item-16"><a
                        href="{{route('about')}}" class="nav-link ">About</a></li>
               
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center g-5 mt-3">
        <div class="col-12 col-lg-6">


            @yield('content')

        

        </div>
        <div class="d-block d-lg-none d-flex justify-content-center">
        </div>



     
        <div class="col-12 col-lg-4 border-start" id="sidebarColumn">
            <div class="position-sticky" style="top: 100px">
                <div class="mb-5 sidebar">


                    <div id="search" class="mb-5">
                        <form action="{{route('index')}}">
                            <div class="d-flex search-box">
                                <input type="text" name="search" value="{{request()->search}}" required class="form-control flex-shrink-1 me-2 search-input" placeholder="Search Anything">
                                <button class="btn btn-primary search-btn" >
                                    <i class="feather-search d-block d-xl-none"></i>
                                    <span class="d-none d-xl-block">Search</span>
                                </button>
                            </div>

                        </form>

                    </div>

                    <div id="category">
                        <h4 class="fw-bolder">Category Lists</h4>
                        <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{route('index')}}" class="{{Request::url() == route('index') ? 'active' : ''}}">All Blogs</a>
                                </li>
                            @foreach($categories as $category)
                                <li class="list-group-item">
                                    <a href="{{route('baseOnCategory', $category->id)}}" class="{{Request::url() == route('baseOnCategory', $category->id) ? 'active' : ''}}">{{$category->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    @yield('pagination')
            </div>
                </div>
                <div class="d-none d-lg-block">
                </div>
            </div>
        </div>

        <div class="col-12 border-bottom mb-0 mt-3">
        </div>
        <div class="col-12">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="text-center">
                        Copyright ?? {{date('Y') }} {{App\Base::$name}}
                    </div>
                    <a href="#themeHeaderSpacer" class="btn btn-primary">
                        <i class="feather-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="{{asset('js/theme.js')}}"></script>



</body>
</html>
