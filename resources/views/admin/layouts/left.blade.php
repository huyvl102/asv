<aside id="aside" class="aside aside-left" data-fuse-bar="aside" data-fuse-bar-media-step="md"
       data-fuse-bar-position="left">
    <div class="aside-content bg-primary-700 text-auto">

        <div class="aside-toolbar">
            <div class="logo">
                <span class="logo-icon">A</span>
                <span class="logo-text">ASV</span>
            </div>
            <button id="toggle-fold-aside-button" type="button" class="btn btn-icon d-none d-lg-block"
                    data-fuse-aside-toggle-fold>
                <i class="icon icon-backburger"></i>
            </button>
        </div>

        <ul class="nav flex-column custom-scrollbar" id="sidenav" data-children=".nav-item">

            <li class="nav-item" role="tab" id="heading-ecommerce">

                <a class="nav-link ripple with-arrow " data-toggle="collapse"
                   data-target="#collapse-ecommerce" href="#" aria-expanded="false"
                   aria-controls="collapse-ecommerce">
                    <i class="icon s-4 icon-package"></i>
                    <span>Products</span>
                </a>
                <ul id="collapse-ecommerce" class='collapse {{ request()->is('admin/product*') ? 'show' : '' }}'
                    role="tabpanel" aria-labelledby="heading-ecommerce"
                    data-children=".nav-item">
                    <li class="nav-item">
                        <a class="nav-link ripple {{ request()->is('admin/product') ? 'active' : '' }}"
                           href="{{ route('admin.product.list') }}"
                           data-url="apps-e-commerce-products.html">
                            <span>List</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ripple {{ request()->is('admin/product/create') ? 'active' : '' }}"
                           href="{{ route('admin.product.create') }}"
                           data-url="apps-e-commerce-products.html">
                            <span>Create</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" role="tab" id="heading-categories">

                <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse"
                   data-target="#collapse-categories" href="#" aria-expanded="false"
                   aria-controls="collapse-categories">
                    <i class="icon s-4 icon-tag"></i>
                    <span>Categories</span>
                </a>
                <ul id="collapse-categories" class='collapse {{ request()->is('admin/category*') ? 'show' : '' }}'
                    role="tabpanel" aria-labelledby="heading-categories"
                    data-children=".nav-item">
                    <li class="nav-item">
                        <a class="nav-link ripple {{ request()->is('admin/category') ? 'active' : '' }}"
                           href="{{ route('admin.category.list') }}"
                           data-url="apps-e-commerce-products.html">
                            <span>List</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ripple {{ request()->is('admin/category/create') ? 'active' : '' }}"
                           href="{{ route('admin.category.create') }}"
                           data-url="apps-e-commerce-products.html">
                            <span>Create</span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</aside>
