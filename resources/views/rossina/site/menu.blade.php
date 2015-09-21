<div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->
<header>

    <div class="b-top-options-panel">
        <div class="container">
            <div class="b-option-contacts f-option-contacts">
                <a href="#"><i class="fa fa-calendar"></i> Atendemos de segunda a sexta de 8:00 as 17:00 hrs.</a>
                <a href="#"><i class="fa fa-phone"></i> +55 (21)3245-9607 / (21) 2602-7536 </a>
                <a href="#"><i class="fa fa-space-shuttle"></i> ENTREGAMOS EM TODO BRASIL. |</a>
                <a href="../cadastrar"><i class="fa fa-user"></i>Cadastre-se</a>
                <a href="../login"><i class="fa fa-lock"></i> Login</a>
                <a href="../compras"><i class="fa fa-archive"></i> Minhas Compras </a>
            </div>
        </div>
    </div>
    <div class="container b-header__box b-relative">
        <a href="/" class="b-left b-logo "><img class="color-theme" data-retina src="img/homepage/logo.jpg" alt="Logo" /></a>
        <div class="b-header-r b-right b-header-r--icon">
            <div class="b-header-ico-group f-header-ico-group b-right">
          <span class="b-search-box">
              <i class="fa fa-search"></i>
              <input type="text" placeholder="Enter your keywords"/>
          </span>
          <span class="b-header-ico b-header-ico-cart-parent">
              <a href="#" class="b-fa-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
              <div class="b-option-cart__items">
                  <div class="b-option-cart__items__title f-option-cart__items__title f-default-l">Recently added item(s)</div>
                  <ul>
                      <li>
                          <div class="b-option-cart__items__img">
                              <div class="view view-sixth">
                                  <img data-retina="" src="img/shop/cart_mini_pic.jpg" alt="">
                                  <div class="b-item-hover-action f-center mask">
                                      <div class="b-item-hover-action__inner">
                                          <div class="b-item-hover-action__inner-btn_group">
                                              <a href="../produto_detalhes" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="b-option-cart__items__descr">
                              <strong class="b-option-cart__descr__title f-option-cart__descr__title"><a href="../produto_detalhes">Product Example</a></strong>
                              <span class="b-option-cart__descr__cost f-option-cart__descr__cost">1 x $239</span>
                          </div>
                          <i class="fa fa-times b-icon--fa"></i>
                      </li>
                      <li>
                          <div class="b-option-cart__items__img">
                              <div class="view view-sixth">
                                  <img data-retina="" src="img/shop/cart_mini_pic.jpg" alt="">
                                  <div class="b-item-hover-action f-center mask">
                                      <div class="b-item-hover-action__inner">
                                          <div class="b-item-hover-action__inner-btn_group">
                                              <a href="../produto_detalhes" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="b-option-cart__items__descr">
                              <strong class="b-option-cart__descr__title f-option-cart__descr__title"><a href="../produto_detalhes">Product Example</a></strong>
                              <span class="b-option-cart__descr__cost f-option-cart__descr__cost">1 x $239</span>
                          </div>
                          <i class="fa fa-times b-icon--fa"></i>
                      </li>
                  </ul>
                  <div class="b-option-cart__btn">
                      <button class="button-xs button-gray-light">Cancel</button>
                      <a href="../compras_checkout"> <button class="button-xs">Check out  </button></a>
                  </div>
              </div>
          </span>
            </div>
            <div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i class="fa fa-align-justify"></i></div>
            <nav class="b-top-nav f-top-nav b-right j-top-nav">
                <ul class="b-top-nav__1level_wrap">


                    <li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b"><a href="/"><i class="fa fa-home b-menu-1level-ico"></i>Home <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                        <div class="b-top-nav__dropdomn">
                            <ul class="b-top-nav__2level_wrap">
                                <li class="b-top-nav__2level_title f-top-nav__2level_title is-active-top-nav__2level-title">Página Principal</li>
                            </ul>
                        </div>
                    </li>
                    @foreach($modelMenu as $menu)
                        <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                            <a href="{!! route('$menu->link_menu') !!}"><i class="fa fa-folder-open b-menu-1level-ico"></i>{{ $menu->nome_menu }}<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                            <div class="b-top-nav__dropdomn">
                                <ul class="b-top-nav__2level_wrap">
                                    <li class="b-top-nav__2level_title f-top-nav__2level_title">{{ $menu->descricao_menu }}</li>
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </nav>
        </div>
    </div>
</header>
<div class="j-menu-container"></div>