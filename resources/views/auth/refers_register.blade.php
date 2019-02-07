@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <h3>Your Refers Name is {{$refrees->first_name}}&nbsp{{$refrees->last_name}}</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <label for="account_type" class="col-md-4 col-form-label text-md-right">{{ __('Account Type') }}</label>

                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('account_type') ? ' is-invalid' : '' }}" name="account_type"  required autofocus id="account_type"
                                        style="background-color:#1aff1a;" onChange="this.style.backgroundColor=this.options[this.selectedIndex].style.backgroundColor">
                                    <option style="background-color:#1aff1a;" value="free">Free</option>
                                    <option style="background-color:#cd7f32;"  value="bronze">Bronze</option>
                                    <option style="background-color:#c0c0c0;" value="silver">Silver</option>
                                    <option style="background-color:#ffd700;" value="gold">Gold</option>
                                </select>
                                {{--<input id="account_type" type="text" class="form-control{{ $errors->has('account_type') ? ' is-invalid' : '' }}" name="account_type" value="{{ old('first_name') }}" required autofocus>--}}

                                @if ($errors->has('account_type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('account_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

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
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" name="user_name" value="{{ old('user_name') }}" required autofocus>

                                @if ($errors->has('user_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="refers_id" type="hidden" class="form-control{{ $errors->has('refers_id') ? ' is-invalid' : '' }}" name="refers_id" value="{{$refrees->id}}"  autofocus>

                                @if ($errors->has('refers_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('refers_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--=================Hidden Inputs===============--}}

                                <input id="earning_of_refers" type="hidden" class="form-control{{ $errors->has('earning_of_refers') ? ' is-invalid' : '' }}" name="earning_of_refers" value="{{ old('earning_of_refers') }}" autofocus>

                                {{--<input id="refers_id" type="hidden" class="form-control{{ $errors->has('refers_id') ? ' is-invalid' : '' }}" name="refers_id" value="{{$id}}"  autofocus>--}}

                                <input id="user_earning" type="hidden" class="form-control{{ $errors->has('user_earning') ? ' is-invalid' : '' }}" name="user_earning" value="{{ old('user_earning') }}"  autofocus>

                                <input id="account_balance" type="hidden" class="form-control{{ $errors->has('account_balance') ? ' is-invalid' : '' }}" name="account_balance" value="{{ old('account_balance') }}"  autofocus>

                        {{--=================Hidden Inputs Ends==========--}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cinic_no" class="col-md-4 col-form-label text-md-right">{{ __('CNIC No') }}</label>

                            <div class="col-md-6">
                                <input id="cinic_no" type="text" class="form-control{{ $errors->has('cinic_no') ? ' is-invalid' : '' }}" name="cinic_no" value="{{ old('cinic_no') }}" required autofocus>

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
                                <input id="jazz_cash_no" type="text" class="form-control{{ $errors->has('jazz_cash_no') ? ' is-invalid' : '' }}" name="jazz_cash_no" value="{{ old('jazz_cash_no') }}" required autofocus>

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
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>

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
                                <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus>

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
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- Form is END--}}
            </div>
        </div>
    </div>
</div>
@endsection
