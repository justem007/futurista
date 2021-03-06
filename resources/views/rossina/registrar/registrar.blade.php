@extends('rossina.site.site')

@section('registrar')


    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
        <div class="b-inner-page-header__content">
            <div class="container">
                <h1 class="f-primary-l c-default">Cadastre uma nova conta</h1>
            </div>
        </div>
    </div>
    <div class="l-main-container">
        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Extra pages</a></li>
                    <li><i class="fa fa-angle-right"></i><span> Register an account</span></li>
                </ul>
            </div>
        </div>
        <div class="container b-container-login-page">
            <div class="row">
                <div class="col-md-6">
                    <div class="b-form-row f-primary-l f-title-big c-secondary">Create an account</div>
                    <div class="b-form-row">Consectetur adipiscing elituis sagittis eu mi et pellentesqueur</div>
                    <hr class="b-hr" />
                    <div class="row b-form-inline b-form-horizontal">
                        <div class="col-xs-12">
                            <div class="b-form-row">
                                <label class="b-form-horizontal__label" for="create_account_email">Your Email</label>
                                <div class="b-form-horizontal__input">
                                    <input type="text" id="create_account_email" class="form-control" />
                                </div>
                            </div>
                            <div class="b-form-row">
                                <label class="b-form-horizontal__label" for="create_account_password">Your password</label>
                                <div class="b-form-horizontal__input">
                                    <input type="text" id="create_account_password" class="form-control" />
                                </div>
                            </div>
                            <div class="b-form-row">
                                <label class="b-form-horizontal__label" for="create_account_confirm">Confirm password</label>
                                <div class="b-form-horizontal__input">
                                    <input type="text" id="create_account_confirm" class="form-control" />
                                </div>
                            </div>
                            <div class="b-form-row">
                                <label class="b-form-horizontal__label" for="create_account_phone">Phone Number</label>
                                <div class="b-form-horizontal__input">
                                    <input type="text" id="create_account_phone" class="form-control" />
                                </div>
                            </div>
                            <div class="b-form-row">
                                <label class="b-form-horizontal__label" for="create_account_location">Location</label>
                                <div class="b-form-horizontal__input">
                                    <input type="text" id="create_account_location" class="form-control" />
                                </div>
                            </div>
                            <div class="b-form-row">
                                <label class="b-form-horizontal__label" for="create_account_name">Your name</label>
                                <div class="b-form-horizontal__input">
                                    <input type="text" id="create_account_name" class="form-control" />
                                </div>
                            </div>
                            <div class="b-form-row">
                                <div class="b-form-horizontal__label"></div>
                                <div class="b-form-horizontal__input">
                                    <label for="create_account_terms">
                                        <input type="checkbox" class="b-form-checkbox b-form-checkbox" id="create_account_terms" />
                                        <span>I agree to <a href="#" class="c-secondary f-more">Terms of Use</a></span>
                                    </label>
                                </div>
                            </div>
                            <div class="b-form-row">
                                <div class="b-form-horizontal__label"></div>
                                <div class="b-form-horizontal__input">
                                    <a href="#" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">sign up now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="f-primary-l f-title-big c-secondary">Welcome to Frexy Studio</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis eu mi et pellentesque. Curabitur vestibulum convallis orci, quis dapibus elit fringilla eget. Suspendisse posuere diam ut erat convallis, non dictum quam luctus. </p>
                    <div class="b-shortcode-example">
                        <ul class="b-list-markers f-list-markers">
                            <li><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> <a href="#">Fusce viverra nisl eu nisl suscipit dictum.</a></li>
                            <li><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> <a href="#">Morbi vehicula massa ut libero laoreet faucibus.</a></li>
                            <li><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> <a href="#">Nullam a felis volutpat, gravida est eget, ultrices velit.</a></li>
                            <li><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> <a href="#">Proin egestas nibh luctus dui cursus, sit amet vestibulum massa dignissim.</a></li>
                            <li><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> <a href="#">Etiam facilisis sapien ut ornare euismod.</a></li>
                        </ul>
                    </div>
                    <div class="b-logo-partner-box">
                        <div class="b-logo-item"><a href="#">
                                <img class="is-normal" src="img/slider/partner/client-logo-5.png" alt=""/>
                                <img class="is-hover" src="img/slider/partner/client-logo-5h.png" alt=""/>
                            </a></div>
                        <div class="b-logo-item"><a href="#">
                                <img class="is-normal" src="img/slider/partner/client-logo-4.png" alt=""/>
                                <img class="is-hover" src="img/slider/partner/client-logo-4h.png" alt=""/>
                            </a></div>
                        <div class="b-logo-item"><a href="#">
                                <img class="is-normal" src="img/slider/partner/client-logo-1.png" alt=""/>
                                <img class="is-hover" src="img/slider/partner/client-logo-1h.png" alt=""/>
                            </a></div>
                        <div class="b-logo-item"><a href="#">
                                <img class="is-normal" src="img/slider/partner/client-logo-2.png" alt=""/>
                                <img class="is-hover" src="img/slider/partner/client-logo-2h.png" alt=""/>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection