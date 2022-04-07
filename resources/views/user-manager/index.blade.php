@extends('layouts.app')

@section("title") <title> Users</title> @endsection

@section('content')

    <x-bread-crumb.bread-crumb>
        
        <li class="breadcrumb-item active" aria-current="page">User</li>
    </x-bread-crumb.bread-crumb>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div style="float: right">
                        <a href="{{route('profile')}}">Profile</a> |
                        <a class="text-danger" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                Log Out
                        </a>
                    </div>
                    <h1 class="mb-3">
                        Manage Users
                        <span class="badge bg-danger text-white">
                            <?= count($users) ?>
                        </span> 
                    </h1>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $user->id ?></td>
                                <td><?= $user->name ?></td>
                                <td><?= $user->email ?></td>
                                <td><?= $user->phone ?></td>
                            
                                <td>
                                    <?php if($user->role->value == 1): ?>
                                        <span class= "badge bg-secondary">
                                            <?= $user->role->name ?>
                                        </span>
                                    <?php elseif($user->role->value == 2): ?>
                                        <span class= "badge bg-primary">
                                            <?= $user->role->name ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge bg-success">
                                            <?= $user->role->name ?>
                                        </span>
                                    <?php endif ?>
                                </td>
                                <td>
                                    <?php if( auth()->user()->role->value > 1): ?>
                                        <div class="btn-group dropdown">
                                            <a href="" class="btn btn-sm
                                            btn-outline-primary
                                            dropdown-toggle"
                                            data-bs-toggle="dropdown" id="dropdownMenuButton">
                                            Change Role
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
                                                <a href="{{route('user-manager.change-role', [$user->id, 'role' => 1])}}" class="dropdown-item">User</a>
                                                <a href="{{route('user-manager.change-role', [$user->id, 'role' => 2])}}" class="dropdown-item">Manager</a>
                                                <a href="{{route('user-manager.change-role', [$user->id, 'role' => 3])}}" class="dropdown-item">Admin</a>
                                            </div>
                                            <?php if($user->suspended): ?>
                                                <a href="{{route('user-manager.unsuspended', $user->id)}}" class="btn btn-sm btn-danger">Suspended</a>
                                            <?php else: ?>
                                                <a href="{{route('user-manager.suspended', $user->id)}}" class="btn btn-sm btn-outline-success">Active</a>
                                            <?php endif ?>
                                            <?php if(Auth::id() !== $user->id) : ?>
                                                <form class="d-inline-block" action="{{ route('user-manager.delete', $user->id) }}" id="form{{$user->id}}" method="post">
                                                    @csrf
                            
                                                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="return askConfirm({{$user->id}})">Delete</button>
                                                </form>
                                            <?php endif ?>
                                            <?php if(Auth::id() !== $user->id) : ?>                                                   
                                                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="return changePassword({{$user->id}}, '{{$user->name}}')"><i class="feather-lock"></i></button>
                                            
                                            <?php endif ?>
                                        </div>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('foot')
    <script>
        function askConfirm(id){
            Swal.fire({
                title: 'Are you sure <br> to delete role?',
                text: "role ချိန်လိုက်ရင် admin လုပ်ပိုင်ခွင့်များကို ရရှိမှာဖြစ်ပါတယ်။",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        "Accout Deleted!",
                        'အကောင့်မြှင်တင်ချင်း အောင်မြင်ပါသည်။',
                        'success'
                    )
                    setTimeout(function (){
                        $("#form"+id).submit();
                    },1000)
                }
            })
        }
        function changePassword(id, name){
            let url = '{{route('user-manager.change-password')}}'
            Swal.fire({
                title: 'Change Password '+name,
                input: 'password',
                inputAttributes: {
                    autocapitalize: 'off',
                    required: 'required',
                    minLength: 8
                },
                showCancelButton: true,
                confirmButtonText: 'Change',
                showLoaderOnConfirm: true,
                preConfirm: function(newPassword){
                    $.post(url, {
                        id : id,
                        password: newPassword,
                        _token : "{{ csrf_token() }}"
                    }).done(function(data){
                        if(data.status == 200){
                            console.log('aung p')
                            Swal.fire({
                                icon : "success",
                                title : "Password Change",
                                text : data.message
                            });
                        }else{
                            console.log(data);
                            Swal.fire("error",data.message.password[0],"error");

                        }
                    })
                }
            })
        }
    </script>
@endsection
