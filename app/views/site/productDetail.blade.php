@extends("layout.cilent")
@section('title', 'Chi tiết sản phẩm ')
@section('conten')
@include("site.homepage.bannerProduct")
<section class="shop-single-section section-padding">
    <div class="container-1410">
        <div class="row">
            <div class="col col-md-6 py-3">
                <img src="{{BASE_URL.$productDetail->image}}" alt="">
            </div>
            <div class="col col-md-6">
                <div class="product-details">
                    <h2>{{$productDetail->name}}</h2>
                    <div class="price">
                        <span class="current">${{$productDetail->price}}</span>
                    </div>
                    <div class="rating">
                        <i class="fi flaticon-star"></i>
                        <i class="fi flaticon-star"></i>
                        <i class="fi flaticon-star"></i>
                        <i class="fi flaticon-star"></i>
                        <i class="fi flaticon-star-social-favorite-middle-full"></i>
                        <span>(2 Customer review)</span>
                    </div>
                    <p>{{$productDetail->detail}}</p>
                <!-- from to cart -->
                    <div class="product-option">
                        <div class="form">
                            <div class="product-row">
                                <div>
                                </div>
                                <div>
                                <button onclick="add_cart(<?= $productDetail->id ?>)" >Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="thb-product-meta-before">
                        <div class="add-to-wishlist">
                            <a href="#" class="add_to_wishlist">
                                <i class="pe-7s-like"></i>
                                <span>Add To Wishlist</span>
                            </a>
                        </div>

                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                            <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                            <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
         </div> <!-- end row -->
        <!-- end row -->
        <div class="row">
            <div class="col col-xs-12">
                <div class="realted-porduct">
                    <h3>Related product</h3>
                    <ul class="products">
                    @foreach($relatedProduct as $item)
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
                                                                    <input class="product-count" type="text" value="1" name="product-count-8">
                                                                </div>
                                                                <div>
                                                                    <button onclick="add_cart(<?= $item->id ?>)" type="submit">Add to cart</button>
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
            </div>
        </div>
    </div> <!-- end of container -->
</section>
@endsection

