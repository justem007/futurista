@extends('rossina.site.site')
@section('contatos')
    <div class="l-main-container">
        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li><i class="fa fa-angle-right"></i><span> Contact us v2</span></li>
                </ul>
            </div>
        </div>
        <section class="b-google-map map-theme">
            <div class="b-google-map__map-view b-google-map__map-height">
                <!-- Google map load -->
            </div>
            <img data-retina src="img/google-map-marker-default.png" data-label="" class="marker-template hidden" />
            <div class="b-google-map__info-window-template hidden"
                 data-selected-marker="0"
                 data-width="526">
                <div class="b-google-map__info-window col-xs-12">
                    <div class="col-lg-7 col-xs-12 b-google-map__info-window-address">
                        <ul class="list-unstyled">
                            <li class="col-xs-12">
                                <div class="b-google-map__info-window-address-icon f-center pull-left">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div>
                                    <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                        frexy studio
                                    </div>
                                    <div class="desc">1234 Street Name, City Name, United States.</div>
                                </div>
                            </li>
                            <li class="col-xs-12">
                                <div class="b-google-map__info-window-address-icon f-center pull-left">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div>
                                    <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                        portfolio homepage
                                    </div>
                                    <div class="desc">http://yoursite.com</div>
                                </div>
                            </li>
                            <li class="col-xs-12">
                                <div class="b-google-map__info-window-address-icon f-center pull-left">
                                    <i class="fa fa-skype"></i>
                                </div>
                                <div>
                                    <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                        Skype
                                    </div>
                                    <div class="desc">ask.company</div>
                                </div>
                            </li>
                            <li class="col-xs-12">
                                <div class="b-google-map__info-window-address-icon f-center pull-left">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div>
                                    <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                        email
                                    </div>
                                    <div class="desc">mail@example.com</div>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-5 b-google-map__info-window-image hidden-xs hidden-sm hidden-md">
                        <img data-retina src="img/google-map-skyscrapper.png" style="width: 218px; height: 243px;" alt=""/>
                    </div>
                </div>
            </div>
            <div class="b-contact-form container">
                <div class="b-contact-form__window c-primary">
                    <div class="col-xs-12 b-contact-form__window-title f-contact-form__window-title text-uppercase f-primary-b">
                        drop a line
                        <hr />
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="b-contact-form__window-form-row">
                            <label for="contact_form_name" class="b-contact-form__window-form-row-label">Your name</label>
                            <input type="text" class="form-control" id="contact_form_name" />
                        </div>
                        <div class="b-contact-form__window-form-row">
                            <label for="contact_form_email" class="b-contact-form__window-form-row-label">Your email</label>
                            <input type="text" class="form-control" id="contact_form_email" />
                        </div>
                        <div class="b-contact-form__window-form-row">
                            <label for="contact_form_website" class="b-contact-form__window-form-row-label">Your website</label>
                            <input type="text" class="form-control" id="contact_form_website" />
                        </div>
                        <div class="b-contact-form__window-form-row">
                            <label for="contact_form_title" class="b-contact-form__window-form-row-label">Your title</label>
                            <input type="text" class="form-control" id="contact_form_title" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="b-contact-form__window-form-row">
                            <label for="contact_form_message" class="b-contact-form__window-form-row-label">Your message</label>
                            <textarea id="contact_form_message" rows="7" class="b-contact-form__window-form-textarea form-control"></textarea>
                        </div>
                        <div class="b-contact-form__window-form-row">
                            <label for="contact_form_copy" class="b-contact-form__window-form-row-label">
                                <input type="checkbox" id="contact_form_copy" class="b-form-checkbox" />
                                <span><span class="f-primary">Send me a copy</span></span>
                            </label>
                        </div>
                        <div class="b-contact-form__window-form-row">
                            <a href="#" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-contact-form__window-form-row-button">send message</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="b-desc-section-container">
            <section class="container b-welcome-box">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <h1 class="is-global-title f-center">We’d love to hear from you!</h1>
                        <p class="f-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a scelerisque turpis, ut porta turpis. Integer imperdiet aliquet velit, vel tincidunt lectus dictum sed. Curabitur dignissim ut massa vel tincidunt. Nullam imperdiet pharetra ipsum in lobortis. Etiam convallis, felis quis dapibus dictum, libero mauris luctus nunc, non fringilla purus ligula non justo. Nullam </p>
                    </div>
                </div>
            </section>
            <section class="container">
                <div class="b-infoblock-with-icon-group row b-infoblock-with-icon--circle-icon f-infoblock-with-icon--textbox b-infoblock-with-icon--textbox">
                    <div class="col-sm-4">
                        <div class="b-infoblock-with-icon">
                            <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                                <i class="fa fa-comments"></i>
                            </a>
                            <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                                <a href="#" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Forum support</a>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut massa in  Fusce vitae dui sit amet lacus rutrum c lacus rutrum
                                </div>
                                <p><a class="b-btn-strong f-btn-strong f-primary-b" href="#">Read more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="b-infoblock-with-icon">
                            <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                                <i class="fa fa-microphone"></i>
                            </a>
                            <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                                <a href="#" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Free phone support</a>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut massa in  Fusce vitae dui sit amet lacus rutrum c lacus rutrum
                                </div>
                                <p><a class="b-btn-strong f-btn-strong f-primary-b" href="#">Read more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="b-infoblock-with-icon">
                            <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                                <i class="fa fa-play-circle-o"></i>
                            </a>
                            <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                                <a href="#" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Video tutorials</a>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut massa in  Fusce vitae dui sit amet lacus rutrum c lacus rutrum
                                </div>
                                <p><a class="b-btn-strong f-btn-strong f-primary-b" href="#">Read more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="b-diagonal-line-bg-light b-bord-box">
            <section class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="f-primary-b b-title-description f-title-description">like us on facebook</h3>
                        <div class="b-wiget-fb">
                            <div class="b-wiget-fb-content" id="fb-root">
                                <div class="fb-like-box" data-width="285" data-href="https://www.facebook.com/FacebookDevelopers"
                                     data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false"
                                     data-show-border="false"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="f-primary-b b-title-description f-title-description">twitter feeds</h3>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="b-twitter-feeds__item">
                                    <div class="b-twitter-feeds__item_name f-twitter-feeds__item_name f-primary-b"><i
                                                class="fa fa-twitter"></i> frexy studio
                                    </div>
                                    <div class="b-twitter-feeds__item_twit f-twitter-feeds__item_twit">
                                        Lorem ipsum dolor sit amet, consectetur adip iscing elit. Curabitur ut blandit sapien. <a
                                                href="http://t.co/hd3sk" target="_blank">http://t.co/hd3sk</a>
                                    </div>
                                    <div class="b-twitter-feeds__item_date f-twitter-feeds__item_date f-primary-it c-senary">2 days
                                        ago
                                    </div>
                                </div>
                                <div class="b-twitter-feeds__item b-default-top-indent">
                                    <div class="b-twitter-feeds__item_name f-twitter-feeds__item_name f-primary-b"><i
                                                class="fa fa-twitter"></i> John Doe
                                    </div>
                                    <div class="b-twitter-feeds__item_twit f-twitter-feeds__item_twit">
                                        Lorem ipsum dolor sit amet, consectetur adip iscing elit. Curabitur ut blandit sapien. <a
                                                href="http://t.co/hd3sk" target="_blank">http://t.co/hd3sk</a>
                                    </div>
                                    <div class="b-twitter-feeds__item_date f-twitter-feeds__item_date f-primary-it c-senary">2 days
                                        ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
@endsection