@extends('dashboard')
@section('right_panel')
    <div class="card">
    <div class="card-header bg-success">{{ __('Edit Profile') }}</div>
    <div class="card-body">
        <form method="POST" action="{{route('profile.update',$user->id)}}">
                            @csrf
            <fieldset disabled>
                <div class="form-group row">

                    <label for="account_type"class="col-md-4 col-form-label text-md-right">{{ __('Account Type') }}</label>
                    <div class="col-md-6">
                        <input id="account_type" type="text" class="form-control{{ $errors->has('account_type') ? ' is-invalid' : '' }}" name="account_type" value="{{ $user->account_type}}" required autofocus>

                        @if ($errors->has('account_type'))
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('account_type') }}</strong>
                    </span>
                        @endif
                    </div>
                    {{--<div class="col-md-6 ">--}}
                        {{--<select class="form-control{{ $errors->has('account_type') ? ' is-invalid' : '' }}" name="account_type"  required autofocus id="account_type">--}}
                            {{--<option value="bronze">Bronze</option>--}}
                            {{--<option value="silver">Silver</option>--}}
                            {{--<option value="gold">Gold</option>--}}
                        {{--</select>--}}
                        {{--<input id="account_type" type="text" class="form-control{{ $errors->has('account_type') ? ' is-invalid' : '' }}" name="account_type" value="{{ old('first_name') }}" required autofocus>--}}

                        {{--@if ($errors->has('account_type'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                        {{--<strong>{{ $errors->first('account_type') }}</strong>--}}
                    {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{$user->first_name}}" required autofocus>

                    @if ($errors->has('first_name'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                <div class="col-md-6">
                    <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{$user->last_name}}" required autofocus>

                    @if ($errors->has('last_name'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <fieldset disabled>
                <div class="form-group row">
                    <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                    <div class="col-md-6">
                        <input id="user_name" type="text" class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" name="user_name" value="{{$user->user_name}}" required autofocus>

                        @if ($errors->has('user_name'))
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('user_name') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>
            </fieldset>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$user->email}}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>

            {{--<div class="form-group row">--}}
                {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                {{--<div class="col-md-6">--}}
                    {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"value="{{$user->password}}" name="password" required>--}}

                    {{--@if ($errors->has('password'))--}}
                        {{--<span class="invalid-feedback" role="alert">--}}
                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                    {{--</span>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="form-group row">--}}
                {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                {{--<div class="col-md-6">--}}
                    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="form-group row">
                <label for="cinic_no" class="col-md-4 col-form-label text-md-right">{{ __('CNIC No') }}</label>

                <div class="col-md-6">
                    <input id="cinic_no" type="text" class="form-control{{ $errors->has('cinic_no') ? ' is-invalid' : '' }}" name="cinic_no" value="{{$user->cinic_no}}" required autofocus>

                    @if ($errors->has('cinic_no'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cinic_no') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="jazz_cash_no" class="col-md-4 col-form-label text-md-right">{{ __('Jazz Cash No') }}</label>

                <div class="col-md-6">
                    <input id="jazz_cash_no" type="text" class="form-control{{ $errors->has('jazz_cash_no') ? ' is-invalid' : '' }}" name="jazz_cash_no" value="{{$user->jazz_cash_no}}" required autofocus>

                    @if ($errors->has('jazz_cash_no'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('jazz_cash_no') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                <div class="col-md-6">
                    <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{$user->country}}" required autofocus>

                    @if ($errors->has('country'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('country') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                <div class="col-md-6">
                    <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{$user->state}}" required autofocus>

                    @if ($errors->has('state'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('state') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                <div class="col-md-6">
                    <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{$user->city}}" required autofocus>

                    @if ($errors->has('city'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-success">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
    </div>
@endsection