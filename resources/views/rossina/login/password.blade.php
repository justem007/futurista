@extends('rossina.site.site')

@section('password')

    <div class="l-main-container">
        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li><i class="fa fa-angle-right"></i><span> Forgotten username/password</span></li>
                </ul>
            </div>
        </div>
        <div class="container b-forgot-password-page">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="b-forgot-password-form">
                        <h3 class="f-primary-l is-global-title">Forgot Username / Password</h3>
                        <p>Enter your email and we'll send you your username.</p>
                        <div class="b-form-row b-form-inline b-form-horizontal b-form-password">
                            <div class="b-form-row">
                                <div class="b-form-horizontal--mail f-form-horizontal--mail">
                                    <i class="fa fa-envelope"></i>
                                    <input type="text" id="create_account_email" class="form-control" placeholder="Email" />
                                </div>
                            </div>
                            <div class="b-form-row">
                                <div>
                                    <a href="#" class="b-btn f-btn button-sm b-btn-default f-primary-b b-btn__w100">Send Me Now</a>
                                </div>
                            </div>
                            <div class="b-form-row">
                                <div class="b-form-horizontal--mail">
                                    <a href="#" class="f-link--color">Contact Online Support?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection