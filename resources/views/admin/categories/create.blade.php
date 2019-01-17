@extends('admin.layouts.master')
@section('content')
    <div id="e-commerce-product" class="page-layout simple tabbed">
        <!-- HEADER -->
        <div class="page-header bg-primary text-auto row no-gutters align-items-center justify-content-between p-6">
            <div class="row no-gutters align-items-center">
                <a href="{{ route('admin.product.list') }}" class="btn btn-icon mr-4 fuse-ripple-ready">
                    <i class="icon icon-arrow-left"></i>
                </a>
                <div class="product-image mr-4">
                    <img src="{{ asset('assets/images/ecommerce/product-image-placeholder.png') }}">
                </div>
                <div>Category Create</div>
            </div>
        </div>
        <!-- / HEADER -->

        <!-- CONTENT -->
        <div class="page-content">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="basic-info-tab-pane" role="tabpanel" aria-labelledby="basic-info-tab">

                    <div class="card p-6">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" aria-describedby="product name">
                                <label>Product Name</label>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" aria-describedby="product description" rows="5"></textarea>
                                <label>Product Description</label>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" aria-describedby="product categories">
                                <label>Categories</label>
                            </div>

                            <button type="button" class="btn btn-secondary fuse-ripple-ready">
                                SAVE
                            </button>
                            <a href="{{ route('admin.category.list') }}" class="btn btn-light fuse-ripple-ready">
                                CANCEL
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / CONTENT -->
    </div>
@endsection
