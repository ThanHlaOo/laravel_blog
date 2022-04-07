<div class="col-12 col-lg-6 col-xl-3 vh-100  sidebar">
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="">
                        <img src="{{asset(\Base::$logo)}}" class="w-50" alt="">
                    </div>
                    <button class="btn btn-primary hide-bar-btn d-lg-none d-block">
                        <i class="feather-x text-light" style="font-size: 1.5em;"></i>
                    </button>
                </div>
                <div class="nav-menu mt-3">
                    <ul>
                        <x-menu.menu_-item name="Dashboard" icon="feather-home" link="#"/>
                      
                        <x-menu.menu_-spacer/>

                        <x-menu.menu_-title/>
                        <x-menu.menu_-item link="{{route('home')}}" icon="feather-plus-circle" name="Home"/>
                        <x-menu.menu_-item name="Item List" icon="feather-list" number="17" link="#"/>
                  
                        <x-menu.menu_-spacer/>

                        <x-menu.menu_-title title="Article Manager"/>
                        <x-menu.menu_-item link="{{route('categories.index')}}" icon="feather-layers" name="Manage Category" number="19"/>
            <x-menu.menu_-item name="Create Article" link="{{ route('articles.create') }}" icon="feather-plus-circle" ></x-menu.menu_-item>
            <x-menu.menu_-item name="Article List" link="{{ route('articles.index') }}" icon="feather-list" ></x-menu.menu_-item>
                        @if(auth()->user()->role_id == 3)
                        <x-menu.menu_-spacer/>
                        
                        <x-menu.menu_-title title="User Manager"></x-menu.menu-title>
                        <x-menu.menu_-item name="User Lists" icon="feather-users" link="{{ route('user-manager.index') }}"></x-menu.menu_-item>
                        @endif
                        <x-menu.menu_-spacer/>
                        <x-menu.menu_-title title="User Profile"></x-menu.menu-title>
                        <x-menu.menu_-item name="Your Profile" icon="feather-user" link="{{ route('profile') }}"></x-menu.menu_-item>
                        <x-menu.menu_-item name="Change Password" icon="feather-refresh-cw" link="{{ route('profile.edit.password') }}"></x-menu.menu_-item>
                        <x-menu.menu_-item name="Update Info" icon="feather-info" link="{{ route('profile.edit.name.email') }}"></x-menu.menu_-item>
                        <x-menu.menu_-item name="Update photo" icon="feather-image" link="{{ route('profile.edit.photo') }}"></x-menu.menu_-item>
                        <x-menu.menu_-spacer></x-menu.menu_-spacer>



                        <x-menu.menu_-spacer></x-menu.menu_-spacer>
                        <li class="">
                            <a class="btn btn-outline-primary btn-block" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                logout
                            </a>
                        </li>


                      
                    </ul>
                </div>
            </div>