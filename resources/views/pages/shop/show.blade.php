@extends('layouts.app')

@section('title', 'Details for ' . $product->name)

@section('header')
<!-- Start Bradcaump area -->
@include('layouts.partials.bradcaump')
<!-- End Bradcaump area -->
@endsection

@section('content')
<!-- Start Product Details Area -->
<section class="htc__product__details bg__white ptb--100">
    <!-- Start Product Details Top -->
    <div class="htc__product__details__top">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="htc__product__details__tab__content">
                        <!-- Start Product Big Images -->
                        <div class="product__big__images">
                            <div class="portfolio-full-image tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                    <img src="/assets/images/product-2/big-img/1.jpg" alt="full-image">
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="img-tab-2">
                                    <img src="/assets/images/product-2/big-img/2.jpg" alt="full-image">
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="img-tab-3">
                                    <img src="/assets/images/product-2/big-img/3.jpg" alt="full-image">
                                </div>
                            </div>
                        </div>
                        <!-- End Product Big Images -->
                        <!-- Start Small images -->
                        <ul class="product__small__images" role="tablist">
                            <li role="presentation" class="pot-small-img active">
                                <a href="#img-tab-1" role="tab" data-toggle="tab">
                                    <img src="/assets/images/product-2/sm-img-3/3.jpg" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img">
                                <a href="#img-tab-2" role="tab" data-toggle="tab">
                                    <img src="/assets/images/product-2/sm-img-3/1.jpg" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img">
                                <a href="#img-tab-3" role="tab" data-toggle="tab">
                                    <img src="/assets/images/product-2/sm-img-3/2.jpg" alt="small-image">
                                </a>
                            </li>
                        </ul>
                        <!-- End Small images -->
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                    <div class="ht__product__dtl">
                        <h2>{{ $product->name }}</h2>
                        <h6>Model: <span>MNG001</span></h6>
                        <ul class="rating">
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                        </ul>
                        <ul class="pro__prize">
                            {{-- <li class="old__prize">$82.5</li> --}}
                            <li>{{ $product->price }}</li>
                        </ul>
                        <p class="pro__info">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                            veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                            commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                            molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                        </p>
                        <div class="ht__pro__desc">
                            <div class="sin__desc">
                                <p><span>Availability:</span> In Stock</p>
                            </div><br>

                            <div class="fr__list__btn">
                                <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">

                                    <button type="submit" class="fr__btn cart">Add To Cart</button>
                                </form>
                            </div>

                            <div class="sin__desc align--left">
                                <p><span>Categories:</span></p>
                                <ul class="pro__cat__list">
                                    <li><a href="#">Fashion,</a></li>
                                </ul>
                            </div>

                            <div class="sin__desc product__share__link">
                                <p><span>Share this:</span></p>
                                <ul class="pro__share">
                                    <li><a href="#" target="_blank"><i class="icon-social-twitter icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-instagram icons"></i></a></li>

                                    <li><a href="https://www.facebook.com/Furny/?ref=bookmarks" target="_blank"><i
                                                class="icon-social-facebook icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-google icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-linkedin icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-pinterest icons"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Details Top -->
</section>
<!-- End Product Details Area -->
<!-- Start Product Description -->
<section class="htc__produc__decription bg__white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Start List And Grid View -->
                <ul class="pro__details__tab" role="tablist">
                    <li role="presentation" class="description active"><a href="#description" role="tab"
                            data-toggle="tab">description</a></li>
                    <li role="presentation" class="review"><a href="#review" role="tab" data-toggle="tab">details</a>
                    </li>
                    <li role="presentation" class="shipping"><a href="#shipping" role="tab"
                            data-toggle="tab">shipping</a></li>
                </ul>
                <!-- End List And Grid View -->
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="ht__pro__details__content">
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
                        <div class="pro__tab__content__inner">
                            {{ $product->description }}
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="review" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">
                            {{ $product->details }}
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="shipping" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">
                            <p>Formfitting clothing is all about a sweet spot. That elusive place where an item is tight
                                but not clingy, sexy but not cloying, cool but not over the top. Alexandra Alvarez’s
                                label, Alix, hits that mark with its range of comfortable, minimal, and neutral-hued
                                bodysuits.</p>
                            <h4 class="ht__pro__title">Description</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto
                                odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
                                nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam;
                                est usus legentis in iis qui facit eorum claritatem</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor
                                in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat
                                nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                                luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <h4 class="ht__pro__title">Standard Featured</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto
                                odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
                                nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam;
                                est usus legentis in iis qui facit eorum claritatem</p>
                        </div>
                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Description -->
<!-- Start Product Area -->
<section class="htc__product__area--2 pb--100 product-details-res">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">New Arrivals</h2>
                    <p>But I must explain to you how all this mistaken idea</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product__wrap clearfix">
                <!-- Start Single Product -->
                @foreach ($mightAlsoLike as $product)
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="{{ route('shop.show', $product->slug) }}">
                                <img src="/assets/images/product/1.jpg" alt="{{ $product->name }}">
                            </a>
                        </div>
                        <div class="fr__hover__info">
                            <ul class="product__action">
                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                <li>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        @csrf
        
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                        
                                        <a>
                                            <button type="submit" class="cart__btn">
                                                <i class="icon-handbag icons"></i>
                                            </button>
                                        </a>
                                    </form>
                                </li>

                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="fr__product__inner">
                            <h4><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></h4>
                            <ul class="fr__pro__prize">
                                {{-- <li class="old__prize">$30.3</li> --}}
                                <li>{{ $product->price }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Product -->
            </div>
        </div>
    </div>
</section>
<!-- End Product Area -->
<!-- Start Brand Area -->
@include('layouts.partials.brand')
<!-- End Brand Area -->
@endsection