<header class="header header-2 header-intro-clearance">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p>DNT Store thay đổi phong cách của bạn</p>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">Tiếng Việt</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Spanish</a></li>
                                                </ul>
                                            </div>
                                            <!-- End .header-menu -->
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End .top-menu -->
                    </div>
                    <!-- End .header-right -->

                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="fas fa-bars"></i>
                        </button>

                        <a href="index.html" class="logo" style="width: 100px; height: 20px;">
                            <img src="assets/images/148StoreL.png" alt="Molla Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="?act=shop" method="post">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="keyword" id="q" placeholder="Search product ..." required>
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->
                    </div>

                    <div class="header-right">
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
                                            <?php if(isset($_SESSION['isLogin'])){ ?>
                                            <div class="account">
                                                <a href="?act=account&xuli=account">Tài khoản</a>
                                            </div>
                                            <?php } ?>
                                            </li>
                                            
                                            <li>
                                            <div class="account">
                                                <a href="?act=account&xuli=dangxuat">Đăng xuất</a>
                                            </div>
                                            </li>
                                            
                                            <?php }else{ ?>
                                            <li>
                                            <div class="account">
                                                <a href="?act=account">Đăng nhập</a>
                                            </div>
                                            </li>
                                            <li>
                                            <div class="account">
                                                <a href="admin">Admin</a>
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

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                Danh mục
                            </a>

                            <div class="dropdown-menu">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">
                                        <?php 
                                        if($category!=NULL){
                                        foreach($category as $value){
                                        ?>
                                        <li><a href="?act=shop&catid=<?= $value['CategoryID']; ?>"><span><?= $value['CategoryName'] ?><span class="tip tip-new">New</span></span></a></li>
                                        <?php }}?>
                                    </ul>
                                    <!-- End .menu-vertical -->
                                </nav>
                                <!-- End .side-nav -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>
                        <!-- End .category-dropdown -->
                    </div>
                    <!-- End .header-left -->

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="?act=home">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="?act=shop" class="sf-with-ul">Cửa hàng</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Shop with sidebar</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-list.html">Shop List</a></li>
                                                                <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                                                <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                                                <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                                                <li><a href="category-market.html"><span>Shop Market<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>

                                                            <div class="menu-title">Shop no sidebar</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                                                <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Thương Hiệu</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                            <?php 
                                                                if($brand!=NULL){
                                                                foreach($brand as $value){
                                                                ?>
                                                                <li><a href="?act=shop&braid=<?= $value['BrandID']; ?>"><span><?= $value['BrandName'] ?>    </span></a></li>
                                                                <?php }}?>
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

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <div class="menu-title">Product Details</div>
                                                    <!-- End .menu-title -->
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
                                                </div>
                                                <!-- End .menu-col -->
                                            </div>
                                            <!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html">
                                                        <img src="assets/images/menu/banner-2.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div>
                                                            <!-- End .banner-title -->
                                                        </div>
                                                        <!-- End .banner-content -->
                                                    </a>
                                                </div>
                                                <!-- End .banner -->
                                            </div>
                                            <!-- End .col-md-6 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .megamenu megamenu-sm -->
                                </li>
                                <li>
                                    <a href="#" >Liên hệ</a>
                                </li>
                                
                                <li>
                                    <a href="elements-list.html" >Diễn đàn</a>
                                </li>
                            </ul>
                            <!-- End .menu -->
                        </nav>
                        <!-- End .main-nav -->
                    </div>
                    <!-- End .header-center -->

                    <!-- <div class="header-right">
                        <i class="la la-lightbulb-o"></i>
                        <p>Clearance<span class="highlight">&nbsp;Up to 30% Off</span></p>
                    </div> -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->
