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
                            <i class="icon-cube-outline s-6"></i>
                        </div>
                        <div class="logo-text">
                            <div class="h4">Categories</div>
                            <div class="">Total Categories: 20</div>
                        </div>
                    </div>
                </div>
                <!-- / APP TITLE -->
                <!-- SEARCH -->
                <div class="col search-wrapper px-2">

                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-icon">
                                                <i class="icon icon-magnify"></i>
                                            </button>
                                        </span>
                        <input id="products-search-input" type="text" class="form-control" placeholder="Search"
                               aria-label="Search"/>
                    </div>

                </div>
                <!-- / SEARCH -->

                <div class="col-auto">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-light">ADD NEW CATEGORY</a>
                </div>

            </div>
            <!-- / HEADER -->

            <div class="page-content-card">

                <table id="e-commerce-products-table" class="table dataTable">
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
                                <span class="column-title">Category</span>
                            </div>
                        </th>

                        <th>
                            <div class="table-header">
                                <span class="column-title">Price</span>
                            </div>
                        </th>

                        <th>
                            <div class="table-header">
                                <span class="column-title">Quantity</span>
                            </div>
                        </th>

                        <th>
                            <div class="table-header">
                                <span class="column-title">Active</span>
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

                    <tr>
                        <td>1</td>
                        <td>
                            <img class="product-image" src="../assets/images/ecommerce/product-image-placeholder.png">
                        </td>
                        <td>Printed Dress</td>
                        <td>Dresses</td>
                        <td>10.24</td>
                        <td>3</td>
                        <td>true</td>
                        <td>
                            <button type="button" class="btn btn-icon" aria-label="Product details">
                                <i class="icon icon-pencil s-4"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>
                            <img class="product-image" src="../assets/images/ecommerce/product-image-placeholder.png">
                        </td>
                        <td>Green Skirt</td>
                        <td>Skirts</td>
                        <td>24.62</td>
                        <td>92</td>
                        <td>true</td>
                        <td>
                            <button type="button" class="btn btn-icon" aria-label="Product details">
                                <i class="icon icon-pencil s-4"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>
                            <img class="product-image" src="../assets/images/ecommerce/product-image-placeholder.png">
                        </td>
                        <td>Printed Dress</td>
                        <td>Dresses</td>
                        <td>49.29</td>
                        <td>60</td>
                        <td>true</td>
                        <td>
                            <button type="button" class="btn btn-icon" aria-label="Product details">
                                <i class="icon icon-pencil s-4"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>
                            <img class="product-image" src="../assets/images/ecommerce/product-image-placeholder.png">
                        </td>
                        <td>White T-Shirt</td>
                        <td>T-Shirts</td>
                        <td>69.11</td>
                        <td>101</td>
                        <td>false</td>
                        <td>
                            <button type="button" class="btn btn-icon" aria-label="Product details">
                                <i class="icon icon-pencil s-4"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>
                            <img class="product-image" src="../assets/images/ecommerce/product-image-placeholder.png">
                        </td>
                        <td>Red Hoodie</td>
                        <td>Hoodies</td>
                        <td>10.24</td>
                        <td>19</td>
                        <td>true</td>
                        <td>
                            <button type="button" class="btn btn-icon" aria-label="Product details">
                                <i class="icon icon-pencil s-4"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>
                            <img class="product-image" src="../assets/images/ecommerce/product-image-placeholder.png">
                        </td>
                        <td>Red Hoodie</td>
                        <td>Hoodies</td>
                        <td>59.36</td>
                        <td>101</td>
                        <td>true</td>
                        <td>
                            <button type="button" class="btn btn-icon" aria-label="Product details">
                                <i class="icon icon-pencil s-4"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>
                            <img class="product-image" src="../assets/images/ecommerce/product-image-placeholder.png">
                        </td>
                        <td>Summer Dress</td>
                        <td>Dresses</td>
                        <td>64.21</td>
                        <td>34</td>
                        <td>true</td>
                        <td>
                            <button type="button" class="btn btn-icon" aria-label="Product details">
                                <i class="icon icon-pencil s-4"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>
                            <img class="product-image" src="../assets/images/ecommerce/product-image-placeholder.png">
                        </td>
                        <td>Black Shoes</td>
                        <td>Shoes</td>
                        <td>69.73</td>
                        <td>4</td>
                        <td>false</td>
                        <td>
                            <button type="button" class="btn btn-icon" aria-label="Product details">
                                <i class="icon icon-pencil s-4"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>
                            <img class="product-image" src="../assets/images/ecommerce/product-image-placeholder.png">
                        </td>
                        <td>Yellow Bag</td>
                        <td>Bags</td>
                        <td>57.37</td>
                        <td>58</td>
                        <td>true</td>
                        <td>
                            <button type="button" class="btn btn-icon" aria-label="Product details">
                                <i class="icon icon-pencil s-4"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- / CONTENT -->
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('assets/js/apps/e-commerce/products/products.js') }}"></script>
@endsection
