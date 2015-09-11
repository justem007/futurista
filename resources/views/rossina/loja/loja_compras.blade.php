@extends('rossina.site.site')

@section('compras')
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i><a href="#">Shopping</a></li>
                <li><i class="fa fa-angle-right"></i><span>Cart</span></li>
            </ul>
        </div>
    </div>

    <section class="b-infoblock">
        <div class="container">
            <div class="row">
                <div class="col-md-9 ">
                    <div class="b-shortcode-example">
                        <div class="f-primary-b b-title-b-hr f-title-b-hr b-null-top-indent">shopping cart</div>
                        <div class="b-product-cart b-default-top-indent b-table-reset j-price-count-box">
                            <table>
                                <tbody>
                                <tr>
                                    <th><span class="f-primary-b">Item</span></th>
                                    <th width="130"><span class="f-primary-b">Price</span></th>
                                    <th width="100"><span class="f-primary-b">Quantity</span></th>
                                    <th width="170"><span class="f-primary-b">Total</span></th>
                                    <th width="70"><span class="f-center"><a class="btn-close-o" href=""><i class="fa fa-times"></i></a></span></th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="b-href-with-img">
                                            <a class="c-primary" href="shop_detail.html">
                                                <img data-retina="" src="img/shop/popular_1.png" alt="">
                                                <p>
                                                    <span class="f-title-small ">Bodycon Dress in Animal </span>
                                                    <span class="f-title-smallest ">Subtitle sample</span>
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td><span class="f-primary-b c-default f-title-medium">$<span class="j-product-price">299.00</span></span></td>
                                    <td class="f-center">
                                        <div class="b-product-card__info_count">
                                            <input type="number" min="1" class="form-control form-control--secondary j-product-count" value="1">
                                        </div>
                                    </td>
                                    <td><span class="f-primary-b c-default f-title-medium">$<span class="j-product-total "></span></span></td>
                                    <td><span class="f-center"><a class="btn-close-o" href=""><i class="fa fa-times"></i></a></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="b-href-with-img">
                                            <a class="c-primary" href="shop_detail.html">
                                                <img data-retina="" src="img/shop/popular_1.png" alt="">
                                                <p>
                                                    <span class="f-title-small ">Bodycon Dress in Animal </span>
                                                    <span class="f-title-smallest ">Subtitle sample</span>
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td><span class="f-primary-b c-default f-title-medium">$<span class="j-product-price">299.00</span></span></td>
                                    <td class="f-center">
                                        <div class="b-product-card__info_count">
                                            <input type="number" min="1" class="form-control form-control--secondary j-product-count" value="1">
                                        </div>
                                    </td>
                                    <td><span class="f-primary-b c-default f-title-medium">$<span class="j-product-total "></span></span></td>
                                    <td><span class="f-center"><a class="btn-close-o" href=""><i class="fa fa-times"></i></a></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="b-href-with-img">
                                            <a class="c-primary" href="shop_detail.html">
                                                <img data-retina="" src="img/shop/popular_1.png" alt="">
                                                <p>
                                                    <span class="f-title-small ">Bodycon Dress in Animal </span>
                                                    <span class="f-title-smallest ">Subtitle sample</span>
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td><span class="f-primary-b c-default f-title-medium">$<span class="j-product-price">299.00</span></span></td>
                                    <td class="f-center">
                                        <div class="b-product-card__info_count">
                                            <input type="number" min="1" class="form-control form-control--secondary j-product-count" value="1">
                                        </div>
                                    </td>
                                    <td><span class="f-primary-b c-default f-title-medium">$<span class="j-product-total "></span></span></td>
                                    <td><span class="f-center"><a class="btn-close-o" href=""><i class="fa fa-times"></i></a></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="b-href-with-img">
                                            <a class="c-primary" href="shop_detail.html">
                                                <img data-retina="" src="img/shop/popular_1.png" alt="">
                                                <p>
                                                    <span class="f-title-small ">Bodycon Dress in Animal </span>
                                                    <span class="f-title-smallest ">Subtitle sample</span>
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td><span class="f-primary-b c-default f-title-medium">$<span class="j-product-price">299.00</span></span></td>
                                    <td class="f-center">
                                        <div class="b-product-card__info_count">
                                            <input type="number" min="1" class="form-control form-control--secondary j-product-count" value="1">
                                        </div>
                                    </td>
                                    <td><span class="f-primary-b c-default f-title-medium">$<span class="j-product-total "></span></span></td>
                                    <td><span class="f-center"><a class="btn-close-o" href=""><i class="fa fa-times"></i></a></span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row b-col-default-indent">
                        <div class="col-md-6 ">
                            <div class="b-product-cart-small">
                                <div class="b-product-cart-small__header">
                                    <div class="f-primary-b c-default f-uppercase f-title-small">Calculate Shipping</div>
                                </div>
                                <div class="b-product-cart-small__content">
                                    <div class="b-product-cart-small__content_row">
                                        <div class="b-form-row--big b-form-select b-select--secondary">
                                            <select class="j-select">
                                                <option>Belarus</option>
                                                <option selected="selected">United Kingdom</option>
                                                <option>Russia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="b-product-cart-small__content_row clearfix">
                                        <div class="b-product-cart-small__content_row-half">
                                            <div class="b-form-row--big b-form-select b-select--secondary">
                                                <select class="j-select">
                                                    <option selected="selected">State/Country</option>
                                                    <option>State 1</option>
                                                    <option>State 2</option>
                                                    <option>State 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="b-product-cart-small__content_row-half">
                                            <div class="b-form-row--big b-form-select b-select--secondary">
                                                <select class="j-select">
                                                    <option selected="selected">Zipcode</option>
                                                    <option>12345</option>
                                                    <option>23456</option>
                                                    <option>34567</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="b-btn f-btn b-btn-sm f-btn-sm b-btn-default f-primary-b">Update</a>
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
                                    <div class="b-product-cart-small__content_info">
                                        <div class="b-product-cart-small__content_info_row">
                                            <div class="b-product-cart-small__content_info_title f-title-smallest c-senary">
                                                Cart subtotal
                                            </div>
                                            <div class="b-product-cart-small__content_info_value f-primary-b c-default f-title-medium">
                                                $ <span class="j-price-total"></span>
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
                                                $ <span class="j-price-total"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="b-tag-container b-right">
                                            <a href="#" class="b-btn f-btn b-btn-sm f-btn-sm b-btn-default f-primary-b button-gray">Process checkout</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="b-shortcode-example">
                        <h4 class="f-primary-b b-h4-special f-h4-special">product related</h4>
                        <div class="row">
                            <div class="b-col-default-indent">
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            <img data-retina src="img/shop/shop_1.png" alt=""/>
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            <img data-retina src="img/shop/shop_2.png" alt=""/>
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            <img data-retina src="img/shop/shop_3.png" alt=""/>
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix hidden-xs"></div>
                            </div>
                        </div>
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