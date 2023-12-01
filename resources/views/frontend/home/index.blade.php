@extends('frontend.master')
@section('title', 'Largest ..... Brand in BD')
@section('body')

    <!--Home slider-->
    <section class="slideshow slideshow-wrapper">
        <div class="home-slideshow">
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload desktop-hide" data-src="{{asset('/')}}frontend/assets/images/slideshow/demo2-banner1.jpg" src="{{asset('/')}}frontend/assets/images/slideshow/demo2-banner1.jpg" alt="HIGH CONVERTING" title="HIGH CONVERTING" />
                    <img class="blur-up lazyload mobile-hide" data-src="{{asset('/')}}frontend/assets/images/slideshow/demo2-banner1-m.jpg" src="{{asset('/')}}frontend/assets/images/slideshow/demo2-banner1-m.jpg" alt="HIGH CONVERTING" title="HIGH CONVERTING" />
                    <div class="container">
                        <div class="slideshow-content slideshow-overlay middle d-flex justify-content-center align-items-center">
                            <div class="slideshow-content-in text-center">
                                <div class="wrap-caption animation style1 px-2">
                                    <h1 class="h1 mega-title ss-mega-title fs-1 text-capitalize">Ensuring<br>Customer Success</h1>
                                    <span class="mega-subtitle fs-6 ss-sub-title d-md-block d-lg-block d-none">Creative, Flexible and High Performance Html Template!</span>
                                    <div class="ss-btnWrap mt-3 mt-md-0">
                                        <a class="btn btn-lg border-0 btn-primary" href="shop-top-filter.html">Shop Women</a>
                                        <a class="btn btn-lg border-0 btn-primary" href="shop-top-filter.html">Shop Men</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload desktop-hide" data-src="{{asset('/')}}frontend/assets/images/slideshow/demo2-banner2.jpg" src="{{asset('/')}}frontend/assets/images/slideshow/demo2-banner2.jpg" alt="MAKING BRAND VISIBLE" title="MAKING BRAND VISIBLE" />
                    <img class="blur-up lazyload mobile-hide" data-src="{{asset('/')}}frontend/assets/images/slideshow/demo2-banner2-m.jpg" src="{{asset('/')}}frontend/assets/images/slideshow/demo2-banner2-m.jpg" alt="MAKING BRAND VISIBLE" title="MAKING BRAND VISIBLE" />
                    <div class="slideshow-content slideshow-overlay bottom-middle container d-flex justify-content-center align-items-center">
                        <div class="slideshow-content-in text-center">
                            <div class="wrap-caption animation style1 whiteText px-2">
                                <p class="ss-small-title mb-2 text-uppercase">We are Beyond Imagination</p>
                                <h2 class="mega-title ss-mega-title fs-1 text-capitalize">Infinite Possibilities</h2>
                                <span class="mega-subtitle ss-sub-title fs-6 d-md-block d-lg-block d-none">Increase your exposure, customers & sales.</span>
                                <div class="ss-btnWrap mt-3 mt-md-0">
                                    <a class="btn btn-lg border-0 btn-primary" href="shop-top-filter.html">View Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Home slider-->

    <!--Best Seller With Tabs-->
    <section class="section product-slider tab-slider-product">
        <div class="container">
            <div class="section-header">
                <h2>Best Seller</h2>
                <p>Browse the huge variety of our best seller</p>
            </div>
            <div class="tabs-listing">
                <ul class="tabs clearfix tabs-style2">
                    <li class="active" rel="tab1">Women</li>
                    <li rel="tab2">Men</li>
                    <li rel="tab3" class="tab_last">Accessories</li>
                </ul>
                <div class="tab_container">
                    <h3 class="tab_drawer_heading d_active body-font text-uppercase text-center" rel="tab1">Women <i class="an an-angle-down-r" aria-hidden="true"></i></h3>
                    <div id="tab1" class="tab_content">
                        <div class="grid-products">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-8.jpg" src="{{asset('/')}}frontend/assets/images/products/product-8.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-8-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-8-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Martha Knit Top</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="old-price">$199.00</span>
                                            <span class="price">$219.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!--Color Variant -->
                                        <ul class="image-swatches swatches">
                                            <li class="swatch rounded blue medium-xs"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                            <li class="swatch rounded pink medium-xs"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                            <li class="swatch rounded red medium-xs"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                                            <li class="swatch rounded yellow medium-xs"><span class="swacth-btn"></span><span class="tooltip-label">Yellow</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-9-2.jpg" src="{{asset('/')}}frontend/assets/images/products/product-9-2.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-9-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-9-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Countdown Timer-->
                                        <div class="saleTime desktop" data-countdown="2024/10/01"></div>
                                        <!--End Countdown Timer-->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-quickshop-popup" href="#pro-quickshop1" data-bs-toggle="offcanvas" data-bs-target="#pro-quickshop1" aria-controls="pro-quickshop1">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Quick Shop</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->

                                        <!-- Product Quickshop Form -->
                                        <div class="quickshop-content d-flex-center" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="pro-quickshop1">
                                            <button type="button" class="btn-close text-reset ms-auto position-absolute top-0 end-0 m-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            <div class="offcanvas-body quickshop-variant h-100 d-flex align-items-start align-items-sm-center">
                                                <form method="post" action="#" id="product_form_1052" class="product-form align-items-center text-center hidedropdown" accept-charset="UTF-8" enctype="multipart/form-data">
                                                    <!-- Product Price -->
                                                    <div class="product-single__price lh-1 mb-3 mt-0 mx-auto">
                                                        <span class="visually-hidden">Regular price</span>
                                                        <span class="product-price__sale--single">
                                                                        <span class="product-price-old-price d-none">$200.00</span><span class="product-price__price product-price__sale0">$199.00</span>
                                                                    </span>
                                                    </div>
                                                    <!-- End Product Price -->
                                                    <!-- Swatches Color -->
                                                    <div class="swatches-image swatch clearfix mb-3 swatch-0 option1" data-option-index="0">
                                                        <div class="product-form__item">
                                                            <label class="label d-flex justify-content-center">Color:<span class="required d-none">*</span><span class="slVariant ms-1 fw-bold">Black</span></label>
                                                            <ul class="swatches d-flex-justify-center list-unstyled m-0 clearfix">
                                                                <li data-value="Black" class="swatch-element rounded-0 color black available active">
                                                                    <label class="swatchLbl rounded-0 color small black" title="Black"></label>
                                                                    <span class="tooltip-label top">Black</span>
                                                                </li>
                                                                <li data-value="Peach" class="swatch-element rounded-0 color peach available">
                                                                    <label class="swatchLbl rounded-0 color small red" title="Red"></label>
                                                                    <span class="tooltip-label top">Peach</span>
                                                                </li>
                                                                <li data-value="White" class="swatch-element rounded-0 color white available">
                                                                    <label class="swatchLbl rounded-0 color small orange" title="Orange"></label>
                                                                    <span class="tooltip-label top">White</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Swatches Color -->
                                                    <!-- Swatches Size -->
                                                    <div class="swatch clearfix mb-3 swatch-1 option2" data-option-index="1">
                                                        <div class="product-form__item">
                                                            <label class="label d-flex justify-content-center">Size:<span class="required d-none">*</span><span class="slVariant ms-1 fw-bold">S</span></label>
                                                            <ul class="swatches-size d-flex-justify-center list-unstyled m-0 clearfix">
                                                                <li data-value="S" class="swatch-element s available active">
                                                                    <label class="swatchLbl rounded-0 medium" title="S">S</label><span class="tooltip-label">S</span>
                                                                </li>
                                                                <li data-value="M" class="swatch-element m available">
                                                                    <label class="swatchLbl rounded-0 medium" title="M">M</label><span class="tooltip-label">M</span>
                                                                </li>
                                                                <li data-value="L" class="swatch-element l available">
                                                                    <label class="swatchLbl rounded-0 medium" title="L">L</label><span class="tooltip-label">L</span>
                                                                </li>
                                                                <li data-value="XL" class="swatch-element xl available">
                                                                    <label class="swatchLbl rounded-0 medium" title="XL">XL</label><span class="tooltip-label">XL</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Swatches Size -->
                                                    <!-- Product Action -->
                                                    <div class="product-form-submit mx-auto">
                                                        <button type="submit" name="add" class="btn rounded product-form__cart-submit btn-small px-3"><span>Add to cart</span></button>
                                                        <button type="submit" name="add" class="btn rounded product-form__sold-out btn-small px-3 d-none" disabled="disabled">Sold out</button>
                                                        <button type="button" name="buy" class="btn rounded btn-outline-primary proceed-to-checkout btn-small px-3 d-none">Buy it now</button>
                                                    </div>
                                                    <!-- End Product Action -->
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Quickshop Form -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Long Sleeve T-shirts</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$199.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i><i class="an an-star"></i> <i class="an an-star"></i></div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded purple medium-xs"><span class="tooltip-label">Purple</span></li>
                                            <li class="swatch rounded black medium-xs"><span class="tooltip-label">Black</span></li>
                                            <li class="swatch rounded navy medium-xs"><span class="tooltip-label">Navy</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item mb-3">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-7.jpg" src="{{asset('/')}}frontend/assets/images/products/product-7.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-7-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-7-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--Product label-->
                                        <div class="product-labels"><span class="lbl pr-label1">New</span></div>
                                        <!--Product label-->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Button Up Top Black</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$99.01</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!--Color Variant -->
                                        <ul class="image-swatches swatches">
                                            <li class="swatch rounded red medium-xs"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                                            <li class="swatch rounded yellow medium-xs"><span class="swacth-btn"></span><span class="tooltip-label">Yellow</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item mb-3">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-6.jpg" src="{{asset('/')}}frontend/assets/images/products/product-6.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-6-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-6-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Sunset Sleep Scarf Top</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$99.01</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded black medium-xs"><span class="tooltip-label">black</span></li>
                                            <li class="swatch rounded navy medium-xs"><span class="tooltip-label">navy</span></li>
                                            <li class="swatch rounded darkgreen medium-xs"><span class="tooltip-label">darkgreen</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-10.jpg" src="{{asset('/')}}frontend/assets/images/products/product-10.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-10-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-10-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Backpack With Contrast Bow</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$39.01</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded black medium-xs"><span class="tooltip-label">black</span></li>
                                            <li class="swatch rounded maroon medium-xs"><span class="tooltip-label">maroon</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-11.jpg" src="{{asset('/')}}frontend/assets/images/products/product-11.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-11-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-11-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Puffer Jacket</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$89.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!--Color Variant -->
                                        <ul class="image-swatches swatches">
                                            <li class="rounded-circle blue medium-xs"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                            <li class="rounded-circle pink medium-xs"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                            <li class="rounded-circle yellow medium-xs"><span class="swacth-btn"></span><span class="tooltip-label">Yellow</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-21.jpg" src="{{asset('/')}}frontend/assets/images/products/product-21.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-21-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-21-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Women Long Jeans</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$189.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded maroon medium-xs"><span class="tooltip-label">maroon</span></li>
                                            <li class="swatch rounded green medium-xs"><span class="tooltip-label">Green</span></li>
                                            <li class="swatch rounded orange medium-xs"><span class="tooltip-label">Orange</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-22.jpg" src="{{asset('/')}}frontend/assets/images/products/product-22.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-22-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-22-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Long Sleev Top</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$189.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!--Color Variant -->
                                        <ul class="image-swatches swatches">
                                            <li class="rounded-circle red medium-xs"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                                            <li class="rounded-circle yellow medium-xs"><span class="swacth-btn"></span><span class="tooltip-label">Yellow</span></li>
                                            <li class="rounded-circle blue medium-xs"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                            <li class="rounded-circle pink medium-xs"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>
                        <div class="view-collection text-center mt-3 mt-md-4">
                            <a href="shop-top-filter.html" class="btn btn-primary">View Collection</a>
                        </div>
                    </div>
                    <h3 class="tab_drawer_heading body-font text-uppercase text-center" rel="tab2">Men <i class="an an-angle-down-r" aria-hidden="true"></i></h3>
                    <div id="tab2" class="tab_content">
                        <div class="grid-products">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-14.jpg" src="{{asset('/')}}frontend/assets/images/products/product-14.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-14-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-14-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Martha Knit Top</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="old-price">$199.00</span>
                                            <span class="price">$219.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!--Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded green medium-xs"><span class="tooltip-label">Green</span></li>
                                            <li class="swatch rounded orange medium-xs"><span class="tooltip-label">Orange</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-12.jpg" src="{{asset('/')}}frontend/assets/images/products/product-12.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-12-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-12-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Long Sleeve T-shirts</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$199.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i><i class="an an-star"></i> <i class="an an-star"></i></div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded black medium-xs"><span class="tooltip-label">Black</span></li>
                                            <li class="swatch rounded purple medium-xs"><span class="tooltip-label">Purple</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-13.jpg" src="{{asset('/')}}frontend/assets/images/products/product-13.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-13-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-13-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--Product label-->
                                        <div class="product-labels"><span class="lbl pr-label1">HOT</span></div>
                                        <!--Product label-->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Stand Collar Slim Shirt</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$399.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded red medium-xs"><span class="tooltip-label">red</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-15.jpg" src="{{asset('/')}}frontend/assets/images/products/product-15.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-15-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-15-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Weave Hoodie Sweatshirt</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$199.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded darkgreen medium-xs"><span class="tooltip-label">darkgreen</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-16.jpg" src="{{asset('/')}}frontend/assets/images/products/product-16.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-16-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-16-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Cool Short Sleev T-Shirt</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$59.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded maroon medium-xs"><span class="tooltip-label">maroon</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-23.jpg" src="{{asset('/')}}frontend/assets/images/products/product-23.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-23-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-23-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Collar Denim Jacket</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$59.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded maroon medium-xs"><span class="tooltip-label">maroon</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-17.jpg" src="{{asset('/')}}frontend/assets/images/products/product-17.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-17-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-17-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale">40% OFF</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Black Solid Cap</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="old-price">$99.00</span>
                                            <span class="price">$89.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!--Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded aqua medium-xs"><span class="tooltip-label">Aqua</span></li>
                                            <li class="swatch rounded orange medium-xs"><span class="tooltip-label">Orange</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-18.jpg" src="{{asset('/')}}frontend/assets/images/products/product-18.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-18-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-18-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Leather backpack Black</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$199.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i><i class="an an-star"></i> <i class="an an-star"></i></div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded black medium-xs"><span class="tooltip-label">Black</span></li>
                                            <li class="swatch rounded purple medium-xs"><span class="tooltip-label">Purple</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>
                        <div class="view-collection text-center mt-3 mt-md-4">
                            <a href="shop-top-filter.html" class="btn btn-primary">View Collection</a>
                        </div>
                    </div>
                    <h3 class="tab_drawer_heading body-font text-uppercase text-center" rel="tab3">Accessories <i class="an an-angle-down-r" aria-hidden="true"></i></h3>
                    <div id="tab3" class="tab_content">
                        <div class="grid-products">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-17.jpg" src="{{asset('/')}}frontend/assets/images/products/product-17.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-17-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-17-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale">40% OFF</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Black Solid Cap</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="old-price">$99.00</span>
                                            <span class="price">$89.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!--Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded aqua medium-xs"><span class="tooltip-label">Aqua</span></li>
                                            <li class="swatch rounded orange medium-xs"><span class="tooltip-label">Orange</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-18.jpg" src="{{asset('/')}}frontend/assets/images/products/product-18.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-18-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-18-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Leather backpack Black</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$199.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i><i class="an an-star"></i> <i class="an an-star"></i></div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded black medium-xs"><span class="tooltip-label">Black</span></li>
                                            <li class="swatch rounded purple medium-xs"><span class="tooltip-label">Purple</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-19.jpg" src="{{asset('/')}}frontend/assets/images/products/product-19.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-19-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-19-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Aviator Sunglasses</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$59.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded red medium-xs"><span class="tooltip-label">red</span></li>
                                            <li class="swatch rounded orange medium-xs"><span class="tooltip-label">orange</span></li>
                                            <li class="swatch rounded yellow medium-xs"><span class="tooltip-label">yellow</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-20.jpg" src="{{asset('/')}}frontend/assets/images/products/product-20.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-20-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-20-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Classic Watch Khaki</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$499.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch rounded darkgreen medium-xs"><span class="tooltip-label">darkgreen</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-10.jpg" src="{{asset('/')}}frontend/assets/images/products/product-10.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-10-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-10-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Backpack With Contrast Bow</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$39.01</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-24.jpg" src="{{asset('/')}}frontend/assets/images/products/product-24.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-24-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-24-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Classic Tie</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$49.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-25.jpg" src="{{asset('/')}}frontend/assets/images/products/product-25.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-25-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-25-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Knit Glove</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$89.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-26.jpg" src="{{asset('/')}}frontend/assets/images/products/product-26.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-26-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-26-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                    </a>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon an an-search-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                    <!--End Compare Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout1.html">Winter Cap</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$79.00</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>
                        <div class="view-collection text-center mt-3 mt-md-4">
                            <a href="shop-top-filter.html" class="btn btn-primary">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Best Seller With Tabs-->

    <!--Collection Slider Section-->
    <section class="section collection-slider-full">
        <div class="container">
            <div class="section-header">
                <h2>Discover the Best Value Deals</h2>
                <p>Your One-stop Online Shopping Site For Clothes,<br> Accessories Footwear & More</p>
            </div>

            <div class="collection-grid-slider">
                <div class="collection-item">
                    <a href="shop-top-filter.html" class="collection-grid-link">
                        <div class="img">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/collection/demo2-ct-img1.jpg" src="{{asset('/')}}frontend/assets/images/collection/demo2-ct-img1.jpg" alt="Women"/>
                        </div>
                        <div class="details">
                            <h3 class="collection-item-title">Women</h3>
                        </div>
                    </a>
                </div>
                <div class="collection-item">
                    <a href="shop-top-filter.html" class="collection-grid-link">
                        <div class="img">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/collection/demo2-ct-img2.jpg" src="{{asset('/')}}frontend/assets/images/collection/demo2-ct-img2.jpg" alt="Men"/>
                        </div>
                        <div class="details">
                            <h3 class="collection-item-title">Men</h3>
                        </div>
                    </a>
                </div>
                <div class="collection-item">
                    <a href="shop-top-filter.html" class="collection-grid-link">
                        <div class="img">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/collection/demo2-ct-img3.jpg" src="{{asset('/')}}frontend/assets/images/collection/demo2-ct-img3.jpg" alt="Kids"/>
                        </div>
                        <div class="details">
                            <h3 class="collection-item-title">Kids</h3>
                        </div>
                    </a>
                </div>
                <div class="collection-item">
                    <a href="shop-top-filter.html" class="ccollection-grid-link">
                        <div class="img">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/collection/demo2-ct-img4.jpg" src="{{asset('/')}}frontend/assets/images/collection/demo2-ct-img4.jpg" alt="Accessories"/>
                        </div>
                        <div class="details">
                            <h3 class="collection-item-title">Accessories</h3>
                        </div>
                    </a>
                </div>
                <div class="collection-item">
                    <a href="shop-top-filter.html" class="collection-grid-link">
                        <div class="img">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/collection/demo2-ct-img5.jpg" src="{{asset('/')}}frontend/assets/images/collection/demo2-ct-img5.jpg" alt="Cosmetic"/>
                        </div>
                        <div class="details">
                            <h3 class="collection-item-title">Cosmetic</h3>
                        </div>
                    </a>
                </div>
                <div class="collection-item">
                    <a href="shop-top-filter.html" class="collection-grid-link">
                        <div class="img">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/collection/demo2-ct-img6.jpg" src="{{asset('/')}}frontend/assets/images/collection/demo2-ct-img6.jpg" alt="Shoes"/>
                        </div>
                        <div class="details">
                            <h3 class="collection-item-title">Shoes</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Collection Slider Section-->

    <!--Top Picks On Fashion Product Slider-->
    <section class="section product-slider">
        <div class="container">
            <div class="row">
                <div class="section-header col-12">
                    <h2>Top Picks On Fashion</h2>
                </div>
            </div>
            <div class="productSlider grid-products">
                <div class="item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-14.jpg" src="{{asset('/')}}frontend/assets/images/products/product-14.jpg" alt="image" title="">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-14-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-14-1.jpg" alt="image" title="">
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->

                        <!--Product Button-->
                        <div class="button-set style2">
                            <ul>
                                <li>
                                    <!--Cart Button-->
                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                    </a>
                                    <!--end Cart Button-->
                                </li>
                                <li>
                                    <!--Quick View Button-->
                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon an an-search-l"></i>
                                        <span class="tooltip-label">Quick View</span>
                                    </a>
                                    <!--End Quick View Button-->
                                </li>
                                <li>
                                    <!--Wishlist Button-->
                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                        <i class="icon an an-heart-l"></i>
                                        <span class="tooltip-label">Add To Wishlist</span>
                                    </a>
                                    <!--End Wishlist Button-->
                                </li>
                                <li>
                                    <!--Compare Button-->
                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                        <i class="icon an an-sync-ar"></i>
                                        <span class="tooltip-label">Add to Compare</span>
                                    </a>
                                    <!--End Compare Button-->
                                </li>
                            </ul>
                        </div>
                        <!--End Product Button-->
                    </div>
                    <!-- end product image -->
                    <!--start product details -->
                    <div class="product-details text-left">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="product-layout1.html">Martha Knit Top</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="old-price">$199.00</span>
                            <span class="price">$219.00</span>
                        </div>
                        <!-- End product price -->
                        <!--Product Review-->
                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                        <!--End Product Review-->
                        <!--Color Variant -->
                        <ul class="swatches">
                            <li class="swatch small green"><span class="tooltip-label">Green</span></li>
                            <li class="swatch small orange"><span class="tooltip-label">Orange</span></li>
                        </ul>
                        <!-- End Variant -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-12.jpg" src="{{asset('/')}}frontend/assets/images/products/product-12.jpg" alt="image" title="">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-12-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-12-1.jpg" alt="image" title="">
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->

                        <!--Product Button-->
                        <div class="button-set style2">
                            <ul>
                                <li>
                                    <!--Cart Button-->
                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                    </a>
                                    <!--end Cart Button-->
                                </li>
                                <li>
                                    <!--Quick View Button-->
                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon an an-search-l"></i>
                                        <span class="tooltip-label">Quick View</span>
                                    </a>
                                    <!--End Quick View Button-->
                                </li>
                                <li>
                                    <!--Wishlist Button-->
                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                        <i class="icon an an-heart-l"></i>
                                        <span class="tooltip-label">Add To Wishlist</span>
                                    </a>
                                    <!--End Wishlist Button-->
                                </li>
                                <li>
                                    <!--Compare Button-->
                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                        <i class="icon an an-sync-ar"></i>
                                        <span class="tooltip-label">Add to Compare</span>
                                    </a>
                                    <!--End Compare Button-->
                                </li>
                            </ul>
                        </div>
                        <!--End Product Button-->
                    </div>
                    <!-- end product image -->
                    <!--start product details -->
                    <div class="product-details text-left">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="product-layout1.html">Long Sleeve T-shirts</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$199.00</span>
                        </div>
                        <!-- End product price -->
                        <!--Product Review-->
                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i><i class="an an-star"></i> <i class="an an-star"></i></div>
                        <!--End Product Review-->
                        <!-- Color Variant -->
                        <ul class="swatches">
                            <li class="swatch small black"><span class="tooltip-label">Black</span></li>
                            <li class="swatch small purple"><span class="tooltip-label">Purple</span></li>
                        </ul>
                        <!-- End Variant -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-6.jpg" src="{{asset('/')}}frontend/assets/images/products/product-6.jpg" alt="image" title="">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-6-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-6-1.jpg" alt="image" title="">
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->
                        <!--Product Button-->
                        <div class="button-set style2">
                            <ul>
                                <li>
                                    <!--Cart Button-->
                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                    </a>
                                    <!--end Cart Button-->
                                </li>
                                <li>
                                    <!--Quick View Button-->
                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon an an-search-l"></i>
                                        <span class="tooltip-label">Quick View</span>
                                    </a>
                                    <!--End Quick View Button-->
                                </li>
                                <li>
                                    <!--Wishlist Button-->
                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                        <i class="icon an an-heart-l"></i>
                                        <span class="tooltip-label">Add To Wishlist</span>
                                    </a>
                                    <!--End Wishlist Button-->
                                </li>
                                <li>
                                    <!--Compare Button-->
                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                        <i class="icon an an-sync-ar"></i>
                                        <span class="tooltip-label">Add to Compare</span>
                                    </a>
                                    <!--End Compare Button-->
                                </li>
                            </ul>
                        </div>
                        <!--End Product Button-->
                    </div>
                    <!-- end product image -->
                    <!--start product details -->
                    <div class="product-details text-left">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="product-layout1.html">Sunset Sleep Scarf Top</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$99.01</span>
                        </div>
                        <!-- End product price -->
                        <!--Product Review-->
                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                        <!--End Product Review-->
                        <!-- Color Variant -->
                        <ul class="swatches">
                            <li class="swatch small black"><span class="tooltip-label">black</span></li>
                            <li class="swatch small navy"><span class="tooltip-label">navy</span></li>
                            <li class="swatch small darkgreen"><span class="tooltip-label">darkgreen</span></li>
                        </ul>
                        <!-- End Variant -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-21.jpg" src="{{asset('/')}}frontend/assets/images/products/product-21.jpg" alt="image" title="">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-21-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-21-1.jpg" alt="image" title="">
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->

                        <!--Product Button-->
                        <div class="button-set style2">
                            <ul>
                                <li>
                                    <!--Cart Button-->
                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                    </a>
                                    <!--end Cart Button-->
                                </li>
                                <li>
                                    <!--Quick View Button-->
                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon an an-search-l"></i>
                                        <span class="tooltip-label">Quick View</span>
                                    </a>
                                    <!--End Quick View Button-->
                                </li>
                                <li>
                                    <!--Wishlist Button-->
                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                        <i class="icon an an-heart-l"></i>
                                        <span class="tooltip-label">Add To Wishlist</span>
                                    </a>
                                    <!--End Wishlist Button-->
                                </li>
                                <li>
                                    <!--Compare Button-->
                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                        <i class="icon an an-sync-ar"></i>
                                        <span class="tooltip-label">Add to Compare</span>
                                    </a>
                                    <!--End Compare Button-->
                                </li>
                            </ul>
                        </div>
                        <!--End Product Button-->
                    </div>
                    <!-- end product image -->
                    <!--start product details -->
                    <div class="product-details text-left">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="product-layout1.html">Women Long Jeans</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$189.00</span>
                        </div>
                        <!-- End product price -->
                        <!--Product Review-->
                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                        <!--End Product Review-->
                        <!-- Color Variant -->
                        <ul class="swatches">
                            <li class="swatch small maroon"><span class="tooltip-label">maroon</span></li>
                            <li class="swatch small green"><span class="tooltip-label">Green</span></li>
                            <li class="swatch small orange"><span class="tooltip-label">Orange</span></li>
                        </ul>
                        <!-- End Variant -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-22.jpg" src="{{asset('/')}}frontend/assets/images/products/product-22.jpg" alt="image" title="">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-22-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-22-1.jpg" alt="image" title="">
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->

                        <!--Product Button-->
                        <div class="button-set style2">
                            <ul>
                                <li>
                                    <!--Cart Button-->
                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                    </a>
                                    <!--end Cart Button-->
                                </li>
                                <li>
                                    <!--Quick View Button-->
                                    <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon an an-search-l"></i>
                                        <span class="tooltip-label">Quick View</span>
                                    </a>
                                    <!--End Quick View Button-->
                                </li>
                                <li>
                                    <!--Wishlist Button-->
                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                        <i class="icon an an-heart-l"></i>
                                        <span class="tooltip-label">Add To Wishlist</span>
                                    </a>
                                    <!--End Wishlist Button-->
                                </li>
                                <li>
                                    <!--Compare Button-->
                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                        <i class="icon an an-sync-ar"></i>
                                        <span class="tooltip-label">Add to Compare</span>
                                    </a>
                                    <!--End Compare Button-->
                                </li>
                            </ul>
                        </div>
                        <!--End Product Button-->
                    </div>
                    <!-- end product image -->
                    <!--start product details -->
                    <div class="product-details text-left">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="product-layout1.html">Long Sleev Top</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$189.00</span>
                        </div>
                        <!-- End product price -->
                        <!--Product Review-->
                        <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                        <!--End Product Review-->
                        <!-- Color Variant -->
                        <ul class="swatches">
                            <li class="swatch small green"><span class="tooltip-label">Green</span></li>
                            <li class="swatch small orange"><span class="tooltip-label">Orange</span></li>
                        </ul>
                        <!-- End Variant -->
                    </div>
                    <!-- End product details -->
                </div>
            </div>
        </div>
    </section>
    <!--End Top Picks On Fashion Product Slider-->

    <!--Parallax Banner-->
    <div class="section parallax-banner-style1 pt-0">
        <div class="hero hero--large hero__overlay bg-size bgFixed background-parallax">
            <img class="bg-img" src="{{asset('/')}}frontend/assets/images/parallax/demo2-pl-banner.jpg" alt="image">
            <div class="hero__inner">
                <div class="container">
                    <div class="wrap-text center text-small font-bold">
                        <h2 class="h2 mega-title">Final Reduction <br>Up to 70% OFF</h2>
                        <div class="rte-setting mega-subtitle">Display 4 shop buttons in <br>one row. You can add as many as you want.</div>
                        <div class="row">
                            <div class="col text-center"><a href="shop-top-filter.html" class="btn btn-primary w-100 mx-2">Jumpsuits</a></div>
                            <div class="col text-center"><a href="shop-top-filter.html" class="btn btn-primary w-100 mx-2">Sweetshirts</a></div>
                            <div class="col text-center"><a href="shop-top-filter.html" class="btn btn-primary w-100 mx-2">Accessories</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Parallax Banner-->

    <!--Store Feature-->
    <section class="store-features style1 py-0">
        <div class="container">
            <div class="row">
                <div class="section-header col-12">
                    <h2>Why shop with us?</h2>
                </div>
            </div>
            <div class="row store-info">
                <div class="col mb-3 my-sm-3 text-center">
                    <i class="an an-shield rounded-circle mb-4"></i>
                    <h5 class="body-font">Products Quality</h5>
                    <p class="sub-text">Comprehensive quality control and affordable prices</p>
                </div>
                <div class="col mb-3 my-sm-3 text-center">
                    <i class="an an-warehouse rounded-circle mb-4"></i>
                    <h5 class="body-font">Global Warehouse</h5>
                    <p class="sub-text">Shop from 20+ warehouses world wide.</p>
                </div>
                <div class="col mb-3 my-sm-3 text-center">
                    <i class="an an-ship-fast rounded-circle mb-4"></i>
                    <h5 class="body-font">Fast Shipping</h5>
                    <p class="sub-text">Fast and convenient door to door delivery</p>
                </div>
                <div class="col mb-3 my-sm-3 text-center">
                    <i class="an an-award rounded-circle mb-4"></i>
                    <h5 class="body-font">Payment Security</h5>
                    <p class="sub-text">More than 8 different secure payment methods</p>
                </div>
                <div class="col mb-3 my-sm-3 text-center">
                    <i class="an an-chat rounded-circle mb-4"></i>
                    <h5 class="body-font">Dedicated Support</h5>
                    <p class="sub-text">24/7 Customer Service - We’re here & happy to help!</p>
                </div>
            </div>
        </div>
    </section>
    <!--End Store Feature-->

    <!--Instagram Section-->
    <div class="section home-instagram pb-0">
        <div class="section-header">
            <h2>Follow Us On Instagram</h2>
            <p>@optimal Instagram</p>
        </div>
        <!--Instagram Slider-->
        <div class="instagram-section instagram-slider clearfix">
            <div class="instagram-item">
                <a href="#;">
                    <img src="{{asset('/')}}frontend/assets/images/instagram/ins-1.jpg" data-src="{{asset('/')}}frontend/assets/images/instagram/ins-1.jpg" alt="image" title="" class="blur-up lazyload" />
                    <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                </a>
            </div>
            <div class="instagram-item">
                <a href="#;">
                    <img src="{{asset('/')}}frontend/assets/images/instagram/ins-2.jpg" data-src="{{asset('/')}}frontend/assets/images/instagram/ins-2.jpg" alt="image" title="" class="blur-up lazyload" />
                    <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                </a>
            </div>
            <div class="instagram-item">
                <a href="#;">
                    <img src="{{asset('/')}}frontend/assets/images/instagram/ins-3.jpg" data-src="{{asset('/')}}frontend/assets/images/instagram/ins-3.jpg" alt="image" title="" class="blur-up lazyload" />
                    <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                </a>
            </div>
            <div class="instagram-item">
                <a href="#;">
                    <img src="{{asset('/')}}frontend/assets/images/instagram/ins-4.jpg" data-src="{{asset('/')}}frontend/assets/images/instagram/ins-4.jpg" alt="image" title="" class="blur-up lazyload" />
                    <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                </a>
            </div>
            <div class="instagram-item">
                <a href="#;">
                    <img src="{{asset('/')}}frontend/assets/images/instagram/ins-5.jpg" data-src="{{asset('/')}}frontend/assets/images/instagram/ins-5.jpg" alt="image" title="" class="blur-up lazyload" />
                    <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                </a>
            </div>
            <div class="instagram-item">
                <a href="#;">
                    <img src="{{asset('/')}}frontend/assets/images/instagram/ins-6.jpg" data-src="{{asset('/')}}frontend/assets/images/instagram/ins-6.jpg" alt="image" title="" class="blur-up lazyload" />
                    <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                </a>
            </div>
            <div class="instagram-item">
                <a href="#;">
                    <img src="{{asset('/')}}frontend/assets/images/instagram/ins-7.jpg" data-src="{{asset('/')}}frontend/assets/images/instagram/ins-7.jpg" alt="image" title="" class="blur-up lazyload" />
                    <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                </a>
            </div>
            <div class="instagram-item">
                <a href="#;">
                    <img src="{{asset('/')}}frontend/assets/images/instagram/ins-8.jpg" data-src="{{asset('/')}}frontend/assets/images/instagram/ins-8.jpg" alt="image" title="" class="blur-up lazyload" />
                    <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                </a>
            </div>
        </div>
        <!--End Instagram Slider-->
    </div>
    <!--End Instagram Section-->
@endsection
