@extends("layout.cilent")
@section('title', 'Giỏ Hàng ')
@section('conten')
<div class="container-1410">
    <div class="row">
        <div class="col col-xs-12">
            <div class="woocommerce">
                <div id="div1">
                    <table class="shop_table shop_table_responsive cart" id="cartx">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Number</th>
                                <th scope="col">Action</th>
                                <th scope="col">into money</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_SESSION['tong_tien'] = 0; ?>
                            @isset($_SESSION['cart'])

                            @foreach($_SESSION['cart'] as $pr)

                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
                                <td>{{$pr['name']}}</td>
                                <td><img width="50" src="{{$pr['image']}}" alt=""></td>
                                <td>{{$pr['price']}} $</td>
                                <td><input onchange="updateCart(<?php echo $pr['id'] ?>)" id="number_<?php echo $pr['id'] ?>" type="number" value="{{$pr['number']}}"></td>
                                <td><button onclick="xoa(<?php echo $pr['id'] ?>)" class="btn">xóa</button></td>
                                <td>{{
          $pr['price']*$pr['number']
        }} VND</td>
                            </tr>
                            <?php $_SESSION['tong_tien'] += $pr['price'] * $pr['number'];

                            ?>
                            @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
                <div class="cart-collaterals">
                <div id="div2">
                    <div class="cart_totals calculated_shipping" id="tien">
                        <h2>Cart Totals</h2>
                        <table class="shop_table shop_table_responsive" >
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">£</span>{{$_SESSION['tong_tien']}}</span>
                                    </td>
                                </tr>
                                <tr class="shipping">
                                    <th>Shipping</th>
                                    <td data-title="Shipping">
                                        Free Shipping                                       
                                    </td>
                                </tr>

                                <tr class="order-total">
                                    <th>Total</th>
                                    <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>{{$_SESSION['tong_tien']}}</span></strong> </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="wc-proceed-to-checkout">
                            <a href="{{
                                BASE_URL.'checkout'
                            }}" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection