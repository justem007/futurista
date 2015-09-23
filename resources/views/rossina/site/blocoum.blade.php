<section class="b-infoblock f-center b-diagonal-line-bg-light">
    <div class="container">
        @foreach($tituloBloco as $titulo)
        <h2 class="f-primary-l">{{ $titulo->nome_titulobloco }}</h2>
        <p class="b-desc-section f-desc-section f-secondary-l f-small">{{ $titulo->descricao_titulobloco }}</p>
        @endforeach
        <div class="b-some-examples f-some-examples b-some-examples-secondary f-some-examples-secondary f-secondary row">
          @foreach($blocoumModel as $blocoum)
            <div class="col-sm-4 col-xs-12">
                <div class="b-some-examples__item b-bg-transparent f-some-examples__item">
                    <div class="b-some-examples__item_img view view-sixth">
                        <a href="#"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/homepage/camisetas-pretas-brancas.png" alt=""/></a>
                        <div class="b-item-hover-action f-center mask">
                            <div class="b-item-hover-action__inner">
                                <div class="b-item-hover-action__inner-btn_group">
                                    <a href="blog_detail_right_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-some-examples__item_info">
                        <div class="b-some-examples__item_info_level b-some-examples__item_name f-some-examples__item_name f-primary-b"><a href="#">{{ $blocoum->nome_blocoum }}</a></div>
                        <div class="b-some-examples__item_info_level b-some-examples__item_description f-some-examples__item_description">
                            {{ $blocoum->descricao_blocoum }}
                        </div>

                    </div>
                </div>
            </div>
          @endforeach
        </div>

        @foreach($ferModel as $fer)
        <div class="col-sm-4 col-xs-12">
            <div class="b-app-with-img__item">
                <div class="b-app-with-img__item_img view view-sixth">
                    <a href="#"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/homepage/app1_1.jpg" alt=""/></a>
                    <div class="b-item-hover-action f-center mask">
                        <div class="b-item-hover-action__inner">
                            <div class="b-item-hover-action__inner-btn_group">
                                <a href="img/homepage/big/app_1.jpg" class="b-btn f-btn b-btn-light f-btn-light info fancybox" title="Mobile games" rel="group2"><i class="fa fa-arrows-alt"></i></a>
                                <a href="portfolio_our_portfolio_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-app-with-img__item_text f-center">
                    <div class="b-app-with-img__item_name f-app-with-img__item_name f-primary-b"><a href="portfolio_our_portfolio_detail.html">{{ $fer->nome_ferramenta }}</a></div>
                    <div class="b-app-with-img__item_info f-app-with-img__item_info f-primary">{{ $fer->descricao_ferramenta }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>