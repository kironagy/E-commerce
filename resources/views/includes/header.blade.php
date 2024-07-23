<header class="main-header_area">
    <div class="transparent-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="transparent-header_nav position-relative">
                        <div class="header-logo_area">
                            <a href="/">
                                <img src="{{ asset('assets/images/logo.png') }}" style="width: 100px;" alt="Header Logo">
                            </a>
                        </div>
                        <div class="main-menu_area d-none d-lg-block">
                            <nav class="main-nav d-flex justify-content-center">
                                <ul>
                                    <li class="dropdown-holder"><a href="/">{{ __('message.Home') }}</a>

                                    </li>
                                    <li class="megamenu-holder position-static"><a
                                            href="{{ route('ShopLeft') }}">{{ __('message.Shop') }}
                                            <i class="ion-chevron-down"></i></a>
                                        <ul class="kenne-megamenu">
                                            @php
                                                $categories = App\Models\Category::All();
                                            @endphp
                                            @foreach ($categories as $category)
                                                <li><span class="megamenu-title">{{ $category->categories_name }}</span>
                                                    <ul>
                                                        @foreach ($category->subCategory as $sub)
                                                            <li><a
                                                                    href="{{ route('ShopLeft', ['id' => $sub->id]) }}">{{ $sub->subcategoriesName }}</a>
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)">{{ __('message.Pages') }} <i
                                                class="ion-chevron-down"></i></a>
                                        <ul class="kenne-dropdown">

                                            <li><a href="{{ route('profile') }}">{{ __('message.Profile') }}</a></li>
                                            <li><a href="{{ route('wishlist') }}">{{ __('message.Wishlist') }}</a>
                                            </li>
                                            <li><a href="{{ route('wallet') }}">{{ __('message.Wallet') }}</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('design') }}">{{ __('message.Desgine') }}</a></li>

                                    <li><a href="{{ route('auction') }}">{{ __('message.AUCTIONS') }}</a></li>

                                </ul>
                            </nav>
                        </div>
                        <div class="header-right_area header-right_area-2">
                            <ul>
                                <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                    <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                        <i class="ion-android-menu"></i>
                                    </a>
                                </li>
                                <li class="minicart-wrap">
                                    <a href="#miniCart" class="minicart-btn toolbar-btn text-dark">
                                        <div class="minicart-count_area">
                                            @if (auth()->check())
                                                <span class="item-count">{{ auth()->user()->carts->count() }}</span>
                                            @else
                                                <span class="item-count">0</span>
                                            @endif

                                            <i class="ion-bag"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#searchBar" class="search-btn toolbar-btn">
                                        <i class="ion-ios-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#offcanvasMenu"
                                        class="menu-btn toolbar-btn color--white d-none d-lg-block">
                                        <i class="ion-android-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sticky-header_nav position-relative">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-2 col-sm-6">
                                <div class="header-logo_area">
                                    <a href="/">
                                        <img src="/assets/images/logo.png" style="width: 100px;" alt="Header Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 d-none d-lg-block position-static">
                                <div class="main-menu_area">
                                    <nav class="main-nav d-flex justify-content-center">
                                        <ul>
                                            <li class="dropdown-holder"><a href="/">{{ __('message.Home') }}</a>

                                            </li>
                                            <li class="megamenu-holder position-static"><a
                                                    href="shop-left-sidebar.html">{{ __('message.Shop') }} <i
                                                        class="ion-chevron-down"></i></a>
                                                <ul class="kenne-megamenu">
                                                    @php
                                                        $categories = App\Models\Category::All();
                                                    @endphp
                                                    @foreach ($categories as $category)
                                                        <li><span
                                                                class="megamenu-title">{{ $category->categories_name }}</span>
                                                            <ul>
                                                                @foreach ($category->subCategory as $sub)
                                                                    <li><a
                                                                            href="shop-fullwidth.html">{{ $sub->subcategoriesName }}</a>
                                                                    </li>
                                                                @endforeach

                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0)">{{ __('message.Pages') }} <i
                                                        class="ion-chevron-down"></i></a>
                                                <ul class="kenne-dropdown">
                                                    <li><a
                                                            href="{{ route('profile') }}">{{ __('message.Profile') }}</a>
                                                    </li>
                                                    <li><a href="">{{ __('message.Wishlist') }}</a></li>
                                                    <li><a href="{{ route('wallet') }}">{{ __('message.Wallet') }}</a>
                                                    </li>


                                                </ul>
                                            </li>
                                            <li><a href="{{ route('design') }}">{{ __('message.Desgine') }}</a></li>

                                            <li><a href="{{ route('auction') }}">{{ __('message.AUCTIONS') }}</a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="header-right_area header-right_area-2">
                                    <ul>
                                        <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                        <li class="minicart-wrap">
                                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                <div class="minicart-count_area">
                                                    @if (auth()->check())
                                                        <span
                                                            class="item-count">{{ auth()->user()->carts->count() }}</span>
                                                    @else
                                                        <span class="item-count">0</span>
                                                    @endif

                                                    <i class="ion-bag"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#searchBar" class="search-btn toolbar-btn">
                                                <i class="ion-ios-search"></i>
                                            </a>
                                        </li>
                                        <li class="d-none d-lg-inline-block">
                                            <a href="#offcanvasMenu" class="menu-btn toolbar-btn color--white">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-minicart_wrapper" id="miniCart">
        <div class="offcanvas-menu-inner">
            <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
            <div class="minicart-content">
                <div class="minicart-heading">
                    <h4>Shopping Cart</h4>
                </div>
                <ul class="minicart-list">
                    @if (isset(auth()->user()->carts))
                        @foreach (auth()->user()->carts as $cart)
                            <li class="minicart-product">
                                <a class="product-item_remove"
                                    href="{{ route('cart.destroy', ['id' => $cart->basket_id]) }}"><i
                                        class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="{{ asset('allImages/' . $cart->product->cover[0]) }}">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title"
                                        href="shop-left-sidebar.html">{{ $cart->product->item_name }}</a>

                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="minicart-item_total">
                <span></span>
                <span class="ammount"></span>
            </div>
            <div class="minicart-btn_area">
                <a href="{{ route('cart') }}" class="kenne-btn kenne-btn_fullwidth">Minicart</a>
            </div>
            <div class="minicart-btn_area">
                <a href="{{ route('checkout') }}" class="kenne-btn kenne-btn_fullwidth">Checkout</a>
            </div>
        </div>
    </div>
    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <a href="#" class="btn-close white-close_btn"><i class="ion-android-close"></i></a>
                <div class="offcanvas-inner_logo">
                    <a href="/">
                        <img src="/assets/images/logo.png" style="width: 100px;" alt="Header Logo">
                    </a>
                </div>
                <nav class="offcanvas-navigation">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children active"><a href="/"><span
                                    class="mm-text">{{ __('message.Home') }}</span></a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">
                                <span class="mm-text">{{ __('message.Shop') }}</span>
                            </a>
                            <ul class="sub-menu">
                                @foreach ($categories as $category)
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">{{ $category->categories_name }}</span>
                                        </a>
                                        <ul class="sub-menu">
                                            @foreach ($category->subCategory as $sub)
                                                <li>
                                                    <a href="shop-fullwidth.html">
                                                        <span class="mm-text">{{ $sub->subcategoriesName }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">
                                <span class="mm-text">{{ __('message.Pages') }}</span>
                            </a>

                            <ul class="sub-menu">
                                <li><a href="{{ route('wallet') }}">Wallet</a></li>

                                <li>
                                    <a href="my-account.html">
                                        <span class="mm-text">{{ __('message.MY_ACCOUNT') }}</span>
                                    </a>
                                </li>
                                <li>
                                    @if (auth()->check())
                                        <a href="{{ route('profile') }}">
                                            <span class="mm-text">Profile</span>
                                        </a>
                                    @else
                                        <a href="{{ route('login-register') }}">
                                            <span class="mm-text">Login | Register</span>
                                        </a>
                                    @endif

                                </li>
                                <li>
                                    <a href="{{ route('wishlist') }}">
                                        <span class="mm-text">Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html">
                                        <span class="mm-text">Cart</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="checkout.html">
                                        <span class="mm-text">Checkout</span>
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ route('design') }}">
                                <span class="mm-text">{{ __('message.Desgine') }}</span>
                            </a>
                            <a href="{{ route('auction') }}">
                                <span class="mm-text">{{ __('message.AUCTIONS') }}</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="offcanvas-navigation user-setting_area">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children active">
                            <a href="#">
                                <span class="mm-text">User
                                    Setting
                                </span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="my-account.html">
                                        <span class="mm-text">My Account</span>
                                    </a>
                                </li>
                                <li>
                                    @if (auth()->check())
                                        <a href="{{ route('profile') }}">
                                            <span class="mm-text">Profile</span>
                                        </a>
                                    @else
                                        <a href="{{ route('login-register') }}">
                                            <span class="mm-text">Login | Register</span>
                                        </a>
                                    @endif

                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#"><span
                                    class="mm-text">{{ __('message.LANGUAGE') }}</span></a>
                            <ul class="sub-menu">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="offcanvas-menu_wrapper" id="offcanvasMenu">
        <div class="offcanvas-menu-inner">
            <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
            <div class="offcanvas-inner_logo">
                <a href="{{ route('ShopLeft') }}">
                    <img src="/assets/images/logo.png" style="width: 100px;" alt="Munoz's Offcanvas Logo">
                </a>
            </div>

            <div class="offcanvas-component">
                <span class="offcanvas-component_title">{{ __('message.LANGUAGE') }}</span>
                <ul class="offcanvas-component_menu">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="offcanvas-component">
                <span class="offcanvas-component_title">{{ __('message.MY_ACCOUNT') }}</span>
                <ul class="offcanvas-component_menu">
                    @if (auth()->check())
                        <li><a href="{{ route('profile') }}">Profile</a></li>
                    @else
                        <li><a href="{{ route('login-register') }}">{{ __('message.Register') }}</a></li>
                        <li><a href="{{ route('login-register') }}">{{ __('message.Login') }}</a></li>
                    @endif

                </ul>
            </div>
            <div class="offcanvas-inner-social_link">
                <div class="kenne-social_link">
                    <ul>
                        <li class="facebook">
                            <a href="https://www.facebook.com" data-bs-toggle="tooltip" target="_blank"
                                title="Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li class="youtube">
                            <a href="https://www.youtube.com" data-bs-toggle="tooltip" target="_blank"
                                title="Youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="google-plus">
                            <a href="https://www.plus.google.com/discover" data-bs-toggle="tooltip" target="_blank"
                                title="Google Plus">
                                <i class="fab fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="instagram">
                            <a href="https://rss.com" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-search_wrapper" id="searchBar">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                <!-- Begin Offcanvas Search Area -->
                <div class="offcanvas-search">
                    <form action="{{ route('search') }}" method="get" class="hm-searchbox">
                        <input name="search" type="text" placeholder="Search for item...">
                        <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <!-- Offcanvas Search Area End Here -->
            </div>
        </div>
    </div>
    <div class="global-overlay"></div>
</header>
