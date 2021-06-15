@extends("layout.cilent")
@section('title', 'Giỏ Hàng ')
@section('conten')
  <section class="contact-section contact-pg-section section-padding">
            <div class="container-1410">
                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="contact-info">
                        <h2>Đơn hàng đang chuyển </h2> <br>
                            <ul>
                                <li>
                                    <i class="pe-7s-culture"></i>
                                    <h4>Địa chỉ nhận hàng</h4>
                                    <p>{{$invoice->customer_address}}</p>
                                </li>
                                <li>
                                    <i class="pe-7s-phone"></i>
                                    <h4>SDT</h4>
                                    <p>{{$invoice->customer_phone_number}}</p>
                                </li>
                                <li>
                                    <i class="pe-7s-mail"></i>
                                    <h4>Email </h4>
                                    <p>{{$invoice->customer_email}}</p>
                                </li>
                                
                            </ul>
                        </div>

                        <div class="contact-form-col">
                            <h2>Sản phẩm của bạn</h2>
                            <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Image</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($invoiceDetail as $pr)
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                {{$pr->product->name . " x $pr->quanity"}}
                                                </td>
                                                <td >
                                                <img width="50px" src="{{BASE_URL.$pr->product->image}}" alt="">
                                                </td>
                                                <td class="product-total">
                                                    <span class="woocommerce-Price-amount amount">{{$pr->unit_price}}$</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            

                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="woocommerce-Price-amount amount">{{$invoice->total_price}} $</span>
                                                </td>
                                            </tr>

                                            <tr class="shipping">
                                                <th>Shipping</th>
                                                <td data-title="Shipping">
                                                    Free Shipping
                                                    <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="free_shipping:1" class="shipping_method" />
                                                </td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td><span class="woocommerce-Price-amount amount">{{$invoice->total_price}} $</span>
                                            </tr>

                                        </tfoot>
                                    </table>
                                    
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection