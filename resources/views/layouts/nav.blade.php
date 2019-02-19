<nav id="cd-lateral-nav" class=" visible-mobile">
    <ul class="cd-navigation nav-dropdown">
        <li><a href="{{ route('home') }}" title="">Trang chủ</a></li>
        @if(request()->is('/'))
            <li><a href="#about-us" title="">Về chúng tôi</a></li>
            <li><a href="#product" title="">Sản phẩm</a></li>
        @endif
        <li><a href="#contact-us" title="">Liên hệ</a></li>
    </ul>
    <div class="header-social">
        <a href="https://business.facebook.com/Gia-c%C3%B4ng-c%C6%A1-kh%C3%AD-ch%C3%ADnh-x%C3%A1c-160759294493084"
           title="" class="fa fa-facebook"></a>
        <a href="#" title="" class="fa fa-youtube-play"></a>
        <a href="https://www.pinterest.com/nvoi/"
           title="" class="fa fa-pinterest"></a>
    </div>
</nav>
