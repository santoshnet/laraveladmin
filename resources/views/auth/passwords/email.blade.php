@extends('layouts.login-layout')

@section('title')
    Reset Password 
@endsection

@section('content')

   <div class="signup-form">
       @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

        <div class="form-header">
            <h2>{{ __('Reset Password') }}</h2>
            <p>Fill out your email to reset your password!</p>
        </div>
        
        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>

         <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>
       
        <div class="form-group">
           <button type="submit" class="btn btn-primary">
                {{ __('Send Password Reset Link') }}
            </button>
                                
        </div>  
    </form>
      <div class="text-center small">Go to <a href="../login">Login here</a></div>
</div>

@endsection
