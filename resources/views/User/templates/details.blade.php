@extends('User.layouts.index')

@section('content')
@include('User.partials.header.heronav')
    <!--============= Product Details Section Starts Here =============-->
    <section class="product-details padding-bottom mt--240 mt-lg--440">
        <div class="container">
            <div class="product-details-slider-top-wrapper">
                <div class="product-details-slider owl-theme owl-carousel" id="sync1">
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="{{ asset('User/images/product/product1.png')}}" alt="product">
                        </div>
                    </div>
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="{{ asset('User/images/product/product2.png')}}" alt="product">
                        </div>
                    </div>
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="{{ asset('User/images/product/product3.png')}}" alt="product">
                        </div>
                    </div>
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="{{ asset('User/images/product/product4.png')}}" alt="product">
                        </div>
                    </div>
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="{{ asset('User/images/product/product5.png')}}" alt="product">
                        </div>
                    </div>
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="{{ asset('User/images/product/product6.png')}}" alt="product">
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-details-slider-wrapper">
                <div class="product-bottom-slider owl-theme owl-carousel" id="sync2">
                    <div class="slide-bottom-item">
                        <div class="slide-inner">
                            <img src="{{ asset('User/images/product/01.png')}}" alt="product">
                        </div>
                    </div>
                    <div class="slide-bottom-item">
                        <div class="slide-inner">
                            <img src="{{ asset('User/images/product/02.png')}}" alt="product">
                        </div>
                    </div>
                    <div class="slide-bottom-item">
                        <div class="slide-inner">
                            <img src="{{ asset('User/images/product/03.png')}}" alt="product">
                        </div>
                    </div>
                    <div class="slide-bottom-item">
                        <div class="slide-inner">
                            <img src="{{ asset('User/images/product/04.png')}}" alt="product">
                        </div>
                    </div>
                    <div class="slide-bottom-item">
                        <div class="slide-inner">
                            <img src="{{ asset('User/images/product/05.png')}}" alt="product">
                        </div>
                    </div>
                    <div class="slide-bottom-item">
                        <div class="slide-inner">
                            <img src="{{ asset('User/images/product/06.png')}}" alt="product">
                        </div>
                    </div>
                </div>
                <span class="det-prev det-nav">
                    <i class="fas fa-angle-left"></i>
                </span>
                <span class="det-next det-nav active">
                    <i class="fas fa-angle-right"></i>
                </span>
            </div>
            <div class="row mt-40-60-80">
                <div class="col-lg-8">
                    <div class="product-details-content">
                        <div class="product-details-header">
                            <h2 class="title">The Breeze Zodiac IX</h2>
                            <ul>
                                <li>Listing ID: 14076242</li>
                                <li>Item #: 7300-3356862</li>
                            </ul>
                        </div>
                        <ul class="price-table mb-30">
                            <li class="header">
                                <h5 class="current">Current Price</h5>
                                <h3 class="price">US $700.00</h3>
                            </li>
                            <li>
                                <span class="details">Buyer's Premium</span>
                                <h5 class="info">10.00%</h5>
                            </li>
                            <li>
                                <span class="details">Bid Increment (US)</span>
                                <h5 class="info">$50.00</h5>
                            </li>
                        </ul>
                        <div class="product-bid-area">
                            <form class="product-bid-form">
                                <div class="search-icon">
                                    <img src="{{ asset('User/images/product/search-icon.png')}}" alt="product">
                                </div>
                                <input type="text" placeholder="Enter you bid amount">
                                <button type="submit" class="custom-button">Submit a bid</button>
                            </form>
                        </div>
                        <div class="buy-now-area">
                            <a href="#0" class="custom-button">Buy Now: $4,200</a>
                            <a href="#0" class="rating custom-button active border"><i class="fas fa-star"></i> Add to Wishlist</a>
                            <div class="share-area">
                                <span>Share to:</span>
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-sidebar-area">
                        <div class="product-single-sidebar mb-3">
                            <h6 class="title">This Auction Ends in:</h6>
                            <div class="countdown">
                                <div id="bid_counter1"></div>
                            </div>
                            <div class="side-counter-area">
                                <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="{{ asset('User/images/product/icon1.png')}}" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span class="counter">61</span></h3>
                                        <p>Active Bidders</p>
                                    </div>
                                </div>
                            
                                <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="{{ asset('User/images/product/icon3.png')}}" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span class="counter">82</span></h3>
                                        <p>Total Bids</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#0" class="cart-link">View Shipping, Payment & Auction Policies</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tab-menu-area mb-40-60 mt-70-100">
            <div class="container">
              
            </div>
        </div>
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="details">
                    <div class="tab-details-content">
                        <div class="header-area">
                            <h3 class="title">2012 Ford Escape Hybrid (Brooklyn, NY 11214)</h3>
                            <div class="item">
                                <table class="product-info-table">
                                    <tbody>
                                        <tr>
                                            <th>Condition</th>
                                            <td>New</td>
                                        </tr>
                                        <tr>
                                            <th>Mileage</th>
                                            <td>15,000 miles</td>
                                        </tr>
                                        <tr>
                                            <th>Year</th>
                                            <td>09-2017</td>
                                        </tr>
                                        <tr>
                                            <th>Engine</th>
                                            <td>I-4 1,5 l</td>
                                        </tr>
                                        <tr>
                                            <th>Fuel</th>
                                            <td>Regular</td>
                                        </tr>
                                        <tr>
                                            <th>Transmission</th>
                                            <td>Automatic</td>
                                        </tr>
                                        <tr>
                                            <th>Color</th>
                                            <td>Blue</td>
                                        </tr>
                                        <tr>
                                            <th>Doors</th>
                                            <td>5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="item">
                                <h5 class="subtitle">NYC Fleet / DCAS units may be located at either of two locations:</h5>
                                <ul>
                                    <li>Brooklyn, NY (1908 Shore Parkway)</li>
                                    <li>Medford, NY (66 Peconic Ave)</li>
                                </ul>
                            </div>
                            <div class="item">
                                <h5 class="subtitle">This unit is located at:</h5>
                                <ul>
                                    <li>Kenben Industries Ltd.</li>
                                    <li>1908 Shore Parkway</li>
                                    <li>Brooklyn, NY 11214</li>
                                </ul>
                            </div>                                                
                          
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="delevery">
                    <div class="shipping-wrapper">
                        <div class="item">
                            <h5 class="title">shipping</h5>
                            <div class="table-wrapper">
                                <table class="shipping-table">
                                    <thead>
                                        <tr>
                                            <th>Available delivery methods </th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Customer Pick-up (within 10 days)</td>
                                            <td>$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Standard Shipping (5-7 business days)</td>
                                            <td>Not Applicable</td>
                                        </tr>
                                        <tr>
                                            <td>Expedited Shipping (2-4 business days)</td>
                                            <td>Not Applicable</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="item">
                            <h5 class="title">Notes</h5>
                            <p>Please carefully review our shipping and returns policy before committing to a bid.
                            From time to time, and at its sole discretion, Sbidu may change the prevailing fee structure for shipping and handling.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="history">
                    <div class="history-wrapper">
                        <div class="item">
                            <h5 class="title">Bid History</h5>
                            <div class="history-table-area">
                                <table class="history-table">
                                    <thead>
                                        <tr>
                                            <th>Bidder</th>
                                            <th>date</th>
                                            <th>time</th>
                                            <th>unit price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{ asset('User/images/history/01.png')}}" alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Moses Watts
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2020</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{ asset('User/images/history/02.png')}}" alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Pat Powell
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2020</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{ asset('User/images/history/03.png')}}" alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Jack Rodgers
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2020</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{ asset('User/images/history/04.png')}}" alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Arlene Paul
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2020</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{ asset('User/images/history/05.png')}}" alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Marcia Clarke
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2020</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center mb-3 mt-4">
                                    <a href="#0" class="button-3">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--============= Product Details Section Ends Here =============-->

@endsection