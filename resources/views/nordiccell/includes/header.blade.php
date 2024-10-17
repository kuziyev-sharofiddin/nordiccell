<header class="header-wrapper">
    <span class="icon-hamburger"></span>

    <div class="logo" itemscope itemtype="http://schema.org/Organization">
        <a class="logo__link" itemprop="url" href="/" rel="nofollow" title="Home">
            <img style="width:120px;" src="/wp-content/themes/nordiccell/assets/dist/img/img_1.png">
        </a>
    </div> <!-- logo -->

    <div class="service-menu-wrapper">
        <div class="service-menu-inner">
            <div id="service-menu" class="widget-area service-menu"><aside id="nav_menu-9" class="widget widget_nav_menu"><div class="menu-header-service-menu-container"><ul id="menu-header-service-menu" class="menu"><li class="menu__item"><a href="tel:+45%207025%201535" class="menu__link">+998 97 130 5790</a></li>
                            <li class="menu__item"><a href="mailto:info@nordiccell.com" class="menu__link">info@invitrotech.com</a></li>
                        </ul></div></aside></div>					<ul class="menu-icon-login">
                <li>
                    @if(auth()->user())
                    <a href="{{route('nordiccell.logout')}}" title="Go to your account">
                        <div><svg width="101" height="107" viewbox="0 0 101 107" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50.9662 0.527452C44.4299 0.52545 38.0651 2.61873 32.8059 6.50006C27.5468 10.3814 23.6703 15.8463 21.7454 22.0928C19.8206 28.3393 19.9487 35.0383 22.1111 41.2065C24.2734 47.3748 28.3561 52.6875 33.7598 56.3648C24.3813 59.8046 16.2468 65.9724 10.4032 74.0742C4.55953 82.1761 1.27416 91.8414 0.969895 101.826C0.936731 102.932 1.34408 104.005 2.10232 104.81C2.86056 105.615 3.90758 106.086 5.01306 106.119C6.11854 106.153 7.19192 105.745 7.99706 104.987C8.8022 104.229 9.27316 103.182 9.30632 102.076C9.63728 91.247 14.1718 80.9721 21.9489 73.429C29.7261 65.8859 40.1347 61.6674 50.969 61.6674C61.8033 61.6674 72.2119 65.8859 79.9891 73.429C87.7662 80.9721 92.3008 91.247 92.6317 102.076C92.6359 102.631 92.7509 103.18 92.97 103.69C93.1891 104.2 93.5078 104.661 93.9074 105.046C94.307 105.431 94.7795 105.732 95.2972 105.933C95.8149 106.133 96.3673 106.227 96.9221 106.211C97.4769 106.195 98.0228 106.068 98.5278 105.838C99.0329 105.608 99.4869 105.279 99.8633 104.871C100.24 104.463 100.531 103.984 100.72 103.462C100.908 102.94 100.991 102.386 100.963 101.832C100.659 91.846 97.3745 82.1795 91.5308 74.0765C85.6871 65.9736 77.552 59.805 68.1726 56.3648C73.5764 52.6875 77.659 47.3748 79.8214 41.2065C81.9837 35.0383 82.1119 28.3393 80.187 22.0928C78.2622 15.8463 74.3857 10.3814 69.1265 6.50006C63.8674 2.61873 57.5025 0.52545 50.9662 0.527452ZM28.7358 31.0944C28.7358 25.1985 31.0779 19.5441 35.2469 15.375C39.4159 11.206 45.0703 8.86388 50.9662 8.86388C56.8621 8.86388 62.5165 11.206 66.6856 15.375C70.8546 19.5441 73.1967 25.1985 73.1967 31.0944C73.1967 36.9902 70.8546 42.6447 66.6856 46.8137C62.5165 50.9827 56.8621 53.3248 50.9662 53.3248C45.0703 53.3248 39.4159 50.9827 35.2469 46.8137C31.0779 42.6447 28.7358 36.9902 28.7358 31.0944Z" fill="#00467F"></path></svg></div>
                        <span>{{auth()->user()->customer_name}}</span>
                    </a>
                    @else
                        <a href="{{route('login')}}" title="Go to your account">
                            <div><svg width="101" height="107" viewbox="0 0 101 107" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50.9662 0.527452C44.4299 0.52545 38.0651 2.61873 32.8059 6.50006C27.5468 10.3814 23.6703 15.8463 21.7454 22.0928C19.8206 28.3393 19.9487 35.0383 22.1111 41.2065C24.2734 47.3748 28.3561 52.6875 33.7598 56.3648C24.3813 59.8046 16.2468 65.9724 10.4032 74.0742C4.55953 82.1761 1.27416 91.8414 0.969895 101.826C0.936731 102.932 1.34408 104.005 2.10232 104.81C2.86056 105.615 3.90758 106.086 5.01306 106.119C6.11854 106.153 7.19192 105.745 7.99706 104.987C8.8022 104.229 9.27316 103.182 9.30632 102.076C9.63728 91.247 14.1718 80.9721 21.9489 73.429C29.7261 65.8859 40.1347 61.6674 50.969 61.6674C61.8033 61.6674 72.2119 65.8859 79.9891 73.429C87.7662 80.9721 92.3008 91.247 92.6317 102.076C92.6359 102.631 92.7509 103.18 92.97 103.69C93.1891 104.2 93.5078 104.661 93.9074 105.046C94.307 105.431 94.7795 105.732 95.2972 105.933C95.8149 106.133 96.3673 106.227 96.9221 106.211C97.4769 106.195 98.0228 106.068 98.5278 105.838C99.0329 105.608 99.4869 105.279 99.8633 104.871C100.24 104.463 100.531 103.984 100.72 103.462C100.908 102.94 100.991 102.386 100.963 101.832C100.659 91.846 97.3745 82.1795 91.5308 74.0765C85.6871 65.9736 77.552 59.805 68.1726 56.3648C73.5764 52.6875 77.659 47.3748 79.8214 41.2065C81.9837 35.0383 82.1119 28.3393 80.187 22.0928C78.2622 15.8463 74.3857 10.3814 69.1265 6.50006C63.8674 2.61873 57.5025 0.52545 50.9662 0.527452ZM28.7358 31.0944C28.7358 25.1985 31.0779 19.5441 35.2469 15.375C39.4159 11.206 45.0703 8.86388 50.9662 8.86388C56.8621 8.86388 62.5165 11.206 66.6856 15.375C70.8546 19.5441 73.1967 25.1985 73.1967 31.0944C73.1967 36.9902 70.8546 42.6447 66.6856 46.8137C62.5165 50.9827 56.8621 53.3248 50.9662 53.3248C45.0703 53.3248 39.4159 50.9827 35.2469 46.8137C31.0779 42.6447 28.7358 36.9902 28.7358 31.0944Z" fill="#00467F"></path></svg></div>
                            <span>Log in</span>
                        </a>
                    @endif
                </li>
            </ul>
            <ul id="header-cart" class="site-header-cart">
                <li class="">
                    <a class="cart-contents" href="{{route('show_cart')}}" title="View your shopping cart">
				<span class="count">
					<i class="fas fa-shopping-cart"></i>
															<span class="number-item" id="cart-count">0</span>
					<span class="count-seperator">/</span>
				</span>
                        <span class="woocommerce-Price-amount amount">0,00&nbsp;<span class="woocommerce-Price-currencySymbol">EUR</span></span></a>
                </li>
                <li>
                    <div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content"></div></div></li>
            </ul>
        </div>
    </div>

    @include('nordiccell.includes.sidebar')

</header>