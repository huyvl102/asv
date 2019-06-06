@extends('layouts.app')

@section('content')
    <main class="cd-main-content">
        <br>
        <section class="breadcrumbs">
            <div class="container">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="{{ route('home') }}">{{ __('messenger.Home') }}</a>
                    <a class="breadcrumb-item" href="">{{ __('messenger.Products') }}</a>
                    <span class="breadcrumb-item active">{{ __('messenger.Product_Detail') }}</span>
                </nav>
            </div>
        </section>
        <section class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="product-gallery">
                            <div class="owl-carousel" id="sync1">
                                @foreach($product->image as $img)
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a data-size="1024x1024" href="{{url('upload/images/products')}}/{{$img->url}}" data-fancybox="images"
                                           title=""><img
                                                src="{{url('upload/images/products')}}/{{$img->url}}" alt="" title=""
                                                style="height: 400px">
                                        </a>
                                    </figure>
                                @endforeach
                            </div>
                            <div class="owl-carousel" id="sync2">
                                @foreach($product->image as $img)
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a data-size="1024x1024" href="" title="">
                                            <img src="{{url('upload/images/products')}}/{{$img->url}}" alt="" title="">
                                        </a>
                                    </figure>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="product-info">
                            @if(session()->has('locale') && session('locale') == 'en')
                                <h1>{{$product->name_en}}</h1>
                                <p>
                                    {!! $product->description_en !!}
                                </p>
                            @else
                                <h1>{{$product->name}}</h1>
                                <p>
                                    {!! $product->description !!}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-plus product-related">
            <div class="container">
                <h2 class="text-center title-i"><span>{{ __('messenger.Similar_Products') }}</span></h2>
                @if(session()->has('locale') && session('locale') == 'en')
                    <h3 class="title-child"><span>{{$product->category->name_en}}</span></h3>
                    <div class="row">
                        @foreach ($otherProduct as $key => $product)
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="images-p">
                                        <a href="{{ route('product.detail',['id'=>$product->id]) }}"
                                           title=""
                                           class="product-image"
                                           style="background: url({{url('upload/images/products')}}/{{$product->image->first()['url']}}) no-repeat center /cover"
                                           onerror="this.onerror=null;this.src='{{ asset('assets/images/ecommerce/product-image-placeholder.png') }}';"
                                        ></a>
                                    </div>
                                    <h4><a href="{{ route('product.detail',['id'=>$product->id]) }}"
                                           title="">{{$product->name_en}}</a></h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h3 class="title-child"><span>{{$product->category->name}}</span></h3>
                    <div class="row">
                        @foreach ($otherProduct as $key => $product)
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="images-p">
                                        <a href="{{ route('product.detail',['id'=>$product->id]) }}"
                                           title=""
                                           class="product-image"
                                           style="background: url({{url('upload/images/products')}}/{{$product->image->first()['url']}}) no-repeat center /cover"
                                           onerror="this.onerror=null;this.src='{{ asset('assets/images/ecommerce/product-image-placeholder.png') }}';"
                                        ></a>
                                    </div>
                                    <h4><a href="{{ route('product.detail',['id'=>$product->id]) }}"
                                           title="">{{$product->name}}</a></h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
        @include('layouts.contact')
    </main>
@endsection

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>
