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
                <div>Product Create</div>
            </div>
        </div>
        <!-- / HEADER -->

        <!-- CONTENT -->
        <div class="page-content">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="basic-info-tab-pane" role="tabpanel"
                     aria-labelledby="basic-info-tab">

                    <div class="card p-6">
                        <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <input name="name" type="text"
                                       class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       aria-describedby="product name" value="{{old('name')}}">
                                <label>Product Name (VN)</label>
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <input name="name_en" type="text"
                                       class="form-control {{ $errors->has('name_en') ? ' is-invalid' : '' }}"
                                       aria-describedby="product name" value="{{old('name_en')}}">
                                <label>Product Name (EN)</label>
                                @if ($errors->has('name_en'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name_en') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <textarea name="description" id="editor1" rows="10" cols="80"
                                          class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
                                          aria-describedby="product description"
                                          rows="5">{{old('description')}}
                                </textarea>
                                <label>Product Description (VN)</label>
                                @if ($errors->has('description'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <textarea name="description_en" id="editor2" rows="10" cols="80"
                                          class="form-control {{ $errors->has('description_en') ? ' is-invalid' : '' }}"
                                          aria-describedby="product description"
                                          rows="5">{{old('description_en')}}
                                </textarea>
                                <label>Product Description (EN)</label>
                                @if ($errors->has('description_en'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('description_en') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                @if (isset($categories) && count($categories))
                                    <select name="category_id"
                                            class="form-control {{ $errors->has('category_id') ? ' is-invalid' : '' }}"
                                            id="exampleFormControlSelect1">
                                        <option value="">Select category</option>
                                        @foreach($categories as $item)
                                            <option
                                                value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                @else
                                    <input type="text" class="form-control text-red" aria-describedby="product name"
                                           value="No category" disabled="">
                                @endif
                                <label>Category</label>
                                @if ($errors->has('category_id'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('category_id') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <input name="thumbnail" type="file"
                                       class="form-control {{ $errors->has('thumbnail') ? ' is-invalid' : '' }}"
                                       aria-describedby="thumbnail">
                                <label>Thumbnail</label>
                                @if ($errors->has('thumbnail'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('thumbnail') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <input name="images[]" type="file" multiple
                                       class="form-control {{ $errors->has('images') ? ' is-invalid' : '' }}"
                                       aria-describedby="images">
                                <label>Image</label>
                                @if ($errors->has('images'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('images') }}
                                    </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-secondary fuse-ripple-ready">
                                SAVE
                            </button>
                            <a href="{{ route('admin.product.list') }}" class="btn btn-light fuse-ripple-ready">
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
@section('script')
    <script>
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
    </script>
@endsection
