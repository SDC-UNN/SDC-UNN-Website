@extends('layouts.default')

@section('content')
<main class="mdl--layout__content">
    <div class="page-content">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col"></div>
            <div class="mdl-cell mdl-cell--5-col">
                    <div class="mdl-grid">
                       <div class="mdl-cell mdl-cell--5-col"></div>
                       <div class="mdl-cell mdl-cell--3-col"><h5>Log In</h5></div>
                       <div class="mdl-cell mdl-cell--4-col"></div>
                    </div>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col">Some Texts</div>
                    </div>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--5-col">
                            <button class="mdl-button mdl-button--raised mdl-button--colored">Log with Faceboook</button>
                        </div>
                        <div class="mdl-cell mdl-cell--2-col">

                        </div>
                        <div class="mdl-cell mdl-cell--5-col">
                            <button class="mdl-button mdl-button--raised mdl-button--colored">Log-In with Google</button>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--5-col"><hr></div>
                        <div class="mdl-cell mdl-cell--2-col">OR</div>
                        <div class="mdl-cell mdl-cell--5-col"><hr></div>
                    </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-card mdl-shadow--2dp">
                <!--Heading for Login-->
                    <div class="mdl-card__title">
                        <h5 class="mdl-card__title-text">Login with both email and password</h5>
                    </div>
                <!--Heading for Login-->

                <!--Text Content-->
                    <div class="mdl-card__supporting-text">
                        <form class="form-horizontal" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <!--Start of Textfield-->
                            <div class="mdl-textfield mdl-js-textfield">
                                <!--Email-->
                                <div class="mdl-textfield mdl-js-textfield mdl-cell-12-col">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="mdl-textfield__label">E-Mail Address</label><br/>
                                    <input id="email" type="email" class="mdl-textfield__input" name="email" value="{{ old('email') }}" />

                                       @if ($errors->has('email'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!--Email End-->
                                <br/>
                                <!--Password-->
                                <div class="mdl-textfield mdl-js-textfield mdl-cell-12-col">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="mdl-textfield__label">Password</label>
                                    <input id="password" type="password" class="mdl-textfield__input" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!--Password End-->
                                <br/>
                            </div>
                            <!--Remeber me and Login Row-->
                            <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--6-col">
                                <label class="mdl-checkbox mdl-js-checkbox" for="checkbox">
                                  <input type="checkbox" class="mdl-checkbox__input">
                                  <span class="mdl-checkbox__label">Remember Me</span>
                                </label>
                            </div>
                            <div class="mdl-cell mdl-cell--3-col"></div>
                            <div class="mdl-cell mdl-cell--3-col">
                                <button class="mdl-button mdl-button--raised mdl-button--colored">Login</button>
                            </div>
                            </div>
                            <!--Remeber me and Login Row-->

                            <!--Forgot password sign up-->
                            <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--6-col">
                                <a href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                            <div class="mdl-cell mdl-cell--1-col"></div>
                            <div class="mdl-cell mdl-cell--5-col">
                                <a href="">
                                Don't have an account, Sign Up
                                </a>
                            </div>
                            </div>
                            <!--Forgot password sign up-->
                        </form>
                    </div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--1-col"></div>
        </div>
    </div>
</main>
@endsection
