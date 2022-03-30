@extends('layouts.app')

@section("title") <title>{{ $article->title }}</title> @endsection

@section("head")
    <style>

        .description{
            white-space: pre-line;
        }

    </style>
    @stop

@section('content')
    <x-bread-crumb.bread-crumb>
        <li class="breadcrumb-item"><a href="{{ route('articles.index') }}">Article List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Article Detail</li>
    </x-bread-crumb.bread-crumb>

    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-0">
                        {{ $article->title }}
                    </h4>

                    <div class="mt-2 text-primary">
                        <span class="small font-weight-bold me-2">
                            <i class="feather-layers"></i>
                            {{ $article->category->title }}
                        </span>

                        <span class="small font-weight-bold me-2">
                            <i class="feather-user"></i>
                            {{ $article->user->name }}
                        </span>

                        <span class="small font-weight-bold me-2">
                            <i class="feather-calendar"></i>
                            {{ $article->created_at->format("d-m-Y") }}
                        </span>

                        <span class="small font-weight-bold me-2">
                            <i class="feather-clock"></i>
                            {{ $article->created_at->format("h:i A") }}
                        </span>
                    </div>
                    <p class="text-black-50 description" >
                        {{ $article->description }}
                    </p>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="">
                            <form action="{{ route('articles.destroy',[$article->id,'page'=> $page]) }}" class="d-inline-block" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger" onclick="return confirm('Are U sure to delete this article?')">Delete</button>
                            </form>
                            <a href="{{ route('articles.edit',$article->id) }}" class="btn btn-outline-primary">
                                Edit
                            </a>
                            <a href="{{ route('articles.index') }}" class="btn btn-outline-dark">
                                All Articles
                            </a>
                        </div>
                        <p class="mb-0">{{ $article->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
