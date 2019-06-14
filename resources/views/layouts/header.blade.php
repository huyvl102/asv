<header>
    <?php $current_lang = Config::get('app.locale'); ?>
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-6 flex-center">
                    <div class="header-contact">
                        <a href="tel:0949925888" title="">+84 94 992 5888</a>
                        <a href="mailto:contact@asvco.vn" title="">contact@asvco.vn</a>
                    </div>

                </div>
                <div class="col-md-3 col-lg-6 visible-desktop text-right">
                    <div class="language relative">
                        @if($current_lang === 'vn')
                            <a href="{!! route('change-language', ['en']) !!}" title="">
                                <img class="flag"  src="{{ asset('images/picture/image_england.png') }}"
                                     style="padding-left: 10px;width:32px">
                            </a>
                        @else
                            <a href="{!! route('change-language', ['vn']) !!}" title="">
                                <img class="flag" src="{{ asset('images/picture/Vietnam.png') }}"
                                     style="padding-left: 10px">
                            </a>
                        @endif
                    </div>
                    <div class="header-social">
                        <a target="_blank" rel="noopener noreferrer"
                           href="https://www.facebook.com/Gia-c%C3%B4ng-c%C6%A1-kh%C3%AD-ch%C3%ADnh-x%C3%A1c-160759294493084"
                           title="facebook" class="fa fa-facebook"></a>
                        <a target="_blank" rel="noopener noreferrer"
                           href="https://www.youtube.com/channel/UCe3Zl3Tj1y2d6KmNVFvJ-zw" title="youtube"
                           class="fa fa-youtube-play"></a>
                        <a target="_blank" rel="noopener noreferrer" href="https://www.pinterest.com/nvoi/"
                           title="pinterest" class="fa fa-pinterest"></a>
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
                        <a id="cd-menu-trigger" href="#" class=""><span class="cd-menu-icon"></span></a>
                    </div>
                </div>
                <div class="col-md-8 visible-desktop">
                    <div class="header-nav">
                        <ul>
                            <li><a href="{{ route('home') }}" title="">{{ __('messenger.Home') }}</a></li>
                            @if(request()->is('/'))
                                <li><a href="#about-us" title="">{{ __('messenger.About_us') }}</a></li>
                                <li><a href="#product" title="">{{ __('messenger.Products') }}</a></li>
                            @endif
                            <li><a href="#contact-us" title="">{{ __('messenger.Contact') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
