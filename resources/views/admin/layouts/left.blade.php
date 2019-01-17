<aside id="aside" class="aside aside-left" data-fuse-bar="aside" data-fuse-bar-media-step="md" data-fuse-bar-position="left">
    <div class="aside-content bg-primary-700 text-auto">

        <div class="aside-toolbar">
            <div class="logo">
                <span class="logo-icon">A</span>
                <span class="logo-text">ASV</span>
            </div>
            <button id="toggle-fold-aside-button" type="button" class="btn btn-icon d-none d-lg-block" data-fuse-aside-toggle-fold>
                <i class="icon icon-backburger"></i>
            </button>
        </div>

        <ul class="nav flex-column custom-scrollbar" id="sidenav" data-children=".nav-item">

            <li class="nav-item">
                <a class="nav-link ripple active" href="{{ route('admin.home') }}" data-url="index.html">

                    <i class="icon s-4 icon-tile-four"></i>

                    <span>Project Dashboard</span>
                </a>
            </li>

            <li class="nav-item" role="tab" id="heading-ecommerce">

                <a class="nav-link ripple with-arrow " data-toggle="collapse" data-target="#collapse-ecommerce" href="#" aria-expanded="true" aria-controls="collapse-ecommerce">

                    <i class="icon s-4 icon-cart"></i>

                    <span>Ecommerce</span>
                </a>
                <ul id="collapse-ecommerce" class='collapse show' role="tabpanel" aria-labelledby="heading-ecommerce" data-children=".nav-item">

                    <li class="nav-item">
                        <a class="nav-link ripple" href="apps-e-commerce-products.html" data-url="apps-e-commerce-products.html">

                            <span>Products</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link ripple " href="apps-e-commerce-product.html" data-url="apps-e-commerce-products.html">

                            <span>Product</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link ripple " href="apps-e-commerce-orders.html" data-url="apps-e-commerce-products.html">

                            <span>Orders</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link ripple " href="apps-todo.html" data-url="apps-e-commerce-products.html">

                    <i class="icon s-4 icon-checkbox-marked"></i>

                    <span>To-Do</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
