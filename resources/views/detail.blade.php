@extends('layouts.app')

@section('content')
    <main class="cd-main-content">
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
                            @foreach($product->image as $img)
                                <div class="owl-carousel" id="sync1">
                                    <a href="{{url('upload/images/products')}}/{{$img->url}}" data-fancybox="images"
                                       title=""><img
                                            src="{{url('upload/images/products')}}/{{$img->url}}" alt="" title=""> </a>

                                </div>
                                <div class="owl-carousel" id="sync2">
                                    <a href="" title="">
                                        <img src="{{url('upload/images/products')}}/{{$img->url}}" alt="" title="">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="product-info">
                            <h1>{{ __('messenger.big_detail') }}</h1>
                            <p>
                                @if(session()->has('locale') && session('locale') == 'en')
                                    {!! $product->description_en !!}
                                @else
                                    {!! $product->description !!}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-plus product-related">
            <div class="container">
                <h2 class="text-center title-i"><span>{{ __('messenger.Similar_Products') }}</span></h2>
                <h3 class="title-child"><span>{{$product->category->name}}</span></h3>
                <div class="row">
                    @if(session()->has('locale') && session('locale') == 'en')
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
                    @else
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
                    @endif
                </div>
            </div>
        </section>
        @include('layouts.contact')
    </main>
@endsection
