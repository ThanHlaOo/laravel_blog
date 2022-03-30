@extends('public_view.master')
@section('content')
<div class="">
    <div class="alert alert-dark">
        Testing Commit
    </div>
                <div class="py-3">

                    <div class="small post-category mb-5">
                        <a href="{{route('baseOnCategory', $article->category->id)}}" rel="category tag">{{$article->category->title}}</a>
                       
                    </div>

                    <h2 class="fw-bolder">{{$article->title }}</h2>
                    <div class="my-3 feature-image-box">
                        <img width="1024" height="682" src="{{asset('img/user/avatar2.jpg')}}">
                    <div class="d-block d-md-flex justify-content-between align-items-center my-3">

                        <div class="">
                            <img alt="" src="{{asset('img/user/avatar2.jpg')}}"
                                 class="avatar avatar-30 photo rounded-circle" height="30" width="30" loading="lazy"> <a
                                href="#" title="Visit admin’s website"
                                rel="author external">{{$article->user->name}}</a></div>

                        <div class="text-primary">
                            <i class="feather-calendar"></i>
                            {{date('d F Y h:i a')}}
                        </div>
                    </div>

                    <p>{{$article->description}}</p>
                    <hr>
                    @php 
                        $previous = App\Models\Article::where('id', '<', $article->id )->latest('id')->first();
                        $next = App\Models\Article::where('id', '>', $article->id )->first();

                    @endphp
                    {{$previous->id}}
                    <div class="nav d-flex justify-content-between p-3">
                        <a href="{{isset($previous) ? route('detail', $previous->id) : '#'}}"
                           class="btn btn-outline-primary page-mover rounded-circle @empty($previous) disabled @endempty">
                            <i class="feather-chevron-left"></i>
                        </a>

                        <a class="btn btn-outline-primary px-3 rounded-pill" href="{{route('index')}}">
                            Read All
                        </a>

                        <a href="{{isset($next) ? route('detail', $next->id): '#' }}"
                           class="btn btn-outline-primary page-mover rounded-circle @empty($next) disabled @endempty">
                            <i class="feather-chevron-right"></i>
                        </a>
                    </div>
                </div>


</div>
</div>
@endsection