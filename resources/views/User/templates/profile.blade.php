@extends('User.layouts.index')

@section('content')
@include('User.partials.header.heronav')
<section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-7 col-lg-4">
                    <div class="dashboard-widget mb-30 mb-lg-0 sticky-menu">
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
                                <a href="{{route('dashboard_route')}}"><i class="flaticon-dashboard"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="{{route('profile_route')}}" class="active"><i class="flaticon-settings"></i>Personal Profile </a>
                            </li>
                            <li>
                                <a href="{{route('mybid_route')}}"><i class="flaticon-auction"></i>My Bids</a>
                            </li>
                         
                           
                          
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Personal Details</h4>
                                    <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                                </div>
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name">Name</div>
                                        <div class="info-value">Albert Owens</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Date of Birth</div>
                                        <div class="info-value">15-03-1974</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Address</div>
                                        <div class="info-value">8198 Fieldstone Dr.La Crosse, WI 54601</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Account Settings</h4>
                                    <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                                </div>
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name">Language</div>
                                        <div class="info-value">English (United States)</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Time Zone</div>
                                        <div class="info-value">(GMT-06:00) Central America</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Status</div>
                                        <div class="info-value"><i class="flaticon-check text-success"></i> Active</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Email Address</h4>
                                    <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                                </div>
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name">Email</div>
                                        <div class="info-value">albert349@gmail.com</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Phone</h4>
                                    <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                                </div>
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name">Mobile</div>
                                        <div class="info-value">+1 234-567-8925</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-pro-item dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Security</h4>
                                    <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                                </div>
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name">Password</div>
                                        <div class="info-value">xxxxxxxxxxxxxxxx</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection