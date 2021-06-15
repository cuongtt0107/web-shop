@extends("layout.cilent")
@section('title', 'Thanh Toán')
@section('conten')
<section class="checkout-section section-padding">


            <div class="container-1410">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="woocommerce">
                           
                            <form action="{{BASE_URL.'new-invoice'}}" method="post" class="checkout woocommerce-checkout"  enctype="multipart/form-data">
                                <div class="col2-set" id="customer_details">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">

                                            <h3>Billing Details</h3>

                                            <p class="form-row form-row form-row-wide" id="billing_first_name_field">
                                                <label for="billing_first_name" class="">Họ và Tên <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="input-text" name="customer_name">
                                            </p>
                                            
                                            <p class="form-row form-row form-row-wide" id="billing_first_name_field">
                                                <label for="billing_first_name" class="">Email <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="input-text" name="customer_email">
                                            </p>
                                            
                                            <p class="form-row form-row form-row-wide" id="billing_first_name_field">
                                                <label for="billing_first_name" class="">Số Điện Thoại <abbr class="required" title="required">*</abbr></label> <br>
                                                <input type="text" class="input-text" name="customer_phone_number">
                                            </p>
                                            
                                            <p class="form-row form-row form-row-wide" id="billing_first_name_field">
                                                <label for="billing_first_name" class="">Địa chỉ<abbr class="required" title="required">*</abbr></label>
                                                <textarea name="customer_address"  class="input-text"  cols="20" rows="5"></textarea>
                                            </p>
                                            <p class="form-row form-row form-row-wide" id="billing_first_name_field">
                                            <button type="submit"  class="my-5 btn btn-danger form-control" > Thanh toán</button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- order_review_heading -->
                                <h3 id="order_review_heading">Your order</h3>

                                <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @isset($_SESSION['cart'])
                                        @foreach($_SESSION['cart'] as $pr)
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                {{$pr['name']}} x {{$pr['number']}}
                                                <td class="product-total">
                                                    <span class="woocommerce-Price-amount amount">{{ $pr['price']*$pr['number']}} $</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endisset

                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="woocommerce-Price-amount amount">{{isset($_SESSION['tong_tien']) ? $_SESSION['tong_tien'] : ""}} $</span>
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
                                                <td><span class="woocommerce-Price-amount amount">{{isset($_SESSION['tong_tien']) ? $_SESSION['tong_tien'] : ""}} $</span>
                                            </tr>

                                        </tfoot>
                                    </table>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 @endsection       