@extends('layouts.app')

@section('content')
<section class="position-relative pb-0">
        <div class="gen-register-page-background" style="background-image: url('images/background/asset-3.jpg');">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <form id="pms_register-form" action="{{ route('register') }}" class="pms-form" method="POST">
                            @csrf
                            <h4>{{ __('Register') }}</h4>
                            
                            <ul class="pms-form-fields-wrapper pl-0">
                                <li class="pms-field pms-user-login-field ">
                                    <label for="pms_user_login">{{ __('Name') }}</label>
                                    <input id="pms_user_login" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus type="text" >
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </li>
                                <li class="pms-field pms-user-email-field ">
                                    <label for="pms_user_email">{{ __('E-Mail Address') }}</label>
                                    <input id="pms_user_email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </li>
                                <li class="pms-field pms-pass1-field">
                                    <label for="pms_pass1">{{ __('Password') }}</label>
                                    <input id="pms_pass1" name="password" required autocomplete="new-password" type="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </li>
                                <li class="pms-field pms-pass2-field">
                                    <label for="pms_pass2">{{ __('Confirm Password') }}</label>
                                    <input id="pms_pass2" name="password_confirmation" required autocomplete="new-password" type="password">
                                </li>
                                <li class="pms-field pms-field-subscriptions ">
                                    <div class="pms-subscription-plan"><label><input type="radio"
                                                name="subscription_plans" data-price="199" data-duration="1"
                                                value="7330" checked="checked" data-default-selected="true"><span
                                                class="pms-subscription-plan-name">Premium</span><span
                                                class="pms-subscription-plan-price"><span class="pms-divider"> -
                                                </span><span class="pms-subscription-plan-price-value">199</span><span
                                                    class="pms-subscription-plan-currency">$</span><span
                                                    class="pms-divider"> / </span>1 Month</span><span
                                                class="pms-subscription-plan-trial"></span><span
                                                class="pms-subscription-plan-sign-up-fee"></span></label></div>
                                    <div class="pms-subscription-plan"><label><input type="radio"
                                                name="subscription_plans" data-price="99" data-duration="1" value="7329"
                                                data-default-checked="false"><span
                                                class="pms-subscription-plan-name">Standard</span><span
                                                class="pms-subscription-plan-price"><span class="pms-divider"> -
                                                </span><span class="pms-subscription-plan-price-value">99</span><span
                                                    class="pms-subscription-plan-currency">$</span><span
                                                    class="pms-divider"> / </span>1 Month</span><span
                                                class="pms-subscription-plan-trial"></span><span
                                                class="pms-subscription-plan-sign-up-fee"></span></label></div>
                                    <div class="pms-subscription-plan"><label><input type="radio"
                                                name="subscription_plans" data-price="29" data-duration="1" value="7328"
                                                data-default-checked="false"><span
                                                class="pms-subscription-plan-name">Basic</span><span
                                                class="pms-subscription-plan-price"><span class="pms-divider"> -
                                                </span><span class="pms-subscription-plan-price-value">29</span><span
                                                    class="pms-subscription-plan-currency">$</span><span
                                                    class="pms-divider"> / </span>1 Month</span><span
                                                class="pms-subscription-plan-trial"></span><span
                                                class="pms-subscription-plan-sign-up-fee"></span></label></div>
                                    <div id="pms-paygates-wrapper"><input type="hidden" class="pms_pay_gate"
                                            name="pay_gate" value="paypal_standard"></div>
                                </li>
                            </ul>
                            <span id="pms-submit-button-loading-placeholder-text" class="d-none">Processing. Please
                                wait...</span>
                                <button type="submit" class="btn orange-btn">
                                    {{ __('Register') }}
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
