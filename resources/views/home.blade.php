@extends('layouts.app')

@section('content')
    <main class="cd-main-content">
        <section class="banner text-right">
            <div class="container">
                <h2>Công ty TNHH Công nghiệp và Thương mại ASV.</h2>
                <h1>DỊCH VỤ CÓ TÂM - SẢN PHẨM CÓ TẦM.</h1>
            </div>
        </section>
        <section class="about-index" id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-slider owl-carousel">
                            <a href="#" title=""><img src="{{ asset('images/picture/about.png') }}" alt="" title="">
                            </a>
                            <a href="#" title=""><img src="{{ asset('images/picture/about.png') }}" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-index-text">
                            <h2>ASV - GIỚI THIỆU</h2>
                            <p>Bắt đầu gia nhập thị trường từ năm 2002, CÔNG TY TNHH CÔNG NGHIỆP VÀ THƯƠNG
                                MẠI ASV (tiền thân là CÔNG TY TNHH ĐA HÌNH) đã luôn cập nhật ứng dụng công
                                nghệ trong sản xuất cơ khí tạo ra các sản phẩm có phẩm cấp được khách
                                hàng
                                (Đặc biệt là khách hàng FDI) đón nhận và đánh giá cao đáp ứng cho các lĩnh
                                vực: Cơ khí chính xác, chế tạo máy và cơ khí xây dựng.</p>
                            <p>Đến nay, công ty ASV đã đầu tư các trang thiết bị hiện đại mới 100% bao gồm:
                                Các
                                máy gia công cơ CNC, máy cắt laser CNC, máy chấn CNC... Chúng tôi đã cung cấp
                                cho
                                khách hàng các sản phẩm chất lượng cao bao gồm: Dịch vụ gia công cơ CNC,
                                dịch
                                vụ gia công tấm CNC, chế tạo máy, tự động hóa, cửa thép, cửa chống cháy
                                và
                                quạt công nghiệp. </p>
                            <p>VỚI TRIẾT LÝ:“DỊCH VỤ CÓ TÂM - SẢN PHẨM CÓ TẦM” Công ty TNHH Công nghiệp
                                và
                                Thương mại ASV khẳng định sẽ luôn là đối tác song hành</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="advantages">
            <div class="container">
                <div class="advantages-wrapper flex-center">
                    <div class="advantages-item advantages-item-11">
                        <div class="advantages-image"></div>
                        <h3>Accuracy </h3>
                    </div>
                    <div class="advantages-item advantages-item-12">
                        <div class="advantages-image"></div>
                        <h3>Speed </h3>
                    </div>
                    <div class="advantages-item advantages-item-13">
                        <div class="advantages-image"></div>
                        <h3>Value </h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="index-product" id="product">
            <h2 class="text-center title-i"><span><a href="product.html" title="">SẢN PHẨM</a> </span></h2>
            <div class="pro-wrapper">
                @foreach ($categories as $key => $category)
                    <div class="pro-item relative"
                         style="background: url({{url('upload/images/categories/'.$category->image['url'])}}) no-repeat center /cover" onerror="this.onerror=null;this.src='{{ asset('assets/images/ecommerce/product-image-placeholder.png') }}';">
                        <div class="pro-abs flex-center-center absolute">
                            <div class="pro-cache text-center">
                                <p>0{{$category->id}}.</p>
                                <h3>{{$category->name}}</h3>
                                <p><a href="{{ route('product.product',['id'=>$category->id]) }}" title="">Chi tiết</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="commitment">
            <div class="container">
                <h2 class="text-center text-uppercase h2-abs">CAM KẾT CHẤT LƯỢNG</h2>
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="commitment-item">
                            <h3>01</h3>
                            <h2>Tư vấn miễn phí</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="commitment-item">
                            <h3>02</h3>
                            <h2>Đội ngũ kỹ sư và
                                thợ thi công chuyên
                                nghiệp, tâm huyết
                                với nghề</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="commitment-item">
                            <h3>03</h3>
                            <h2>Bảo hành lâu dài</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.contact')
    </main>
@endsection
