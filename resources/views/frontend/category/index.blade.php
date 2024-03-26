@extends('frontend.master')
@section('title', 'Product Category Page')
@section('body')
    <!--Collection Banner-->
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image"></div>
            <div class="collection-hero__title-wrapper container">
                <h2 class="collection-hero__title">Product Category Page</h2>
                <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="{{ route('home') }}" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Product Category Page</span></div>
            </div>
        </div>
    </div>
    <!--End Collection Banner-->

    <div class="container">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 sidebar filterbar">
                <div class="closeFilter d-block d-lg-none"><i class="icon icon an an-times-r"></i></div>
                <div class="sidebar_tags">
                    <!--Categories-->
                    <div class="sidebar_widget categories filterBox filter-widget">
                        <div class="widget-title"><h2 class="mb-0">Categories</h2></div>
                        <div class="widget-content filterDD">
                            <ul class="clearfix sidebar_categories mb-0">
                                <li class="lvl-1 sub-level"><a href="#;" class="site-nav">Clothing</a>
                                    <ul class="sublinks">
                                        <li class="level2 sub-level sub-sub-level"><a href="#;" class="site-nav">Men</a>
                                            <ul class="sublinks mb-0">
                                                <li class="level3"><a href="#" class="site-nav">Shirt</a></li>
                                                <li class="level3"><a href="#" class="site-nav">Jeans</a></li>
                                                <li class="level3"><a href="#" class="site-nav">Shoes</a></li>
                                            </ul>
                                        </li>
                                        <li class="level2"><a href="#" class="site-nav">Women</a></li>
                                        <li class="level2"><a href="#" class="site-nav">Child</a></li>
                                        <li class="level2"><a href="#" class="site-nav">View All Clothing</a></li>
                                    </ul>
                                </li>
                                <li class="lvl-1 sub-level"><a href="#;" class="site-nav">Jewellery</a>
                                    <ul class="sublinks">
                                        <li class="level2"><a href="#" class="site-nav">Ring</a></li>
                                        <li class="level2"><a href="#" class="site-nav">Neckalses</a></li>
                                        <li class="level2"><a href="#" class="site-nav">Eaarings</a></li>
                                        <li class="level2"><a href="#" class="site-nav">View All Jewellery</a></li>
                                    </ul>
                                </li>
                                <li class="lvl-1"><a href="#" class="site-nav">Shoes</a></li>
                                <li class="lvl-1"><a href="#" class="site-nav">Accessories</a></li>
                                <li class="lvl-1"><a href="#" class="site-nav">Collections</a></li>
                                <li class="lvl-1"><a href="#" class="site-nav">Sale</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Categories-->
                    <!--Price Filter-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title"><h2 class="mb-0">Price</h2></div>
                        <form action="#" method="post" class="price-filter filterDD">
                            <div id="slider-range" class="mt-2"></div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="no-margin"><input id="amount" type="text"></p>
                                </div>
                                <div class="col-6 text-right margin-25px-top">
                                    <button class="btn btn--small rounded">filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Price Filter-->
                    <!--Color Swatches-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title"><h2 class="mb-0">Color</h2></div>
                        <div class="filter-color swacth-list filterDD clearfix">
                            <ul class="clearfix">
                                <li><span class="swacth-btn medium radius black"></span><span class="tooltip-label">Black</span></li>
                                <li><span class="swacth-btn medium radius white"></span><span class="tooltip-label">White</span></li>
                                <li><span class="swacth-btn medium radius red"></span><span class="tooltip-label">Red</span></li>
                                <li><span class="swacth-btn medium radius blue"></span><span class="tooltip-label">Blue</span></li>
                                <li><span class="swacth-btn medium radius pink"></span><span class="tooltip-label">Pink</span></li>
                                <li><span class="swacth-btn medium radius gray"></span><span class="tooltip-label">Gray</span></li>
                                <li><span class="swacth-btn medium radius green"></span><span class="tooltip-label">Green</span></li>
                                <li><span class="swacth-btn medium radius orange"></span><span class="tooltip-label">Orange</span></li>
                                <li><span class="swacth-btn medium radius yellow"></span><span class="tooltip-label">Yellow</span></li>
                                <li><span class="swacth-btn medium radius blueviolet"></span><span class="tooltip-label">Blue Violet</span></li>
                                <li><span class="swacth-btn medium radius brown"></span><span class="tooltip-label">Brown</span></li>
                                <li><span class="swacth-btn medium radius darkGoldenRod"></span><span class="tooltip-label">Dark Golden Red</span></li>
                                <li><span class="swacth-btn medium radius darkGreen"></span><span class="tooltip-label">Dark Green</span></li>
                                <li><span class="swacth-btn medium radius darkRed"></span><span class="tooltip-label">Dark Red</span></li>
                                <li><span class="swacth-btn medium radius khaki"></span><span class="tooltip-label">Khaki</span></li>
                                <li><span class="swacth-btn medium radius blue-red"></span><span class="tooltip-label">Blue/Red</span></li>
                                <li><span class="swacth-btn medium radius black-grey"></span><span class="tooltip-label">Black/Grey</span></li>
                                <li><span class="swacth-btn medium radius pink-black"></span><span class="tooltip-label">pink-Black</span></li>
                                <li><span class="swacth-btn medium radius yellow-black"></span><span class="tooltip-label">Yellow</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Color Swatches-->
                    <!--Size Swatches-->
                    <div class="sidebar_widget filterBox filter-widget size-swacthes">
                        <div class="widget-title"><h2 class="mb-0">Size</h2></div>
                        <div class="filterDD">
                            <ul class="clearfix">
                                <li><input type="checkbox" value="s" id="s"><label for="s"><span></span>S</label></li>
                                <li><input type="checkbox" value="m" id="m"><label for="m"><span></span>M</label></li>
                                <li><input type="checkbox" value="l" id="l"><label for="l"><span></span>L</label></li>
                                <li><input type="checkbox" value="x" id="x"><label for="x"><span></span>X</label></li>
                                <li><input type="checkbox" value="xl" id="xl"><label for="xl"><span></span>XL</label></li>
                                <li><input type="checkbox" value="xll" id="xll"><label for="xll"><span></span>XLL</label></li>
                                <li><input type="checkbox" value="xxl" id="xxl"><label for="xxl"><span></span>XXL</label></li>
                                <li><input type="checkbox" value="xs" id="xs"><label for="xs"><span></span>XS</label></li>
                                <li><input type="checkbox" value="15" id="15"><label for="15"><span></span>15</label></li>
                                <li><input type="checkbox" value="25" id="25"><label for="25"><span></span>25</label></li>
                                <li><input type="checkbox" value="35" id="35"><label for="35"><span></span>35</label></li>
                                <li><input type="checkbox" value="45" id="45"><label for="45"><span></span>45</label></li>
                                <li><input type="checkbox" value="55" id="55"><label for="55"><span></span>55</label></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Size Swatches-->
                    <!--Product type-->
                    <div class="sidebar_widget filterBox filter-widget size-swacthes product-type">
                        <div class="widget-title"><h2 class="mb-0">Product type</h2></div>
                        <div class="filterDD">
                            <ul class="clearfix">
                                <li><input type="checkbox" value="accessories" id="accessories"><label for="accessories"><span></span>Accessories </label></li>
                                <li><input type="checkbox" value="bags" id="bags"><label for="bags"><span></span>Bags</label></li>
                                <li><input type="checkbox" value="jeans" id="jeans"><label for="jeans"><span></span>Jeans</label></li>
                                <li><input type="checkbox" value="shoes" id="shoes"><label for="shoes"><span></span>Shoes</label></li>
                                <li><input type="checkbox" value="t-shirts" id="t-shirts"><label for="t-shirts"><span></span>T-shirts</label></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Product type-->
                    <!--Brand-->
                    <div class="sidebar_widget filterBox filter-widget size-swacthes brand-filter">
                        <div class="widget-title"><h2 class="mb-0">Brands</h2></div>
                        <div class="filterDD">
                            <ul class="clearfix">
                                <li><input type="checkbox" value="adidas" id="adidas"><label for="adidas"><span></span>Adidas</label></li>
                                <li><input type="checkbox" value="baggit" id="baggit"><label for="baggit"><span></span>Baggit</label></li>
                                <li><input type="checkbox" value="campus" id="campus"><label for="campus"><span></span>Campus</label></li>
                                <li><input type="checkbox" value="caprese" id="caprese"><label for="caprese"><span></span>Caprese</label></li>
                                <li><input type="checkbox" value="elle" id="elle"><label for="elle"><span></span>Elle</label></li>
                                <li><input type="checkbox" value="diva" id="diva"><label for="diva"><span></span>Diva</label></li>
                                <li><input type="checkbox" value="optimal" id="optimal"><label for="optimal"><span></span>Optimal</label></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Brand-->
                    <!--Availability-->
                    <div class="sidebar_widget filterBox filter-widget size-swacthes availability">
                        <div class="widget-title"><h2 class="mb-0">Availability</h2></div>
                        <div class="filterDD">
                            <ul class="clearfix">
                                <li><input type="checkbox" value="instock" id="instock"><label for="instock"><span></span>In stock</label></li>
                                <li><input type="checkbox" value="outofstock" id="outofstock"><label for="outofstock"><span></span>Out of stock</label></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Availability-->
                    <!--Product Tags-->
                    <div class="sidebar_widget filterBox filter-widget product-tag">
                        <div class="widget-title"><h2 class="mb-0">Product Tags</h2></div>
                        <div class="widget-content filterDD">
                            <ul class="clearfix product-tags">
                                <li><a href="#" title="Show products matching tag $100 - $400">$100 - $400</a></li>
                                <li><a href="#" title="Show products matching tag $400 - $600">$400 - $600</a></li>
                                <li><a href="#" title="Show products matching tag $600 - $800">$600 - $800</a></li>
                                <li><a href="#" title="Show products matching tag Above $800">Above $800</a></li>
                                <li><a href="#" title="Show products matching tag Allen Vela">Allen Vela</a></li>
                                <li><a href="#" title="Show products matching tag Adidas">Adidas</a></li>
                                <li><a href="#" title="Show products matching tag Black">Black</a></li>
                                <li><a href="#" title="Show products matching tag Blue">Blue</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Product Tags-->
                    <!--Popular Products-->
                    <div class="sidebar_widget sidePro">
                        <div class="widget-title"><h2>Popular Products</h2></div>
                        <div class="widget-content">
                            <div class="sideProSlider grid-products">
                                <div class="col-12 item">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-1.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-1-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-1-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!--End Product Image-->

                                        <!--Countdown Timer-->
                                        <div class="saleTime" data-countdown="2029/03/01"></div>
                                        <!--End Countdown Timer-->

                                        <!--Product Button-->
                                        <div class="button-set style0 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-center">
                                        <!--Product Name-->
                                        <div class="product-name text-uppercase">
                                            <a href="product-layout1.html">Floral Crop Top</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="old-price">$199.00</span>
                                            <span class="price">$219.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex align-items-center justify-content-center">
                                            <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i>
                                            <span class="caption hidden ms-2">3 reviews</span>
                                        </div>
                                        <!--End Product Review-->
                                        <!--Color Variant -->
                                        <ul class="image-swatches swatches mb-0">
                                            <li class="radius blue medium"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                            <li class="radius pink medium"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                            <li class="radius red medium"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                                            <li class="radius yellow medium"><span class="swacth-btn"></span><span class="tooltip-label">Yellow</span></li>
                                        </ul>
                                        <!--End Color Variant-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="col-12 item">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-2.jpg" src="{{asset('/')}}frontend/assets/images/products/product-2.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-2-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-2-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale rounded">Sale</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!--End Product Image-->

                                        <!--Product Button-->
                                        <div class="button-set style0 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-quickshop-popup" href="#pro-quickshop2" data-bs-toggle="offcanvas" data-bs-target="#pro-quickshop2" aria-controls="pro-quickshop2"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Quick Shop</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->

                                        <!-- Product Quickshop Form -->
                                        <div class="quickshop-content d-flex-center" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="pro-quickshop2">
                                            <button type="button" class="btn-close text-reset ms-auto position-absolute top-0 end-0 m-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            <div class="offcanvas-body quickshop-variant h-100 d-flex align-items-start align-items-sm-center">
                                                <form method="post" action="#" id="product_form_1053" class="product-form align-items-center text-center hidedropdown" accept-charset="UTF-8" enctype="multipart/form-data">
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
                                                                <li class="swatch-element rounded-0 color gray available active">
                                                                    <label class="swatchLbl rounded-0 color small gray" title="Gray"></label>
                                                                    <span class="tooltip-label top">Gray</span>
                                                                </li>
                                                                <li data-value="Peach" class="swatch-element rounded-0 color orange available">
                                                                    <label class="swatchLbl rounded-0 color small orange" title="Orange"></label>
                                                                    <span class="tooltip-label top">Orange</span>
                                                                </li>
                                                                <li data-value="White" class="swatch-element rounded-0 color brown available">
                                                                    <label class="swatchLbl rounded-0 color small brown" title="Brown"></label>
                                                                    <span class="tooltip-label top">Brown</span>
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
                                                                <li data-value="XS" class="swatch-element xs soldout">
                                                                    <label class="swatchLbl rounded-0 medium" title="XS">XS</label><span class="tooltip-label">XS</span>
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
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-center">
                                        <!--Product Name-->
                                        <div class="product-name text-uppercase">
                                            <a href="product-layout1.html">Mini Sleev Top</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$199.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex align-items-center justify-content-center">
                                            <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i>
                                            <span class="caption hidden ms-2">8 reviews</span>
                                        </div>
                                        <!--End Product Review-->
                                        <!--Color Variant-->
                                        <ul class="swatches mb-0">
                                            <li class="swatch medium radius black"><span class="tooltip-label">Black</span></li>
                                            <li class="swatch medium radius navy"><span class="tooltip-label">Navy</span></li>
                                            <li class="swatch medium radius purple"><span class="tooltip-label">Purple</span></li>
                                        </ul>
                                        <!--End Color Variant-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="col-12 item">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image -->
                                        <a href="product-layout1.html" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-3.jpg" src="{{asset('/')}}frontend/assets/images/products/product-3.jpg" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-3-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-3-1.jpg" alt="image" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product label-->
                                        <div class="product-labels"><span class="lbl pr-label1 rounded">New</span></div>
                                        <!--Product label-->

                                        <!--Product Button-->
                                        <div class="button-set style0 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-center">
                                        <!--Product name-->
                                        <div class="product-name text-uppercase">
                                            <a href="product-layout1.html">Ditsy Floral Dress</a>
                                        </div>
                                        <!--End product name-->
                                        <!--Product price-->
                                        <div class="product-price">
                                            <span class="price">$99.00</span>
                                        </div>
                                        <!--End product price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex align-items-center justify-content-center">
                                            <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i>
                                            <span class="caption hidden ms-2">12 reviews</span>
                                        </div>
                                        <!--End Product Review-->
                                        <!--Color Variant-->
                                        <ul class="swatches mb-0">
                                            <li class="swatch medium radius red"><span class="tooltip-label">red</span></li>
                                            <li class="swatch medium radius orange"><span class="tooltip-label">orange</span></li>
                                            <li class="swatch medium radius yellow"><span class="tooltip-label">yellow</span></li>
                                        </ul>
                                        <!--End Color Variant-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Popular Products-->
                    <!--Banner-->
                    <div class="sidebar_widget static-banner">
                        <a href="shop-fullwidth.html"><img src="{{asset('/')}}frontend/assets/images/shop-banner.jpg" alt="image"></a>
                    </div>
                    <!--End Banner-->
                </div>
            </div>
            <!--End Sidebar-->

            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                <div class="page-title"><h1>Callection</h1></div>
                <!--Active Filters-->
                <ul class="active-filters d-flex flex-wrap align-items-center m-0 list-unstyled">
                    <li><a href="#">Clear all</a></li>
                    <li><a href="#">Men <i class="an an-times-l"></i></a></li>
                    <li><a href="#">Accessories <i class="an an-times-l"></i></a></li>
                </ul>
                <!--End Active Filters-->
                <!--Toolbar-->
                <div class="toolbar">
                    <div class="filters-toolbar-wrapper">
                        <ul class="list-unstyled d-flex align-items-center">
                            <li class="product-count d-flex align-items-center">
                                <button type="button" class="btn btn-filter an an-slider-3 d-inline-flex d-lg-none me-2 me-sm-3"><span class="hidden">Filter</span></button>
                                <div class="filters-toolbar__item">
                                    <span class="filters-toolbar__product-count d-none d-sm-block">Showing: {{ count($products) }} product{{count($products) > 1 ? 's' : ''}}</span>
                                </div>
                            </li>
                            <li class="collection-view ms-sm-auto">
                                <div class="filters-toolbar__item collection-view-as d-flex align-items-center me-3">
                                    <a href="javascript:void(0)" class="change-view prd-grid change-view--active"><i class="icon an an-th" aria-hidden="true"></i><span class="tooltip-label">Grid View</span></a>
                                    <a href="javascript:void(0)" class="change-view prd-list"><i class="icon an an-th-list" aria-hidden="true"></i><span class="tooltip-label">List View</span></a>
                                </div>
                            </li>
                            <li class="filters-sort ms-auto ms-sm-0">
                                <div class="filters-toolbar__item">
                                    <label for="SortBy" class="hidden">Sort by:</label>
                                    <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                        <option value="featured" selected="selected">Featured</option>
                                        <option value="best-selling">Best selling</option>
                                        <option value="title-ascending">Alphabetically, A-Z</option>
                                        <option value="title-descending">Alphabetically, Z-A</option>
                                        <option value="price-ascending">Price, low to high</option>
                                        <option value="price-descending">Price, high to low</option>
                                        <option value="created-ascending">Date, old to new</option>
                                        <option value="created-descending">Date, new to old</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End Toolbar-->

                <!--Product Grid-->
                <div class="grid-products grid--view-items prd-grid">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="{{ route('product-detail', ['id' => $product->id]) }}" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset($product->image)}}" src="{{asset($product->image)}}" alt="image" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset($product->productOtherImages[0]->image)}}" src="{{asset($product->productOtherImages[0]->image)}}" alt="image" title="">
                                    <!-- End hover image -->
                                </a>
                                <!--End Product Image-->

                                <!--Countdown Timer-->
                                <div class="saleTime" data-countdown="2024/10/01"></div>
                                <!--End Countdown Timer-->

                                <!--Product Button-->
                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="{{ route('product-detail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="old-price">৳{{ $product->regular_price }}</span>
                                    <span class="price">৳{{ $product->regular_price }}</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i>
                                    <span class="caption hidden ms-2">3 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">{{$product->short_description}}</p>
                                <!--End Sort Description-->
                                <!--Color Variant -->
                                <ul class="image-swatches swatches">
                                    <li class="radius blue medium"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                    <li class="radius pink medium"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                    <li class="radius red medium"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                                    <li class="radius yellow medium"><span class="swacth-btn"></span><span class="tooltip-label">Yellow</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Add To Cart</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        @endforeach
                        {{--<div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-2.jpg" src="{{asset('/')}}frontend/assets/images/products/product-2.jpg" alt="image" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-2-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-2-1.jpg" alt="image" title="">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels"><span class="lbl on-sale rounded">Sale</span></div>
                                    <!-- End product label -->
                                </a>
                                <!--End Product Image-->

                                <!--Product Button-->
                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-quickshop-popup" href="#pro-quickshop1" data-bs-toggle="offcanvas" data-bs-target="#pro-quickshop1" aria-controls="pro-quickshop1"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Quick Shop</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
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
                                                        <li class="swatch-element rounded-0 color gray available active">
                                                            <label class="swatchLbl rounded-0 color small gray" title="Gray"></label>
                                                            <span class="tooltip-label top">Gray</span>
                                                        </li>
                                                        <li data-value="Peach" class="swatch-element rounded-0 color orange available">
                                                            <label class="swatchLbl rounded-0 color small orange" title="Orange"></label>
                                                            <span class="tooltip-label top">Orange</span>
                                                        </li>
                                                        <li data-value="White" class="swatch-element rounded-0 color brown available">
                                                            <label class="swatchLbl rounded-0 color small brown" title="Brown"></label>
                                                            <span class="tooltip-label top">Brown</span>
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
                                                        <li data-value="XS" class="swatch-element xs soldout">
                                                            <label class="swatchLbl rounded-0 medium" title="XS">XS</label><span class="tooltip-label">XS</span>
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
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="product-layout1.html">Mini Sleev Top</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">$199.00</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i>
                                    <span class="caption hidden ms-2">8 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant-->
                                <ul class="swatches">
                                    <li class="swatch medium radius black"><span class="tooltip-label">Black</span></li>
                                    <li class="swatch medium radius navy"><span class="tooltip-label">Navy</span></li>
                                    <li class="swatch medium radius purple"><span class="tooltip-label">Purple</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Select Options</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-3.jpg" src="{{asset('/')}}frontend/assets/images/products/product-3.jpg" alt="image" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-3-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-3-1.jpg" alt="image" title="">
                                    <!-- End hover image -->
                                </a>
                                <!--End Product Image-->
                                <!--Product label-->
                                <div class="product-labels"><span class="lbl pr-label1 rounded">New</span></div>
                                <!--Product label-->

                                <!--Product Button-->
                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="product-layout1.html">Ditsy Floral Dress</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">$99.00</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i>
                                    <span class="caption hidden ms-2">12 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant-->
                                <ul class="swatches">
                                    <li class="swatch medium radius red"><span class="tooltip-label">red</span></li>
                                    <li class="swatch medium radius orange"><span class="tooltip-label">orange</span></li>
                                    <li class="swatch medium radius yellow"><span class="tooltip-label">yellow</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Add To Cart</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-4.jpg" src="{{asset('/')}}frontend/assets/images/products/product-4.jpg" alt="image" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-4-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-4-1.jpg" alt="image" title="">
                                    <!-- End hover image -->
                                    <span class="sold-out"><span class="rounded">Sold out</span></span>
                                </a>
                                <!--End Product Image-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="product-layout1.html">Trim Button Front Blouse</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">$199.00</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i><i class="an an-star-o"></i><i class="an an-star-o"></i>
                                    <span class="caption hidden ms-2">15 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant-->
                                <ul class="swatches">
                                    <li class="swatch medium radius black"><span class="tooltip-label">black</span></li>
                                    <li class="swatch medium radius navy"><span class="tooltip-label">navy</span></li>
                                    <li class="swatch medium radius darkgreen"><span class="tooltip-label">darkgreen</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <button class="btn btn-addto-cart soldOutBtn" type="button"><i class="icon hidden an an-cart-l"></i>Sold Out</button>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-5.jpg" src="{{asset('/')}}frontend/assets/images/products/product-5.jpg" alt="image" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-5-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-5-1.jpg" alt="image" title="">
                                    <!-- End hover image -->
                                </a>
                                <!--End Product Image-->

                                <!--Product Button-->
                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="product-layout1.html">Bodysuit Black</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">$149.00</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i>
                                    <span class="caption hidden ms-2">4 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant-->
                                <ul class="swatches">
                                    <li class="swatch medium radius black"><span class="tooltip-label">black</span></li>
                                    <li class="swatch medium radius maroon"><span class="tooltip-label">maroon</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Add To Cart</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-6.jpg" src="{{asset('/')}}frontend/assets/images/products/product-6.jpg" alt="image" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-6-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-6-1.jpg" alt="image" title="">
                                    <!-- End hover image -->
                                </a>
                                <!--End Product Image-->
                                <!--Product Button-->
                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name">
                                    <a href="product-layout1.html">Sunset Sleep Scarf Top</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">$99.01</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star-o"></i><i class="an an-star-o"></i><i class="an an-star-o"></i><i class="an an-star-o"></i>
                                    <span class="caption hidden ms-2">10 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant-->
                                <ul class="swatches">
                                    <li class="swatch medium radius black"><span class="tooltip-label">black</span></li>
                                    <li class="swatch medium radius navy"><span class="tooltip-label">navy</span></li>
                                    <li class="swatch medium radius darkgreen"><span class="tooltip-label">darkgreen</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Add To Cart</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-7.jpg" src="{{asset('/')}}frontend/assets/images/products/product-7.jpg" alt="image" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-7-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-7-1.jpg" alt="image" title="">
                                    <!-- End hover image -->
                                </a>
                                <!--End Product Image-->
                                <!--Product label-->
                                <div class="product-labels"><span class="lbl pr-label1">New</span></div>
                                <!--Product label-->

                                <!--Product Button-->
                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name">
                                    <a href="product-layout1.html">Button Up Top Black</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">$99.01</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i><i class="an an-star-o"></i> <i class="an an-star-o"></i>
                                    <span class="caption hidden ms-2">13 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant -->
                                <ul class="image-swatches swatches">
                                    <li class="radius red medium"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                                    <li class="radius yellow medium"><span class="swacth-btn"></span><span class="tooltip-label">Yellow</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Add To Cart</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
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
                                <!--End Product Image-->

                                <!--Product Button-->
                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name">
                                    <a href="product-layout1.html">Martha Knit Top</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="old-price">$199.00</span>
                                    <span class="price">$219.00</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i> <i class="an an-star-o"></i>
                                    <span class="caption hidden ms-2">9 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant -->
                                <ul class="image-swatches swatches">
                                    <li class="radius blue medium"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                    <li class="radius pink medium"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                    <li class="radius red medium"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                                    <li class="radius yellow medium"><span class="swacth-btn"></span><span class="tooltip-label">Yellow</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Add To Cart</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-9-2.jpg" src="{{asset('/')}}frontend/assets/images/products/product-9-2.jpg" alt="image" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-9-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-9-1.jpg" alt="image" title="">
                                    <!-- End hover image -->
                                </a>
                                <!--End Product Image-->

                                <!--Countdown Timer-->
                                <div class="saleTime" data-countdown="2024/10/01"></div>
                                <!--End Countdown Timer-->

                                <!--Product Button-->
                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name">
                                    <a href="product-layout1.html">Long Sleeve T-shirts</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">$199.01</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i>
                                    <span class="caption hidden ms-2">20 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant-->
                                <ul class="swatches">
                                    <li class="swatch medium radius purple"><span class="tooltip-label">Purple</span></li>
                                    <li class="swatch medium radius black"><span class="tooltip-label">Black</span></li>
                                    <li class="swatch medium radius navy"><span class="tooltip-label">Navy</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Add To Cart</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-10.jpg" src="{{asset('/')}}frontend/assets/images/products/product-10.jpg" alt="image" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-10-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-10-1.jpg" alt="image" title="">
                                    <!-- End hover image -->
                                </a>
                                <!--End Product Image-->

                                <!--Product Button-->
                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name">
                                    <a href="product-layout1.html">Backpack With Contrast Bow</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">$39.01</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i>
                                    <span class="caption hidden ms-2">2 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant-->
                                <ul class="swatches">
                                    <li class="swatch medium radius black"><span class="tooltip-label">black</span></li>
                                    <li class="swatch medium radius maroon"><span class="tooltip-label">maroon</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Add To Cart</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-11.jpg" src="{{asset('/')}}frontend/assets/images/products/product-11.jpg" alt="image" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-11-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-11-1.jpg" alt="image" title="">
                                    <!-- End hover image -->
                                </a>
                                <!--End Product Image-->

                                <!--Product Button-->
                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name">
                                    <a href="product-layout1.html">Puffer Jacket</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">$89.00</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i>
                                    <span class="caption hidden ms-2">6 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant -->
                                <ul class="image-swatches swatches">
                                    <li class="radius blue medium"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                    <li class="radius pink medium"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                    <li class="radius yellow medium"><span class="swacth-btn"></span><span class="tooltip-label">Yellow</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Add To Cart</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-12.jpg" src="{{asset('/')}}frontend/assets/images/products/product-12.jpg" alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-12-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-12-1.jpg" alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!--End Product Image-->

                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
                                    </ul>
                                </div>
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name">
                                    <a href="product-layout1.html">Long Sleeve T-shirts</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">$199.00</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i>
                                    <span class="caption hidden ms-2">20 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant-->
                                <ul class="swatches">
                                    <li class="swatch medium radius black"><span class="tooltip-label">Black</span></li>
                                    <li class="swatch medium radius purple"><span class="tooltip-label">Purple</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Add To Cart</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-13.jpg" src="{{asset('/')}}frontend/assets/images/products/product-13.jpg" alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-13-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-13-1.jpg" alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!--End Product Image-->
                                <!--Product label-->
                                <div class="product-labels"><span class="lbl pr-label1">HOT</span></div>
                                <!--Product label-->

                                <!--Product Button-->
                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name">
                                    <a href="product-layout1.html">Stand Collar Slim Shirt</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">$399.00</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i><i class="an an-star-o"></i><i class="an an-star-o"></i>
                                    <span class="caption hidden ms-2">19 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant-->
                                <ul class="swatches">
                                    <li class="swatch medium radius red"><span class="tooltip-label">red</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Add To Cart</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-14.jpg" src="{{asset('/')}}frontend/assets/images/products/product-14.jpg" alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-14-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-14-1.jpg" alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!--End Product Image-->

                                <!--Product Button-->
                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name">
                                    <a href="product-layout1.html">Martha Knit Top</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="old-price">$199.00</span>
                                    <span class="price">$219.00</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i>
                                    <span class="caption hidden ms-2">24 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant -->
                                <ul class="swatches">
                                    <li class="swatch medium radius green"><span class="tooltip-label">Green</span></li>
                                    <li class="swatch medium radius orange"><span class="tooltip-label">Orange</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Add To Cart</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-15.jpg" src="{{asset('/')}}frontend/assets/images/products/product-15.jpg" alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-15-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-15-1.jpg" alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!--End Product Image-->
                                <!--Product Button-->
                                <div class="button-set style0 d-none d-md-block">
                                    <ul>
                                        <!--Cart Button-->
                                        <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                        <!--End Compare Button-->
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name">
                                    <a href="product-layout1.html">Weave Hoodie Sweatshirt</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">$199.00</span>
                                </div>
                                <!--End Product Price-->
                                <!--Product Review-->
                                <div class="product-review d-flex align-items-center justify-content-center">
                                    <i class="an an-star"></i><i class="an an-star-o"></i><i class="an an-star-o"></i><i class="an an-star-o"></i><i class="an an-star-o"></i>
                                    <span class="caption hidden ms-2">2 reviews</span>
                                </div>
                                <!--End Product Review-->
                                <!--Sort Description-->
                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                <!--End Sort Description-->
                                <!--Color Variant-->
                                <ul class="swatches">
                                    <li class="swatch medium radius darkgreen"><span class="tooltip-label">darkgreen</span></li>
                                </ul>
                                <!--End Color Variant-->
                                <!-- Product Button -->
                                <div class="button-action d-flex">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Add To Cart</a>
                                        </form>
                                    </div>
                                    <div class="quickview-btn">
                                        <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a>
                                    </div>
                                    <div class="wishlist-btn">
                                        <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="btn btn-icon compare add-to-compare" href="compare.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>--}}
                    </div>
                </div>
                <!--End Product Grid-->

                <!--Pagination Classic-->
                <hr class="clear">
                <div class="pagination">
                    <ul>
                        <li class="prev"><a href="#"><i class="icon align-middle an an-caret-left" aria-hidden="true"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">5</a></li>
                        <li class="next"><a href="#"><i class="icon align-middle an an-caret-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <!--End Pagination Classic-->

                <!--Collection Description-->
                <div class="collection-description mt-4 pt-2 pb-5">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard reader dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen the book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <!--End Collection Description-->
            </div>
            <!--End Main Content-->
        </div>
    </div>

@endsection
