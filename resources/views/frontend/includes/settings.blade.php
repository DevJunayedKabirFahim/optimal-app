<!--Sticky Menubar Mobile-->
<div class="menubar-mobile d-flex align-items-center justify-content-between d-lg-none">
    <div class="menubar-shop menubar-item">
        <a href="category-4columns.html"><i class="menubar-icon an an-th-large-l"></i><span class="menubar-label">Shop</span></a>
    </div>
    <div class="menubar-account menubar-item">
        <a href="my-account.html"><span class="menubar-icon an an-user-expand"></span><span class="menubar-label">Account</span></a>
    </div>
    <div class="menubar-search menubar-item">
        <a href="index.html"><span class="menubar-icon an an-home-l"></span><span class="menubar-label">Home</span></a>
    </div>
    <div class="menubar-wish menubar-item">
        <a href="my-wishlist.html">
            <span class="span-count position-relative text-center"><span class="menubar-icon an an-heart-l"></span><span class="menubar-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">0</span></span>
            <span class="menubar-label">Wishlist</span>
        </a>
    </div>
    <div class="menubar-cart menubar-item">
        <a href="cart-style1.html" class="cartBtn" data-bs-toggle="modal" data-bs-target="#minicart-drawer">
            <span class="span-count position-relative text-center"><span class="menubar-icon an an-sq-bag"></span><span class="menubar-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">2</span></span>
            <span class="menubar-label">Cart</span>
        </a>
    </div>
</div>
<!--End Sticky Menubar Mobile-->
<!--Scoll Top-->
<span id="site-scroll"><i class="icon an an-arw-up"></i></span>
<!--End Scoll Top-->

<!--MiniCart Drawer-->
<div class="minicart-right-drawer modal right fade" id="minicart-drawer">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--MiniCart Empty-->
            <div id="cartEmpty" class="cartEmpty d-flex-justify-center flex-column text-center p-3 text-muted shadow d-none">
                <div class="minicart-header d-flex-center justify-content-between w-100">
                    <h4 class="fs-6 text-transform-none text-black">Your cart (0 Items)</h4>
                    <a href="javascript:void(0);" class="close-cart" data-bs-dismiss="modal" aria-label="Close"><i class="an an-times-r" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></a>
                </div>
                <div class="cartEmpty-content my-4">
                    <i class="icon an an-sq-bag fs-1 text-muted"></i>
                    <p class="my-3">No Products in the Cart</p>
                    <a href="category-4columns.html" class="btn btn-primary cart-btn rounded-0">Continue shopping</a>
                </div>
            </div>
            <!--End MiniCart Empty-->

            <!--MiniCart Content-->
            <div id="cart-drawer" class="block block-cart">
                <div class="minicart-header">
                    <a href="javascript:void(0);" class="close-cart" data-bs-dismiss="modal" aria-label="Close"><i class="an an-times-r" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></a>
                    <h4 class="fs-6 text-transform-none text-black">Your cart (2 Items)</h4>
                </div>
                <div class="minicart-content">
                    <ul class="m-0 clearfix">
                        <li class="item d-flex justify-content-center align-items-center">
                            <a class="product-image" href="product-layout1.html">
                                <img class="blur-up lazyload" src="{{asset('/')}}frontend/assets/images/products/cart-product-img1.jpg" data-src="{{asset('/')}}frontend/assets/images/products/cart-product-img1.jpg" alt="image" title="">
                            </a>
                            <div class="product-details">
                                <a class="product-title" href="product-layout1.html">Floral Crop Top</a>
                                <div class="variant-cart">Black / XL</div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="money">$59.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="qtyDetail text-center">
                                <div class="wrapQtyBtn">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty rounded-0">
                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <a href="#" class="edit-i remove"><i class="icon an an-edit-l" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                <a href="#" class="remove"><i class="an an-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                            </div>
                        </li>
                        <li class="item d-flex justify-content-center align-items-center">
                            <a class="product-image" href="product-layout1.html">
                                <img class="blur-up lazyload" src="{{asset('/')}}frontend/assets/images/products/cart-product-img2.jpg" data-src="{{asset('/')}}frontend/assets/images/products/cart-product-img2.jpg" alt="image" title="">
                            </a>
                            <div class="product-details">
                                <a class="product-title" href="product-layout1.html">V Neck T-shirts</a>
                                <div class="variant-cart">Blue / XL</div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="money">$199.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="qtyDetail text-center">
                                <div class="wrapQtyBtn">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty rounded-0">
                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <a href="#" class="edit-i remove"><i class="icon an an-edit-l" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                <a href="#" class="remove"><i class="an an-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="minicart-bottom text-black">
                    <div class="shipinfo text-center mb-3 text-uppercase">
                        <p class="freeShipMsg"><i class="an an-truck fs-5 me-2 align-middle"></i>SPENT <b>$199.00</b> MORE FOR FREE SHIPPING</p>
                    </div>
                    <div class="subtotal">
                        <span>Total:</span>
                        <span class="product-price">$93.13</span>
                    </div>
                    <a href="checkout-style2.html" class="w-100 p-2 my-2 btn proceed-to-checkout">Proceed to Checkout</a>
                    <a href="cart-style2.html" class="w-100 btn btn-outline-primary cart-btn">View Cart</a>
                </div>
            </div>
            <!--End MiniCart Content-->
        </div>
    </div>
