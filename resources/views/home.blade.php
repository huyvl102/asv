@extends('layouts.app')

@section('content')
    <main class="cd-main-content">
        <section class="banner text-right">
            <div class="container">
                {{--<h2>Công ty TNHH Công nghiệp và Thương mại ASV.</h2>--}}
                <h1 style="font-size: 40px">DỊCH VỤ CÓ TÂM - SẢN PHẨM CÓ TẦM.</h1>
            </div>
        </section>
        <section class="about-index" id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-slider owl-carousel">
                            <a href="#" title=""><img src="{{ asset('images/picture/slider1.jpg') }}" alt="" title="" style="height: 400px">
                            </a>
                            <a href="#" title=""><img src="{{ asset('images/picture/slider2.jpg') }}" alt="" title="" style="height: 400px">
                            </a>
                            <a href="#" title=""><img src="{{ asset('images/picture/slider3.jpg') }}" alt="" title="" style="height: 400px">
                            </a>
                            <a href="#" title=""><img src="{{ asset('images/picture/slider4.jpg') }}" alt="" title="" style="height: 400px">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-index-text">
                            <h2>{{ __('messenger.ASV_About_us') }}</h2>
                            <p>{{ __('messenger.test_description1') }}</p>
                            <p>{{ __('messenger.test_description2') }}</p>
                            <p>{{ __('messenger.test_description3') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--<section class="advantages">--}}
        {{--<div class="container">--}}
        {{--<div class="advantages-wrapper flex-center">--}}
        {{--<div class="advantages-item advantages-item-11">--}}
        {{--<div class="advantages-image"></div>--}}
        {{--<h3>Accuracy </h3>--}}
        {{--</div>--}}
        {{--<div class="advantages-item advantages-item-12">--}}
        {{--<div class="advantages-image"></div>--}}
        {{--<h3>Speed </h3>--}}
        {{--</div>--}}
        {{--<div class="advantages-item advantages-item-13">--}}
        {{--<div class="advantages-image"></div>--}}
        {{--<h3>Value  </h3>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</section>--}}
        <section class="index-product" id="product">
            <h2 class="text-center title-i"><span><a href="#" title="">{{ __('messenger.big_products') }}</a> </span>
            </h2>
            <div class="pro-wrapper">
                @if(session()->has('locale') && session('locale') == 'en')
                    @foreach ($categories as $key => $category)
                        {{--<div class="pro-item relative product-item"--}}
                        {{--style="background: url({{url('upload/images/categories/'.$category->image['url'])}}) no-repeat center /cover" onerror="this.onerror=null;this.src='{{ asset('assets/images/ecommerce/product-image-placeholder.png') }}';">--}}
                        {{--<div class="pro-abs flex-center-center absolute">--}}
                        {{--<div class="pro-cache text-center">--}}
                        {{--<p>0{{$category->id}}.</p>--}}
                        {{--<h3>{{$category->name}}</h3>--}}
                        {{--<p><a href="{{ route('product.product',['id'=>$category->id]) }}" title="">Chi tiết</a></p>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="pro-item relative product-item">
                            <div class="images-p" style="height: 306px">
                                <div class="product-image"
                                     style="background: url({{url('upload/images/categories/'.$category->image['url'])}}) no-repeat center /cover"
                                     onerror="this.onerror=null;this.src='{{ asset('assets/images/ecommerce/product-image-placeholder.png') }}';">
                                </div>
                            </div>
                            <div class="pro-abs flex-center-center absolute">
                                <div class="pro-cache text-center">
                                    <h3>{{$category->name_en}}</h3>
                                    <p><a href="{{ route('product.product',['id'=>$category->id]) }}"
                                          title="">{{ __('messenger.Details') }}</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @foreach ($categories as $key => $category)
                        <div class="pro-item relative product-item">
                            <div class="images-p" style="height: 306px">
                                <div class="product-image"
                                     style="background: url({{url('upload/images/categories/'.$category->image['url'])}}) no-repeat center /cover"
                                     onerror="this.onerror=null;this.src='{{ asset('assets/images/ecommerce/product-image-placeholder.png') }}';">
                                </div>
                            </div>
                            <div class="pro-abs flex-center-center absolute">
                                <div class="pro-cache text-center">
                                    <h3>{{$category->name}}</h3>
                                    <p><a href="{{ route('product.product',['id'=>$category->id]) }}"
                                          title="">{{ __('messenger.Details') }}</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
        <section class="commitment">
            <div class="container">
                <h2 class="text-center text-uppercase h2-abs">
                    <span style="color: #e2695d">{{ __('messenger.3D') }}</span>
                    {{ __('messenger.CUSTOMER_COMMITMENT') }}</h2>
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="commitment-item">
                            <h2><span
                                    style="color: #e2695d">{{ __('messenger.Accuracy1') }}</span>{{ __('messenger.Accuracy2') }}
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="commitment-item">
                            <h2><span
                                    style="color: #e2695d">{{ __('messenger.Speed1') }}</span>{{ __('messenger.Speed2') }}
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="commitment-item">
                            <h2><span
                                    style="color: #e2695d">{{ __('messenger.Value1') }}</span>{{ __('messenger.Value2') }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.contact')
    </main>
@endsection
