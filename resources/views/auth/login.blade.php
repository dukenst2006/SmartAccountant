@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('adminlte_css_pre')
<link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@stop

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url',
'password/reset') )

@if (config('adminlte.use_route_url', false))
@php( $login_url = $login_url ? route($login_url) : '' )
@php( $register_url = $register_url ? route($register_url) : '' )
@php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
@php( $login_url = $login_url ? url($login_url) : '' )
@php( $register_url = $register_url ? url($register_url) : '' )
@php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif

@section('auth_body')
<div class="log-in-t">
    <div class="container " dir="ltr">
        <div class="  main-login flex-column">

            <div class="  login-cont">
                <div class="mb-4 mt-5 text-center">
                    <img class="login-logo" src="{{asset('images/logo.png')}}" alt="">
            </div>
            <div class=" login-div ">
                <div class="my-shadow form-fog pb-0">
                    <div class=" content-log min-sky">
                        <div class="">
                            <h5 class=" text-center mb-3 log-dir font-weight-normal"> من فضلك قم بتسجل الدخول
                            </h5>
                        </div>
                        <form class="login-form" action="{{ $login_url }}" method="post" dir="rtl">
                            {{ csrf_field() }}
                            <div class="form-group d-flex justify-content-start align-items-center">
                                <input type="email" name="email"
                                    class="form-control  border-left-0 d-flex input-field-2  icon-left   {{ $errors->has('email') ? 'is-invalid' : '' }}  "
                                    placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
                                <i
                                    class="icofont-user-alt-4  icon-color  form-control d-flex justify-content-center align-items-center icons-input   icon-right border-right-0 {{ config('adminlte.classes_auth_icon', '') }}"></i>
                            </div>
                            @if($errors->has('email'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                            @endif


                            <div class="form-group d-flex justify-content-start align-items-center mb-3">
                                <input type="password" name="password"
                                    class="form-control   input-field-2  icon-left  border-left-0 {{ $errors->has('password') ? 'is-invalid' : '' }} "
                                    placeholder="{{ __('adminlte::adminlte.password') }}">
                                <i
                                    class="icofont-ui-lock  icon-color form-control d-flex justify-content-center align-items-center icons-input  icon-right border-right-0 {{ config('adminlte.classes_auth_icon', '') }}"></i>
                            </div>
                            @if($errors->has('password'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                            @endif


                            <div class="">
                                <div class="icheck-primary">
                                    <input type="checkbox" name="remember" id="remember">
                                    <label for="remember">{{ __('adminlte::adminlte.remember_me') }}</label>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type=submit
                                    class="btn btn-block text-center py-2 btn-bl {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}"><span
                                        class="fas fa-sign-in-alt"></span>
                                    {{ __('adminlte::adminlte.sign_in') }}</button>
                            </div>
                        </form>
                        @stop
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>





@section('auth_footer')
{{-- Password reset link --}}
@if($password_reset_url)
<p class="my-0">
    <a href="{{ $password_reset_url }}">
        {{ __('adminlte::adminlte.i_forgot_my_password') }}
    </a>
</p>
@endif

{{-- Register link --}}
@if($register_url)
<p class="my-0">
    <a href="{{ $register_url }}">
        {{ __('adminlte::adminlte.register_a_new_membership') }}
    </a>
</p>
@endif
@stop