</div>
<!--End MiniCart Drawer-->
<div class="modalOverly"></div>

<!--Quickview Popup-->
<div class="loadingBox"><div class="an-spin"><i class="icon an an-spinner4"></i></div></div>
<div id="quickView-modal" class="mfp-with-anim mfp-hide">
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
            <!--Model thumbnail -->
            <div id="quickView" class="carousel slide">
                <!-- Image Slide carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active" data-bs-slide-number="0">
                        <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-5.jpg" src="{{asset('/')}}frontend/assets/images/products/product-5.jpg" alt="image" title="" />
                    </div>
                    <div class="item carousel-item" data-bs-slide-number="1">
                        <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-5-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-5-1.jpg" alt="image" title="" />
                    </div>
                    <div class="item carousel-item" data-bs-slide-number="2">
                        <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-5-2.jpg" src="{{asset('/')}}frontend/assets/images/products/product-5-2.jpg" alt="image" title="" />
                    </div>
                    <div class="item carousel-item" data-bs-slide-number="3">
                        <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-5-3.jpg" src="{{asset('/')}}frontend/assets/images/products/product-5-3.jpg" alt="image" title="" />
                    </div>
                    <div class="item carousel-item" data-bs-slide-number="4">
                        <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-5-4.jpg" src="{{asset('/')}}frontend/assets/images/products/product-5-4.jpg" alt="image" title="" />
                    </div>
                </div>
                <!-- End Image Slide carousel items -->
                <!-- Thumbnail image -->
                <div class="model-thumbnail-img">
                    <!-- Thumbnail slide -->
                    <div class="carousel-indicators list-inline">
                        <div class="list-inline-item active" id="carousel-selector-0" data-bs-slide-to="0" data-bs-target="#quickView">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-5.jpg" src="{{asset('/')}}frontend/assets/images/products/product-5.jpg" alt="image" title="" />
                        </div>
                        <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1" data-bs-target="#quickView">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-5-1.jpg" src="{{asset('/')}}frontend/assets/images/products/product-5-1.jpg" alt="image" title="" />
                        </div>
                        <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2" data-bs-target="#quickView">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-5-2.jpg" src="{{asset('/')}}frontend/assets/images/products/product-5-2.jpg" alt="image" title="" />
                        </div>
                        <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#quickView">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-5-3.jpg" src="{{asset('/')}}frontend/assets/images/products/product-5-3.jpg" alt="image" title="" />
                        </div>
                        <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4" data-bs-target="#quickView">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}frontend/assets/images/products/product-5-4.jpg" src="{{asset('/')}}frontend/assets/images/products/product-5-4.jpg" alt="image" title="" />
                        </div>
                    </div>
                    <!-- End Thumbnail slide -->
                    <!-- Carousel arrow button -->
                    <a class="carousel-control-prev carousel-arrow" href="#quickView" data-bs-target="#quickView" data-bs-slide="prev"><i class="icon an-3x an an-angle-left"></i><span class="visually-hidden">Previous</span></a>
                    <a class="carousel-control-next carousel-arrow" href="#quickView" data-bs-target="#quickView" data-bs-slide="next"><i class="icon an-3x an an-angle-right"></i><span class="visually-hidden">Next</span></a>
                    <!-- End Carousel arrow button -->
                </div>
                <!-- End Thumbnail image -->
            </div>
            <!--End Model thumbnail -->
            <div class="text-center mt-3"><a href="product-layout1.html">VIEW MORE DETAILS</a></div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <h2 class="product-title">Product Quick View Popup</h2>
            <div class="product-review d-flex-center mb-2">
                <div class="rating"><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star-o"></i></div>
                <div class="reviews ms-2"><a href="#">5 Reviews</a></div>
            </div>
            <div class="product-info">
                <p class="product-vendor">Vendor:  <span class="fw-normal"><a href="#" class="fw-normal">Optimal</a></span></p>
                <p class="product-type">Product Type: <span class="fw-normal">Tops</span></p>
                <p class="product-sku">SKU:  <span class="fw-normal">50-ABC</span></p>
            </div>
            <div class="pro-stockLbl my-2">
                <span class="d-flex-center stockLbl instock"><i class="icon an an-check-cil"></i><span> In stock</span></span>
                <span class="d-flex-center stockLbl preorder d-none"><i class="icon an an-clock-r"></i><span> Pre-order Now</span></span>
                <span class="d-flex-center stockLbl outstock d-none"><i class="icon an an-times-cil"></i> <span>Sold out</span></span>
                <span class="d-flex-center stockLbl lowstock d-none" data-qty="15"><i class="icon an an-exclamation-cir"></i><span> Order now, Only  <span class="items">10</span>  left!</span></span>
            </div>
            <div class="pricebox">
                <span class="price old-price">$400.00</span><span class="price product-price__sale">$300.00</span>
            </div>
            <div class="sort-description">Optimal Multipurpose Bootstrap 5 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion.. </div>
            <form method="post" action="#" id="product_form--option" class="product-form">
                <div class="product-options d-flex-wrap">
                    <div class="swatch clearfix swatch-0 option1">
                        <div class="product-form__item">
                            <label class="label d-flex">Color:<span class="required d-none">*</span> <span class="slVariant ms-1 fw-bold">Black</span></label>
                            <ul class="swatches-image swatches d-flex-wrap list-unstyled clearfix">
                                <li data-value="Black" class="swatch-element color available active">
                                    <label class="rounded-0 swatchLbl small color black" title="Black"></label>
                                    <span class="tooltip-label top">Black</span>
                                </li>
                                <li data-value="Green" class="swatch-element color available">
                                    <label class="rounded-0 swatchLbl small color green" title="Green"></label>
                                    <span class="tooltip-label top">Green</span>
                                </li>
                                <li data-value="Orange" class="swatch-element color available">
                                    <label class="rounded-0 swatchLbl small color orange" title="Orange"></label>
                                    <span class="tooltip-label top">Orange</span>
                                </li>
                                <li data-value="Blue" class="swatch-element color available">
                                    <label class="rounded-0 swatchLbl small color blue" title="Blue"></label>
                                    <span class="tooltip-label top">Blue</span>
                                </li>
                                <li data-value="Red" class="swatch-element color available">
                                    <label class="rounded-0 swatchLbl small color red" title="Red"></label>
                                    <span class="tooltip-label top">Red</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="swatch clearfix swatch-1 option2">
                        <div class="product-form__item">
                            <label class="label">Size:<span class="required d-none">*</span> <span class="slVariant ms-1 fw-bold">XS</span></label>
                            <ul class="swatches-size d-flex-center list-unstyled clearfix swatch-1 option2">
                                <li data-value="XS" class="swatch-element xs available active">
                                    <label class="swatchLbl rounded-0 medium" title="XS">XS</label>
                                    <span class="tooltip-label">XS</span>
                                </li>
                                <li data-value="S" class="swatch-element s available">
                                    <label class="swatchLbl rounded-0 medium" title="S">S</label>
                                    <span class="tooltip-label">S</span>
                                </li>
                                <li data-value="M" class="swatch-element m available">
                                    <label class="swatchLbl rounded-0 medium" title="M">M</label>
                                    <span class="tooltip-label">M</span>
                                </li>
                                <li data-value="L" class="swatch-element l available">
                                    <label class="swatchLbl rounded-0 medium" title="L">L</label>
                                    <span class="tooltip-label">L</span>
                                </li>
                                <li data-value="XL" class="swatch-element xl available">
                                    <label class="swatchLbl rounded-0 medium" title="XL">XL</label>
                                    <span class="tooltip-label">XL</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-action d-flex-wrap w-100 mb-3 clearfix">
                        <div class="quantity">
                            <div class="qtyField rounded">
                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                <input type="text" name="quantity" value="1" class="product-form__input qty rounded-0">
                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="add-to-cart ms-3 fl-1">
                            <button type="button" class="btn button-cart rounded-0"><span>Add to cart</span></button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="wishlist-btn d-flex-center">
                <a class="add-wishlist d-flex-center text-uppercase me-3" href="my-wishlist.html" title="Add to Wishlist"><i class="icon an an-heart-l me-1"></i> <span>Add to Wishlist</span></a>
                <a class="add-compare d-flex-center text-uppercase" href="compare-style1.html" title="Add to Compare"><i class="icon an an-random-r me-2"></i> <span>Add to Compare</span></a>
            </div>
            <!-- Social Sharing -->
            <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                <span class="sharing-lbl me-2">Share :</span>
                <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i class="icon an an-facebook mx-1"></i><span class="share-title d-none">Facebook</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i class="icon an an-twitter mx-1"></i><span class="share-title d-none">Tweet</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i class="icon an an-pinterest-p mx-1"></i> <span class="share-title d-none">Pin it</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i class="icon an an-instagram mx-1"></i><span class="share-title d-none">Instagram</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on WhatsApp"><i class="icon an an-whatsapp mx-1"></i><span class="share-title d-none">WhatsApp</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i class="icon an an-envelope-l mx-1"></i><span class="share-title d-none">Email</span></a>
            </div>
            <!-- End Social Sharing -->
        </div>
    </div>
