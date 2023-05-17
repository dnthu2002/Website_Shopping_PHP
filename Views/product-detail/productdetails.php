        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
                    </ol>
                </div>
                <!-- End .container -->
            </nav>
            <!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            <img id="product-zoom" src="assets/images/products/single/1.jpg" data-zoom-image="assets/images/products/single/1-big.jpg" alt="product image">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>
                                        </figure>
                                        <!-- End .product-main-image -->

                                        <div id="product-zoom-gallery" class="product-image-gallery">
                                            <a class="product-gallery-item active" href="#" data-image="assets/images/products/single/1.jpg" data-zoom-image="assets/images/products/single/1-big.jpg">
                                                <img src="assets/images/products/single/1-small.jpg" alt="product side">
                                            </a>

                                            <a class="product-gallery-item" href="#" data-image="assets/images/products/single/2.jpg" data-zoom-image="assets/images/products/single/2-big.jpg">
                                                <img src="assets/images/products/single/2-small.jpg" alt="product cross">
                                            </a>

                                            <a class="product-gallery-item" href="#" data-image="assets/images/products/single/3.jpg" data-zoom-image="assets/images/products/single/3-big.jpg">
                                                <img src="assets/images/products/single/3-small.jpg" alt="product with model">
                                            </a>

                                            <a class="product-gallery-item" href="#" data-image="assets/images/products/single/4.jpg" data-zoom-image="assets/images/products/single/4-big.jpg">
                                                <img src="assets/images/products/single/4-small.jpg" alt="product back">
                                            </a>
                                        </div>
                                        <!-- End .product-image-gallery -->
                                    </div>
                                    <!-- End .row -->
                                </div>
                                <!-- End .product-gallery -->
                            </div>
                            <!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title"><?= $data['ProductName']; ?></h1>
                                    <!-- End .product-title -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                        <div class="ratings-val" style="width:
                                            <?php if($rating_pro!=NULL){
                                                foreach($rating_pro as $rating){
                                                    if($rating['ProductID']==$data['ProductID']){
                                                        $rating_avg=($rating['rating']/(5*$rating['rating_count']))*100;
                                                        echo $rating_avg;
                                                    }
                                                }
                                            }
                                            ?>%"></div>
                                        </div>
                                        <!-- End .ratings -->
                                        <span class="ratings-text">( 
                                           <?php foreach($rating_pro as $rating){
                                                    if($rating['ProductID']==$data['ProductID']){
                                                        echo $rating['rating_count'];
                                                    }
                                                }
                                            ?>
                                        Đánh giá )</span>                                    </div>
                                    <!-- End .rating-container -->

                                    <div class="product-price">
                                        Giá: <?= number_format($data['Price'],0,',','.')." "."VNĐ"; ?>
                                    </div>
                                    <!-- End .product-price -->

                                    <div class="product-content">
                                        <?= $data['ProductDesc']; ?>
                                    </div>
                                    <!-- End .product-content -->

                                    <div class="details-filter-row details-row-size">
                                        <label>Color:</label>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #eab656;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #3a588b;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #caab97;"><span class="sr-only">Color name</span></a>
                                        </div>
                                        <!-- End .product-nav -->
                                    </div>
                                    <!-- End .details-filter-row -->

                                    <div class="details-filter-row details-row-size">
                                        <label for="size">Size:</label>
                                        <div class="product-size">
                                            <a href="#" title="Small">S</a>
                                            <a href="#" title="Medium" class="active">M</a>
                                            <a href="#" title="Large" class="disabled">L</a>
                                            <a href="#" title="Extra Large">XL</a>
                                        </div>
                                    </div>
                                    <!-- End .details-filter-row -->

                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Qty:</label>
                                        <div class="quantity buttons_added">
                                            <input type="number" step="1" min="1" max="<?= $data['Quantity']; ?>" name="quantity" value="1" title="Qty" class="input-text qty text" pattern="" inputmode="">
                                        </div>
                                    </div>
                                    <!-- End .details-filter-row -->

                                    <div class="product-details-action">
                                        <a href="#" class="btn-product btn-cart"><span>Thêm vào giỏ hàng</span></a>
                                    </div>
                                    
                                    <!-- End .product-details-action -->

                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>Category:</span>
                                            <a href="#">Women</a>,
                                            <a href="#">Dresses</a>,
                                            <a href="#">Yellow</a>
                                        </div>
                                        <!-- End .product-cat -->

                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label">Share:</span>
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="fab fa-facebook"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="fab fa-pinterest"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details-footer -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <!-- End .col-md-6 -->
                        </div>
                        <!-- End .row -->
                    </div>
                    <!-- End .product-details-top -->

                    <div class="product-details-tab">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3>Product Information</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget
                                        felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.
                                    </p>
                                    <ul>
                                        <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>
                                        <li>Vivamus finibus vel mauris ut vehicula.</li>
                                        <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>
                                    </ul>

                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget
                                        felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.
                                    </p>
                                </div>
                                <!-- End .product-desc-content -->
                            </div>
                            <!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                                <div class="product-desc-content">
                                    <h3>Information</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget
                                        felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>

                                    <h3>Fabric & care</h3>
                                    <ul>
                                        <li>Faux suede fabric</li>
                                        <li>Gold tone metal hoop handles.</li>
                                        <li>RI branding</li>
                                        <li>Snake print trim interior </li>
                                        <li>Adjustable cross body strap</li>
                                        <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                                    </ul>

                                    <h3>Size</h3>
                                    <p>one size</p>
                                </div>
                                <!-- End .product-desc-content -->
                            </div>
                            <!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                                <div class="product-desc-content">
                                    <h3>Delivery & returns</h3>
                                    <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our <a href="#">Delivery information</a><br> We hope you’ll love every purchase, but if you ever need
                                        to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="#">Returns information</a></p>
                                </div>
                                <!-- End .product-desc-content -->
                            </div>
                            <!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                                <div class="reviews">
                                    <h3>Reviews (2)</h3>
                                    <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto">
                                                <h4><a href="#">Samanta J.</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div>
                                                    <!-- End .ratings -->
                                                </div>
                                                <!-- End .rating-container -->
                                                <span class="review-date">6 days ago</span>
                                            </div>
                                            <!-- End .col -->
                                            <div class="col">
                                                <h4>Good, perfect size</h4>

                                                <div class="review-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores assumenda asperiores facilis porro reprehenderit animi culpa atque blanditiis commodi perspiciatis doloremque, possimus,
                                                        explicabo, autem fugit beatae quae voluptas!</p>
                                                </div>
                                                <!-- End .review-content -->

                                                <div class="review-action">
                                                    <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                                    <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                                </div>
                                                <!-- End .review-action -->
                                            </div>
                                            <!-- End .col-auto -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .review -->

                                    <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto">
                                                <h4><a href="#">John Doe</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div>
                                                    <!-- End .ratings -->
                                                </div>
                                                <!-- End .rating-container -->
                                                <span class="review-date">5 days ago</span>
                                            </div>
                                            <!-- End .col -->
                                            <div class="col">
                                                <h4>Very good</h4>

                                                <div class="review-content">
                                                    <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum blanditiis laudantium iste amet. Cum non voluptate eos enim, ab cumque nam, modi, quas iure illum repellendus, blanditiis perspiciatis beatae!</p>
                                                </div>
                                                <!-- End .review-content -->

                                                <div class="review-action">
                                                    <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                                    <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                                </div>
                                                <!-- End .review-action -->
                                            </div>
                                            <!-- End .col-auto -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .review -->
                                </div>
                                <!-- End .reviews -->
                            </div>
                            <!-- .End .tab-pane -->
                        </div>
                        <!-- End .tab-content -->
                    </div>
                    <!-- End .product-details-tab -->

                    <h2 class="title text-center mb-4">You May Also Like</h2>
                    <!-- End .title text-center -->

                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                        <?php foreach($data_lq as $value){ ?>
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-<?php
                                    if($value['ProductStatusID']=='1'){
                                        echo "new";
                                    }elseif($value['ProductStatusID']=='2'){
                                        echo "top";
                                    }else{
                                        echo "sale";
                                    }
                                    ?>"><?= $value['ProductStatusName']; ?></span>
                                    <a href="?act=detail&id=<?= $value['ProductID']?>">
                                        <img src="Admin/upload/<?= $value['Picture'] ?>" alt="Product image" class="product-image">
                                        <img src="Admin/upload/<?= $value['Picture2'] ?>" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="?act=detail&id=<?= $value['ProductID']; ?>" class="btn-product btn-cart"><span>Xem chi tiết</span></a>
                                    </div>
                                    <!-- End .product-action -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#"><?= $value['CategoryName'] ?></a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html"><?= $value['ProductName']?></a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price-sold" >
                                        <div class="product-price">
                                            Giá: <?= number_format($value['Price'],0,',','.')." "."VNĐ"; ?>
                                        </div>
                                        <div class="product-sold">
                                            Đã bán:
                                            <?php
                                            if(isset($count_sold)){
                                                foreach($count_sold as $sold){
                                                    if($sold['ProductID']==$value['ProductID'])                                                   
                                                            echo $sold['quantity'];
                                                                    
                                                }
                                            }
                                                                                                                        
                                            
                                            ?>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width:
                                            <?php if($rating_pro!=NULL){
                                                foreach($rating_pro as $rating){
                                                    if($rating['ProductID']==$value['ProductID']){
                                                        $rating_avg=($rating['rating']/(5*$rating['rating_count']))*100;
                                                        echo $rating_avg;
                                                    }
                                                }
                                            }
                                            ?>%"></div>
                                        </div>
                                        <span class="ratings-text">( 
                                           <?php foreach($rating_pro as $rating){
                                                    if($rating['ProductID']==$value['ProductID']){
                                                        echo $rating['rating_count'];
                                                    }
                                                }
                                            ?>
                                        Đánh giá )</span>
                                    </div>
                                    <!-- End .rating-container -->
                                </div>
                                <!-- End .product-body -->
                            </div>
                            <!-- End .product -->
                        <?php }?>
                    </div>
                    <!-- End .owl-carousel -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .page-content -->
        </main>
        <!-- End .main -->

