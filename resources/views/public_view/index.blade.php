@extends('public_view.master')
@section('content')
<div class="">
    @forelse($articles as $article)

    <div class="border-bottom  pb-4 article-preview">
        <div class="p-0 p-md-3">
            <a class="fw-bold h4 d-block text-decoration-none"
            href="{{route('detail', $article->id)}}">
                {{$article->title}} </a>

            <div class="small post-category mb-3">
                <a href="{{route('baseOnCategory', $article->category->id)}}" rel="category tag">{{$article->category->title}}</a>
            </div>

           

            <div class="text-black-50 the-excerpt">
                <p>{{ Str::words($article->description,50) }}</p>
            </div>

            <div class="d-flex justify-content-between align-items-center see-more-group">
                <div class="d-flex align-items-center">
                    <img alt="" src="{{asset('storage/profile/'.$article->user->photo)}}"
                        class="avatar avatar-50 photo rounded-circle" height="50" width="50"
                        loading="lazy">
                    <div class="ms-2">
                        <span class="small">
                            <i class="feather-user"></i>
                            {{$article->user->name}}
                        </span>
                        <br>
                        <span class="small">{{$article->created_at->format('d F Y')}}</span>
                    </div>
                </div>

                <a href="{{route('detail', $article->id)}}" class="btn btn-outline-primary rounded-pill px-3">Read More</a>
            </div>
        </div>
    </div>
    @empty
    <div class="mb-4 pb-4">
                <div class="py-5 my-5 text-center text-lg-start">
                    <p class="fw-bold text-primary">Dear Viewer</p>
                    <h1 class="fw-bold">
                        There is no article 😔 ...
                    </h1>
                    <p>Please go back to Home Page</p>
                    <a class="btn btn-outline-primary rounded-pill px-3" href="index.html">
                        <i class="feather-home"></i>
                        Blog Home
                    </a>
    
                </div>
            </div>
    @endforelse




</div>

@endsection
@section('pagination')
<div class="d-block d-flex justify-content-center" id="pagination">
<div class="pagination">
                    <ul class="pagination">
                    {{ $articles->appends(request()->all())->oneachside(1)->links() }}
                      
                    </ul>
                </div>
@stop