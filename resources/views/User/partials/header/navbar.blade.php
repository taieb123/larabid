<header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper justify-content-end">
                    <ul class="cart-button-area">
                        <li>
                            <a href="#0" class="cart-button"><i class="flaticon-shopping-basket"></i><span class="amount">08</span></a>
                        </li>
                        @guest
                            <li>
                                <a href="{{ route('login') }}" class="user-button"><i class="flaticon-user"></i></a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="{{ route('home_route') }}">
                            <img src="{{ asset('User/images/logo/logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="{{ route('home_route') }}">Home</a>
                        </li>
                        <li>
                            <a href="product.html">Auction</a>
                        </li>
                        <li>
                            <a href="product.html">Product</a>
                        </li>
                        @auth
                            <li><a href="">Profile</a></li>
                            <li><a href="{{ route('create_offer') }}">Ajouter produit</a></li>
                        @endauth
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <form class="search-form">
                        <input type="text" placeholder="Search for brand, model....">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="search-bar d-md-none">
                        <a href="#0"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
