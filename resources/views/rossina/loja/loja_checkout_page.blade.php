@extends('rossina.site.site')

@section('checkout')

    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
        <div class="b-inner-page-header__content">
            <div class="container">
                <h1 class="f-primary-l c-default">Online store</h1>
                <div class="f-primary-l f-inner-page-header_title-add c-senary">This is online store listing products sample page</div>
            </div>
        </div>
    </div>
    <div class="l-main-container">

        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="#">Shopping</a></li>
                    <li><i class="fa fa-angle-right"></i><span> Check Out</span></li>
                </ul>
            </div>
        </div>

        <section class="b-infoblock">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 ">
                        <div class="b-shortcode-example b-null-bottom-indent">
                            <div class="f-primary-b b-title-b-hr f-title-b-hr b-null-top-indent f-title-medium">check out</div>
                            <div class="row b-shortcode-example b-null-bottom-indent b-col-default-indent">
                                <div class="col-md-6">
                                    <div class="b-product-cart-small">
                                        <div class="b-product-cart-small__header">
                                            <div class="f-primary-b c-default f-uppercase f-title-small">Log in</div>
                                        </div>
                                        <div class="b-product-cart-small__content">
                                            <div class="b-product-cart-small__content_info f-product-cart-small__content_info">
                                                <div class="b-product-cart-small__content_row f-product-cart-small__content_row b-form-row">
                                                    If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.
                                                </div>
                                                <div class="b-product-cart-small__content_row b-form-row clearfix">
                                                    <div class="b-product-cart-small__content_row-half">
                                                        <input type="text" class="form-control form-control--alt" placeholder="Username">
                                                    </div>
                                                    <div class="b-product-cart-small__content_row-half">
                                                        <input type="text" class="form-control form-control--alt" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="b-btn f-btn b-btn-sm f-btn-sm b-btn-default f-primary-b">Log in</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="b-product-cart-small">
                                        <div class="b-product-cart-small__header">
                                            <div class="f-primary-b c-default f-uppercase f-title-small">Cart total</div>
                                        </div>
                                        <div class="b-product-cart-small__content">
                                            <div class="b-product-cart-small__content_info f-product-cart-small__content_info">
                                                <div class="b-product-cart-small__content_row f-product-cart-small__content_row b-form-row">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam felis quis sapien lobortis, sit amet luctus diam adipiscing. Lorem Ipsum has been the industry's standard s
                                                </div>
                                                <div class="b-product-cart-small__content_row b-form-row clearfix">
                                                    <div class="b-product-cart-small__content_row-half">
                                                        <input type="text" class="form-control form-control--alt" placeholder="Enter coupon code">
                                                    </div>
                                                    <div class="b-product-cart-small__content_row-half"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="b-btn f-btn b-btn-sm f-btn-sm b-btn-default f-primary-b">Log in</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row b-col-default-indent">
                            <div class="col-md-6">
                                <div class="b-product-cart-small">
                                    <div class="b-product-cart-small__header">
                                        <div class="f-primary-b c-default f-uppercase f-title-small">Billing adress</div>
                                    </div>
                                    <div class="b-product-cart-small__content">

                                        <div class="b-product-cart-small__content_row b-form-row--big">
                                            <div class="b-form-row b-form-select b-select--alt">
                                                <select class="j-select">
                                                    <option>Belarus</option>
                                                    <option selected="selected">United Kingdom</option>
                                                    <option>Russia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="b-product-cart-small__content_row clearfix">
                                            <div class="b-product-cart-small__content_row-half b-form-row--big">
                                                <input type="text" class="form-control form-control--alt" placeholder="First name">
                                            </div>
                                            <div class="b-product-cart-small__content_row-half b-form-row--big">
                                                <input type="text" class="form-control form-control--alt" placeholder="Last name">
                                            </div>
                                        </div>
                                        <div class="b-product-cart-small__content_row b-form-row--big">
                                            <input type="text" class="form-control form-control--alt" placeholder="Company name">
                                        </div>
                                        <div class="b-product-cart-small__content_row b-form-row--big">
                                            <input type="text" class="form-control form-control--alt" placeholder="Adress">
                                        </div>
                                        <div class="b-product-cart-small__content_row b-form-row--big">
                                            <input type="text" class="form-control form-control--alt" placeholder="City/Town">
                                        </div>
                                        <div class="b-product-cart-small__content_row clearfix">
                                            <div class="b-product-cart-small__content_row-half b-form-row--big">
                                                <input type="text" class="form-control form-control--alt" placeholder="State/Country">
                                            </div>
                                            <div class="b-product-cart-small__content_row-half b-form-row--big">
                                                <input type="text" class="form-control form-control--alt" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="b-form-group b-form-group-inline c-tertiary">
                                            <label for="checkbox-simple-off">
                                                <input type="checkbox" class="b-form-checkbox b-form-checkbox-simple" id="checkbox-simple-off">
                                                <span>Create an account</span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="b-product-cart-small">
                                    <div class="b-product-cart-small__header">
                                        <div class="f-primary-b c-default f-uppercase f-title-small">Billing adress</div>
                                    </div>
                                    <div class="b-product-cart-small__content">

                                        <div class="b-form-group b-form-group-inline c-tertiary">
                                            <label for="checkbox-2">
                                                <input type="checkbox" class="b-form-checkbox b-form-checkbox-simple" id="checkbox-2">
                                                <span>Shipp to billing address</span>
                                            </label>
                                        </div>
                                        <div class="b-product-cart-small__content_row b-form-row--big b-shortcode-example b-null-bottom-indent">
                                            <label class="c-tertiary b-null-bottom-indent">Your message</label>
                                            <div class="b-shortcode-example">
                                                <textarea class="form-control form-control--alt b-product-card-textarea" rows="15"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6">
                                <div class="b-product-cart-small">
                                    <div class="b-product-cart-small__header">
                                        <div class="f-primary-b c-default f-uppercase f-title-small">Cart total</div>
                                    </div>
                                    <div class="b-product-cart-small__content">
                                        <div class="b-product-cart-small__content_info">
                                            <div class="b-product-cart-small__content_info_row">
                                                <div class="b-product-cart-small__content_info_title f-title-smallest c-senary">
                                                    Cart subtotal
                                                </div>
                                                <div class="b-product-cart-small__content_info_value f-primary-b c-default f-title-medium">
                                                    $ <span class="">834</span>
                                                </div>
                                            </div>
                                            <div class="b-product-cart-small__content_info_row">
                                                <div class="b-product-cart-small__content_info_title f-title-smallest c-senary">
                                                    Shipping fee
                                                </div>
                                                <div class="b-product-cart-small__content_info_value f-primary-b c-default f-title-medium">
                                                    0
                                                </div>
                                            </div>
                                            <div class="b-product-cart-small__content_info_row">
                                                <div class="b-product-cart-small__content_info_title f-title-smallest c-senary">
                                                    Order total price
                                                </div>
                                                <div class="b-product-cart-small__content_info_value f-primary-b c-default f-title-medium">
                                                    $ <span class="">834</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="b-shortcode-example">
                            <div class="b-product-cart-small">
                                <div class="b-product-cart-small__content">
                                    <label class="c-primary b-null-bottom-indent">

                                        <p class="b-form-radio--nofloat">
                                            <input checked="checked" class="b-form-radio b-form-radio--big-indent" type="radio" name="payoption" />
                                            <span class=""></span>
                                            <span>Direct Bank Transfer<br/>
                                                <span class="b-secondary-label-title f-secondary-label-title  b-form-radio--big-indent">
                                                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.
                                                </span>
                                            </span>
                                        </p>
                                    </label>
                                </div>
                            </div>
                            <div class="b-product-cart-small">
                                <div class="b-product-cart-small__content">
                                    <label class="c-primary b-null-bottom-indent">
                                        <p>
                                            <input checked="checked" class="b-form-radio b-form-radio--big-indent" type="radio" name="payoption" />
                                            <span class=""></span>
                                            Cheque Payment
                                        </p>
                                    </label>
                                </div>
                            </div>
                            <div class="b-product-cart-small">
                                <div class="b-product-cart-small__content">
                                    <label class="c-primary b-null-bottom-indent">

                                        <p class="b-remaining">
                                            <input checked="checked" class="b-form-radio b-form-radio--big-indent" type="radio" name="payoption" />
                                            <span class=""></span>
                                            Paypal <img data-retina="" class="b-margin-left-standard" src="img/shop/shop_pay.png" alt=""/>
                                        </p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="b-shortcode-example b-null-bottom-indent">
                            <a href="#" class="b-btn f-btn b-btn-sm f-btn-sm b-btn-default f-primary-b">Process checkout</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <aside>
                            <div class="row b-col-default-indent">
                                <div class="col-md-12">
                                    <h4 class="f-primary-b b-h4-special f-h4-special c-primary">product price filter</h4>
                                    <form action="">
                                        <div class="b-slider-range j-slider-range f-slider-range">
                                            <span class="b-slider-range_min">0</span>
                                            <span class="b-slider-range_max">$999</span>
                                        </div>
                                        <a href="#" class="b-btn f-btn b-btn-sm f-btn-sm b-btn-default f-primary-b">Filter</a>
                                    </form>
                                </div>
                                <div class="col-md-12">
                                    <div class="b-categories-filter">
                                        <h4 class="f-primary-b b-h4-special f-h4-special c-primary">Categories filter</h4>
                                        <ul>
                                            <li>
                                                <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Bikini</a>
                                                <span class="b-categories-filter_count f-categories-filter_count">12</span>
                                            </li>
                                            <li>
                                                <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Smart Phone</a>
                                                <span class="b-categories-filter_count f-categories-filter_count">23</span>
                                            </li>
                                            <li>
                                                <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Latop</a>
                                                <span class="b-categories-filter_count f-categories-filter_count">12</span>
                                            </li>
                                            <li>
                                                <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Apple Store</a>
                                                <span class="b-categories-filter_count f-categories-filter_count">23</span>
                                            </li>
                                            <li>
                                                <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Wordpress Theme</a>
                                                <span class="b-categories-filter_count f-categories-filter_count">12</span>
                                            </li>
                                            <li>
                                                <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Web Design</a>
                                                <span class="b-categories-filter_count f-categories-filter_count">23</span>
                                            </li>
                                            <li>
                                                <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Sport</a>
                                                <span class="b-categories-filter_count f-categories-filter_count">12</span>
                                            </li>
                                            <li>
                                                <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Fashion</a>
                                                <span class="b-categories-filter_count f-categories-filter_count">23</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="f-primary-b b-h4-special f-h4-special c-primary">colors filter</h4>
                                    <div class="b-color-picker b-color-picker--alt">
                                        <div class="b-color-picker__box">
                                            <div class="b-color-picker_color_3"></div>
                                            <div class="b-color-picker_color_4"></div>
                                            <div class="b-color-picker_color_5 is-active"></div>
                                            <div class="b-color-picker_color_6"></div>
                                            <div class="b-color-picker_color_7"></div>
                                            <div class="b-color-picker_color_8"></div>
                                            <div class="b-color-picker_color_9"></div>
                                            <div class="b-color-picker_color_10"></div>
                                            <div class="b-color-picker_color_11"></div>
                                            <div class="b-color-picker_color_12"></div>
                                            <div class="b-color-picker_color_13"></div>
                                            <div class="b-color-picker_color_14"></div>
                                            <div class="b-color-picker_color_15"></div>
                                            <div class="b-color-picker_color_16"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="f-primary-b b-h4-special f-h4-special c-primary">popular product</h4>
                                    <div class="b-blog-short-post b-blog-short-post--popular b-blog-short-post--w-img b-blog-short-post--img-hover-bordered f-blog-short-post--w-img row f-blog-short-post--popular">
                                        <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12">
                                            <div class="b-blog-short-post__item_img">
                                                <a href="#"><img data-retina src="img/shop/popular_1.png" alt=""/></a>
                                            </div>
                                            <div class="b-remaining">
                                                <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                                    <a href="#">Bodycon Dress in Animal </a>
                                                </div>
                                                <div class="f-blog-short-post__item_price  f-primary-b">
                                                    $299.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-blog-short-post b-blog-short-post--popular b-blog-short-post--w-img b-blog-short-post--img-hover-bordered f-blog-short-post--w-img row f-blog-short-post--popular">
                                        <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12">
                                            <div class="b-blog-short-post__item_img">
                                                <a href="#"><img data-retina src="img/shop/popular_1.png" alt=""/></a>
                                            </div>
                                            <div class="b-remaining">
                                                <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                                    <a href="#">Bodycon Dress in Animal </a>
                                                </div>
                                                <div class="f-blog-short-post__item_price  f-primary-b">
                                                    $299.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-blog-short-post b-blog-short-post--popular b-blog-short-post--w-img b-blog-short-post--img-hover-bordered f-blog-short-post--w-img row f-blog-short-post--popular">
                                        <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12">
                                            <div class="b-blog-short-post__item_img">
                                                <a href="#"><img data-retina src="img/shop/popular_1.png" alt=""/></a>
                                            </div>
                                            <div class="b-remaining">
                                                <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                                    <a href="#">Bodycon Dress in Animal </a>
                                                </div>
                                                <div class="f-blog-short-post__item_price  f-primary-b">
                                                    $299.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-blog-short-post b-blog-short-post--popular b-blog-short-post--w-img b-blog-short-post--img-hover-bordered f-blog-short-post--w-img row f-blog-short-post--popular">
                                        <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12">
                                            <div class="b-blog-short-post__item_img">
                                                <a href="#"><img data-retina src="img/shop/popular_1.png" alt=""/></a>
                                            </div>
                                            <div class="b-remaining">
                                                <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                                    <a href="#">Bodycon Dress in Animal </a>
                                                </div>
                                                <div class="f-blog-short-post__item_price  f-primary-b">
                                                    $299.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-blog-short-post b-blog-short-post--popular b-blog-short-post--w-img b-blog-short-post--img-hover-bordered f-blog-short-post--w-img row f-blog-short-post--popular">
                                        <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12">
                                            <div class="b-blog-short-post__item_img">
                                                <a href="#"><img data-retina src="img/shop/popular_1.png" alt=""/></a>
                                            </div>
                                            <div class="b-remaining">
                                                <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                                    <a href="#">Bodycon Dress in Animal </a>
                                                </div>
                                                <div class="f-blog-short-post__item_price  f-primary-b">
                                                    $299.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="f-primary-b b-h4-special f-h4-special c-primary">colors filter</h4>
                                    <div>
                                        <a class="f-tag b-tag" href="#">Dress</a>
                                        <a class="f-tag b-tag" href="#">Mini</a>
                                        <a class="f-tag b-tag" href="#">Skate animal</a>
                                        <a class="f-tag b-tag" href="#">Lorem ipsum</a>
                                        <a class="f-tag b-tag" href="#">literature</a>
                                        <a class="f-tag b-tag" href="#">Baroque</a>
                                        <a class="f-tag b-tag" href="#">Dress</a>
                                        <a class="f-tag b-tag" href="#">Mini</a>
                                        <a class="f-tag b-tag" href="#">Skate animal</a>
                                        <a class="f-tag b-tag" href="#">Lorem ipsum</a>
                                        <a class="f-tag b-tag" href="#">literature</a>
                                        <a class="f-tag b-tag" href="#">Baroque</a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection