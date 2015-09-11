@extends('rossina.site.site')

@section('login')
    <div class="l-main-container">
        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Extra pages</a></li>
                    <li><i class="fa fa-angle-right"></i><span>Sign In v2</span></li>
                </ul>
            </div>
        </div>
        <div class="container b-container-login-page">
            <div class="row">
                <div class="col-md-6">
                    <div class="b-log-in-form">
                        <div class="f-primary-l f-title-big c-secondary">Create an account</div>
                        <p>Consectetur adipiscing elituis sagittis eu mi et pellentesqueurabitur vestibulum</p>
                        <hr class="b-hr" />
                        <div class="b-form-row b-form-inline b-form-horizontal">
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
                                    <div class="b-form-horizontal__label"></div>
                                    <label for="contact_form_copy" class="b-contact-form__window-form-row-label">
                                        <input type="checkbox" id="contact_form_copy" class="b-form-checkbox" />
                                        <span>Remember me</span>
                                    </label>
                                </div>
                                <div class="b-form-row">
                                    <div class="b-form-horizontal__label"></div>
                                    <div class="b-form-horizontal__input">
                                        <a href="#" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">sign in now</a>
                                    </div>
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
                            <li><a href="cadastrar"><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> Criar uma nova conta</a></li>
                            <li><a href="username"><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> Recuperar o seu username</a></li>
                            <li><a href="password"><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> Recuperar o seu password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection