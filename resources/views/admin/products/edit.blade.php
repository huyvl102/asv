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
                <div>Product Edit</div>
            </div>
        </div>
        <!-- / HEADER -->

        <!-- CONTENT -->
        <div class="page-content">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="basic-info-tab-pane" role="tabpanel"
                     aria-labelledby="basic-info-tab">

                    <div class="card p-6">
                        <form action="{{route('admin.product.update',$product->id)}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <input name="name" type="text"
                                       class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       aria-describedby="product name"
                                       value="{{old('name',isset($product->name) ? $product->name:'')}}">
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
                                       aria-describedby="product name"
                                       value="{{old('name_en',isset($product->name_en) ? $product->name_en:'')}}">
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
                                          rows="5">{!!old('description',isset($product->description) ? $product->description:'')!!}
                                </textarea>
                                <label>Product Description</label>
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
                                          rows="5">{!!old('description_en',isset($product->description_en) ? $product->description_en:'')!!}
                                </textarea>
                                <label>Product Description</label>
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
                                                value="{{ $item->id }}" {{ old('category_id') == $item->id || (isset($product) && ($product->category_id == $item->id && $product->category_id != 0))? 'selected' : '' }}>{{ $item->name }}
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
                                @if(isset($product->thumbnail))
                                    <img class="product-image" style="width: 100px"
                                         src="{{url('upload/images/products')}}/{{$product->thumbnail}}"
                                         onerror="this.onerror=null;this.src='{{ asset('assets/images/ecommerce/product-image-placeholder.png') }}';"
                                    >
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

                            <div class="form-group">
                                @if(isset($product))
                                    @foreach($product->image as $img)
                                        <img class="product-image" style="width: 100px"
                                             src="{{url('upload/images/products')}}/{{$img->url}}"
                                             onerror="this.onerror=null;this.src='{{ asset('assets/images/ecommerce/product-image-placeholder.png') }}';"
                                        >
                                        <label>
                                            <a href="{{route('admin.product.deleteImage',$img->id)}}" class="text-red"
                                               onclick="return confirm('Bạn chắc muốn xóa ảnh ?');"> Delete</a>
                                        </label>
                                    @endforeach
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

        $(".confirm_delete").click(function (event) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    var data = $(this).attr('data');
                    $("#delete-form-" + data).submit();
                } else {
                    return false
                }
            })
        });
    </script>
@endsection