</div>
<!--End Quickview Popup-->

<!--Addtocart Added Popup-->
<div id="pro-addtocart-popup" class="mfp-with-anim mfp-hide">
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    <div class="addtocart-inner text-center clearfix">
        <h4 class="title mb-3 text-success">Added to your shopping cart successfully.</h4>
        <div class="pro-img mb-3">
            <img class="img-fluid blur-up lazyload" src="{{asset('/')}}frontend/assets/images/products/add-to-cart-popup.jpg" data-src="{{asset('/')}}frontend/assets/images/products/add-to-cart-popup.jpg" alt="Added to your shopping cart successfully." title="Added to your shopping cart successfully." />
        </div>
        <div class="pro-details">
            <h5 class="pro-name mb-0">Ditsy Floral Dress</h5>
            <p class="sku my-2">Color: Gray</p>
            <p class="mb-0 qty-total">1 X $113.88</p>
            <div class="addcart-total bg-light mt-3 mb-3 p-2">
                Total: <b class="price">$113.88</b>
            </div>
            <div class="button-action">
                <a href="checkout-style1.html" class="btn btn-primary view-cart mx-1 rounded-0">Go To Checkout</a>
                <a href="index.html" class="btn btn-secondary rounded-0">Continue Shopping</a>
            </div>
        </div>
    </div>
