
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title','Admin Dashboard')
  
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('vendor/feather-icons-web/feather.css')}}">
    <link rel="shortcut icon" href="{{asset('logos/logos/fav.png')}}" >
     
</head>
<body>

    @guest
        @yield('content')
    @else
        <section class="container-fluid main">
            <div class="row">
                <!-- slidebar start -->
                    @include('layouts.sidebar')
                <!-- slidebar end -->
                <div class="col-12 col-lg-6 col-xl-9 vh-100 content">
                    <!-- header start -->
                    @include('layouts.header')
                    <!-- header end -->
                    <!-- content area start -->
                    @yield('content')
                    <!-- content area end -->
                </div>
            </div>
            
        </section>
    
    @endguest
    
    <script src="{{asset('vendor/way_point/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/counter_up/counter_up.js')}}"></script>
 
    <script src="{{asset('vendor/chart_js/chart.min.js')}}"></script>


    
    
    @yield('foot')


    @auth
        @empty(Auth::user()->phone)
            @include('user-profile.update-info')
        @endempty

    @endauth
    @include('layouts.toast')
    @include('layouts.alert')
</body>
</html>