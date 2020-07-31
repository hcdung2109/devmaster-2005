@extends('shop.layouts.main')
@section('content')
    <div class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 page-top-left">
                    <div class="popular-tabs">
                        <ul class="nav-tab">
                            <li class="active"><a data-toggle="tab" href="#tab-1">BEST SELLERS</a></li>
                            <li><a data-toggle="tab" href="#tab-2">ON SALE</a></li>
                            <li><a data-toggle="tab" href="#tab-3">New products</a></li>
                        </ul>
                        <div class="tab-container">
                            <div id="tab-1" class="tab-panel active">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="/shop/data/bs1.jpg" />
                                            </a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                            <div class="group-price">
                                                <span class="product-new">NEW</span>
                                                <span class="product-sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Sexy Lady</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/shop/data/bs2.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Perfect Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/shop/data/bs3.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="group-price">
                                            <span class="product-new">NEW</span>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Fresh Summer</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/shop/data/bs4.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab-2" class="tab-panel">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "30"  data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="/shop/data/p48.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="/shop/data/p49.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/shop/data/p50.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/shop/data/p51.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab-3" class="tab-panel">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/shop/data/p60.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/shop/data/p61.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/shop/data/p62.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/shop/data/p63.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 page-top-right">
                    <div class="latest-deals">
                        <h2 class="latest-deal-title">latest deals</h2>
                        <div class="latest-deal-content">
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":1}}'>
                                <li>
                                    <div class="count-down-time" data-countdown="2015/06/27"></div>
                                    <div class="left-block">
                                        <a href="#"><img class="img-responsive" alt="product" src="/shop/data/ld1.jpg" /></a>
                                        <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                            <span class="colreduce-percentage">(-10%)</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                    <div class="left-block">
                                        <a href="#"><img class="img-responsive" alt="product" src="/shop/data/ld2.jpg" /></a>
                                        <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                            <span class="colreduce-percentage">(-90%)</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                    <div class="left-block">
                                        <a href="#"><img class="img-responsive" alt="product" src="/shop/data/ld3.jpg" /></a>
                                        <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                            <span class="colreduce-percentage">(-20%)</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div class="content-page">
        <div class="container">
            <!-- featured category fashion -->
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-red show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#">Điện Thoại</a></div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#tab-4">Best Seller</a></li>
                                <li><a data-toggle="tab" href="#tab-5">Most Viewed</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>

                <div class="product-featured clearfix">
                    <div class="banner-featured">
                        <div class="featured-text"><span>featured</span></div>
                        <div class="banner-img">
                            <a href="#"><img alt="Featurered 1" src="/shop/data/f1.jpg" /></a>
                        </div>
                    </div>
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-4">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/01_blue-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Blue Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/02_yellow-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Yellow Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/03_cyan-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Cyan Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/04_nice-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Nice Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/05_flowers-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/06_red-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Red Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab product -->
                                <div class="tab-panel" id="tab-5">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/04_nice-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Nice Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/05_flowers-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/06_red-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Red Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/01_blue-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Blue Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/02_yellow-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Yellow Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/03_cyan-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Cyan Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/04_nice-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Nice Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/05_flowers-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="/shop/data/06_red-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Red Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category fashion -->

            <!-- Baner bottom -->
            <div class="row banner-bottom">
                <div class="col-sm-6">
                    <div class="banner-boder-zoom">
                        <a href="#"><img alt="ads" class="img-responsive" src="/shop/data/ads17.jpg" /></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="banner-boder-zoom">
                        <a href="#"><img alt="ads" class="img-responsive" src="/shop/data/ads18.jpg" /></a>
                    </div>
                </div>
            </div>
            <!-- end banner bottom -->
        </div>
    </div>
@endsection