</div>
<!-- End Addtocart Added Popup-->
@if(\Request::route()->getName() == 'home')
    <!--Newsletter Popup-->
    <div id="newsletter-modal" class="style2 mfp-with-anim mfp-hide">
        <div class="d-flex flex-row align-items-center">
            <div class="newsltr-img col-md-6 d-none d-sm-none d-md-block"><img src="{{asset('/')}}frontend/assets/images/newsletter-s2-img.jpg" alt="image"></div>
            <div class="newsltr-text col-md-6 text-center">
                <div class="wraptext mw-100">
                    <h2 class="title mb-3">Hey Good Looking</h2>
                    <p class="mb-3">Here is your <b>10% DISCOUNT</b> to get something new.</p>
                    <form action="#" method="post" class="mcNewsletter mb-4">
                        <div class="input-group d-flex flex-wrap">
                            <input type="email" class="newsletter__input mb-3 rounded-0 w-100" name="EMAIL" value="" placeholder="Email address" required>
                            <button type="submit" class="btn mcNsBtn rounded-0 w-100" name="commit"><span>Subscribe</span></button>
                        </div>
                    </form>
                    <div class="customCheckbox justify-content-center checkboxlink clearfix">
                        <input id="dontshow" name="newsPopup" type="checkbox" />
                        <label for="dontshow" class=""><u>NO THANKS, LET ME SHOP</u></label>
                    </div>
                </div>
            </div>
        </div>
        <button title="Close (Esc)" type="button" class="mfp-close text-black">×</button>
    </div>
    <!--End Newsletter Popup-->
@endif
