<nav id="cd-lateral-nav" class=" visible-mobile">
    <ul class="cd-navigation nav-dropdown">
        <li><a href="{{ route('home') }}" title="">{{ __('messenger.Home') }}</a></li>
        @if(request()->is('/'))
            <li><a href="#about-us" title="">{{ __('messenger.About_us') }}</a></li>
            <li><a href="#product" title="">{{ __('messenger.Products') }}</a></li>
        @endif
        <li><a href="#contact-us" title="">{{ __('messenger.Contact') }}</a></li>
    </ul>
    <div class="header-social">
        <a target="_blank" rel="noopener noreferrer"
           href="https://www.facebook.com/Gia-c%C3%B4ng-c%C6%A1-kh%C3%AD-ch%C3%ADnh-x%C3%A1c-160759294493084"
           title="facebook" class="fa fa-facebook"></a>
        <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UCe3Zl3Tj1y2d6KmNVFvJ-zw"
           title="youtube" class="fa fa-youtube-play"></a>
        <a target="_blank" rel="noopener noreferrer" href="https://www.pinterest.com/nvoi/" title="pinterest"
           class="fa fa-pinterest"></a>
    </div>
</nav>
