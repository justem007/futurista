<div class="l-main-container">
    <div class="b-slidercontainer b-slider">
        <div class="j-fullscreenslider j-arr-hide">
            <ul>
              @foreach($modelSlide as $slide)
                <li data-transition="slotfade-vertical" data-slotamount="7" >
                    <div class="tp-bannertimer"></div>
                    <img data-retina src="img/slider/rossina-estamparia-servicos.png">
                    <div class="caption lft caption-left"  data-x="left" data-y="150" data-hoffset="60" data-speed="700" data-start="2000">
                        <div class="b-slider-lg-info-l__item-title f-slider-lg-info-l__item-title b-slider-lg-info-l__item-title-tertiary">
                            <h2 class="f-primary-l">{{ $slide->nome_slide }}</h2>
                            <h1 class="f-primary-b">{{ $slide->descricao_slide }}</h1>
                        </div>
                    </div>
                    <div class="caption lfl caption-left"  data-x="left" data-y="270" data-speed="1000" data-start="2600">
                        <div class="b-slider-lg-info-l__item-link f-slider-lg-info-l__item-link">
                            <a href="#" class="b-slider-lg-info-l__item-anchor f-slider-lg-info-l__item-anchor f-primary-b">{{ $slide->link_slide }}</a>
                            <span class="b-slider-lg-info-l__item-link-after"><i class="fa fa-chevron-right"></i></span>
                        </div>
                    </div>
                </li>
              @endforeach
            </ul>
        </div>
    </div>
</div>