@extends('User.layouts.index')

@section('content')
@include('User.partials.header.heronav')
 <!--============= Product Auction Section Starts Here =============-->
 <div class="product-auction padding-bottom">
        <div class="container">
            <div class="row mb--50">
                <div class="col-lg-4 mb-50">
                    <div class="widget">
                        <h5 class="title">Filter by Price</h5>
                        <div class="widget-body">
                            <div id="slider-range"></div>
                            <div class="price-range">
                                <label for="amount">Price :</label>
                                <input type="text" id="amount" readonly>
                            </div>
                        </div>
                        <div class="text-center mt-20">
                            <a href="#0" class="custom-button">Filter</a>
                        </div>
                    </div>
                    <div class="widget">
                        <h5 class="title">Auction Type</h5>
                        <div class="widget-body">
                            <div class="widget-form-group">
                                <input type="checkbox" name="check-by-type" id="check1">
                                <label for="check1">Live Auction</label>
                            </div>
                            <div class="widget-form-group">
                                <input type="checkbox" name="check-by-type" id="check2">
                                <label for="check2">Timed Auction</label>
                            </div>
                            <div class="widget-form-group">
                                <input type="checkbox" name="check-by-type" id="check3">
                                <label for="check3">Buy Now</label>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <h5 class="title">Ending Within</h5>
                        <div class="widget-body">
                            <div class="widget-form-group">
                                <input type="checkbox" name="check-by-type" id="day">
                                <label for="day">1 Day</label>
                            </div>
                            <div class="widget-form-group">
                                <input type="checkbox" name="check-by-type" id="week">
                                <label for="week">1 Week</label>
                            </div>
                            <div class="widget-form-group">
                                <input type="checkbox" name="check-by-type" id="month1">
                                <label for="month1">1 Month</label>
                            </div>
                            <div class="widget-form-group">
                                <input type="checkbox" name="check-by-type" id="month3">
                                <label for="month3">3 Month</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mb-50">
                    <div class="product-header mb-40 style-2">
                        <div class="product-header-item">
                            <div class="item">Sort By : </div>
                            <select name="sort-by" class="select-bar">
                                <option value="all">All</option>
                                <option value="name">Name</option>
                                <option value="date">Date</option>
                                <option value="type">Type</option>
                                <option value="car">Car</option>
                            </select>
                        </div>
                        <div class="product-header-item">
                            <div class="item">Show : </div>
                            <select name="sort-by" class="select-bar">
                                <option value="09">06</option>
                                <option value="21">09</option>
                                <option value="30">30</option>
                                <option value="39">39</option>
                                <option value="60">60</option>
                            </select>
                        </div>
                        <form class="product-search ml-auto">
                            <input type="text" placeholder="Item Name">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="row mb-30-none justify-content-center">
                        <div class="col-sm-10 col-md-6">
                            <div class="auction-item-2">
                                <div class="auction-thumb">
                                    <a href="product-details.html"><img src="{{ asset('User/images/auction/product/10.png')}}" alt="product"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="#0">Juste un Clou ring</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-money"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Buy Now</div>
                                                <div class="amount">$5,00.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter10"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="#0" class="custom-button">Submit a bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-6">
                            <div class="auction-item-2">
                                <div class="auction-thumb">
                                    <a href="product-details.html"><img src="{{ asset('User/images/auction/product/12.png')}}" alt="product"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="#0">Love Ring SM</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-money"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Buy Now</div>
                                                <div class="amount">$5,00.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter12"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="#0" class="custom-button">Submit a bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-6">
                            <div class="auction-item-2">
                                <div class="auction-thumb">
                                    <a href="product-details.html"><img src="{{ asset('User/images/auction/product/13.png')}}" alt="product"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="#0">Gold & Diamond Bracelet</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-money"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Buy Now</div>
                                                <div class="amount">$5,00.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter13"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="#0" class="custom-button">Submit a bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-6">
                            <div class="auction-item-2">
                                <div class="auction-thumb">
                                    <a href="product-details.html"><img src="{{ asset('User/images/auction/product/14.png')}}" alt="product"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="#0">Heart Cluster Cuff</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-money"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Buy Now</div>
                                                <div class="amount">$5,00.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter14"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="#0" class="custom-button">Submit a bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-6">
                            <div class="auction-item-2">
                                <div class="auction-thumb">
                                    <a href="product-details.html"><img src="{{ asset('User/images/auction/product/15.png')}}" alt="product"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="#0">Rolled Diamond Edges</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-money"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Buy Now</div>
                                                <div class="amount">$5,00.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter15"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="#0" class="custom-button">Submit a bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-6">
                            <div class="auction-item-2">
                                <div class="auction-thumb">
                                    <a href="product-details.html"><img src="{{ asset('User/images/auction/product/11.png')}}" alt="product"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="#0">Juste un Clou ring</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-money"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Buy Now</div>
                                                <div class="amount">$5,00.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter11"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="#0" class="custom-button">Submit a bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination">
                        <li>
                            <a href="#0"><i class="flaticon-left-arrow"></i></a>
                        </li>
                        <li>
                            <a href="#0">1</a>
                        </li>
                        <li>
                            <a href="#0" class="active">2</a>
                        </li>
                        <li>
                            <a href="#0">3</a>
                        </li>
                        <li>
                            <a href="#0"><i class="flaticon-right-arrow"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection