@extends('layouts.app')
@section('title')
<title>Home</title>
@endsection
@section('content')
<div class="row">
 
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card mb-4 card-status" onclick="go('https://google.com');">
                            <div class="card-body ">
                                    <div class="row">
                                        <div class="col-3">
                                            <i class="feather-shopping-bag h1 text-primary"></i>
                                        </div>
                                        <div class="col-9">
                                            <p class="h5 mb-0 font-weight-bolder">
                                                <span class="counter-up">123</span>
                                            </p>
                                            <p class="text-black-50">Today Order</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card mb-4 card-status" onclick="go('https://google.com');" >
                            <div class="card-body ">
                                    <div class="row">
                                        <div class="col-3">
                                            <i class="feather-users h1 text-primary"></i>
                                        </div>
                                        <div class="col-9">
                                            <p class="h5 mb-0 font-weight-bolder">
                                                <span class="counter-up">456</span>
                                            </p>
                                            <p class="text-black-50">Today Order</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card mb-4 card-status" onclick="go('item-list.html');">
                            <div class="card-body ">
                                    <div class="row">
                                        <div class="col-3">
                                            <i class="feather-package h1 text-primary"></i>
                                        </div>
                                        <div class="col-9">
                                            <p class="h5 mb-0 font-weight-bolder">
                                                <span class="counter-up">233</span>
                                            </p>
                                            <p class="text-black-50">Total Items</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card mb-4 card-status" onclick="go('https://google.com');">
                            <div class="card-body ">
                                    <div class="row">
                                        <div class="col-3">
                                            <i class="feather-map-pin h1 text-primary"></i>
                                        </div>
                                        <div class="col-9">
                                            <p class="h5 mb-0 font-weight-bolder">
                                                <span class="counter-up">14</span>
                                            </p>
                                            <p class="text-black-50">Support Location</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col-12 col-xl-7">
                        <div class="card overflow-hidden shadow mb-4">
                            <div class="">
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <h5>Order & Visitor</h5>
                                    <div class="">
                                        <img src="img/user/avatar1.jpg" class= "ov-img rounded-circle " alt="">
                                        <img src="img/user/avatar2.jpg" class= "ov-img rounded-circle" alt="">
                                        <img src="img/user/avatar3.jpg" class= "ov-img rounded-circle" alt="">
                                        <img src="img/user/avatar4.jpg" class= "ov-img rounded-circle" alt="">
                                        <img src="img/user/avatar5.jpg" class= "ov-img rounded-circle" alt="">
                                    </div>
                                </div>
                                <canvas id="ov" height="150"></canvas>
                            </div>
                            
                        </div>
                       
                    </div>
                    <div class="col-12 col-md-6 col-xl-5  ">
                        <div class="card mb-4 item-carousel-card">
                            <div class="card-body ">
                                <div id="carouselExampleIndicators" class="carousel slide item-carousel" data-bs-ride="carousel">
                                    <div class="carousel-indicators" style="bottom: -30px;">
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-secondary"  aria-current="true" aria-label="Slide 1"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class = "bg-secondary" aria-label="Slide 2"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class = "bg-secondary" aria-label="Slide 3"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class = "bg-secondary" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <div class="item-card">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="w-50">
                                                    <h4 class="">Coffee Cup</h4>
                                                    <p class="font-weight-bolder text-black-50 mb-3">500 MMK</p>
                                                    
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <img src="img/item/item1.png" class="item-card-img" alt="">
                                            </div>
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <div class="item-card">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="w-50">
                                                    <h4 class="">Coffee Cup</h4>
                                                    <p class="font-weight-bolder text-black-50 mb-3">500 MMK</p>
                                                    
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <img src="img/item/item2.png" class="item-card-img" alt="">
                                            </div>
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <div class="item-card">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="w-50">
                                                    <h4 class="">Coffee Cup</h4>
                                                    <p class="font-weight-bolder text-black-50 mb-3">500 MMK</p>
                                                    
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <img src="img/item/item3.png" class="item-card-img" alt="">
                                            </div>
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <div class="item-card">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="w-50">
                                                    <h4 class="">Coffee Cup</h4>
                                                    <p class="font-weight-bolder text-black-50 mb-3">500 MMK</p>
                                                    
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <img src="img/item/item4.png" class="item-card-img" alt="">
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                </div>
                             
                        
                                   
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6  col-xl-5 ">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <h5>Order & Place</h5>
                                    <div class="">
                                        <i class="feather-pie-chart h4 mb-0 text-primary"></i>
                                    </div>
                                </div>
                                <canvas id="op" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                    <button class="test">Click</button>
                    <div class="col-12 col-xl-7">
                        <div class="card mb-4 overflow-hidden">
                            <div class="">
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <h5 class="mb-0">Subscriber List</h5>
                                    <div class="">
                                        <i class="feather-more-vertical h4 mb-0 text-primary"></i>
                                    </div>
                                </div>
                                <table class="table table-hover sub-list mb-0">
                                    <thead>
                                       <tr>
                                          <th>Name</th>
                                          <th>Company</th>
                                          <th>Start Date</th>
                                          <th>Status</th>
                                          <th>Amount</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>Michael Austin</td>
                                          <td>ABC Fintech LTD.</td>
                                          <td>Jan 1,2019</td>
                                          <td><span class="badge rounded-pill bg-danger">Close</span></td>
                                          <td>$ 1000.00</td>
                                          <td class="center-align"><a href="#" class="text-decoration-none"><i class="feather-trash-2 text-danger "></i></a></td>
                                       </tr>
                                       <tr>
                                          <td>Aldin Rakić</td>
                                          <td>ACME Pvt LTD.</td>
                                          <td>Jan 10,2019</td>
                                          <td><span class="badge rounded-pill bg-success">Open</span></td>
                                          <td>$ 3000.00</td>
                                          <td class="center-align"><a href="#" class="text-decoration-none"><i class="feather-trash-2 text-danger "></i></a></td>
                                       </tr>
                                       <tr>
                                          <td>İris Yılmaz</td>
                                          <td>Collboy Tech LTD.</td>
                                          <td>Jan 12,2019</td>
                                          <td><span class="badge rounded-pill bg-success">Open</span></td>
                                          <td>$ 2000.00</td>
                                          <td class="center-align"><a href="#" class="text-decoration-none"><i class="feather-trash-2 text-danger "></i></a></td>
                                       </tr>
                                       <tr>
                                          <td>Lidia Livescu</td>
                                          <td>My Fintech LTD.</td>
                                          <td>Jan 14,2019</td>
                                          <td><span class="badge rounded-pill bg-danger">Close</span></td>
                                          <td>$ 1100.00</td>
                                          <td class="center-align"><a href="#" class="text-decoration-none"><i class="feather-trash-2 text-danger "></i></a></td>
                                       </tr>
                                       <tr>
                                        <td>Michael Austin</td>
                                        <td>ABC Fintech LTD.</td>
                                        <td>Jan 1,2019</td>
                                        <td><span class="badge rounded-pill bg-danger">Close</span></td>
                                        <td>$ 1000.00</td>
                                        <td class="center-align"><a href="#" class="text-decoration-none"><i class="feather-trash-2 text-danger "></i></a></td>
                                     </tr>
                                     <tr>
                                        <td>Aldin Rakić</td>
                                        <td>ACME Pvt LTD.</td>
                                        <td>Jan 10,2019</td>
                                        <td><span class="badge rounded-pill bg-success">Open</span></td>
                                        <td>$ 3000.00</td>
                                        <td class="center-align"><a href="#" class="text-decoration-none"><i class="feather-trash-2 text-danger "></i></a></td>
                                     </tr>
                                     <tr>
                                        <td>İris Yılmaz</td>
                                        <td>Collboy Tech LTD.</td>
                                        <td>Jan 12,2019</td>
                                        <td><span class="badge rounded-pill bg-success">Open</span></td>
                                        <td>$ 2000.00</td>
                                        <td class="center-align"><a href="#" class="text-decoration-none"><i class="feather-trash-2 text-danger "></i></a></td>
                                     </tr>
                                    
                                    </tbody>
                                 </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{ Request::url()}}
                {{ Date('d m Y | h : i : s')}}
@stop
@section('foot')
<script>
    $('.test').click(function(){
        alert('hi')
    })
</script>

@stop