@extends("layout.cilent")
@section('title', 'Thanh Toán')
@section('conten')
@include("site.homepage.bannerCate")

<section class="shop-section shop-right-sidebar section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-xs-12">
                <div class="shop-area clearfix">
                    <div class="">
                        <div class="woocommerce-content-inner">
                            
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

                        <div class="pagination-wrapper">
                            <ul class="pg-pagination">
                            @for($i = 1;$i<= $totalPage;$i++)
                          <li><a href="{{BASE_URL.'category/'.$products[0]->categories->cate_name.'/'.$products[0]->cate_id.'?page='.$i}}">{{$i}} </a></li>
                             @endfor                               
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
@endsection