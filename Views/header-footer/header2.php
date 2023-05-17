
        <header class="header header-content">
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <a href="index.html" class="logo">
                            <img src="assets/images/148StoreL.png" alt="Molla Logo" width="80px" height="65px">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="?act=home">Trang Chủ</a>
                                </li>
                                <li>
                                    <a href="category.html" class="sf-with-ul">Cửa hàng</a>
                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Danh mục sản phẩm</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <?php 
                                                                if($category!=NULL){
                                                                foreach($category as $value){
                                                                ?>
                                                                <li><a href="?act=shop&catid=<?= $value['CategoryID']; ?>"><span><?= $value['CategoryName'] ?><span class="tip tip-new">New</span></span></a></li>
                                                                <?php }}?>
                                                            </ul>

                                                            <div class="menu-title">Thương hiệu</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <?php foreach($brand as $value){ ?>
                                                                <li><a href="?act=shop&braid=<?= $value['BrandID']; ?>"><span><?= $value['BrandName'] ?><span class="tip tip-hot">Hot</span></span></a></li>
                                                                <?php }?>
                                                            </ul>
                                                        </div>
                                                        <!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Product Category</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                                                <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>
                                                            <div class="menu-title">Shop Pages</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="cart.html">Cart</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                <li><a href="dashboard.html">My Account</a></li>
                                                                <li><a href="#">Lookbook</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- End .col-md-6 -->
                                                    </div>
                                                    <!-- End .row -->
                                                </div>
                                                <!-- End .menu-col -->
                                            </div>
                                            <!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html" class="banner banner-menu">
                                                        <img src="assets/images/menu/banner-1.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div>
                                                            <!-- End .banner-title -->
                                                        </div>
                                                        <!-- End .banner-content -->
                                                    </a>
                                                </div>
                                                <!-- End .banner banner-overlay -->
                                            </div>
                                            <!-- End .col-md-4 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="product.html" class="sf-with-ul">Product</a>
                                    <ul>
                                        <li><a href="product.html">Default</a></li>
                                        <li><a href="product-centered.html">Centered</a></li>
                                        <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                        <li><a href="product-gallery.html">Gallery</a></li>
                                        <li><a href="product-sticky.html">Sticky Info</a></li>
                                        <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                        <li><a href="product-fullwidth.html">Full Width</a></li>
                                        <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Liên hệ</a>
                                </li>
                                <li>
                                    <a href="elements-list.html">Diễn đàn</a>
                                </li>

                                <li><a href="#">Buy Molla</a></li>
                            </ul>
                            <!-- End .menu -->
                        </nav>
                        <!-- End .main-nav -->

                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="far fa-bars"></i>
                        </button>
                    </div>
                    <!-- End .header-center -->

                    <div class="header-right">
                        <div class="header-search">
                            <form action="?act=shop" method="get">
                                <div class="header-search-wrapper">
                                    <!-- <label for="q" class="sr-only">Search</label> -->
                                    <input type="search" class="form-control" name="search" id="q" placeholder="Search in..." required>
                                </div>
                                <a href="#" class="search-toggle" role="button"></a>
                                    <button type="submit"><i class="far fa-search"></i></button>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="far fa-user-circle "></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-account">
                                        <ul style="margin: 0;">
                                        <?php  if(isset($_SESSION['login'])){ ?>
                                            <li>
                                            <div class="account">
                                                <b>Chào <br> <?=$_SESSION['login']['Fullname']?></b>
                                            </div>
                                            </li>
                                            <li>
                                            <div class="account">
                                                <a href="?act=account&xuli=account">Tài khoản</a>
                                            </div>
                                            </li>
                                            <li>
                                            <div class="account">
                                                <a href="?act=account&xuli=dangxuat">Đăng xuất</a>
                                            </div>
                                            </li>
                                            <li>
                                                <?php if(isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){ ?>
                                            <div class="account">
                                                <a href="admin/?mod=login">Trang quản lý</a>
                                            </div>
                                            </li>
                                            <?php }}else{ ?>
                                            <li>
                                            <div class="account">
                                                <a href="?act=account">Đăng nhập</a>
                                            </div>
                                            </li>
                                            <?php }?>
                                        </ul>
                                </div>
                        </div>

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="far fa-shopping-cart"></i>
                                <span class="cart-count">2</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Beige knitted elastic runner shoes</a>
                                            </h4>
                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span> x $84.00
                                            </span>
                                        </div>
                                        <!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image product-image-sm">
                                                <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="fal fa-times"></i></a>
                                    </div>
                                    <!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span> x $76.00
                                            </span>
                                        </div>
                                        <!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image product-image-sm">
                                                <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="fal fa-times"></i></a>
                                    </div>
                                    <!-- End .product -->
                                </div>
                                <!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div>
                                <!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <!-- End .dropdown-cart-total -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>
                        <!-- End .cart-dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->
        </header>
        <!-- End .header -->