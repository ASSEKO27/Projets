<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="/acceuil">Acceuil</a></li>
        <li><a href="/presentation">Presentation</a></li>
        <li><a href="/produits">Produits</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>

</body>

</html>-->

@extends("layouts.template")


@section("contenu")

<!--debut slider-->
@include('layouts.slider')
<!--fin slider-->

<!-- debut banner-->
{{-- @include('layouts.banner') --}}
<!--fin banner-->

<!--debut product-->
{{-- <div class="product-area pb-120 bg-img pt-120" style="background-image:url(assets/img/bg/section-bg-2.png);">
    <div class="container">
        <div class="product-top-bar section-border mb-60">
            <div class="section-title-4">
                <h3 class="bg-gray-5">Featured Products</h3>
            </div>
            <div class="product-tab-list-3 nav bg-gray-5">
                <a class="active" data-bs-toggle="tab" href="#hm14-tab2">
                    <h4>All </h4>
                </a>
                <a data-bs-toggle="tab" href="#hm14-tab1">
                    <h4>Winter </h4>
                </a>
                <a data-bs-toggle="tab" href="#hm14-tab3">
                    <h4> Various  </h4>
                </a>
                <a data-bs-toggle="tab" href="#hm14-tab4">
                    <h4>Greens </h4>
                </a>
            </div>
        </div>
        <div class="tab-content jump">
            <div class="tab-pane" id="hm14-tab1">
                <div class="product-slider-active owl-carousel owl-dot-none">
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-4.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-4.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">Multiple Strings Lights</a></h3>
                                <div class="price-2">
                                    <span>$ 60.00</span>
                                    <span class="old red">$ 60.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-3.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-3.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">Holiday Candle</a></h3>
                                <div class="price-2">
                                    <span>$ 70.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-1.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-1.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 40.00</span>
                                    <span class="old red">$ 50.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">Fresh Poinsettias</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-4.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-4.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">Multiple Strings Lights</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-view-more view-more-radious text-center">
                    <a href="shop.html"><i class="fa fa-refresh"></i> View More</a>
                </div>
            </div>
            <div class="tab-pane active" id="hm14-tab2">
                <div class="product-slider-active owl-carousel owl-dot-none">
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-1.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-1.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 60.00</span>
                                    <span class="old red">$ 60.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 70.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-3.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-3.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 40.00</span>
                                    <span class="old red">$ 50.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-4.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-4.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-view-more view-more-radious text-center">
                    <a href="shop.html"><i class="fa fa-refresh"></i> View More</a>
                </div>
            </div>
            <div class="tab-pane" id="hm14-tab3">
                <div class="product-slider-active owl-carousel owl-dot-none">
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-3.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-3.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 60.00</span>
                                    <span class="old red">$ 60.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-1.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-1.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 70.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-4.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-4.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 40.00</span>
                                    <span class="old red">$ 50.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-1.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-1.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-view-more view-more-radious text-center">
                    <a href="shop.html"><i class="fa fa-refresh"></i> View More</a>
                </div>
            </div>
            <div class="tab-pane" id="hm14-tab4">
                <div class="product-slider-active owl-carousel owl-dot-none">
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 60.00</span>
                                    <span class="old red">$ 60.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-1.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-1.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 70.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-4.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-4.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 40.00</span>
                                    <span class="old red">$ 50.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-3.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-3.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-view-more view-more-radious text-center">
                    <a href="#"><i class="fa fa-refresh"></i> View More</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--fin product-->


<!--debut deal-->
{{-- <div class="deal-area pt-90 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="common-deal-img">
                    <a href="#"><img class="wow fadeInLeft" src="{{asset('assets/img/banner/deal-8.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="funfact-content funfact-res text-center">
                    <h2>Deal of the day</h2>
                    <div class="timer">
                        <div data-countdown="2022/06/01"></div>
                    </div>
                    <div class="funfact-btn btn-only-round funfact-btn-red-3 btn-hover">
                        <a href="#">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--fin deal-->

<!--testimonial-->
{{-- <div class="testimonial-area bg-img pt-100 pb-95" style="background-image:url({{asset('assets/img/bg/section-bg-3.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 ms-auto me-auto">
                <div class="testimonial-active owl-carousel nav-style-1 nav-testi-style owl-dot-none">
                    <div class="single-testimonial text-center">
                        <img src="{{asset('assets/img/testimonial/testi-1.png')}}" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <div class="client-info">
                            <i class="fa fa-map-signs"></i>
                            <h5>Grace Alvarado</h5>
                            <span>Customer</span>
                        </div>
                    </div>
                    <div class="single-testimonial text-center">
                        <img src="{{asset('assets/img/testimonial/testi-1.png')}}" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <div class="client-info">
                            <i class="fa fa-map-signs"></i>
                            <h5>Grace Alvarado</h5>
                            <span>Customer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--testimonial-->

<!-- debut product-->
{{-- <div class="product-area pb-70 pt-100">
    <div class="container">
        <div class="product-top-bar section-border mb-60">
            <div class="section-title-4">
                <h3 class="bg-white">Featured Products</h3>
            </div>
            <div class="product-tab-list-3 nav bg-white">
                <a class="active" data-bs-toggle="tab" href="#hm14-tab5">
                    <h4>All </h4>
                </a>
                <a data-bs-toggle="tab" href="#hm14-tab6">
                    <h4>Winter </h4>
                </a>
                <a data-bs-toggle="tab" href="#hm14-tab7">
                    <h4> Various  </h4>
                </a>
                <a data-bs-toggle="tab" href="#hm14-tab8">
                    <h4>Greens </h4>
                </a>
            </div>
        </div>
        <div class="tab-content jump">
            <div class="tab-pane" id="hm14-tab6">
                <div class="product-slider-active owl-carousel owl-dot-none">
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-8.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-8.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 60.00</span>
                                    <span class="old red">$ 60.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-7.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-7.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 70.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-5.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-5.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 40.00</span>
                                    <span class="old red">$ 50.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-6.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-6.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-8.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-8.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane active" id="hm14-tab5">
                <div class="product-slider-active owl-carousel owl-dot-none">
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-5.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-5.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 60.00</span>
                                    <span class="old red">$ 60.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 70.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-7.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-7.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 40.00</span>
                                    <span class="old red">$ 50.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-8.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-8.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-2.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="hm14-tab7">
                <div class="product-slider-active owl-carousel owl-dot-none">
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-7.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-7.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 60.00</span>
                                    <span class="old red">$ 60.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-4.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-4.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 70.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-8.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-8.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 40.00</span>
                                    <span class="old red">$ 50.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-6.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-6.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-5.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-5.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="hm14-tab8">
                <div class="product-slider-active owl-carousel owl-dot-none">
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-6.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-6.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 60.00</span>
                                    <span class="old red">$ 60.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-5.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-5.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 70.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-8.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-8.jpg')}}" alt="">
                            </a>
                            <span class="red">-10%</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 40.00</span>
                                    <span class="old red">$ 50.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-7.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-7.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-2 mb-25">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{asset('assets/img/product/hm27-pro-6.jpg')}}" alt="">
                                <img class="hover-img" src="{{asset('assets/img/product/hm27-pro-6.jpg')}}" alt="">
                            </a>
                            <span class="purple">New</span>
                            <div class="product-action-2 product-action-2-red">
                                <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <div class="title-price-wrap-2">
                                <h3><a href="product-details.html">T-Shirt And Jeans</a></h3>
                                <div class="price-2">
                                    <span>$ 80.00</span>
                                </div>
                            </div>
                            <div class="pro-wishlist-2">
                                <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--fin product -->

<!--debut subscribe-->
<div class="subscribe-area-3 pb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5 col-lg-7 col-md-10 ms-auto me-auto">
                {{-- <div class="subscribe-style-3 text-center">
                    <h2>Subscribe </h2>
                    <p>Subscribe to our newsletter to receive news on update</p>
                    <div id="mc_embed_signup" class="subscribe-form-3 mt-35">
                        <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input class="email" type="email" required="" placeholder="Your Email Address" name="EMAIL" value="">
                                <div class="mc-news" aria-hidden="true">
                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                </div>
                                <div class="clear-3 red-subscribe red-subscribe-2">
                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!--fin subscrite-->>

@endsection
