<ul class="nav">
    <li class="nav-item dropdown">
        <a href="{{ route('home') }}" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center @if (Route::currentRouteName() == 'home') active  border-bottom border-primary border-width-2"@endif">Accueil</a>
    </li>

    <li class="nav-item dropdown">
        <a id="shopDropdownInvoker" href="#" class="dropdown-toggle nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center"
            aria-haspopup="true"
            aria-expanded="false"
            data-unfold-event="hover"
            data-unfold-target="#shopDropdownMenu"
            data-unfold-type="css-animation"
            data-unfold-duration="200"
            data-unfold-delay="50"
            data-unfold-hide-on-scroll="true"
            data-unfold-animation-in="slideInUp"
            data-unfold-animation-out="fadeOut">
            Categories
        </a>
        <ul id="shopDropdownMenu" class="dropdown-unfold dropdown-menu font-size-2 rounded-0 border-gray-900" aria-labelledby="shopDropdownInvoker">
            <li class="position-relative">
                <a id="shopDropdownsubmenuoneInvoker" href="#" class="dropdown-toggle dropdown-item dropdown-item__sub-menu link-black-100 d-flex align-items-center justify-content-between"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="hover"
                    data-unfold-target="#shopDropdownsubMenuone"
                    data-unfold-type="css-animation"
                    data-unfold-duration="200"
                    data-unfold-delay="100"
                    data-unfold-hide-on-scroll="true"
                    data-unfold-animation-in="slideInUp"
                    data-unfold-animation-out="fadeOut">Shop List
                </a>
                <ul id="shopDropdownsubMenuone" class="dropdown-unfold dropdown-menu dropdown-sub-menu font-size-2 rounded-0 border-gray-900" aria-labelledby="shopDropdownsubmenuoneInvoker">
                    <li><a href="../shop/v1.html" class="dropdown-item link-black-100">Shop List v1</a></li>
                    <li><a href="../shop/v2.html" class="dropdown-item link-black-100">Shop List v2</a></li>
                    <li><a href="../shop/v3.html" class="dropdown-item link-black-100">Shop List v3</a></li>
                    <li><a href="../shop/v4.html" class="dropdown-item link-black-100">Shop List v4</a></li>
                    <li><a href="../shop/v5.html" class="dropdown-item link-black-100">Shop List v5</a></li>
                    <li><a href="../shop/v6.html" class="dropdown-item link-black-100">Shop List v6</a></li>
                    <li><a href="../shop/v7.html" class="dropdown-item link-black-100">Shop List v7</a></li>
                    <li><a href="../shop/v8.html" class="dropdown-item link-black-100">Shop List v8</a></li>
                    <li><a href="../shop/v9.html" class="dropdown-item link-black-100">Shop List v9</a></li>
                </ul>
            </li>
            <li class="position-relative">
                <a id="shopDropdownsubmenutwoInvoker" href="#" class="dropdown-toggle dropdown-item dropdown-item__sub-menu link-black-100 d-flex align-items-center justify-content-between"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="hover"
                    data-unfold-target="#shopDropdownsubMenutwo"
                    data-unfold-type="css-animation"
                    data-unfold-duration="200"
                    data-unfold-delay="100"
                    data-unfold-hide-on-scroll="true"
                    data-unfold-animation-in="slideInUp"
                    data-unfold-animation-out="fadeOut">Single Product
                </a>
                <ul id="shopDropdownsubMenutwo" class="dropdown-unfold dropdown-menu dropdown-sub-menu font-size-2 rounded-0 border-gray-900" aria-labelledby="shopDropdownsubmenutwoInvoker">
                    <li><a href="../shop/single-product-v1.html" class="dropdown-item link-black-100">Shop Single v1</a></li>
                    <li><a href="../shop/single-product-v2.html" class="dropdown-item link-black-100">Shop Single v2</a></li>
                    <li><a href="../shop/single-product-v3.html" class="dropdown-item link-black-100">Shop Single v3</a></li>
                    <li><a href="../shop/single-product-v4.html" class="dropdown-item link-black-100">Shop Single v4</a></li>
                    <li><a href="../shop/single-product-v5.html" class="dropdown-item link-black-100">Shop Single v5</a></li>
                    <li><a href="../shop/single-product-v6.html" class="dropdown-item link-black-100">Shop Single v6</a></li>
                    <li><a href="../shop/single-product-v7.html" class="dropdown-item link-black-100">Shop Single v7</a></li>
                </ul>
            </li>
            <li><a href="../shop/cart.html" class="dropdown-item link-black-100">Shop cart</a></li>
            <li><a href="../shop/checkout.html" class="dropdown-item link-black-100">Shop checkout</a></li>
            <li><a href="../shop/my-account.html" class="dropdown-item link-black-100">Shop My Account</a></li>
            <li><a href="../shop/order-received.html" class="dropdown-item link-black-100">Shop Order Received</a></li>
            <li><a href="../shop/order-tracking.html" class="dropdown-item link-black-100">Shop Order Tracking</a></li>
            <li><a href="../shop/store-location.html" class="dropdown-item link-black-100">Shop Store Location</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a id="featuresDropdownInvoker" href="#" class="dropdown-toggle nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center"
            aria-haspopup="true"
            aria-expanded="false"
            data-unfold-event="hover"
            data-unfold-target="#featuresDropdownMenu"
            data-unfold-type="css-animation"
            data-unfold-duration="200"
            data-unfold-delay="50"
            data-unfold-hide-on-scroll="true"
            data-unfold-animation-in="slideInUp"
            data-unfold-animation-out="fadeOut">
            Auteurs
        </a>
        <div id="featuresDropdownMenu" class="p-0 dropdown-unfold dropdown-menu megamenu font-size-2 rounded-0 border-gray-900" aria-labelledby="featuresDropdownInvoker" style="width:1100px;">
            <div class="row no-gutters">
                <div class="col-8 px-1">
                    <div class="px-5 py-2 pb-5">
                        <div class="row">
                            <div class="col-3">
                                <ul class="menu list-unstyled">
                                    <li><span class=" d-block link-black-100 py-3 font-size-3 font-weight-medium">Home</span></li>
                                    <li><a href="../home/index.html" class="d-block link-black-100 py-1">Home v1</a></li>
                                    <li><a href="../home/home-v2.html" class="d-block link-black-100 py-1">Home v2</a></li>
                                    <li><a href="../home/home-v3.html" class="d-block link-black-100 py-1">Home v3</a></li>
                                    <li><a href="../home/home-v4.html" class="d-block link-black-100 py-1">Home v4</a></li>
                                    <li><a href="../home/home-v5.html" class="d-block link-black-100 py-1">Home v5</a></li>
                                    <li><a href="../home/home-v6.html" class="d-block link-black-100 py-1">Home v6</a></li>
                                    <li><a href="../home/home-v7.html" class="d-block link-black-100 py-1">Home v7</a></li>
                                    <li><a href="../home/home-v8.html" class="d-block link-black-100 py-1">Home v8</a></li>
                                    <li><a href="../home/home-v9.html" class="d-block link-black-100 py-1">Home v9</a></li>
                                    <li><a href="../home/home-v10.html" class="d-block link-black-100 py-1">Home v10</a></li>
                                    <li><a href="../home/home-v11.html" class="d-block link-black-100 py-1">Home v11</a></li>
                                    <li><a href="../home/home-v12.html" class="d-block link-black-100 py-1">Home v12</a></li>
                                    <li><a href="../home/home-v13.html" class="d-block link-black-100 py-1">Home v13</a></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul class="menu list-unstyled">
                                    <li><span class=" d-block link-black-100 py-3 font-size-3 font-weight-medium">Single Product</span></li>
                                    <li><a href="../shop/single-product-v1.html" class="d-block link-black-100 py-1">Single Product v1</a></li>
                                    <li><a href="../shop/single-product-v2.html" class="d-block link-black-100 py-1">Single Product v2</a></li>
                                    <li><a href="../shop/single-product-v3.html" class="d-block link-black-100 py-1">Single Product v3</a></li>
                                    <li><a href="../shop/single-product-v4.html" class="d-block link-black-100 py-1">Single Product v4</a></li>
                                    <li><a href="../shop/single-product-v5.html" class="d-block link-black-100 py-1">Single Product v5</a></li>
                                    <li><a href="../shop/single-product-v6.html" class="d-block link-black-100 py-1">Single Product v6</a></li>
                                    <li><a href="../shop/single-product-v7.html" class="d-block link-black-100 py-1">Single Product v7</a></li>
                                    <li><span class=" d-block link-black-100 py-3 font-size-3 font-weight-medium">Shop Pages</span></li>
                                    <li><a href="../shop/cart.html" class="d-block link-black-100 py-1">Shop cart</a></li>
                                    <li><a href="../shop/checkout.html" class="d-block link-black-100 py-1">Shop checkout</a></li>
                                    <li><a href="../shop/my-account.html" class="d-block link-black-100 py-1">Shop My Account</a></li>
                                    <li><a href="../shop/order-received.html" class="d-block link-black-100 py-1">Shop Order Received</a></li>
                                    <li><a href="../shop/order-tracking.html" class="d-block link-black-100 py-1">Shop Order Tracking</a></li>
                                    <li><a href="../shop/store-location.html" class="d-block link-black-100 py-1">Shop Store Location</a></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul class="menu list-unstyled">
                                    <li><span class=" d-block link-black-100 py-3 font-size-3 font-weight-medium">Shop List</span></li>
                                    <li><a href="../shop/v1.html" class="d-block link-black-100 py-1">Shop List v1</a></li>
                                    <li><a href="../shop/v2.html" class="d-block link-black-100 py-1">Shop List v2</a></li>
                                    <li><a href="../shop/v3.html" class="d-block link-black-100 py-1">Shop List v3</a></li>
                                    <li><a href="../shop/v4.html" class="d-block link-black-100 py-1">Shop List v4</a></li>
                                    <li><a href="../shop/v5.html" class="d-block link-black-100 py-1">Shop List v5</a></li>
                                    <li><a href="../shop/v6.html" class="d-block link-black-100 py-1">Shop List v6</a></li>
                                    <li><a href="../shop/v7.html" class="d-block link-black-100 py-1">Shop List v7</a></li>
                                    <li><a href="../shop/v8.html" class="d-block link-black-100 py-1">Shop List v8</a></li>
                                    <li><a href="../shop/v9.html" class="d-block link-black-100 py-1">Shop List v9</a></li>
                                    <li><span class=" d-block link-black-100 py-3 font-size-3 font-weight-medium">Blog</span></li>
                                    <li><a href="../blog/blog-v1.html" class="d-block link-black-100 py-1">Blog v1</a></li>
                                    <li><a href="../blog/blog-v2.html" class="d-block link-black-100 py-1">Blog v2</a></li>
                                    <li><a href="../blog/blog-v3.html" class="d-block link-black-100 py-1">Blog v3</a></li>
                                    <li><a href="../blog/blog-single.html" class="d-block link-black-100 py-1">Blog Single</a></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul class="menu list-unstyled">
                                    <li><span class=" d-block link-black-100 py-3 font-size-3 font-weight-medium">Others</span></li>
                                    <li><a href="../others/404.html" class="d-block link-black-100 py-1">404</a></li>
                                    <li><a href="../others/about.html" class="d-block link-black-100 py-1">About Us</a></li>
                                    <li><a href="../others/authors-list.html" class="d-block link-black-100 py-1">Authors List</a></li>
                                    <li><a href="../others/authors-single.html" class="d-block link-black-100 py-1">Authors Single</a></li>
                                    <li><a href="../others/coming-soon.html" class="d-block link-black-100 py-1">Coming Soon</a></li>
                                    <li><a href="../others/contact.html" class="d-block link-black-100 py-1">Contact Us</a></li>
                                    <li><a href="../others/faq.html" class="d-block link-black-100 py-1">FAQ</a></li>
                                    <li><a href="../others/pricing-table.html" class="d-block link-black-100 py-1">Pricing Table</a></li>
                                    <li><a href="../others/terms-conditions.html" class="d-block link-black-100 py-1">Terms Conditions</a></li>
        <li><a href="../../documentation/index.html" class="btn btn-primary mb-3 mb-md-0 mb-xl-3 mt-4 font-size-2 btn-block">Documentation</a></li>
        <li><a href="../../starter/index.html" class="btn btn-secondary font-size-2 btn-block mb-2">Starter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 bg-gray-200">
                    <div class="banner px-8 py-5">
                        <div class="banner__body">
                            <h3 class="banner_text m-0">
                                <span class="d-block mb-1 font-size-7 font-weight-regular">Deals in </span>
                                <span class="d-block mb-2 font-size-10 text-primary font-weight-bold">Books</span>
                            </h3>
                            <a href="#" class="d-block link-black-100 mb-6">Shop Now</a>
                            <div class="banner__image">
                                <img src="/assets/img/Paperback.png" class="img-fluid" alt="image-description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="nav-item"><a href="{{ route('pages.contact') }}" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium @if (Route::currentRouteName() == 'pages.contact') active border-bottom border-primary border-width-2 @endif ">Contact</a></li>
    <li class="nav-item"><a href="{{ route('pages.cgv') }}" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium @if (Route::currentRouteName() == 'pages.cgv') active  border-bottom border-primary border-width-2 @endif ">CGV</a></li>
    <li class="nav-item"><a href="{{ route('pages.faq') }}" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium @if (Route::currentRouteName() == 'pages.faq') active  border-bottom border-primary border-width-2 @endif ">FAQ</a></li>
</ul>
