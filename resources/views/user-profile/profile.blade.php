@extends('layouts.app')

@section("title") <title> Edit Profile</title> @endsection

@section('content')
    <x-bread-crumb.bread-crumb>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </x-bread-crumb.bread-crumb>

    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ isset(Auth::user()->photo) ? asset('storage/profile/'.Auth::user()->photo) : asset('dashboard/img/user-default-photo.png') }}" class="w-50 rounded-circle my-3" alt="">
                        <h3 class="mb-0 font-weight-bold">
                            {{ Auth::user()->name }}
                        </h3>
                        <small class="text-black-50">
                            {{ Auth::user()->email }}
                        </small>                   
                        <table class="table mb-0 mt-4 text-left">
                            <tr>
                                <td class="w-25">Phone</td>
                                <td>{{ Auth::user()->phone }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{ Auth::user()->address }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
