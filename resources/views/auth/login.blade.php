@extends('layouts.panelcommon')

@section('body')
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
        <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
            <div class="m-stack m-stack--hor m-stack--desktop">
                <div class="m-stack__item m-stack__item--fluid">
                    <div class="m-login__wrapper">
                        <div class="m-login__logo">
                            <a href="#">
                                <div class="col-md-6 offset-md-3" >
                                    <img class="" style="width:70%; height:70%;" src="/img/logo.png">
                                </div>
                            </a>
                        </div>
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">
                                   ورود به پنل کاربری
                                </h3>
                            </div>
                            <form class="m-login__form m-form" action="{{ route('login') }}" method="POST">

                                @csrf

                                <div class="form-group m-form__group">
                                    <input class="form-control m-input " type="email" placeholder="ایمیل" name="email" autocomplete="off">
                                    @if ($errors->has('email'))
                                        <div class="form-control-feedback  text-danger">{{ $errors->first('email') }}</div>
                                    @endif

                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="رمز عبور" name="password">
                                    @if ($errors->has('password'))
                                        <div class="form-control-feedback  text-danger">{{ $errors->first('password') }}</div>
                                    @endif

                                </div>

                                <div class="m-login__form-action">
                                    <button class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                        ورود
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="d-none d-md-block m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url({{asset('img/test.style.jpg')}});background-size: cover;background-position: center;">
            <div class="m-grid__item m-grid__item--middle">
            </div>
        </div>
    </div>
</div>

<style>
    body{
        direction: ltr !important;
    }
    .m-login__wrapper{
        direction: rtl !important;
    }
</style>


@endsection
