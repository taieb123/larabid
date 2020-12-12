@extends('User.layouts.index')

@section('content')
@include('User.partials.header.heronav')
<section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-7 col-lg-4">
                    <div class="dashboard-widget mb-30 mb-lg-0">
                        <div class="user">
                            <div class="thumb-area">
                                <div class="thumb">
                                    <img src="{{ asset('User/images/dashboard/user.png')}}" alt="user">
                                </div>
                                <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                                <input type="file" id="profile-pic" class="d-none">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#0">Percy Reed</a></h5>
                                <span class="username">john@gmail.com</span>
                            </div>
                        </div>
                        <ul class="dashboard-menu">
                            <li>
                                <a href="{{route('dashboard_route')}}" class="active"><i class="flaticon-dashboard"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="{{route('profile_route')}}"><i class="flaticon-settings"></i>Personal Profile </a>
                            </li>
                            <li>
                                <a href="{{route('mybid_route')}}"><i class="flaticon-auction"></i>My Bids</a>
                            </li>
                          
                          
                         
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dashboard-widget mb-40">
                        <div class="dashboard-title mb-30">
                            <h5 class="title">My Activity</h5>
                        </div>
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="{{ asset('User/images/dashboard/01.png')}}" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><span class="counter">80</span></h2>
                                        <h6 class="info">Active Bids</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="{{ asset('User/images/dashboard/02.png')}}" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><span class="counter">15</span></h2>
                                        <h6 class="info">Items Won</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="{{ asset('User/images/dashboard/03.png')}}" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><span class="counter">115</span></h2>
                                        <h6 class="info">Favorites</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-widget">
                        <h5 class="title mb-10">Purchasing</h5>
                        <div class="dashboard-purchasing-tabs">
                            <ul class="nav-tabs nav">
                                <li>
                                    <a href="#current" class="active" data-toggle="tab">Current</a>
                                </li>
                                <li>
                                    <a href="#pending" data-toggle="tab">Pending</a>
                                </li>
                                <li>
                                    <a href="#history" data-toggle="tab">History</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active fade" id="current">
                                    <table class="purchasing-table">
                                        <thead>
                                            <th>Item</th>
                                            <th>Bid Price</th>
                                            <th>Highest Bid</th>
                                            <th>Lowest Bid</th>
                                            <th>Expires</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane show fade" id="pending">
                                    <table class="purchasing-table">
                                        <thead>
                                            <th>Item</th>
                                            <th>Bid Price</th>
                                            <th>Highest Bid</th>
                                            <th>Lowest Bid</th>
                                            <th>Expires</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane show fade" id="history">
                                    <table class="purchasing-table">
                                        <thead>
                                            <th>Item</th>
                                            <th>Bid Price</th>
                                            <th>Highest Bid</th>
                                            <th>Lowest Bid</th>
                                            <th>Expires</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/2/2020</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Dashboard Section Ends Here =============-->
@endsection