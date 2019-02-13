@extends('layouts.app')

@section('content')
    <main class="cd-main-content">
        <section class="breadcrumbs">
            <div class="container">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="{{ route('home') }}">Trang chủ</a>
                    <a class="breadcrumb-item" href="">Sản phẩm</a>
                    <span class="breadcrumb-item active"> Chi tiết sản phẩm</span>
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
                                    <a href="{{url('upload/images/products')}}/{{$img->url}}" data-fancybox="images"
                                       title=""><img
                                            src="{{url('upload/images/products')}}/{{$img->url}}" alt="" title=""> </a>
                                @endforeach
                            </div>
                            <div class="owl-carousel" id="sync2">
                                @foreach($product->image as $img)
                                    <a href="" title="">
                                        <img src="{{url('upload/images/products')}}/{{$img->url}}" alt="" title="">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="product-info">
                            <h1>CHI TIẾT MÁY</h1>
                            <p>
                                {!! $product->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-plus product-related">
            <div class="container">
                <h2 class="text-center title-i"><span>SẢN PHẨM LIÊN QUAN</span></h2>
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
            </div>
        </section>
        @include('layouts.contact')
    </main>
@endsection
