@extends('layouts.login-layout')

@section('title')
    Reset Password 
@endsection

@section('content')

   <div class="signup-form">
   <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-header">
            <h2>{{ __('Reset Password') }}</h2>
            <p>Fill out this form to reset your password!</p>
        </div>
        
        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>

          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
        </div>

        <div class="form-group">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>

              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                                
        </div>  
    </form>
    
   
</div>

@endsection
