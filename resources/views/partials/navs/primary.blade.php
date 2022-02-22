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
    <li class="nav-item"><a href="{{ route('author.list') }}" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium @if (Route::currentRouteName() == 'author.list') active border-bottom border-primary border-width-2 @endif ">Auteurs</a></li>
    <li class="nav-item"><a href="{{ route('pages.contact') }}" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium @if (Route::currentRouteName() == 'pages.contact') active border-bottom border-primary border-width-2 @endif ">Contact</a></li>
    <li class="nav-item"><a href="{{ route('pages.cgv') }}" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium @if (Route::currentRouteName() == 'pages.cgv') active  border-bottom border-primary border-width-2 @endif ">CGV</a></li>
    <li class="nav-item"><a href="{{ route('pages.faq') }}" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium @if (Route::currentRouteName() == 'pages.faq') active  border-bottom border-primary border-width-2 @endif ">FAQ</a></li>
</ul>
