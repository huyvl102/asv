@extends('admin.layouts.master')
@section('content')
    <div id="e-commerce-products" class="page-layout carded full-width">
        <div class="top-bg bg-primary"></div>
        <!-- CONTENT -->
        <div class="page-content-wrapper">
            <!-- HEADER -->
            <div class="page-header light-fg row no-gutters align-items-center justify-content-between">
                <!-- APP TITLE -->
                <div class="col-12 col-sm">

                    <div class="logo row no-gutters justify-content-center align-items-start justify-content-sm-start">
                        <div class="logo-icon mr-3 mt-1">
                            <i class="icon-tag-outline s-6"></i>
                        </div>
                        <div class="logo-text">
                            <div class="h4">Categories</div>
                            <div class="">Total Categories: {{$categories->total()}}</div>
                        </div>
                    </div>
                </div>
                <!-- / APP TITLE -->
                <!-- SEARCH -->
                <div class="col search-wrapper px-2">
                    <form action="{{route('admin.category.list')}}" method="GET" role="search">
                        <div class="input-group">
                            <input id="products-search-input" name="keyword" type="text" class="form-control"
                                   placeholder="Search"
                                   aria-label="Search"
                                   value="@if(Request::has('keyword')){{ Request::get('keyword') }}@endif"/>
                            <span class="input-group-btn">
                            <button type="submit" class="btn btn-icon">
                                <i class="icon icon-magnify"></i>
                            </button>
                        </span>
                        </div>
                    </form>
                </div>
                <!-- / SEARCH -->

                <div class="col-auto">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-light">ADD NEW CATEGORY</a>
                </div>

            </div>
            <!-- / HEADER -->

            <div class="page-content-card">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>
                                <div class="table-header">
                                    <span class="column-title">ID</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Image</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Name</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Parent</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Actions</span>
                                </div>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @if(isset($categories) && $categories->count() > 0)
                            @foreach ($categories as $key => $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>
                                        <img class="product-image" style="width: 52px"
                                             src="{{url('upload/images/categories/'.$category->image['url'])}}"
                                             onerror="this.onerror=null;this.src='{{ asset('assets/images/ecommerce/product-image-placeholder.png') }}';"
                                        >
                                    </td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->parentName ? $category->parentName : 'parent'}}</td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE','id' => 'delete-form-'.$category->id ,'route' => ['admin.category.delete', $category->id]]) !!}
                                        <a href="{{ route('admin.category.edit',['id'=>$category->id]) }}"
                                           class="btn btn-icon"
                                           aria-label="Product details">
                                            <i class="icon icon-pencil s-4"></i>
                                        </a>
                                        @if($category->parent_id != null)
                                        <button type="button" data="{{$category->id}}"
                                                class="btn btn-icon confirm_delete" aria-label="Product details">
                                            <i class="icon icon-trash s-4"></i>
                                        </button>
                                        @endif
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="odd">
                                <td valign="top" colspan="4" class="dataTables_empty">No data available in table</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_footer">
                    <div class="pull-right">
                        {{ $categories->appends(['keyword' => Request::get('keyword')])->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- / CONTENT -->
    </div>
@endsection
@section('script')
    <script>
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
