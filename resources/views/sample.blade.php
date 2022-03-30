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
                        <h3 class="mb-0 font-weight-bold">
                            Sample
                        </h3>
                        <hr>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dicta reiciendis qui, possimus enim necessitatibus sunt nobis quos cum illum quas deleniti sed sint veniam nulla natus. A, veritatis temporibus.
                        </p>
                     

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
