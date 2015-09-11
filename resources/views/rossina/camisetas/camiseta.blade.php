@extends('rossina.site.site')
@section('store')
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
                    <li><i class="fa fa-angle-right"></i><span>Listing Col</span></li>
                </ul>
            </div>
        </div>

        <section class="b-infoblock">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 ">
                        <div class="b-sort-panel">
                            <div class="b-sort-panel__inner">
                                <form action="#">
                                    <div class="b-select b-left">
                                        <select class="j-select" name="productAtPage" id="productAtPage">
                                            <option>1 products/page</option>
                                            <option>6 products/page</option>
                                            <option selected="selected">9 products/page</option>
                                        </select>
                                    </div>

                                    <div class="b-select b-left">
                                        <select class="j-select" name="productAtPage" id="productAtPage">
                                            <option>Order by price</option>
                                            <option selected="selected">Order by name</option>
                                        </select>
                                    </div>
                                    <div class="b-sort-panel__inner_icon-sort f-sort-panel__inner_icon-sort fa fa-sort-amount-desc"></div>

                                    <div class="b-view-switcher f-view-switcher b-right">
                                        <div class="b-view-switcher_column is-view-switcher__item-active fa fa-th-list"></div>
                                        <div class="b-view-switcher_table fa fa-th"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                                                        <a href="../shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="../shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
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
                                                        <a href="../shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="../shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
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
                                                        <a href="../shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="../shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix hidden-xs"></div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            <img data-retina src="img/shop/shop_4.png" alt=""/>
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="../shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="../shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            <img data-retina src="img/shop/shop_5.png" alt=""/>
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="../shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="../shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            <img data-retina src="img/shop/shop_6.png" alt=""/>
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="../shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="../shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix hidden-xs"></div>
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
                                                        <a href="../shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="../shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            <img data-retina src="img/shop/shop_4.png" alt=""/>
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="../shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="../shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            <img data-retina src="img/shop/shop_5.png" alt=""/>
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="../shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="../shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix hidden-xs"></div>
                            </div>

                            <div class="container">
                                <div class="b-pagination f-pagination">
                                    <ul>
                                        <li><a href="#">First</a></li>
                                        <li><a class="prev" href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="is-active-pagination"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a class="next" href="#"><i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="#">Last</a></li>
                                    </ul>
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