@extends("layout.cilent")
@section('conten')
@include("site.homepage.slider")
    @include("site.homepage.dichvu")
<section class="home-pg-prodcut-section section-padding">
            <div class="container-1410">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <h2>Our products</h2>
                            <p>Preorder now to receive exclusive deals & gifts</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <!-- Nav tabs -->
                        <div class="tablinks">
                            <ul>
                                <li class="active">
                                    <a href="#tab-1" data-toggle="tab">New Arrival</a>
                                </li>
                                <li>
                                    <a href="#tab-2" data-toggle="tab">Best sellers</a>
                                </li>
                                <li>
                                    <a href="#tab-3" data-toggle="tab">Sale product</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane in active" id="tab-1">
                            <ul class="products">
                            @foreach($products as $item)
                                <li class="product">
                                        <div class="product-holder">
                                            <a href="{{BASE_URL.'product/'.$item->id}}"><img src="{{ BASE_URL.$item->image }}" alt></a>
                                            <div class="shop-action-wrap">
                                                <ul class="shop-action">
                                                    <li><a   title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                    <li><a  title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                    <li><a onclick="add_cart(<?= $item->id ?>)"  title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4><a href="{{BASE_URL.'product/'.$item->id}}">{{$item->name}}</a></h4>
                                            <span class="woocommerce-Price-amount amount">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi><span class="woocommerce-Price-currencySymbol">$</span>{{$item->price}}</bdi>
                                                    </span>
                                                </ins>
                                            </span>
                                        </div>
                                        <div class="quick-view-single-product">
                                            <div class="view-single-product-inner clearfix">
                                                <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                <div class="img-holder">
                                                    <img src="{{ BASE_URL.$item->image}}" alt>
                                                </div>
                                                <div class="product-details">
                                                    <h4>{{$item->name}}</h4>
                                                    <div class="price">
                                                        <span class="current">${{$item->price}}</span>
                                                    </div>
                                                    <p>{{$item->detail}}</p>
                                                    <div class="product-option">
                                                        <form class="form">
                                                            <div class="product-row">
                                                                <div>
                                                                    <input class="product-count" type="text"  >
                                                                </div>
                                                                <div>
                                                                    <button onclick="add_cart(<?= $item->id ?>)" >Add to cart</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div> 
                                                    
                                                </div>
                                            </div>
                                        </div> <!-- end quick-view-single-product -->
                                    </li>
                                @endforeach
                            </ul>
                            </div>

                            <div class="tab-pane fade" id="tab-2">
                            <ul class="products">
                            @foreach($products as $item)
                                <li class="product">
                                        <div class="product-holder">
                                            <a href="{{BASE_URL.'product/'.$item->id}}"><img src="{{ BASE_URL.$item->image }}" alt></a>
                                            <div class="shop-action-wrap">
                                                <ul class="shop-action">
                                                    <li><a   title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                    <li><a  title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                    <li><a onclick="add_cart(<?= $item->id ?>)"  title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4><a href="{{BASE_URL.'product/'.$item->id}}">{{$item->name}}</a></h4>
                                            <span class="woocommerce-Price-amount amount">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi><span class="woocommerce-Price-currencySymbol">$</span>{{$item->price}}</bdi>
                                                    </span>
                                                </ins>
                                            </span>
                                        </div>
                                        <div class="quick-view-single-product">
                                            <div class="view-single-product-inner clearfix">
                                                <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                <div class="img-holder">
                                                    <img src="{{ BASE_URL.$item->image}}" alt>
                                                </div>
                                                <div class="product-details">
                                                    <h4>{{$item->name}}</h4>
                                                    <div class="price">
                                                        <span class="current">${{$item->price}}</span>
                                                    </div>
                                                    <p>{{$item->detail}}</p>
                                                    <div class="product-option">
                                                        <form class="form">
                                                            <div class="product-row">
                                                                <div>
                                                                    <input class="product-count" type="text"  >
                                                                </div>
                                                                <div>
                                                                    <button onclick="add_cart(<?= $item->id ?>)" >Add to cart</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div> 
                                                    
                                                </div>
                                            </div>
                                        </div> <!-- end quick-view-single-product -->
                                    </li>
                                @endforeach
                            </ul>                                 
                            </div>

                            <div class="tab-pane fade" id="tab-3">
                            <ul class="products">
                            @foreach($products as $item)
                                <li class="product">
                                        <div class="product-holder">
                                            <a href="{{BASE_URL.'product/'.$item->id}}"><img src="{{ BASE_URL.$item->image }}" alt></a>
                                            <div class="shop-action-wrap">
                                                <ul class="shop-action">
                                                    <li><a   title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                    <li><a  title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                    <li><a onclick="add_cart(<?= $item->id ?>)"  title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4><a href="{{BASE_URL.'product/'.$item->id}}">{{$item->name}}</a></h4>
                                            <span class="woocommerce-Price-amount amount">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi><span class="woocommerce-Price-currencySymbol">$</span>{{$item->price}}</bdi>
                                                    </span>
                                                </ins>
                                            </span>
                                        </div>
                                        <div class="quick-view-single-product">
                                            <div class="view-single-product-inner clearfix">
                                                <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                <div class="img-holder">
                                                    <img src="{{ BASE_URL.$item->image}}" alt>
                                                </div>
                                                <div class="product-details">
                                                    <h4>{{$item->name}}</h4>
                                                    <div class="price">
                                                        <span class="current">${{$item->price}}</span>
                                                    </div>
                                                    <p>{{$item->detail}}</p>
                                                    <div class="product-option">
                                                        <form class="form">
                                                            <div class="product-row">
                                                                <div>
                                                                    <input class="product-count" type="text"  >
                                                                </div>
                                                                <div>
                                                                    <button onclick="add_cart(<?= $item->id ?>)" >Add to cart</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div> 
                                                    
                                                </div>
                                            </div>
                                        </div> <!-- end quick-view-single-product -->
                                    </li>
                                @endforeach
                            </ul>
                            </div>

                        </div> <!-- end tab-content -->

                        <div class="more-products text-center">
                            <a href="#" class="theme-btn">More products</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end container-1410 -->
 </section>
 @include("site.homepage.trochoi")
        @include("site.homepage.partners")
        @include("site.homepage.blog")
@endsection
