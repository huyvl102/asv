@extends('layouts.app')

@section('content')
    <main class="cd-main-content">
        <section class="breadcrumbs">
            <div class="container">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="{{ route('home') }}">{{ __('messenger.Home') }}</a>
                    <span class="breadcrumb-item active">{{ __('messenger.Products') }}</span>
                </nav>
            </div>
        </section>
        <section class="product-list">
            <div class="container">
                <h2 class="text-center title-i"><span>{{$mainCategory->name}}</span></h2>
                @if(isset($categories) && $categories->count() > 0)
                    @if(session()->has('locale') && session('locale') == 'en')
                        @foreach ($categories as $key => $category)
                            <div class="product-child">
                                <h3 class="title-child"><span>{{$category->name}}</span></h3>
                                <div class="row">
                                    @if(isset($category->product) && $category->product->count() > 0)
                                        @foreach($category->product as $product)
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
                                        <div class="product-child">
                                            <h3 class="title-child"><span
                                                    class="text-danger">{{ __('messenger.empty') }}</span></h3>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @else
                        @foreach ($categories as $key => $category)
                            <div class="product-child">
                                <h3 class="title-child"><span>{{$category->name}}</span></h3>
                                <div class="row">
                                    @if(isset($category->product) && $category->product->count() > 0)
                                        @foreach($category->product as $product)
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
                                    @else
                                        <div class="product-child">
                                            <h3 class="title-child"><span
                                                    class="text-danger">{{ __('messenger.empty') }}</span></h3>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endif
                @else
                    <div class="product-child">
                        <h3 class="title-child"><span class="text-danger">{{ __('messenger.empty') }}</span></h3>
                    </div>
                @endif
            </div>
        </section>
        <section class="product-plus">
            <div class="container">
                <h2 class="text-center title-i"><span>{{ __('messenger.Other_products') }}</span></h2>
                <div class="row">
                    @if(session()->has('locale') && session('locale') == 'en')
                        @foreach($otherCategory as $key=> $otherProduct)
                            <div class="pro-item relative"
                                 style="background: url({{url('upload/images/categories/'.$otherProduct->image['url'])}}) no-repeat center /cover"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/ecommerce/product-image-placeholder.png') }}';">
                                <div class="pro-abs flex-center-center absolute">
                                    <div class="pro-cache text-center">
                                        <p>0{{$otherProduct->id}}.</p>
                                        <h3>{{$otherProduct->name_en}}</h3>
                                        <p>
                                            <a href="{{ route('product.product',['id'=>$otherProduct->id]) }}" title="">
                                                {{ __('messenger.Details') }}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @foreach($otherCategory as $key=> $otherProduct)
                            <div class="pro-item relative"
                                 style="background: url({{url('upload/images/categories/'.$otherProduct->image['url'])}}) no-repeat center /cover"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/ecommerce/product-image-placeholder.png') }}';">
                                <div class="pro-abs flex-center-center absolute">
                                    <div class="pro-cache text-center">
                                        <p>0{{$otherProduct->id}}.</p>
                                        <h3>{{$otherProduct->name}}</h3>
                                        <p>
                                            <a href="{{ route('product.product',['id'=>$otherProduct->id]) }}" title="">
                                                {{ __('messenger.Details') }}
                                            </a>
                                        </p>
                                    </div>
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
