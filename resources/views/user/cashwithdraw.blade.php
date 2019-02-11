@extends('dashboard')

@section('right_panel')
    <div class="card">
        <div class="card-header text-success">
          <h3>
              My Account - Withdraw / Cash Your Earnings
          </h3>
        </div>
        <div class="card-body">
            <form class="form-group" method="post" action="">
                @csrf
                <fieldset disabled>
                    <div class="form-group row">
                        <label for="jazz_cash_no" class="col-md-3 col-form-label text-md-right">{{ __('Jazz Cash No:') }}</label>

                        <div class="col-md-6">
                            <input id="jazz_cash_no" type="text" class="form-control{{ $errors->has('jazz_cash_no') ? ' is-invalid' : '' }}" name="jazz_cash_no" value="{{$user->jazz_cash_no}}" required autofocus>

                            @if ($errors->has('jazz_cash_no'))
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('jazz_cash_no') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="withdraw_amount" class="col-md-3 col-form-label text-md-right">{{ __('WithDraw Amount:') }}</label>

                    <div class="col-md-6">
                        <input id="withdraw_amount" type="text" class="form-control{{ $errors->has('withdraw_amount') ? ' is-invalid' : '' }}" name="withdraw_amount" value="{{old('withdraw_amount') }}" required autofocus>
                        <small class="form-text text-muted">For withdraw you must earn at least $ 20.</small>
                        @if ($errors->has('withdraw_ammount'))
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('withdraw_ammount') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-3 offset-md-3">
                        <button type="submit" class="btn btn-success">
                            {{ __('With Draw') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection