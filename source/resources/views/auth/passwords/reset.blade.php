@extends('layouts.auth')

@section('content')
    <div class="section">
        <div class="valign-wrapper mh-75vh">
            <div class="container valign">
                <div class="row">

                    <div class="col l6 offset-l0 m10 offset-m1 s10 offset-s1">
                        <div class="row center-align">
                            <h4>You're almost done</h4>
                            <h6>
                                Tips for setting strong password...
                            </h6>
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col s12">
                            </div>
                        </div>
                    </div>

                    <form class="col l5 offset-l1 m10 offset-m1 s10 offset-s1 valign white z-depth-half" role="form" method="POST"
                          action="{{ url()->route('auth.password.reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row">
                            <div class="col s12">
                                <h6 class="font-bold">Reset Password</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password_confirmation" name="password_confirmation" type="text" class="validate">
                                <label for="password_confirmation">Password Confirmation</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col m6 s12">
                                <span class="left">
                                    <input type="checkbox" name="logout" class="filled-in" id="logout" checked="checked" />
                                    <label for="logout">Log me out of other devices</label>
                                </span>
                            </div>
                            <div class="col m6 s12">
                                <button type="submit" class="btn z-depth-half right">
                                    Reset Password
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
