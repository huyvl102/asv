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
                <div class="tab-pane fade active show" id="basic-info-tab-pane" role="tabpanel"
                     aria-labelledby="basic-info-tab">

                    <div class="card p-6">
                        <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                <input name="name" type="text"
                                       class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       aria-describedby="product name">
                                <label>Product Name</label>
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('image') ? ' is-invalid' : '' }}">
                                <input name="image" type="file"
                                       class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}"
                                       aria-describedby="image">
                                <label>Image</label>
                                @if ($errors->has('image'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('image') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                @if (isset($categoryParent) && count($categoryParent))
                                    <select name="parent_id"
                                            class="form-control {{ $errors->has('parent_id') ? ' is-invalid' : '' }}"
                                            id="exampleFormControlSelect1">
                                        <option value="">Select parent category</option>
                                        @foreach($categoryParent as $item)
                                            <option
                                                value="{{ $item->id }}" {{ old('parent_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                @else
                                    <input type="text" class="form-control text-red" aria-describedby="product name"
                                           value="No parent category" disabled="">
                                @endif
                                <label>Parent Category</label>
                                @if ($errors->has('parent_id'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('parent_id') }}
                                    </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-secondary fuse-ripple-ready">
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
