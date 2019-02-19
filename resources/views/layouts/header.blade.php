<header>
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-6 flex-center">
                    <div class="header-contact">
                        <a href="#" title="">0949.925.888</a>
                        <a href="#" title="">contact@asvco.vn</a>
                    </div>
                    <div class="language relative" style="display: flex">
                        <a href="{{ route('home') }}" title="">
                            <img class="flag" src="{{ asset('images/picture/Vietnam.png') }}"
                                 style="padding-left: 10px">
                        </a>
                        <a href="xxx" title="">
                            <img class="flag" src="{{ asset('images/picture/England.png') }}"
                                 style="padding-left: 10px">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-6 visible-desktop">
                    <div class="header-social">
                        <a href="https://business.facebook.com/Gia-c%C3%B4ng-c%C6%A1-kh%C3%AD-ch%C3%ADnh-x%C3%A1c-160759294493084"
                           title="" class="fa fa-facebook"></a>
                        <a href="#" title="" class="fa fa-youtube-play"></a>
                        <a href="https://www.pinterest.com/nvoi/"
                           title="" class="fa fa-pinterest"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="{{ route('home') }}" title=""><img src="{{ asset('images/picture/logo.png') }}" alt=""
                                                                    title=""> </a>
                        <a id="cd-menu-trigger" href="#0" class=""><span class="cd-menu-icon"></span></a>
                    </div>
                </div>
                <div class="col-md-8 visible-desktop">
                    <div class="header-nav">
                        <ul>
                            <li><a href="{{ route('home') }}" title="">Trang chủ</a></li>
                            @if(request()->is('/'))
                                <li><a href="#about-us" title="">Về chúng tôi</a></li>
                                <li><a href="#product" title="">Sản phẩm</a></li>
                            @endif
                            <li><a href="#contact-us" title="">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
