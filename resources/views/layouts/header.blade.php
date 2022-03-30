<div class="row header mb-4">
                    <div class="col-12">
                        <div class="p-2 bg-primary rounded d-flex justify-content-between align-items-center mt-1">
                            <button class="btn btn-primary side-bar-btn d-block d-lg-none">
                                <i class="feather-menu text-light" style="font-size: 2em;"></i>
                            </button>
                            <form action="" method="post">
                                <div class="row g-1 align-items-center">
                                    <div class="col-auto d-none d-md-block">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-auto d-none d-md-block">
                                        <button class="btn btn-light">
                                            <i class="feather-search text-primary"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  <img src="{{asset('storage/profile/'.Auth::user()->photo)}}" class = "shadow-sm" id = "user-img" alt="">{{Auth::user()->name}}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Profile</a></li>
                                  <div class="dropdown-divider"></div>
                                  <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                Log Out
                                        </a>
                                  </li>
                                </ul>
                              </div>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                            </form>
                        </div>
                    </div>
                </div>